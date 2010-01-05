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

?>
			<div class="clear"></div>
			</div><!-- .wrapper -->
		</div><!-- #main -->
		<hr class="lofi" />
		<div id="footer" class="section">
			<div class="copyright">
			Copyright &copy; <?php echo date('Y')?>, Canyon Design Build.  All rights reserved.
			</div><!--.copyright-->
		</div><!--#footer -->
	</div><!--#page-->
	<?php wp_footer() ?>
</body>
</html>
