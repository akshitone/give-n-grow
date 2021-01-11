<?php
class FeedbackController extends CI_Controller
{
	public function index()
	{
		$this->load->view('home/Feedback');
	}
	public function insertData()
	{
		$data=array(
			"UserName" => $this->input->post("txtusername"),
			"EmailId" => $this->input->post("txtemail"),
			"Feedback" => $this->input->post("txtfeedback")
		);
		$this->load->model('home/FeedbackModel');
		$res = $this->FeedbackModel->insert($data);
		if($res==1)
		{
			$this->session->set_flashdata("add","Feedback Inserted Successfully!!");
			$this->index();
		}
		else
		{
			echo "error";
		}
	}
}
?>