<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
        $this->load->library("fpdf/fpdf");
        define('FPDF_FONTPATH',BASEPATH.'/libraries/fpdf/font/');
		$this->load->model("modelo_producto");
    $this->load->model("modelo_fabricante");
    $this->load->model("modelo_usuario");

	}

  // tabla FABRICANTE
    public function imprimir_lista_fabricante()
	
	
	{
		//if(empty($this->session->userdata("id"))){
		//redirect(base_url("principal/logout"));
	  // }else{
        $this->fpdf->AddPage();  //añade la primera pagina
        //print_r($data);Die();
        $this->fpdf->SetFont('Times','U','20'); //para definir el tipo de letra
        $this->fpdf->SetXY(30,40);
        $this->fpdf->Cell(150,35,"LISTADO DE FABRICANTES",0,0,"C",0); // son los bordes

        $this->fpdf->SetXY(80,70);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(15,10,"Nro",'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(30,10,"Nombre",'LTBR',0,"C",0); // son los bordes
       // $this->fpdf->Cell(30,10,"Foto",'LTBR',0,"C",0); // son los bordes

        $datos["ver"]=$this->modelo_fabricante->listar();
        $i=1;
        $y=80;
        foreach($datos ["ver"] as $fila){
              
        

        $this->fpdf->SetXY(80,$y);
        $this->fpdf->SetFont('Times','B','8'); 
        $this->fpdf->Cell(15,10,$i++,'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(30,10,$fila->nombre,'LTBR',0,"C",0); // son los bordes
       // $this->fpdf->Image(base_url("fotos/").$fila->foto,155,$y,8);
        //$this->fpdf->Cell(30,10,'','LTBR',0,"C",0); // son los bordes
        $y=$y+10;
        }

        $this->fpdf->Output('fabricante.pdf','I');
	
	  // }

	}
  public function imprimir_fabricante($codigo)
	{
    //print_r($id);die();
		//if(empty($this->session->userdata("id"))){
		//redirect(base_url("principal/logout"));
	  // }else{
        $this->fpdf->AddPage();  //añade la primera pagina
        //print_r($data);Die();
        $this->fpdf->SetFont('Times','B','40'); //para definir el tipo de letra
        $this->fpdf->SetXY(30,40);
        $this->fpdf->Cell(150,30,"FABRICANTE",0,0,"C",0); // son los bordes

        //funcion de mostrar  foto
        $datos["ver"]=$this->modelo_fabricante->listar_imprimir($codigo);
        $i=1;
        $y=80;
        foreach($datos ["ver"] as $fila){

        $this->fpdf->SetXY(40,80);
        $this->fpdf->SetFont('Times','B','20'); 
       // $this->fpdf->Image(base_url("fotos/").$fila->foto,40,80,55);
        $this->fpdf->Cell(55,55,"",1,0,"C",0); // son los bordes

        

        $this->fpdf->SetXY(110,90);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(30,10,"Nombre:",0,0,"C",0); // son los bordes

        $this->fpdf->SetXY(110,100);
        $this->fpdf->SetFont('Times','','20'); 
        $this->fpdf->Cell(40,10,$fila->nombre,"B",0,"L",0); // son los bordes


       

       


        

        
        $y=$y+10;
      }
       


        $this->fpdf->Output('fabricante.pdf','I');
	
	  // }

	}
//fin Tabla  FABRICANTE



  //tabla Producto
  public function imprimir_lista_producto()
	
	
	{
		//if(empty($this->session->userdata("id"))){
		//redirect(base_url("principal/logout"));
	  // }else{
        $this->fpdf->AddPage();  //añade la primera pagina
        //print_r($data);Die();
        $this->fpdf->SetFont('Times','U','20'); //para definir el tipo de letra
        $this->fpdf->SetXY(30,40);
        $this->fpdf->Cell(150,35,"LISTADO DE PRODUCTOS",0,0,"C",0); // son los bordes

        $this->fpdf->SetXY(40,70);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(15,10,"Nro",'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(45,10,"Nombre",'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(30,10,"Precio",'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(40,10,"Marca",'LTBR',0,"C",0); // son los bordes
        //$this->fpdf->Cell(30,10,"Foto",'LTBR',0,"C",0); // son los bordes

        $datos["ver"]=$this->modelo_producto->listar();
        $i=1;
        $y=80;
        foreach($datos ["ver"] as $fila){
              
        

        $this->fpdf->SetXY(40,$y);
        $this->fpdf->SetFont('Times','B','8'); 
        $this->fpdf->Cell(15,10,$i++,'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(45,10,$fila->nombre,'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(30,10,$fila->precio,'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(40,10,$fila->nombre_marca,'LTBR',0,"C",0); // son los bordes
       // $this->fpdf->Image(base_url("fotos/").$fila->foto,155,$y,8);
       // $this->fpdf->Cell(30,10,'','LTBR',0,"C",0); // son los bordes
        $y=$y+10;
        }

        $this->fpdf->Output('producto.pdf','I');
	
	  // }

	}
  public function imprimir_producto($codigo)
	{
    //print_r($id);die();
		//if(empty($this->session->userdata("id"))){
		//redirect(base_url("principal/logout"));
	  // }else{
        $this->fpdf->AddPage();  //añade la primera pagina
        //print_r($data);Die();
        $this->fpdf->SetFont('Times','B','40'); //para definir el tipo de letra
        $this->fpdf->SetXY(30,40);
        $this->fpdf->Cell(150,30,"PRODUCTO",0,0,"C",0); // son los bordes

        //funcion de mostrar  foto
        $datos["ver"]=$this->modelo_producto->listar_imprimir($codigo);
        $i=1;
        $y=80;
        foreach($datos ["ver"] as $fila){

        $this->fpdf->SetXY(40,80);
        $this->fpdf->SetFont('Times','B','20'); 
       // $this->fpdf->Image(base_url("fotos/").$fila->foto,40,80,55);
        $this->fpdf->Cell(55,55,"",1,0,"C",0); // son los bordes

        

        $this->fpdf->SetXY(110,90);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(30,10,"Nombre:",0,0,"C",0); // son los bordes

        $this->fpdf->SetXY(110,100);
        $this->fpdf->SetFont('Times','','20'); 
        $this->fpdf->Cell(40,10,$fila->nombre,"B",0,"L",0); // son los bordes


        $this->fpdf->SetXY(110,120);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(30,10,"Precio:",0,0,"L",0); // son los bordes

        $this->fpdf->SetXY(110,130);
        $this->fpdf->SetFont('Times','','20'); 
        $this->fpdf->Cell(60,10,$fila->precio,"B",0,"L",0); // son los bordes


        $this->fpdf->SetXY(40,150);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(50,10,"Marca:",0,0,"L",0); // son los bordes

        $this->fpdf->SetXY(40,160);
        $this->fpdf->SetFont('Times','','20'); 
        $this->fpdf->Cell(50,10,$fila->nombre_marca,"B",0,"L",0); // son los bordes
       
        $y=$y+10;
      }
       


        $this->fpdf->Output('producto.pdf','I');
	
	  // }

	}

  //fin tabla PRODUCTO






  //tabla USUARIOS
  public function imprimir_lista_usuarios()
	
	
	{
		//if(empty($this->session->userdata("id"))){
		//redirect(base_url("principal/logout"));
	  // }else{
        $this->fpdf->AddPage();  //añade la primera pagina
        //print_r($data);Die();
        $this->fpdf->SetFont('Times','U','20'); //para definir el tipo de letra
        $this->fpdf->SetXY(30,40);
        $this->fpdf->Cell(150,35,"LISTADO DE USUARIOS",0,0,"C",0); // son los bordes

        $this->fpdf->SetXY(50,70);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(15,10,"Nro",'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(60,10,"Nombre Usuario",'LTBR',0,"C",0); // son los bordes
        
        $this->fpdf->Cell(30,10,"Foto",'LTBR',0,"C",0); // son los bordes

        $datos["ver"]=$this->modelo_usuario->listar();
        $i=1;
        $y=80;
        foreach($datos ["ver"] as $fila){
              
        

        $this->fpdf->SetXY(50,$y);
        $this->fpdf->SetFont('Times','B','8'); 
        $this->fpdf->Cell(15,10,$i++,'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Cell(60,10,$fila->nombre,'LTBR',0,"C",0); // son los bordes
        $this->fpdf->Image(base_url("fotos/").$fila->foto,135,$y,8);
        $this->fpdf->Cell(30,10,'','LTBR',0,"C",0); // son los bordes
        $y=$y+10;
        }

        $this->fpdf->Output('usuarios.pdf','I');
	
	  //}

	}
  public function imprimir_usuarios($id_usuario)
	{
    //print_r($id);die();
		//if(empty($this->session->userdata("id"))){
		//redirect(base_url("principal/logout"));
	  // }else{
        $this->fpdf->AddPage();  //añade la primera pagina
        //print_r($data);Die();
        $this->fpdf->SetFont('Times','B','40'); //para definir el tipo de letra
        $this->fpdf->SetXY(30,40);
        $this->fpdf->Cell(150,30,"USUARIO",0,0,"C",0); // son los bordes

        //funcion de mostrar  foto
        $datos["ver"]=$this->modelo_usuario->listar_imprimir($id_usuario);
        $i=1;
        $y=80;
        foreach($datos ["ver"] as $fila){

        $this->fpdf->SetXY(40,80);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Image(base_url("fotos/").$fila->foto,40,80,55);
        $this->fpdf->Cell(55,55,"",1,0,"C",0); // son los bordes

        

        $this->fpdf->SetXY(110,90);
        $this->fpdf->SetFont('Times','B','20'); 
        $this->fpdf->Cell(30,10,"Nombre Usuario:",0,0,"C",0); // son los bordes

        $this->fpdf->SetXY(110,100);
        $this->fpdf->SetFont('Times','','20'); 
        $this->fpdf->Cell(40,10,$fila->nombre,"B",0,"L",0); // son los bordes

       
        $y=$y+10;
      }
       


        $this->fpdf->Output('usuarios.pdf','I');
	
	  // }

	}
  //fin TABLA USUARIOS
}