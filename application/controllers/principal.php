<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->helper("url");
		$this->load->library('session'); 
		$this->load->model("modelo_principal");
		$this->load->model("modelo_usuario");
		$this->load->model("modelo_fabricante");
		$this->load->model("modelo_producto");

		
    }
	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('plantilla/login');
		

	}
	public function verificarUsuario()
        {
                $datos["verificar"] = $this->modelo_principal->verificarUsuario(
                        $this->input->post("nombre"),
                        $this->input->post("contrasena")
                );
                if (empty($datos["verificar"])) {
                        redirect(base_url("principal/logout"));
                } else {

                        foreach ($datos["verificar"] as $fila) {
                                $id_usuario = $fila->id_usuario;
                                $nombre = $fila->nombre;
                                $contrasena = $fila->contrasena;
                                $foto = $fila->foto;
                        }
                        $data = array(
                                'id_usuario' => $id_usuario,
                                'nombre' => $nombre,
                                'contrasena' => $contrasena,
                                 'foto'  => $foto,
                                'login' => TRUE
                        );
                        $this->session->set_userdata($data);
                        redirect(base_url("principal/index"));
                }
        }


	
	public function index()
	{
	
		if(empty($this->session->userdata("id_usuario"))){
		 redirect(base_url("principal/logout"));
		}else{
			$data['fab']=$this->modelo_fabricante->contar_fabricante();
			$data['pro']=$this->modelo_producto->contar_producto();
			$data['usu']=$this->modelo_usuario->contar_usuario();
			
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/principal',$data);
		$this->load->view('plantilla/footer');
		}
		
	}


}