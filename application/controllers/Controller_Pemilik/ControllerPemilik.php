<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerPemilik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pemilik');
        $this->load->library('Template');
        check_session();
    }

    function get_pemilik_hewan()
    {
        $data['pemilik_hewan'] = $this->Model_Pemilik->get_pemilik();
        $this->template->load('Template/Template_admin', 'Form_Pemilik_Hewan/Form_data_Pemilik', $data);
    }
}
