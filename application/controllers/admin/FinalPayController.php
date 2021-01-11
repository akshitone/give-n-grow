<?php

class FinalPayController extends CI_Controller
{
	public function add($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/WithdrawReqModel');
		$farmerdata = $this->WithdrawReqModel->getData($id);
		$data["withdrawreqFarmerData"] = $farmerdata;

		$this->load->model('admin/WithdrawReqModel');
		$selectdata = $this->WithdrawReqModel->selectData();
		$data["withdrawreqData"] = $selectdata;

		$this->load->view('admin/FinalPayAdd', $data);
	}
	public function insertData()
	{
		$id = $this->input->post("txtrequestid");
		$data = array(
			"RequestId" => $id,
			"Amount" => $this->input->post("txtamt"),
			"Remark" => $this->input->post("txtremark"),
			"TransactionNumber" => $this->input->post("txttransactionno"),
			"PaymentType" => $this->input->post("txtpaymenttype")
		);
		$this->load->model('admin/FinalPayModel');
		$res = $this->FinalPayModel->insert($data);
		if ($res == 1) {
			$this->session->set_flashdata("add", "Inserted Successfully!!");
			$this->load->model('admin/WithdrawReqModel');
			$this->WithdrawReqModel->UpdateYes($id);
			$this->load->model('admin/FinalPayModel');
			$sendNotification = $this->FinalPayModel->sendNotificationToFarmer($id);
			$data["sendNotification"] = $sendNotification;
			$this->index();
		} else {
			echo "error";
		}
	}
	public function index()
	{
		$this->load->model('admin/FinalPayModel');
		$selectdata = $this->FinalPayModel->selectData();
		$data["finalpayData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/FinalPayTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"RequestId" => $this->input->post("txtrequestid"),
			"Amount" => $this->input->post("txtamt"),
			"Remark" => $this->input->post("txtremark"),
			"TransactionNumber" => $this->input->post("txttransactionno"),
			"PaymentType" => $this->input->post("txtpaymenttype")
		);
		$this->load->model('admin/FinalPayModel');
		$id = $this->input->post("txtpaymentid");
		$this->FinalPayModel->saveData($data, $id);
		$this->index();
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FinalPayModel');
		$selectdata = $this->FinalPayModel->updateData($id);
		$data["finalpayData"] = $selectdata;

		$this->load->model('admin/WithdrawReqModel');
		$selectdata = $this->WithdrawReqModel->selectData();
		$data["withdrawreqData"] = $selectdata;

		$this->load->view('admin/FinalPayEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FinalPayModel');
		$this->FinalPayModel->deleteData($id);
		$this->index();
	}
}
