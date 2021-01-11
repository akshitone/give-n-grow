<?php
class ExpertModel extends CI_Model
{
	public function selectData()
	{
		$res = $this->db->get("tbl_expert");
		return $res->result();
	}
	public function viewData($id)
	{	
		$result=$this->db->query("select * from tbl_expert where ExpertId='".$id."'");
		return $result->result();
	}
	public function viewArticleData()
	{	
		$result = $this->db->query("select a.*,c.CategoryName,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId where a.ExpertId='".$this->session->userdata["expertloggedin"]["ExpertId"]."' order by AddedDateTime DESC Limit 2");
		return $result->result();
	}
}
?>