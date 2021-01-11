<?php 
    class DashboardController extends CI_Controller
    {
        public function index()
        {
            

            $this->load->model('admin/DashboardModel');
            $purchaseData = $this->DashboardModel->showPurchase();
            $data["purchaseData"] = $purchaseData;

            $this->load->model('admin/DashboardModel');
            $sellerData = $this->DashboardModel->showSelling();
            $data["sellerData"] = $sellerData;

            $this->load->model('admin/DashboardModel');
            $totalAgency = $this->DashboardModel->showAgency();
            $data["totalAgency"] = $totalAgency;

            $this->load->model('admin/DashboardModel');
            $totalFarmer = $this->DashboardModel->showFarmer();
            $data["totalFarmer"] = $totalFarmer;

            $this->load->model('admin/DashboardModel');
            $totalExpert = $this->DashboardModel->showExpert();
            $data["totalExpert"] = $totalExpert;

            $this->load->model('admin/DashboardModel');
            $getPurchase = $this->DashboardModel->getPurchase();
            $data["getPurchase"] = $getPurchase;

            $this->load->model('admin/DashboardModel');
            $getSell = $this->DashboardModel->getSell();
            $data["getSell"] = $getSell;

            $this->load->model('admin/DashboardModel');
            $getAgency = $this->DashboardModel->getAgency();
            $data["getAgency"] = $getAgency;

            $this->load->model('admin/DashboardModel');
            $getFarmer = $this->DashboardModel->getFarmer();
            $data["getFarmer"] = $getFarmer;

            $this->load->model('admin/DashboardModel');
            $getExpert = $this->DashboardModel->getExpert();
            $data["getExpert"] = $getExpert;

            $this->load->view("admin/Dashboard",$data);
        }
    }
?>