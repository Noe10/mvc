<?php
require_once("modelo/index.php");
class modeloController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
    function index(){
    	$comEnvio 	=	new Modelo();
		$dato=$comEnvio->mostrar("companiasdeenvios","1");
		require_once("vista/index.php");
    }

    // INSERTAR
    function nuevo(){
    	require_once("vista/nuevo.php");	    	    	
	}
	function categorias(){
		header("location:".categorias);    	
    }
    function guardar(){
    	$nombreCompania 	=	$_REQUEST['nombreCompania'];
    	$telefono 	=	$_REQUEST['telefono'];
        $data       =   "'".$nombreCompania."','".$telefono."'";
    	$comEnvio 	=	new Modelo();
		$dato 		=	$comEnvio->insertar("companiasdeenvios",$data);
		header("location:".urlsite);
    }


    // ACTUALIZAR

    function editar(){
    	$id=$_REQUEST['id'];
    	$comEnvio 	=	new Modelo();
    	$dato=$comEnvio->mostrar("companiasdeenvios","idCompaniaEnvios=".$id);    	
    	require_once("vista/editar.php");
    }
    function update(){
    	$id 		= 	$_REQUEST['id'];
    	$nombreCompania 	=	$_REQUEST['nombreCompania'];
    	$telefono 	=	$_REQUEST['telefono'];
        $data       =   "nombreCompania='".$nombreCompania."', telefono=".$telefono;
        $condicion  =   "idCompaniaEnvios=".$id;
    	$comEnvio 	=	new Modelo();
		$dato 		=	$comEnvio->actualizar("companiasdeenvios",$data,$condicion);
        header("location:".urlsite);
	}

    // ELIMINAR

	function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "idCompaniaEnvios=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("companiasdeenvios",$condicion);
		header("location:".urlsite);
	}
}