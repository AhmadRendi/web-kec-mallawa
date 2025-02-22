<?php

session_start();

class verification extends Controller{

    public function index(){
        if($_SESSION['user_role'] == NULL){
            header('Location: ' . BASEURL . '/Login');
        }
        $model = $this->model('Documents');
        $document = $this->util('DocumentUtil', $model);

        $data['data'] = $document->getAllData();

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Verification', $data); 
        $this->view('template/Footer');
    }

    public function verification(){
        header('Content-Type: application/json');
        try{
            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);

            $id = $_POST['id'];

            $status = 'Terverifikasi';

            $reason = 'DiVerifikasi';

            // $response = $document->updateStatus($id, $status);
            $response = $document->updateStatus($id, $reason , $status);

            echo json_encode(['status' => 'success']);
        }catch(Exception $e){
            echo json_encode(['status' => 'failed','message' => $e->getMessage()]);
        }
    }

    public function cancelVariation(){
        header('Content-Type: application/json');
        try{
            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);

            $data = $_POST;

            $status = 'Ditolak';

            $response = $document->updateStatus($data['id'], $data['reason'] ,$status);

            echo json_encode(['status' => 'success']);
        }catch(Exception $e){
            echo json_encode(['status' => 'failed','message' => $e->getMessage()]);
        }
    }
}