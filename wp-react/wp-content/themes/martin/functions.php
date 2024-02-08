<?php

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

function learningWordpress_resources()
{

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'learningWordpress_resources');

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Ckeditor show
// add_filter('use_block_editor_for_post', '__return_false');


// feature image not showing
add_theme_support('post-thumbnails');


add_action('init', function () {
	register_post_type('toaster', [
		'public' => true,
		'label' => 'Toasters',
		'show_in_graphql' => true,
		'graphql_single_name' => 'Toaster',
		'graphql_plural_name' => 'Toasters',
	]);
});

add_theme_support('menus');


register_nav_menus(
	array(
		'primary' => esc_html__('Primary menu', 'martin'),
		'header' => esc_html__('Header menu', 'martin'),
		'footer'  => esc_html__('Footer menu', 'martin'),
		'main-menu' => esc_html__('Main menu', 'martin'),
		'walker' => esc_html__('walker', 'martin'),
	)
);

// Create custom walker nav menu for primary menu :

class walker_kraband_Nav_Primary extends Walker_Nav_Menu
{

	function start_lvl(&$output, $depth = 0, $args = null)
	{

		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n{$indent}<ul class=\"dropdown-menu{$submenu} depth-{$depth}\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{

		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$li_attributes = '';
		$class_names = $values = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;

		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-submenu';
		}

		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = 'class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = 'id="' . esc_attr($id) . '"';

		$output .= $indent . '<li ' . $id . $values . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? 'title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? 'target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? 'rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? 'href="' . esc_url($item->url) . '"' : '';
		$attributes .= ($args->walker->has_children) ? 'class="dropdown-toggle" data-toggle="dropdown"' : '';

		$menu_items  = $args->before;
		$menu_items .= '<a ' . $attributes . '>';
		$menu_items .= $args->before_link . apply_filters('the_title', $item->title, $item->ID) . $args->after_link;
		$menu_items .= ($depth == 0 && $args->walker->has_children) ? '<span class="caret"></span></a>' : '</a>';
		$menu_items .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $menu_items, $item, $depth, $args);
	}
}

// Create custom walker nav menu for Footer menu :

class walker_kraband_Nav_Footer extends Walker_Nav_Menu
{

	function start_lvl(&$output, $depth = 0, $args = null)
	{

		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n{$indent}<ul class=\"dropup-menu{$submenu} depth-{$depth}\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{

		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$li_attributes = '';
		$class_names = $values = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropup' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;

		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropup-submenu';
		}

		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = 'class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = 'id="' . esc_attr($id) . '"';

		$output .= $indent . '<li ' . $id . $values . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? 'title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? 'target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? 'rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? 'href="' . esc_url($item->url) . '"' : '';
		$attributes .= ($args->walker->has_children) ? 'class="dropup-toggle" data-toggle="dropup"' : '';

		$menu_items  = $args->before;
		$menu_items .= '<a ' . $attributes . '>';
		$menu_items .= $args->before_link . apply_filters('the_title', $item->title, $item->ID) . $args->after_link;
		$menu_items .= ($depth == 0 && $args->walker->has_children) ? '<span class="caret"></span></a>' : '</a>';
		$menu_items .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $menu_items, $item, $depth, $args);
	}
}


function enqueue_custom_scripts()
{

	// Localize the AJAX URL
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/path/to/your/script.js', array('jquery'), null, true);

	// Localize the AJAX URL
	wp_localize_script('custom-script', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



add_action('wp_ajax_nopriv_ajax_upload_image', 'ajax_upload_image');
add_action('wp_ajax_ajax_upload_image', 'ajax_upload_image');

function ajax_upload_image(){
	if (isset($_FILES['image'])) {
		$uploaded_file = $_FILES['image']['tmp_name'];
		$destination = wp_upload_dir()['path'] . '/uploads' . $_FILES['image']['name'];
		move_uploaded_file($uploaded_file, $destination);
		echo "Image uploaded successfully!";
	} else {
		echo "No image uploaded!";
	}
	wp_die();
}
