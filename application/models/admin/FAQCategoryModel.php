<?php
class FAQCategoryModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_faq_category",$data);
	}
	public function selectData()
	{
		$res = $this->db->get("tbl_faq_category");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('FAQCatId',$id);
		$this->db->update("tbl_faq_category",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("FAQCatId",$id);
		$this->db->delete("tbl_faq_category");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_faq_category where FAQCatId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_faq_category where FAQCatId='".$id."'");
		return $result->result();
	}
}
?>