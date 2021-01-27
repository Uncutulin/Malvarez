
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
                <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Nueva</button>
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
                <tr>                
                  <td>Otto</td>
                  <td>
                    <button type="button" class="btn btn-warning">
                      <i class="fas fa-edit"></i>
                    </button>
                    &nbsp;
                    <button type="button" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>               
              </tbody>
            </table>
         </div>
        </div>
      </div>
    </section>
  </div>



<!-- Modal -->
<?=$modal?>



<script>
$(document).ready(function () {
    $('#listadoTipoPropiedades').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});
</script>







 