<?php
/*
Template Name: Simple Page
*/
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>
    <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-2"></div>
    			<div class="col-md-8">
						<?php get_template_part( 'content', 'page' ); ?>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
