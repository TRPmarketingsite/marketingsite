<?php
	/* Template Name: Team */
?>

<div class="trp-template-header trp-aco-hero trp-about-hero">
	<img class="trp-about-banner trp-aco-hero-img" src="<?php echo get_template_directory_uri() . '/assets/images/team-banner.jpg' ?>" alt="">
	<div class="trp-template-header-content container trp-about-banner-text">
		<div class="row">
			<div class="col-md-12">
				<h1>
					Team
				</h1>
			</div>
		</div>
	</div>
</div>

<div class="trp-team">
	<div class="container">
		<p>
			The Right Place was founded by industry experts who are committed to improving patient placement and providing better outcomes for everyone involved. We have an experienced team of clinical and administrative healthcare experts as well as seasoned product designers, engineers, and marketers. We are a passionate team committed to building a great product and simplifying and improving this area of healthcare.
		</p>
		<h2>
			Team
		</h2>

		<div id="members" class="row">
			<?php
			$team_members = new WP_Query(
								array(	'post_type' => 'team_member',
										'posts_per_page' => -1, 
										'orderby' => 'menu_order',
										'order' => 'DESC'
									)
								);
			while ($team_members->have_posts()) : $team_members->the_post();
				$member_title = get_post_meta( $post->ID, 'trp-team-member-title', true);
				$member_bio = get_post_meta( $post->ID, 'trp-team-member-bio', true ); 
				$member_pic = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			<div class="col-md-4 col-sm-6 trp-team-member">
				<a href="<? the_permalink() ?>">
					<div class="trp-member-overlay-container">
						<div class="trp-member-overlay">
							<p>View profile</p>
							<p>></p>
						</div>
						<img src="<?= $member_pic ?>" alt="<? the_title(); ?>">
					</div>
				</a>
				<h4>
					<? the_title(); ?>
				</h4>
				<span>
					<?= $member_title ?>
				</span>
			</div>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>

<div class="trp-advisors">
	<div class="container">
		<h2>
			Advisors
		</h2>
		<div id="advisors" class="row">
			<?php
			$team_members = new WP_Query(
								array(
									'post_type' => 'advisor',
									'posts_per_page' => -1,
									'orderby' => 'menu_order',
									'order' => 'DESC'
								)
							);
			while ($team_members->have_posts()) : $team_members->the_post();
			?>
			<div class="col-lg-4 col-sm-6 trp-advisor">
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

<div class="trp-use-today">
	<div class="container text-center">
		<h2>
			Start Using <title class="trp-word-no-wrap">The Right Place</title> Today
		</h2>
		<span>
			It’s time to make your life easier.
		</span>
		<a href="<?= trp_get_contact_url() ?>" class="trp-button">
			Let’s Get Started
		</a>
	</div>
</div>