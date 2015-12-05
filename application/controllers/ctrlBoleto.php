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
        $this->load->model('venta');
        $this->load->model('evento');
        $this->load->model('lugar');
    }
    
    function nuevosBoletos($idEvento)
    {
        $asientos = explode(",",$this->input->post('noAsientos'));
        
        for($n=0;$n<count($asientos);$n++)
        {
           
           $dataBoleto = array('idEvento'=>$idEvento,'asiento'=>$asientos[$n]);
           $ad = $this->boleto->setBoleto($dataBoleto);
           $dataVenta = array('idUsuario'=>$this->session->idUsuario,'idBoleto' => $ad);
           $this->venta->setVenta($dataVenta);
           
        }

        $datos = $this->evento->getEvento($idEvento);
        $lugar = $this->lugar->getLugar($datos->idEvento);

        // Envío de Email
                $config['useragent']    = 'CodeIgniter';
                $config['protocol']     = 'smtp';
                $config['smtp_host']    = 'ssl://smtp.googlemail.com';
                $config['smtp_user']    = 'rafael.chavarriaperez@gmail.com'; // Your gmail id
                $config['smtp_pass']    = 'codigoabierto2015'; // Your gmail Password
                $config['smtp_port']    = 465;
                $config['wordwrap']     = TRUE;    
                $config['wrapchars']    = 76;
                $config['mailtype']     = 'html';
                $config['charset']      = 'utf-8';
                $config['validate']     = FALSE;
                $config['priority']     = 3;
                $config['newline']      = "\r\n";
                $config['crlf']         = "\r\n";

                $this->load->library('email');
                $this->email->initialize($config);

                $this->email->from('admin@supertickets.com', 'Super Tickets');
                $this->email->to('thief_raf@hotmail.com'); 
                 

                $this->email->subject('Gracias por tu compra');
                $this->email->message('Estimad@ '.$this->session->userdata['usuario'].', gracias por comprar en Super Tickets
                                      <h2>Detalles de tu compra:</h2>
                                      <h4>Numero de Folio: '.md5(uniqid(rand(), true)).'</h4>
                                     
                                            <p><b>Evento:</b> '.$datos->nombre.' </p>
                                            <p><b>Lugar:</b> '.$lugar->descripcion.'</p>
                                            <p><b>Ubicacion:</b> '.$lugar->ubicacion.'</p>
                                            <p><b>Fecha:</b> '.substr($datos->fecha, 0,10).'</p>
                                            <p><b>Boletos Comprados:</b> '.count($asientos).'</p>
                                            <p><b>Asiento:</b> '.$this->input->post('noAsientos').'</p>
                                            
                                      ');    

                $this->email->send();

                redirect('/ctrlCompras', 'refresh');

        
        
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
