<?php
	/* Template Name: Team */
?>

<div class="trp-template-header">
	<div class="trp-template-header-content container">
		<h1>Team</h1>
	</div>
</div>
<div class="trp-team-nav">
	<div class="container">
		<a href="#">Team</a>
		<a href="#">Advisors</a>
	</div>
</div>

<div class="container">
	<div class="row trp-team">
		<p>
			The Right Place was founded by industry experts who are committed to improving patient placement and providing better outcomes for everyone involved. We have an experienced team of clinical and administrative healthcare experts as well as seasoned product designers, engineers, and marketers. We are a passionate team committed to building a great product and simplifying and improving this area of healthcare.
		</p>
	</div>
	<h2>Team</h2>

	<?php
	$team_members = new WP_Query(array('post_type' => 'team_member', 'posts_per_page' => -1 ));
	while ($team_members->have_posts()) : $team_members->the_post();
		$member_title = get_post_meta( $post->ID, 'trp-team-member-title', true);
		$member_bio = get_post_meta( $post->ID, 'trp-team-member-bio', true ); 
		$member_pic = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>
	<div class="col-md-4 trp-team-member">

		<img src="<?= $member_pic ?>" alt="<? the_title(); ?>">
		<h4>
			<? the_title(); ?>
		</h4>
		<span>
			<?= $member_title ?>
		</span>
	</div>
	<?php
	endwhile;
	?>
</div>

<div class="trp-advisors">
	<div class="container">
		<div class="row">
			<h2>Advisors</h2>

			<?php
			$team_members = new WP_Query(array('post_type' => 'advisor', 'posts_per_page' => -1 ));
			while ($team_members->have_posts()) : $team_members->the_post();
			?>
			<div class="col-md-4">
				<h4>
					<? the_title(); ?>
				</h4>
				<span>
					<? the_content() ?>
				</span>
			</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
</div>