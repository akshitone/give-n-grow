<?php
class FeedbackController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/FeedbackModel');
		$selectdata = $this->FeedbackModel->selectData();
		$data["feedbackData"] = $selectdata;
		$this->load->view('admin/FeedbackTable',$data);
	}
}
?>