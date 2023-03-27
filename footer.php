<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	</main><!-- #main -->
	
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer bg-footer w-full">
		<div class="w-full px-3 max-w-7xl mx-auto py-12 lg:py-24 md:px-12 flex flex-col lg:flex-row">
			<div class="w-full lg:basis-[50%]">
				<?php the_custom_logo(); ?>
				<p class="w-full mt-5 text-gray-400 text-sm lg:text-base"><?php echo get_bloginfo('description')?></p>
				<div class="w-full mt-5">
					<span class="text-gray-400 text-sm lg:text-base">Direccion:</span>
					<span class="text-gray-400 text-sm lg:text-base"><?php echo get_theme_mod( 'direccion_sitio' ); ?></span>
				</div>			
				<div class="w-full mt-5">
					<span class="text-gray-400 text-sm lg:text-base">Teléfono:</span>
					<span class="text-gray-400 text-sm lg:text-base"><?php echo get_theme_mod( 'telefono_sitio' ); ?></span>
				</div>			
				<div class="w-full mt-5">
					<span class="text-gray-400 text-sm lg:text-base">Email:</span>
					<span class="text-gray-400 text-sm lg:text-base"><?php echo get_theme_mod( 'email_sitio' ); ?></span>
				</div>			
			</div>
			<div class="w-full mt-10 lg:mt-0 lg:w-auto lg:pl-12">
				<h4 class="w-full mt-5 mb-5 lg:mt-0 text-white text-base lg:text-2xl font-bold">Enlaces</h4>
				<?php
					$args = array(
						'theme_location' => 'menu-principal',
						'container' => 'nav',
						'container_class' => 'menu-footer',
						'menu_class' => 'menu-footer text-gray-400 text-sm lg:text-base'
					);

					$menu_items = wp_get_nav_menu_items($args['theme_location']);

					if ($menu_items) {
						foreach ($menu_items as $menu_item) {
							$classes = $menu_item->classes;
							$classes[] = 'py-5 px-0 w-full';
							$menu_item->classes = $classes;
						}
					}
					wp_nav_menu($args);

					?>
			</div>
			<div class="w-full mt-10 lg:mt-0 lg:basis-[50%] lg:pl-12">
				<h4 class="w-full mt-5 mb-5 lg:mt-0 text-white text-base lg:text-2xl font-bold">Contactanos</h4>				
				<p class="text-gray-400 text-sm lg:text-base">Contáctanos en cualquiera de nuestras redes sociales. Estamos para ayudarte</p>
				<div>
					
				</div>
			</div>
		</div>
	
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
