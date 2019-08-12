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
				<a href="" class="brand-logo">Contato</a>
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


	<!-- MAPA DO GOOGLE -->
	<div class="row">
		<div class="col s12">
			<p>
				Tel: (11) 5555-4444<br>
				End. Av Paulista 9.999 São Paulo
			</p>
			<h5>Escritório Central</h5><p>&nbsp;</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.145694484669!2d-46.65643898526802!3d-23.563210284682004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.+Paulista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1521172481843" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            © 2019 Copyright 
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
		});
	</script>
</body>
</html>