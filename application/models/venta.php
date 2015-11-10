<?php
class Venta extends CI_Model
{
    function getVentas()
    {
        $query=  $this->db->get('venta');
        return $query->result();
    }

    function getVenta($id)
    {
        $query=  $this->db->get_where('venta', array('idVenta'=>$id));
        return $query->row();
    }
    
    function setVenta($data)
    {
        $this->db->insert('venta', $data);
    }
    
    function updateVenta($id, $data)
    {
        $this->db->where('idVenta', $id);
        $this->db->update('venta', $data);
    }
    
    function deleteVenta($id)
    {
        $this->db->delete('venta', array('idVenta'=>$id));
    }
}
?>