<?php
class ArticleModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_article",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_article");
		//select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId
		// left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId
		$res = $this->db->query("select a.*,c.CategoryName,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId where a.ExpertId='".$this->session->userdata["expertloggedin"]["ExpertId"]."' order by a.AddedDateTime desc");
		return $res->result();
	}
	public function selectCatData()
	{
		//$res = $this->db->get("tbl_article");
		$res = $this->db->query("select * from tbl_category where CategoryType='Article'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('ArticleId',$id);
		$this->db->update("tbl_article",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("ArticleId",$id);
		$this->db->delete("tbl_article");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_article where ArticleId='".$id."'");
		return $result->result();
	}
	public function UpdateImageName1($imagename,$id)
	{
		$this->db->query("update tbl_article set Image1='".$imagename."' where ArticleId='".$id."'");
	}
	public function UpdateImageName2($imagename,$id)
	{
		$this->db->query("update tbl_article set Image2='".$imagename."' where ArticleId='".$id."'");
	}
	public function getFarmerId()
	{
		$result=$this->db->query("select FarmerId from tbl_farmer");
		return $result->result();
	}
	public function sendNotification($farmerid)
	{
		$result=$this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (".$farmerid.",NULL,NULL,'Article','New Article Added by ".$this->session->userdata["expertloggedin"]["ExpertName"]."')");
	}
}
?>