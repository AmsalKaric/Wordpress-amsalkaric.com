<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4><b>Search Content</b></h4>
    <?php get_search_form(); ?>
  </div>
  <div class="sidebar-module sidebar-module-inset">
    <h4><b>Recent Comments</b></h4>
      <?php $args = array(
        'number' => 5,

      );
               
      $comments = get_comments($args);
      if (!empty($comments)) {
        foreach ($comments as $comment) {
            // Output comments etc here
          $al = get_comment_author_url();
          $fp = $comment->comment_author;
          if ($al) {
            $fp = '<a href="'.$al.'">'.$comment->comment_author.'</a>';
          }
          echo '<p>'.$fp.' on <a href="'.get_comment_link( $comment ).'">'.get_the_title($comment->comment_post_ID).'</a></p>';
        }
      } else {
        echo '<p>No comments found</p>';
      }?>
  </div>
  <div class="sidebar-module">
    <h4><b>Archives</b></h4>
    <ol class="list-unstyled">
      <?php wp_get_archives('type=monthly'); ?>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->