<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ctrlBoleto
 *
 * @author Gaby
 */
class CtrlBoleto extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('boleto');
    }
    
    function nuevosBoletos($idEvento,$noAsientos)
    {
        for($n=1;$n<=$noAsientos;$n++)
        {
            $dataBoleto = array('idEvento'=>$idEvento,'asiento'=>$n);
            $this->boleto->setBoleto($dataBoleto);
        }
    }
    
    function obtieneBoletos()
    {
        $idEvento = $this->input->post('frmIdEvento');
        $this->boleto->consultaBoletos($idEvento);
    }
    
    function eliminaBoletos()
    {
        $idEvento = $this->input->post('frmIdEvento');
        $this->boleto->eliminarboletos($idEvento);  
    }
}
