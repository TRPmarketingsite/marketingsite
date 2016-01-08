<?php
/* Template Name: Newsroom */

$newsroomPosts = get_posts( array('posts_per_page' => 5) );
$latestNewsroomPosts = get_posts( array('posts_per_page' => 2, 'orderby' => 'date', 'order'=> 'DESC') );
?>

<div class="trp-template-header trp-newsroom-header">
	<div class="trp-template-header-content container">
		<h1>
			Newsroom
		</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<?php 
			foreach ( $newsroomPosts as $post ) : setup_postdata( $post ); ?>
			<article class="type-post trp-newsroom-item">
				<header>
					<h2 class="entry-title"><?php get_template_part('templates/entry-meta'); ?></h2>
				</header>
				<div class="entry-summary">
					<p>
						<?php the_title(); ?>
					</p>
				</div>
				<p class="trp-keep-reading"> <a href="<?= get_post_permalink($post->ID) ?>">Click here to read article</a></p>
				<hr>
			</article>
			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
		<div class="col-md-offset-1 col-md-4 text-center trp-newsroom-sidebar">
			<h3 class="trp-recent-posts-title">
				Recent Blog Posts
			</h3>
			<?php 
			foreach ( $latestNewsroomPosts as $post ) : setup_postdata( $post ); ?>
			<article class="type-post trp-recent-post">
				<?php if ( has_post_thumbnail() ) : ?>
				<img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) )[0]; ?> " alt="">
				<?php endif ?>
				<header>
					<h2 class="entry-title"><?php get_template_part('templates/entry-meta'); ?></h2>
				</header>
				<div class="entry-summary">
					<p>
						<?php the_title(); ?>
					</p>
				</div>
				<p class="trp-keep-reading"> <a href="<?= get_post_permalink($post->ID) ?>">Click here to keep reading</a></p>
			</article>
			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
	</div>
</div>