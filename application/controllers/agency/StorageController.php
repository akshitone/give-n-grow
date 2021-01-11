<?php

class StorageController extends CI_Controller
{
	public function index()
	{
		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->selectData();
		$data["storageData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('agency/StorageTable', $data);
	}
	public function getPrice($pid, $type)
	{
		$id = str_replace("-", "/", $pid);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($pid);

		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->getProductPrice($pid);
		if ($type == "1") {
			echo $selectdata[0]->BuyerPrice1;
		} else if ($type == "2") {
			echo $selectdata[0]->BuyerPrice2;
		} else if ($type == "3") {
			echo $selectdata[0]->BuyerPrice3;
		} else {
			echo "";
		}
	}
	public function getProductData($catid)
	{
		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->getProductBasedOnCategory($catid);
		$html = "<option>Select Product</option>";
		foreach ($selectdata as $item) {
			$html .= "<option value='" . $item->ProductId . "'>" . $item->ProductName . "</option>";
		}
		echo $html;
	}

	public function getWeight($pid)
	{
		$id = str_replace("-", "/", $pid);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($pid);

		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->getProductWeight($pid);
		echo $selectdata[0]->Weight;
	}
	public function getFarmerCode($fcode)
	{
		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->getFarmerCode($fcode);

		$this->load->model('agency/StorageModel');
		$farmerdata = $this->StorageModel->checkFarmer($fcode);
		$data["farmerData"] = $farmerdata;

		$html = "<div>
					<div class='card'>
						<div class='card-body'>";
		if ($farmerdata == 0) {
			//echo "Please Enter Valid Farmer Code";
			$html = "<div class='alert alert-rounded alert-danger alert-dismissible fade show' role='alert'>
					<strong>Oh snap!</strong> This farmer code is not registered.
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true' class='la la-close'></span>
						</button>
				</div>";
			echo $html;
		} else {

			foreach ($selectdata as $item) {
				$status = "";
				$color = "";
				if ($item->Status == "N") {
					$status = "Pending";
					$color = "danger";
				} else {
					$status = "Approve";
					$color = "success";
				}



				$html .= "<div class='profile-card text-center'>
								<div class='thumb-xl member-thumb m-b-10 center-block'>
									<img src='" . base_url() . "/uploads/farmer/" . $item->FarmerIcon . "' style='height:300px; width:300px;' class='rounded-circle img-thumbnail' alt='profile-image'>
								</div>
								<div class=''>
									<h5 class='m-b-5'>" . $item->FarmerName . "</h5>
									<p class='text-muted'>" . $item->FarmerAddress . "</p>
								</div>
								<ul class='list-reset text-left m-t-40'>
									<li class='text-muted'><strong>Mobile:</strong><span class='m-l-15'>" . $item->FarmerContact . "</span></li>
									<li class='text-muted'><strong>Aadhar:</strong> <span class='m-l-15'>" . $item->AadharNumber . "</span></li>									
									<li class='text-muted'><strong>Status:</strong>&nbsp;&nbsp;&nbsp;<span class='badge badge-" . $color . "'>" . $status . "</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>";
				echo $html;
			}
		}
	}
	public function add()
	{
		$this->load->model('agency/ProductModel');
		$selectdata = $this->ProductModel->selectData();
		$data["productData"] = $selectdata;

		$this->load->model('agency/FarmerModel');
		$selectdata = $this->FarmerModel->selectData();
		$data["farmerData"] = $selectdata;

		$this->load->model('agency/AgencyModel');
		$selectdata = $this->AgencyModel->selectData();
		$data["agencyData"] = $selectdata;

		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->selectData();
		$data["storageData"] = $selectdata;

		$this->load->model('agency/StorageModel');
		$categorydata = $this->StorageModel->getCategory();
		$data["categoryData"] = $categorydata;

		$this->load->view('agency/StorageAdd', $data);
	}
	public function insertData()
	{
		$fcode = $this->input->post("fid");
		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->getFarmerCode($fcode);
		$id = "";
		foreach ($selectdata as $item) {
			$id = $item->FarmerId;
		}
		$pname = $this->input->post("txtproductid");
		$weight = $this->input->post("txtweight");
		$agency = $this->session->userdata["agencyloggedin"]["AgencyName"];
		$data = array(
			"AgencyId" => $this->session->userdata["agencyloggedin"]["AgencyId"],
			"FarmerId" => $id,
			"ProductId" => $pname,
			"ProductPrice" => $this->input->post("txtpriceamt"),
			"ProductType" => $this->input->post("txtprodtype"),
			"Weight" => $weight,
			"TotalPayment" => $this->input->post("txttotpayment")
		);
		$this->load->model('agency/StorageModel');
		$res = $this->StorageModel->insert($data);
		if ($res == 1) {
			$this->session->set_flashdata("add", "Inserted Successfully!!");
			$this->load->model('agency/StorageModel');
			$selectdata = $this->StorageModel->sendNotification($agency);
			$this->add();
		} else {
			echo "error";
		}
	}
	public function updateData()
	{
		$data = array(
			"AgencyId" => $this->session->userdata["agencyloggedin"]["AgencyId"],
			"FarmerId" => $this->input->post("txtfarmerid"),
			"ProductId" => $this->input->post("txtproductid"),
			"ProductPrice" => $this->input->post("txtpriceamt"),
			"ProductType" => $this->input->post("txtprodtype"),
			"Weight" => $this->input->post("txtweight"),
			"TotalPayment" => $this->input->post("txttotpayment")
		);
		$this->load->model('agency/StorageModel');
		$id = $this->input->post("txtstorageid");
		$this->StorageModel->saveData($data, $id);
		$this->index();
	}
	public function update($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('agency/ProductModel');
		$selectdata = $this->ProductModel->selectData();
		$data["productData"] = $selectdata;

		$this->load->model('agency/FarmerModel');
		$selectdata = $this->FarmerModel->selectData();
		$data["farmerData"] = $selectdata;

		$this->load->model('agency/AgencyModel');
		$selectdata = $this->AgencyModel->selectData();
		$data["agencyData"] = $selectdata;

		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->selectStorageData($id);
		$data["storageData"] = $selectdata;

		$this->load->model('agency/StorageModel');
		$categorydata = $this->StorageModel->getCategory();
		$data["categoryData"] = $categorydata;

		$this->load->view('agency/StorageEdit', $data);
	}
	public function delete($id)
	{
		$id = str_replace("-", "/", $id);
		$this->load->library('encryption');

		$id = $this->encryption->decrypt($id);

		$this->load->model('agency/StorageModel');
		$this->StorageModel->deleteData($id);
		$this->session->set_flashdata("delete", "Deleted Successfull!!");
		$this->index();
	}
	public function search()
	{
		$start = $this->input->post("txtstartdate");
		$end = $this->input->post("txtenddate");
		$this->load->model('agency/StorageModel');
		$selectdata = $this->StorageModel->search($start, $end);
		$data["storageData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('agency/StorageTable', $data);
	}
}
