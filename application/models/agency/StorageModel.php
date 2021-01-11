<?php
class StorageModel extends CI_Model
{	
	public function insert($data)
	{
		return $this->db->insert("tbl_storage",$data);
	}
	public function sendNotification($agency)
	{
		$res = $this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (NULL,NULL,NULL,'Stock Added','New Stock Added by ".$agency." Agency')");
	}
	public function getProductName($pname)
	{
		$res=$this->db->query("select ProductName from tbl_product where ProductId='".$pname."' limit 1");
		return $res->result();
	}
	public function getFarmerName($id)
	{
		$res=$this->db->query("select FarmerName from tbl_farmer where FarmerId='".$id."'");
		return $res->result();
	}
	public function getCategory()
	{
		$res = $res = $this->db->query("select * from tbl_category where CategoryType='Product'");
		return $res->result();
	}
	public function getProductBasedOnCategory($catid)
	{
		$res=$this->db->query("select * from tbl_product where CategoryId='".$catid."' and IsActive='Y'");
		return $res->result();
	}
	public function getProductPrice($pid)
	{
		$res = $this->db->query("select * from tbl_product_price_date where ProductId='".$pid."' order by PriceDate DESC limit 1");
		return $res->result();
	}
	public function getProductWeight($pid)
	{
		$res = $this->db->query("select * from tbl_product where ProductId='".$pid."'");
		return $res->result();
	}
	public function getFarmerCode($fcode)
	{
		$res = $this->db->query("select * from tbl_farmer where FarmerCode='".$fcode."'");
		return $res->result();
	}
	public function checkFarmer($fcode)
	{
		$res = $this->db->query("select * from tbl_farmer where FarmerCode='".$fcode."'");
		return $res->num_rows();
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_storage");
		$res = $this->db->query("select s.*,a.AgencyName,f.FarmerName,p.ProductName from tbl_storage as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_product as p on p.ProductId=s.ProductId where a.AgencyId='".$this->session->userdata["agencyloggedin"]["AgencyId"]."' order by s.AddedDate desc");
		return $res->result();
	}
	public function selectStorageData($id)
	{
		//$res = $this->db->get("tbl_storage");
		$res = $this->db->query("select s.*,a.AgencyName,f.FarmerName,p.ProductName from tbl_storage as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_product as p on p.ProductId=s.ProductId where s.StorageId='".$id."'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('StorageId',$id);
		$this->db->update("tbl_storage",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("StorageId",$id);
		$this->db->delete("tbl_storage");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_storage where StorageId='".$id."'");
		return $result->result();
	}
	public function search($start,$end)
	{
		//$res = $this->db->get("tbl_storage");
		$res = $this->db->query("select s.*,a.AgencyName,f.FarmerName,p.ProductName from tbl_storage as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_product as p on p.ProductId=s.ProductId where a.AgencyId='".$this->session->userdata["agencyloggedin"]["AgencyId"]."' and odate>='".$start." 00:00:00' and odate<='".$end." 59:59:59'");
		return $res->result();
	}
	
}

?>