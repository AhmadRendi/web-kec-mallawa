<?php

session_start();

class Pengarsipan extends Controller{

    public function index(){
        if($_SESSION['user_role'] == NULL){
            header('Location: ' . BASEURL . '/Login');
        }
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
        header('Content-Type: application/json'); // Mengatur header untuk JSON
        try{
            $data = $_POST;
            $file = $_FILES['dokumen'];

            $model = $this->model('Documents');
            $document = $this->util('DocumentUtil', $model);

            $result = $document->updateData($data, $file);

            echo json_encode(['status' => $result]);
        }catch(Exception $e){
            echo json_encode(['status' => 'failed' , 'message' => $e->getMessage()]);
        }
        
    }

    public function download(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $idDocument = $_POST['id'];

                // $_SESSION['id_document'] = $_POST['id'];
        
                $model = $this->model('Documents');
                $document = $this->util('DocumentUtil', $model);
        
                $result = $document->download($idDocument);
    
                if ($result['status'] !== "success") {
                    throw new Exception("Gagal mengunduh file");
                }
        
                echo json_encode([
                    'status' => $result['status'], 
                    'file' => $result['path']
                    // 'filename' => $result['filename'] // Tambahkan nama file
                ]);
                exit;
            } catch(Exception $e) {
                echo json_encode(['status' => 'failed' , 'message' => $e->getMessage()]);
            }
        } 
        // elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        //     try {
        //         // $idDocument = $_GET['id'];

        //         $idDocument = $_SESSION['id_document'];

        //         $model = $this->model('Documents');
        //         $document = $this->util('DocumentUtil', $model);
    
        //         $result = $document->download($idDocument);
                
        //         // Set headers for file download
        //         // header('Content-Type: application/octet-stream');
        //         // header('Content-Disposition: attachment; filename="' . $result['filename'] . '"');
        //         // header('Content-Length: ' . filesize($result['path']));
                
        //         // readfile($result['path']);
        //         // exit;

        //         var_dump($result);

        //         header('Content-Description: File Transfer');
        //         header('Content-Type: application/octet-stream');
        //         header('Content-Disposition: attachment; filename="' . $result['filename'] . '"');
        //         header('Expires: 0');
        //         header('Cache-Control: must-revalidate');
        //         header('Pragma: public');
        //         header('Content-Length: ' . filesize($result['path']));
                
        //         // Bersihkan output buffer
        //         ob_clean();
        //         flush();
                
        //         // Baca file dan kirim ke output
        //         readfile($result['path']);
        //         exit;
        //     } catch(Exception $e) {
        //         echo json_encode(['status' => 'failed' , 'message' => $e->getMessage()]);
        //         // echo "Gagal mengunduh file: " . $e->getMessage();
        //     }
        // }
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

}