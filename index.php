<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>FSN Cursos Online</title>
	<meta name="author" content="Fábio Souza - FSN Cursos Online">
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
				<a href="" class="brand-logo">Hotel</a>
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

	<div class="row"><p>&nbsp;</p></div>

	<!-- ARTICLES -->

	<div class="row container">
		<div class="col s12 grey-text center"><h4>Hotéis em destaque</h4><p>&nbsp;</p></div>

		<article class="col s12 l4 center hoverable">
			<img src="_img/hotel-sao-paulo.jpg" class="circle reaponsive-img">
			<h5>Hotel São Paulo</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<a href="" class="btn teal">ler mais</a><br><br>
		</article>

		<article class="col s12 l4 center hoverable">
			<img src="_img/hotel-rio.jpg" class="circle reaponsive-img">
			<h5>Hotel RJ</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<a href="" class="btn teal">ler mais</a><br><br>
		</article>

		<article class="col s12 l4 center hoverable">
			<img src="_img/hotel-ceara.jpg" class="circle reaponsive-img">
			<h5>Hotel Ceará</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<a href="" class="btn teal">ler mais</a><br><br>
		</article>
	</div>

	<!-- PARALLAX -->
	<div class="parallax-container">
		<div class="parallax">
			<img src="_img/imagem-parallax.jpg" alt="">
		</div>
	</div>

	<div class="row"><p>&nbsp;</p></div>

	<!-- TEXTO -->
	<div class="row container">
		<div class="col s12">
			<h5>lorem ipsum</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus aperiam saepe unde numquam sunt cupiditate aut impedit, inventore. Sed expedita sit quas harum doloremque repellat officiis eveniet, dolore natus culpa!
				<br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde minus nostrum aperiam ipsa perferendis quaerat, debitis at laborum fuga temporibus? Perferendis sunt, praesentium quaerat earum reprehenderit ipsum optio, quas eveniet?
			</p>

			<br><hr><br>

			<h5>Importante</h5>
			<blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio delectus obcaecati sint optio blanditiis, soluta eaque, illo cupiditate et ad reiciendis labore veritatis, porro quod expedita similique sed adipisci aliquid.
				</p>
			</blockquote>
			<blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio delectus obcaecati sint optio blanditiis, soluta eaque, illo cupiditate et ad reiciendis labore veritatis, porro quod expedita similique sed adipisci aliquid.
				</p>
			</blockquote>
		</div>
	</div>

	<br><hr><br>

	<!-- CARDS LIGHTBOX-->
	<div class="row container">
		<div class="col s12 center grey-text">
			<h5>Pacotes Especiais</h5>
		</div>
		<!-- CARD LIGHTBOX 1 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-1.jpg" class="responsive-img materialboxed" data-caption="Especial de Natal">
					<span class="card-title">Especial de Natal</span><br>
				</div>
				<div class="card-content">
					
					<p>
						<strong>R$580,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#modalNatal" class="modal-trigger">reservar</a></div>
				<div class="modal" id="modalNatal">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Especial Natal">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div><!-- FIM DO PRIMEIRO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 2 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-2.jpg" class="responsive-img materialboxed" data-caption="Pacote Plus">
					<span class="card-title">Pacote Plus</span><br>
				</div>
				<div class="card-content">
					<p>
						<strong>R$750,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#pacotePlus" class="modal-trigger">reservar</a></div>
				<div class="modal" id="pacotePlus">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Pacote Plus">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO SEGUNDO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 3 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-3.jpg" class="responsive-img materialboxed" data-caption="Lua de Mel">
					<span class="card-title">Lua de Mel</span><br>
				</div>
				<div class="card-content">
					<p>
						<strong>R$940,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#luaDeMel" class="modal-trigger">reservar</a></div>
				<div class="modal" id="luaDeMel">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Lua de Mel">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO TERCEIRO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 4 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-4.jpg" class="responsive-img materialboxed" data-caption="Pacote Master">
				</div>
				<div class="card-content">
					<span class="card-title">Pacote Master</span><br>
					<p>
						<strong>R$750,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#pacoteMaster" class="modal-trigger">reservar</a></div>
				<div class="modal" id="pacoteMaster">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Pacote Master">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO QUARTO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 5 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-5.jpg" class="responsive-img materialboxed" data-caption="Especial Reveillon">
				</div>
				<div class="card-content">
					<span class="card-title">Especial Reveillon</span><br>
					<p>
						<strong>R$1.200,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#especialReveillon" class="modal-trigger">reservar</a></div>
				<div class="modal" id="especialReveillon">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Especial Reveillon">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO QUINTO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 6 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-6.jpg" class="responsive-img materialboxed" data-caption="Pacote Diamante">
				</div>
				<div class="card-content">
					<span class="card-title">Pacote Diamante</span><br>
					<p>
						<strong>1.150,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#pacoteDiamante" class="modal-trigger">reservar</a></div>
				<div class="modal" id="pacoteDiamante">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Pacote Diamante">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO SEXTO CARD LIGHTBOX -->

	</div><!-- FIM DOS CARDS LIGHTBOX -->


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
            © 2018 Copyright FSN Cursos Online
            <a class="grey-text text-lighten-4 right" href="#!">Fábio Souza</a>
            </div>
          </div>
    </footer>


	
	<!-- IMPORTANDO JQUERY E JAVASCRIPT -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/materialize.min.js"></script>

	<!-- CONFIGURAÇÕES JQUERY E JAVASCRIPT -->
	<script>
		$('document').ready(function(){
			$('.modal').modal();
			$('.button-collapse').sideNav();
			$('.slider').slider();
			$('.parallax').parallax();
			$('.materialboxed').materialboxed();
		});
	</script>
</body>
</html>