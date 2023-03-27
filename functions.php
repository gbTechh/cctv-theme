<?php 

$theme				= wp_get_theme( 'cursosqr' );
$cursosqr_version	= $theme['Version'];



require_once( 'inc/class-cctv.php' );
require_once( 'inc/class-css-cctv.php' );
require get_template_directory() . '/inc/querys.php';

function cctv_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'cursosqr_html_classes', 'cursosqr' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

function cctv_menu()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'cctv')
  ));
}

add_action('init', 'cctv_menu');


function agregar_clase_li_menu_principal($classes, $item, $args) {
	if($args->theme_location == 'menu-principal') {
			$classes[] = 'b--gn__btn js-hv';
	}
	return $classes;
}

add_filter('nav_menu_css_class', 'agregar_clase_li_menu_principal', 10, 3);



function theme_name_setup() {
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_name_setup' );



function agregar_campos_identidad_sitio( $wp_customize ) {
	$wp_customize->add_setting( 'direccion_sitio' , array(
		 'default'   => '',
		 'transport' => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'direccion_sitio', array(
		 'label'      => __( 'Direction', 'textdomain' ),
		 'section'    => 'title_tagline',
		 'settings'   => 'direccion_sitio',
		 'type'       => 'text',
	) ) );

	$wp_customize->add_setting( 'telefono_sitio' , array(
		 'default'   => '',
		 'transport' => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'telefono_sitio', array(
		 'label'      => __( 'Phone', 'textdomain' ),
		 'section'    => 'title_tagline',
		 'settings'   => 'telefono_sitio',
		 'type'       => 'text',
	) ) );

	$wp_customize->add_setting( 'email_sitio' , array(
		 'default'   => '',
		 'transport' => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_sitio', array(
		 'label'      => __( 'Email', 'textdomain' ),
		 'section'    => 'title_tagline',
		 'settings'   => 'email_sitio',
		 'type'       => 'text',
	) ) );


	$wp_customize->add_setting( 'link_facebook' , array(
		 'default'   => '',
		 'transport' => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'link_facebook', array(
		 'label'      => __( 'Facebook', 'textdomain' ),
		 'section'    => 'title_tagline',
		 'settings'   => 'link_facebook',
		 'type'       => 'text',
	) ) );



	$wp_customize->add_setting( 'link_instagram' , array(
		 'default'   => '',
		 'transport' => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'link_instagram', array(
		 'label'      => __( 'Instagram', 'textdomain' ),
		 'section'    => 'title_tagline',
		 'settings'   => 'link_instagram',
		 'type'       => 'text',
	) ) );



	$wp_customize->add_setting( 'link_wsp' , array(
		 'default'   => '',
		 'transport' => 'refresh',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'link_wsp', array(
		 'label'      => __( 'Whatsapp', 'textdomain' ),
		 'section'    => 'title_tagline',
		 'settings'   => 'link_wsp',
		 'type'       => 'text',
	) ) );
}
add_action( 'customize_register', 'agregar_campos_identidad_sitio' );