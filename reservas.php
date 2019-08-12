<?php

	$conexao = new mysqli("localhost","root","","db_reservas");
	$conexao->set_charset('utf8');

	$nomePacote = isset($_POST['nomePacote'])?($_POST['nomePacote']):"";
	$nome       = isset($_POST['nome'])?($_POST['nome']):"";
	$telefone   = isset($_POST['telefone'])?($_POST['telefone']):"";
	$entrada    = isset($_POST['entrada'])?($_POST['entrada']):"";
	$saida      = isset($_POST['saida'])?($_POST['saida']):"";
	$email      = isset($_POST['email'])?($_POST['email']):"";

	$cadastro = $conexao->query("insert into tb_reservas values(default,'$nomePacote','$nome','$telefone','$entrada','$saida','$email')");

?>

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
				<a href="" class="brand-logo">logo</a>
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

	<div class="row container">
		<div class="col s12">
			<p>
			Olá <?php echo $nome; ?>. Obrigado por fazer sua reserva conosco.<br>
			Sua reserva foi: <strong><?php echo $nomePacote; ?></strong><br>
			Em breve entraremos em contato para confirmação.
			</p>

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
            © 2018 
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