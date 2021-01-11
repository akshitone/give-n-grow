<?php
class ExpertLoginModel extends CI_Model
{	
	public function LoginToDatabase($username,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_expert");
		$this->db->where("ExpertUserName='".$username."' and ExpertPassword='".$password."' and IsActive='Y'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function getInformation($username,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_expert");
		$this->db->where("ExpertUserName='".$username."' and ExpertPassword='".$password."' and IsActive='Y'");
		$result = $this->db->get();
		return $result->result();
	}
	public function CheckEmail($email)
	{
		$this->db->select("*");
		$this->db->from("tbl_expert");
		$this->db->where("Email='".$email."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function UpdatePassword($confirmpassword,$email)
	{
		$this->db->set('ExpertPassword',$confirmpassword);
		$this->db->where('Email',$email);
		$this->db->update('tbl_expert');
	}
	public function ChangeOTP($email)
	{
		$code=rand(1111,9999);
		//sms coding email coding
		$this->db->set('OTPCode',$code);
		$this->db->where('Email',$email);
		$this->db->update('tbl_expert');
	}
	public function CheckOTPCode($email,$otp)
	{
		$this->db->select("*");
		$this->db->from("tbl_expert");
		$this->db->where("OTPCode='".$otp."' and Email='".$email."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
}
?>