<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?>


<section class='inverse-section text-center page-header-section' style='background-image:url(<?php the_field('hero_background_image');?>);'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-1'></div>
              <div class='col-sm-10'>
                <h1>
                  Services
                </h1>
              </div>
              <div class='col-sm-1'></div>
            </div>
          </div>
        </section>
        <section class='subnav-container'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-2'></div>
              <div class='col-sm-8'>
                <?php wp_nav_menu( array( 
                'theme_location' => 'services', 
                'container' => false, 
                'menu_class' => 'nav nav-pils nav-justified global-subnav',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                )); ?>
              </div>
              <div class='col-sm-2'></div>
            </div>
          </div>
        </section>
        <section>
          <div class='container'>
            <div class='row'>
              <div class='col-md-7'>
                <h2>
                  <?php the_title(); ?>
                </h2>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
              </div>
              <div class='col-md-5'>
                <div class='text-center'>
                  <?php the_post_thumbnail('full', array('class' => 'img-responsive margin-auto padded double-padding-left content-img')); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php the_field('services_sub_section_one');?>
        





<?php get_footer(); ?>
