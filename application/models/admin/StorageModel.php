<?php
class StorageModel extends CI_Model
{
	public function selectData()
	{
		//$res = $this->db->get("tbl_storage");
		$res=$this->db->query("select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId order by s.AddedDate desc");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('StorageId',$id);
		$this->db->update("tbl_storage",$data);
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_storage where StorageId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('StorageId',$id);
		$data = array('Status' => 'N'); 
		$this->db->update("tbl_storage",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('StorageId',$id);
		$data = array('Status' => 'Y'); 
		$this->db->update("tbl_storage",$data);
	}
}
?>