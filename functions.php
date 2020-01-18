<?php
/*
 * Theme Setup
*/

if (! function_exists('ema_setup')) :

	function ema_setup() {

		load_theme_textdomain('romuema', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('align-wide');
		add_theme_support('customize-selective-refresh-widgets');
		register_nav_menus(array('primary' => esc_html__('Primary Menu', 'romuema')));

		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		add_theme_support('custom-logo', array(
			'height'      => 90,
			'width'       => 450,
			'flex-height' => true,
			'flex-width' => true,
		));

		add_theme_support('post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		));

		$defaults = array(
			'default-image'          => '',
			'width'                  => 1920,
			'height'                 => 400,
			'flex-height'            => true,
			'flex-width'             => true,
			'uploads'                => true,
			'random-default'         => false,
			'header-text'            => true,
		);

		add_theme_support('custom-header', $defaults);
		add_theme_support('custom-background');
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');


		add_image_size('thumbnail-center', 390, 200, array( 'top', 'center' ));
		add_image_size('thumbnail-featured', 333, 360, array( 'center', 'center' ));

		add_theme_support('starter-content', array(
			'widgets' => array(
				'posts' => array(
					'recent-posts-orbital' => array( 'recent-posts-orbital', array(
						'title' => esc_html__('Lasts Posts', 'orbital'),
						'thumbnail' => true,
					) ),
				),
			),
		));
	}

endif;
add_action('after_setup_theme', 'ema_setup');





/*
 * Add Extra Funcionality
 */
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/image-upload-field-custom-taxonomy.php';
/* require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
//require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/json-ld.php'; */

if (! function_exists('orbital_gutenberg_initialize')) {
	require get_template_directory() . '/inc/gutenberg/gutenberg.php';
}

