<?php
	/* Template Name: Contact */
?>

<div class="trp-template-header">
	<div class="trp-template-header-content container">
		<h1>Contact</h1>
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
				<input type="text" id="name" placeholder="name">
				<input type="text" id="email" placeholder="email address">
				<textarea name="message" id="" cols="30" rows="9"></textarea>
				<input type="submit" value="Contact us now to learn more">
			</form>
		</div>
	</div>

	<div class="trp-contact-badges row">
		<hr class="col-md-offset-3 col-md-6">
		<div class="col-md-offset-2 col-md-2">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/badge-1.jpg' ?>" alt="Beth Israel Deaconess Medical Center">
		</div>
		<div class="col-md-2">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/badge-2.jpg' ?>" alt="Atrius Health">
		</div>
		<div class="col-md-2">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/badge-3.jpg' ?>" alt="Harvard Medical School Teaching Hospital">
		</div>
		<div class="col-md-2">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/badge-4.jpg' ?>" alt="Beth Israel Deaconess Care Organization">
		</div>
	</div>
</div>