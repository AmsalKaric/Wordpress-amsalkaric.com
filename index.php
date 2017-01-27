<?php get_header(); ?>

  <div class="blog-header">
    <h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1>
    <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
  </div>
  
  <div class="row">

    <div class="col-sm-8 blog-main">

      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
      endwhile; ?>

      <nav>
        <ul class="pager">
          <li><?php next_posts_link( 'Previous' ); ?></li>
          <li><?php previous_posts_link( 'Next' ); ?></li>
        </ul>
      </nav>

      <? endif; ?>

    </div><!-- /.blog-main -->
    <?php get_sidebar(); ?>
  </div><!-- /.row -->
<?php get_footer(); ?>