<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="width=1280">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

  <style type="text/css" media="all">
  <!--
  /*--><![CDATA[/*><!--*/

  #views-slideshow-bxslider-1.views-slideshow-bxslider .bx-wrapper .bx-controls-direction a {
    z-index: 499;
  }

  #views-slideshow-bxslider-1.views-slideshow-bxslider li img {
    margin-right: auto;
  }

  #views-slideshow-bxslider-1.views-slideshow-bxslider .bx-wrapper .bx-caption {
    background: rgba(80, 80, 80, 0.75)
  }
  /*]]>*/

  -->
  </style>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


</head>



<body  class="html front not-logged-in no-sidebars page-node page-node- page-node-1 node-type-main-page" <?php body_class(); ?>>
  <div><img src="<?php echo get_template_directory_uri(); ?>/img/35055460" style="position:absolute; left:-9999px;" alt=""></div>

  <div id="skip-link">
    <a href="http://bsc.global/#main-content" class="element-invisible element-focusable">Перейти к основному содержанию</a>
  </div>
  <header id="header" role="banner" class="clearfix">
    <div class="wrapper" >
      <section id="block-menu-menu-top-menu" class="block block-menu">
      <?php wpeTopHeadNav(); ?>

      </section>
      <!-- /.block -->
      <section id="block-block-1" class="block block-block">
        <div class="content">
          <a href="/">
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" style="height:103px; width:362px">
          </a>
        </div>
      </section>
      <!-- /.block -->
      <section id="block-block-2" class="block block-block">
        <div class="content">
          <div>
            <div class="free-call">Бесплатный звонок по всей России</div>
            <div style="line-height: 1;"><?php the_field('telepfon', 7); ?></div>
          </div>
        </div>
      </section>
      <!-- /.block -->
    </div><!-- /.region -->
    <nav id="navigation" role="navigation" class="clearfix">
      <div class="wrapper-1280">
        <div class="region region-navigation">
          <section id="block-system-main-menu" class="block block-system block-menu">
            <?php wpeHeadNav(); ?>

          </section>
          <!-- /.block -->
        </div>
        <!-- /.region -->
      </div>
    </nav>
    <!-- /#navigation -->
  </header>
  <!-- /#header -->



