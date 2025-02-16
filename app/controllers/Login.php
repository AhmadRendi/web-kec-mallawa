<?php

session_start();

class Login extends Controller{

    public function index(){
        session_destroy();
        $this->view('template/Header');
        $this->view('Login');
        $this->view('template/Footer');
    }


    public function session(){
        try{
            $model = $this->model('User');
            $user = $this->util('UserUtils', $model);

            $data = $_POST['data'];

            $dataUser = $user->login($data);

            if($dataUser['role'] == 'ADMIN'){
                $_SESSION['user_role'] = 'ADMIN';
            }else if($dataUser['role'] == 'KASI'){
                $_SESSION['user_role'] = 'KASI';
            }
            echo json_encode(['status' => 'success']);
        }catch(Exception $e){
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}