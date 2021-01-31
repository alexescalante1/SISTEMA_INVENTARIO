<div class="content-wrapper">

  <section class="content-header">

   <h1>
      Prestar Articulos
    </h1>

    <!-- BARRA DE NAV-->
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Prestar Articulos</li>

    </ol>
    
  </section>




  <section class="content">

    <div class="box">

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaPrestarArticulos" width="100%">
        
          <thead>
         
            <tr>
             
               <th style="width:10px">#</th>
               <th>Acciones</th>
               <th>Portada</th>
               <th>Titulo</th>
               <th>Categoria</th>
               <th>Descripcion</th>
               <th>Palabras Clave</th>
               <th>Prestados</th>
               <th>Peso</th>
               <th>Precio</th>
               

            </tr> 

          </thead>   
     
        </table>
          
      </div>

    </div>

  </section>

</div>






<!--
<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Gestor Categorias
    </h1>
    
  </section>

  <section class="content">

    <div class="box">
       
      <div class="box-header with-border">
         
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoriaM">
          
          Agregar Nueva Categoria

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaCategoriasM" width="100%">
        
          <thead>
         
            <tr>
             
               <th style="width:10px">#</th>
               <th>Titulo</th>
               <th style="width:10px">Acciones</th>

            </tr> 

          </thead>   
     
        </table>
          
      </div>

    </div>

  </section>

</div>
-->



<!--=====================================
MODAL AGREGAR NUEVO ARTICULO
======================================-->

<div id="modalPrestarArticulo" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
     
     <div class="modal-content">
       
       <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
         
         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Prestar Articulo</h4>
          
        </div>



        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                    
                    <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipalA" width="400px">
      
                </div>

              </div>
              <div class="col-md-6">
              
                <!--<input type="text" class="form-control input-lg tituloArticulo" placeholder="xd" readonly>
-->
                <div id="TituloArticuloP"></div>
               
              
              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 

                  <input type="text" class="form-control input-lg nombrePrestamista" placeholder="<?php echo $_SESSION["nombre"];?>" readonly>

                </div>

            </div>


            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                  <input type="text" class="form-control input-lg validarArticulo CodEstudiante"  placeholder="Ingresar el Codigo del estudiante">

                  <input type="hidden" class="idArticulo">

                </div>

            </div>

          
            <!--=====================================
            AGREGAR PRECIO, PESO Y ENTREGA
            ======================================-->

            <div class="form-group row">
               
              <!-- PRECIO -->

              <div class="col-md-8 col-xs-12">
  
                <div class="panel">CANTIDAD DE ARTICULOS</div>

                <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                    <select class="form-control input-lg seleccionarCategoria">

                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="10">11</option>
                      <option value="10">12</option>
                      <option value="10">13</option>
                      <option value="10">14</option>
                      <option value="10">15</option>

                    </select>
                  
                </div>


              </div>

              <!-- PESO -->

              <div class="col-md-4 col-xs-12">
  
                <div class="panel">DIAS</div>
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span> 

                  <select class="form-control input-lg seleccionarCategoria">

                    <option value="1">3</option>
                    <option value="2">6</option>
                    <option value="3">9</option>
                    <option value="4">12</option>
                    <option value="5">15</option>
                    <option value="6">20</option>
                    <option value="7">30</option>
                    <option value="8">40</option>

                  </select>

                </div>

              </div>


            </div>

                  
            <br>
            <h5>LISTA DE ARTICULOS</h5>

            <!--=====================================
            LISTAR CODIGOS
            ======================================-->

            <div class="form-group">
                
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <select class="form-control input-lg seleccionarCategoria">
                  
                    <option value="">CODIGO</option>
                    <option value="">123456789</option>
                    <option value="">785694221</option>
                    <option value="">457865424</option>
                    <option value="">145257825</option>

                    <?php

                    /*
                    $item = null;
                    $valor = null;

                    $categoria = ControladorCategoria::ctrMostrarCategoria($item, $valor);

                    foreach ($categoria as $key => $value) {
                      
                      echo '<option value="'.$value["idCategoria"].'">'.$value["titulo"].'</option>';
                    }
                    */

                    ?>

                  </select>

                </div>

            </div>



          
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
  
          <button type="button" class="btn btn-primary guardarArticulo" style="width:100%;">PRESTAR</button>

        </div>

       <!-- </form> -->

     </div>

   </div>

</div>













<!--=====================================
MODAL EDITAR ARTICULO
======================================-->

<div id="modalEditarArticulo" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
     
     <div class="modal-content">
       
       <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
         
         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Articulo</h4>

        </div>







        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">




            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                  <input type="text" class="form-control input-lg validarArticulo tituloArticulo" readonly>

                  <input type="hidden" class="idArticulo">

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 

                  <input type="text" class="form-control input-lg rutaArticulo" readonly>

                </div>

            </div>

           <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <!--
            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span> 

                  <select class="form-control input-lg seleccionarTipo">
                    
                    <option value="">Selecionar tipo de producto</option>

                    <option value="virtual">Virtual</option>

                    <option value="fisico">Físico</option>            
    
                  </select>

                </div>

            </div>
            -->


            


           <!--=====================================
            AGREGAR CATEGORÍA
            ======================================-->

            <div class="form-group">
                
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <select class="form-control input-lg seleccionarCategoria">
                  
                    <option class="optionEditarCategoria"></option>
                    <?php

                    $item = null;
                    $valor = null;

                    $categoria = ControladorCategoria::ctrMostrarCategoria($item, $valor);

                    foreach ($categoria as $key => $value) {
                      
                      echo '<option value="'.$value["idCategoria"].'">'.$value["titulo"].'</option>';
                    }

                    ?>

                  </select>

                </div>

            </div>




            <!--=====================================
            AGREGAR SUBCATEGORÍA
            ======================================-->
            <!--
            <div class="form-group  entradaSubcategoria" style="display:none">
              
               <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <select class="form-control input-lg seleccionarSubCategoria">

                  </select>

                </div>

            </div>
            -->
           <!--=====================================
            AGREGAR DESCRIPCIÓN
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <textarea type="text" maxlength="320" rows="3" class="form-control input-lg descripcionArticulo"></textarea>

              </div>

            </div>


            <!--=====================================
            AGREGAR PALABRAS CLAVES
            ======================================-->

            <div class="form-group editarPalabrasClavesA">
              <!--
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                  <input type="text" class="form-control input-lg tagsInput pClavesArticulo">

                </div> 
              -->
            </div>




            <!--=====================================
            AGREGAR FOTO DE PORTADA
            ======================================-->
            <!--
            <div class="form-group">
              
              <div class="panel">SUBIR FOTO PORTADA</div>

              <input type="file" class="fotoPortada">

              <p class="help-block">Tamaño recomendado 1280px * 720px <br> Peso máximo de la foto 2MB</p>

              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">

            </div>
            -->
            
            <!--=====================================
            AGREGAR FOTO DE MULTIMEDIA
            ======================================-->

            <div class="form-group">
                
              <div class="panel">SUBIR FOTO PRINCIPAL DEL ARTICULO</div>

              <input type="file" class="fotoPrincipalA">
              <input type="hidden" class="antiguaFotoPrincipalA">

              <p class="help-block">Tamaño recomendado 500px * 500px <br> Peso máximo de la foto 5MB</p>

              <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipalA" width="400px">

            </div>


            <!--=====================================
            ENTRADA PARA AGREGAR MULTIMEDIA
            ======================================-->

            <div class="form-group agregarMultimedia"> 
              
              <div class="row previsualizarImgAdd"></div>
              
             <!-- <div class="panel">SUBIR IMAGENES DEL ARTICULO</div>  -->

              <div class="multimediaAdd needsclick dz-clickable">

                <div class="dz-message needsclick">
                  
                  Arrastrar o dar click para subir imagenes.

                </div>

              </div>

            </div>




            <!--=====================================
            AGREGAR PRECIO, PESO Y DISPONIBLE
            ======================================-->

            <div class="form-group row">
               
              <!-- PRECIO -->

              <div class="col-md-4 col-xs-12">
  
                <div class="panel">PRECIO</div>
                
                <div class="input-group">
                
                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 

                  <input type="number" class="form-control input-lg precio" min="0" step="any" value="0">

                </div>

              </div>

              <!-- PESO -->

              <div class="col-md-4 col-xs-12">
  
                <div class="panel">PESO</div>
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span> 

                  <input type="number" class="form-control input-lg peso" min="0" step="any" value="0">

                </div>

              </div>

              <!-- DISPONIBLE -->

              <div class="col-md-4 col-xs-12">
  
                <div class="panel">DISPONIBLE</div>
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-truck"></i></span> 

                  <input type="number" class="form-control input-lg disponible" min="0" max="2" value="1">

                </div>

              </div>

            </div>

        
          
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
  
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-primary guardarCambiosArticulo">Guardar cambios</button>

        </div>

       <!-- </form> -->

     </div>

   </div>

</div>



<?php

  $eliminarArticulo = new ControladorArticulos();
  $eliminarArticulo -> ctrEliminarArticulo();

?>





















<!--==============================================================================================================================================================================================================================
MODAL AGREGAR NUEVA CATEGORIA
===============================================================================================================================================================================================================================-->

<div id="modalAgregarCategoriaM" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
     
     <div class="modal-content">
       
       <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
         
         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Categoria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                  <input type="text" class="form-control input-lg validarCategoriaM tituloCategoriaM"  placeholder="Ingresar título de la categoria">

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 

                  <input type="text" class="form-control input-lg rutaCategoriaM" placeholder="Ruta url de la categoria" readonly>

                </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
  
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-primary guardarCategoriaM">Guardar categoria</button>

        </div>

       <!-- </form> -->

     </div>

   </div>

</div>







<!--=====================================
MODAL EDITAR CATEGORIA
======================================-->

<div id="modalEditarCategoriaM" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
     
     <div class="modal-content">
       
       <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
         
         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Categoria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                  <input type="text" class="form-control input-lg validarCategoriaM tituloCategoriaM">
                  
                  <input type="hidden" class="idCategoriaM">

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-link"></i></span> 

                  <input type="text" class="form-control input-lg rutaCategoriaM" readonly>

                </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
  
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-primary guardarCambiosCategoriaM">Guardar cambios</button>

        </div>

       <!-- </form> -->

     </div>

   </div>

</div>



<?php

  $eliminarCategoriaM = new ControladorCategoria();
  $eliminarCategoriaM -> ctrEliminarCategoria();

?>





