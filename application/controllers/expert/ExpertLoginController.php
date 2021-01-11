<?php

class ExpertLoginController extends CI_Controller
{
    public function index()
    {
        $this->load->view('expert/ExpertLogin');
    }

    public function dologin()
    {
        $username = $this->input->post('txtemail');
        $password = $this->input->post('txtpwd');

        $this->load->model('expert/ExpertLoginModel');

        $res = $this->ExpertLoginModel->LoginToDatabase($username, $password);
        if (0 == $res) {
            $this->session->set_flashdata('error', 'Invalid Username or Password');
            redirect('/expert/ExpertLoginController/index');
        } else {
            $result = $this->ExpertLoginModel->getInformation($username, $password);

            $session = [
                'ExpertId' => $result[0]->ExpertId,
                'ExpertName' => $result[0]->ExpertName,
                'ExpertIcon' => $result[0]->ExpertIcon,
                'ExpertContact' => $result[0]->ExpertContact,
                'Email' => $result[0]->Email,
            ];
            $this->session->set_userdata('expertloggedin', $session);

            $this->load->library('encryption');
            redirect('/expert/ExpertController/view/'.str_replace('/', '-', $this->encryption->encrypt($result[0]->ExpertId)).'');
        }
    }

    public function logout()
    {
        $session = [
            'ExpertId' => '',
            'ExpertName' => '',
            'ExpertIcon' => '',
            'ExpertContact' => '',
            'Email' => '',
        ];
        $this->session->unset_userdata('expertloggedin');

        redirect('/expert/ExpertLoginController/index');
    }

    public function ForgetPassword()
    {
        $this->load->view('expert/ForgetPassword');
    }

    public function checkEmailAddress()
    {
        $email = $this->input->post('txtemail');
        $this->load->model('expert/ExpertLoginModel');
        $result = $this->ExpertLoginModel->checkEmail($email);
        if ($result <= 0) {
            $this->session->set_flashdata('error', 'Invalid Email Address');
            redirect('/expert/ExpertLoginController/forgetpassword');
        } else {
            $this->ExpertLoginModel->changeOTP($email);
            $this->session->set_userdata('forgotemail', $email);
            redirect('/expert/ExpertLoginController/checkOTP');
        }
    }

    public function CheckOTP()
    {
        $this->load->view('expert/OTP');
    }

    public function CheckOTPCode()
    {
        $otp = $this->input->post('txtotp');
        $email = $this->input->post('txtemail');
        $this->load->model('expert/ExpertLoginModel');
        $result = $this->ExpertLoginModel->CheckOTPCode($email, $otp);
        if ($result <= 0) {
            $this->session->set_flashdata('error', 'Invalid OTP');
            redirect('/expert/ExpertLoginController/CheckOTP');
        } else {
            $this->session->set_userdata('forgotemail', $email);
            redirect('/expert/ExpertLoginController/ResetPassword');
        }
    }

    public function ResetPassword()
    {
        $this->load->view('expert/ResetPassword');
    }

    public function UpdatePassword()
    {
        $password = $this->input->post('txtpassword');
        $confirmpassword = $this->input->post('txtconfirmpassword');
        $email = $this->input->post('txtemail');
        if ($password == $confirmpassword) {
            $this->load->model('expert/ExpertLoginModel');
            $result = $this->ExpertLoginModel->UpdatePassword($confirmpassword, $email);
            $this->session->set_userdata('forgotemail', $email);
            redirect('/expert/ExpertLoginController/index');
        } else {
            $this->session->set_flashdata('error', 'Enter proper confirm password');
            redirect('/expert/ExpertLoginController/ResetPassword');
        }
    }
}
