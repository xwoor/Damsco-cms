<!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Damasco - @yield('title')</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="Proyecto Damascogit ">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		   	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
            <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
            <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
            <link rel="stylesheet" type="text/css" href="styles/responsive.css">
						<link rel="stylesheet" type="text/css" href="css/estilos.css">
						<script src="js/wow.js"></script>
              <script>
              new WOW().init();
			  </script>
        </head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo only-movil"><a href="/"><img src="{{asset('images/EXPORTS_logo_38.png') }}" alt=""></a></div>
			<div class=" wow fadeInLeft"><a href="/test" >            <div class="only-desk">
					<a href=""><img class="small-logo" src="{{asset('images/EXPORTS_fb.png') }}"></a>
					<a href=""><img class="small-logo" src="{{asset('images/EXPORTS_ig.png') }}"></a>
					<a href=""><img class="medium-logo" src="{{asset('images/EXPORTS_logo_38.png') }}"></a>
					<a href=""><img class="medium-logo" src="{{asset('images/EXPORTS_logo_damasco.png') }}"></a>
				</div></a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start wow fadeInDown">
						<li class="{{ Request::is('test') ? 'active' : ''}} mt4">
							<a href="/test">HOME</a>
						</li>



						<li class="{{ Request::is('test-ubicacion-descripcion') ? 'active' : ''}}">
							
							<div class="btn-group">
									<a href="/test-ubicacion-descripcion">
										UBICACIÓN + <br>DESCRIPCIÓN
									</a>
									<button type="button" class=" dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
									<a class="dropdown-item txt-white text-uppercase" href="#">Mapa + Localización</a>
									<a class="dropdown-item txt-white text-uppercase" href="#">Zonas Comunes</a>
									<a class="dropdown-item txt-white text-uppercase" href="#">Beneficios del sector</a>
									</div>
								</div>
						</li>
						<li class="{{ Request::is('test-espacios-valores') ? 'active' : ''}} nav-item dropdown">
							<a href="/test-espacios-valores">
								ESPACIOS<br>+ VALORES
							</a>
							<button type="button" class=" dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
									<a class="dropdown-item txt-white text-uppercase" href="/apartamentos">Apartamentos</a>
									<a class="dropdown-item txt-white text-uppercase" data-toggle="modal" data-target="#apt4">Locales Comerciales</a>
									<a class="dropdown-item txt-white text-uppercase" data-toggle="modal"  data-target="#apt5">Parqueaderos</a>
									<a class="dropdown-item txt-white text-uppercase" data-toggle="modal"  data-target="#apt1">Terraza</a>
									</div>
						</li >
						<li  class="{{ Request::is('test-catalogo-acabados') ? 'active' : ''}}">
							<a href="/test-catalogo-acabados">
								CATALOGO DE<br>+ ACABADOS
							</a>
						</li>
						<li class="{{ Request::is('test-contacto') ? 'active' : ''}} mt4">
							<a href="" data-toggle="modal" data-target="#exampleModal">
								CONTACTO
							</a>
						</li>
						<li class="{{ Request::is('test-equipo-soporte') ? 'active' : ''}}">
							<a href="/test-equipo-soporte">
								DESCARGA <br> DE ARCHIVOS
							</a>
						</li>				
					</ul>
				</nav>
				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li class="{{ Request::is('/test') ? 'active' : ''}} ">
						<a href="/test" class="mt-4">HOME</a> <hr>
					</li>
					<li class="{{ Request::is('test-ubicacion-descripcion') ? 'active' : ''}}">
						<a href="/test-ubicacion-descripcion">
							UBICACIÓN + DESCRIPCIÓN
						</a> <hr>
					</li>
					<li class="{{ Request::is('test-espacios-valores') ? 'active' : ''}} nav-item dropdown">
							<a href="/test-espacios-valores" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="true">
								ESPACIOS<br>+ VALORES
							</a> <hr>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								  </div>
						</li >
					<li  class="{{ Request::is('test-catalogo-acabados') ? 'active' : ''}}">
						<a href="/test-catalogo-acabados">
							CATALOGO DE + ACABADOS
						</a> <hr>
					</li>
					<li class="{{ Request::is('test-contacto') ? 'active' : ''}}">
						<a  href="" data-toggle="modal" data-target="#exampleModal">
							CONTACTO
						</a> <hr>
					</li>
					<li class="{{ Request::is('test-equipo-soporte') ? 'active' : ''}}">
						<a href="/test-equipo-soporte">
							DESCARGA DE ARCHIVOS
						</a> <hr>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	@yield('content')
	
	<h3 class="text-center tex-gray mt-4 wow fadeInUp"><b>38 PLUS - PROYECTO INMOBILIARIO</b></h3>
	<h4 class="text-center tex-gray mt-4 wow fadeInUp">(+57) 320 918 3759 <br> SALA DE VENTAS: Carrera 38 entre Calles 12 y 12a Puente Aranda <br> info@proyectosdamasco.com</h4>
	<div class="container">
	<div class="row mt-4 ">
		<div class="col-4 col-lg-2 mt-4 wow fadeInLeft" data-wow-delay="0.3s">
			<img src=" {{asset('images/clientes_img__07.png')}} ">
		</div>
		<div class="col-4 col-lg-2 mt-4 wow fadeInLeft" data-wow-delay="0.3s">
			<img src=" {{asset('images/clientes_img_01.png')}} ">
		</div>
		<div class="col-4 col-lg-2 mt-4 wow fadeInLeft" data-wow-delay="0.5s">
			<img src=" {{asset('images/clientes_img_02.png')}} ">
		</div>
		<div class="col-4 col-lg-2 mt-4 wow fadeInLeft" data-wow-delay="0.8s">
			<img src=" {{asset('images/clientes_img_03.png')}} ">
		</div>
		<div class="col-4 col-lg-2 mt-4 wow fadeInLeft" data-wow-delay="1.1s">
			<img src=" {{asset('images/clientes_img_04.png')}} ">
		</div>
		<div class="col-4 col-lg-2 mt-4 wow fadeInLeft" data-wow-delay="1.5s">
			<img src=" {{asset('images/clientes_img_06.png')}} ">
		</div>
	</div>
	</div>	
	<!-- Footer -->

	{{-- MODAL --}}
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-flotante btn-movil wow fadeInRight" data-wow-delay="1s" style="padding:10px" data-toggle="modal"  		
	data-target="#exampleModal">
		<i style="font-size: 40px;" class="fas fa-envelope"></i>
</button>
	  
	  <!-- Modal -->
	  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close txt-white" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  {{-- MODAL CONTENT --}}
			  <div class="row">
				  <div class="col-12 col-lg-6">
					<p class="txt-white pd-2 text-justify">
						Es la <b> OPORTUNIDAD DE INVERTIR</b> 
						en un proyecto innovador, con multiples beneficios y al 
						<b> MEJOR PRECIO POR m2</b> de la zona. Una compra inteligente con 
						<b>amplio plazo</b> 
						para pago de cuota inicial. Escríbenos y te contactaremos lo más pronto posible.
					</p>
						<form action="/mail" method="POST" class="form">
							@csrf
							<div class="form-group">
							  <label for="">NOMBRE</label>
							  <input type="text" class="form-control" name="nombre" required>
							</div>
							<div class="form-group">
							  <label for="">CORREO</label>
							  <input type="email" class="form-control" name="email" required>
							</div>
			
							<div class="form-group">
							  <label for="">INTERESES</label>
							  <select class="form-control" name="intereses" >
								<option name="opt1">LOCALES COMERCIALES</option>
								<option name="opt2">APARTAESTUDIOS - LOFTS</option>
								<option name="opt3">APARTAMENTO 2 ALCOBAS</option>
								<option name="opt4">APARTAMENTO 3 ALCOBAS</option>
							  </select>
							</div>
			
							<div class="form-group">
							  <label for="">Nº  CELULAR</label>
							  <input type="text" class="form-control" name="celular" required>
							</div>
							<div class="form-group">
							  <label for="">MENSAJE</label>
							  <textarea class="form-control" name="mensaje" rows="2"></textarea>
							</div>
							<button type="submit" class="btn btn-primary boton-right">Enviar <i class="fas fa-angle-right"></i></button>
			
						</form>
				  </div>
				  <div class="col-12 col-lg-6">
						<h4 class="text-left txt-white mt-4 wow fadeInUp">(+57) 320 918 3759 <br> SALA DE VENTAS: Carrera 38 entre Calles 12 y 12a Puente Aranda <br> info@proyectosdamasco.com</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7272.984152571697!2d-74.10424832691959!3d4.6189027000008265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9985b27f1a8d%3A0xb2f26604b363b08!2sProyecto+38+Plus!5e0!3m2!1ses-419!2sco!4v1560391126835!5m2!1ses-419!2sco" 
                 		width="100%" height="420px" frameborder="0" style="border:0" allowfullscreen></iframe>
				  </div>
			  </div>
			  
			  {{-- FIN MODAL CONTENT --}}
			</div>
		  </div>
		</div>
	  </div>
	{{-- FIN MODAL --}}

	<footer class="footer d-flex justify-content-center wow fadeInUp mb-4" data-wow-delay="1.8s">
			<a href="http://www.casacreativa.co/" target="blank" class="">
				<p class="text-center tex-red wow fadeInUp"> Diseñado y desarrollado por CasaCreativa</p>
			</a>
		</footer>
</div>
{{-- Abajo --}}
<div class="fixed-bottom bg-gray d-flex justify-content-center ">
	<p>
		<i class="fas fa-arrow-circle-down txt-white mt-2 mb-2 animated infinite bounce"></i>
	</p>
</div>
@include('modals.modal1')
@include('modals.modal2')
@include('modals.modal3')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>