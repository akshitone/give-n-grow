<?php
class SellerModel extends CI_Model
{	
	public function insert($data)
	{
		return $this->db->insert("tbl_seller",$data);
	}
	public function sendNotification($agency)
	{
		$res = $this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (NULL,NULL,NULL,'Stock Selling','Stock Selling by ".$agency." Agency')");
	}
	public function getCategory()
	{
		$res = $res = $this->db->query("select * from tbl_category where CategoryType='Product'");
		return $res->result();
	}
	public function getStorage($pid,$type)
	{
		$res = $this->db->query("select s.*,p.ProductName from tbl_storage as s left join tbl_product as p on p.ProductId=s.ProductId where p.ProductId='".$pid."' and s.ProductType='".$type."'");
		return $res->result();
	}
	public function getSell($pid,$type)
	{
		$res = $this->db->query("select s.*,p.ProductName from tbl_seller as s left join tbl_product as p on p.ProductId=s.ProductId where p.ProductId='".$pid."' and s.ProductType='".$type."'");
		return $res->result();
	}
	public function checkBuyer($bcode)
	{
		$res = $this->db->query("select * from tbl_buyer where BuyerCode='".$bcode."'");
		return $res->num_rows();
	}
	public function checkWeight($pid,$type)
	{
		$res = $this->db->query("select s.*,p.ProductName from tbl_storage as s left join tbl_product as p on p.ProductId=s.ProductId where p.ProductId='".$pid."' and s.ProductType='".$type."'");
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
	public function getBuyerCode($bcode)
	{
		$res = $this->db->query("select * from tbl_buyer where BuyerCode='".$bcode."'");
		return $res->result();
	}
	public function selectData()
	{
		$res = $this->db->query("select s.*,a.AgencyName,b.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as b on b.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId where a.AgencyId='".$this->session->userdata["agencyloggedin"]["AgencyId"]."' order by s.AddedDate desc");
		return $res->result();
	}
	public function selectStorageData($id)
	{
		//$res = $this->db->get("tbl_storage");
		$res = $this->db->query("select s.*,a.AgencyName,f.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as f on f.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId where s.SellerId='".$id."'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('SellerId',$id);
		$this->db->update("tbl_seller",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("SellerId",$id);
		$this->db->delete("tbl_seller");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_seller where SellerId='".$id."'");
		return $result->result();
	}
}

?>