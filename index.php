<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcraft</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsivo.css">
	</head>
	<body>

		<header class="header">
			<div class="container">
				<a href="index.php" class="grid-4">
					<img src="img/bikcraft.svg" alt="Bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<ul>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="produtos.php">Produtos</a></li>
						<li><a href="portfolio.php">Portfólio</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="introducao">
			<div class="container">
				<h1>Bicicletas Feitas a Mão</h1>
				<blockquote class="quote-externo">
					<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
					<cite>WILLIAM MORRIS</cite>
				</blockquote>
				<a href="produtos.php" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/esporte.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Esporte</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/retro.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Retrô</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>

			</ul>

			<div class="call">
				<p>clique aqui e veja os detalhes dos produtos</p>
				<a href="produtos.php" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>
				<ul class="portfolio_lista">
					<li class="grid-8"><img src="img/portifolio/retro.jpg" alt="Bicicleta Retrô"></li>
					<li class="grid-8"><img src="img/portifolio/passeio.jpg" alt="Bicicleta Passeio"></li>
					<li class="grid-16"><img src="img/portifolio/esporte.jpg" alt="Bicicleta Esporte"></li>
				</ul>
				<div class="call">
					<p>conheça mais o nosso portfólio</p>
					<a href="portfolio.php" class="btn">Portfólio</a>
				</div>
			</div>
		</section>

		<section class="qualidade container">
			<h2 class="subtitulo">Qualidade</h2>
			<img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
			<ul class="qualidade_lista">
				<li class="grid-1-3">
					<h3>Durabilidade</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
				<li class="grid-1-3">
					<h3>Design</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
				<li class="grid-1-3">
					<h3>Sustentabilidade</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
			</ul>
			<div class="call">
				<p>conheça mais a nossa história</p>
				<a href="sobre.php" class="btn btn-preto">Sobre</a>
			</div>
		</section>

		<section class="quebra">
			<blockquote class="quote-externo container">
				<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
		</section>

		<footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana cotidiana. interesse por todos os detalhes da vida cotidiana cotidiana.</p>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- 21 23232-4343</li>
							<li>- contato@bikcraft.com</li>
							<li>- São Paulo</li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Contato</h3>
						<ul>
							<li><a href="http://facebook.com" target="_blank"><img src="img/redes_sociais/facebook.svg"></a></li>
							<li><a href="http://instagram.com" target="_blank"><img src="img/redes_sociais/instagram.svg"></a></li>
							<li><a href="http://twitter.com" target="_blank"><img src="img/redes_sociais/twitter.svg"></a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16">Bikcraft 2019 - Alguns direitos reservados.</p>
				</div>
			</div>
		</footer>

	</body>
</html>