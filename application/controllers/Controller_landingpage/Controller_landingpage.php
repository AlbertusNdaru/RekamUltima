<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_landingpage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pemilik');
    }

    function landingpage()
    {
        $this->load->view("Landingpage/landingpage");

        // echo "sadadsad";
    }

    function loginuser()
    {
        $this->load->view("Landingpage/login");

        // echo "sadadsad";
    }

    function registeruser()
    {
        $this->load->view("Landingpage/register");

        // echo "sadadsad";
    }

    function validasilogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $validate = $this->Model_Pemilik->get_pemilik_by_username_password($username,$password);
        if($validate)
        {
            $this->session->set_userdata('pemilik', $validate);
            redirect('landing');
        }
        else
        {
            redirect('loginuser');
        }
    }

    function logoutuser()
    {
        $this->session->unset_userdata('pemilik');
        redirect('landing');
    }

    function addpemilikfromlanding()
    {
        $nama       = $this->input->post('name');
        $phone      = $this->input->post('phone');
        $Address    = $this->input->post('alamat');
        $JK         = $this->input->post('gender');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $pemilik = array(
            'Nama_Pemilik'      => $nama,
            'NoHp_Pemilik'       => $phone,
            'Alamat_Pemilik'    => $Address,
            'Username'          => $username,
            'Password'          => $password,
            'Status'            => 'TidakAktif',
            'date_created'      => get_current_date(),
            'JenisKelamin'      => $JK

        );
        $addpemilik = $this->Model_Pemilik->add_pemilik($pemilik);
        if ($addpemilik) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('loginuser');
            // echo $addpemilik;
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('register');
            // echo $addpemilik;
        }
    }
}
