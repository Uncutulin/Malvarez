<!doctype html>
    <div>
      
    </div>    
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
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">PROF. SIMÓN AL 1400</h2>
        <p class="lead">VENTA CASA 4 AMBIENTES EN VILLA BALLESTER</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <img class="dest-img" src="assets/img/casa1.jpg">
    </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">BAT. LA FLORIDA AL 1500</h2>
        <p class="lead">VENTA PH 3 AMBIENTES EN VILLA ADELINA</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <img class="dest-img" src="assets/img/ph1.jpg">
    </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">MIGUELETES AL 1600</h2>
        <p class="lead">VENTA DEPARTAMENTO 3 AMBIENTES EN BELGRANO CHICO</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <img class="dest-img" src="assets/img/casa2.jpg">
    </div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">MELO AL 2600</h2>
        <p class="lead">VENTA CHALET 6 AMBIENTES + DEP. EN FLORIDA MITRE</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <img class="dest-img" src="assets/img/depa1.jpg">
    </div>
    </div>
  </div>
</main>

<footer class="container py-5">
  <div class="row">
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

      
  </body>
</html>
