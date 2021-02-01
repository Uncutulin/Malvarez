<div class="content-wrapper" style="min-height: 1662.75px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Propiedad</h1>
          </div>
          <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
               <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Listado de Imagenes</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" id="ModalAdjunto"><i class="fas fa-plus"></i> Nueva</button>
              </a>
            </div>
          </div>
              <div class="card-body">
              <table class="table" id="listadoAdjuntos">
              <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Acciones</th>                  
                </tr>
              </thead>
              <tbody>
                <tr>  
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm" onclick="">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>                
              </tbody>
            </table>                
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

  <script type="text/javascript">
    $(document).ready(function () {
    $('#listadoAdjuntos').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});




$('#ModalAdjunto').click(function(){
  //alert("asda");
    $('#adjuntoModal').modal('show');
})







var arrayFiles = [];

Dropzone.options.FormUpload = {
  //$(".multimediaFisica").dropzone({
  url: "<?=site_url('../../ajuntoImagen2')?>",
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 10, // MB
  addRemoveLinks: true,
  dictRemoveFile: "Eliminar",
  init: function(){
    //event.preventDefault();
    //funcion para subir las imagenes
    this.on("addedfile", function(file){
      arrayFiles.push(file);
      //console.log(file);      
        });    

      //console.log("arrayFiles", arrayFiles)
    
    //funcion para eliminar las imagenes
    this.on("removedfile", function(file){
      var index = arrayFiles.indexOf(file);
      arrayFiles.splice(index, 1);
      //console.log("arrayFiles", arrayFiles)
    });
  }
};

$(".guardarProducto").click(function(){
  

  if(arrayFiles != ""){
    if(arrayFiles.length > 0){
      //console.log(arrayFiles);

      var listaMultimedia = [];
      var finalFor = 0;


      for (var i = 0; i < arrayFiles.length; i++) {
        var datosMultimedia = new FormData();
        datosMultimedia.append("file", arrayFiles[i]);
        datosMultimedia.append("orden", i);

        
        //console.log(datosMultimedia);
        console.log(arrayFiles);
        $.ajax({          
          url: "<?=site_url('../../ajuntoImagen')?>",
          method: 'POST',
          data: datosMultimedia,
          //data: datosMultimedia,
          cache: false,
          contentType: false,
          processData: false,
          /*
          beforeSed:function(){

          },*/
          success: function(respuesta){
            console.log(respuesta);
            /*
            listaMultimedia.push({'foto': respuesta});
            multimediaFisica = JSON.stringify(listaMultimedia);
            if((finalFor + 1) == arrayFiles.length){
              //agregarMiProducto(multimediaFisica);
              finalFor = 0;
            }
            finalFor ++;
            //$("#guardarProducto").html("Gurdar Producto");  */       
          }
        });      
      }
      //console.log(listaMultimedia);
  }else{
    alert("Debe elegir alguna imagen");  
 }
}
});
   /*
            
          */

/*
  removedFile: function(file){
    var name= file.name;

    $.ajax({
      type: 'POST',
      url: "<?=site_url('../../ajuntoImagen')?>",
      data: {name: name, request: 2},
      success: function(response){
        console.log('success: '+response);
      }
    });

    var _ref;
    return(_ref=file.previewElement) != null = _ref.parentNode.removeChild(file.previewElement): void 0;
  }*/
  
/*
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }*/


  </script>