<?php

class ProductController extends CI_Controller
{
	public function add()
	{
		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/ProductAdd', $data);
	}
	public function insertData()
	{
		$data = array(
			"CategoryId" => $this->input->post("txtcatid"),
			"ProductName" => $this->input->post("txtproductname"),
			"ProductDescription" => $this->input->post("txtproductdesc"),
			"Weight" => $this->input->post("txtproductweight")
		);
		$this->load->model('admin/ProductModel');
		$id = $this->ProductModel->insert($data);
		if ($id > 0) {
			//image upload
			$r = $this->uploadImage("txtproducticon", $id);
			if ($r > 0) {
				$this->session->set_flashdata("add", "Inserted Successfull!!");
				$this->add();
			} else {
				echo "Image Upload Error";
			}
			//image upload
		} else {
			echo "error";
		}
	}
	public function uploadImage($filename, $id)
	{
		$config['upload_path'] = './uploads/product/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			echo "return";
			return false;
		} else {
			$this->load->model('admin/ProductModel');
			$this->ProductModel->UpdateImageName($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->selectData();
		$data["productData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/ProductTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"CategoryId" => $this->input->post("txtcatid"),
			"ProductName" => $this->input->post("txtproductname"),
			"ProductDescription" => $this->input->post("txtproductdesc"),
			"Weight" => $this->input->post("txtproductweight")
		);
		$id = $this->input->post("txtproductid");
		$this->load->model('admin/ProductModel');
		$this->ProductModel->saveData($data, $id);
		if (isset($_FILES['txtproducticon']) && !empty($_FILES['txtproducticon']['name'])) {
			//image upload
			$r = $this->uploadImage("txtproducticon", $id);
			$this->session->set_flashdata("add", "Inserted Successfull!!");
			$this->index();
		} else {
			$this->index();
		}
	}
	public function view($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->viewData($id);
		$data["productData"] = $selectdata;
		$storage = $this->ProductModel->viewStorageData($id);
		$data["storageData"] = $storage;
		$sell = $this->ProductModel->viewSellerData($id);
		$data["sellerData"] = $sell;
		$this->load->view('admin/ProductView', $data);
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->updateData($id);
		$data["productData"] = $selectdata;

		$this->load->model('admin/ProductModel');
		$selectdata = $this->ProductModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/ProductEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ProductModel');
		$this->ProductModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/ProductController/index');
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ProductModel');
		$this->ProductModel->UpdateNo($id);
		redirect("/admin/ProductController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ProductModel');
		$this->ProductModel->UpdateYes($id);
		redirect("/admin/ProductController/index");
	}
}
