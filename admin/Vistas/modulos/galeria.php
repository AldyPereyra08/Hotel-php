<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Gestor de Galeria
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearImagen">Crear Imagen</button>
        
        </div>
        <div class="box-body">
         
          <table class="table table-bordered table-hover table-striped TB">
              
            <thead>
              
              <tr>
                
                <th>N°</th>
                <th>Imagen</th>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Descripción</th>
                <th>Orden</th>
                <th>Editar / Eliminar</th>

              </tr>

            </thead>

            <tbody>

              <?php

              $item = null;
              $valor = null;

              $verG = GaleriaC::VerGaleriaC($item, $valor);

             foreach ($verG as $key => $value) {

                 echo '<tr>
                    <td>'.($key+1).'</td>
                    <td><img src="'.$value["imagen"].'" class="img-thumbnail" width="300px"></td>
                    <td>'.$value["titulo"].'</td>
                    <td>'.$value["subtitulo"].'</td>
                    <td>'.$value["descripcion"].'</td>
                    <td><h1>'.$value["orden"].'</h1></td>   
                    <td>
                    <div class="btn-group">
                        
                        <button class="btn btn-success EditarGaleria" Gid="'.$value["id"].'" data-toggle="modal" data-target="#EditarGaleria"><i class="fa fa-pencil"></i></button>
    
                        <button class="btn btn-danger BorrarGaleria" Gid="'.$value["id"].'" Gimagen="'.$value["imagen"].'"><i class="fa fa-times"></i></button>
    
                    </div>
                    </td>
               </tr>';
             } 

              ?>

            </tbody>

          </table>

        </div>
        <!-- /.box-body -->
      
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>




  <!-- Crear Slide -->
  <div class="modal fade" role="dialog" id="CrearImagen">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Titulo:</h2>

              <input type="text" class="form-control input-lg" name="tituloN" required>

            </div>

            <div class="form-group">
              
              <h2>Subtitulo:</h2>

              <input type="text" class="form-control input-lg" name="subtituloN" required>

            </div>

            <div class="form-group">
              
              <h2>Descripción:</h2>

              <textarea name="descripcionN">
                
              </textarea>

            </div>


             <div class="form-group">
              
              <h2>Orden:</h2>

              <input type="text" class="form-control input-lg" name="ordenN">

            </div>

            <div class="form-group">
              
              <h2>Imagen:</h2>

              <input type="file" name="imagenN">

              <p class="help-block">peso máximo permitido 200 MB</p>

            </div>

           </div> 

          </div>


          <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Crear</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

          </div>

          <?php

          $crearG = new GaleriaC();
          $crearG -> CrearGaleriaC();

          ?>

        </form>

      </div>

    </div>

  </div>


<div class="modal fade" role="dialog" id="EditarGaleria">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Titulo:</h2>

              <input type="text" class="form-control input-lg" id="tituloE" name="tituloE" required>

              <input type="hidden" id="Gid" name="Gid">

            </div>

            <div class="form-group">
              
              <h2>Subtitulo:</h2>

              <input type="text" class="form-control input-lg" id="subtituloE" name="subtituloE" required>

            </div>

            <div class="form-group">
              
              <h2>Descripción:</h2>

              <textarea id="descripcionE" name="descripcionE">
                
              </textarea>

            </div>

            <div class="form-group">
              
              <h2>Orden:</h2>

              <input type="text" class="form-control input-lg" id="ordenE" name="ordenE" required>

            </div>

            <div class="form-group">
              
              <h2>Imagen:</h2>

              <input type="file" id="imagenE" name="imagenE">

              <p class="help-block">peso máximo permitido 200 MB</p>

              <img src="Vistas/img/default.png" class="img-thumbnail visor" width="300px;"> 

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

           </div> 

          </div>


          <div class="modal-footer">
            
            <button type="submit" class="btn btn-success">Guardar Cambios</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>

          </div>

          <?php

          $actualizarG = new GaleriaC();
          $actualizarG -> ActualizarGaleriaC();


          ?>

        </form>

      </div>

    </div>

  </div>


  <?php

  $borrarG = new GaleriaC();
  $borrarG -> BorrarGaleriaC();


  ?>