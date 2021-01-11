<?php
class SingleProductController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->view('home/SingleProduct',$data);
	}
}
?>