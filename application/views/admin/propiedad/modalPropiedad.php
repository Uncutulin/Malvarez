<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Propiedad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
        <form>          
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                  <label>Tipo Propiedad</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <?php
                      foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
                        echo '<option class="red-input" value="'.$TipoPropiedades->Id.'">'.$TipoPropiedades->Descripcion.'</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nro Barrio</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="email" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación">
              </div>
            </div>
          </div>



          <div class="row">

            <!--
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nro Servicios</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            </div>
            -->

            <div class="col-2" style="padding-right: 30px">
              <div class="form-group">
                <label for="ambientes">Ambientes</label>
                <input type="number" class="form-control" id="ambientes" name="ambientes" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="dormitorios">Dormitorios</label>
                <input type="number" class="form-control" id="dormitorios" name="dormitorios" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="bano">Baños</label>
                <input type="number" class="form-control" id="bano" name="bano" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2" >
              <div class="form-group">
                <label for="cochera">Cocheras</label>
                <input type="number" class="form-control" id="cochera" name="cochera" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2" >
              <div class="form-group">
                <label for="pisos">Pisos</label>
                <input type="number" class="form-control" id="pisos" name="pisos" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="antiguedad">Antiguedad</label>
                <input type="number" class="form-control" id="antiguedad" name="antiguedad" placeholder="0" min="0">
              </div>
            </div>


          </div>



          <div class="row">
            
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Situación</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Expensas</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            </div>
          </div>




          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Orientación</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Disposición</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Descripción</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            </div>
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Estado</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>


            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          <!-- /.card-body -->              
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>