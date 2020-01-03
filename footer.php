<?php
/**
 * The footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage RomuEma
 * @since 1.0
 */

?>

<footer class="site-footer">
	<div class="container">
		<?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
		<?php get_template_part('template-parts/footer/footer', 'credits'); ?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>