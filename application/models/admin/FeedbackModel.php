<?php
class FeedbackModel extends CI_Model
{
	public function selectData()
	{
		//$res = $this->db->query("select s.*,a.AgencyName,b.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as b on b.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId");
		$res = $this->db->query("select * from tbl_feedback");
		return $res->result();
	}
}

?>