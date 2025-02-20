<?php

session_start();

class Arsip extends Controller {

    public function index(){
        if($_SESSION['user_role'] == NULL){
            header('Location: ' . BASEURL . '/Login');
        }
        $model = $this->model('Documents');
        $document = $this->util('DocumentUtil', $model);

        $data['data'] = $document->getAllData();

        // var_dump($data);

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Arsip', $data);
        $this->view('template/Footer');
    }
}