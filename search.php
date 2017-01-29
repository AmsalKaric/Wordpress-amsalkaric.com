<?php get_header(); ?>

	<div class="row row-single">
		<div class="col-sm-8">

			<?php 
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						get_template_part('content-single', get_post_format());

						if (comments_open() || get_comments_number()) {
						  comments_template();
						}
					}
				} else {?>
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
					    bcn_display();
					}?>
					</div>
					<div>Sorry, no content matched your criteria.</div>
			<?php  	}
			?>

		</div> <!-- /.col -->
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>