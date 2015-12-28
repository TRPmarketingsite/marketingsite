<?php
	/* Template Name: Home */
?>

<div class="trp-home-masthead">
	<div class="trp-home-masthead-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>
					Find the right bed for your patient. <strong>The Right Place.</strong>
					<a href="#" class="trp-button">
						Start Using The App
					</a>
				</h1>
			</div>
			<div class="col-md-offset-1 col-md-7">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/hero.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="trp-features container text-center">
	<h2>
		40% of patients discharged from the hospital require post-acute care
	</h2>
	<p>
		 Introducing <strong>The Right Place</strong>: a communication solution that empowers hospitals and post-acute providers to match the right patient in the right place of care quickly and efficiently.
	</p>
	<div class="row">
		<div class="col-sm-4 col-xs-12 trp-features-hospitals">
			<div class="trp-feature-helper"></div>
			<div class="trp-feature">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/1.jpg" alt="">
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
		<div class="col-sm-4 col-xs-12 trp-features-facilities">
			<div class="trp-feature-helper"></div>
			<div class="trp-feature">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/2.jpg" alt="">
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
		<div class="col-sm-4 col-xs-12 trp-features-orgs">
			<div class="trp-feature-helper"></div>
			<div class="trp-feature">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/3.jpg" alt="">
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
						HIPAA compliant security protocols
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						State-of-the-art 256 bit encryption
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						SSL security
					</li>
				</ul>
			</div>
			<div class="col-md-4">
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
						Our built-in analytics helps you run your business more efficiently
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						Learn from the data trends including occupancy, referral volume, current mix of payer source, average length of stay, gender mix,
					</li>
					<li>
						<i class="icon-check-square-o"></i>
						Access to data whenever you need it. Smart. Simple. Powerful.
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
		<a href="#" class="trp-button">
			Let’s Get Started
		</a>
	</div>
</div>