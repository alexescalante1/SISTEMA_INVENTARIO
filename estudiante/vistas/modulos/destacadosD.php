<!--=====================================
BANNER
======================================-->

<?php

$servidor = Ruta::ctrRutaServidor();

$ruta = "sin-categoria";

$banner = ControladorProductos::ctrMostrarBanner($ruta);

/*=============================================
PRODUCTOS DESTACADOS
=============================================*/

$titulosModulos = "DESTACADO";
$rutaModulos = "mas-destacados";

$base = 0;
$tope = 6;

$ordenar = "prestados";
$item = "disponible";
$valor = 1;
$modo = "DESC";

$ventas = ControladorArticulos::ctrMostrarArticulos($ordenar, $item, $valor, $base, $tope, $modo);

$modulos = $ventas;

	

?>

