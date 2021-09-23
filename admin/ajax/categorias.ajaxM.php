<?php

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";


class AjaxCategoria{

  /*=============================================
  VALIDAR NO REPETIR CATEGORÍA
  =============================================*/ 

  public $validarCategoria;

  public function ajaxValidarCategoria(){

    $item = "categoria";
    $valor = $this->validarCategoria;

    $respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

    echo json_encode($respuesta);

  }

  /*=============================================
  EDITAR CATEGORIA
  =============================================*/ 

  public $idCategoria;

  public function ajaxEditarCategoria(){

    $item = "idCategoria";
    $valor = $this->idCategoria;

    $respuesta = ControladorCategoria::ctrMostrarCategoria($item, $valor);

    echo json_encode($respuesta);

  }

}


/*=============================================
VALIDAR NO REPETIR CATEGORÍA
=============================================*/

if(isset( $_POST["validarCategoria"])){

  $valCategoria = new AjaxCategoria();
  $valCategoria -> validarCategoria = $_POST["validarCategoria"];
  $valCategoria -> ajaxValidarCategoria();

}

/*=============================================
EDITAR CATEGORIA
=============================================*/
if(isset($_POST["idCategoria"])){

  $editar = new AjaxCategoria();
  $editar -> idCategoria = $_POST["idCategoria"];
  $editar -> ajaxEditarCategoria();

}



