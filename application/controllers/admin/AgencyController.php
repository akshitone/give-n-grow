<?php
class AgencyController extends CI_Controller
{
	public function add()
	{
		$this->load->view('admin/AgencyAdd');
	}
	public function insertData()
	{
		$data = array(
			"AgencyName" => $this->input->post("txtagencyname"),
			"AgencyContact" => $this->input->post("txtagencycontact"),
			"AgencyEmail" => $this->input->post("txtagencyemail"),
			"AgencyUserName" => $this->input->post("txtagencyusername"),
			"AgencyCode"	=> $this->input->post("txtagencycode"),
			"Password" => $this->input->post("txtagencypassword")
		);
		$this->load->model('admin/AgencyModel');
		$id = $this->AgencyModel->insert($data);
		if ($id > 0) {
			//image upload
			$r = $this->uploadImage("txtagencyicon", $id);
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
		$config['upload_path'] = './uploads/agency/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			echo "hi";
			return false;
		} else {
			$this->load->model('admin/AgencyModel');
			$this->AgencyModel->UpdateImageName($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/AgencyModel');
		$selectdata = $this->AgencyModel->selectData();
		$data["agencyData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/AgencyTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"AgencyName" => $this->input->post("txtagencyname"),
			"AgencyContact" => $this->input->post("txtagencycontact"),
			"AgencyEmail" => $this->input->post("txtagencyemail"),
			"AgencyUserName" => $this->input->post("txtagencyusername"),
			"AgencyCode"	=> $this->input->post("txtagencycode"),
			"Password" => $this->input->post("txtagencypassword")
		);
		$id = $this->input->post("txtagencyid");
		$this->load->model('admin/AgencyModel');
		$this->AgencyModel->saveData($data, $id);
		if (isset($_FILES['txtagencyicon']) && !empty($_FILES['txtagencyicon']['name'])) {

			//image upload
			$r = $this->uploadImage("txtagencyicon", $id);
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

		$this->load->model('admin/AgencyModel');
		$selectdata = $this->AgencyModel->updateData($id);
		$data["agencyData"] = $selectdata;
		$this->load->view('admin/AgencyEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/AgencyModel');
		$this->AgencyModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/AgencyController/index');
	}
	public function view($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/AgencyModel');
		$selectdata = $this->AgencyModel->viewData($id);
		$data["agencyData"] = $selectdata;
		$storage = $this->AgencyModel->viewStorageData($id);
		$data["storageData"] = $storage;
		$sell = $this->AgencyModel->viewSellData($id);
		$data["sellData"] = $sell;
		$this->load->view('admin/AgencyView', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/AgencyModel');
		$this->AgencyModel->UpdateNo($id);
		redirect("/admin/AgencyController/index");
	}
	public function UpdateToYes($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/AgencyModel');
		$this->AgencyModel->UpdateYes($id);
		redirect("/admin/AgencyController/index");
	}
}
