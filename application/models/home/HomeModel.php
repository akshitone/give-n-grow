<?php

class HomeModel extends CI_Model
{
    public function getProduct()
		{
			$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId");
			return $res->result();
    }
    public function selectCatData()
		{	
			$res = $this->db->query("select * from tbl_category where CategoryType='Product'");
			return $res->result();
    }
    public function showLimitProduct()
		{
			$res = $this->db->query("select p.*,c.CategoryName from tbl_product p left join tbl_category as c on c.CategoryId=p.CategoryId limit 0,6");
			return $res->result();
		}
		public function getAnswerData()
		{	
			$res = $this->db->query("select a.*,q.QuestionId,q.Title,e.ExpertName,e.Email,e.ExpertIcon from tbl_answer as a left join tbl_question as q on q.QuestionId=a.QuestionId left join tbl_expert as e on e.ExpertId=a.ExpertId Where a.IsApprove='Y'");
			return $res->result();
    }
}

?>