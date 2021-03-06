<?php 

/**
 * Template Name: Solutions Page
 */

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php echo do_shortcode( getField('banner') ); ?>

    <?php load_template( dirname(__FILE__) . '/inc/menu-solutions-page.php' ); ?>

    <?php the_content( ); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
    

<?php load_template( dirname(__FILE__) . '/inc/people-saying.php' ); ?>

<?php load_template( dirname(__FILE__) . '/inc/marketing-data-experts.php' ); ?>

<?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php' ); ?>

<?php get_footer(); ?>
