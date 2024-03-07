<?php
    class keadaanbuku extends controller{
        public function __construct(){
            if($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login','Tidak ditemukan.','danger');
            header('location: '. base_url . '/login');
            exit;
        }
    }

        public function index(){
            $data['title']='Keadaan Buku';

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('keadaanbuku/index', $data);
            $this->view('templates/footer');
        }
    }
?>