<?php
class AgencyModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_agency",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		$res = $this->db->query("select * from tbl_agency order by RegistrationTime Desc");
		return $res->result();
	}
	public function viewStorageData($id)
	{
		$result=$this->db->query("select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId where s.AgencyId='".$id."' order by s.AddedDate desc");
		return $result->result();
	}
	public function viewSellData($id)
	{
		$result=$this->db->query("select s.*,a.AgencyName,p.ProductName,f.BuyerName from tbl_seller s left join tbl_product as p on p.ProductId=s.ProductId left join tbl_buyer as f on f.BuyerId=s.BuyerId left join tbl_agency as a on a.AgencyId=s.AgencyId where s.AgencyId='".$id."' order by s.AddedDate desc");
		return $result->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('AgencyId',$id);
		$this->db->update("tbl_agency",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("AgencyId",$id);
		$this->db->delete("tbl_agency");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_agency where AgencyId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{	
		$result=$this->db->query("select * from tbl_agency where AgencyId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('AgencyId',$id);
		$data = array('IsActive' => 'N'); 
		$this->db->update("tbl_agency",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('AgencyId',$id);
		$data = array('IsActive' => 'Y'); 
		$this->db->update("tbl_agency",$data);
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_agency set AgencyIcon='".$imagename."' where AgencyId='".$id."'");
	}
}
?>