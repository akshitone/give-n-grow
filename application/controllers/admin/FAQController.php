<?php

class FAQController extends CI_Controller
{
	public function add()
	{
		$this->load->model('admin/FAQCategoryModel');
		$selectdata = $this->FAQCategoryModel->selectData();
		$data["faqcategoryData"] = $selectdata;

		$this->load->view('admin/FAQAdd', $data);
	}
	public function insertData()
	{
		$data = array(
			"FAQCatId" => $this->input->post("txtfaqcatid"),
			"Question" => $this->input->post("txtquestion"),
			"Answer" => $this->input->post("txtanswer")
		);
		$this->load->model('admin/FAQModel');
		$res = $this->FAQModel->insert($data);
		if ($res == 1) {
			$this->session->set_flashdata("add", "Inserted Successfully!!");
			$this->add();
		} else {
			echo "error";
		}
	}
	public function index()
	{
		$this->load->model('admin/FAQModel');
		$selectdata = $this->FAQModel->selectData();
		$data["faqData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/FAQTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"FAQCatId" => $this->input->post("txtfaqcatid"),
			"Question" => $this->input->post("txtquestion"),
			"Answer" => $this->input->post("txtanswer")
		);
		$this->load->model('admin/FAQModel');
		$id = $this->input->post("txtfaqid");
		$this->FAQModel->saveData($data, $id);
		$this->index();
	}
	public function update($id)
	{

		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FAQModel');
		$selectdata = $this->FAQModel->updateData($id);
		$data["faqData"] = $selectdata;

		$this->load->model('admin/FAQCategoryModel');
		$selectdata = $this->FAQCategoryModel->selectData();
		$data["faqcategoryData"] = $selectdata;

		$this->load->view('admin/FAQEdit', $data);
	}
	public function delete($id)
	{

		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FAQModel');
		$this->FAQModel->deleteData($id);
		//$this->index();
		$this->session->set_flashdata("delete", "deleted");
		redirect('admin/FAQController/index');
	}
}
