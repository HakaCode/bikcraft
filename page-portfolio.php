<?php 
// Template Name: Portifolio
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //(if)se tiver post(s), (while)enquanto tiver post(s) mostra o post.?>

		<?php include(TEMPLATEPATH . "/inc/introducao.php"); // TEMPLATEPATH busca caminho para incluir informações de outras paginas que smp se repetem, "." no php é o mesmo que "somar".?>

		<section class="container animar-interno">
			<ul class="rslides">
				<li>
					<blockquote class="quote_clientes">
						<p>“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.”</p>
						<cite>Barbara Moss</cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<p>“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição.”</p>
						<cite>Jhony Rato</cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<p>“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental. Nunca vida nada igual.”</p>
						<cite>Bernardo</cite>
					</blockquote>
				</li>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); // TEMPLATEPATH busca caminho para incluir informações de outras paginas que smp se repetem, "." no php é o mesmo que "somar".?>
			</div>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>