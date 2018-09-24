<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">Avanti Web Design - Wordpress 4.9.8 with Bootsrap 4.1.3 Starter Template</h3>

    </div>
  </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile;  endif;?>

<?php get_footer(); ?>
