<?php
class FinalPayModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_final_payment",$data);
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_storage");
		$res=$this->db->query("select fp.*,f.FarmerName,f.FarmerId from tbl_final_payment fp left join tbl_withdraw_req as w on w.RequestId=fp.RequestId left join tbl_farmer as f on f.FarmerId=w.FarmerId order by fp.PaymentDateTime desc");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('PaymentId',$id);
		$this->db->update("tbl_final_payment",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("PaymentId",$id);
		$this->db->delete("tbl_final_payment");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_final_payment where PaymentId='".$id."'");
		return $result->result();
	}
	public function sendNotificationToFarmer($id)
	{
		$this->db->query("insert into tbl_notification(FarmerId,AgencyId,ExpertId,Title,Description) values((select FarmerId from tbl_withdraw_req where RequestId='".$id."'),NULL,NULL,'Payment','Your Payment Request is acceppted.')");
	}
}
?>