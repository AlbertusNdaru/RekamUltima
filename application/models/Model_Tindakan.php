<?php
class Model_Tindakan extends CI_Model
{
    function get_tindakan()
    {
        $dataTindakan = $this->db->get('tindakan')->result();
        return $dataTindakan;
    }
}
