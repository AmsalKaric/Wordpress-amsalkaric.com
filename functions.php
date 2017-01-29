<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

   wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

  wp_enqueue_style( 'blog', get_template_directory_uri().'/css/blog.css' );

  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_script( 'primary', get_template_directory_uri().'/js/primary.js' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );



// Custom settings
function header_settings_add_menu() {
  add_menu_page('Header Settings', 'Header Settings', 'manage_options', 'header-settings', 'header_settings_page', null, 99);
}
add_action('admin_menu', 'header_settings_add_menu');

// Create Custom Global Settings
function header_settings_page() { ?>
  <div class="wrap">
    <h1>Header Settings</h1>
    <form method="post" action="options.php">
        <?php
          settings_fields('section-1');
          do_settings_sections('theme-options-1');
        ?>
        <div style="height:20px;"></div>
        <?php
          settings_fields('section');
          do_settings_sections('theme-options');
          submit_button(); 
        ?>          
    </form>
  </div>
<?php }

function logo_display()
{
  ?>
        <input type="file" name="logo" /> 
        <?php echo get_option('logo'); ?>
   <?php
}

function handle_logo_upload()
{
  if(!empty($_FILES["demo-file"]["tmp_name"]))
  {
    $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
      $temp = $urls["url"];
      return $temp;   
  }
  return $option;
}

// Google plus
function setting_google_plus() { ?>
  <input type="text" name="google_plus" id="google_plus" value="<?php echo get_option('google_plus'); ?>" />
<?php }
// Linked in
function setting_linked_in() { ?>
  <input type="text" name="linked_in" id="linked_in" value="<?php echo get_option('linked_in'); ?>" />
<?php }
// Github
function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }
// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }
// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
<?php }

function header_settings_page_setup() {
  //Section - Images
  add_settings_section('section-1', 'Images', null, 'theme-options-1');

  add_settings_field("logo", "Logo", "logo_display", "theme-options-1", "section-1");
  add_settings_field('google_plus', 'Google Plus URL', 'setting_google_plus', 'theme-options-1', 'section-1');

  register_setting("section-1", "logo", "handle_logo_upload");
  register_setting('section-1', 'google_plus');

  //Section - Social Links
  add_settings_section('section', 'Social Links', null, 'theme-options');

  add_settings_field('google_plus', 'Google Plus URL', 'setting_google_plus', 'theme-options', 'section');
  add_settings_field('linked_in', 'Linked In URL', 'setting_linked_in', 'theme-options', 'section');
  add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');

  register_setting('section', 'google_plus');
  register_setting('section', 'linked_in');
  register_setting('section', 'github');
  register_setting('section', 'twitter');
  register_setting('section', 'instagram');
}
add_action('admin_init', 'header_settings_page_setup');



// Support Featured Images
add_theme_support( 'post-thumbnails' );



// Custom Post Type
function create_my_custom_post() {
  register_post_type( 'my-custom-post',
      array(
      'labels' => array(
          'name' => __( 'My Custom Post' ),
          'singular_name' => __( 'My Custom Post' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
          'title',
          'editor',
          'thumbnail',
          'custom-fields'
      )
  ));
}
add_action( 'init', 'create_my_custom_post' );