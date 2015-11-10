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
        //$this ->load->library('session');
        $this->load->model('lugar');
    }
    
    function index()
    {
        //$data=  $this->lugar->getLugares();
        //echo json_encode($data);
        $this->load->view('header', array('titulo'=>'titulo de prueba'));
    }
}
