<?php
class AnswerModel extends CI_Model
{
	public function selectData()
	{
		$res = $this->db->query("select a.*,q.Title,e.ExpertName from tbl_answer a left join tbl_question as q on q.QuestionId=a.QuestionId left join tbl_expert as e on e.ExpertId=a.ExpertId order by a.AnswerDateTime desc");
		return $res->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('AnswerId',$id);
		$data = array('IsApprove' => 'N'); 
		$this->db->update("tbl_answer",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('AnswerId',$id);
		$data = array('IsApprove' => 'Y'); 
		$this->db->update("tbl_answer",$data);
	}
}
?>