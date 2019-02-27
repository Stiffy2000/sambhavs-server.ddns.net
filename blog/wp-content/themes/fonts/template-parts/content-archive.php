<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    fonts
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<article <?php post_class(); ?>>

	<?php fonts_thumbnail( 'fonts-blog' ); ?>

	<header class="entry-header">

		<div class="entry-meta">
			<?php fonts_posted_on(); ?>
		</div><!-- .entry-meta -->

		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<p><a class="moretag" href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php esc_html_e( 'Continue Reading &rarr;', 'fonts' ); ?></a></p>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
