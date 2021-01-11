<?php
class FAQModel extends CI_Model
{
    public function getData()
    {
        $res = $this->db->query("select * from tbl_faq");
		return $res->result();
    }
}
?>