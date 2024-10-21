<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_usuario extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session'); 
		$this->load->model("modelo_usuario");
	}

	
	public function ver()
	{
		if(empty($this->session->userdata("id_usuario"))){
			redirect(base_url("principal/logout"));
		   }else{
       
        $data['ver']=$this->modelo_usuario->listar();
        // print_r ($data);
		$this->load->view('plantilla/header');
		$this->load->view('usuarios/vista_usuario',$data);
		$this->load->view('plantilla/footer');
		   }
	}
	public function nuevoForm() {
        // Verificar si el usuario está autenticado
        if (empty($this->session->userdata("id_usuario"))) {
            redirect(base_url("principal/logout")); // Redirigir si no está autenticado
        } else {
            // Cargar las vistas si el usuario está autenticado
            $this->load->view('plantilla/header');
            $this->load->view("usuarios/nuevoForm");
            $this->load->view('plantilla/footer');
        }
    }

	public function adicionar(){
		
	  //	print_r($this->input->post()); die();
	  $nombre_img=$_FILES['upload']['name'];
	  // print_r($nombre_img);die();
	   $this->guardar_archivo();
		$adicionar=$this->modelo_usuario->adicionar(
			
			$this->input->post("nombre"),
			$this->input->post("contrasena"),
			$nombre_img
		);
		redirect(base_url('controlador_usuario/ver'));
	}
	
	public function eliminar($id_usuario){
		$eliminar=$this->modelo_usuario->eliminar($id_usuario);
		redirect(base_url('controlador_usuario/ver'));
	}  
    public function editar($id_usuario){
		//print_r($id); die();

		if(is_numeric($id_usuario)){
			$data["datos"]=$this->modelo_usuario->editar($id_usuario);
				   //	print_r($data); die();
				   
		    $this->load->view('plantilla/header');
			$this->load->view("usuarios/vista_editar_usuario",$data);
			$this->load->view('plantilla/footer');


			if ($this->input->post("editar")) {
				//print_r($this->input->post());die();
				
				
				$modificar=$this->modelo_usuario->editar(
					$id_usuario,
				    $this->input->post("editar"),
			        $this->input->post("nombre"),
					$this->input->post("contrasena")
					
			       
				);
				redirect(base_url('controlador_usuario/ver'));
			}
		}
	}
	private function guardar_archivo()
    {
        $mi_archivo = 'upload';
       //    print_r($mi_archivo);die();
        $config['upload_path'] = "fotos/";
        //$config['file_name']= "nombre_archivo";
        $config['allowed_types'] = "*";
        //$config['allowed_types'] = "*";
        $config['max_size'] = "5000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        var_dump($this->upload->data());

    }

}

