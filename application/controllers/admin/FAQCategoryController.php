<?php

class FAQCategoryController extends CI_Controller
{
	public function add()
	{
		$this->load->view('admin/FAQCategoryAdd');
	}
	public function insertData()
	{
		$data = array(
			"FAQCatName" => $this->input->post("txtfaqcatname")
		);
		$this->load->model('admin/FAQCategoryModel');
		$res = $this->FAQCategoryModel->insert($data);
		if ($res == 1) {
			$this->session->set_flashdata("add", "Inserted Successfully!!");
			$this->add();
		} else {
			echo "error";
		}
	}
	public function index()
	{
		$this->load->model('admin/FAQCategoryModel');
		$selectdata = $this->FAQCategoryModel->selectData();
		$data["faqcategoryData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/FAQCategoryTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"FAQCatName" => $this->input->post("txtfaqcatname")
		);
		$this->load->model('admin/FAQCategoryModel');
		$id = $this->input->post("txtfaqcatid");
		$this->FAQCategoryModel->saveData($data, $id);
		$this->index();
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FAQCategoryModel');
		$selectdata = $this->FAQCategoryModel->updateData($id);
		$data["faqcategoryData"] = $selectdata;
		$this->load->view('admin/FAQCategoryEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FAQCategoryModel');
		$this->FAQCategoryModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/FAQCategoryController/index');
	}
}
