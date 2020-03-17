<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerKritik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kritik');
    }


    function get_kritik()
    {
        $data['kritik'] = $this->Model_kritik->get_kritik();
        $this->template->load('Landingpage/Form_add_kritik', $data);
    }

    function aksiadd()
    {
        check_session_pemilik();
        $this->load->view('Landingpage/Form_add_kritik');
    }

    function addkritik()
    {
        check_session_pemilik();
        $saran       = $this->input->post('saran');
        $kritik         = $this->input->post('kritik');

        $kritik = array(
            'Kritik'       => $kritik,
            'Saran'        => $saran

        );

        $addkritik = $this->Model_kritik->addkritik($kritik);
        if ($addkritik) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('landing');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('landing');
        }
    }
    function deletekritik($Id_Kritik)
    {
        $this->Model_kritik->delete_kritik($Id_Kritik);
        $this->session->set_flashdata('message', 'Data kritik Berhasil Dihapus');
        redirect('kritik');
    }
}
