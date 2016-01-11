<?php
	/* Template Name: Contact */
?>

<div class="trp-template-header">
	<div class="trp-hero-overlay"></div>
	<img class="trp-about-banner" src="<?php echo get_template_directory_uri() . '/assets/images/contact-banner.jpg' ?>" alt="">
	<div class="trp-template-header-content container trp-about-banner-text">
		<div class="row">
			<div class="col-md-12">
				<h1>
					Contact
				</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row trp-contact">
		<div class="col-md-8 trp-contact-offices">
			<h2>
				We’d love to hear from you!
			</h2>
			<span class="trp-contact-number">
				Call <strong><a href="tel:8774355283">(877) 435-5283</a></strong>, Mon-Fri 9am-5pm EST
			</span>
			<div class="row">
				<div class="col-md-6 align-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/boston-office.jpg' ?>" alt="">
					<span class="trp-office-label">Boston Office</span>
					<span>5 Forest St.</span>
					<span>Lexington, MA 02421</span>
				</div>
				<div class="col-md-6 align-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/houston-office.jpg' ?>" alt="">
					<span class="trp-office-label">Houston Office</span>
					<span>675 Bering St.</span>
					<span>Houston, Texas 77057</span>
				</div>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-3 trp-contact-form">
			<h4>
				send us a message
			</h4>
			<form action="">
				<div class="trp-contact-field-wrapper">
					<i class="icon-user"></i>
					<input type="text" id="name" placeholder="name">
				</div>
				<div class="trp-contact-field-wrapper">
					<i class="glyphicon glyphicon-envelope"></i>
					<input type="text" id="email" placeholder="email address">
				</div>
				<div class="trp-contact-field-wrapper">
					<i class="glyphicon glyphicon-pencil"></i>
					<textarea name="message" id="" cols="30" rows="9" placeholder="message"></textarea>
				</div>
				<input type="submit" value="Contact us now to learn more">
			</form>
		</div>
	</div>
</div>