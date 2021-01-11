<?php
class FarmerLoginController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/HomeModel');
		$selectdata = $this->HomeModel->getProduct();
		$data["productData"] = $selectdata;

		$this->load->model('home/HomeModel');
		$selectdata = $this->HomeModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('home/HomeModel');
		$selectdata = $this->HomeModel->showLimitProduct();
		$data["showProductData"] = $selectdata;

		$this->load->model('home/HomeModel');
		$selectAnswerdata = $this->HomeModel->getAnswerData();
		$data["getAnswerData"] = $selectAnswerdata;

		$this->load->view('home/Home',$data);
	}
	
	public function dologin()
	{
		$code = $this->input->post("txtcode");
		$password = $this->input->post("txtpwd");
		
		$this->load->model('home/FarmerLoginModel');
		
		$res = $this->FarmerLoginModel->LoginToDatabase($code,$password);
		if($res<=0)
		{
			$this->session->set_flashdata("error","Invalid Username or Password");
			redirect("/home/FarmerLoginController/index");
		}
		else
		{
			//
			$result=$this->FarmerLoginModel->getInformation($code,$password);
			
			$session=array(
				"FarmerId" => $result[0]->FarmerId,
				"FarmerName" => $result[0]->FarmerName,
				"FarmerContact" => $result[0]->FarmerContact,
				"FarmerCode" => $result[0]->FarmerCode				
			);
			$this->session->set_userdata("farmerloggedin",$session);
			//
			
			redirect("/home/FarmerLoginController/index");
		}
	}
	
	public function logout()
	{
		$session=array(
			"FarmerId" => "",
			"FarmerName" => "",
			"FarmerContact" => "",
			"FarmerCode" => ""
		);
		$this->session->unset_userdata("farmerloggedin");
			
		redirect("/home/FarmerLoginController/index");
	}
	public function ForgetPassword()
	{
		$this->load->model('home/FarmerLoginModel');
		$selectFarmerdata = $this->FarmerLoginModel->getFarmerData();
		$data["getFarmerData"] = $selectFarmerdata;

		$this->load->view("home/ForgetPassword",$data);
	}
	public function checkFarmerNumber()
	{
		$otp=rand(1111,9999);
		$phno=$this->input->post("txtfarmerphno");
		$this->load->model('home/FarmerLoginModel');
		$result = $this->FarmerLoginModel->checkNumber($phno);
		if($result<=0)
		{
			$this->session->set_flashdata("msg","Invalid Farmer Contact");
			redirect("/home/FarmerLoginController/ForgetPassword");
		}
		else
		{
			$ch = curl_init();


			$user="akshiiitone@gmail.com:123456";
			$receipientno=$phno; 
			$senderID="TEST SMS"; 
			$msgtxt="Your OTP : ".$otp; 
			curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
			$buffer = curl_exec($ch);
			
			curl_close($ch);
			$this->FarmerLoginModel->changeOTP($phno,$otp);
			$this->session->set_userdata("forgotemail",$phno);
			redirect("/home/FarmerLoginController/checkOTP");
		}
	}
	public function CheckOTP()
	{
		$this->load->view("home/OTP");
	}
	public function CheckOTPCode()
	{
		$otp=$this->input->post("txtotp");
		$phno=$this->input->post("txtfarmerphno");
		$this->load->model('home/FarmerLoginModel');
		$result = $this->FarmerLoginModel->CheckOTPCode($phno,$otp);
		
		if($result<=0)
		{
			$this->session->set_flashdata("msg","Invalid OTP");
			redirect("/home/FarmerLoginController/CheckOTP");
		}
		else
		{
			$this->session->set_userdata("forgotemail",$phno);
			redirect("/home/FarmerLoginController/ResetPassword");
		}
	}
	public function ResetPassword()
	{
		$this->load->view("home/ResetPassword");
	}
	public function UpdatePassword()
	{
		$password=$this->input->post("txtpassword");
		$confirmpassword=$this->input->post("txtconfirmpassword");
		$phno=$this->input->post("txtfarmerphno");
		if($password==$confirmpassword)
		{
			$this->load->model('home/FarmerLoginModel');
			$result = $this->FarmerLoginModel->UpdatePassword($confirmpassword,$phno);
			$this->session->set_userdata("forgotemail",$phno);
			redirect("/home/FarmerLoginController/index");
		}
		else
		{
			$this->session->set_flashdata("error","Enter proper confirm password");
			redirect("/home/FarmerLoginController/ResetPassword");
		}
	}
}
?>