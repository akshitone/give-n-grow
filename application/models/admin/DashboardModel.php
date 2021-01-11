<?php 

class DashboardModel extends CI_Model
{
    public function showNotification()
    {
        $res = $this->db->query("SELECT * FROM tbl_notification ORDER BY NotificationDate DESC LIMIT 2");
		return $res->result();
    }
    public function showPurchase()
	{
		$res = $this->db->query("select s.*,a.AgencyName,f.FarmerName,p.ProductName from tbl_storage as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_farmer as f on f.FarmerId=s.FarmerId left join tbl_product as p on p.ProductId=s.ProductId order by s.AddedDate DESC limit 10");
		return $res->result();
    }
    public function showSelling()
	{
		$res = $this->db->query("select s.*,a.AgencyName,b.BuyerName,p.ProductName from tbl_seller as s left join tbl_agency as a on a.AgencyId=s.AgencyId left join tbl_buyer as b on b.BuyerId=s.BuyerId left join tbl_product as p on p.ProductId=s.ProductId order by s.AddedDate DESC limit 10");
		return $res->result();
    }
    public function showAgency()
    {
        $res = $this->db->query("select count(*) as totalagency from tbl_agency where IsActive='Y'");
        return $res->result();
    }
    public function showFarmer()
    {
        $res = $this->db->query("select count(*) as totalfarmer from tbl_farmer where Status='Y'");
        return $res->result();
    }
    public function showExpert()
    {
        $res = $this->db->query("select count(*) as totalexpert from tbl_expert where IsActive='Y'");
        return $res->result();
    }
    public function getPurchase()
    {
        $res = $this->db->query("select sum(TotalPayment) as totalpayment from tbl_storage where Status='Y'");
        return $res->result();
    }
    public function getSell()
    {
        $res = $this->db->query("select sum(TotalPayment) as totalsellpayment from tbl_seller where Status='Y'");
        return $res->result();
    }
    public function getAgency()
    {
        $res = $this->db->query("select count(*) as totalagency,(select count(*) from tbl_agency where IsActive='Y') as totalagencyactive from tbl_agency");
        return $res->result();
    }
    public function getFarmer()
    {
        $res = $this->db->query("select count(*) as totalfarmer,(select count(*) from tbl_farmer where Status='Y') as totalfarmeractive from tbl_farmer");
        return $res->result();
    }
    public function getExpert()
    {
        $res = $this->db->query("select count(*) as totalexpert,(select count(*) from tbl_expert where IsActive='Y') as totalexpertactive from tbl_expert");
        return $res->result();
    }
}    

?>