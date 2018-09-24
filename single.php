<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

  <?php get_template_part('template-parts/content','schema'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/content','prepost'); ?>
  <div class="container post-container">
  <div class="row">
  <main class="col-md-8">
    <?php default_image(); ?>
    <h1><?php the_title(); ?></h1>
<div class="categories">
    <?php
    $post_categories = wp_get_post_categories( get_the_id() );
    foreach($post_categories as $c){
        $cat = get_category( $c ); ?>
        <a href="<?php echo site_url() .'/category/'. $cat->slug; ?>"><?php echo $cat->name; ?></a>
      <?php
    }

?>
</div>
      <?php get_template_part( 'template-parts/content', 'repeater' ); ?>
      <?php get_template_part( 'template-parts/content', 'offers' ); ?>
      <div class="share">
        <h4 class="sharepost-title section-title">Share this post</h4>
        <div class="sharepost-conteiner grid-4"><?php get_template_part( 'template-parts/content', 'share' ); ?></div>
      </div>
      <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

      ?>
  </main>
  <aside class="col-md-4 sidebar">
    <?php get_sidebar(); ?>
  </aside>
</div>



  </div>


</article>

<?php endwhile;  endif;?>

<?php get_footer(); ?>
