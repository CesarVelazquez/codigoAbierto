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
class CtrlUsuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('usuario');
    }

    function index(){
        $footer=array('ruta'=>  base_url('asset/js/inicio.js'));
        $this->load->view('comun/header');
        $this->load->view('comun/menu');
        $this->load->view('signup');
        $this->load->view('comun/login');
        $this->load->view('comun/footer',$footer);
    }
    
    function nuevoUsuario()

    {       
           // Se incluye libretía para validar datos del formulario y seguridad para xss_clean
            $this->load->library('form_validation');
            $this->load->helper('security');
            //Reglas de validación 
            $this->form_validation->set_rules('frmUsuario','Nombre de Usuario','trim|required|min_length[8]|is_unique[usuario.user]|xss_clean');
            $this->form_validation->set_rules('frmPass','Contraseña','trim|required|min_length[8]|xss_clean');
            $this->form_validation->set_rules('frmNombre','Nombre Completo','trim|required|xss_clean');
            $this->form_validation->set_rules('frmEmail','Correo Electrónico','trim|required|min_length[8]|valid_email|is_unique[usuario.email]|xss_clean');

            // Si alguna condición no se cumple
            if ($this->form_validation->run()== FALSE) {
                $footer=array('ruta'=>  base_url('asset/js/inicio.js'));
                $this->load->view('comun/header');
                $this->load->view('comun/menu');
                $this->load->view('signup');
                $this->load->view('comun/login');
                $this->load->view('comun/footer',$footer);
            } else{
                // Toma los datos y los ingresa a la base de datos
                $data = array(
                     'tipoUsuario' => "Registrado",
                     'user' => $this->input->post('frmUsuario'),
                     'password'  => sha1($this->input->post('frmPass')),
                     'nombre' => $this->input->post('frmNombre'),
                     'email' => $this->input->post('frmEmail')
                    );

                $this->usuario->setUsuario($data);
                
                // Crea la sesión
                $this->session->set_userdata('usuario', $data['user']);
                $this->session->set_userdata('idUsuario',  $this->db->insert_id());

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
                 

                $this->email->subject('Usuario Registrado');
                $this->email->message('Estimad@ '.$this->input->post('frmNombre').', gracias por registrarse en Super Tickets');    

                $this->email->send();


redirect('/', 'refresh');

            }
    }
    
    function obtieneUsuarios()
    {
        $idEvento = $this->input->post('frmIdEvento');
        $this->usuario->consultaBoletos($idEvento);
    }

    function listaUsuarios()
    {
        $usuarios = $this->usuario->getUsuarios();
        $this->output->set_output(json_encode($usuarios));

    }

    function misDatos()
    {
        // Carga Modelo Venta para obtener historial de compras del usuario
        $this->load->model('venta');

       $header=array('titulo'=>'Mis Datos');
       $menu=array('active'=>'', 'compras'=> '');

        // Toma los datos del usuario con la sesión activa
        $data = $this->session->userdata['usuario'];
        $res = $this->usuario->getUsuario($data);
        $array = json_decode(json_encode($res),true);
        $data = array(
                        'idUsuario' => $array['idUsuario'],
                        'usuario' => $array['user'],
                        'nombre' => $array['nombre'],
                        'email' => $array['email']
                    );

        // Carga la vista del perfil de usuario
        $footer=array('ruta'=>  base_url('asset/js/inicio.js'));
        $this->load->view('comun/header',$header);
        $this->load->view('comun/menu',$menu);
        $this->load->view('comun/confirm_del');
        $this->load->view('misDatos',$data);
        $this->load->view('comun/footer',$footer);
    }
    
    function eliminaUsuario()
    {
        $usuario = $this->session->userdata['usuario'];
        $this->session->unset_userdata('usuario');
        $this->session->unset_userdata('idUsuario');
        $this->usuario->deleteUsuario($usuario);

        $footer=array('ruta'=>  base_url('asset/js/inicio.js'));
        $this->load->view('comun/header');
        $this->load->view('comun/menu');
        $this->load->view('usrBorrado');
        $this->load->view('comun/footer',$footer);  
    }

    function login(){

        $data = array('user' => $this->input->post('frmUsuario'),'password' => sha1($this->input->post('frmPass')));
        
        if ($var = json_decode(json_encode($this->usuario->login($data)),true)) {
           $this->session->set_userdata('usuario', $var['user']);
           $this->session->set_userdata('idUsuario', $var['idUsuario']);
           $this->session->set_userdata('tipoUsuario', $var['tipoUsuario']);
           redirect('/', 'refresh');
        }else{
            echo "usuario o contraseña incorrectos";
        }
       
    }

    function logout(){
       
        $this->session->unset_userdata('usuario');
        $this->session->unset_userdata('idUsuario');
        $this->session->unset_userdata('tipoUsuario');
        redirect('/', 'refresh');
        
    }
}
