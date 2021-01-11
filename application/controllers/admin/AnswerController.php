<?php
class AnswerController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/AnswerModel');
		$selectdata = $this->AnswerModel->selectData();
		$data["answerData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/AnswerTable', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/AnswerModel');
		$this->AnswerModel->UpdateNo($id);
		redirect("/admin/AnswerController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/AnswerModel');
		$this->AnswerModel->UpdateYes($id);
		redirect("/admin/AnswerController/index");
	}
}
