<?php
class FarmerLoginModel extends CI_Model
{	
	public function LoginToDatabase($code,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_farmer");
		$this->db->where("FarmerCode='".$code."' and Password='".$password."' and Status='Y'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function getInformation($code,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_farmer");
		$this->db->where("FarmerCode='".$code."' and Password='".$password."' and Status='Y'");
		$result = $this->db->get();
		return $result->result();
	}
	public function checkNumber($phno)
	{
		$this->db->select("*");
		$this->db->from("tbl_farmer");
		$this->db->where("FarmerContact='".$phno."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function getFarmerData()
	{
		$this->db->select("*");
		$this->db->from("tbl_farmer");
		$result = $this->db->get();
		return $result->result();
	}
	public function changeOTP($phno,$otp)
	{
		
		//sms coding email coding
		$this->db->set('OTPcode',$otp);
		$this->db->where('FarmerContact',$phno);
		$this->db->update('tbl_farmer');
	}
	public function UpdatePassword($confirmpassword,$phno)
	{
		$this->db->set('Password',$confirmpassword);
		$this->db->where('FarmerContact',$phno);
		$this->db->update('tbl_farmer');
	}
	public function checkOTPcode($phno,$otp)
	{
		$this->db->select("*");
		$this->db->from("tbl_farmer");
		$this->db->where("otpcode='".$otp."' and FarmerContact='".$phno."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
}
?>