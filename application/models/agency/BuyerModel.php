<?php
class BuyerModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_buyer",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		$res = $this->db->query("select * from tbl_buyer order by RegistrationDate desc");
		return $res->result();
	}
	public function sendNotification($name,$agency)
	{
		$res = $this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (NULL,NULL,NULL,'Buyer Added','New Buyer ".$name." Added by ".$agency." Agency')");
	}
	public function saveData($data,$id)
	{
		$this->db->where('BuyerId',$id);
		$this->db->update("tbl_buyer",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("BuyerId",$id);
		$this->db->delete("tbl_buyer");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_buyer where BuyerId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_buyer where BuyerId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('BuyerId',$id);
		$data = array('Status' => 'N'); 
		$this->db->update("tbl_buyer",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('BuyerId',$id);
		$data = array('Status' => 'Y'); 
		$this->db->update("tbl_buyer",$data);
	}
	public function UpdateImageName($imagename,$id)
	{
		$this->db->query("update tbl_buyer set BuyerIcon='".$imagename."' where BuyerId='".$id."'");
	}
	public function viewSellerData($id)
	{
		//$res = $this->db->get("tbl_product");
		$res = $this->db->query("select s.*,a.AgencyName,b.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as b on b.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId where s.BuyerId='".$id."' order by s.AddedDate desc");
		return $res->result();
	}
}
?>