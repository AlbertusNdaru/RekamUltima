<?php
class Model_kritik extends CI_Model
{

    function get_kritik()
    {
        $data_kritik = $this->db->get('kritik')->result();
        return $data_kritik;
    }

    function addkritik($data_kritik) // ini jangan dirubah 
    {
        $addkritik = $this->db->insert("kritik", $data_kritik);
        return $addkritik;
    }

    function delete_kritik($Id_kritik)
    {
        $this->db->where('Id_Kritik', $Id_kritik);
        $deletekritik = $this->db->delete("kritik");
        return $deletekritik;
    }
}
