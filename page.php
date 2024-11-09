
<?php get_header(); ?>
<section id="content">
  <div id="content-wrap" class="container row pt-3">
    <div id="main" class="col-md-9">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
      <h1><?php the_title(); ?></h1>
      <div class="mb-3" id="post-meta">
      <p>作成日時：<?php echo get_the_date(); ?></p>
      </div>
      <section>
        <?php the_content(); ?>
      </section>
  <?php
    endwhile;
  endif;
  ?>
</div>
</section>
<?php get_footer(); ?>