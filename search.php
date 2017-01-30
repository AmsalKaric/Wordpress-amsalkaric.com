<?php get_header(); ?>

    <div class="row row-single">
      <div class="col-sm-8">

        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display')) {
                  bcn_display();
                }?>
        </div>

        <?php 
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                     get_template_part('content', get_post_format());
                }
                
            } else {?>
                <div><h3>Sorry, no content matched your criteria.</h3></div>
        <?php } ?>
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
    </div> <!-- /.col -->
    <?php get_sidebar(); ?>
  </div> <!-- /.row -->
<?php get_footer(); ?>