<?php
function remove_head_scripts()
{
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);

  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
}

function remove_api()
{
  remove_action('wp_head', 'rest_output_link_wp_head', 10);
  remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
}
remove_filter('term_description', 'wpautop');

function my_deregister_scripts()
{
  wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

remove_action('wp_head', 'wp_resource_hints', 2);
add_action('after_setup_theme', 'remove_api');
add_action('wp_enqueue_scripts', 'remove_head_scripts');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links_extra');
remove_action('wp_head', 'feed_links');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
add_action('init', 'remove_header_info');
remove_action('wp_head', 'rel_canonical');
add_filter('index_rel_link', 'disable_stuff');
add_filter('parent_post_rel_link', 'disable_stuff');
add_filter('start_post_rel_link', 'disable_stuff');
add_filter('previous_post_rel_link', 'disable_stuff');
add_filter('next_post_rel_link', 'disable_stuff');
add_filter('tablepress_use_default_css', '__return_false');
//add_filter      ('show_admin_bar' , 'my_function_admin_bar');
add_action('init', 'remove_header_info');
add_filter('wp_default_scripts', 'dequeue_jquery_migrate');

function remove_unwanted_css()
{
  wp_dequeue_style('super-rss-reader-css-css');
}
add_action('init', 'remove_unwanted_css', 100);
function remove_all_theme_styles()
{
  global $wp_styles;
  $wp_styles->queue = array();
}

function remove_cssjs_ver($src)
{
  if (strpos($src, '?ver=')) {
    $src = remove_query_arg('ver', $src);
  }

  return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);
function disable_stuff($data)
{
  return false;
}
function remove_header_info()
{
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
}
function my_function_admin_bar()
{
  return false;
}
// END REMOVE JUNK FORM HEADER

remove_filter('the_content', 'wpautop');
$br = false;
add_filter('the_content', function ($content) use ($br) {
    return wpautop($content, $br);
}, 10);
// END REMOVE BR

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

function callback($buffer)
{
  $buffer = preg_replace('/<!--(.|s)*?-->/', '', $buffer);
  return $buffer;
}
function buffer_start()
{
  ob_start("callback");
}
function buffer_end()
{
  ob_end_flush();
}
add_action('get_header', 'buffer_start');
add_action('wp_footer', 'buffer_end');
// END BUFFER

if (function_exists('register_sidebar'));
register_sidebar(array(
  'id' => 'switch languages',
  'name' => 'switch languages',
  'before_widget' => '<div id="%1$s">',
  'after_widget' => '</div>',
));
// FEATURED POSTS WIDGETS

function wp_nav_menu_no_ul()
{
  $options = array(
    'echo' => false,
    'container' => false,
    'theme_location' => 'my-custom-menu',
  );

  $menu = wp_nav_menu($options);
  echo preg_replace(array(
    '#^<ul[^>]*>#',
    '#</ul>$#',
  ), '', $menu);
}

add_filter('wp_nav_menu', 'strip_empty_classes');
function strip_empty_classes($menu)
{
  $menu = preg_replace('/ id=(["\'])(?!active).*?\1/', '', $menu);
  return $menu;
}

function add_menuclass($ulclass)
{
  return preg_replace('/<a /', '<a class="nav-link py-2 py-md-3"', $ulclass);
}

add_filter('wp_nav_menu', 'add_menuclass');

function wp_nav_menu_remove_attributes($menu)
{
  return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu);
}

add_filter('wp_nav_menu', 'wp_nav_menu_remove_attributes');

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var)
{
  if (is_array($var)) {
    $varci = array_intersect($var, array('current-menu-item'));
    $cmeni = array('current-menu-item');
    $selava = array('active');
    $selavaend = array();
    $selavaend = str_replace($cmeni, $selava, $varci);
  } else {
    $selavaend = '';
  }
  return $selavaend;
}
// END WP NAV MENU

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
// END ADD SVG UPLOAD

acf_add_options_page(array(
  'page_title' => 'Slider',
  'menu_title' => 'Slider',
  'menu_slug' => 'slider',
  'capability' => 'edit_posts',
  'icon_url' => 'dashicons-images-alt2',
  'position' => 7,
));

// END ACF SLIDER

acf_add_options_page(array(
  'page_title' => 'Footer',
  'menu_title' => 'Footer',
  'menu_slug' => 'Footer',
  'capability' => 'edit_posts',
  'icon_url' => 'dashicons-editor-insertmore',
  'position' => 0,
));

function tags_categories_support_all()
{
  register_taxonomy_for_object_type('post_tag', 'page');
  register_taxonomy_for_object_type('category', 'page');
  register_taxonomy_for_object_type('trouwgids', 'page');

}

function tags_categories_support_query($wp_query)
{
  if ($wp_query->get('tag')) {
    $wp_query->set('post_type', 'any');
  }

  if ($wp_query->get('category_name')) {
    $wp_query->set('post_type', 'any');
  }

}

add_action('init', 'tags_categories_support_all');
add_action('pre_get_posts', 'tags_categories_support_query');

function get_cat_slug($cat_id)
{
  $cat_id = (int) $cat_id;
  $category = &get_category($cat_id);
  return $category->slug;
}

function get_category_id($cat_name)
{
  $term = get_term_by('name', $cat_name, 'category');
  return $term->term_id;
}
// END CATEGORY ON PAGE

add_theme_support('post-thumbnails', array('post', 'page'));
// END POST THUMBNAILS

function wiaw_pagenavi_to_bootstrap($html)
{
  $out = '';
  $out = str_replace('<div', '', $html);
  $out = str_replace('class=\'wp-pagenavi\' role=\'navigation\'>', '', $out);
  $out = str_replace('<a', '<li class="page-item-tall-poppy"><a class="page-link-tall-poppy"', $out);
  $out = str_replace('</a>', '</a></li>', $out);
  $out = str_replace('<span aria-current=\'page\' class=\'current\'', '<li aria-current="page" class="page-item-tall-poppy active"><span class="page-link-tall-poppy current"', $out);
  $out = str_replace('<span class=\'pages\'', '<li class="page-item-tall-poppy"><span class="page-link-tall-poppy pages"', $out);
  $out = str_replace('<span class=\'extend\'', '<li class="page-item-tall-poppy"><span class="page-link-tall-poppy extend"', $out);
  $out = str_replace('</span>', '</span></li>', $out);
  $out = str_replace('</div>', '', $out);
  return '<ul class="pagination-tall-poppy justify-content-center" role="navigation">' . $out . '</ul>';
}
add_filter('wp_pagenavi', 'wiaw_pagenavi_to_bootstrap', 5, 2);
// END WP NAV PAGINATION

function searchfilter($query)
{
  if ($query->is_search && !is_admin()) {
    $query->set('post_type', array('post', ''));
  }
  return $query;
}
add_filter('pre_get_posts', 'searchfilter');
// END SEARCH FILTER

function remove_html_comments($content = '')
{
    return preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|))(?:(?!-->).)*-->/s', '', $content);
}

function kinsta_option_active_plugins($plugins)
{
    global $request_uri;
    $is_contact_page = strpos($request_uri, '/contact/');
    $unnecessary_plugins = array();
    // conditions
    // if this is not contact page
    // deactivate plugin
    if (false === $is_contact_page) {
      $unnecessary_plugins[] = 'contact-form-7/wp-contact-form-7.php';
    }

    foreach ($unnecessary_plugins as $plugin) {
      $k = array_search($plugin, $plugins);
      if (false !== $k) {
        unset($plugins[$k]);
      }
    }
    return $plugins;
}

function armd_resp_img_sizes($attr, $attachment, $size)
{
  if (is_array($size)) {
    $attr['sizes'] = $size[0] . 'px';
  } elseif ($size == 'thumbnail-no-crop') {
    $attr['sizes'] = '140px';
  } elseif ($size == 'pinterest-thumb') {
    $attr['sizes'] = '173px';
  } elseif ($size == 'pinterest-medium') {
    $attr['sizes'] = '346px';
  } elseif ($size == 'square-tiny') {
    $attr['sizes'] = '150px';
  } elseif ($size == 'square-thumb') {
    $attr['sizes'] = '250px';
  } elseif ($size == 'square-small') {
    $attr['sizes'] = '400px';
  } elseif ($size == 'square-medium') {
    $attr['sizes'] = '600px';
  } elseif ($size == 'square-large') {
    $attr['sizes'] = '900px';
  } elseif ($size == 'small-grid-size') {
    $attr['sizes'] = '400px';
  } elseif ($size == 'small-grid-size-medium') {
    $attr['sizes'] = '600px';
  } elseif ($size == 'small-grid-size-large') {
    $attr['sizes'] = '800px';
  }
  return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'armd_resp_img_sizes', 25, 3);

function prefix_modify_query_order($query)
{
  if (is_main_query()) {
    $args = array('post_date' => 'desc');
    $query->set('orderby', $args);
  }
}
add_action('pre_get_posts', 'prefix_modify_query_order');
