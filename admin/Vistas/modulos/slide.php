<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Gestor del Slide
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearSlide">Crear Imagen</button>
        
        </div>
        <div class="box-body">
         
          <table class="table table-bordered table-hover table-striped TB">
              
            <thead>
              
              <tr>
                
                <th>N°</th>
                <th>Imagen</th>
                <th>Titutlar</th>
                <th>Descripción</th>
                <th>Orden</th>
                <th>Editar / Eliminar</th>

              </tr>

            </thead>

            <tbody>

             <!--  <tr>
                <td>1</td>
                <td><img src="vistas/img/default.png" class="img-thumbnail" width="300px"></td>
                <td>ENJOY THE GREATEST PLEASURE IN OUR HOTEL</td>
                <td>Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</td>
                <td>1</td>

                <td>
                  <div class="btn-group">
                    
                    <button class="btn btn-success" data-toggle="modal" data-target="#EditarS"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>
                </td>

              </tr> -->

              <?php

              $item = null;
              $valor = null;

              $verS = SlideC::VerSlideC($item, $valor);

              foreach ($verS as $key => $value) {
                
                echo '<tr>
                      <td>'.($key+1).'</td>

                      <td><img src="'.$value["imagen"].'" class="img-thumbnail" width="300px"></td>

                      <td>'.$value["titular"].'</td>

                      <td>'.$value["descripcion"].'</td>

                      <td><h1>'.$value["orden"].'</h1></td>

                      <td>
                        <div class="btn-group">
                          
                          <button class="btn btn-success EditarSlide" Sid="'.$value["id"].'" data-toggle="modal" data-target="#EditarS"><i class="fa fa-pencil"></i></button>

                          <button class="btn btn-danger BorrarSlide" Sid="'.$value["id"].'" imagenSlide="'.$value["imagen"].'"><i class="fa fa-times"></i></button>

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
  <div class="modal fade" role="dialog" id="CrearSlide">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Titular:</h2>

              <input type="text" class="form-control input-lg" name="titularN" required>

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

          $crearS = new SlideC();
          $crearS -> CrearSlideC();

          ?>

        </form>

      </div>

    </div>

  </div>


<div class="modal fade" role="dialog" id="EditarS">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Titular:</h2>

              <input type="text" class="form-control input-lg" id="titularE" name="titularE" required>

              <input type="hidden" id="Sid" name="Sid">

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

          $actualizarS = new SlideC();
          $actualizarS -> ActualizarSlideC();

          ?>

        </form>

      </div>

    </div>

  </div>


  <?php

  $borrarS = new SlideC();
  $borrarS -> BorrarSlideC();

  ?>