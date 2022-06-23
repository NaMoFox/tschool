<?php

/*=============================================
Mostrar errores
=============================================*/

ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log",  "D:/xampp/htdocs/pos/php_error_log");

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/cursos.controlador.php";
require_once "controladores/clases.controlador.php";
require_once "controladores/asignaturas.controlador.php";
require_once "controladores/estudiantes.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/cursos.modelo.php";
require_once "modelos/clases.modelo.php";
require_once "modelos/estudiantes.modelo.php";
require_once "modelos/asignaturas.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();


