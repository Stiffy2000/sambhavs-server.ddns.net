<?php
/**
 * Template part for displaying the primary navigation menu.
 *
 * @package    fonts
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<nav id="site-navigation" class="menu-1">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'site-menu',
			'depth'          => 1,
		)
	);
	?>
</nav><!-- .menu-1 -->
