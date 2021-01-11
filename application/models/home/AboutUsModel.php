<?php
class AboutUsModel extends CI_Model
{
    public function getFarmerData()
    {
        $res = $this->db->query("select * from tbl_expert");
		return $res->result();
    }
}
?>