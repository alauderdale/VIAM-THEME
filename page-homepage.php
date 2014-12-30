<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


<!-- <section class='slider bg-cover inverse-secion' style='background:url(<?php bloginfo( 'template_url' ); ?>/images/slider_bg.png)  no-repeat scroll center ; background-size:cover;'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <h1 class='quarter-margin-bottom'>
          We Bring Best-In-Class
          <br>
          Connections
        </h1>
        <h2>
          to Parks & Resorts 
        </h2>
        <a class='btn btn-lg btn-primary'>
          Learn More
        </a>
      </div>
    </div>
  </div>
</section> -->
<?php layerslider(1) ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'content', 'offer' ); ?>



	
<?php get_footer(); ?>
