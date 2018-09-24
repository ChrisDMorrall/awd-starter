<?php get_header();  ?>


        <h1>Search Results for:
        <?php	echo get_search_query(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

              <?php the_post_thumbnail(); ?>
                <?php the_title(); ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read more</a>
    <?php endwhile;  endif;?>

  <?php
  the_posts_pagination(
    array(
    'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    )
  ); ?>

<?php get_footer(); ?>
