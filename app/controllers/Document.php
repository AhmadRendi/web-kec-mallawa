<?php

session_start();


class Document extends Controller{

    public function index(){
        if($_SESSION['user_role'] == NULL){
            header('Location: ' . BASEURL . '/Login');
        }
        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Document');
        $this->view('template/Footer');
    }

    public function addDocument(){
        header('Content-Type: application/json');
        try{
            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);

            $data = $_POST;
            $file = $_FILES['dokumen'];

            $document->addDocument($data, $file);

            echo json_encode(['status' => 'success']);
            exit;
        }catch (Exception $e){
            echo json_encode(['status' => "Failed" ,'message' => $e->getMessage()]);
            exit;
        }
    }

}
