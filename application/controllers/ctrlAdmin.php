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
    }

    function index(){

        $data = array('numUsuarios'=> $this->usuario->getNumUsuarios(),'numEventos' => $this->evento->getNumEventos()
                    ,'numVentas' => $this->venta->getNumVentas());
      
      
        $footer=array('ruta'=>  base_url('assets/js/inicio.js'));
        $this->load->view('comun/header');
        $this->load->view('comun/menu');
        $this->load->view('admin',($data));
        $this->load->view('comun/login');
        $this->load->view('comun/footer',$footer);
    }

}    