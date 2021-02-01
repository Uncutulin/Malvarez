
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
        <div class="card card-danger card-outline">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Listado de Propiedades</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" id="modalAddPropiedad"><i class="fas fa-plus"></i> Nueva</button>
              </a>
            </div>
          </div>
          <div class="card-body"> 
            <table class="table" id="listadoPropiedades">
              <thead>
                <tr>
                  <th scope="col">Tipo Propiedad</th>
                  <th scope="col">Barrio</th>
                  <th scope="col">Ubicación</th>
                  <th scope="col">Servicios</th>
                  <th scope="col">Acciones</th>
                  <!--
                  <th scope="col">Ambientes</th>
                  <th scope="col">Dormitorios</th>
                  <th scope="col">Baños</th>
                  <th scope="col">Cocheras</th>
                  <th scope="col">Pisos</th>
                  <th scope="col">Antiguedad</th>
                  <th scope="col">Situación</th>
                  <th scope="col">Expensas</th>
                  <th scope="col">Orientación</th>
                  <th scope="col">Disposición</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Estado</th>
                -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm">
                      <i class="fas fa-pen"></i>
                    </button>

                    <a type="button" class="btn btn-success btn-sm" href="<?=site_url('../../adjuntoListado')?>">
                      <i class="fas fa-file-upload"></i>
                    </a>

                    <button type="button" class="btn btn-danger btn-sm" onclick="">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </td>
                  <!--
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                -->
                </tr>                
              </tbody>
            </table>
         </div>
        </div>
      </div>
    </section>
  </div>


<script>
$(document).ready(function () {
    $('#listadoPropiedades').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});


$('#modalAddPropiedad').click(function(){
  //alert("asda");
    $('#exampleModal').modal('show');
})





</script>







 