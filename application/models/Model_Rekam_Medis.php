<?php
class Model_Rekam_Medis extends CI_Model
{
    function get_rekam_medis()
    {

        $dataRekam = $this->db->get('rekam_medis')->result();
        return $dataRekam;
    }
}
