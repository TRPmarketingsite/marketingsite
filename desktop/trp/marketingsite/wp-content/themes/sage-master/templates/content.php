<article <?php post_class(); ?>>
	<div class="row">
		<div class="col-sm-3">
			<img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) )[0]; ?> " alt="">
		</div>
		<div class="col-sm-7">
			<header>
				<h2 class="entry-title"><?php get_template_part('templates/entry-meta'); ?></h2>
			</header>
			<div class="entry-summary">
				<p>
					<?php the_title(); ?>
				</p>
			</div>
			<div class="entry-excerpt">
				<?php the_excerpt() ?>
			</div>
			<p class="trp-keep-reading"> <a href="<?= get_post_permalink($post->ID) ?>">Click here to keep reading</a></p>
			<hr>
		</div>
	</div>
</article>