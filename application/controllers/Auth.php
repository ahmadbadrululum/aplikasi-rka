<?php

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    function login(){
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hasil    = $this->Model_user->login($username,$password);
            if ($hasil==1) {
                // $this->session->set_flashdata("success", "Kamu Sedang Login Sekarang");
                $this->session->set_userdata(array('login'=>'oke','username'=>$username));
                redirect('dashboard');
            }
            else{
                echo "<script>
                alert ('Maaf Username Dan Password Anda Salah !');
            </script>";
               // $this->session->set_flashdata("gagal", "Akun Anda Tidak Teregistari Di Database");
            redirect('auth/login');
        }}else{
        $this->load->view('template_login','login');
    }


    // function login()
    // {
    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');
    //     if ($this->form_validation->run() == TRUE) {

    //         $username = $_POST['username'];
    //         $password = md5($_POST['password']);
    //         //chek user in databases
    //         $this->db->select('*');
    //         $this->db->from('users');
    //         $this->db->where(array('username' => $username,'password' => $password));
    //         $query = $this->db->get();
    //         // $user = $query->row();
    //         //if user exists

    //         // if ($user->email) {
    //         //     //temporary message
    //         //     $this->session->set_flashdata("success", "Kamu Sedang Login Sekarang");
    //         //     //set session variable

    //         //     $_SESSION['user_logged'] = TRUE;
    //         //     $_SESSION['username'] = $user->username;
    //         //     //redirect to dashboard
    //         redirect('dashboard');
    //     }
    //     else {
    //         $this->session->set_flashdata("error", "Akun Anda Tidak Teregistari Di Database");
    //         redirect('auth/login');
    //     }   
    //     $this->template->load('template_login','form_login');
    // }

    function logout(){
        $this->session->sess_destroy();
        redirect('template_login','login');
    }
}
}