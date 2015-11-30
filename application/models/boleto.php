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
        return $this->db->insert_id();
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
    
    function consultaBoletos($idEvento)
    {
        $this->db->select('b.idBoleto,b.idEvento,b.asiento,v.idVenta');
        $this->db->from('boleto b');
        $this->db->join('venta v', 'v.idBoleto = b.idBoleto','left');
        $this->db->where('b.idEvento',$idEvento);
        $this->db->order_by('b.idBoleto');
        $query = $this->db->get();
        return $query->result();
    }
    
    function eliminarboletos($idEvento)
    {
        $this->db->delete('boleto', array('idEvento'=>$idEvento));
    }
}
?>