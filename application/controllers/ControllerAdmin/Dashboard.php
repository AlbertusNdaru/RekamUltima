<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_hewan');
        $this->load->model('Model_TenagaMedis');
        $this->load->model('Model_Pemilik');

        check_session();
    }
    function index()
    {
        $data['jumlahhewan'] = $this->Model_hewan->get_hewan();
        $data['jumlahmedis'] = $this->Model_TenagaMedis->get_medis();
        $data['jumlahpemilik'] = $this->Model_Pemilik->get_pemilik();
        $this->template->load('Template/Template_admin', 'Form_admin/dashboard', $data);
    }
}
