<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ctrlEvento
 *
 * @author Gaby
 */
class CtrlEvento extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('evento');
    }
    
    function nuevoEvento()
    {
        $idLugar = $this->input->post('frmIdLugar');
        $tipoEvento = $this->input->post('frmTipoEvento');
        $nombre = $this->input->post('frmNombre');
        $descripcion = $this->input->post('frmDescripcion');
        $foto = $this->input->post('frmFoto');
        $fecha = $this->input->post('frmFecha');
        $precio = $this->input->post('frmPrecio');
        $data = array('idLugar'=>$idLugar,'tipoEvento'=>$tipoEvento,'nombre'=>$nombre,'descripcion'=>$descripcion,'foto'=>$foto,'fecha'=>$fecha,'precio'=>$precio);
        $this->evento->setEvento($data);
    }
    
    function getEvento($idEvento)
    {
        echo sha1('admin');
    }
}
