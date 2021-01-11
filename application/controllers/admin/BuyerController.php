<?php

class BuyerController extends CI_Controller
{
	public function add()
	{
		$this->load->view('admin/BuyerAdd');
	}
	public function insertData()
	{
		$data = array(
			"BuyerName" => $this->input->post("txtbuyername"),
			"BuyerContact" => $this->input->post("txtbuyercontact"),
			"BuyerAddress" => $this->input->post("txtbuyeraddress"),
			"BuyerCode" => $this->input->post("txtbuyercode")
		);
		$this->load->model('admin/BuyerModel');
		$id = $this->BuyerModel->insert($data);
		if ($id > 0) {
			//image upload
			$r = $this->uploadImage("txtbuyericon", $id);
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
		$config['upload_path'] = './uploads/buyer/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/BuyerModel');
			$this->BuyerModel->UpdateImageName($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/BuyerModel');
		$selectdata = $this->BuyerModel->selectData();
		$data["buyerData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/BuyerTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"BuyerName" => $this->input->post("txtbuyername"),
			"BuyerContact" => $this->input->post("txtbuyercontact"),
			"BuyerAddress" => $this->input->post("txtbuyeraddress"),
			"BuyerCode" => $this->input->post("txtbuyercode")
		);
		$id = $this->input->post("txtbuyerid");
		$this->load->model('admin/BuyerModel');
		$this->BuyerModel->saveData($data, $id);
		if (isset($_FILES['txtbuyericon']) && !empty($_FILES['txtbuyericon']['name'])) {
			//image upload
			$r = $this->uploadImage("txtbuyericon", $id);
			$this->session->set_flashdata("add", "Inserted Successfull!!");
			$this->index();
		} else {
			$this->index();
		}
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/BuyerModel');
		$selectdata = $this->BuyerModel->updateData($id);
		$data["buyerData"] = $selectdata;
		$this->load->view('admin/BuyerEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/BuyerModel');
		$this->BuyerModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/BuyerController/index');
	}
	public function view($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		//echo "id: ".$id;
		$this->load->model('admin/BuyerModel');
		$selectdata = $this->BuyerModel->viewData($id);
		$data["buyerData"] = $selectdata;

		$sell = $this->BuyerModel->viewSellerData($id);
		$data["sellerData"] = $sell;
		$this->load->view('admin/BuyerView', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/BuyerModel');
		$this->BuyerModel->UpdateNo($id);
		redirect("/admin/BuyerController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/BuyerModel');
		$this->BuyerModel->UpdateYes($id);
		redirect("/admin/BuyerController/index");
	}
}
