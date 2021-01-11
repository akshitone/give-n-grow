<?php

class FarmerController extends CI_Controller
{
    public function index()
	{
		$this->load->view('home/FarmerAdd');
    }
    public function insertData()
	{
		$name= $this->input->post("txtfarmername");
		$data=array(
			"FarmerName" => $name,
			"FarmerContact" => $this->input->post("txtfarmercontact"),
			"FarmerAddress" => $this->input->post("txtfarmeraddress"),
			"Password" => $this->input->post("txtfarmerpassword"),
			"AadharNumber" => $this->input->post("txtfarmeraadharno")
		);
		$this->load->model('home/FarmerModel');
		$id = $this->FarmerModel->insert($data);
		if($id>0)
		{
			//image upload
            $r=$this->uploadFarmerImage("txtfarmericon",$id);
            $r=$this->uploadAadharFrontImage("txtaadharfrontimg",$id);
            $r=$this->uploadAadharBackImage("txtaadharbackimg",$id);
			if($r>0)
			{
				$this->session->set_flashdata("add","Farmer Details are Inserted Successfully!!");
				$this->load->model('home/FarmerModel');
				$selectdata = $this->FarmerModel->sendNotification($name);
				$this->index();
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
	public function uploadFarmerImage($filename,$id)
	{
		$config['upload_path'] = './uploads/farmer/';
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
			$this->load->model('home/FarmerModel');
			$this->FarmerModel->UpdateFarmerImage($new_name,$id);
			return true;
		}
    }
    public function uploadAadharFrontImage($filename,$id)
	{
		$config['upload_path'] = './uploads/id/';
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
			$this->load->model('home/FarmerModel');
			$this->FarmerModel->uploadAadharFrontImage($new_name,$id);
			return true;
		}
    }
    public function uploadAadharBackImage($filename,$id)
	{
		$config['upload_path'] = './uploads/id/';
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
			$this->load->model('home/FarmerModel');
			$this->FarmerModel->uploadAadharBackImage($new_name,$id);
			return true;
		}
	}
}

?>