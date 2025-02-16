<?php

session_start();

class User extends Controller{


    public function index(){
        try{
            $model = $this->model('Users');
            $user = $this->util('UserUtils', $model);

            $dataUser = $user->getUser();

            $data['user'] = $dataUser;

            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('Profile', $data);
            $this->view('template/Footer');
        }catch(Exception $e){
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        
    }

    public function editProfile(){
        try{
            $data = $_POST;
            $file = $_FILES['picture'];

            var_dump($file);

            $model = $this->model('Users');
            $user = $this->util('UserUtils', $model);

            $dataResponse = $user->updateUser($data, $file);

            $this->view('template/Header');
            $this->view('template/Sidebar');
            $this->view('Profile');
            $this->view('template/Footer');

            echo json_encode(['status' => 'success', 'data' => $dataResponse]);
        }catch(Exception $e){
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        
    }
}