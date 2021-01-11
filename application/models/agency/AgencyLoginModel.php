<?php
class AgencyLoginModel extends CI_Model
{	
	public function LoginToDatabase($username,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_agency");
		$this->db->where("AgencyUserName='".$username."' and Password='".$password."' and IsActive='Y'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function checkContact($phno)
	{
		$this->db->select("*");
		$this->db->from("tbl_agency");
		$this->db->where("AgencyContact='".$phno."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function changeOTP($phno,$otp)
	{
		//sms coding email coding
		$this->db->set('OTPcode',$otp);
		$this->db->where('AgencyContact',$phno);
		$this->db->update('tbl_agency');
	}
	public function UpdatePassword($confirmpassword,$phno)
	{
		$this->db->set('Password',$confirmpassword);
		$this->db->where('AgencyContact',$phno);
		$this->db->update('tbl_agency');
	}
	public function getInformation($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_agency");
		$this->db->where("AgencyUserName='".$email."' and Password='".$password."'");
		$result = $this->db->get();
		return $result->result();
	}
	public function checkOTPcode($phno,$otp)
	{
		$this->db->select("*");
		$this->db->from("tbl_agency");
		$this->db->where("otpcode='".$otp."' and AgencyContact='".$phno."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
}
?>