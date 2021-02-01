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
				  <th scope="col">Fecha Modificación</th>
				  <th scope="col"><center>Estado</center></th>
                  <th scope="col"><center>Modificar</center></th>
				  <th scope="col"><center>Inhabilitar/Habilitar</center></th>
                </tr>
              </thead>
              <tbody>                
                 <?php				   
				   foreach ($listadoUsuario as $key => $value) {
					   if($value->Activo==1){
						   $style = "color: black;";
					   }elseif($value->Activo==0){
						   $style = "color: darkgray;";
					   }
                      echo "<tr>";
					  echo "<td style=\"".$style."\">".$value->Nombre."</td>";
                      echo "<td style=\"".$style."\">".$value->Email."</td>";
					  echo "<td style=\"".$style."\">".$value->Tel."</td>";
					  echo "<td style=\"".$style."\">".$value->Fecha."</td>";				
					    if($value->Activo==1){
                          echo "<td style=\"".$style."\"><center>Activo</center></td>";
                        }elseif($value->Activo==0){
                          echo "<td style=\"".$style."\"><center>Inhabilitado</center></td>";
                        }
                      echo '<td><center>
                        <button type="button" onclick="edit('.$value->Id.')" class="btn btn-warning btn-sm pop" data-toggle="popover">
                          <i class="fas fa-pen"></i>
                        </button>
                        &nbsp;';
					  echo '</center></td>';
					  echo '<td><center>';
                        if($value->Activo==1){
                          echo '<button type="button" class="btn btn-danger btn-sm" onclick="delet('.$value->Id.','.$value->Activo.')">
                                  <i class="fas fa-trash-alt"></i>
                                </button>';
                        }elseif($value->Activo==0){
                          echo '<button type="button" class="btn btn-success btn-sm" onclick="delet('.$value->Id.','.$value->Activo.')">
                                  <i class="fas fa-check"></i>
                                </button>';
                        }
                      echo '</center></td>';
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
	$('#clave').val("");
    $('#exampleModal').modal('show');
})


function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../getUsuario/'+id,
    type: "GET",
    dataType : 'json',
    success: function(respuesta) {
      console.log(respuesta);
      $('#email').val(respuesta.Email);
      $('#nombre').val(respuesta.Nombre);
      $('#tel').val(respuesta.Tel);
      $('#id').val(respuesta.Id);
	  $('#clave').val(respuesta.Clave);
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





 