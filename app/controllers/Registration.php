<?php

session_start();

class Registration extends Controller{

    public function index(){
        session_destroy();
        $this->view('template/Header');
        $this->view('Registration');
        $this->view('template/Footer');
    }

    // public function register(){
    //     $data = $this->model('User')->register($_POST);
    //     $result = $data['result'];
    //     if($result == "ADMIN"){
    //         $_SESSION['admin'] = true;
    //         header('Location: ' . BASEURL . '/admin');
    //     }else if ($result == "ASISTEN"){
    //         $_SESSION['asisten'] = true;
    //         header('Location: ' . BASEURL . '/asisten');
    //     }else if ($result == "PRAKTIKAN"){
    //         $_SESSION['praktikan'] = true;
    //         header('Location: ' . BASEURL . '/praktikan');
    //         exit;
    //     }
    //     else {
    //         $_SESSION['login'] = false;
    //         header('Location: ' . BASEURL . '/registration');
    //     }
    // }
}