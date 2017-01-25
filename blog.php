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
  </head>

  <body>

    <header class="site-header" itemscope="" itemtype="http://schema.org/WPHeader">
      <div class="wrap">
        <div class="site-avatar">
          <a href="<?php bloginfo('template_directory');?>/index.html">
            <img alt="" src="<?php bloginfo('template_directory');?>/images/profile.jpg" srcset="images/profile.jpg" class="avatar avatar-224 photo" height="224" width="224">
          </a>
        </div>
        <div class="title-area">
          <p class="site-title" itemprop="headline">
            <a href="<?php bloginfo('template_directory');?>/index.html">Amsal Karic</a>
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
                    <a href="<?php bloginfo('template_directory');?>/aboutme.html" itemprop="url"><span itemprop="name">About Me</span></a>
                    <a href="<?php bloginfo('template_directory');?>/blog.html" itemprop="url"><span itemprop="name">Blog</span></a>
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
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <h2>Heading</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="clearfix"></div>

    <footer class="blog-footer">
      <p>"Look deep into nature, and then you will understand everything better."</p>
      <p>-Albert Einstein</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/primary.js"></script>
  </body>
</html>