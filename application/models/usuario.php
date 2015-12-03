<?php
class Usuario extends CI_Model
{
    function getUsuarios()
    {
        $query=  $this->db->get('usuario');
        return $query->result();
    }

    function getNumUsuarios()
    {
        $query=  $this->db->get('usuario');
        return $query->num_rows();
    }
    
    function login($data)
    {
        $query=  $this->db->get_where('usuario', array('user'=> $data['user'], 'password' => $data['password'] ));
        return $query->row();

    }

    function getUsuario($data)
    {
        $query = $this->db->get_where('usuario', array('user' => $data));
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
    
    function deleteUsuario($usuario)
    {
        $this->db->delete('usuario', array('user'=>$usuario));
    }
}
?>