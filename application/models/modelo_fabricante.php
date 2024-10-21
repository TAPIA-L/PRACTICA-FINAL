<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_fabricante extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function listar()
	{
		$consulta=$this->db->query("SELECT * FROM fabricante");
        return $consulta->result();
	}
    public function contar_fabricante()
	{
		$consulta=$this->db->query("SELECT COUNT(*) AS total FROM fabricante");
        $result=$consulta->row();
        return $result->total;

	}
    public function listar_imprimir($codigo)
	{
		$pesosconsulta=$this->db->query("SELECT * FROM fabricante where codigo=$codigo");
        return $pesosconsulta->result();
	}
	public function adicionar($nombre){
		//print_r($this->input->post()); die();
		$consulta=$this->db->query("INSERT INTO fabricante VALUES(null,'$nombre')");
       
        if($consulta == true){
            return true;
        }else{
            return false;
        }
	}
    public function eliminar($codigo){
        $consulta=$this->db->query("DELETE FROM fabricante WHERE codigo=$codigo");
        if($consulta == true){
            return true;
        }else{
            return false;
        }
		
	}
    public function editar($codigo,$editar="NULL",$nombre="NULL"){
        if($editar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM fabricante where codigo=$codigo");
            return $consulta->result();

        }else{
            $consulta=$this->db->query("UPDATE fabricante SET nombre='$nombre' WHERE codigo='$codigo'");
            return true;
        }
    }
}