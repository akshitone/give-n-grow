<?php
class SubsidyModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_subsidy",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		$res = $this->db->query("select p.*,c.CategoryName from tbl_subsidy p left join tbl_category as c on c.CategoryId=p.CategoryId order by p.SubsidyDateTime desc");
		return $res->result();
	}
	public function selectCatData()
	{
		$res = $this->db->query("select * from tbl_category where CategoryType='Subsidy'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('SubsidyId',$id);
		$this->db->update("tbl_subsidy",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("SubsidyId",$id);
		$this->db->delete("tbl_subsidy");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_subsidy where SubsidyId='".$id."'");
		return $result->result();
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_subsidy set Image='".$imagename."' where SubsidyId='".$id."'");
	}
}
?>