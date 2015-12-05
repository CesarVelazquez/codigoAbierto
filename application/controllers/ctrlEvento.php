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
        $this->load->model('lugar');
        $this->load->model('boleto');
    }
    
    function nuevoEvento()
    {
       
        //load upload class library
        $this->load->library('upload');
        $upload_data = $this->upload->data();

        if (!$this->upload->do_upload('frmFoto'))
        {    
            echo  $this->upload->display_errors();    
        }
        else
        {
            $upload_data = $this->upload->data(); 
        }
    

        $idLugar = $this->input->post('frmIdLugar');
        $tipoEvento = $this->input->post('frmTipoEvento');
        $nombre = $this->input->post('frmNombre');
        $descripcion = $this->input->post('frmDescripcion');
        $foto = $upload_data['file_name'];
        $fecha = $this->input->post('frmFecha');
        $precio = $this->input->post('frmPrecio');
        $data = array('idLugar'=>$idLugar,'tipoEvento'=>$tipoEvento,'nombre'=>$nombre,'descripcion'=>$descripcion,'foto'=>$foto,'fecha'=>$fecha,'precio'=>$precio);


        $this->evento->setEvento($data);
        redirect('/ctrlAdmin', 'refresh');
    }
    
    function getEvento($idEvento)
    {
        $evento= $this->evento->getEvento($idEvento);
        $lugar = $this->lugar->getLugar($evento->idLugar);
        $boletos = $this->boleto->getBoleto($idEvento);
        $asientos = $this->boleto->getBoletos($idEvento);
        $header=array('titulo'=>'Detalle');
        $data = array('idEvento' => $evento ->idEvento,'idLugar' => $evento ->idLugar,
                      'tipoEvento' => $evento ->tipoEvento,'nombre' => $evento ->nombre,
                      'descripcion' => $evento ->descripcion,'foto' => $evento ->foto,
                      'fecha' => $evento ->fecha,'precio' => $evento ->precio,'lugar'=>$lugar->descripcion,
                      'ubicacion'=>$lugar->ubicacion,'cupo'=>$lugar->cupo,'disponibles' =>($lugar->cupo)-($boletos),
                      'asientos' => $asientos);
        $footer=array('ruta'=>  base_url('assets/js/inicio.js'));
       /* $menu=array('active'=>'inicio', 'compras'=>  $this->_getNumCompras());*/
        $menu = array('compras' =>''); 
        $compras=array('compras'=>'');
        $this->load->view('comun/header', $header);
        $this->load->view('comun/menu',$menu);
        $this->load->view('confirm_compra',$data);
        $this->load->view('comun/login');
        $this->load->view('detalleEvento',$data);
        $this->load->view('comun/footer',$footer);
    }


    function listaEventos(){
        $eventos = $this->evento->getEventos();
        $this->output->set_output(json_encode($eventos));
    }
    
    function editaEvento()
    {
        $idEvento = $this->input->post('frmIdEvento');
        $idLugar = $this->input->post('frmIdLugar');
        $tipoEvento = $this->input->post('frmTipoEvento');
        $nombre = $this->input->post('frmNombre');
        $descripcion = $this->input->post('frmDescripcion');
        $foto = $this->input->post('frmFoto');
        $fecha = $this->input->post('frmFecha');
        $precio = $this->input->post('frmPrecio');
        $dataEditar = array('idLugar'=>$idLugar,'tipoEvento'=>$tipoEvento,'nombre'=>$nombre,'descripcion'=>$descripcion,'foto'=>$foto,'fecha'=>$fecha,'precio'=>$precio);
        $this->evento->updateEvento($idEvento,$dataEditar);
    }
    
    function consultaEvento()
    {
        $idEvento = $this->input->post('frmIdEvento');
        $this->evento->getEvento($idEvento);
    }
    
    function consultaEventos ()
    {
        $this->evento->getEventos();
    }
    
    function eliminaEvento()
    {
        $idEvento = $this->input->post('frmIdEvento');
        $this->evento->deleteEvento($idEvento);
    }
}
