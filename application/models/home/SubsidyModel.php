<?php
class SubsidyModel extends CI_Model
{
    public function getData()
    {
        $res = $this->db->query("select * from tbl_subsidy order by SubsidyDateTime desc");
		return $res->result();
    }
}
?>