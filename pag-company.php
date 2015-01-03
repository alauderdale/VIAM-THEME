<?php
/*
Template Name: Company
*/
?>

<?php get_header(); ?>


<section class="inverse-section text-center parallax-window page-header-section" data-parallax="scroll" data-image-src="<?php the_field('hero_background_image');?>" data-positionX="center" data-positionY="center">
<!-- <section class='inverse-section text-center page-header-section' style='background:url(<?php bloginfo( 'template_url' ); ?>/images/company/header_bg_2.png) no-repeat center, url(<?php the_field('hero_background_image');?>) no-repeat scroll center top; background-size:cover;'> -->
  <div class='container'>
    <div class='row'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <h1>
          <?php the_title(); ?>
        </h1>
        <p class="hero-sub-text">
          <?php the_field('header_sub_text');?>
        </p>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</section>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1 col-lg-2'></div>
      <div class='col-md-10 col-lg-8'>
        <?php while ( have_posts() ) : the_post(); ?>
      	<?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
      <div class='col-md-1 col-lg-2'></div>
    </div>
  </div>
</section>
<!-- <section class='inverse-section text-center bg-cover' style='background-image:url(<?php bloginfo( 'template_url' ); ?>/images/company/values_slider_bg.png);'> -->
  <section class="inverse-section text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/images/company/values_slider_bg.png" data-positionX="center" data-positionY="center">
  <div class='container'>
    <div class='row'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <h1>
          Core Values
        </h1>
        <p class='lead no-margin-bottom'>
          <?php the_field('core_values_text');?>
        </p>
      </div>
      <div class='col-sm-1'></div>
    </div>
    <div class='row'>
      <div class='col-sm-12'>
        <div id='company_tabs' role='tabpanel'>
          <!-- Nav tabs -->
          <ul class='nav nav-tabs margin-top' role='tablist'>
          	<?php $valueLoopOne = new WP_Query( array( 'post_type' => 'core_value') ); ?>
						<?php while ( $valueLoopOne->have_posts() ) : $valueLoopOne->the_post(); ?>
	            <li role='presentation'>
	              <a aria-controls=' <?php the_ID(); ?> ' data-toggle='tab' href='#<?php the_ID(); ?> ' role='tab'>
	                <?php the_post_thumbnail(); ?>
	              </a>
	            </li>
            <?php endwhile; ?>
          </ul>
          <!-- Tab panes -->
          <div class='row'>
            <div class='col-sm-1'></div>
            <div class='col-sm-10'>
              <div class='tab-content margin-top'>
								<?php while ( $valueLoopOne->have_posts() ) : $valueLoopOne->the_post(); ?>

	                <div class='tab-pane fade' id='<?php the_ID(); ?>' role='tabpanel'>
	                  <h5 class='text-uppercase'>
	                     <?php the_title(); ?> 
	                  </h5>
	                   <?php the_content(); ?> 
	                </div>

                <?php endwhile; ?>
              </div>
            </div>
            <div class='col-sm-1'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class='no-padding-bottom founder-section'>
  <div class='container'>
    <div class='row double-padding-bottom'>
      <div class='col-md-7 col-sm-9'>
        <div class='text-container'>
          <h2>
            Our Founder
          </h2>
          <h5 class='text-uppercase'>
            Jeff Johnson
          </h5>
          <?php while ( have_posts() ) : the_post(); ?>
          	<?php the_field('founder_info');?>
        	<?php endwhile; // end of the loop. ?>
        </div>
      </div>
      <div class='col-md-5 col-sm-3'></div>
    </div>
  </div>
</section>
<section class='apart-section'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
      	<?php while ( have_posts() ) : the_post(); ?>
      	<?php the_field('apart_content');?>
      	<?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
</section>
<section class='icons-section'>
  <div class='container'>
  	<?php while ( have_posts() ) : the_post(); ?>
      <?php the_field('landscape_content');?>
     <?php endwhile; // end of the loop. ?>
  </div>
</section>





<?php get_footer(); ?>
