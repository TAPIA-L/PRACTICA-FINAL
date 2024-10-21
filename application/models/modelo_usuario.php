<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_usuario extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function listar()
	{
		$consulta=$this->db->query("SELECT * FROM usuarios");
        return $consulta->result();

	}
    public function contar_usuario()
	{
		$consulta=$this->db->query("SELECT COUNT(*) AS total FROM usuarios");
        $result=$consulta->row();
        return $result->total;
    }
    public function listar_imprimir($id_usuario)
	{
		$pesosconsulta=$this->db->query("SELECT * FROM usuarios where id_usuario=$id_usuario");
        return $pesosconsulta->result();
	}
    

	public function adicionar($nombre,$contrasena,$foto){
		//print_r($this->input->post()); die();
		$consulta=$this->db->query("INSERT INTO usuarios VALUES(null,'$nombre','$contrasena','$foto')");
       
        if($consulta == true){
            return true;
        }else{
            return false;
        }
	}
    public function eliminar($id_usuario){
        $consulta=$this->db->query("DELETE FROM usuarios WHERE id_usuario=$id_usuario");
        if($consulta == true){
            return true;
        }else{
            return false;
        }
		
	}
    public function editar($id_usuario,$editar="NULL",$nombre="NULL",$contrasena="NULL",$foto="NULL"){
        if($editar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM usuarios where id_usuario=$id_usuario");
            return $consulta->result();

        }else{
            $consulta=$this->db->query("UPDATE usuarios SET nombre='$nombre',contrasena='$contrasena',foto='$foto' WHERE id_usuario='$id_usuario'");
            return true;
        }
    }
}
