<?php
class ProductModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_product",$data);
		return $this->db->insert_id();
	}
	public function sendNotification($name,$agency)
	{
		$res = $this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (NULL,NULL,NULL,'Product Added','New Product ".$name." Added by ".$agency." Agency')");
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId order by p.ProductAddedDate desc");
		return $res->result();
	}
	public function selectVegData()
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where c.CategoryName='Vegetables'");
		return $res->result();
	}
	public function selectFruitsData()
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where c.CategoryName='Fruits'");
		return $res->result();
	}
	public function selectCatData()
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select * from tbl_category where CategoryType='Product'");
		return $res->result();
	}
	
	public function getStorageChart()
	{
		$res = $this->db->query("SELECT sum(Weight) as TotalWeight,(select ProductName from  tbl_product where ProductId=tbl_storage.ProductId) as pname,ProductId FROM tbl_storage  group by ProductId");
		return $res->result();
	}
	public function viewStorageData($id)
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId where s.ProductId='".$id."' order by s.AddedDate desc");
		return $res->result();
	}
	public function viewSellerData($id)
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select s.*,a.AgencyName,b.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as b on b.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId where s.ProductId='".$id."' order by s.AddedDate desc");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('ProductId',$id);
		$this->db->update("tbl_product",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("ProductId",$id);
		$this->db->delete("tbl_product");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_product where ProductId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where p.ProductId='".$id."'");
		return $res->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('ProductId',$id);
		$data = array('IsActive' => 'N'); 
		$this->db->update("tbl_product",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('ProductId',$id);
		$data = array('IsActive' => 'Y'); 
		$this->db->update("tbl_product",$data);
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_product set ProductIcon='".$imagename."' where ProductId='".$id."'");
	}
}
?>