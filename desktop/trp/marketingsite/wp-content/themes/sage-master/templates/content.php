<article <?php post_class(); ?>>
	<div class="row">
		<div class="col-sm-3">
			<img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) )[0]; ?> " alt="">
		</div>
		<div class="col-sm-7">
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php get_template_part('templates/entry-meta'); ?>
			</header>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
			<hr>
		</div>
	</div>
</article>