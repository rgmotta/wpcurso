<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><a title=" <?php the_title_Attribute() ?>" href" <?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php if(has_post_thumbnail()) : the_post_thumbnail('thumbnail'); endif;?>
	<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
	<p><?php the_tags('Tags: ', ','); ?></p>
	<p><?php the_excerpt(); ?></p>
</article>