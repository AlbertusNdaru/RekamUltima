<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerPenyakit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Penyakit');
        $this->load->library('Template');
        check_session();
    }

    function get_penyakit()
    {
        $data['penyakit'] = $this->Model_Penyakit->get_penyakit();
        $this->template->load('Template/Template_admin', 'Form_Penyakit/Form_data_Penyakit', $data);
    }
}
