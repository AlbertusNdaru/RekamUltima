<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerRekamMedis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Rekam_Medis');
        $this->load->library('Template');
        check_session();
    }

    function get_rekam_medis()
    {
        $data['rekam_medis'] = $this->Model_Rekam_Medis->get_rekam_medis();
        $this->template->load('Template/Template_admin', 'Form_Rekam_Medis/Form_data_RekamMedis', $data);
    }
}
