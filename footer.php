<?php declare(strict_types=1);

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Poison
 *
 * @version 1.0.0
 */

?>

<footer class="footer">
	<div class="footer__custom-logo-container">
		<?php the_custom_logo(); ?>
	</div>
	<?php
		wp_nav_menu([
			'menu' => 'Pie',
			'container' => false,
			'menu_class' => '',
			'fallback_cb' => '__return_false',
			'items_wrap' => '<ul class="footer__ul %2$s">%3$s</ul>',
			'depth' => 1,
		]);
?>
</footer>

<?php wp_footer(); ?>

</main>

</body>

</html>
