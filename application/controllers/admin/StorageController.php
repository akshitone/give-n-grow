<?php

class StorageController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/StorageModel');
		$selectdata = $this->StorageModel->selectData();
		$data["storageData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/StorageTable', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/StorageModel');
		$this->StorageModel->UpdateNo($id);
		redirect("/admin/StorageController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/StorageModel');
		$this->StorageModel->UpdateYes($id);
		redirect("/admin/StorageController/index");
	}
}
