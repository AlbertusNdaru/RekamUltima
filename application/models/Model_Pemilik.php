<?php
class Model_Pemilik extends CI_Model
{
    function get_pemilik()
    {

        $dataPemilik = $this->db->get('pemilik_hewan')->result();
        return $dataPemilik;
    }
}
