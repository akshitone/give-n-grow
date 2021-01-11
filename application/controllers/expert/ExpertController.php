<?php

class ExpertController extends CI_Controller
{
    public function view($id)
    {
        $this->load->library('encryption');
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');
        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/ExpertModel');
        $selectdata = $this->ExpertModel->viewData($id);
        $data['expertData'] = $selectdata;

        $this->load->model('expert/ExpertModel');
        $selectdata = $this->ExpertModel->viewArticleData();
        $data['articleData'] = $selectdata;

        $this->load->view('expert/ExpertView', $data);
    }
}
