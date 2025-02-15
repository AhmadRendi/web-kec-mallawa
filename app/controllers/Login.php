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

        $data = $_POST['data'];

        $username =  $data['username'];
        $password =  $data['password'];

        // echo $username;
        // echo $password;
        
        if($username == "admin" && $password == "admin"){
            $_SESSION['user_role'] = "ADMIN";
            // echo "ADMIN";
            // header('Location: http://localhost/web-ic/public/Dashboard');
            echo "Success";
        }else if($username == "kasi" && $password == "kasi"){
            $_SESSION['user_role'] = "KASI";
            // echo "KASI";
            // header('Location: http://localhost/tubes/public/Dashboard');
            echo "Success";
        }else{
        //     header('Location: http://localhost/tubes/public/Login/index');
            // echo json_decode("Gagal");
            echo "Gagal";
        }
    }
}