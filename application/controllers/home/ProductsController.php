<?php
class ProductsController extends CI_Controller
{
	public function viewProduct($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectSingleData($id);
		$data["productData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('home/PriceDateModel');
		$selectdata = $this->PriceDateModel->viewProductPrice($id);
		$data["pricedateData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectRelatedData();
		$data["relatedProductData"] = $selectdata;

		$this->load->view('home/SingleProduct',$data);
	}
	public function index()
	{
		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectData();
		$data["productData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->library('encryption');

		$this->load->view('home/Products',$data);
	}
	public function vegetables()
	{
		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectVegData();
		$data["productData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->view('home/ProductsCategory',$data);
	}
	public function fruits()
	{
		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectFruitsData();
		$data["productData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('home/ProductModel');
		$selectdata = $this->ProductModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->view('home/ProductsCategory',$data);
	}
}
?>