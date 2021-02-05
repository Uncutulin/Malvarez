<!doctype html>
    <div>
      
    </div>    
	<style>
	.foot{
		width: 100%;
		padding-right: var(--bs-gutter-x,.75rem);
		padding-left: var(--bs-gutter-x,.75rem);
		margin-right: auto;
		margin-left: auto;
		background-color: #020202;
		color: white;
		text-align: -webkit-center;;
	}
	</style>
<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 text-center portada">
    <div class="col-md-5 p-lg-5 mx-auto my-5" style="background-color: #18191980!important;border-radius: 15px;width: 75%;">
      <h1 class="display-4 fw-normal text-white">Encontrá tu hogar</h1>
      <p class="lead fw-normal text-white">Encontrá tu hogar ideal con tal solo ingresar una dirección, localidad o calle.</p>
      
      <!-- Buscardor --->
      <!--<a class="btn btn-outline-secondary" href="#">Coming soon</a>-->
      <div class="input-group mb-3">
		<select id="operations" style="background-color: #d91a1ba1" class="btn btn-danger">
		  <option data-name="Venta" value="1">Venta</option>
				<option data-name="Alquiler" value="2">Alquiler</option>
			</select>
		<select id="property_types" style="background-color: #d91a1ba1" class="btn btn-danger">
		  <option class="red-input" value="-1" selected disabled="disabled">Tipo de Propiedad</option>
		  <option class="red-input" value="0">Todas</option>
		  <?php
			foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
			  echo '<option class="red-input" value="'.$TipoPropiedades->Id.'">'.$TipoPropiedades->Descripcion.'</option>';
			}
		  ?>
		</select>
			<input type="text" class="form-control form-control-lg" placeholder="Buscar por ubicación, dirección o calle" aria-label="Recipient's username" aria-describedby="button-addon2">
			<button class="btn btn-danger" type="button" id="button-addon2">Buscar</button>
      </div>
    </div>
  </div>


 <div class="display-4 fw-normal text-black text-center">
  <h2 class="display-5" style="padding: 30px;">Propiedades Destacadas</h2>
</div>
  <div class="album bg-light"style="padding-bottom:3rem!important;">
	  <div class="container">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<div class="col">
			  <div class="card shadow-sm">				
				<div id="carouselExampleIndicators" class="carousel slide" style="width: 100%;">
				  <ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="assets/img/casa1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
				<div class="card-body">
				  <h4 class="card-title"><a href="/<?=site_url('detpropiedad')?>">Venta - Vte. Lopez</a></h4>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  <h5 class="card-title"style="padding-bottom: 10px;">Precio: u$s 100.000</h5>
				  <div class="d-flex justify-content-between align-items-center">
				  <?php
					echo '<button type="button" class="btn btn-sm btn-outline-secondary" onclick="edit()">Detalle</button>'
				  ?>
				  <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card shadow-sm">				
				<div id="carouselExampleIndicators1" class="carousel slide" style="width: 100%;">
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
				<div class="card-body">
				  <h4 class="card-title">Alquiler - Munro</h4>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  <h5 class="card-title"style="padding-bottom: 10px;">Precio: $ 10.000</h5>
				  <div class="d-flex justify-content-between align-items-center">					
				  <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>				 
				  <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card shadow-sm">				
				<div id="carouselExampleIndicators2" class="carousel slide" style="width: 100%;">
				  <ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="assets/img/depa1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
				<div class="card-body">
				  <h4 class="card-title">Venta - Florida</h4>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  <h5 class="card-title"style="padding-bottom: 10px;">Precio: u$s 150.000</h5>
				  <div class="d-flex justify-content-between align-items-center">					
				  <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>				 
				  <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
				  </div>
				</div>
			  </div>
			</div>
		<!--  -->	
		</div>
	  </div>
  </div>
  <!--  -->
</main>

<footer class="foot py-5">
  <div class="row" style="width: 90%;">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        <li><a class="link-secondary" href="#">Team feature</a></li>
        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary" href="#">Another one</a></li>
        <li><a class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>


<!--<script src="assets/dist/js/bootstrap.bundle.min.js"></script>-->
<script>
function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../detpropiedad
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
</script>
  
  </body>
</html>
