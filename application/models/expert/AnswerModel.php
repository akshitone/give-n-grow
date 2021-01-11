<?php
class AnswerModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_answer",$data);
	}
	public function selectData()
	{
		$res = $this->db->query("select a.*,q.Title,e.ExpertName from tbl_answer a left join tbl_question as q on q.QuestionId=a.QuestionId left join tbl_expert as e on e.ExpertId=a.ExpertId where a.ExpertId='".$this->session->userdata["expertloggedin"]["ExpertId"]."' order by a.AnswerDateTime desc");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('AnswerId',$id);
		$this->db->update("tbl_answer",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("AnswerId",$id);
		$this->db->delete("tbl_answer");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_answer where AnswerId='".$id."'");
		return $result->result();
	}
}
?>