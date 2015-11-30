<?php
class Usuario extends CI_Model
{
    function getUsuarios()
    {
        $query=  $this->db->get('usuario');
        return $query->result();
    }
    
    function login($usuario, $clave)
    {
        $query=  $this->db->get_where('personal', array('usuario'=>$usuario, 'clave'=>sha1($clave)));
        return $query->row();
    }

    function getUsuario($data)
    {
        $query=  $this->db->get_where('usuario', $data);
        return $query->row();
    }
    
    function setUsuario($data)
    {
        $this->db->insert('usuario', $data);
        return $this->db->insert_id();
    }
    
    function updateUsuario($id, $data)
    {
        $this->db->where('idUsuario', $id);
        $this->db->update('usuario', $data);
    }
    
    function deleteUsuario($id)
    {
        $this->db->delete('usuario', array('idUsuario'=>$id));
    }
}
?>