<?php

// This file is part of the Carrington Blog Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$blog_desc = get_bloginfo('description');
(is_home() && !empty($blog_desc)) ? $title_description = ' - '.$blog_desc : $title_description = '';

$use_background_img = cfct_get_option('cfct_css_background_images');
$use_background_img == 'no' ? $css_ext = '?type=noimg' : $css_ext = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

  <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ).$title_description; ?></title>

  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'carrington' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
  <?php wp_get_archives('type=monthly&format=link'); ?>

  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url') ?>/css/css.php<?php echo $css_ext; ?>" />

  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/ie.css" type="text/css" media="screen" />
  <![endif]-->

  <!--[if lte IE 6]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/ie6.css" type="text/css" media="screen" />

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG.js"></script>
    <script type="text/javascript">
      DD_belatedPNG.fix('img, <?php if ($use_background_img == 'yes') { echo '#header, #footer, #header .wrapper, #footer .wrapper, #TB_title, '; } ?>#developer-link a');
    </script>
  <![endif]-->

  <?php wp_head(); ?>
</head>

<body>
  <div id="page">
    <div id="top"><a class="accessibility" href="#content"><?php _e( 'Skip to content', 'carrington-blog' ); ?></a></div>
    <hr class="lofi" />
    <div id="header" class="section">
      <div class="wrapper">
        <h1 id="blog-title" class="col span-left">
          <a href="<?php bloginfo('url') ?>/" rel="home">
          <span><?php bloginfo('name') ?></span>
          </a>
        </h1>
        <div id="navigation" class="col span-right">
          <ul class="nav clearfix">
            <?php wp_list_pages('exclude=11&title_li='); ?>
          </ul>
        </div><!-- #navigation -->
      </div><!-- .wrapper -->
    </div><!-- #header -->
    <hr class="lofi" />
    <div id="main" class="section">
      <div class="wrapper cat">
