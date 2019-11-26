<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcraft - Produtos</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/produtos.css">
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
						<li><a href="produtos.php" class="menu_ativo">Produtos</a></li>
						<li><a href="portfolio.php">Portfólio</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="introducao-interna interna_produtos">
			<div class="container">
				<h1>Produtos</h1>
				<p>conheça todos os nossos produtos</p>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
				<h2>Passeio</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/passeio.svg"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio"></div>
			<div class="grid-8 produto_info">
				<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/esporte.svg"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte"></div>
			<div class="grid-8 produto_info">
				<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô">
				<h2>Retrô</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/retro.svg"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô"></div>
			<div class="grid-8 produto_info">
				<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<form id="form_orcamento" class="form grid-8">
					<label for="nome">Nome</label>
					<input type="text" id="nome">
					<label for="email">E-mail</label>
					<input type="text" id="email">
					<label for="telefone">Telefone</label>
					<input type="text" id="telefone">
					<label for="espec">Especificações</label>
					<textarea id="espec"></textarea>
					<button type="submit" class="btn">Enviar</button>
				</form>
				<div class="orcamento_dados grid-8">
					<h3>Dados</h3>
					<span>+55 21 93223 3232</span>
					<span class="dados_email">orcamento@bikcraft.com</span>
					<h3>Monte a sua Bikcraft</h3>
					<p>Escolha as especificações:</p>
					<ul>
						<li>- Cores</li>
    				<li>- Estilo</li>
    				<li>- Medidas</li>
   					<li>- Acessórios</li>
    				<li>- E Outros</li>
					</ul>
				</div>
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
							<li>- 11 23232-4343</li>
							<li>- contato@bikcraft.com</li>
							<li>- São Paulo - SP</li>
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
					<p class="grid-16">Bikcraft 2019 - </p>
				</div>
			</div>
		</footer>

	</body>
</html>