<?php
class SellerModel extends CI_Model
{	
	public function insert($data)
	{
		return $this->db->insert("tbl_seller",$data);
	}
	public function selectData()
	{
		$res = $this->db->query("select s.*,a.AgencyName,b.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as b on b.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId order by s.AddedDate desc");
		return $res->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('SellerId',$id);
		$data = array('Status' => 'N'); 
		$this->db->update("tbl_seller",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('SellerId',$id);
		$data = array('Status' => 'Y'); 
		$this->db->update("tbl_seller",$data);
	}
}

?>