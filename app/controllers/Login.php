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
            $model = $this->model('Users');
            $user = $this->util('UserUtils', $model);

            $data = $_POST['data'];

            $dataUser = $user->login($data);

            $_SESSION['picture'] = $dataUser['picture'];
            $_SESSION['name_user'] = $dataUser['name_user'];
            $_SESSION['position'] = $dataUser['position'];

            if($dataUser['role'] == 'ADMIN'){
                $_SESSION['user_role'] = 'ADMIN';
                $_SESSION['user_id'] = $dataUser['id_user'];
            }else if($dataUser['role'] == 'KASI'){
                $_SESSION['user_role'] = 'KASI';
                $_SESSION['user_id'] = $dataUser['id_user'];
            }
            echo json_encode(['status' => 'success',  'data' => $_SESSION['user_id']]);
        }catch(Exception $e){
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}