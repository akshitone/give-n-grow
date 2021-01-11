<?php
class FarmerModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_farmer",$data);
		return $this->db->insert_id();
	}
	public function selectData()
	{
		$res = $this->db->query("select * from tbl_farmer order by RegistrationDate desc");
		return $res->result();
	}
	public function sendNotification($name,$agency)
	{
		$res = $this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (NULL,NULL,NULL,'Farmer Added','New Farmer ".$name." Added by ".$agency." Agency')");
	}
	public function viewStorageData($id)
	{
		$result=$this->db->query("select s.*,a.AgencyName,p.ProductName,f.FarmerName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_agency as a on a.AgencyId=s.AgencyId where s.FarmerId='".$id."' order by s.AddedDate desc");
		return $result->result();
		
	}
	public function viewWithdrawreqData($id)
	{
		$result=$this->db->query("select w.*,f.FarmerName from tbl_withdraw_req w left join tbl_farmer as f on f.FarmerId=w.FarmerId where w.FarmerId='".$id."' order by w.RequestedDateTime desc");
		return $result->result();
		
	}
	public function saveData($data,$id)
	{
		$this->db->where('FarmerId',$id);
		$this->db->update("tbl_farmer",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("FarmerId",$id);
		$this->db->delete("tbl_farmer");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_farmer where FarmerId='".$id."'");
		return $result->result();
	}
	public function viewData($id)
	{
		$result=$this->db->query("select * from tbl_farmer where FarmerId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('FarmerId',$id);
		$data = array('Status' => 'N'); 
		$this->db->update("tbl_farmer",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('FarmerId',$id);
		$data = array('Status' => 'Y'); 
		$this->db->update("tbl_Farmer",$data);
	}
	public function TotalStorage($id)
	{
		$result=$this->db->query("select sum(TotalPayment) as TotalPayment from tbl_storage where FarmerId='".$id."' and Status='Y'");
		return $result->result();
	}
	public function TotalWithdraw($id)
	{
		$result=$this->db->query("select sum(Amount) as Amount from tbl_withdraw_req where FarmerId='".$id."' and Status='Y'");
		return $result->result();
	}
	public function UpdateFarmerImage($imagename,$id)
	{
		$this->db->query("update tbl_farmer set FarmerIcon='".$imagename."' where FarmerId='".$id."'");
	}
	public function UpdateAadharFrontImage($imagename,$id)
	{
		$this->db->query("update tbl_farmer set AadharFrontImage='".$imagename."' where FarmerId='".$id."'");
	}
	public function UpdateAadharBackImage($imagename,$id)
	{
		$this->db->query("update tbl_farmer set AadharBackImage='".$imagename."' where FarmerId='".$id."'");
	}
	public function viewCalenderData($id)
	{
		$result=$this->db->query("select s.*,p.ProductName from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId where s.FarmerId='".$id."'");
		return $result->result();
	}
}
?>