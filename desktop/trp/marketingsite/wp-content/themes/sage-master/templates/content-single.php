<?php 
$latestNewsroomPosts = get_posts( array('posts_per_page' => 2, 'orderby' => 'date', 'order'=> 'DESC', 'cat' => '-'.get_cat_ID('News')) );
 ?>
<?php while (have_posts()) : the_post(); ?>
<div class="container trp-single-post-container">
  <div class="row">
    <div class="col-md-7">
      <article <?php post_class(); ?>>
        <header>
          <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) )[0]; ?> " alt="">
          <?php get_template_part('templates/entry-meta'); ?>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <hr class="trp-single-post-divider">
        <?php comments_template('/templates/comments.php'); ?>
      </article>
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
<?php endwhile; ?>