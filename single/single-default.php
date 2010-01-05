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

get_header();

?>

<?php get_sidebar();?>
<div id="content" class="news">
  <div class="post-container">
    <h1 class="pagetitle">News</h1>
<?php
cfct_loop();
?>
    <div class="back"><a href="../../../../news">&laquo; Back</a></div>
  </div>
  <div class="news-sb" id="right-sidebar">
    <div class="gray-shim"></div>
    &nbsp;
  </div>
</div><!--#content-->

<?php

get_footer();

?>
