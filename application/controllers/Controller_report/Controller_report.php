<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_report');
        $this->load->library('Template');
        check_session();
    }

    function report_Hewan()
    {
        $data['record'] =  $this->Model_report->get_hewan();
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_hewan', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function report_RekamMedisbyDate()
    {
        $date1 = $_POST['tanggal1'];
        $date2 = $_POST['tanggal2'];
        $data['record'] =  $this->Model_report->get_detail_rm_byPemilik($date1, $date2);
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_rekamMedis', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function report_Kritik()
    {
        $data['record'] =  $this->Model_report->get_kritik();
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_kritik', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}