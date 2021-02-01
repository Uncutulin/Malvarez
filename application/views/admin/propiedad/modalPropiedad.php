


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

        <!--
            <div class="col-4">
              <div class="form-group">
                <label for="exampleInputPassword1">Nro Servicios</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            </div>
            -->


<!--
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
                <label for="barrio">Nro Barrio</label>
                <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Barrio">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación">
              </div>
            </div>
          </div>



          <div class="row">  
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
                <label for="situacion">Situación</label>
                <input type="text" class="form-control" id="situacion" name="situacion" placeholder="Situación">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="expensas">Expensas</label>
                <input type="text" class="form-control" id="expensas" name="expensas" placeholder="Expensas">
              </div>
            </div>
             <div class="col-4">
              <div class="form-group">
                <label for="orientacion">Orientación</label>
                <input type="text" class="form-control" id="orientacion" name="orientacion" placeholder="Orientación">
              </div>
            </div>
          </div>




          <div class="row">
           
            <div class="col-4">
              <div class="form-group">
                <label for="disposicion">Disposición</label>
                <input type="text" class="form-control" id="disposicion" name="disposicion" placeholder="Disposición">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
              </div>
            </div>
          </div>
-->
          <!--
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          -->
          <!-- /.card-body -->     


      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  //$("div#myId").dropzone({ url: "/file/post" });

  //Dropzone.options.drop = {
  //uploadMultiple: true,
  //paramName: "file", // The name that will be used to transfer the file
  //maxFilesize: 2, // MB
  //acceptedFiles: "image/*"
  /*
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }*/
//};


//if ($('#dropzone').length) {
 // $("div#dropzone").dropzone({ url: "<?=base_url('/../../assets/adjuntos/')?>" });
  // other code here
//}

/*
var dropzone = new Dropzone("#archivos", {
  url: ''
});*/

</script>