<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reg_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_level');
        $this->load->model('Model_TenagaMedis');
    }

    function regadmin($id)
    {
        $dataRegistrasi['level']       = $this->Model_level->get_level();
        $dataRegistrasi['tenagamedis'] = $this->Model_TenagaMedis->get_medis_by_id($id);
        $this->load->view('Form_admin/reg_admin', $dataRegistrasi);
    }

    function regmedis()
    {
        $this->load->view('Form_admin/Form_regtm');
    }


    function add_admin()
    {

        //$username        = $this->input->post('username');
        $password        = $this->input->post('password');
        $id_level        = $this->input->post('level');
        $email           = $this->input->post('email');
        $datatenagamedis = $this->Model_TenagaMedis->get_medis_by_email($email);
        if (isset($datatenagamedis)) {
            $validasi = $this->Model_admin->get_admin_by_id_tenagamedis($datatenagamedis->Id_TenagaMedis);
            if ($validasi) {
                echo json_encode($this->Model_admin->get_admin_by_id_tenagamedis($datatenagamedis->Id_TenagaMedis));
                $this->session->set_flashdata('Error', '<div class="alert alert-danger" role="alert">
                Email Sudah Terdaftar</div>');
                redirect('regadmin/' . $datatenagamedis->Id_TenagaMedis);
            } else {
                $data = array(
                    'Username' => $this->input->post('username'),
                    'Password' => $password,
                    'Status' => 'Aktif',
                    'date_created' => time(),
                    'Id_TenagaMedis' => $datatenagamedis->Id_TenagaMedis,
                    'Id_Level' => $id_level,
                    'date_created' => get_current_date()
                );
                $reg_admin = $this->Model_admin->add_admin($data);
                if ($reg_admin) {
                    $this->load->view('Form_admin/login');
                }
            }
        } else {
            $this->session->set_flashdata('Error', '<div class="alert alert-danger" role="alert">
            Email Tidak Terdaftar !</div>');
            redirect('regadmin/' . $datatenagamedis->Id_TenagaMedis);
        }
    }

    function add_medis()
    {
        $nama       = $this->input->post('name');
        $phone      = $this->input->post('phone');
        $Address    = $this->input->post('alamat');
        $JK         = $this->input->post('gender');
        $email      = $this->input->post('email');
        $validasi   = $this->Model_TenagaMedis->get_medis_by_email($email);

        $datatenagamedis = $this->Model_TenagaMedis->get_medis_by_email($email);
        if (isset($datatenagamedis)) 
        {
            $this->session->set_flashdata('Status', 'Input Gagal -> Email Sudah Terdaftar');
            redirect('regaddmedis');
            // echo json_encode($datatenagamedis);
        }
        else
        {
            $tenagamedis = array(
                'Nama_TenagaMedis'      => $nama,
                'NoHp_TenagaMedis'      => $phone,
                'Alamat_TenagaMedis'    => $Address,
                'JenisKelamin'          => $JK,
                'Status'                => 'TidakAktif',
                'date_created'          => get_current_date(),
                'Email'                 => $email
            );
            $addmedis = $this->Model_TenagaMedis->add_medis($tenagamedis);
            if ($addmedis) {
                $this->session->set_flashdata('Status', 'Input Succes');
                redirect('tenagamedis');
            } else {
                $this->session->set_flashdata('Status', 'Input Failed');
                redirect('tenagamedis');
            }
        }
    }
}