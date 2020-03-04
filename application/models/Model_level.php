<?php
class Model_level extends CI_Model
{

    function get_level()
    {
        $data_level = $this->db->get('level')->result();
        return $data_level;
    }
    function get_level_by_id($id_level)
    {
        $this->db->where("Id_Level", $id_level);
        $getlevelbyId = $this->db->get('level')->row();
        return $getlevelbyId;
    }

    function addlevel($data_level) // ini jangan dirubah 
    {
        $addlevel = $this->db->insert("level", $data_level);
        return $addlevel;
    }

    function update_level($id_level, $data_level)
    {
        $this->db->where('Id_Level', $id_level);
        $updateLevel = $this->db->update("level", $data_level);
        return $updateLevel;
    }

    function delete_level($id_level)
    {
        $this->db->where('Id_Level', $id_level);
        $deleteLevel = $this->db->delete("level");
        return $deleteLevel;
    }
}
