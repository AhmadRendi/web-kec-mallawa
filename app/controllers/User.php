<?php

session_start();

class User extends Controller{


    public function index(){
        $data['user'] = [
            'nama_lengkap' => 'Ikhwan Taufik',
            'username' => 'Ikhwan Taufik',
            'password' => 'Ikhwan2000',
            'posisi' => 'Administrator',
            'alamat' => 'Maros',
            'email' => 'ikhwantaufik2000@gmail.com',
            'foto' => 'profile.jpg'
        ];

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Profile', $data);
        $this->view('template/Footer');
    }

    public function editProfile(){
        $data = $_POST;

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Profile', $data);
        $this->view('template/Footer');
    }
}