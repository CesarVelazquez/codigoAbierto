<?php
class Boleto extends CI_Model
{
    function getBoletos()
    {
        $query=  $this->db->get('boleto');
        return $query->result();
    }

    function getBoleto($id)
    {
        $query=  $this->db->get_where('boleto', array('idBoleto'=>$id));
        return $query->row();
    }
    
    function setBoleto($data)
    {
        $this->db->insert('boleto', $data);
    }
    
    function updateBoleto($id, $data)
    {
        $this->db->where('idBoleto', $id);
        $this->db->update('boleto', $data);
    }
    
    function deleteBoleto($id)
    {
        $this->db->delete('boleto', array('idBoleto'=>$id));
    }
}
?>