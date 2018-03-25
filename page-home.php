<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<?php motoPressSlider( "home-slider" ) ?>
		</section>
		<section class="servicos">
			<div class="container">
				<div class="row">
					<h1>Serviços</h1>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="servicos-item">
							<div class="servicos-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos1')); ?>" alt="">
							</div>
							<h2><?php echo get_theme_mod('set_servicos1_titulo'); ?></h2>
							<p><?php echo get_theme_mod('set_servicos1_descricao'); ?></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="servicos-item">
							<div class="servicos-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos2')); ?>" alt="">
							</div>
							<h2><?php echo get_theme_mod('set_servicos2_titulo'); ?></h2>
							<p><?php echo get_theme_mod('set_servicos2_descricao'); ?></p>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="servicos-item">
							<div class="servicos-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos3')); ?>" alt="">
							</div>
							<h2><?php echo get_theme_mod('set_servicos3_titulo'); ?></h2>
							<p><?php echo get_theme_mod('set_servicos3_descricao'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-4">
						<?php get_sidebar('home'); ?>
					</aside>

					<div class="noticias col-md-8">
					<div class="row">
						<?php  

						$destaque = new WP_Query('type=post&posts_per_page=1&cat=1,4');

						if($destaque->have_posts()):
							while($destaque->have_posts()):
								$destaque->the_post();

						?>
						<div class="col-md-12">
							<?php get_template_part('content', 'destaque') ?>
						</div>
						<?php		
							endwhile;
							wp_reset_postdata();
						endif;
						?>
						<?php  

						$args= array(
							'type' 				=>  'post',
							'posts_per_page'  	=>  2,
							'category__not_in'  =>  array(3),
							'category_in'       =>  array(1,4),
							'offset'            => 1, // para nao ocorrer de repetir post em uma mesmo página
						);

						$secundarias = new WP_Query($args);

						if($secundarias->have_posts()):
							while($secundarias->have_posts()):
								$secundarias->the_post();

						?>
						<div class="col-md-6">
							<?php get_template_part('content', 'secundarias') ?>
						</div>
						<?php		
							endwhile;
							wp_reset_postdata();
						endif;
						?>					
					</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mapa">
			<div class="ondeestamos">
				<h1>Onde estamos?</h1>
			</div>
			<?php gmwd_map( 1, 1); ?>
		</section>
	</main>	
</div> 
<?php get_footer(); ?>
