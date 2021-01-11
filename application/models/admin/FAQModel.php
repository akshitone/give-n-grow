<?php
class FAQModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_faq",$data);
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_faq");
		$res = $this->db->query("select f.*,fc.FAQCatName from tbl_faq f left join tbl_faq_category as fc on fc.FAQCatId=f.FAQCatId");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('FAQId',$id);
		$this->db->update("tbl_faq",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("FAQId",$id);
		$this->db->delete("tbl_faq");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_faq where FAQId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_faq where FAQId='".$id."'");
		return $result->result();
	}
}
?>