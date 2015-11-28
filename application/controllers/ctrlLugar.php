<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ctrlLugar
 *
 * @author BlancaG
 */
class CtrlLugar extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('lugar');
    }
    
    function nuevoLugar()
    {
        $descripcion = $this->input->post('frmLugar');
        $ubicacion = $this->input->post('frmUbicacion');
        $cupo = $this->input->post('frmCupo');
        $data = array('descripcion'=>$descripcion,'ubicacion'=>$ubicacion,'cupo'=>$cupo);
        $this->lugar->setLugar($data);
    }
}
