<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/css/blog.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?>
  </head>

  <body>

    <header class="site-header" itemscope="" itemtype="http://schema.org/WPHeader">
      <div class="wrap">
        <div class="site-avatar">
          <a href="./">
            <img alt="" src="<?php bloginfo('template_directory');?>/images/profile.jpg" srcset="<?php bloginfo('template_directory');?>/images/profile.jpg" class="avatar avatar-224 photo" height="224" width="224">
          </a>
        </div>
        <div class="title-area">
          <p class="site-title" itemprop="headline">
            <a href="<?php bloginfo('wpurl');?>">Amsal Karic</a>
          </p>
          <p class="site-description" itemprop="description">Utopian Monolith Blog</p>
        </div>
        <div class="widget-area header-widget-area">
          <section id="nav_menu-2" class="widget widget_nav_menu">
            <div class="widget-wrap">
              <nav class="nav-header" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                <div id="responsive-menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <ul id="menu-top" class="menu nav-menu responsive-menu">
                  <li id="menu-item-119" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-119">
                    <a href="./about-amsal-karic" itemprop="url"><span itemprop="name">About Me</span></a>
                    <a href="./" itemprop="url"><span itemprop="name">Blog</span></a>
                    <!--<ul class="sub-menu">
                      <li id="menu-item-3306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3306">
                        <a href="#" itemprop="url">
                          <span itemprop="name">Sub item 1</span>
                        </a>
                      </li>
                      <li id="menu-item-1327" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1327">
                        <a href="#" itemprop="url">
                          <span itemprop="name">Sub item 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120">
                    <a href="#" itemprop="url">
                      <span itemprop="name">Item 3</span>
                    </a>
                  </li>
                </ul>-->
              </nav>
            </div>
          </section>
          <section id="simple-social-icons-2" class="widget simple-social-icons">
            <div class="widget-wrap">
              <h4 class="widget-title widgettitle">Contact info</h4>
              <ul class="aligncenter">
                <li class="ssi-gplus">
                  <a href="http://plus.google.com/+AmsalKaric" target="_blank">
                    <i class="fa fa-google-plus fa-6" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="ssi-linkedin">
                  <a href="http://fi.linkedin.com/in/simoahava" target="_blank">
                    <i class="fa fa-linkedin fa-6" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="ssi-rss">
                  <a href="https://www.simoahava.com/feed/" target="_blank">
                    <i class="fa fa-envelope-o fa-6" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="ssi-twitter">
                  <a href="http://www.twitter.com/SimoAhava" target="_blank">
                    <i class="fa fa-twitter fa-6" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="ssi-twitter">
                  <a href="http://www.twitter.com/SimoAhava" target="_blank">
                    <i class="fa fa-instagram fa-6" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section id="text-2" class="widget widget_text">
            <div class="widget-wrap">
              <div class="textwidget">amsal (at) amsalkaric.com</div>
            </div>
          </section>
        </div>
      </div>
    </header>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>