<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
    }

    function index()
    {
        if (isset($_SESSION['Admin'])) {
            redirect('ControllerAdmin/Dashboard');
        } else {
            $this->load->view('Form_admin/login');
        }
    }

    function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $getAdmin = $this->Model_admin->get_admin_by_admin($username, $password);

        // penentu password
        if ($getAdmin) {
            $this->session->set_userdata('Admin', $getAdmin);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username dan Pasword yang kamu masukan salah! silahkan login</div>');
            redirect('admin');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('Admin');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Kamu Telah keluar, silahkan login</div>');
        redirect('admin');
    }
}
