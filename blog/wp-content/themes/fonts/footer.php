<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    fonts
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

		</div><!-- .wrapper -->
	</div><!-- .site-content -->

	<div class="sub-footer">
		<div class="wrapper">
			<?php
			if ( is_single() ) {
				fonts_the_post_navigation();
		 	}
			if ( is_archive() || is_front_page() && is_home() ) {
				fonts_the_posts_navigation();
			}
			?>
		</div><!-- .wrapper -->
	</div><!-- .sub-footer -->

	<footer class="site-footer">
		<div class="wrapper">
			<div class="site-info">
				&copy; <?php echo absint( date_i18n( 'Y' ) ) . ' ' . esc_attr( get_bloginfo( 'name' ) ); ?>
			</div><!-- .site-info -->
		</div><!-- .wrapper -->
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</div><!-- .site-wrapper -->

</body>
</html>
