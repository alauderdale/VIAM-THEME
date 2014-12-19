<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

      <footer id='global-footer'>
        <section>
          <div class='container'>
            <div class='col-sm-4 col-xs-12'>
              <div class='logo-container'>
                <a class='logo quarter-margin-bottom' href='#'></a>
                <p class='copyright'>
                  © VIAM 2014
                </p>
              </div>
            </div>
            <div class='col-sm-2 col-xs-6'>
              <h6>
                Background
              </h6>
              <ul class='list-unstyled footer-main-nav'>
                <?php wp_nav_menu( array( 
                'theme_location' => 'background', 
                'container' => false, 
                'menu_class' => 'list-unstyled footer-main-nav',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
              </ul>
            </div>
            <div class='col-sm-2 col-xs-6'>
              <h6>
                Industries
              </h6>
              <?php wp_nav_menu( array( 
                'theme_location' => 'industries', 
                'container' => false, 
                'menu_class' => 'list-unstyled footer-main-nav',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
            </div>
            <div class='col-sm-2 col-xs-6'>
              <h6>
                Services
              </h6>
              <?php wp_nav_menu( array( 
                'theme_location' => 'services', 
                'container' => false, 
                'menu_class' => 'list-unstyled footer-main-nav',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
            </div>
            <div class='col-sm-2 col-xs-6'>
              <h6>
                Support
              </h6>
              <?php wp_nav_menu( array( 
                'theme_location' => 'support', 
                'container' => false, 
                'menu_class' => 'list-unstyled footer-main-nav',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
            </div>
          </div>
        </section>
      </footer>


<?php wp_footer(); ?>

</body>
</html>