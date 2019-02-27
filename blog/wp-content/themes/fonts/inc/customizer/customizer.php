<?php
/**
 * Fonts Theme Customizer
 *
 * @package    fonts
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fonts_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->remove_control( 'header_text' );

	$wp_customize->add_setting(
		'header_text_color',
		array(
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_text_color',
			array(
				'label'    => __( 'Site Title Color', 'fonts' ),
				'section'  => 'colors',
				'settings' => 'header_text_color',
			)
		)
	);

	$wp_customize->add_setting(
		'header_bg_color',
		array(
			'transport'         => 'postMessage',
			'default'           => '#303539',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_bg_color',
			array(
				'label'    => __( 'Header/Footer Background', 'fonts' ),
				'section'  => 'colors',
				'settings' => 'header_bg_color',
			)
		)
	);

	$wp_customize->add_setting(
		'sub_footer_bg_color',
		array(
			'transport'         => 'postMessage',
			'default'           => '#40454F',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sub_footer_bg_color',
			array(
				'label'    => __( 'Sub Footer Background', 'fonts' ),
				'section'  => 'colors',
				'settings' => 'sub_footer_bg_color',
			)
		)
	);

}
add_action( 'customize_register', 'fonts_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fonts_customize_preview_js() {
	wp_enqueue_script( 'fonts_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), FONTS_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'fonts_customize_preview_js' );

/**
 * Output the Customizer CSS to wp_head
 */
function fonts_customizer_css() {
	?>
	<style type="text/css" id="fonts-theme-header-css">
		.site-title a {
			color: <?php echo sanitize_hex_color( get_theme_mod( 'header_text_color' ) ); ?>;
		}
		.site-header,
		.site-footer {
			background-color: <?php echo sanitize_hex_color( get_theme_mod( 'header_bg_color' ) ); ?>;
		}
		.sub-footer {
			background-color: <?php echo sanitize_hex_color( get_theme_mod( 'sub_footer_bg_color' ) ); ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'fonts_customizer_css' );
