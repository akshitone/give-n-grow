<?php

class SellerController extends CI_Controller
{
	public function index()
	{
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->selectData();
		$data["sellerData"] = $selectdata;
		$this->load->library('encryption');
		$this->load->view('agency/SellerTable',$data);
	}
	public function getPrice($pid,$type)
	{
		$id = str_replace("-","/",$pid);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($pid);

		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getProductPrice($pid);
		if($type=="1")
		{
			echo $selectdata[0]->SellerPrice1;
		}
		else if($type=="2")
		{
			echo $selectdata[0]->SellerPrice2;
		}
		else if($type=="3")
		{
			echo $selectdata[0]->SellerPrice3;
		}
		else
		{
			echo "";
		}
	}
	public function getProductData($catid)
	{
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getProductBasedOnCategory($catid);
		$html="<option>Select Product</option>";
		foreach($selectdata as $item)
		{
			$html.="<option value='".$item->ProductId."'>".$item->ProductName."</option>";
		}
		echo $html;
	}
	
	public function getWeight($pid)
	{
		$id = str_replace("-","/",$pid);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($pid);
		
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getProductWeight($pid);
		echo $selectdata[0]->Weight;
	}
	public function getStorage($pid,$type)
	{
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getStorage($pid,$type);

		$this->load->model('agency/SellerModel');
		$sellerdata = $this->SellerModel->getSell($pid,$type);

		$totalsellweight=0;
		$totalweight=0;
		$html="<div class='card'>
					<h5 class='card-header'>Storage Tables</h5>
						<div class='card-body'>
							<table id='bs4-table' class='table table-striped table-bordered'>
							<thead>
								<tr>
									<th>Product Name</th>
									<th>ProductType</th>
									<th>Weight</th>
								</tr>
							</thead>
							<tbody>";
							foreach($selectdata as $item)
							{
								$html.="<tr>
									<td>".$item->ProductName."</td>
									<td>".$item->ProductType."</td>
									<td>".$item->Weight."</td>
								</tr>";
								$totalweight=$totalweight+$item->Weight;
							}
							$html.="</tbody>
						</table>";
			echo $html;
			echo "<h4 style='margin-bottom:-15px;'><strong>Total Purchase:".$totalweight."</h4></strong></br>";
			foreach($sellerdata as $item)
			{
				$totalsellweight=$totalsellweight+$item->Weight;
			}
			$totalweight=$totalweight-$totalsellweight;
			echo "<h3><strong>Total Available Stock:".$totalweight."</strong></h3>";	
	}
	public function getSell($pid,$type)
	{
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getSell($pid,$type);
		$totalsell=0;
		$html="<div class='card'>
					<h5 class='card-header'>Selling Tables</h5>
						<div class='card-body'>
							<table id='bs4-table' class='table table-striped table-bordered'>
							<thead>
								<tr>
									<th>Product Name</th>
									<th>ProductType</th>
									<th>Weight</th>
								</tr>
							</thead>
							<tbody>";
							foreach($selectdata as $item)
							{
								$html.="<tr>
									<td>".$item->ProductName."</td>
									<td>".$item->ProductType."</td>
									<td>".$item->Weight."</td>
								</tr>";
								$totalsell=$totalsell+$item->Weight;
							}
							$html.="</tbody>
						</table>";
			echo $html;
			echo "<h4><strong>Total Sell:".$totalsell."</h4></strong>";	
	}
	public function checkWeight($pid,$type,$weight)
	{
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getStorage($pid,$type);
		
		$this->load->model('agency/SellerModel');
		$sellerdata = $this->SellerModel->getSell($pid,$type);

		$totalweight=0;
		$totalsellweight=0;
		foreach($selectdata as $item)
		{
			$totalweight=$totalweight+$item->Weight;
		}
		foreach($sellerdata as $item)
		{
			$totalsellweight=$totalsellweight+$item->Weight;
		}
		$totalweight=$totalweight-$totalsellweight;
		if($weight<=$totalweight)
		{
			$html="<div class='card-footer bg-light'>
						<div class='form-actions'>
							<div class='row'>
								<div class='col-md-12'>
									<div class='row'>
										<div class='offset-sm-3 col-md-5'>
											<button type='submit' class='btn btn-success btn-rounded btn-floating' id='btninsert' name='btninsert'>
									Submit
								</button>
											<button class='btn btn-secondary clear-form btn-rounded btn-outline'>Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>";
		
		}
		else 
		{
			$html="<div class='card-footer bg-light'>
			<div class='form-actions'>
				<div class='row'>
					<div class='col-md-12'>
						<div class='row'>
							<div class='offset-sm-3 col-md-5'>
								
								<button class='btn btn-secondary clear-form btn-rounded btn-outline'>Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>";
		
		}
		echo $html;
	}
	public function getBuyerCode($bcode)
	{
		
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getBuyerCode($bcode);

		$this->load->model('agency/SellerModel');
		$buyerdata = $this->SellerModel->checkBuyer($bcode);
		$data["buyerData"] = $buyerdata;

		$html="<div>
					<div class='card'>
						<div class='card-body'>";
		if($buyerdata==0)
		{
			//echo "Please Enter Valid Farmer Code";
			$html="<div class='alert alert-rounded alert-danger alert-dismissible fade show' role='alert'>
					<strong>Oh snap!</strong> This Buyer code is not registered.
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true' class='la la-close'></span>
						</button>
				</div>";
			echo $html;
		}
		else {
		foreach($selectdata as $item)
		{
			$status="";
			$color="";
			if($item->Status=="N")
			{
				$status="Pending";
				$color="danger";
			}
			else
			{
				$status="Approve";
				$color="success";
			}
			$html.="<div class='profile-card text-center'>
						<div class='thumb-xl member-thumb m-b-10 center-block'>
							<img src='".base_url()."/uploads/buyer/".$item->BuyerIcon."' style='height:300px; width:300px;' class='rounded-circle img-thumbnail' alt='profile-image'>
						</div>
						<div class=''>
							<h5 class='m-b-5'>".$item->BuyerName."</h5>
							<p class='text-muted'>".$item->BuyerAddress."</p>
						</div>
						<ul class='list-reset text-left m-t-40'>
							<li class='text-muted'><strong>Mobile:</strong><span class='m-l-15'>".$item->BuyerContact."</span></li>
							<li class='text-muted'><strong>BuyerCode:</strong> <span class='m-l-15'>".$item->BuyerCode."</span></li>									
							<li class='text-muted'><strong>Status:</strong>&nbsp;&nbsp;&nbsp;<span class='badge badge-".$color."'>".$status."</span></li>
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
		
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->selectData();
		$data["storageData"] = $selectdata;
		
		$this->load->model('agency/SellerModel');
		$categorydata = $this->SellerModel->getCategory();
		$data["categoryData"] = $categorydata;
		
		$this->load->view('agency/SellerAdd',$data);
	}
	public function insertData()
	{
		$fcode=$this->input->post("bid");
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->getBuyerCode($fcode);
		$id="";
		foreach($selectdata as $item)
		{
			$id=$item->BuyerId;
		}
		$agency = $this->session->userdata["agencyloggedin"]["AgencyName"];
		$data=array(
			"AgencyId" =>$this->session->userdata["agencyloggedin"]["AgencyId"],
			"BuyerId" => $id,
			"ProductId" =>$this->input->post("txtproductid"),
			"ProductPrice" =>$this->input->post("txtpriceamt"),
			"ProductType" =>$this->input->post("txtprodtype"),
			"Weight" =>$this->input->post("txtweight"),
			"TotalPayment" =>$this->input->post("txttotpayment")
			);
		$this->load->model('agency/SellerModel');
		$res = $this->SellerModel->insert($data);
		if($res==1)
		{
			$this->session->set_flashdata("add","Inserted Successfully!!");
			$this->load->model('agency/SellerModel');
			$selectdata = $this->SellerModel->sendNotification($agency);
			$this->add();
		}
		else
		{
			echo "error";
		}
	}
	public function updateData()
	{
		$data=array(
			"AgencyId" =>$this->session->userdata["agencyloggedin"]["AgencyId"],
			"BuyerId" =>$this->input->post("txtbuyerid"),
			"ProductId" =>$this->input->post("txtproductid"),
			"ProductPrice" =>$this->input->post("txtpriceamt"),
			"ProductType" =>$this->input->post("txtprodtype"),
			"Weight" =>$this->input->post("txtweight"),
			"TotalPayment" =>$this->input->post("txttotpayment")
			);
		$this->load->model('agency/SellerModel');
		$id=$this->input->post("txtsellerid");
		$this->SellerModel->saveData($data,$id);
		$this->index();
	}
	public function update($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);
		
		$this->load->model('agency/ProductModel');
		$selectdata = $this->ProductModel->selectData();
		$data["productData"] = $selectdata;
		
		$this->load->model('agency/BuyerModel');
		$selectdata = $this->BuyerModel->selectData();
		$data["buyerData"] = $selectdata;
		
		$this->load->model('agency/AgencyModel');
		$selectdata = $this->AgencyModel->selectData();
		$data["agencyData"] = $selectdata;
		
		$this->load->model('agency/SellerModel');
		$selectdata = $this->SellerModel->selectStorageData($id);
		$data["sellerData"] = $selectdata;
		
		$this->load->model('agency/SellerModel');
		$categorydata = $this->SellerModel->getCategory();
		$data["categoryData"] = $categorydata;
		
		$this->load->view('agency/SellerEdit',$data);
	}
	public function delete($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);
		
		$this->load->model('agency/SellerModel');
		$this->SellerModel->deleteData($id);
		$this->session->set_flashdata("delete","Deleted Successfull!!");
		$this->index();
	}
}
