<?php
class Model_level extends CI_Model
{

    function get_level()
    {
        $data_level = $this->db->get('level')->result();
        return $data_level;
    }
    function get_level_by_id($Id_Level)
    {
        $this->db->where("Id_Level", $Id_Level);
        $getlevelbyId = $this->db->get('level')->row();
        return $getlevelbyId;
    }

    function addlevel($data_level) // ini jangan dirubah 
    {
        $addlevel = $this->db->insert("level", $data_level);
        return $addlevel;
    }

    function update_level($Id_Level, $data_level)
    {
        $this->db->where('Id_Level', $Id_Level);
        $updateLevel = $this->db->update("level", $data_level);
        return $updateLevel;
    }

    function delete_level($Id_Level)
    {
        $this->db->where('Id_Level', $Id_Level);
        $deleteLevel = $this->db->delete("level");
        return $deleteLevel;
    }
}
