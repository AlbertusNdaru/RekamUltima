<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerHewan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_hewan');
        $this->load->library('Template');
        check_session();
    }


    function get_hewan()
    {
        $data['hewan'] = $this->Model_hewan->get_hewan();
        $this->template->load('Template/Template_admin', 'Form_Hewan/Form_data_Hewan', $data);
    }
}
