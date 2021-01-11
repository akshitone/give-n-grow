<?php
class WithdrawReqModel extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert("tbl_withdraw_req",$data);
	}
	public function selectData()
	{
		//$res = $this->db->get("tbl_storage");
		$res=$this->db->query("select w.*,f.FarmerName from tbl_withdraw_req w left join tbl_farmer as f on f.FarmerId=w.FarmerId order by w.RequestedDateTime desc");
		return $res->result();
	}
	public function getData($id)
	{
		$res = $this->db->query("select wr.*,f.FarmerName,f.FarmerId from tbl_withdraw_req as wr left join tbl_farmer as f on f.FarmerId=wr.FarmerId where wr.RequestId='".$id."'");
		return $res->result();
	}
	public function saveData($data,$id)
	{
		$this->db->where('RequestId',$id);
		$this->db->update("tbl_withdraw_req",$data);
	}
	public function deleteData($id)
	{
		$this->db->where("RequestId",$id);
		$this->db->delete("tbl_withdraw_req");
	}
	public function updateData($id)
	{
		$result=$this->db->query("select * from tbl_withdraw_req where RequestId='".$id."'");
		return $result->result();
	}
	public function UpdateNo($id)
	{
		$this->db->where('RequestId',$id);
		$data = array('Status' => 'N'); 
		$this->db->update("tbl_withdraw_req",$data);
	}
	public function UpdateYes($id)
	{
		$this->db->where('RequestId',$id);
		$data = array('Status' => 'Y'); 
		$this->db->update("tbl_withdraw_req",$data);
	}
}
?>