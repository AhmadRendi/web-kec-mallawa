<?php

session_start();

class Dashboard extends Controller{
    
    public function index(){
        $role = $_SESSION['user_role'];
        if($role == NULL){
            header('Location: ' . BASEURL . '/Login');
        }
        if($role == 'ADMIN'){

            // $dashboard = $this->utils('DashboardAdmin');
            // $data = $dashboard->getDocumentToDashboard();

            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);

            $data = $document->getDocumentToDashboard();

            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('Dashboard', $data);
            $this->view('template/Footer');
        }else{
            $modelDocuemnt = $this->model('Documents');
            $document = $this->util('DashboardAdmin', $modelDocuemnt);
            $data['data'] = $document->getCountDocumentYears();

            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('DashboardKasi', $data);
            $this->view('template/Footer');
        }
    }

    public function getDataChart(){
        // $dashboard = $this->utils('DashboardAdmin');
        // $data = $dashboard->get();
        
        $modelDocuemnt = $this->model('Documents');
        $document = $this->util('DashboardAdmin', $modelDocuemnt);

        $data = $document->get();

        // echo json_encode($data);

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}