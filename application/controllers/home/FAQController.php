<?php
class FAQController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/FAQModel');
		$selectdata = $this->FAQModel->getData();
		$data["faqData"] = $selectdata;

		$this->load->view('home/FAQ',$data);
	}
}
?>