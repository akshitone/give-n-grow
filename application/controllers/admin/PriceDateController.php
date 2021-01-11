<?php

class PriceDateController extends CI_Controller
{
	public function add()
	{
		$this->load->model('admin/PriceDateModel');
		$selectdata = $this->PriceDateModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/PriceDateAdd', $data);
	}
	public function getProductData($catid)
	{
		$this->load->model('admin/PriceDateModel');
		$selectdata = $this->PriceDateModel->getProductBasedOnCategory($catid);
		$html = "<option>Select Product</option>";
		foreach ($selectdata as $item) {
			$html .= "<option value='" . $item->ProductId . "'>" . $item->ProductName . "</option>";
		}
		echo $html;
	}
	public function insertData()
	{
		$data = array(
			"ProductId" => $this->input->post("txtproductid"),
			"PriceDate" => $this->input->post("txtpricedate"),
			"BuyerPrice1" => $this->input->post("txtbuyerprice1"),
			"SellerPrice1" => $this->input->post("txtsellerprice1"),
			"BuyerPrice2" => $this->input->post("txtbuyerprice2"),
			"SellerPrice2" => $this->input->post("txtsellerprice2"),
			"BuyerPrice3" => $this->input->post("txtbuyerprice3"),
			"SellerPrice3" => $this->input->post("txtsellerprice3")
		);
		$this->load->model('admin/PriceDateModel');
		$res = $this->PriceDateModel->insert($data);
		if ($res == 1) {
			$this->session->set_flashdata("add", "Inserted Successfully!!");
			$this->add();
		} else {
			echo "error";
		}
	}
	public function index()
	{
		$this->load->model('admin/PriceDateModel');
		$selectdata = $this->PriceDateModel->selectData();
		$data["pricedateData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/PriceDateTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"ProductId" => $this->input->post("txtproductid"),
			"PriceDate" => $this->input->post("txtpricedate"),
			"BuyerPrice1" => $this->input->post("txtbuyerprice1"),
			"SellerPrice1" => $this->input->post("txtsellerprice1"),
			"BuyerPrice2" => $this->input->post("txtbuyerprice2"),
			"SellerPrice2" => $this->input->post("txtsellerprice2"),
			"BuyerPrice3" => $this->input->post("txtbuyerprice3"),
			"SellerPrice3" => $this->input->post("txtsellerprice3")
		);
		$this->load->model('admin/PriceDateModel');
		$id = $this->input->post("txtpriceid");
		$this->PriceDateModel->saveData($data, $id);
		$this->index();
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/PriceDateModel');
		$selectdata = $this->PriceDateModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('admin/PriceDateModel');
		$selectdata = $this->PriceDateModel->updateData($id);
		$data["pricedateData"] = $selectdata;

		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->selectData();
		$data["productData"] = $selectdata;

		$this->load->view('admin/PriceDateEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/PriceDateModel');
		$this->PriceDateModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/PriceDateController/index');
	}
}
