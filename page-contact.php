<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php get_template_part( 'content', 'offer' ); ?>

	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
