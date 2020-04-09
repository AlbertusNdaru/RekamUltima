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
        $this->load->model('Model_kritik');
        $this->load->library('Template');
        check_session();
    }
    function index()
    {
        $data['jumlahhewan'] = $this->Model_hewan->get_hewan();
        $data['jumlahhewanhidup'] = $this->Model_hewan->get_hewan_by_status_hidup();
        $data['jumlahhewanmati'] = $this->Model_hewan->get_hewan_by_status_mati();
        $data['jumlahhewankucing'] = $this->Model_hewan->get_hewan_by_kucing();
        $data['jumlahpemilik'] = $this->Model_Pemilik->get_pemilik();
        $data['jumlahpemilikaktif'] = $this->Model_Pemilik->get_pemilik_by_status();
        $this->template->load('Template/Template_admin', 'Form_admin/dashboard', $data);
    }

    function get_kritik_admin()
    {
        $data['kritik'] = $this->Model_kritik->get_kritik();
        $this->template->load('Template/Template_admin', 'Form_Kritik/Form_Kritik', $data);
    }
}
