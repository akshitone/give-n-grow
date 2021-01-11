<?php

class SellerController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/SellerModel');
		$selectdata = $this->SellerModel->selectData();
		$data["sellerData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/SellerTable', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/SellerModel');
		$this->SellerModel->UpdateNo($id);
		redirect("/admin/SellerController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/SellerModel');
		$this->SellerModel->UpdateYes($id);
		redirect("/admin/SellerController/index");
	}
}
