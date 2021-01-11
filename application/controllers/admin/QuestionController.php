<?php
class QuestionController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/QuestionModel');
		$selectdata = $this->QuestionModel->selectData();
		$data["questionData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/QuestionTable', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/QuestionModel');
		$this->QuestionModel->UpdateNo($id);
		redirect("/admin/QuestionController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/QuestionModel');
		$this->QuestionModel->UpdateYes($id);
		redirect("/admin/QuestionController/index");
	}
}
