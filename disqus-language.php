<?php

/*
Plugin Name: Disqus language
Plugin URI: http://www.kadimi.com/en
Description: Tell Disqus to use the site language instead of the default English
Version: 0.1
Author: Nabil Kadimi
Author Email: nabil@kadimi.com
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

//Disqus language
add_filter('disqus_language_filter','cb_disqus_language_filter');
function cb_disqus_language_filter() {
	return get_locale();
}
