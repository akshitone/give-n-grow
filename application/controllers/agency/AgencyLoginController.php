<?php
class AgencyLoginController extends CI_Controller
{
	public function index()
	{
		$this->load->view('agency/AgencyLogin');
	}

	public function dologin()
	{
		$username = $this->input->post("txtemail");
		$password = $this->input->post("txtpwd");

		$this->load->model('agency/AgencyLoginModel');

		$res = $this->AgencyLoginModel->LoginToDatabase($username, $password);
		if ($res == 0) {
			$this->session->set_flashdata("error", "Invalid Username or Password");
			redirect("/agency/AgencyLoginController/index");
		} else {
			//
			$result = $this->AgencyLoginModel->getInformation($username, $password);

			$session = array(
				"AgencyId" => $result[0]->AgencyId,
				"AgencyName" => $result[0]->AgencyName,
				"AgencyIcon" => $result[0]->AgencyIcon,
				"AgencyUserName" => $result[0]->AgencyUserName,
				"AgencyContact" => $result[0]->AgencyContact,
				"AgencyEmail" => $result[0]->AgencyEmail
			);
			$this->session->set_userdata("agencyloggedin", $session);
			//
			$this->load->library('encryption');
			redirect("/agency/AgencyController/view/" . str_replace("/", "-", $this->encryption->encrypt($result[0]->AgencyId)) . "");
		}
	}
	public function logout()
	{
		$session = array(
			"AgencyId" => "",
			"AgencyName" => "",
			"AgencyIcon" => "",
			"AgencyContact" => "",
			"AgencyUserName" => "",
			"AgencyEmail" => ""
		);
		$this->session->unset_userdata("agencyloggedin");

		redirect("/agency/AgencyLoginController/index");
	}
	public function ForgetPassword()
	{
		$this->load->view("agency/ForgetPassword");
	}
	public function checkAgencyContact()
	{
		$otp = rand(1111, 9999);
		$phno = $this->input->post("txtagencyphno");
		$this->load->model('agency/AgencyLoginModel');
		$result = $this->AgencyLoginModel->checkContact($phno);
		if ($result <= 0) {
			$this->session->set_flashdata("error", "Invalid Contact Number");
			redirect("/agency/AgencyLoginController/forgetpassword");
		} else {
			$ch = curl_init();

			$user = "akshiiitone@gmail.com:123456";
			$receipientno = $phno;
			$senderID = "TEST SMS";
			$msgtxt = "Your OTP : " . $otp;
			curl_setopt($ch, CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
			$buffer = curl_exec($ch);

			curl_close($ch);
			$this->AgencyLoginModel->changeOTP($phno, $otp);
			$this->session->set_userdata("forgotemail", $phno);
			redirect("/agency/AgencyLoginController/checkOTP");
		}
	}
	public function CheckOTP()
	{
		$this->load->view("agency/OTP");
	}
	public function CheckOTPCode()
	{
		$otp = $this->input->post("txtotp");
		$phno = $this->input->post("txtagencyphno");
		$this->load->model('agency/AgencyLoginModel');
		$result = $this->AgencyLoginModel->CheckOTPCode($phno, $otp);
		if ($result <= 0) {
			$this->session->set_flashdata("error", "Invalid OTP");
			redirect("/agency/AgencyLoginController/CheckOTP");
		} else {
			$this->session->set_userdata("forgotemail", $phno);
			redirect("/agency/AgencyLoginController/ResetPassword");
		}
	}
	public function ResetPassword()
	{
		$this->load->view("agency/ResetPassword");
	}
	public function UpdatePassword()
	{
		$password = $this->input->post("txtpassword");
		$confirmpassword = $this->input->post("txtconfirmpassword");
		$phno = $this->input->post("txtagencyphno");
		if ($password == $confirmpassword) {
			$this->load->model('agency/AgencyLoginModel');
			$result = $this->AgencyLoginModel->UpdatePassword($confirmpassword, $phno);
			$this->session->set_userdata("forgotemail", $phno);
			redirect("/agency/AgencyLoginController/index");
		} else {
			$this->session->set_flashdata("error", "Enter proper confirm password");
			redirect("/agency/AgencyLoginController/ResetPassword");
		}
	}
}
