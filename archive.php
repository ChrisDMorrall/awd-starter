<?php get_header();  ?>


        <?php	the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

              <?php the_post_thumbnail(); ?>
              <?php the_title(); ?>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Read More</a>

    <?php endwhile;  endif;?>

  <?php
  the_posts_pagination(
    array(
    'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    )
  ); ?>
<?php get_footer(); ?>
