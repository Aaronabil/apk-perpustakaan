<?php
    class home extends controller{
        public function __construct(){
            if($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login','Tidak ditemukan.','danger');
            header('location: '. base_url . '/login');
            exit;
            }
        }

        public function tampilData(){
            return $this->db->get('buku');
            }

        public function index(){
            $data['title']='Menu Utama';
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
        public function tampilJml(){
            $data['buku'] = $this->model('UsersModel')->hitungData();
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }

?>