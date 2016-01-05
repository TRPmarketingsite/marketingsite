<?php
	/* Template Name: Home */
?>

<div class="trp-home-masthead">
	<div class="trp-hero-overlay"></div>
	<video id="trp-video" muted autoplay loop poster="<?= get_stylesheet_directory_uri() ?>/assets/images/video-poster.jpg">
		<source src="<?= get_stylesheet_directory_uri() ?>/assets/images/trp-video2.mp4">
	</video>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2 col-sm-12 col-sm-offset-0 trp-home-masthead-text">
				<h1>
					Find the right bed for your patient. <strong>The Right Place.</strong>
					<a href="<?= trp_get_contact_url() ?>" class="trp-button">
						Start Using The App
					</a>
				</h1>
			</div>
		</div>
	</div>
</div>

<div class="trp-home-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="trp-intro-text">
					<h2>
						40% of patients discharged from the hospital require post-acute care
					</h2>
					<p>
						 Introducing <strong>The Right Place</strong>: a communication solution that empowers hospitals and post-acute providers to match the right patient in the right place of care quickly and efficiently.
					</p>
				</div>
			</div>
			<div class="col-md-7">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/hero.png" alt="">
			</div>
		</div>
	</div>
	<hr class="trp-home-intro-separator">
</div>

<div class="trp-features container text-center">
		<h2>
			The Right Place for your facility
		</h2>
		<div class="row">
			<p class="trp-features-p col-md-4 col-md-offset-4">
				We built custom applications for each type of facility and their specific needs.
			</p>
		</div>
		<div class="row">
		<div class="col-md-4 col-xs-12 trp-features-hospitals">
			<div class="trp-feature-helper"></div>
			<div class="trp-feature">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/hospitals-logo.png" alt="">
				<h4>
					HOSPITALS
				</h4>
				<p>
					Hospital Case Managers can quickly search and identify available SNFs by capabilities and needs of the patient
				</p>
				<a href="#">
					Learn More
				</a>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 trp-features-facilities">
			<div class="trp-feature-helper"></div>
			<div class="trp-feature">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/nursing-logo.png" alt="">
				<h4>
					SKILLED NURSING FACILITIES
				</h4>
				<p>
					Easily manage your beds and make better, faster referral decisions using real-time data
				</p>
				<a href="">
					Learn More
				</a>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 trp-features-orgs">
			<div class="trp-feature-helper"></div>
			<div class="trp-feature">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/aco.png" alt="">
				<h4>
					Accountable Care Orgs
				</h4>
				<p>
					Track patients through auto-generated real time alerts and ACO patient dashboard
				</p>
				<a href="#">
					Learn More
				</a>
			</div>
		</div>
	</div>
</div>

<div class="trp-mobile-app">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>
					In health care, we believe patient and data security is crucial
				</h2>
				<ul>
					<li>
						<i class="icon-check-square-o"></i>
						<span>
							HIPAA compliant security protocols
						</span>
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						<span>
							State-of-the-art 256 bit encryption
						</span>
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						<span>
							SSL security
						</span>
					</li>
				</ul>
			</div>
			<div class="col-md-4 col-xs-12 trp-aco-section-2-img">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/mobile-app.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="trp-mobile-app-analytics">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/analytics.png" alt="">
			</div>
			<div class="col-md-5">
				<h2>
					See data in real time
				</h2>
				<ul>
					<li>
						<i class="icon-check-square-o"></i>
						<span>
							Our built-in analytics helps you run your business more efficiently
						</span>
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						<span>
							Learn from the data trends including occupancy, referral volume, current mix of payer source, average length of stay, gender mix,
						</span>
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						<span>
							Access to data whenever you need it. Smart. Simple. Powerful.
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<hr>
</div>

<div class="trp-testimonials text-center">
	<?php 
	$testimonials = query_posts(array('post_type' => 'testimonial','post_status' => 'publish'));

	if (count($testimonials)) {
		shuffle($testimonials);
		$testimonial = $testimonials[0];
	}

	$trp_testimonial = get_post_meta( $testimonial->ID, 'trp-testimonial', true );
	$trp_testimonial_name = get_post_meta( $testimonial->ID, 'trp-testimonial-name', true );
	$trp_testimonial_hospital = get_post_meta( $testimonial->ID, 'trp-testimonial-hospital', true );

	?>
	<div class="container">
		<i class="icon-quote"></i>
		<h3 class="trp-testimonial-title">
			<?= $trp_testimonial ?>
		</h3>
		<span class="trp-testimonial-name">
			<?= $trp_testimonial_name ?>
		</span>
		<span class="trp-testimonial-hospital-name">
			<?= $trp_testimonial_hospital ?>
		</span>
	</div>
</div>

<div class="trp-use-today">
	<div class="container text-center">
		<h2>
			Start Using The Right Place Today
		</h2>
		<span>
			It’s time to make your life easier.
		</span>
		<a href="<?= trp_get_contact_url() ?>" class="trp-button">
			Let’s Get Started
		</a>
	</div>
</div>