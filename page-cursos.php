<?php

/**
 * Template Name: Pagina para cursos
 */

get_header();
?>

<div class="mt-24 w-full bg-gray-200 h-auto px-3 lg:px-12 py-32 flex flex-col">
  <h1 class="text-txt-black w-full text-3xl font-bold text-center mb-5 lg:text-5xl">Todos nuestros cursos</h1>
  <div class="w-full flex items-center justify-center">
    <a class="text-xl mr-2 text-txt-black">Home</a>
    <span class="text-xl mr-2 text-txt-black">/</span>
    <span class="text-xl font-bold text-txt-black">Cursos</span>
  </div>
</div>
<section class="bg-white w-full h-auto px-3 max-w-7xl mx-auto py-32 md:px-12 flex flex-wrap">
  <?php list_all_courses()?>
</section>
<?php get_footer(); ?>