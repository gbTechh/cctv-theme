<?php

/**
 * Template Name: Pagina para POST TYPE cursos
 * Template Post Type: post
 */

get_header(); 

$post_slug = get_post_field( 'post_name', get_post() );

?>


<?php while (have_posts()) : the_post(); ?>
<div class="mt-24 w-full bg-gray-200 h-auto   ">
  <div class="px-3 max-w-7xl mx-auto pt-12 pb-16 md:px-12 flex flex-col">
    <div class="w-full flex items-start justify-start mb-10">
      <a class="text-xl mr-2 text-txt-black">Home</a>
      <span class="text-xl mr-2 text-txt-black">/</span>
      <a class="text-xl mr-2 text-txt-black">Cursos</a>
      <span class="text-xl mr-2 text-txt-black">/</span>
      <span class="text-xl font-bold text-txt-black">Detalle del curso</span>
    </div>
    <h1 class="text-txt-black w-full text-3xl font-bold text-left mb-10"><?php echo the_title();?></h1>
    <div class="flex">
      <div>
        <span></span>
        <p>by <?php echo ' ' . (get_field('profesores')[0]->post_title);?></p>
      </div>
    </div>
  </div>  
</div>
<div class="bg-white w-full h-auto px-3 max-w-7xl mx-auto py-24 md:px-12 flex flex-col lg:flex-row-reverse">
  <div class="rounded-lg shadow-lg shadow-neutral-200 mb-10 lg:mb-0 p-4 flex flex-col lg:min-w-[370px] h-min">
    <div><img class="rounded-lg mx-auto" src="<?php echo get_field('banner')['url'];?>"/></div>
  </div>
  <div class="flex flex-col  lg:pr-12 w-full">
    <h2 class="text-txt-black w-full text-2xl font-bold text-left mb-10">Acerca de este Curso</h2>
    <p><?php the_content();?></p>
  </div>

 
</div>
 <!--SECCION ALUMNOS CON CERTIFICADO-->
 <div class="bg-white w-full h-auto px-3 max-w-7xl mx-auto py-12 md:px-12 flex flex-col ">
    <h2 class="text-txt-black w-full text-2xl font-bold mb-10 text-center">Alumnos con certificado</h2>
    <div class="flex flex-wrap items-center justify-center">
      <?php get_alumnos_from_course($post_slug);?>
    </div>
  </div>

<!--AGREGAR ALUMNOS QUE TENGAN EL CERTIFICADO DE ESE CURSO-->
<?php endwhile; ?>

<?php get_footer(); ?>