<?php
class StockModel extends CI_Model
{
    public function selectData()
	{
		//$res = $this->db->get("tbl_product");
        $res = $this->db->query("select p.*,(select sum(Weight) from tbl_storage where ProductId=p.ProductId) as totalstorage,(select sum(Weight) from tbl_seller where ProductId=p.ProductId) as totalsell from tbl_product p");
        //$res= $this->db->query("select p.ProductId,p.ProductName,SUM(s.Weight) from tbl_storage s left join tbl_product as p on p.ProductId=s.ProductId Group by s.Weight");
		return $res->result();
	}
}
?>