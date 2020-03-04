<?php
class Model_hak_akses extends CI_Model
{
    function get_hak_akses()
    {
        $dataHakAkses = $this->db->get('level')->result();
        return $dataHakAkses;
    }
}
