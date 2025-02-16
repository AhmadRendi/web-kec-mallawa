<?php

session_start();

class Pengarsipan extends Controller{

    public function index(){
        $model = $this->model('Documents');
        $document = $this->util('DocumentUtil', $model);

        $data['data'] = $document->getAllData();

        $this->view('template/Header');
        $this->view('template/Sidebar');
        $this->view('Pengarsipan', $data);
        $this->view('template/Footer');
    }

    public function getDocument() {
        header('Content-Type: application/json'); // Mengatur header untuk JSON
        try {
            // Mengambil ID dari POST
            $id = $_POST['id'];
        
            // Memanggil model dan utilitas
            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);
        
            // Mengambil dokumen berdasarkan ID
            $firstDocument = $document->getById($id);
        
            // Mengembalikan response dalam format JSON
            echo json_encode($firstDocument);
        } catch (Exception $e) {
            // Mengembalikan pesan kesalahan dalam format JSON
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function updateData(){
        $data = $_POST;
        echo "Update Data";
    }

    public function download(){
        $idDocument = $_POST['id'];
        var_dump($idDocument);
        echo "Download";
    }

    public function delete(){
        try{
            $idDocument = $_POST['id'];
            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);
    
            $data['data'] = $document->deleteDocument($idDocument);

            echo json_encode(['status' => 'success']);
        }catch(Exception $e){
            echo json_encode(['status' => 'failed' , 'message' => $e->getMessage()]);
        }
    }

    public function search(){
        $data['title'] = 'Pengarsipan Dokumen';
        $data['documents'] = $this->model('Document_model')->searchDocuments($_POST['keyword']);
        $this->view('template/header', $data);
        $this->view('template/sidebar');
        $this->view('pengarsipan/index', $data);
        $this->view('template/footer');
    }

}