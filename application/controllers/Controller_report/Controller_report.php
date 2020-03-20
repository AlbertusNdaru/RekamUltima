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
        $data['record']=  $this->Model_report->get_hewan();
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_hewan',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }




}