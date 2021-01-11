<?php
class PriceDateModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_product_price_date",$data);
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_product_price_date");
		$res = $this->db->query("select d.*,p.ProductName from tbl_product_price_date d left join tbl_product as p on p.ProductId=d.ProductId order by d.PriceDate DESC");
		return $res->result();
	}
	public function selectCatData()
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select * from tbl_category where CategoryType='Product'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('PriceId',$id);
		$this->db->update("tbl_product_price_date",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("PriceId",$id);
		$this->db->delete("tbl_product_price_date");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_product_price_date where PriceId='".$id."'");
		return $result->result();
	}
	public function getProductBasedOnCategory($catid)
	{
		$res=$this->db->query("select * from tbl_product where CategoryId='".$catid."'");
		return $res->result();
	}
}
?>