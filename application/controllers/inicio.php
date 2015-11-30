<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inicio
 *
 * @author admin
 */
class inicio extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this ->load->library('session');
        $this->load->model('evento');
    }
    
    function index()
    {
        $data=  $this->evento->getEventos();
        $header=array('titulo'=>'Venta de Boletos');
        $inicio=array('eventos'=>$data);
        $footer=array('ruta'=>  base_url('assets/js/inicio.js'));
        $this->load->view('comun/header', $header);
        $this->load->view('comun/menu');
        $this->load->view('comun/login');
        $this->load->view('inicio', $inicio);
        $this->load->view('comun/footer',$footer);
    }
}
