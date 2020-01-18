<?php
/**
 * The header
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ema
 * @since 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>	
	<?php 
    if ( !is_page_template( 'template-parts/header/header_top.php' ) ) {
        get_template_part('template-parts/header/header_top');        
    } ?>
	<?php 
    if ( !is_page_template( 'template-parts/header/header_image.php' ) ) {
        get_template_part('template-parts/header/header_image');        
    } ?>	
