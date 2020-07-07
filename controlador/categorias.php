<?php
require_once("modelo/index.php");
class modeloController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
    function index(){
    	$categorias 	=	new Modelo();
		$dato=$categorias->mostrar("categorias","1");
		require_once("vista/categorias.php");
    }

    // INSERTAR
    function nuevo(){
    	require_once("vista/nuevoCategorias.php");	    	    	
	}
	function comEnvio(){
		header("location:".urlsite);
	}
    function guardar(){
    	$nombrecategoria 	=	$_REQUEST['nombrecategoria'];
    	$descripcion 	=	$_REQUEST['descripcion'];
        $data       =   "'".$nombrecategoria."','".$descripcion."'";
    	$categorias 	=	new Modelo();
		$dato 		=	$categorias->insertar("categorias",$data);
		header("location:".categorias);
		//require_once("vista/categorias.php");
    }


    // ACTUALIZAR

    function editar(){
    	$id=$_REQUEST['id'];
    	$categorias 	=	new Modelo();
    	$dato=$categorias->mostrar("categorias","idcategoria=".$id);    	
    	require_once("vista/editarCategorias.php");
    }
    function update(){
    	$id 		= 	$_REQUEST['id'];
    	$nombrecategoria 	=	$_REQUEST['nombrecategoria'];
    	$descripcion 	=	$_REQUEST['descripcion'];
        $data       =   "nombrecategoria='".$nombrecategoria."', descripcion=".$descripcion;
		$condicion  =   "idcategoria=".$id;
    	$categorias 	=	new Modelo();
		$dato 		=	$categorias->actualizar("categorias",$data,$condicion);
		header("location:".categorias);
			
	}

    // ELIMINAR

	function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "idcategoria=".$id;
    	$categorias 	=	new Modelo();       
		$dato 		=	$categorias->eliminar("categorias",$condicion);
		header("location:".categorias);
	}
}