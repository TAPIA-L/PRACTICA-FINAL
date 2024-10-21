<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_fabricante extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session'); 
		$this->load->model("modelo_fabricante");
	}

	
	public function ver()
	{
		if(empty($this->session->userdata("id_usuario"))){
			redirect(base_url("principal/logout"));
		   }else{
       
        $data['ver']=$this->modelo_fabricante->listar();
        // print_r ($data);
		$this->load->view('plantilla/header');
		$this->load->view('fabricante/vista_fabricante',$data);
		$this->load->view('plantilla/footer');
		   }
	}
	public function nuevoForm(){
		if(empty($this->session->userdata("id_usuario"))){
			redirect(base_url("principal/logout"));
		   }else{
		
		$this->load->view('plantilla/header');
		$this->load->view("fabricante/nuevoForm");
		$this->load->view('plantilla/footer');
		   }
	}
	public function adicionar(){
	  //	print_r($this->input->post()); die();
		$adicionar=$this->modelo_fabricante->adicionar(
			
			$this->input->post("nombre")
		);
		redirect(base_url('controlador_fabricante/ver'));
	}
	
	public function eliminar($codigo){
		$eliminar=$this->modelo_fabricante->eliminar($codigo);
		redirect(base_url('controlador_fabricante/ver'));
	}  
    public function editar($codigo){
		//print_r($id); die();

		if(is_numeric($codigo)){
			$data["datos"]=$this->modelo_fabricante->editar($codigo);
				   //	print_r($data); die();
				   
		    $this->load->view('plantilla/header');
			$this->load->view("fabricante/vista_editar_fabricante",$data);
			$this->load->view('plantilla/footer');
			if($this->input->post("editar")){
				$modificar=$this->modelo_fabricante->editar(
					$codigo,
				    $this->input->post("editar"),
			        $this->input->post("nombre")
			       
				);
				redirect(base_url('controlador_fabricante/ver'));
			}
		}
	}

}