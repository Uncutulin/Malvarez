<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Catalogo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nose">

    <!-- Bootstrap core CSS -->
    <link href="/<?=base_url('')?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .portada{
       background: url('assets/img/puerto-madero.jpg') no-repeat fixed center;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       height: 100%;
       width: 100% ;
       text-align: center; 
      }    

      img.dest-img{
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       height: 100%;
       width: 100% ;
       text-align: center; 
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="/<?=base_url('')?>/assets/css/product.css" rel="stylesheet">
  </head>

  <body>


<!-- Menu -->
    <div>
      <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
          </a>
          <a class="py-2 d-none d-md-inline-block" href="/<?=site_url('')?>">Inicio</a>
          <a class="py-2 d-none d-md-inline-block" href="/<?=site_url('catalogo')?>">Catalogo</a>
          <a class="py-2 d-none d-md-inline-block" href="/<?=site_url('dashboard')?>">Iniciar Sesión</a>
        </nav>
      </header>
    </div>

<!-- Cuerpo -->
    
