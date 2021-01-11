<?php
class SubsidyController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/SubsidyModel');
		$selectdata = $this->SubsidyModel->getData();
		$data["subsidyData"] = $selectdata;

		$this->load->view('home/Subsidy',$data);
	}
}
?>