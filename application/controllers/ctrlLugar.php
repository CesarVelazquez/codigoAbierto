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
    
    function editaLugar()
    {
        $idLugar = $this->input->post('frmIdLugar');
        $descripcion = $this->input->post('frmLugar');
        $ubicacion = $this->input->post('frmUbicacion');
        $cupo = $this->input->post('frmCupo');
        $dataEditar = array('descripcion'=>$descripcion,'ubicacion'=>$ubicacion,'cupo'=>$cupo);
        $this->lugar->updateLugar($idLugar,$dataEditar);
    }
    
    function eliminaLugar()
    {
        $idLugar = $this->input->post('frmIdLugar');
        $this->lugar->deleteLugar($idLugar);
    }
    
    function consultaLugar()
    {
        $idLugar = $this->input->post('frmIdLugar');
        $this->lugar->getLugar($idLugar);        
    }
    
    function consultaLugares()
    {
        $dataLugares = $this->lugar->getLugares();
        //echo json_encode($dataLugares);
        $footer=array('ruta'=>  base_url('asset/js/lugares.js'));
        $lugares=array('titulo'=>'Lugares');
        $this->load->view('comun/header');
        $this->load->view('comun/menu');
        $this->load->view('comun/login');
        $this->load->view('Lugares',array('ConsultaLugares'=>$dataLugares,'luagares'=>$lugares));
        $this->load->view('comun/footer',$footer);
    }
    
    
}
