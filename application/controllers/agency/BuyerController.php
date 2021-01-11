<?php

class BuyerController extends CI_Controller
{
	public function add()
	{
		$this->load->view('agency/BuyerAdd');
	}
	public function insertData()
	{
		$name= $this->input->post("txtbuyername");
		$agency= $this->session->userdata["agencyloggedin"]["AgencyName"];
		$data=array(
			"BuyerName" => $name,
			"BuyerContact" => $this->input->post("txtbuyercontact"),
			"BuyerAddress" => $this->input->post("txtbuyeraddress"),
			"BuyerCode" => $this->input->post("txtbuyercode")
		);
		$this->load->model('agency/BuyerModel');
		$id = $this->BuyerModel->insert($data);
		if($id>0)
		{
			//image upload
			$r=$this->uploadImage("txtbuyericon",$id);
			if($r>0)
			{
				$this->session->set_flashdata("add","Inserted Successfull!!");
				$this->load->model('agency/BuyerModel');
				$selectdata = $this->BuyerModel->sendNotification($name,$agency);
				$this->add();
			}
			else
			{
				echo "Image Upload Error";
			}
			//image upload
		}
		else
		{
			echo "error";
		}
	}
	public function uploadImage($filename,$id)
	{
		$config['upload_path'] = './uploads/buyer/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		
		if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
			$this->load->model('agency/BuyerModel');
			$this->BuyerModel->UpdateImageName($new_name,$id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('agency/BuyerModel');
		$selectdata = $this->BuyerModel->selectData();
		$data["buyerData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('agency/BuyerTable',$data);
	}
	public function updateData()
	{
		$data=array(
			"BuyerName" => $this->input->post("txtbuyername"),
			"BuyerContact" => $this->input->post("txtbuyercontact"),
			"BuyerAddress" => $this->input->post("txtbuyeraddress"),
			"BuyerCode" => $this->input->post("txtbuyercode")
		);
		$id=$this->input->post("txtbuyerid");
		$this->load->model('agency/BuyerModel');
		$this->BuyerModel->saveData($data,$id);
		if(isset($_FILES['txtbuyericon']) && !empty($_FILES['txtbuyericon']['name']))
		{
			//image upload
			$r=$this->uploadImage("txtbuyericon",$id);
			$this->session->set_flashdata("add","Inserted Successfull!!");
			$this->index();
		}
		else
		{
			$this->index();
		}
	}
	public function update($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('agency/BuyerModel');
		$selectdata = $this->BuyerModel->updateData($id);
		$data["buyerData"]=$selectdata;
		$this->load->view('agency/BuyerEdit',$data);
	}
	public function delete($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('agency/BuyerModel');
		$this->BuyerModel->deleteData($id);
		$this->session->set_flashdata("delete","Deleted!");
		redirect('/agency/BuyerController/index');
	}
	public function view($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		//echo "id: ".$id;
		$this->load->model('agency/BuyerModel');
		$selectdata = $this->BuyerModel->viewData($id);
		$data["buyerData"]=$selectdata;
		
		$sell = $this->BuyerModel->viewSellerData($id);
		$data["sellerData"] = $sell;
		$this->load->view('agency/BuyerView',$data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('agency/BuyerModel');
		$this->BuyerModel->UpdateNo($id);
		redirect("/agency/BuyerController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('agency/BuyerModel');
		$this->BuyerModel->UpdateYes($id);
		redirect("/agency/BuyerController/index");
	}
}
