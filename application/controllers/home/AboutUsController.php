<?php
class AboutUsController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/AboutUsModel');
		$selectdata = $this->AboutUsModel->getFarmerData();
		$data["farmerData"] = $selectdata;
		
		$this->load->view('home/AboutUs',$data);
	}
}
?>