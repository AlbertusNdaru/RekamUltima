<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerTindakan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Tindakan');
        $this->load->library('Template');
        check_session();
    }
    function get_tindakan()
    {
        $data['tindakan'] = $this->Model_Tindakan->get_tindakan();
        $this->template->load('Template/Template_admin', 'Form_Tindakan/Form_data_Tindakan', $data);
    }
}
