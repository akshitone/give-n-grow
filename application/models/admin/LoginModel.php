<?php
class LoginModel extends CI_Model
{	
	public function LoginToDatabase($username,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_login");
		$this->db->where("Username='".$username."' and Password='".$password."'");
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function getInformation($username,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_login");
		$this->db->where("Username='".$username."' and Password='".$password."'");
		$result = $this->db->get();
		return $result->result();
	}
}
?>