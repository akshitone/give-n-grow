<?php
class ArticleModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_comment_reply",$data);
	}
	public function selectData()
	{
		$res = $this->db->query("select a.*,c.CategoryName,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId where a.IsApprove='Y' order by a.ArticleDateTime desc");
		return $res->result();
	}
	public function selectArticleData($id)
	{
		$res = $this->db->query("select a.*,c.CategoryName,c.CategoryId,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId where c.CategoryId='".$id."'");
		return $res->result();
	}
	public function selectCatData()
	{
		$res = $this->db->query("select * from tbl_category where CategoryType='Article'");
		return $res->result();
	}
	public function selectExpertData()
	{
		$res = $this->db->query("select * from tbl_expert");
		return $res->result();
	}
	public function selectSingleData($id)
	{
		$res = $this->db->query("select a.*,c.CategoryName,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId where a.ArticleId='".$id."'");
		return $res->result();
	}
	public function selectCommentData($id)
	{
		$res = $this->db->query("select c.*,f.FarmerName,f.FarmerIcon from tbl_comment_reply c left join tbl_article as a on a.ArticleId=c.ArticleId left join tbl_farmer as f on f.FarmerId=c.FarmerId where a.ArticleId='".$id."'");
		return $res->result();
	}

	public function insertLike($data)
	{
		return $this->db->insert("tbl_like",$data);
	}
	public function selectLikeData($id)
	{
		$res = $this->db->query("select * from tbl_like where ArticleId='".$id."'");
		return $res->num_rows();
	}
	public function checkLikeData($id)
	{
		$res=$this->db->query("select * from tbl_like where FarmerId='".$this->session->userdata["farmerloggedin"]["FarmerId"]."' and ArticleId='".$id."'");
		return $res->num_rows();
	}
	public function getComment($id)
	{
		$res=$this->db->query("select * from tbl_comment_reply where ArticleId='".$id."'");
		return $res->num_rows();
	}
	public function insertRating($data)
	{
		return $this->db->insert("tbl_rating",$data);
	}
	public function checkRatingData($id)
	{
		$res=$this->db->query("select * from tbl_rating where FarmerId='".$this->session->userdata["farmerloggedin"]["FarmerId"]."' and ArticleId='".$id."'");
		return $res->num_rows();
		//return $res->result();
	}
	public function returnRatingData($id)
	{
		$res=$this->db->query("select * from tbl_rating where FarmerId='".$this->session->userdata["farmerloggedin"]["FarmerId"]."' and ArticleId='".$id."'");
		return $res->result();
	}
	public function averageRating($id)
	{
		$res=$this->db->query("select sum(Rating) as totalrating,count(*) as totalrows from tbl_rating where ArticleId='".$id."'");
		return $res->result();
	}
}
?>