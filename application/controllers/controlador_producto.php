<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_producto extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session'); 
		$this->load->model("modelo_producto");
		$this->load->model("modelo_fabricante");
	}

	
	public function ver()
	{
		if(empty($this->session->userdata("id_usuario"))){
			redirect(base_url("principal/logout"));
		   }else{
        
        $data['ver']=$this->modelo_producto->listar();
        // print_r ($data);
		$this->load->view('plantilla/header');
		$this->load->view('producto/vista_producto',$data);
		$this->load->view('plantilla/footer');

		   }
		
	}
	public function nuevoForm(){
		if(empty($this->session->userdata("id_usuario"))){
			redirect(base_url("principal/logout"));
		   }else{
        $data['marcas'] = $this->modelo_fabricante->listar();

		$this->load->view('plantilla/header');
		$this->load->view("producto/nuevoForm",$data);
		$this->load->view('plantilla/footer');
		   }
	}
	public function verAdd()
	{if(empty($this->session->userdata("id_usuario"))){
		redirect(base_url("principal/logout"));
	   }else{
		//if(empty($this->session->userdata("id"))){
			//redirect(base_url("principal/logout"));
		 //  }else{
    
        //print_r($data);Die();
		$this->load->view('nuevoForm');

		}
	}
	public function adicionar(){
	  //	print_r($this->input->post()); die();
		$adicionar=$this->modelo_producto->adicionar(
			$this->input->post("nombre"),
            $this->input->post("precio"),
            $this->input->post("codigo_fabricante")
		);
		redirect(base_url('controlador_producto/ver'));
	}
	public function eliminar($codigo){
		$eliminar=$this->modelo_producto->eliminar($codigo);
		redirect(base_url('controlador_producto/ver'));
	}  
	public function editar($codigo){
		//print_r($id); die();

		if(is_numeric($codigo)){

			$data["datos"]=$this->modelo_producto->editar($codigo);
			$data['marcas'] = $this->modelo_fabricante->listar();
				   //	print_r($data); die();
				   
		    $this->load->view('plantilla/header');
			$this->load->view("producto/vista_editar_producto",$data);
			$this->load->view('plantilla/footer');
			if($this->input->post("editar")){
				$modificar=$this->modelo_producto->editar(
					$codigo,
				    $this->input->post("editar"),
			        $this->input->post("nombre"),
					$this->input->post("precio"),
					$this->input->post("codigo_fabricante")
			       
				);
				redirect(base_url('controlador_producto/ver'));
			}
		}

	}
    
}
