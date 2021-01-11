<?php
class ArticleController extends CI_Controller
{
	public function index()
	{
		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectData();
		$data["articleData"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectCatData();
		$data["articleCatData"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->library('encryption');
		$this->load->view('home/Articles',$data);
	}
	public function showCategory($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectArticleData($id);
		$data["showArticleData"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectCatData($id);
		$data["articleCatData"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectExpertData();
		$data["expertData"] = $selectdata;

		$this->load->library('encryption');
		$this->load->view('home/ArticlesCategoryWise',$data);
	}
	public function view($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectSingleData($id);
		$data["articleData"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectCatData();
		$data["articleCatData"] = $selectdata;
		
		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectCommentData($id);
		$data["commentData"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->selectLikeData($id);
		$data["likeData"] = $selectdata;

		if(isset($this->session->userdata["farmerloggedin"]))
		{
			$this->load->model('home/ArticleModel');
			$selectdata = $this->ArticleModel->checkLikeData($id);
			$data["checkLikeData"] = $selectdata;

			$this->load->model('home/ArticleModel');
			$selectdata = $this->ArticleModel->checkRatingData($id);
			$data["checkRatingData"] = $selectdata;

			$this->load->model('home/ArticleModel');
			$selectdata = $this->ArticleModel->returnRatingData($id);
			$data["resultRatingData"] = $selectdata;
		}

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->averageRating($id);
		$data["averageRating"] = $selectdata;

		$this->load->model('home/ArticleModel');
		$selectdata = $this->ArticleModel->getComment($id);
		$data["getComment"] = $selectdata;
		
		$this->load->view('home/SingleArticle',$data);
	}
	public function insertComment()
	{
		$data=array(
			"ArticleId" => $this->input->post("txtarticleid"),
			"FarmerId" => $this->session->userdata["farmerloggedin"]["FarmerId"],
			"CommentText" => $this->input->post("txtcomment")
		);
		$this->load->model('home/ArticleModel');
		$res = $this->ArticleModel->insert($data);
		$id=$this->input->post("txtarticleid");
		
		$this->load->library('encryption');
		$id = $this->encryption->encrypt($id);
		$id=str_replace("/","-",$id);
		if($res==1)
		{
			$this->session->set_flashdata("add","Inserted Successfully!!");
			redirect('/home/ArticleController/view/'.$id);
		}
		else
		{
			echo "error";
		}
	}
	public function insertLikeData($id)
	{
		$id = str_replace("-","/",$id);
		$this->load->library('encryption');

		$id=$this->encryption->decrypt($id);

		$data=array(
			"ArticleId" => $id,
			"FarmerId" => $this->session->userdata["farmerloggedin"]["FarmerId"]
		);
		$this->load->model('home/ArticleModel');
		$res = $this->ArticleModel->insertLike($data);
		if($res==1)
		{
			$this->session->set_flashdata("add","Inserted Successfull!!");
			$this->load->library('encryption');
			$id = $this->encryption->encrypt($id);
			$id = str_replace("/","-",$id);
			redirect('/home/ArticleController/view/'.$id);
		}
		else
		{
			echo "error";
		}
	}
	public function insertRatings()
	{
		$id = $this->input->post("txtarticleid");
		$data=array(
			"ArticleId" => $id,
			"FarmerId" => $this->session->userdata["farmerloggedin"]["FarmerId"],
			"Rating" => $this->input->post("radioRating")
		);
		$this->load->model('home/ArticleModel');
		$res = $this->ArticleModel->insertRating($data);
		if($res==1)
		{
			$this->session->set_flashdata("add","Inserted Successfull!!");
			$this->load->library('encryption');
			$id = $this->encryption->encrypt($id);
			$id = str_replace("/","-",$id);
			redirect("/home/ArticleController/view/".$id);
		}
		else
		{
			echo "error";
		}
	}
}
