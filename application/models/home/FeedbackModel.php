<?php
class FeedbackModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_feedback",$data);
	}
}
?>