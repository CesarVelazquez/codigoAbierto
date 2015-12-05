<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ctrlRegistro
 *
 * @author Rafael
 */
class CtrlAdmin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('usuario');
        $this->load->model('evento');
        $this->load->model('venta');
        $this->load->model('lugar');
    }

    function index(){

        if ($this->session->userdata['tipoUsuario']=='admin') {
        
        $menu=array('active'=>'admin', 'compras'=> '');

        $data = array('idLugar' => $this->lugar->getLugares(),'numUsuarios'=> $this->usuario->getNumUsuarios(),'numEventos' => $this->evento->getNumEventos()
                    ,'numVentas' => $this->venta->getNumVentas());
      
        $header=array('titulo'=>'Panel de Administración');
        $footer=array('ruta'=>  base_url('assets/js/inicio.js'));
        $this->load->view('comun/header',$header);
        $this->load->view('comun/menu',$menu);
        $this->load->view('admin',$data);
        $this->load->view('comun/login');
        $this->load->view('nuevoEvento');
        $this->load->view('nuevoLugar');
        $this->load->view('comun/footer',$footer);
    }else{
        redirect('/', 'refresh');
    }
}

}    