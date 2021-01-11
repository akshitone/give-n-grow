<?php
	class QuestionController extends CI_Controller
	{
		public function viewQuestion()
		{
			$this->load->model('home/QuestionModel');
			$selectdata = $this->QuestionModel->selectCatData();
			$data["categoryData"] = $selectdata;
		
			$this->load->view("home/Question",$data);
		}
		public function insertData()
		{
			$data=array(
				"FarmerId" => $this->session->userdata["farmerloggedin"]["FarmerId"],
				"CategoryId" => $this->input->post("txtcattype"),
				"Title" => $this->input->post("txttitle"),
				"Description" => $this->input->post("txtdescription")
			);
			$this->load->model('home/QuestionModel');
			$id = $this->QuestionModel->insert($data);
			if($id>0)
			{
				//image upload
				$r=$this->uploadImage("txturl",$id);
				if($r>0)
				{
					$this->session->set_flashdata("add","Your query or question Inserted Successfull!!");
					$this->viewQuestion();
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
			$config['upload_path'] = './uploads/question/';
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
				$this->load->model('home/QuestionModel');
				$this->QuestionModel->UpdateImageName($new_name,$id);
				return true;
			}
		}
	}
?>