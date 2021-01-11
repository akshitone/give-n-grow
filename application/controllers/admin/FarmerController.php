<?php

class FarmerController extends CI_Controller
{
	public function add()
	{
		$this->load->view('admin/FarmerAdd');
	}
	public function insertData()
	{
		$data = array(
			"FarmerName" => $this->input->post("txtfarmername"),
			"FarmerContact" => $this->input->post("txtfarmercontact"),
			"FarmerAddress" => $this->input->post("txtfarmeraddress"),
			"Password" => $this->input->post("txtfarmerpassword"),
			"FarmerCode" => $this->input->post("txtfarmercode"),
			"AadharNumber" => $this->input->post("txtfarmeraadharno")
		);
		$this->load->model('admin/FarmerModel');
		$id = $this->FarmerModel->insert($data);
		if ($id > 0) {
			//image upload
			$r = $this->uploadFarmerIcon("txtfarmericon", $id);
			$r = $this->uploadAadharFrontIcon("txtaadharfrtimage", $id);
			$r = $this->uploadAadharBackIcon("txtaadharbckimage", $id);
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
	public function uploadFarmerIcon($filename, $id)
	{
		$config['upload_path'] = './uploads/farmer/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/FarmerModel');
			$this->FarmerModel->UpdateFarmerImage($new_name, $id);
			return true;
		}
	}
	public function uploadAadharFrontIcon($filename, $id)
	{
		$config['upload_path'] = './uploads/id/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/FarmerModel');
			$this->FarmerModel->UpdateAadharFrontImage($new_name, $id);
			return true;
		}
	}
	public function uploadAadharBackIcon($filename, $id)
	{
		$config['upload_path'] = './uploads/id/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = rand(11111, 99999) . "_" . $id . "_." . pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if (!$this->upload->do_upload($filename)) {
			return false;
		} else {
			$this->load->model('admin/FarmerModel');
			$this->FarmerModel->UpdateAadharBackImage($new_name, $id);
			return true;
		}
	}
	public function index()
	{
		$this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->selectData();
		$data["farmerData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('admin/FarmerTable', $data);
	}
	public function updateData()
	{
		$data = array(
			"FarmerName" => $this->input->post("txtfarmername"),
			"FarmerContact" => $this->input->post("txtfarmercontact"),
			"FarmerAddress" => $this->input->post("txtfarmeraddress"),
			"Password" => $this->input->post("txtfarmerpassword"),
			"FarmerCode" => $this->input->post("txtfarmercode"),
			"AadharNumber" => $this->input->post("txtfarmeraadharno")
		);
		$this->load->model('admin/FarmerModel');
		$id = $this->input->post("txtfarmerid");
		$this->FarmerModel->saveData($data, $id);
		if (isset($_FILES['txtfarmericon']) && !empty($_FILES['txtfarmericon']['name'])) {

			//image upload
			$r = $this->uploadFarmerIcon("txtfarmericon", $id);
			$this->session->set_flashdata("add", "Inserted Successfull!!");
			$this->index();
		} else if (isset($_FILES['txtaadharfrtimage']) && !empty($_FILES['txtaadharfrtimage']['name'])) {

			//image upload
			$r = $this->uploadAadharFrontIcon("txtaadharfrtimage", $id);
			$this->session->set_flashdata("add", "Inserted Successfull!!");
			$this->index();
		} else if (isset($_FILES['txtaadharbckimage']) && !empty($_FILES['txtaadharbckimage']['name'])) {

			//image upload
			$r = $this->uploadAadharBackIcon("txtaadharbckimage", $id);
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

		$this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->updateData($id);
		$data["farmerData"] = $selectdata;
		$this->load->view('admin/FarmerEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FarmerModel');
		$this->FarmerModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted!");
		redirect('/admin/FarmerController/index');
	}
	public function view($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		//echo "id: ".$id;
		$this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->viewData($id);
		$data["farmerData"] = $selectdata;

		$storage = $this->FarmerModel->viewStorageData($id);
		$data["storageData"] = $storage;

		$request = $this->FarmerModel->viewWithdrawreqData($id);
		$data["withdrawreqData"] = $request;

		$totalstorage = $this->FarmerModel->TotalStorage($id);
		$data["totalstorage"] = $totalstorage;

		$totalwithdraw = $this->FarmerModel->TotalWithdraw($id);
		$data["totalwithdraw"] = $totalwithdraw;

		$this->load->view('admin/FarmerView', $data);
	}
	public function UpdateToNo($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FarmerModel');
		$this->FarmerModel->UpdateNo($id);
		redirect("/admin/FarmerController/index");
	}
	public function UpdateToYes()
	{
		$id = $this->input->post("txtfarmerid");
		$fcode = $this->input->post("txtfarmercode");

		$this->load->model('admin/FarmerModel');
		//Message Coding
		$phno = $this->input->post("txtfarmercontact");
		$ch = curl_init();

		$user = "meetpatel17501@gmail.com:123456";
		$receipientno = $phno;
		$senderID = "TEST SMS";
		$msgtxt = "Your Code : " . $fcode;
		curl_setopt($ch, CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
		$buffer = curl_exec($ch);

		curl_close($ch);

		$this->FarmerModel->updateStatusToYes($fcode, $id);
		$this->FarmerModel->UpdateYes($id);
		redirect("/admin/FarmerController/index");
	}
	public function UpdateToReject($id, $phno)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FarmerModel');


		//Message Coding

		$ch = curl_init();

		$user = "akshiiitone@gmail.com:123456";
		$receipientno = $phno;
		$senderID = "TEST SMS";
		$msgtxt = "You are Rejected From GiveNGrow";
		curl_setopt($ch, CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
		$buffer = curl_exec($ch);

		curl_close($ch);
		$this->FarmerModel->updateStatusToReject($id);

		redirect("/admin/FarmerController/index");
	}
	public function checkFarmer($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FarmerModel');
		redirect("/admin/FarmerController/farmerStatus/" . str_replace("/", "-", $this->encryption->encode($id)));
	}
	public function farmerStatus($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FarmerModel');
		$selectdata = $this->FarmerModel->updateData($id);
		$data["farmerStatusData"] = $selectdata;



		$this->load->view('admin/FarmerStatus', $data);
	}
	public function viewCalender($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('admin/FarmerModel');
		$viewCalData = $this->FarmerModel->viewCalenderData($id);
		$data["farmerCalenderData"] = $viewCalData;
		$this->load->view('admin/Calender', $data);
	}
}
