<?php
class QuestionModel extends CI_Model
{
	public function selectData()
	{
		//$res = $this->db->get("tbl_question");
		//$res=$this->db->query("select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_question s left join tbl_product as p on p.ProductId=s.ProductId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId");
		$res=$this->db->query("select q.*,f.FarmerName,c.CategoryName from tbl_question q left join tbl_farmer as f on f.FarmerId=q.FarmerId left join tbl_category as c on c.CategoryId=q.CategoryId order by q.QuestionDateTime desc");
		return $res->result();
	}
	public function getQuestionData($id)
	{
		$result=$this->db->query("select q.*,c.CategoryType from tbl_question as q left join tbl_category as c on c.CategoryId=q.CategoryId where q.QuestionId='".$id."'");
		return $result->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('QuestionId',$id);
		$this->db->update("tbl_question",$data);
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_question where QuestionId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('QuestionId',$id);
		$data = array('IsApprove' => 'N'); 
		$this->db->update("tbl_question",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('QuestionId',$id);
		$data = array('IsApprove' => 'Y'); 
		$this->db->update("tbl_question",$data);
	}
}
?>