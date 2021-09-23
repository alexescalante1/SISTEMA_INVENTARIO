<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/administradores.controlador.php";
require_once "controladores/categorias.controladorM.php";
require_once "controladores/perfiles.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/notificaciones.controlador.php";
require_once "controladores/notificaciones.controladorM.php";

require_once "controladores/articulos.controlador.php";
require_once "modelos/articulos.modelo.php";

require_once "modelos/administradores.modelo.php";
require_once "modelos/categorias.modeloM.php";
require_once "modelos/perfiles.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/notificaciones.modelo.php";
require_once "modelos/notificaciones.modeloM.php";

require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();