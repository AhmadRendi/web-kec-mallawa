<?php

session_start();

class Registration extends Controller{


    public function index(){
        session_destroy();
        $this->view('template/Header');
        $this->view('Registration');
        $this->view('template/Footer');
    }

    public function addUser(){
        try {

            $model = $this->model('User');
            $user = $this->util('UserUtils', $model);

            $user->addUser($_POST);
            
            echo json_encode(['status' => 'success']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}