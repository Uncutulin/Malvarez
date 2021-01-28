
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1 class="m-0">Dashboard</h1>-->
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="">    
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Listado Tipos de Propiedades</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" id="addTipoPropiedad"><i class="fas fa-plus"></i> Nueva</button>
              </a>
            </div>
          </div>
          <div class="card-body"> 
            <table class="table" id="listadoTipoPropiedades">
              <thead>
                <tr>
                 
                  <th scope="col">Nombre</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>                
                 <?php
                    foreach ($listadoTipoPropiedad as $key => $value) {
                      echo "<tr>";
                      echo "<td>".$value->Descripcion."</td>";
                      echo '<td> 
                        <button type="button" onclick="edit('.$value->Id.')" class="btn btn-warning btn-sm pop" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          <i class="fas fa-pen"></i>
                        </button>
                        &nbsp;';
                        if($value->Activo==1){
                          echo '<button type="button" class="btn btn-danger btn-sm" onclick="delet('.$value->Id.','.$value->Activo.')">
                                  <i class="fas fa-trash-alt"></i>
                                </button>';
                        }elseif($value->Activo==0){
                          echo '<button type="button" class="btn btn-success btn-sm" onclick="delet('.$value->Id.','.$value->Activo.')">
                                  <i class="fas fa-check"></i>
                                </button>';
                        }
                        echo '</td>';
						echo '</tr>';
                    }
                  ?>                 
              </tbody>
            </table>
         </div>
        </div>
      </div>
    </section>
  </div>



<!-- Modal -->



<script>
$(document).ready(function () {
    $('#listadoTipoPropiedades').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});



$('#addTipoPropiedad').click(function(){
    $('#nombre').val("");
    $('#id').val("");
    $('#exampleModal').modal('show');
})


function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../getTipoPropiedad/'+id,
    type: "GET",
    success: function(respuesta) {
      $('#nombre').val(respuesta);
      $('#id').val(id);
      $('#exampleModal').modal('show');
    },
    error: function() {
          console.log("No se ha podido obtener la información");
      }
  });
}


function delet(id, activo){
  $.ajax({
    url: '<?=site_url()?>/../../putEstadoTipoPropiedad/'+id,
    type: "POST",
    data: {Activo : activo},
    success: function(respuesta) {
      if(respuesta==1){
         location.reload();
      }
    },
    error: function() {
          console.log("No se ha podido obtener la información");
      }
  });
}
</script>







 