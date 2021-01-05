<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/carrito.controlador.php";
require_once "controladores/visitas.controlador.php";
require_once "controladores/notificaciones.controlador.php";
require_once "controladores/accesorapido.controlador.php";
require_once "controladores/articulos.controlador.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/carrito.modelo.php";
require_once "modelos/visitas.modelo.php";
require_once "modelos/notificaciones.modelo.php";
require_once "modelos/accesorapido.modelo.php";
require_once "modelos/articulos.modelo.php";


require_once "modelos/rutas.php";

require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();