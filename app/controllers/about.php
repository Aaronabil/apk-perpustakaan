<?php
    class about extends controller{
        public function __construct(){
            if($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login','Tidak ditemukan.','danger');
            header('location: '. base_url . '/login');
            exit;
        }
    }

        public function index(){
            $data['title']='About Spenda';
            $data['nama']='Abil';
            $data['alamat']='Kuningan';
            $data['no_hp']='0888';

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
    }
?>