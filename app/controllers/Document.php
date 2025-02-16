<?php

session_start();

class Document extends Controller{

    public function index(){
        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Document');
        $this->view('template/Footer');
    }

    public function addDocument(){
        $data = $_POST;
        var_dump($data);
    }
}
