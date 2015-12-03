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
class CtrlVenta extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('venta');
    }

    function index(){
        $footer=array('ruta'=>  base_url('asset/js/inicio.js'));
        $this->load->view('comun/header');
        $this->load->view('comun/menu');
        $this->load->view('signup');
        $this->load->view('comun/login');
        $this->load->view('comun/footer',$footer);
    }

}