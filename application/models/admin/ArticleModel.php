<?php
class ArticleModel extends CI_Model
{
	public function selectData()
	{
		//$res = $this->db->get("tbl_article");
		//select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId
		// left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId
		$res = $this->db->query("select a.*,c.CategoryName,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId order by a.AddedDateTime desc");
		return $res->result();
	}
	public function selectCatData()
	{
		//$res = $this->db->get("tbl_article");
		$res = $this->db->query("select * from tbl_category where CategoryType='Article'");
		return $res->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('ArticleId',$id);
		$data = array('IsApprove' => 'N'); 
		$this->db->update("tbl_article",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('ArticleId',$id);
		$data = array('IsApprove' => 'Y'); 
		$this->db->update("tbl_article",$data);
	}
}
?>