<?php $sobre = get_page_by_title('sobre'); ?>
<section class="qualidade container">
	<h2 class="subtitulo"><?php the_field('titulo_qualidade', $sobre); //vai pegar o titulo qualidade que estiver dentro da pagina "sobre". ?></h2>
	<img src="<?php the_field('logo_bikcraft', $sobre); ?>" alt="Bikcraft">
	<ul class="qualidade_lista">
		<?php if(have_rows('item_qualidade', $sobre)): while(have_rows('item_qualidade', $sobre)) : the_row(); ?>
		<li class="grid-1-3">
			<h3><?php the_sub_field('titulo_item_qualidade', $sobre); ?></h3>
			<p><?php the_sub_field('descricao_item_qualidade', $sobre); ?></p>
		</li>
		<?php endwhile; else : endif; //primeiramente feche oq abriu mais recentemente ?>
		
	</ul>
	<?php if (!is_page('sobre')) { 
		// se for(estiver na) pagina 'sobre' não mostrar o conteúdo na pagina "sobre.php" e podendo ser visivel em qualquer outra pagina. ?>
	<div class="call">
		<p><?php the_field('chamada_sobre', $sobre); ?></p>
		<a href="/bikcraft/sobre/" class="btn btn-preto">Sobre</a>
	</div>
	<?php } ?>
</section>