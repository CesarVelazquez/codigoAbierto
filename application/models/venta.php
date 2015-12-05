<?php
class Venta extends CI_Model
{
    function getVentas()
    {
        $query=  $this->db->get('venta');
        return $query->result();
    }

     function getNumVentas()
    {
        $query=  $this->db->get('venta');
        return $query->num_rows();
    }

    function getVenta($id)
    {
        $query=  $this->db->get_where('venta', array('idVenta'=>$id));
        return $query->row();
    }

    function getVentaUsuario($id)
    {
        $query=  $this->db->get_where('venta', array('idUsuario'=>$id));
        return $query->result();
    }
    
    function getAll($idUsuario)
    {
        $query=  $this->db->query('
            select v.idVenta, u.nombre, u.email, b.asiento, e.tipoEvento, e.nombre, e.foto, e.fecha, e.precio, l.descripcion
            from venta v
            inner join usuario u
            on v.idUsuario=u.idUsuario
            inner join boleto b
            on v.idBoleto=b.idBoleto
            inner join evento e
            on b.idEvento=e.idEvento
            inner join lugar l
            on e.idLugar=l.idLugar
            where u.idUsuario='.$idUsuario);
        return $query->result();
    }
    
    function setVenta($data)
    {
        $this->db->insert('venta', $data);
        return $this->db->insert_id();
    }
    
    function updateVenta($id, $data)
    {
        $this->db->where('idVenta', $id);
        $this->db->update('venta', $data);
    }
    
    function deleteVenta($id)
    {
        $this->db->delete('venta', array('idUsuario'=>$id));
    }
}
?>