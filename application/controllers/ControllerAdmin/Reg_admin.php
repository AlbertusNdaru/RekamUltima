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

    function index()
    {
        $dataRegistrasi['level'] = $this->Model_level->get_level();
        $this->load->view('Form_admin/reg_admin', $dataRegistrasi);
    }


    function add_admin()
    {

        //$username        = $this->input->post('username');
        $password        = $this->input->post('password');
        $id_level        = $this->input->post('level');
        $email           = $this->input->post('email');
        $datatenagamedis = $this->Model_TenagaMedis->get_medis_by_email($email);
        if ($datatenagamedis) {
            if ($this->Model_admin->get_admin_by_id_tenagamedis($datatenagamedis->Id_TenagaMedis)) {
                $this->session->set_flashdata('Error', 'Email Sudah Terdaftar Menjadi Admin');
                redirect('regadmin');
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
            $this->session->set_flashdata('Error', 'Email Salah, atau belum terdaftar');
            redirect('regadmin');
        }

        redirect('admin');
    }
}