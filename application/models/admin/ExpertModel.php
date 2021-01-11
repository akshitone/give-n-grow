<?php
class ExpertModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_expert",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		$res = $this->db->query("select e.*,c.CategoryName from tbl_expert e left join tbl_category as c on c.CategoryId=e.CategoryId order by e.RegistrationDateTime desc");
		return $res->result();
	}
	public function selectCatData()
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select * from tbl_category where CategoryType='Expert'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('ExpertId',$id);
		$this->db->update("tbl_expert",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("ExpertId",$id);
		$this->db->delete("tbl_expert");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_expert where ExpertId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{	
		$result=$this->db->query("select * from tbl_expert where ExpertId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('ExpertId',$id);
		$data = array('IsActive' => 'N'); 
		$this->db->update("tbl_expert",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('ExpertId',$id);
		$data = array('IsActive' => 'Y'); 
		$this->db->update("tbl_expert",$data);
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_expert set ExpertIcon='".$imagename."' where ExpertId='".$id."'");
	}
	public function viewArticleData($id)
	{	
		$result = $this->db->query("select a.*,c.CategoryName,e.ExpertName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId left join tbl_expert as e on e.ExpertId=a.ExpertId where a.ExpertId='".$id."' order by AddedDateTime DESC Limit 2");
		return $result->result();
	}
}
?>