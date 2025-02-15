<?php

session_start();

class Dashboard extends Controller{

    // public function index(){
    //     $this->view('template/Header');
    //     $this->view('template/Sidebar');
    //     $this->view('Dashboard');
    //     $this->view('template/Footer');
    // }

    public function index(){
        $role = $_SESSION['user_role'];
        if($role == 'ADMIN'){
            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('Dashboard');
            $this->view('template/Footer');
        }else{
            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('DashboardKasi');
            $this->view('template/Footer');
        }
    }

    // public function logout(){
    //     session_destroy();
    //     header('Location: ' . BASEURL . '/login');
    // }
}