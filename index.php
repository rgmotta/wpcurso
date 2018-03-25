<?php get_header(); ?>
<!-- Aqui é onde é colocado as imagens do cabeçalho para que aparecam no site -->
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">		
					<div class="blog col-md-9">
						<?php 
							//se tiver post
							if(have_posts()) :
							//enquanto houver posts, chame o post de determinada forma
								while(have_posts()) : the_post();
						 ?>
						
						<?php  get_template_part('content', get_post_format()); ?>
						 <?php  
							endwhile;

						?>

						<div class="paginacao text-left">
							<?php next_posts_link("<< mais antigos"); ?>
						</div>
						<div class="paginacao text-right">
							<?php previous_posts_link(">> mais novos") ?>
						</div>

						<?php
							else:
						 ?>
						 	<p>Ainda nao há posts</p>
						 <?php  
						 	endif;
						 ?>
					</div>
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>
				</div>	
			</div>
		</section>
		<section class="mapa">Mapa</section>
	</main>	
</div> 
<?php get_footer(); ?>
