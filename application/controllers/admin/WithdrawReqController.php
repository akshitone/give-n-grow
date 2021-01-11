<?php

class WithdrawReqController extends CI_Controller
{
	public function add()
	{
		$this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->selectData();
		$data["farmerData"] = $selectdata;

		$this->load->view('admin/WithdrawReqAdd', $data);
	}
	public function insertData()
	{
		$data = array(
			"FarmerId" => $this->input->post("txtfarmerid"),
			"Amount" => $this->input->post("txtamt"),
			"Remark" => $this->input->post("txtremark")
		);
		$this->load->model('admin/WithdrawReqModel');
		$res = $this->WithdrawReqModel->insert($data);
		if ($res == 1) {
			$this->session->set_flashdata("add", "Inserted Successfully!!");
			$this->add();
		} else {
			echo "error";
		}
	}
	public function index()
	{
		$this->load->model('admin/WithdrawReqModel');
		$selectdata = $this->WithdrawReqModel->selectData();
		$data["withdrawreqData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/WithdrawReqTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"FarmerId" => $this->input->post("txtfarmerid"),
			"Amount" => $this->input->post("txtamt"),
			"Remark" => $this->input->post("txtremark")
		);
		$this->load->model('admin/WithdrawReqModel');
		$id = $this->input->post("txtrequestid");
		$this->WithdrawReqModel->saveData($data, $id);
		$this->index();
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/WithdrawReqModel');
		$selectdata = $this->WithdrawReqModel->updateData($id);
		$data["withdrawreqData"] = $selectdata;

		$this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->selectData();
		$data["farmerData"] = $selectdata;

		$this->load->view('admin/WithdrawReqEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/WithdrawReqModel');
		$this->WithdrawReqModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		$this->index();
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/WithdrawReqModel');
		$this->WithdrawReqModel->UpdateNo($id);
		redirect("/admin/WithdrawReqController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/WithdrawReqModel');
		$this->WithdrawReqModel->UpdateYes($id);
		redirect("/admin/WithdrawReqController/index");
	}
}
