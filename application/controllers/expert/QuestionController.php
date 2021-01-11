<?php

class QuestionController extends CI_Controller
{
    public function index()
    {
        $this->load->model('expert/QuestionModel');
        $selectdata = $this->QuestionModel->selectData();
        $data['questionData'] = $selectdata;
        $this->load->library('encryption');
        $this->load->view('expert/QuestionTable', $data);
    }

    public function UpdateToNo($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/QuestionModel');
        $this->QuestionModel->UpdateNo($id);
        redirect('/expert/QuestionController/index');
    }

    public function UpdateToYes($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/QuestionModel');
        $this->QuestionModel->UpdateYes($id);
        redirect('/expert/QuestionController/index');
    }
}
