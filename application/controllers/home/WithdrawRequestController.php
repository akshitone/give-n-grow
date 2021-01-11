<?php
	class WithdrawRequestController extends CI_Controller
	{
		public function viewWithdrawRequest()
		{
			$this->load->model('admin/FarmerModel');

            $request = $this->FarmerModel->viewWithdrawreqData($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["withdrawreqData"]=$request;
		
			//Wallet
			$totalstorage = $this->FarmerModel->TotalStorage($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["totalstorage"] = $totalstorage;
		
			$totalwithdraw = $this->FarmerModel->TotalWithdraw($this->session->userdata["farmerloggedin"]["FarmerId"]);
			$data["totalwithdraw"] = $totalwithdraw;
			
			$this->load->view("home/WithdrawRequest",$data);
		}
		public function insertData()
		{
			$name= $this->session->userdata["farmerloggedin"]["FarmerName"];
			$amt= $this->input->post("txtamount");
			$data=array(
				"FarmerId" => $this->session->userdata["farmerloggedin"]["FarmerId"],
				"Amount" => $amt,
				"Remark" => $this->input->post("txtremark")
			);
			$this->load->model('home/WithdrawReqModel');
			$res = $this->WithdrawReqModel->insert($data);
			if($res==1)
			{
				$this->session->set_flashdata("add","Your withdraw request Inserted Successfully!!");
				$this->WithdrawReqModel->sendNotification($name,$amt);
				$this->viewWithdrawRequest();
			}
			else
			{
				echo "error";
			}
		}
	}
