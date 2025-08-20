<?php

// added the defer to JS files
function defer_parsing_of_js($url) {

  if (
    is_user_logged_in() ||
    FALSE === strpos($url, '.js')
  ) return $url;

  return str_replace('src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);
