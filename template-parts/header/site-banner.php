<?php
/**
 * Displays the site banner header.
 *
 */


?>
<?php if ( is_front_page()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="banner flex flex-col px-3 lg:px-12 md:px-0 justify-center items-center lg:flex-row lg:justify-between lg:max-w-7xl lg:mx-auto">
    <div class="flex flex-col max-w-sm md:max-w-xl justify-center items-center lg:items-start mb-16 relative">
      <img class="absolute sepia -top-10 -left-20 z-[1px] lg:block hidden js-img-group-points" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shape-13.png">
      <h1 class="z-10 text-3xl md:text-4xl lg:text-5xl lg:text-left text-center font-bold font-sans text-txt-black mb-8"><?php the_field('titulo_banner')?></h1>
      <p class="z-10 text-md text-txt-black text-center font-sans mb-8 lg:text-left lg:text-lg"><?php the_field('subtitulo_banner')?></p>
      <a href="z-10 <?php echo get_field('link_pagina_cursos')['url'] ?>" class="py-4 px-9 rounded text-center bg-amarillo text-txt-black max-w-xs min-w-min font-semibold hover:bg-yellow-400 transition-all"><?php the_field('texto_boton')?></a>
    </div>
    <div class="h-auto relative">
      <img  class="z-10 block relative" src="<?php echo get_field('imagen_banner')['url']?>">
      <img class="absolute top-24 left-5 z-[1px] lg:block hidden js-img-group-points js-img-group-points-inverted" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shape-16.png">
      <img class="absolute top-12 left-16 z-[10px] lg:block hidden animate-translation-x" width="120px" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/wave.png">
      <img class="absolute sepia bottom-24 -right-14 z-[1px] lg:block hidden js-img-group-points" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shape-13.png">
    </div>
  </div>
  <div class=" bg-gradient-to-r from-yellow-300 to-yellow-400">
    <div class=" max-w-7xl w-full px-4 flex flex-row flex-wrap lg:flex-nowrap mx-auto">   
      <?php foreach (get_field('lista') as $value) { ?>
        <div class="py-10 flex flex-row w-full md:w-1/2 lg:border-r-yellow-300 lg:border-r lg:pl-10 last:border-none">
          <div class="min-w-[80px] w-[80px] h-[80px] mr-4">
            <div class="rounded-full bg-green-50 w-full h-full flex justify-center items-center"><img class="max-w-[70%]" src="<?php echo $value['icono']['url']?>"></div>
          </div>
          <div class="w-full flex justify-center items-center"><p class="text-white font-bold text-xl pr-4 text-left w-full"><?php echo $value['texto']?></p></div>
        </div>
      <?php }?>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif;?>