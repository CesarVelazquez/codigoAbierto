<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inicio
 *
 * @author Rafael
 */
class CtrlContacto extends CI_Controller{
    
    
    function index()
    {   
        $menu=array('active'=>'contacto', 'compras'=> '');
        $header=array('titulo'=>'Contacto');
        $footer=array('ruta'=>  base_url('assets/js/inicio.js'));
        $this->load->view('comun/header', $header);
        $this->load->view('comun/menu',$menu);
        $this->load->view('contacto');
        $this->load->view('comun/footer',$footer);
    }

    function enviar ()
    {

            $this->load->library('form_validation');
            $this->load->helper('security');
            //Reglas de validación 
            $this->form_validation->set_rules('frmNombre','Nombre','trim|required|xss_clean');
            $this->form_validation->set_rules('frmApellido','Apellido','trim|xss_clean');
            $this->form_validation->set_rules('frmEmail','Correo Electrónico','trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('frmTelefono','Telefono','trim|xss_clean');
            $this->form_validation->set_rules('frmMensaje','Mensaje','trim|required|xss_clean');

            // Si alguna condición no se cumple
            if ($this->form_validation->run()== FALSE) {
                $footer=array('ruta'=>  base_url('asset/js/inicio.js'));
                $this->load->view('comun/header');
                $this->load->view('comun/menu');
                $this->load->view('contacto');
                $this->load->view('comun/footer',$footer);
            } else{
                // Toma los datos envía el correo
                $data = array(
                     'nombre' => $this->input->post('frmNombre'),
                     'apellido' => $this->input->post('frmApellido'),
                     'email'  => $this->input->post('frmEmail'),
                     'telefono' => $this->input->post('frmTelefono'),
                     'mensaje' => $this->input->post('frmMensaje')
                    );

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

                $this->email->from($data['email'], $data['nombre'] . " " . $data['apellido']);
                $this->email->to('thief_raf@hotmail.com'); 
                 

                $this->email->subject('Forma de Contacto Super Tickets');
                $this->email->message($data['mensaje']);    

                if ($this->email->send()) {
                    $header=array('titulo'=>'Contacto');
                    $footer=array('ruta'=>  base_url('assets/js/inicio.js'));
                    $this->load->view('comun/header', $header);
                    $this->load->view('comun/menu');
                    $this->load->view('enviado',$data);
                    $this->load->view('comun/footer',$footer);
                }else{
                    echo "error";
                }

            } 
    }

}
