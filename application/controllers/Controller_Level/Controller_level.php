<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_level extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_level');
        $this->load->library('Template');
        check_session();
    }

    function get_level()
    {
        $data['level'] = $this->Model_level->get_level();
        $this->template->load('Template/Template_admin', 'Form_Level/Form_level', $data);
    }

    function viewFormEditLevel($id_level)
    {
        $data['editlevel'] = $this->Model_level->get_admin_level_by_id($id_level);
        $this->template->load('Template/Template_admin', 'Form_level/Form_edit_level', $data);
    }
}
