<footer class="trp-footer content-info">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h4>
					Navigate
				</h4>
			</div>
			<div class="col-xs-6">
				<h4 class="pull-right">
					Follow us
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-3">
				<nav role="navigation">
					<?php
					if (has_nav_menu('footer_navigation_1')) :
						$menuParameters = array(
							'theme_location' => 'footer_navigation_1',
							'menu_class' => 'nav rnvt-footer pull-left',
							'container' => false,
							'depth' => 0
						);
						wp_nav_menu( $menuParameters );
					endif;
					?>
				</nav>
			</div>
			<div class="col-md-1 col-xs-3">
				<nav role="navigation">
					<?php
					if (has_nav_menu('footer_navigation_2')) :
						$menuParameters = array(
							'theme_location' => 'footer_navigation_2',
							'menu_class' => 'nav rnvt-footer pull-left',
							'container' => false,
							'depth' => 0
						);

						wp_nav_menu( $menuParameters );
					endif;
					?>
				</nav>
			</div>
			<div class="col-md-3 col-md-push-7 col-xs-3 col-xs-push-3 social-menu">
				<nav role="navigation" class="pull-right">
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
			</div>
		</div>
		<div class="row bottom-footer">
			<div class="col-md-6 col-xs-12">
			    <p>
			        The Right Place is a Division of Cooperative Health Solutions
			    </p>
			</div>
			<div class="col-md-3 col-md-push-3 terms col-xs-12">
			    <p>© <?= date('Y') ?>. All Rights Reserved.</p>
			    <ul class="list-inline pull-right">
			        <li>
			        	<a href="#">
			            	Terms of Use
			            </a>
			        </li>
			        <li>|</li>
			        <li>
			        	<a href="#">
			            	Privacy Policy
			            </a>
			        </li>
			    </ul>
			</div>
		</div>
	</div>
</footer>