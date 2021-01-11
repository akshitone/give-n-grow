<?php

class NotificationModel extends CI_Model
{
    public function selectData()
	{
		$res = $this->db->get("tbl_notification");
		return $res->result();
    }
    
    public function insert($data)
	{
		return $this->db->insert("tbl_notification",$data);
	}
    
}


?>