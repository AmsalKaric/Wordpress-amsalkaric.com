<?php get_header(); ?>

  <div class="blog-header">
    <h1 class="blog-title"><?php echo get_bloginfo('name'); ?></h1>
    <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
  </div>
  
  <div class="row">
    <div class="col-sm-8 blog-main">

      <?php 
      if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
      endwhile; ?>

      <nav>
        <ul class="pager">
          <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
              'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
              'format' => '?paged=%#%',
              'current' => max(1, get_query_var('paged')),
              'total' => $wp_query->max_num_pages
            ) );
          ?>
        </ul>
      </nav>

      <? endif; ?>

    </div><!-- /.col -->
    <?php get_sidebar(); ?>
  </div><!-- /.row -->
<?php get_footer(); ?>