<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
    }

    public function authentication()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $query = $this->modelLogin->checkingLogin("admin", $where);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $dataSession = array(
                'userid' => $row->id,
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($dataSession);
            redirect(base_url('dashboard'));
        } else {
            $messageError = "Username atau password yang anda masukan salah!";
            echo "<script>
					alert('$messageError');
					window.location='" . base_url('login') . "';
				</script>";
        }
    }

    public function signout()
    {
        $params = array('userid', 'nama', 'status');
        $this->session->unset_userdata($params);
        redirect(base_url('login'));
    }
}
