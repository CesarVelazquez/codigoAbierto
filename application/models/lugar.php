<?php
class Lugar extends CI_Model
{
    function getLugares()
    {
        $query=  $this->db->get('lugar');
        return $query->result();
    }

    function getLugar($id)
    {
        $query=  $this->db->get_where('lugar', array('idLugar'=>$id));
        return $query->row();
    }
    
    function setLugar($data)
    {
        $this->db->insert('lugar', $data);
    }
    
    function updateLugar($id, $data)
    {
        $this->db->where('idLugar', $id);
        $this->db->update('lugar', $data);
    }
    
    function deleteLugar($id)
    {
        $this->db->delete('lugar', array('idLugar'=>$id));
    }
}
?>