<?php
class ProductModel extends CI_Model
{
	public function selectSingleData($id)
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where p.ProductId='".$id."'");
		return $res->result();
	}
	public function selectData()
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId");
		return $res->result();
	}
	public function selectRelatedData()
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId order by RAND() limit 3");
		return $res->result();
	}
	public function selectExpertData()
	{
		$res = $this->db->query("select * from tbl_expert");
		return $res->result();
	}
	public function selectVegData()
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where c.CategoryName='Vegetables'");
		return $res->result();
	}
	public function selectFruitsData()
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where c.CategoryName='Fruits'");
		return $res->result();
	}
	public function selectCatData()
	{
		$res = $this->db->query("select * from tbl_category where CategoryType='Product'");
		return $res->result();
	}
	public function viewData($id)
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId where p.ProductId='".$id."'");
		return $res->result();
	}
}
?>