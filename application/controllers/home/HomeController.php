<?php
class HomeController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/HomeModel');
		$selectdata = $this->HomeModel->getProduct();
		$data["productData"] = $selectdata;

		$this->load->model('home/HomeModel');
		$selectdata = $this->HomeModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('home/HomeModel');
		$selectdata = $this->HomeModel->showLimitProduct();
		$data["showProductData"] = $selectdata;

		$this->load->model('home/HomeModel');
		$selectAnswerdata = $this->HomeModel->getAnswerData();
		$data["getAnswerData"] = $selectAnswerdata;

		$this->load->view('home/Home',$data);
	}
}
?>