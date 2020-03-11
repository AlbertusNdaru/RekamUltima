<?php
class Model_Tindakan extends CI_Model
{
    function get_tindakan()
    {
        $dataTindakan = $this->db->get('tindakan')->result();
        return $dataTindakan;
    }

    function get_tindakan_by_id($Id_Tindakan)
    {
        $this->db->where('Id_Tindakan', $Id_Tindakan);
        $getloginyId = $this->db->get("tindakan")->row();
        return $getloginyId;
    }

    function add_tindakan($dataTindakan)
    {
        $add_tindakan = $this->db->insert("tindakan", $dataTindakan);
        return $add_tindakan;
    }

    function update_tindakan($Id_Tindakan, $dataTindakan)
    {
        $this->db->where('Id_Tindakan', $Id_Tindakan);
        $updatetindakan = $this->db->update("tindakan", $dataTindakan);
        return $updatetindakan;
    }

    function delete_tindakan($Id_Tindakan)
    {
        $this->db->where('Id_Tindakan', $Id_Tindakan);
        $deletetindakan = $this->db->delete("tindakan");
        return $deletetindakan;
    }
}
