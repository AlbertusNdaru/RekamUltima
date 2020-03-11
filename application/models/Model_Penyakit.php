<?php
class Model_Penyakit extends CI_Model
{
    function get_Penyakit()
    {

        $dataPenyakit = $this->db->get('penyakit')->result();
        return $dataPenyakit;
    }

    function get_penyakit_by_id($Id_Penyakit)
    {
        $this->db->where('Id_Penyakit', $Id_Penyakit);
        $getloginbyId = $this->db->get("penyakit")->row();
        return $getloginbyId;
    }

    function add_penyakit($dataPenyakit)
    {
        $add_penyakit = $this->db->insert("penyakit", $dataPenyakit);
        return $add_penyakit;
    }

    function update_penyakit($Id_Penyakit, $dataPenyakit)
    {
        $this->db->where('Id_Penyakit', $Id_Penyakit);
        $updatepenyakit = $this->db->update("penyakit", $dataPenyakit);
        return $updatepenyakit;
    }

    function delete_penyakit($Id_Penyakit)
    {
        $this->db->where('Id_Penyakit', $Id_Penyakit);
        $deletepenyakit = $this->db->delete("penyakit");
        return $deletepenyakit;
    }
}
