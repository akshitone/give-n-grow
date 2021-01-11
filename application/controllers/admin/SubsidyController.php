<?php

class SubsidyController extends CI_Controller
{
	public function add()
	{
		$this->load->model('admin/SubsidyModel');
		$selectdata = $this->SubsidyModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/SubsidyAdd', $data);
	}
	public function insertData()
	{
		$data = array(
			"CategoryId" => $this->input->post("txtcatid"),
			"Title" => $this->input->post("txttitle"),
			"Description" => $this->input->post("txtsubsidydesc"),
			"Address" => $this->input->post("txtaddress"),
			"Contact" => $this->input->post("txtcontact"),
			"ApplicationLink" => $this->input->post("txtapplink")
		);
		$this->load->model('admin/SubsidyModel');
		$id = $this->SubsidyModel->insert($data);
		if ($id > 0) {
			//image upload
			$r = $this->uploadImage("txtimage", $id);
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
		$config['upload_path'] = './uploads/subsidy/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/SubsidyModel');
			$this->SubsidyModel->UpdateImageName($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/SubsidyModel');
		$selectdata = $this->SubsidyModel->selectData();
		$data["subsidyData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/SubsidyTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"CategoryId" => $this->input->post("txtcatid"),
			"Title" => $this->input->post("txttitle"),
			"Description" => $this->input->post("txtsubsidydesc"),
			"Address" => $this->input->post("txtaddress"),
			"Contact" => $this->input->post("txtcontact"),
			"ApplicationLink" => $this->input->post("txtapplink")
		);
		$this->load->model('admin/SubsidyModel');
		$id = $this->input->post("txtsubsidyid");
		$this->SubsidyModel->saveData($data, $id);
		$this->index();
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

		$this->load->model('admin/SubsidyModel');
		$selectdata = $this->SubsidyModel->updateData($id);
		$data["subsidyData"] = $selectdata;

		$this->load->model('admin/SubsidyModel');
		$selectdata = $this->SubsidyModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/SubsidyEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/SubsidyModel');
		$this->SubsidyModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/SubsidyModel/index');
	}
}
