<?php

session_start();

class User extends Controller{


    public function index(){
        try{
            $model = $this->model('Users');
            $user = $this->util('UserUtils', $model);

            $dataUser = $user->getUser();

            $data = $dataUser;

            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('Profile', $data);
            $this->view('template/Footer');
        }catch(Exception $e){
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        
    }

    public function editProfile(){
        header('Content-Type: application/json');
        try{
            $data = $_POST;
            $file = $_FILES['picture'];

            $model = $this->model('Users');
            $user = $this->util('UserUtils', $model);

            $user->updateUser($data, $file);

            echo json_encode(['status' => 'success']);
            exit;
        }catch(Exception $e){
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
            exit;
        }
    }
}