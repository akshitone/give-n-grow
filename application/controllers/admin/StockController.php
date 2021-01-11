<?php
class StockController extends CI_Controller
{
    public function index()
	{
		$this->load->model('admin/StockModel');
		$selectdata = $this->StockModel->selectData();
		$data["productData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/StockTable',$data);
	}
}
