<?php
class QuestionModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_question",$data);
		return $this->db->insert_id();
	}
	public function selectCatData()
	{
		//$res = $this->db->get("tbl_question");
		$res = $this->db->query("select * from tbl_category where CategoryType='Question'");
		return $res->result();
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_question set ImageUrl='".$imagename."' where QuestionId='".$id."'");
	}
}
?>