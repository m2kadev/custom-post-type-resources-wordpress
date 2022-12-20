<?php


// ADD IMAGE SUPPORT
add_theme_support('post-thumbnails' );

function resources_theme(){
  // Enqueue styles
//   wp_enqueue_style('bootstrapcdn', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('uikit_css', get_template_directory_uri() . '/uikit/css/uikit.min.css');
  wp_enqueue_style('styletheme', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('font_awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Poppins:100,300,500,600');
  wp_enqueue_style('main_style', get_stylesheet_uri());

  // Enqueue scripts

    wp_enqueue_script('jQuerycdn', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, false, true );
//   wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false, '', true );
    wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, '', true );
    wp_enqueue_script('uikit_js', get_template_directory_uri() . '/uikit/js/uikit.min.js');
    wp_enqueue_script('isotop', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', false, '', true );
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'resources_theme');


require get_template_directory() . '/inc/scripts.php';

