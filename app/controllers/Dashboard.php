<?php

session_start();

class Dashboard extends Controller{
    
    public function index(){
        $role = $_SESSION['user_role'];
        if($role == 'ADMIN'){
            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('Dashboard');
            $this->view('template/Footer');
        }else{

            $dashboard = $this->utils('DashboardAdmin');

            $data['data'] = $dashboard->getCountDocumentYears();

            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('DashboardKasi', $data);
            $this->view('template/Footer');
        }
    }

    public function getDataChart(){
        $dashboard = $this->utils('DashboardAdmin');
        $data = $dashboard->get();
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}