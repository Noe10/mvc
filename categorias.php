<?php
require_once("config.php");
require_once("controlador/categorias.php");

if(isset($_GET['c'])):
    $metodo =   $_GET['c'];
    if(method_exists(modeloController,$metodo)):
        modeloController::{$metodo}();
    endif;
else:
    modeloController::index();
endif;

?>