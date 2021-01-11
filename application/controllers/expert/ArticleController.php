<?php

class ArticleController extends CI_Controller
{
    public function add()
    {
        $this->load->model('expert/ArticleModel');
        $selectdata = $this->ArticleModel->selectCatData();
        $data['categoryData'] = $selectdata;

        $this->load->view('expert/ArticleAdd', $data);
    }

    public function insertData()
    {
        $data = [
            'ExpertId' => $this->session->userdata['expertloggedin']['ExpertId'],
            'CategoryId' => $this->input->post('txtcatid'),
            'Title' => $this->input->post('txttitle'),
            'Description' => $this->input->post('txtarticledesc'),
            'VideoUrl' => $this->input->post('txtvideourl'),
            'ArticleDateTime' => $this->input->post('txtarticledate'),
            'Source' => $this->input->post('txtsource'),
            'Tags' => $this->input->post('txttags'),
        ];
        $this->load->model('expert/ArticleModel');
        $id = $this->ArticleModel->insert($data);
        if ($id > 0) {
            //image upload

            $r = $this->uploadImage1('txtarticleimage1', $id);
            $r = $this->uploadImage2('txtarticleimage2', $id);
            if ($r > 0) {
                $this->session->set_flashdata('add', 'Inserted Successfull!!');

                $this->load->model('expert/ArticleModel');
                $farmerData = $this->ArticleModel->getFarmerId();
                $data['farmerData'] = $farmerData;
                foreach ($farmerData as $item) {
                    $farmerid = $item->FarmerId;
                    $this->load->model('expert/ArticleModel');
                    $notificationData = $this->ArticleModel->sendNotification($farmerid);
                    $data['notificationData'] = $notificationData;
                }
                $this->add();
            } else {
                echo 'Image Upload Error';
            }
        } else {
            echo 'error';
        }
    }

    public function uploadImage1($filename, $id)
    {
        $config['upload_path'] = './uploads/article/';
        $config['allowed_types'] = 'gif|jpg|png';
        $path = $_FILES[$filename]['name'];
        $new_name = rand(11111, 99999).'_'.$id.'_.'.pathinfo($path, PATHINFO_EXTENSION);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($filename)) {
            return false;
        }

        $this->load->model('expert/ArticleModel');
        $this->ArticleModel->UpdateImageName1($new_name, $id);

        return true;
    }

    public function uploadImage2($filename, $id)
    {
        $config['upload_path'] = './uploads/article/';
        $config['allowed_types'] = 'gif|jpg|png';
        $path = $_FILES[$filename]['name'];
        $new_name = rand(11111, 99999).'_'.$id.'_.'.pathinfo($path, PATHINFO_EXTENSION);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($filename)) {
            return false;
        }

        $this->load->model('expert/ArticleModel');
        $this->ArticleModel->UpdateImageName2($new_name, $id);

        return true;
    }

    public function index()
    {
        $this->load->model('expert/ArticleModel');
        $selectdata = $this->ArticleModel->selectData();
        $data['articleData'] = $selectdata;
        $this->load->library('encryption');
        $this->load->view('expert/ArticleTable', $data);
    }

    public function updateData()
    {
        $data = [
            'ExpertId' => $this->session->userdata['expertloggedin']['ExpertId'],
            'CategoryId' => $this->input->post('txtcatid'),
            'Title' => $this->input->post('txttitle'),
            'Description' => $this->input->post('txtarticledesc'),
            'VideoUrl' => $this->input->post('txtvideourl'),
            'ArticleDateTime' => $this->input->post('txtarticledate'),
            'Source' => $this->input->post('txtsource'),
            'Tags' => $this->input->post('txttags'),
        ];
        $this->load->model('expert/ArticleModel');
        $id = $this->input->post('txtarticleid');
        $this->ArticleModel->saveData($data, $id);
        if (isset($_FILES['txtarticleimage1']) && !empty($_FILES['txtarticleimage1']['name'])) {
            //image upload
            $r = $this->uploadFarmerIcon('txtarticleimage1', $id);
            $this->session->set_flashdata('add', 'Inserted Successfull!!');
            $this->index();
        } elseif (isset($_FILES['txtarticleimage2']) && !empty($_FILES['txtarticleimage2']['name'])) {
            //image upload
            $r = $this->uploadAadharFrontIcon('txtarticleimage2', $id);
            $this->session->set_flashdata('add', 'Inserted Successfull!!');
            $this->index();
        } else {
            $this->index();
        }
    }

    public function update($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/ArticleModel');
        $selectdata = $this->ArticleModel->updateData($id);
        $data['articleData'] = $selectdata;
        $this->load->view('expert/ArticletEdit', $data);
    }

    public function delete($id)
    {
        $id = str_replace('-', '/', $id);
        $this->load->library('encryption');

        $id = $this->encryption->decrypt($id);

        $this->load->model('expert/ArticleModel');
        $this->ArticleModel->deleteData($id);
        $this->session->set_flashdata('delete', 'Deleted!');
        $this->index();
    }
}
