
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
              <h3 class="card-title">Listado de Propiedades</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Nueva</button>
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark</td>
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
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
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
</script>







 