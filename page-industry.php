<?php
/*
Template Name: Industry
*/
?>

<?php get_header(); ?>


      <!-- <section class="inverse-section text-center page-header-section parallax-window" data-parallax="scroll" data-image-src="<?php the_field('hero_background_image');?>" data-positionX="center" data-positionY="center"> -->

        <section class='inverse-section text-center page-header-section' style='background-image: url(<?php the_field('hero_background_image');?>);'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-1'></div>
              <div class='col-sm-10'>
                <h1>
                  Industries
                </h1>
              </div>
              <div class='col-sm-1'></div>
            </div>
          </div>
        </section>
        <section class='subnav-container'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
              	<?php wp_nav_menu( array( 
			          'theme_location' => 'industries', 
			          'container' => false, 
			          'menu_class' => 'nav nav-pils nav-justified global-subnav',
			          'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
			          )); ?>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-5'>
                <div class='text-center'>
                  <?php the_post_thumbnail('full', array('class' => 'img-responsive margin-auto margin-bottom half-padding-top content-img')); ?>
                </div>
              </div>
              <div class='col-sm-7'>
                <h2><?php the_title(); ?></h2>
              	<?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </section>
        
        <section class="case-study parallax-window" data-parallax="scroll" data-image-src="<?php the_field('case_study_bg');?>" data-positionX="center" data-positionY="center">
          <div class='container'>
            <div class='row'>
              <div class='col-sm-2'></div>
              <div class='col-sm-8'>
                <h2>
                  Case Study
                </h2>
                <?php the_field('case_study_content');?>
              </div>
              <div class='col-sm-2'></div>
            </div>
          </div>
        </section>
     
        <section>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-7'>
                <h3>
                  <?php the_field('industry_sub_text_title');?>
                </h3>
                <?php the_field('industry_sub_text');?>
              </div>
              <div class='col-sm-5'>
                <div class='padded'>
                  <img class='img-responsive content-img' src='<?php the_field('industry_sub_icon');?>'>
                </div>
              </div>
            </div>
          </div>
        </section>








<?php get_footer(); ?>