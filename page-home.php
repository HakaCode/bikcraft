<?php 
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //(if)se tiver post(s), (while)enquanto tiver post(s) mostra o post.?>
		<section class="introducao">
			<div class="container">
				<h1><?php the_field("titulo_introducao"); ?></h1>
				<blockquote class="quote-externo">
					<p><?php the_field("quote_introducao"); ?></p>
					<cite><?php the_field("citacao_introducao"); ?></cite>
				</blockquote>
				<a href="/bikcraft/produtos/" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/passeio.png" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/esporte.png" alt="Bikcraft Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="img/produtos/retro.png" alt="Bikcraft Retrô">
					</div>
					<h3>Retrô</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</li>

			</ul>

			<div class="call">
				<p><?php the_field("chamada_produtos"); ?></p>
				<a href="/bikcraft/produtos/" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>
					<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); // TEMPLATEPATH busca caminho para incluir informações de outras paginas que smp se repetem, "." no php é o mesmo que "somar".?>
				<div class="call">
					<p><?php the_field("chamada_portfolio"); ?></p>
					<a href="/bikcraft/portfolio/" class="btn">Portfólio</a>
				</div>
			</div>
		</section>

		<section class="qualidade container">
			<h2 class="subtitulo">Qualidade</h2>
			<img src="img/bikcraft-qualidade.png" alt="Bikcraft">
			<ul class="qualidade_lista">
				<li class="grid-1-3">
					<h3>Durabilidade</h3>
					<p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
				</li>
				<li class="grid-1-3">
					<h3>Design</h3>
					<p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
				</li>
				<li class="grid-1-3">
					<h3>Sustentabilidade</h3>
					<p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
				</li>
			</ul>
			<div class="call">
				<p>conheça mais a nossa história</p>
				<a href="sobre.html" class="btn btn-preto">Sobre</a>
			</div>
		</section>
<?php endwhile; else: endif; ?>


<?php get_footer(); ?>