<?php

class CategoryController extends CI_Controller
{
	public function add()
	{
		$this->load->view('admin/CategoryAdd');
	}
	public function insertData()
	{
		$data = array(
			"CategoryType" => $this->input->post("txtcattype"),
			"CategoryName" => $this->input->post("txtcatname")
		);
		$this->load->model('admin/CategoryModel');
		$id = $this->CategoryModel->insert($data);
		if ($id > 0) {
			//image upload
			$r = $this->uploadImage("txtcaticon", $id);
			if ($r > 0) {
				$this->session->set_flashdata("add", "Inserted Successfull!!");
				$this->load->view('admin/CategoryAdd');
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
		$config['upload_path'] = './uploads/category/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/CategoryModel');
			$this->CategoryModel->UpdateImageName($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/CategoryModel');
		$selectdata = $this->CategoryModel->selectData();
		$data["categoryData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/CategoryTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"CategoryType" => $this->input->post("txtcattype"),
			"CategoryName" => $this->input->post("txtcatname")
		);
		$id = $this->input->post("txtcatid");
		$this->load->model('admin/CategoryModel');
		$this->CategoryModel->saveData($data, $id);
		if (isset($_FILES['txtcaticon']) && !empty($_FILES['txtcaticon']['name'])) {
			//image upload
			$r = $this->uploadImage("txtcaticon", $id);
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

		$this->load->model('admin/CategoryModel');
		$selectdata = $this->CategoryModel->updateData($id);
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/CategoryEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/CategoryModel');
		$this->CategoryModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/CategoryController/index');
	}
}
