


    <? php

    $destino="wliz2726@gmail.com";
    $nombre= $_POST["nombre"];
    $correo= $_POST["correo"];
    $telefono= $_POST["telefono"];
    $mensaje= $_POST["mensaje"];

    $contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " .$telefono . "\nMensaje: " .$mensaje;

    mail($destino, "Contacto", $contenido);

    header("Location:index.html")

    /* Enviamos el Formulario*/
    if (mail($destino,  $contenido, $header)) {
        echo "<center><h2>El E-Mail se ha enviado correctamente!</h2></center>";
    } else {
        echo "<center><h2>Ops ! El E-Mail ha fallado!</h2></center>S";
    }

    ?>



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="mask-icon" type="" href="Image/Webstore-Home-icon.ico">
  <link rel="shortcut icon" type="image/x-icon" href="Image/Webstore-Home-icon.ico">
    
  <title>WebStore</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet/less" type="text/css" href="styles.less">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <!--Link de OWL Carousel-->

     <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>


</head>

<body id="index" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav  class="navbar navbar-default navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <div id="btn-menu-responsive" class="btn-menu-w" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span></span></div>

       <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>-->
        <a class="navbar-brand" href="#home">
                <img id="logo" src="Image/Webstore-Logo.png" />
            </a>
      </div>


      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="http://localhost/jackielingerie/" target="_blank">Demo</a></li>
          <li><a href="#portfolio">Proyectos Realizados</a></li>
          <li><a href="#pricing">Precios</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0 hidden-md hidden-sm hidden-xs  ">
          <input class="form-control mr-sm-2 " type="search" placeholder="" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="button">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>


    <!-- Container (Home Desktop) -->
  <div class="carousel slide hidden-xs hidden-sm" data-ride="carousel" id="home"> <!--class="jumbotron text-center" -->
          <!-- Indicators -->
        <ol class="carousel-indicators">
          <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>-->
        </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner jumbotron" role="listbox">
        <div class="item active">
          <img src="Image/Webstore-Home2.png" alt="Shouta">
          <div id="btn-home" class="carousel-caption">
            <!--Typewriter text effect-->
            <div class="header-text hidden-sm hidden-xs">
              <h1>
                <span class="title_text">Adquiere tu tienda virtual sin invertir una fortuna.</span><br>
                <span class="title_text">Facil de manejar, ¡Ideal para ti!</span><br><br>
                <span class="typewrite title_text2" data-period="2000" data-type='[ "Es tiempo de avanzar un paso más", "Empieza a vender online, hoy"]'></span>
                <span class="wrap"></span>
              </h1>
            </div>
            <!-- End Typewriter text effect-->
            <div  class="  hidden-md hidden-lg">
              <h1>Es tiempo de avanzar un paso más.<br>Empieza a vender online, hoy.</h1>
            </div>
              <a href="#contact" class="btn btn-outline-secondary btn-sm " role="button" aria-disabled="true">SOLICITA MÁS INFORMACIÓN</a>
          </div> 
        </div>
      </div>
  </div>



   <!-- Container (Home Mobile) -->
  <div class="carousel slide visible-xs visible-sm " data-ride="carousel" id="home"> <!--class="jumbotron text-center" -->
          <!-- Indicators -->
        <ol class="carousel-indicators">
          <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>-->
        </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner jumbotron" role="listbox">
        <div class="item active">
          <img src="Image/Webstore-Home-mobile.png" alt="Shouta">
          <div id="btn-home" class="carousel-caption">
            <!--Typewriter text effect-->
            <div class="header-text hidden-sm hidden-xs">
              <h1>
                <span class="title_text">Hola<span class="text_colour">,</span></span><br>
                <span class="title_text">Somos</span><span class="title_text">Webstore<span class="text_colour">.</span></span><br><br>
                <span class="typewrite title_text" data-period="2000" data-type='[ "Es tiempo de avanzar un paso más", "Empieza a vender online, hoy", "Adquiere tu tienda virtual sin invertir una fortuna Facil de manejar, ¡Ideal para ti!"]'></span>
                <span class="wrap"></span>
              </h1>
            </div>
            <!-- End Typewriter text effect-->
            <div  class="  hidden-md hidden-lg">
              <h1>Es tiempo de avanzar un paso más.<br>Empieza a vender online, hoy.</h1>
            </div>
              <a href="#contact" class="btn btn-outline-secondary btn-sm " role="button" aria-disabled="true">SOLICITA MÁS INFORMACIÓN</a>
          </div> 
        </div>
      </div>
  </div>


  <!-- Container (About Section) -->
  <div id="about"  class="container-fluid">
    <div class="row">
          <div class=" col-lg-6 col-md-6 col-sm-4 col-xs-12">
              <div class=" col-lg-10 col-md-6 col-sm-4 col-xs-12 col-md-offset-2 ">
              <div class="contenedor-blue">
              <h2 class="about-h2">Facil y seguro y asequible.</h2><br>
              <h4 class="about-h4">Te ofrecemos un sistema completo, adaptable a las necesidades de tu negocio para que puedas vender sin complicaciones, de manera fácil y segura.</h4>
              <p class="about-p">Tienda virtual diseñada y configurada para tu negocio Panel administrativo de fácil uso que te permitirá manejar y administrar tus ventas desde donde esté</p>
              <br><a href="#contact" class="btn btn-default btn-sm " role="button" aria-disabled="true">SOLICITA MÁS INFORMACIÓN</a>
            </div>
            </div>
          </div>
          
               

      <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
        <div class="col-lg-9">
          <img src="Image/Webstore-Phone-store.png" width=100% class="slideanim" alt="Astronaut">
        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid"> <!--bg-grey-->
    <div class="row">
      <div class=" col-lg-6 col-md-6 col-sm-4 col-xs-12 ">
        <!--<img src="https://images.vexels.com/media/users/3/152300/isolated/preview/ae0fc81df564354bb6b22d3b4fca7e85-astronaut-holding-flag-cartoon-by-vexels.png" width=100% class="slideanim" alt="Astronaut2">-->
        <img src="Image/Webstore-Phone-store-2.png" width=100% class="slideanim" alt="Astronaut2">
      </div>
      <div id="list-benefits" class="col-lg-6 col-md-6 col-sm-4 col-xs-12 ">
        
          <ul class="list-group">

            <li class="list-group-item "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Plataforma cómoda para los usuarios</li>
            <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Adaptable a Móvil y Tabletas</li>
            <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Manejo de Clientes y Órdenes</li>
            <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Inventario de Productos</li>
            <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Ofertas y descuentos</li>
            <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Ventas al por mayor y al detalle</li>
            <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-play-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3;">
              <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
            </svg> &nbsp; Pago online o efectivo al entregar</li>
          </ul>
      </div>
    </div>
  </div>

  
                

<div id="portfolio" class="  container-fluid text-center">
  <h2 class="portfolio-title" >Proyectos realizados</h2><br>
    <div class="padding">
        <div class="row container-fluid">
            <div class=" col-sm-12 col-md-12 col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body"> 
                        <div class="owl-carousel slideanim">



                            <div class="col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio1.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>
                            
                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio2.jpg" alt="image" width="400" height="300"/> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>
                            
                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio3.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>

                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio1.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>
                            
                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio2.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>

                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio3.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>
                            
                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio1.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>
                            
                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio2.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>

                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio3.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>

                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                            <div class="item"> <img src="Image/Portfolio1.jpg" alt="image" width="400" height="300" /> </div>
                            <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                            </div>

                            <div class=" col-sm-12 col-md-12">
                              <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                </div>
                                <div class="item"> <img src="Image/Portfolio2.jpg" alt="image" width="400" height="300" />
                                </div>
                                <div class="panel-footer2">
                                  <h4>IDENTIDAD CORPORATIVA</h4>
                                  <h3>Biosustén Fertil</h3>
                                  <h4>Diseño de empaques <br>Bolsas y galones</h4><br><br>
                                  <!--<button class="btn btn-lg">Sign Up</button>-->
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!--End carousel-->


  <!-- Container (Demo Section) -->
  <div id="demo"  class="container-fluid">
    <div class="row">
    
        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
              <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 col-md-offset-2">
                  <h2 class="pr-demo">Navega y prueba</h2>
                  <h4>Puedes visitar nuestra <strong>página de muestra (Demo)</strong> para ver como se ve una tienda virtual y si estás interesado, puedes contactarnos para coordinar una visita o videollamada.</p></h4>
                  <div class="btn-demo">
                    <a href="http://localhost/jackielingerie/" class="btn btn-default btn-sm" role="button" aria-disabled="true">VER DEMO</a>&nbsp;
                  <a href="#contact" class="btn-1 btn btn-default btn-sm" role="button" aria-disabled="true">SOLICITA MÁS INFORMACIÓN</a>
                  </div>
              </div>
        </div>


        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
          <!--<img src="https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png" width=100% class="slideanim" alt="Astronaut">-->
          <div class="col-lg-9">
            <img src="Image/Webstore-web-store-1.png" width=100% class="slideanim" alt="Astronaut">
          </div>
        </div>

    </div>
  </div>

  <!-- Container (Pricing Section) -->
  <div id="pricing" class="container-fluid">
    <div class="container-fluid">
      <div class="row">
        <div class="text-center">
            <h1 class="price">Precios</h1>
            <h4>Si estás empezando, te damos una mano. Si deseas trabajar independiente, también puedes.</h4>
            <h4 class="h4">Tenemos una opción hecha para ti!</h4>
        </div>
          <div class="container">
            <div class="row slideanim">

                <div class="col-sm-6 col-xs-12 brd">
                  <div class="panel panel-default text-center center-block">
                      <div class="panel-heading">
                        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #FF5757;"><path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 1 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/><path fill-rule="evenodd" d="M1 7v1h14V7H1zM.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H.5z"/><path fill-rule="evenodd" d="M14 9H2v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V9zM2 8a1 1 0 0 0-1 1v5a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9a1 1 0 0 0-1-1H2z"/><path fill-rule="evenodd" d="M4 10a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5z"/></svg>
                        <h1 class="status">STARTER</h1>
                      </div>
                      <div class="panel-body">
                        <ol>
                          <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Tienda virtual personalizada (hasta 5 secciones)</li>
                          <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Configuración pago online</li>
                          <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Video tutorial y asistencia*</li>
                          <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Dominio Reg. + Hosting por un año</li>
                          <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Correo corporativo</li>
                          <p class="panel-body-p">*Asistencia por 30 días en coordinación</p>
                      </ol>
                    </div>
                    <div class="panel-footer">
                      <h1 class="price-pricing">RD$1,950</h1>
                      <h4 class="month-pricing">MENSUAL*</h4>
                      <p class="price-starter"><strong>+ $5,950</strong> ANUALIDAD HOSTING + DOMINIO REGULAR<br>*CONTRATO MÍNIMO DE UN AÑO</p>
                      </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12 brd">
                  <div class="panel panel-default text-center center-block">
                    <div class="panel-heading">
                      <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #FF5757;"><path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/></svg>
                      <h1 class="status">PRO</h1>
                    </div>
                    <div class="panel-body">
                      <ol>
                        <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Tienda virtual personalizada (hasta 5 secciones)</li>
                        <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Configuración pago online</li>
                        <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Video tutorial y asistencia*</li>
                        <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Dominio Reg. + Hosting por un año</li>
                        <li class="list-group-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #1883D3; margin-bottom: -8px;">
                          <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg> &nbsp;Correo corporativo</li>
                        <p class="panel-body-p">*Asistencia por 30 días en coordinación</p>
                      </ol>
                    </div>
                    <div class="panel-footer">
                      <h1 class="price-pricing">RD$28,950</h1>
                      <h4 class="month-pricing">PAGO ÚNICO</h4>
                      <p class="price-starter"><strong>+ $5,950</strong> ANUALIDAD HOSTING + DOMINIO REGULAR<br>&nbsp;</p>
                    </div>
                  </div>
                </div>

              </div>
               <div class="text-center slideanim">
                  <p class="info-ws">Contáctanos ahora para recibir más información &nbsp;<a target="_blank" href="https://api.whatsapp.com/send?phone=8292769197" title="whatsapp"
                     id= "fa-size "><span class="fa fa-whatsapp" style="font-size: 20px;color: #6DBA44;"></span><span> &nbsp; 1(829)276-9197 </span>
                  </a></p>
                </div>
            </div>
      </div>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid bg-white">

    <div class="row">
      <div class="col-sm-6">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img src="Image/Webstore-Home-Page_Contact.png" width=100% class="slideanim" alt="Astronaut2">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 slideanim">   
        <div class="row">
          <div class="form-group text-center">
            <h2 class="h2-contact">Somos gente cool</h2>
              <h4 class=" h4-contact">Queremos ayudarte, cuéntanos de tu proyecto</h4>
          </div>

        <form method="POST" action="php/index.php" class="needs-validation" novalidate >
            <div class="col-sm-12 form-group">
              
              <input type="text" class="form-control"  name="nombre" placeholder="Nombre*" required >
            </div>
            <div class="col-sm-12 form-group">
              
              <input type="text" class="form-control"  name="correo" placeholder="Email*" required >
            </div>
            <div class="col-sm-12 form-group">
              
              <input type="text" class="form-control" name="telefono" placeholder="Teléfono" max="999999999">
            </div>
            <div class="col-sm-12 form-group">
              
              <textarea class="form-control" rows="4" name="mensaje" placeholder="Mensaje*" required style=" height: 96px;padding: 19px 20px;"></textarea>
            </div>
            <div class="col-sm-12 form-group text-center">
              <input   type="submit" value="ENVIAR" id="boton" style="background-color: #1883D3;font-size: 18px;font-family: Montserrat;padding: 6px 20%;border-radius: 35px;" class="btn btn-success">
              <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
            </div>
        </form>
        </div>
      </div>
          <img class=" hidden-sm hidden-xs " src="Image/Webstore-demo-banner.png" width=100%  alt="Astronaut">
  </div>


  <!--Footer-->

  <footer id="footer" class="container-fluid ">
    <div class="footer-big slideanim">
    <!-- start .container -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12 ">
          <div class="footer-widget">
            <div class="widget-about"><a href="#">
              <img src="Image/Webstore-Logo-footer.png" alt="" class="img-fluid"></a>
              <p>3612 Franconia,<br>Santo Domingo Este<br>República Dominicana</p>
            </div>
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-4 -->
        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="footer-menu footer-menu--1">
              <h4 class="footer-widget-title bold" >Asistencia Rápida</h4>
              <ul class= "list-unstyled">
                <li>
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=8292769197" title="whatsapp">
                    <div id= "fa-size "><span class="fa fa-whatsapp" style="font-size: 20px;color: #6DBA44;"></span><span> &nbsp; 1(829)276-9197 </span></div>
                  </a>
                </li>
                <li>
                  <a class="bold">809-591-5050</a>
                </li>

                <li id="fa-size-mail"><a href="mailto:info@webstore.do" title="mailto">
                     <div>
                      <span class="fa fa-envelope"> &nbsp; info@webstore.do
                      </span>
                    </div>
                  </a>
                </li>
                   <li><div id="fa-size-sn">
                          <a target="_blank" data-platform="facebook" href="#" title="Facebook"><span class="fa fa-facebook"> &nbsp; </span></a>
                          <a target="_blank" data-platform="instagram" href="https://www.instagram.com/jackie_lingerie77" title="Instagram"><span class="fa fa-instagram"> &nbsp; </span></a>
                          <a target="_blank" data-platform="twitter" href="#" title="Twitter"><span class="fa fa-twitter"> &nbsp; </span></a>
                        </div>
                    </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-3 -->

        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="footer-menu">
              <ul class= "list-unstyled">
                <li>
                  <a href="#portfolio">Proyectos Realizados</a>
                </li>
                <li>
                  <a href="#">Nosotros</a>
                </li>
                <li>
                  <a href="#pricing">Precios</a>
                </li> 
                <li>
                  <a href="#contact">Contacto</a>
                </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-lg-3 -->

        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="footer-menu no-padding">
              <ul class= "list-unstyled">
                <li>
                  <a href="#">Políticas de Privacidad</a>
                </li>
                <li>
                  <a href="#">Términos &amp; condiciones</a>
                </li>
              </ul><br>
              <h4 class="footer-widget-title bold" >Asistencia Rápida</h4>
              <p style="color: #06203F;font-family: Montserrat;font-size: 12px;">Lunes a viernes 9:00 AM - 6:00 PM<br>Sábados, domingos y feriados<br>no laboramos.</p>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- Ends: .col-lg-3 -->

        

      </div>
      <!-- end /.row -->
    </div>
    <!-- end /.container -->
  </div>
  <!-- end /.footer-big -->

  

    <div class="text-center">
      <a href="#index" title="To Top">
      <span class=" glyphicon glyphicon-chevron-up" ></span>
      </a>
    </div>
    <p class=" text-center">All Rights Reserved 2020 | Webstore | Developed By: <a target="_blank" href="https://www.instagram.com/williamsisaacliz/">Wiliams Liz</a></p>
  </footer>


















  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

  <script>
    $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#index']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
  </script>

  <script>
    function(d) {
  var e = a(this);
  e.attr("data-target") || d.preventDefault();
  var f = b(e),
    g = f.data("bs.collapse"),
    h = g ? "toggle" : e.data();
  c.call(f, h)
}
  </script>

  <script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();
    // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
}) 
</script>

<script>
  // Highlight the top nav as scrolling occurs
$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>



<script>
  //Typewriter text effect
  var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
      if (this.txt.length== fullTxt.length){
        this.el.innerHTML='<span class="wrap">'+this.txt+'<span class="text_colour">.</span></span>';
      }
      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
      that.tick();
      }, delta);
  };

  window.onload = function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
      }
  };
</script>


<!--carousel-->
<script>
         $(document).ready(function() {

$(".owl-carousel").owlCarousel({

autoPlay: 3000,
items : 4,
itemsDesktop : [1199,3],
itemsDesktopSmall : [979,3],
center: true,
nav:true,
loop:true,
responsive: {
600: {
items: 4
}
}






});

});
</script>


<script type="text/javascript">
  var text = document.getElementById("text");
function toggleClass(element, className){
    if (!element || !className){
        return;
    }

    var classString = element.className;
    var nameIndex = classString.indexOf(className);

   
    if (nameIndex == -1) {
        classString += ' ' + className;
    } else {
        classString = classString.substr(0, nameIndex) + classString.substr(nameIndex+className.length);
    }
    element.className = classString;
}

  document.getElementById('btn-menu-responsive').addEventListener('click', function() {
      toggleClass(this, 'close');
      //text.innerHTML == "Close" ? text.innerHTML = "Menu" : text.innerHTML = "Close";
  });
</script>


  <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>



</body>

</html>


