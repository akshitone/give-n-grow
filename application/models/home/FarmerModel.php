<?php
class FarmerModel extends CI_Model
{
	public function insert($data)
	{
		$result = $this->db->insert("tbl_farmer",$data);
		return $this->db->insert_id();
    }
    public function UpdateFarmerImage($imagename,$id)
	{
		$this->db->query("update tbl_farmer set FarmerIcon='".$imagename."' where FarmerId='".$id."'");
    }
    public function uploadAadharFrontImage($imagename,$id)
	{
		$this->db->query("update tbl_farmer set AadharFrontImage='".$imagename."' where FarmerId='".$id."'");
    }
    public function uploadAadharBackImage($imagename,$id)
	{
		$this->db->query("update tbl_farmer set AadharBackImage='".$imagename."' where FarmerId='".$id."'");
	}
	public function sendNotification($name)
	{
		$res = $this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values (NULL,NULL,NULL,'Farmer Added','New Farmer Register ".$name."')");
	}
}
?>