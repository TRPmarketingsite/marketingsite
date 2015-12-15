<footer class="trp-footer content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-1">
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
        <div class="col-md-1">
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
      <div class="col-md-3 col-md-push-7 social-menu">
        <nav role="navigation">
          <?php
          if (has_nav_menu('footer_navigation_3')) :
            $menuParameters = array(
                'theme_location' => 'footer_navigation_3',
                'menu_class' => 'nav rnvt-footer pull-left',
                'container' => false,
                'depth' => 0
            );

            wp_nav_menu( $menuParameters );
          endif;
          ?>
        </nav>
      </div>
    </div>
      <div class="row bottom-footer">
          <div class="col-md-6">
              <p>
                  The Right Place is a Division of Cooperative Health Solutions
              </p>
          </div>
          <div class="col-md-3 col-md-push-3 terms">
              <p>© 2015. All Rights Reserved.</p>
              <ul>
                  <li>
                      Terms of Use
                  </li>
                  <li>
                      Privacy Policy
                  </li>
              </ul>
          </div>
      </div>
  </div>
</footer>
