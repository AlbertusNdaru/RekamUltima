<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerKritik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kritik');
        $this->load->model('Model_Pemilik');
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
        $saran   = $this->input->post('saran');
        $kritik  = $this->input->post('kritik');
        $pemilik = $this->input->post('id_pemilik');

        $kritik = array(
            'Kritik'     => $kritik,
            'Id_Pemilik' => $pemilik,
            'Saran'      => $saran,
            'Date'       => get_current_date()

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
