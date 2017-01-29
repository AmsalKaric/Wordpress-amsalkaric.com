<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="blog-post-single">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php if (has_post_thumbnail()) {
		$post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
        echo '<div class="post-image">
            <img title="'.the_title().'" alt="thumb image" class="wp-post-image" src="'.$post_thumbnail_url.'" style="width:100%; height:auto;">
        </div>';
	}
 	the_content(); ?>
</div><!-- /.blog-post -->