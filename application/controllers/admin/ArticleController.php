<?php
class ArticleController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/ArticleModel');
		$selectdata = $this->ArticleModel->selectData();
		$data["articleData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/ArticleTable', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ArticleModel');
		$this->ArticleModel->UpdateNo($id);
		redirect("/admin/ArticleController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ArticleModel');
		$this->ArticleModel->UpdateYes($id);
		redirect("/admin/ArticleController/index");
	}
}
