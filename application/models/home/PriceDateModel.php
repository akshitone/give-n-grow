<?php
class PriceDateModel extends CI_Model
{
	public function viewProductPrice($id)
	{
		//$res = $this->db->get("tbl_product_price_date");
		$res = $this->db->query("select d.*,p.ProductName from tbl_product_price_date d left join tbl_product as p on p.ProductId=d.ProductId where p.ProductId='".$id."' order by PriceDate DESC LIMIT 5");
		return $res->result();
	}
}
?>