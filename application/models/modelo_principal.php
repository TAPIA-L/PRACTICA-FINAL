<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Modelo_principal extends CI_MODEL
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function verificarUsuario($nombre, $contrasena)
    {
        $consulta = $this->db->query("SELECT * FROM usuarios  
      WHERE nombre='$nombre' AND contrasena='$contrasena' ");
        return  $consulta->result();

    }

}