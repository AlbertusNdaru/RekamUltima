<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_landingpage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pemilik');
        $this->load->model('Model_hewan');
        $this->load->model('Model_Rekam_Medis');
    }

    function landingpage()
    {
        $this->load->view("Landingpage/landingpage");

        // echo "sadadsad";
    }

    function datahewan()
    {
        $this->load->view("Landingpage/data_hewan");

        // echo "sadadsad";
    }

    function loginuser()
    {
        $this->load->view("Landingpage/login");

        // echo "sadadsad";
    }

    function register_hewan()
    {
        $this->load->view("Landingpage/register_hewan");

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
        $validate = $this->Model_Pemilik->get_pemilik_by_username_password($username, $password);
        if (!is_null($validate)) {
            $this->session->set_userdata('pemilik', $validate);
            redirect('landing');
        } else {
            redirect('loginuser');
        }
    }

    function logoutuser()
    {
        $this->session->unset_userdata('pemilik');
        redirect('landing');
    }

    function addhewan()
    {
        $nama       = $this->input->post('nama');
        $JK         = $this->input->post('jeniskelamin');
        $JH         = $this->input->post('jenishewan');
        $signalemen = $this->input->post('signalemen');
        $pemiik     = $_SESSION['pemilik']->Id_Pemilik;

        $hewan = array(
            'Nama_Hewan'        => $nama,
            'Jenis_Kelamin'     => $JK,
            'Jenis_Hewan'       => $JH,
            'Signalemen'        => $signalemen,
            'Id_Pemilik'        => $pemiik

        );
        $addhewan = $this->Model_hewan->add_hewan($hewan);
        if ($addhewan) {
            $rekammedis = array(
                'Id_Hewan' => $addhewan
            );
            $this->Model_Rekam_Medis->addRekamMedis($rekammedis);
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('landing');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('landing');
        }
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
