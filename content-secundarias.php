<article class="noticia-secundaria">
	<div class="miniatura">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a>
	</div>
	<h1><a title=" <?php the_title_Attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
	<p><?php the_excerpt(); //resumo ?></p> 
</article>