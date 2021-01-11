<?php
	class MyAccountController extends CI_Controller
	{
		public function viewStorage()
		{
			$this->load->model('admin/FarmerModel');
			
			$storage = $this->FarmerModel->viewStorageData($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["storageData"] = $storage;
			
			$this->load->view("home/StorageTable",$data);
		}
		
		public function viewWallet()
		{
			$this->load->model('admin/FarmerModel');
		
			$storage = $this->FarmerModel->viewStorageData($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["storageData"] = $storage;
		
			$request = $this->FarmerModel->viewWithdrawreqData($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["withdrawreqData"]=$request;
		
			//Wallet
			$totalstorage = $this->FarmerModel->TotalStorage($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["totalstorage"] = $totalstorage;
		
			$totalwithdraw = $this->FarmerModel->TotalWithdraw($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["totalwithdraw"] = $totalwithdraw;
			
			$this->load->view("home/WalletTable",$data);
		}
	}
?>