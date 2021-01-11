<?php 

class NotificationController extends CI_Controller
{
    public function index()
	{
		$this->load->model('admin/NotificationModel');
		$selectdata = $this->NotificationModel->selectData();
		$data["notificationData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/Notification',$data);
    }
    public function view()
	{
		$this->load->view('admin/Notification');
    }
    public function addAgency()
	{
        $this->load->model('admin/AgencyModel');
		$selectdata = $this->AgencyModel->selectData();
        $data["agencyData"] = $selectdata;
       
		$this->load->view('admin/NotificationAddAgency',$data);
	}
	public function addFarmer()
	{
        $this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->selectData();
		$data["farmerData"] = $selectdata;
		
		$this->load->view('admin/NotificationAddFarmer',$data);
	}
	public function addExpert()
	{
		$this->load->model('admin/ExpertModel');
		$selectdata = $this->ExpertModel->selectData();
		$data["expertData"] = $selectdata;

		$this->load->view('admin/NotificationAddExpert',$data);
	}
	public function insertAgency()
	{
		$data=array(
            "AgencyId" => $this->input->post("txtagencyid"),
			"Title" => $this->input->post("txttitle"),
			"Description" => $this->input->post("txtdescription")
		);
		$this->load->model('admin/NotificationModel');
		$id = $this->NotificationModel->insert($data);
		if($id>0)
		{
			$this->session->set_flashdata("add","Inserted Successfull!!");
			$this->addAgency();
		}
		else
		{
			echo "error";
		}
    }
    public function insertFarmer()
	{
		$data=array(
            "FarmerId" => $this->input->post("txtfarmerid"),
			"Title" => $this->input->post("txttitle"),
			"Description" => $this->input->post("txtdescription")
		);
		$this->load->model('admin/NotificationModel');
		$id = $this->NotificationModel->insert($data);
		if($id>0)
		{
			$this->session->set_flashdata("add","Inserted Successfull!!");
			$this->addFarmer();
		}
		else
		{
			echo "error";
		}
	}
	public function insertExpert()
	{
		$data=array(
            "ExpertId" => $this->input->post("txtexpertid"),
			"Title" => $this->input->post("txttitle"),
			"Description" => $this->input->post("txtdescription")
		);
		$this->load->model('admin/NotificationModel');
		$id = $this->NotificationModel->insert($data);
		if($id>0)
		{
			$this->session->set_flashdata("add","Inserted Successfull!!");
			$this->addExpert();
		}
		else
		{
			echo "error";
		}
    }
}
