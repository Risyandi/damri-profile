<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
    }

    function actionLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->modelLogin->checkingLogin("admin", $where)->num_rows();

        if ($cek > 0) {
            $dataSession = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($dataSession);
            redirect(base_url('dashboard'));
        } else {
            echo "Username dan password yang anda masukan salah!";
        }
    }

    function actionLogout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
