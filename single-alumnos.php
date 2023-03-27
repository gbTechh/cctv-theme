<?php

/**
 * Template Name: Pagina para POST TYPE alumnos
 * Template Post Type: post
 */

get_header(); 

$post_slug = get_post_field( 'post_name', get_post() );

?>

<div class="mt-24 w-full bg-gray-200 h-auto px-3 lg:px-12 py-32 flex flex-col">
  <h1 class="text-txt-black w-full text-3xl font-bold text-center mb-5 lg:text-5xl">Perfil de Alumno y certificados</h1>
  <div class="w-full flex items-center justify-center">
    <a class="text-sm lg:text-xl mr-2 text-txt-black">Home</a>
    <span class="text-sm lg:text-xl mr-2 text-txt-black">/</span>
    <a class="text-sm lg:text-xl mr-2 text-txt-black">Alumnos</a>
    <span class="text-sm lg:text-xl mr-2 text-txt-black">/</span>
    <span class="text-sm lg:text-xl font-bold text-txt-black">Perfil alumno</span>
  </div>
</div>
<section class="bg-white w-full h-auto px-3 max-w-7xl mx-auto py-32 md:px-12 flex flex-wrap">
  <div class="w-full flex flex-col">
    <div class="aspect-square mx-auto w-full max-w-[280px] lg:max-w-[300px] overflow-hidden rounded-full">
      <img class="h-full w-full max-w-full min-w-full block object-cover" src="<?php echo get_field('foto')['url']?>">    
    </div>
    <div class="w-full">
      <span class="text-yellow-600 font-bold text-center uppercase w-full mt-5 block text-sm lg:text-lg">Alumno</span>
      <h2 class="text-gray-700 w-full text-lg font-bold text-center mb-5 mt-5 lg:text-2xl"><?php echo the_title();?></h2>
    </div>
  </div>
  <div class="w-full mt-10">
    <h3 class="text-txt-black w-full text-2xl font-bold text-center mb-10 lg:text-4xl ">Certificados Obtenidos</h3>
    <div class="flex flex-wrap justify-center items-start">
      <?php get_certificados_by_alumno($post_slug)?>
    </div>
  </div>
</section>


<script src="<?php echo get_template_directory_uri() ?>/build/pdf.js"></script>

<?php get_footer(); ?>