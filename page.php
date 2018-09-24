<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

    <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
  <?php the_title(); ?>
<?php endwhile;  endif;?>

<?php get_footer(); ?>
