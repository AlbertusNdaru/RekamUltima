<?php
class Model_Penyakit extends CI_Model
{
    function get_Penyakit()
    {

        $dataPenyakit = $this->db->get('penyakit')->result();
        return $dataPenyakit;
    }
}
