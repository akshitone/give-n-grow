<?php

class AnswerController extends CI_Controller
{
    public function add($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/QuestionModel');
        $selectdata = $this->QuestionModel->selectData();
        $data['questionData'] = $selectdata;

        $this->load->model('expert/QuestionModel');
        $selectdata = $this->QuestionModel->getQuestionData($id);
        $data['getQuestionData'] = $selectdata;

        $this->load->view('expert/AnswerAdd', $data);
    }

    public function insertData()
    {
        $id = $this->input->post('txtquestionid');
        $data = [
            'QuestionId' => $id,
            'ExpertId' => $this->session->userdata['expertloggedin']['ExpertId'],
            'AnswerText' => $this->input->post('txtanswer'),
        ];
        $this->load->model('expert/AnswerModel');
        $res = $this->AnswerModel->insert($data);
        if (1 == $res) {
            $this->session->set_flashdata('add', 'Inserted Successfully!!');
            $this->load->model('expert/QuestionModel');
            $this->QuestionModel->UpdateYes($id);
            $this->index();
        } else {
            echo 'error';
        }
    }

    public function index()
    {
        $this->load->model('expert/AnswerModel');
        $selectdata = $this->AnswerModel->selectData();
        $data['answerData'] = $selectdata;
        $this->load->library('encryption');
        $this->load->view('expert/AnswerTable', $data);
    }

    public function updateData()
    {
        $data = [
            'QuestionId' => $this->input->post('txtquestionid'),
            'ExpertId' => $this->session->userdata['expertloggedin']['ExpertId'],
            'AnswerText' => $this->input->post('txtanswer'),
        ];
        $this->load->model('expert/AnswerModel');
        $id = $this->input->post('txtanswerid');
        $this->AnswerModel->saveData($data, $id);
        $this->index();
    }

    public function update($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/AnswerModel');
        $selectdata = $this->AnswerModel->updateData($id);
        $data['answerData'] = $selectdata;
        $this->load->view('expert/AnswerEdit', $data);
    }

    public function delete($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/AnswerModel');
        $this->AnswerModel->deleteData($id);
        $this->session->set_flashdata('delete', 'Deleted!');
        $this->index();
    }
}
