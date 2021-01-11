<?php
class ExpertController extends CI_Controller
{
	public function add()
	{
		$this->load->model('admin/ExpertModel');
		$selectdata = $this->ExpertModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->view('admin/ExpertAdd', $data);
	}
	public function insertData()
	{
		$data = array(
			"CategoryId" => $this->input->post("txtcatid"),
			"ExpertName" => $this->input->post("txtexpertname"),
			"ExpertContact" => $this->input->post("txtexpertno"),
			"Email" => $this->input->post("txtexpertemail"),
			"ExpertQualification" => $this->input->post("txtexpertqualification"),
			"ExpertExperience" => $this->input->post("txtexpertexp"),
			"ExpertUserName" => $this->input->post("txtexpertusername"),
			"ExpertPassword" => $this->input->post("txtexpertpassword")
		);
		$this->load->model('admin/ExpertModel');
		$id = $this->ExpertModel->insert($data);
		if ($id > 0) {
			//image upload

			$r = $this->uploadImage("txtexperticon", $id);

			if ($r > 0) {
				$this->session->set_flashdata("add", "Inserted Successfull!!");
				$this->add();
			} else {
				echo "Image Upload Error";
			}
			//image upload


		} else {
			echo "error";
		}
	}
	public function uploadImage($filename, $id)
	{
		$config['upload_path'] = './uploads/Expert/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/ExpertModel');
			$this->ExpertModel->UpdateImageName($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/ExpertModel');
		$selectdata = $this->ExpertModel->selectData();
		$data["expertData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/ExpertTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"CategoryId" => $this->input->post("txtcatid"),
			"ExpertName" => $this->input->post("txtexpertname"),
			"ExpertContact" => $this->input->post("txtexpertno"),
			"Email" => $this->input->post("txtexpertemail"),
			"ExpertQualification" => $this->input->post("txtexpertqualification"),
			"ExpertExperience" => $this->input->post("txtexpertexp"),
			"ExpertUserName" => $this->input->post("txtexpertusername"),
			"ExpertPassword" => $this->input->post("txtexpertpassword")
		);
		$this->load->model('admin/ExpertModel');
		$id = $this->input->post("txtexpertid");
		$this->ExpertModel->saveData($data, $id);
		if (isset($_FILES['txtexperticon']) && !empty($_FILES['txtexperticon']['name'])) {
			//image upload
			$r = $this->uploadImage("txtexperticon", $id);
			$this->session->set_flashdata("add", "Inserted Successfull!!");
			$this->index();
		} else {
			$this->index();
		}
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ExpertModel');
		$selectdata = $this->ExpertModel->selectCatData();
		$data["categoryData"] = $selectdata;

		$this->load->model('admin/ExpertModel');
		$selectdata = $this->ExpertModel->updateData($id);
		$data["expertData"] = $selectdata;
		$this->load->view('admin/ExpertEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ExpertModel');
		$this->ExpertModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/ExpertController/index');
	}
	public function view($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ExpertModel');
		$selectdata = $this->ExpertModel->viewData($id);
		$data["expertData"] = $selectdata;

		$article = $this->ExpertModel->viewArticleData($id);
		$data["articleData"] = $article;

		$this->load->view('admin/ExpertView', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ExpertModel');
		$this->ExpertModel->UpdateNo($id);
		redirect("/admin/ExpertController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/ExpertModel');
		$this->ExpertModel->UpdateYes($id);
		redirect("/admin/ExpertController/index");
	}
}
