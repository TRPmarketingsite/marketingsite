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
			<?php echo do_shortcode( '[contact-form-7 title="Contact form"]' ); ?>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function() {
	
	jQuery(document).on('click', ".wpcf7-submit", function() {
		
		jQuery(document).ajaxComplete( function(data) {
			jQuery('[aria-required=true].wpcf7-form-control').each(function() {
				if ( jQuery(this).hasClass('wpcf7-not-valid') ) {
					jQuery(this).parent().parent().addClass('trp-invalid-field');
					jQuery(this).parent().parent().removeClass('trp-valid-field');
				}
				else {
					jQuery(this).parent().parent().addClass('trp-valid-field');
					jQuery(this).parent().parent().removeClass('trp-invalid-field');
				}

			});

			if ( jQuery('form.wpcf7-form').hasClass('sent') ) {

				jQuery('body').append('<div id="trp-success-overlay"><div class="trp-success-overlay-helper"><p>Thank you for reaching out! We will be in touch very soon.<span>-The Right Place Team</span></p></div></div>');
				jQuery('#trp-success-overlay').hide().fadeIn('slow');

				setTimeout(function(){
					jQuery('#trp-success-overlay').fadeOut('slow', function(){ jQuery('#trp-success-overlay').remove(); });
				}, 5000);
			}
		});
	});

});
</script>