<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package boiler
 */

get_header(); ?>



		<section class='inverse-section text-center page-header-section' style='background-image: url(<?php the_field('hero_background_image');?>);'>
		  <div class='container'>
		    <div class='row'>
		      <div class='col-sm-1'></div>
		      <div class='col-sm-10'>
		        <h2>
		          <?php _e( 'Oops! That page can&rsquo;t be found.', 'boiler' ); ?>
		        </h2>
		      </div>
		      <div class='col-sm-1'></div>
		    </div>
		  </div>
		</section>
		<section>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 text-center">
    				<p>
							Let's head home and try again.
						</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-lg btn-primary">
							Take Me Home
						</a>
					</div>
				</div>
			</div>
		</section>





<?php get_footer(); ?>

<?php get_footer(); ?>