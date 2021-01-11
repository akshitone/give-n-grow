<?php
class ChartController extends CI_Controller
{
	public function index()
	{
		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->getStorageChart();
		$data["productData"] = $selectdata;
		$this->load->view('admin/Chart',$data);
	}
}
?>