
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
              <h3 class="card-title">Listado de Usuarios</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" id="addUsuario"><i class="fas fa-plus"></i> Nueva</button>
              </a>
            </div>
          </div>
          <div class="card-body"> 
            <table class="table" id="listadoUsuarios">
              <thead>
                <tr>     
				  <th scope="col">Nombre</th>
                  <th scope="col">Email</th>
				  <th scope="col">Teléfono</th>
				  <th scope="col">Fecha Creación</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>                
                 <?php
				   foreach ($listadoUsuario as $key => $value) {
                      echo "<tr>";
					  echo "<td>".$value->Nombre."</td>";
                      echo "<td>".$value->Email."</td>";
					  echo "<td>".$value->Tel."</td>";
					  echo "<td>".$value->Fecha."</td>";
                      echo '<td> 
                        <button type="button" onclick="edit('.$value->Id.')" class="btn btn-warning btn-sm pop" data-toggle="popover">
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

<script>
$(document).ready(function () {
    $('#listadoUsuarios').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});

$('#addUsuario').click(function(){
    $('#email').val("");
	$('#nombre').val("");
	$('#tel').val("");
    $('#id').val("");
    $('#exampleModal').modal('show');
})


function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../getUsuario/'+id,
    type: "GET",
    success: function(respuesta) {
	alert(respuesta.Id);
	console.log(respuesta.Email);
      $('#email').val(respuesta);
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
    url: '<?=site_url()?>/../../putEstadoUsuario/'+id,
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





 