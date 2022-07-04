<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de administrador</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/emprendimeinto/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/emprendimeinto/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/emprendimeinto/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/emprendimeinto/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/emprendimeinto/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/emprendimeinto/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/emprendimeinto/css/style.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
   
<style>
        #header {
            background: black;
        }

        .main-nav a:hover, .main-nav .active > a, .main-nav li:hover > a  {
            color: #ffffff;
        }
        .textoizq{
            left: 173px;
        }
        .contenedorPagina{
            margin-top: 125px;
        }
        hr {
  border-top: 1px dashed red;
}
    </style>
</head>

<body>
    <header id="header">

        <div id="topbar">
            <div class="container">
                Sistema de emprendimeinto - Configuracion
            </div>
        </div>

        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="#intro" class="scrollto"><span></span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>
           
                <span class="glyphicon glyphicon-home"></span></button>
            <nav class="main-nav float d-none d-lg-block">

                <ul>
                <li><a href="/admin/index.php">INICIO</a></li>
                    <li><a href="/admin/guia.php">GUÍA</a></li>
                    <li><a href="#conv">CONVOCATORIA</a></li>
                    <li><a href="#finan">FINANCIAMIENTO</a></li>
                    <li><a href="#aseso">ASESORIAS</a></li>
                    <li><a href="#talleres">TALLERES</a></li>
                    <li><a href="#registro">REGISTRO</a></li>
                    <li><a href="#casos">CASOS DE ÉXITO</a></li>
                    <li><a href="#pymes">PYMES</a></li>

            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->
    <main id="main">
        <section id="guia" class="section-bg">
            <div class="container contenedorPagina">
                <div class="row">
                    <h4>En esta seccion podras  configurar lo que aparece en la pagina de Inicio</h4>
                    <div class="col-lg-5 col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input class="form-control" id="titulo" type="text"></input>
                        
                        </div>
                        <div class="form-group">
                            <label for="Subtitulo">Subtitulo</label>
                            <input class="form-control" id="Subtitulo" type="text"></input>
                        
                        </div>
                        <div class="form-group">
                            <label for="Descripcion">Descripcion</label>
                            <textarea class="form-control" id="Descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Duracion">Duracion</label>
                            <textarea class="form-control" id="Duracion" rows="3"></textarea>
                        </div>
                       <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                    </div>
                </div>
            </div>
            
        </section>    
    </main>
    <hr />
    <footer>
    <div class="nav navbar float fixed-bottom  textoizq" style="background-color: #fff;">
        <div class="text-center">@<?php echo date('Y'); ?> Sistema de Administracion para la pagina de administracion</div>
    </div>
    <script>
        $(document).ready(function() {
            $('#informacionInicio').DataTable();
        });
    </script>
     <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</footer>
</body>
