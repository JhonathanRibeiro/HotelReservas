<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Hotels Reservas</title>
	<meta name="author" content="Jhonathan Ribeiro">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- IMPORTANDO GOOGLE ICONS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- IMPORTANDO CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
<body>

	<!-- MENUS E BANNER SLIDER -->
	<div class="row">
		<nav class="blue">
			<div class="nav-wrapper container">
				<a href="" class="brand-logo">galeria</a>
				<a href="" class="button-collapse" data-activates="mobile"><i class="material-icons">menu</i></a>

				<!-- MENU PARA DESKTOP -->
				<ul class="right hide-on-med-and-down">
					<li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
					<li><a href="galeria.php"><i class="material-icons left">image</i>Galeria</a></li>
					<li><a href="contato.php"><i class="material-icons left">email</i>Contato</a></li>
				</ul>

				<!-- MENU PARA DISPOSITIVOS MÓVEIS -->
				<ul class="side-nav" id="mobile">
					<li><img src="_img/lightbox-1.jpg" width="100%"></li>
					<li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
					<li><a href="galeria.php"><i class="material-icons left">image</i>Galeria</a></li>
					<li><a href="contato.php"><i class="material-icons left">email</i>Contato</a></li>
				</ul>
			</div>
		</nav>

		<!-- BANNER SLIDER -->

		<div class="slider">
			<ul class="slides">
				<li>
					<img src="_img/hotel-banner-1.jpg">
					<div class="caption left-align">
						<h4>Lorem Ipsum</h4>
						<h5>Lorem ipsum dolor sit amet, <br>consectetur adipisicing.</h5>
						<a href="" class="btn teal">learn more</a>
					</div>
				</li>
				<li>
					<img src="_img/hotel-banner-2.jpg" alt="">
					<div class="caption black-text center-align">
						<h4>Lorem Ipsum</h4>
						<h5>Lorem ipsum dolor sit amet, <br>consectetur adipisicing.</h5>
						<a href="" class="btn teal">learn more</a>
					</div>
				</li>
				<li>
					<img src="_img/hotel-banner-3.jpg" alt="">
					<div class="caption right-align">
						<h4>Lorem Ipsum</h4>
						<h5>Lorem ipsum dolor sit amet, <br>consectetur adipisicing.</h5>
						<a href="" class="btn teal">learn more</a>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="row"></div>

	<!-- GALERIA DE IMAGENS -->
	<div class="row">
		<div class="col s12 blue-text text-lighten-2 center">
			<h5>Arraste as imagens para visualizar</h5><br>
		</div>
		<div class="carousel carousel-slider col s12">
		    <a class="carousel-item" href="#um!"><img src="_img/galeria-slider-1.jpg"></a>
		    <a class="carousel-item" href="#dois!"><img src="_img/galeria-slider-2.jpg"></a>
		    <a class="carousel-item" href="#tres!"><img src="_img/galeria-slider-3.jpg"></a>
		    <a class="carousel-item" href="#quatro!"><img src="_img/galeria-slider-4.jpg"></a>
		    <a class="carousel-item" href="#cinco!"><img src="_img/galeria-slider-5.jpg"></a>
		    <a class="carousel-item" href="#seis!"><img src="_img/galeria-slider-6.jpg"></a>
		    <a class="carousel-item" href="#sete!"><img src="_img/galeria-slider-7.jpg"></a>
	  	</div>
  	</div>

  	<!-- TEXTO PROMOÇÕES -->
  	<div class="row container">
  		<div class="col s12"><h5>Promoções</h5></div>
  		<div class="col 12 m6">
  			<div class="card panel teal white-text hoverable">
  				<div class="card-content">
  					<span class="card-title">Promoção 1</span>
  					<p>
  						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas tempora voluptatibus provident modi dolores adipisci, assumenda quidem enim quaerat animi, possimus, impedit ipsam vel! Eos in ducimus sapiente pariatur officia.<br><br>
  						<a href="" class="btn">ler mais</a>
  					</p>
  				</div>
  			</div>
  		</div>
  		<div class="col 12 m6">
  			<div class="card panel green lighten-2 white-text hoverable">
  				<div class="card-content">
  					<span class="card-title">Promoção 2</span>
  					<p>
  						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas tempora voluptatibus provident modi dolores adipisci, assumenda quidem enim quaerat animi, possimus, impedit ipsam vel! Eos in ducimus sapiente pariatur officia.<br><br>
  						<a href="" class="btn">ler mais</a>
  					</p>
  				</div>
  			</div>
  		</div>

  		<!-- REGRAS DA PROMOÇÃO -->
  		<p>&nbsp;</p>
  		<div class="col s12">
  			<h5>Regras da promoção</h5>
  			<p>
  				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempore, itaque. Id rerum odio fugit totam incidunt a, eius dolor voluptates, libero nesciunt harum quae expedita consectetur delectus. Provident, eaque!<br><br>
  			</p>
  			<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui non, minima vero esse eaque blanditiis, vel quo nisi ipsam, ab praesentium amet nemo suscipit numquam architecto ullam ratione molestias sunt?</blockquote>

  			<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui non, minima vero esse eaque blanditiis, vel quo nisi ipsam, ab praesentium amet nemo suscipit numquam architecto ullam ratione molestias sunt?</blockquote>

  			<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui non, minima vero esse eaque blanditiis, vel quo nisi ipsam, ab praesentium amet nemo suscipit numquam architecto ullam ratione molestias sunt?</blockquote>
  			<p>&nbsp;</p>
  		</div>
  	</div>

  	<!-- PARALLAX -->
	<div class="parallax-container">
		<div class="parallax">
			<img src="_img/imagem-parallax-galeria.jpg" alt="">
		</div>
	</div>

	<!-- RODAPÉ PRINCIPAL DA PÁGINA -->
	<footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">hoteis.com</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns <br>here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="galeria.php">Galeria</a></li>
                  <li><a class="grey-text text-lighten-3" href="contato.php">Contato</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019
            <a class="grey-text text-lighten-4 right" href="#!">Jhonathan Ribeiro</a>
            </div>
          </div>
    </footer>

	


	<!-- IMPORTANDO JQUERY E JAVASCRIPT -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/materialize.min.js"></script>

	<!-- CONFIGURAÇÕES JQUERY E JAVASCRIPT -->
	<script>
		$('document').ready(function(){
			$('.button-collapse').sideNav();
			$('.slider').slider();
			$('.carousel.carousel-slider').carousel({fullWidth: true});
			$('.parallax').parallax();
		});
	</script>
</body>
</html>