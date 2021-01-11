<?php

class AgencyController extends CI_Controller
{
	public function view($id)
	{
		$this->load->library('encryption');
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');
		$id = $this->encryption->decrypt($id);
		//encrypt == encryption
		//decode == decrypt

		$this->load->model('agency/AgencyModel');
		$selectdata = $this->AgencyModel->viewData($id);
		$data["agencyData"] = $selectdata;
		$storage = $this->AgencyModel->viewStorageData($id);
		$data["storageData"] = $storage;
		$sell = $this->AgencyModel->viewSellData($id);
		$data["sellData"] = $sell;
		$this->load->view('agency/AgencyView', $data);
	}
}
