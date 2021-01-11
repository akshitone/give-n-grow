<?php
class CategoryModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_category",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		$res = $this->db->query("select * from tbl_category order by CategoryId desc");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('CategoryId',$id);
		$this->db->update("tbl_category",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("CategoryId",$id);
		$this->db->delete("tbl_category");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_category where CategoryId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_category where CategoryId='".$id."'");
		return $result->result();
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_category set CategoryIcon='".$imagename."' where CategoryId='".$id."'");
	}
}
?>