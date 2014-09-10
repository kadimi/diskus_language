<?php

/*
Plugin Name: Disqus language
Plugin URI: http://www.kadimi.com/en
Description: Tell the plugin "Disqus Comment System" to use the site language.
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
