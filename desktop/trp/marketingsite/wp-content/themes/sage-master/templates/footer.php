<footer class="trp-footer content-info">
	<div class="container">
		<div class="bottom-footer">
			<!-- Latest -->
			<div class="col-md-6">
				<nav role="navigation navigation-terms">
					<ul class="list-inline">
						<li>
							<a href="https://www.linkedin.com/company/the-right-place-trp-" target="_blank">
								<i class="icon-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/the_right_place" target="_blank">
								<i class="icon-twitter"></i>
							</a>
						</li>
					</ul>
				</nav>
				<p>
					The Right Place is a Division of Cooperative Health Solutions
				</p>
				<p class="trp-footer-copyright">
					© <?= date('Y') ?>. All Rights Reserved.
					<ul class="list-inline">
						<li>
							<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Terms of use' ) ) ); ?>">
								Terms of Use
							</a>
						</li>
						<li>|</li>
						<li>
							<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Privacy Policy' ) ) ); ?>">
								Privacy Policy
							</a>
						</li>
					</ul>
				</p>
			</div>
			<div class="col-md-6">
				<form action="http://therightplace.us8.list-manage1.com/subscribe/post?u=78a5b5482ee9af9e8491780f1&amp;id=5fca29d77f"
					class="form-horizontal validate" id="mc-embedded-subscribe-form" method="post" 
					name="mc-embedded-subscribe-form" novalidate="novalidate" target="_blank">
					<label for="mce-EMAIL">Want to hear about our progress?</label>
					<input class="email" id="mce-EMAIL" name="EMAIL" placeholder="Email address" required="required" value="" type="email">
					<input class="button" id="mc-embedded-subscribe" name="subscribe" value="Subscribe" type="submit">
				</form>
			</div>
		</div>
	</div>
</footer>