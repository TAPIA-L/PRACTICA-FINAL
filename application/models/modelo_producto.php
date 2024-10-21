<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_producto extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function listar()
	{
		$consulta=$this->db->query("SELECT p.*, f.nombre AS nombre_marca 
                                    FROM producto p 
                                    LEFT JOIN fabricante f ON p.codigo_fabricante = f.codigo");
        return $consulta->result();
	}
	public function contar_producto()
	{
		$consulta=$this->db->query("SELECT COUNT(*) AS total FROM producto");
        $result=$consulta->row();
        return $result->total;

	}
	public function listar_imprimir($codigo)
	{
		$pesosconsulta=$this->db->query("SELECT p.*, f.nombre AS nombre_marca 
                                    FROM producto p 
                                    LEFT JOIN fabricante f ON p.codigo_fabricante = f.codigo
									WHERE  p.codigo=$codigo");
        return $pesosconsulta->result();
	}
	
	public function adicionar($nombre,$precio,$codigo_fabricante)
	{
		$consulta=$this->db->query("INSERT INTO  producto VALUES(null,'$nombre','$precio','$codigo_fabricante')");
       
		if($consulta==true){
			return true;
		}else{
			return false;
		}
		}
		public function eliminar($codigo)
	{
		$consulta=$this->db->query("DELETE  FROM producto WHERE codigo=$codigo");
		     if($consulta==true){
			return true;
		    }else{
			return false;
		}
	}
	public function editar($codigo,$editar="NULL",$nombre="NULL",$precio="NULL",$codigo_fabricante="NULL"){
		if($editar=="NULL"){
			$consulta=$this->db->query("SELECT * FROM producto WHERE codigo=$codigo"); 
		 //print_r($consulta);die();
        return $consulta->result();
		}else{
			$consulta=$this->db->query("UPDATE producto SET nombre='$nombre',precio='$precio',codigo_fabricante='$codigo_fabricante' WHERE codigo='$codigo'");
			
		}
         
	}
}