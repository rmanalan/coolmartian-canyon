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

global $post;
$orig_post = $post;
$template = get_post_meta($post->ID,'_wp_page_template',true);
$sidebar_color = ($template=='default') ? 'orange' : 'green';
?>
<div id="sidebar" class="padded <?php echo $sidebar_color ?>">
<ul id="sidebar-nav">
<?php
if(!$post->post_parent){
  wp_list_pages('exclude=11&title_li=&child_of='.$post->ID);
}else{
  wp_list_pages('exclude=11&title_li=&child_of='.$post->post_parent);
}
?>
</ul>
&nbsp;
</div>
