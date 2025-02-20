<?php

class UserUtils{

    private $modelUser;

    public function __construct($model)
    {
        $this->modelUser = $model;
    }

    private function validate($data){
        $errors = [];

        foreach($data as $key => $value){
            if(empty($value)){
                $errors[$key] = 'Field ' . $key . ' is required';
            }
        }

        if(!empty($errors)){
            throw new Exception(json_encode($errors));
        }

        return true;
    }

    private function validateUsernameIsExit($username){
        $user = $this->modelUser->getUsername($username);
        if($user){
            throw new Exception('Username already exists');
        }
        return true;
    }

    private function validateEmailIsExit($email){
        $user = $this->modelUser->getEmail($email);
        if($user){
            throw new Exception('Email already exists');
        }
        return true;
    }

    private function isValidEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('Email is not valid');
        }
        return true;
    }

    private function hashPassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function validates($data){
        try{
            if($this->validate($data)){
                if($this->validateUsernameIsExit($data['username'])){
                    if($this->validateEmailIsExit($data['email'])){
                        if($this->isValidEmail($data['email'])){
                            $this->modelUser->addUser($data);
                        }
                    }
                }
            }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
       
    }

    private function setDefault($data){
        $data['role'] = "ADMIN";
        $data['picture'] = "image.png";
        $data['password'] = $this->hashPassword($data['password']);
        return $data;
    }

            // validasi untuk huruf saja
            private function validateAlphabet($data) {
                if (!preg_match('/^[a-zA-Z\s]+$/', $data)) {
                    throw new Exception('tidak boleh mengandung angka atau karakter lain.');
                }
            } 

            private function validateAlphabetForName($data) {
                if (!preg_match('/^[a-zA-Z\s]+$/', $data)) {
                    throw new Exception('nama tidak boleh mengandung angka atau karakter lain.');
                }
            } 
    
            // validasi untuk simbol
            private function validateSymbol($data){
                if (!preg_match('/^[a-zA-Z0-9\s]+$/', $data)) {
                    throw new Exception('Input tidak boleh mengandung simbol');
                }
            }

    // function utama registrasi user
    public function addUser($data){
        try{
            $this->validateAlphabetForName($data['name_user']);
            $data = $this->setDefault($data);
            $this->validates($data);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function verifyPassword($inputPassword, $hashedPassword) {
        return password_verify($inputPassword, $hashedPassword);
    }

    // function utama login user
    public function login($data){
        try{
            $user = $this->modelUser->getUsername($data['username']);
            if($user){
                if($this->verifyPassword($data['password'], $user['password'])){
                    return $user;
                }else{
                    throw new Exception('Password is wrong');
                }
            }else{
                throw new Exception('Username is not found');
            }
            return $user;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function getUser(){
        try{
            $id = $_SESSION['user_id'];
            return $this->modelUser->getUser($id);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function uploadImage($file) {
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileTmp = $file['tmp_name'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        // Tentukan folder tujuan
        $folderDestination =  '../public/img/asset/';

        if(!is_dir($folderDestination)){
            throw new Exception('Directory is not found ' . $folderDestination);
        }

        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = $folderDestination . $fileNameNew;
    
        $allowed = ['jpg', 'jpeg', 'png'];
    
        // Validasi ekstensi file
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    // Validasi apakah direktori tujuan ada, jika tidak ada, buat direktori
                    if (!is_dir($folderDestination)) {
                        if (!mkdir($folderDestination, 0755, true)) {
                            throw new Exception('Tidak Dapat Membuat Direktori ' . $folderDestination);
                        }
                    }
    
                    // Debug: Periksa apakah file temporary ada
                    if (!file_exists($fileTmp)) {
                        throw new Exception('Temporeri Tidak Ditemukan' . $fileTmp);
                    }
    
                    // Pindahkan file ke direktori tujuan
                    if (move_uploaded_file($fileTmp, $fileDestination)) {
                        return $fileNameNew;
                    } else {
                        throw new Exception('Gagal mengupload file');
                    }
                } else {
                    throw new Exception('Ukuran file terlalu besar');
                }
            } else {
                throw new Exception('Error saat mengupload file');
            }
        } else {
            throw new Exception('Ekstensi file tidak diizinkan');
        }
    }



        

    public function updateUser($data, $file){
        try{
            $filename = $this->uploadImage($file);
            $data['id'] = $_SESSION['user_id'];
            $this->validateAlphabet($data['name_user']);
            $this->validateSymbol($data['address']);
            $this->validateSymbol($data['position']);
            $this->modelUser->update($data, $filename);
            return "success";
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

}