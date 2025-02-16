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

    // function utama registrasi user
    public function addUser($data){
        try{
            $data = $this->setDefault($data);
            $this->validates($data);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function verifyPassword($inputPassword, $hashedPassword) {
        return password_verify($inputPassword, $hashedPassword);
    }

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
            // var_dump($user);
            // if($user){
            //     // if(password_verify($data['password'], $user['password'])){
            //     //     return $user;
            //     // }else{
            //     //     throw new Exception('Password is wrong');
            //     // }
            // }else{
            //     throw new Exception('Username is not found');
            // }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

}