<?php
class Evento extends CI_Model
{
    function getEventos()
    {
        $query=  $this->db->get('evento');
        return $query->result();
    }

    function getEvento($id)
    {
        $query=  $this->db->get_where('evento', array('idEvento'=>$id));
        return $query->row();
    }
    
    function setEvento($data)
    {
        $this->db->insert('evento', $data);
    }
    
    function updateEvento($id, $data)
    {
        $this->db->where('idEvento', $id);
        $this->db->update('evento', $data);
    }
    
    function deleteEvento($id)
    {
        $this->db->delete('evento', array('idEvento'=>$id));
    }
}
?>