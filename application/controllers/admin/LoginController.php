<?php
class LoginController extends CI_Controller
{
	public function index($msg="")
	{
		$data["msg"]=$msg;
		$this->load->view('admin/Login',$data);
	}
	
	public function dologin()
	{
		$username = $this->input->post("txtemail");
		$password = $this->input->post("txtpwd");
		
		$this->load->model('admin/LoginModel');
		
		$res = $this->LoginModel->LoginToDatabase($username,$password);
		if($res==0)
		{
			$this->session->set_flashdata("error","Invalid Username or Password");
			redirect("/admin/LoginController/index");
		}
		else
		{
			//
			$result=$this->LoginModel->getInformation($username,$password);
			
			$session=array(
				"LoginId" => $result[0]->LoginId,
				"Name" => $result[0]->Name,
				"Icon" => $result[0]->Icon,
				"Contact" => $result[0]->Contact,
				"UserName" => $result[0]->UserName
			);
			$this->session->set_userdata("loggedin",$session);
			//
			
			redirect("/admin/DashboardController/index");
		}
	}
	
	public function logout()
	{
		$session=array(
				"LoginId" => "",
				"Name" => "",
				"Icon" => "",
				"Contact" => "",
				"UserName" => ""
			);
		$this->session->unset_userdata("loggedin");
			
		redirect("/admin/LoginController/index");	
	}
}
?>