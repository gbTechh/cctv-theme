<?php 

function get_top_courses(){
  $args = array(
    'post_type' => 'cursos',
    'posts_per_page' => -1
  );
  
  $query = new WP_Query($args);
  
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      // aquí puedes imprimir el contenido de cada producto
      // por ejemplo, el título del producto y su imagen destacada
      $isTop = get_field('top_curso');
      $post_slug = get_post_field( 'post_name', get_the_ID() );
      if ($isTop == 1){
      ?>
      
      <div class="px-2 flex-grow-0 flex-shrink-0 basis-[100%] sm:basis-[50%] lg:basis-[33.33%] mt-4 ">
        <div class="rounded-lg flex flex-col w-full  overflow-hidden shadow-xl shadow-neutral-100">
          <div class="w-full h-auto aspect-[11/6] ">
            <img class="max-w-full min-w-full w-full h-full" src="<?php echo get_field('banner')['url']?>">
          </div>
          <div class="w-full p-4 flex flex-col">
            <h3 class="font-semibold mb-4 capitalize"><?php the_title(); ?></h3>
            <p class="text-sm mb-4"><?php echo get_field('descripcion_corta_curso')?></p>            
            <div class="flex flex-row justify-between items-center">
              <span class="text-xs"><?php echo get_field('horas') . ' horas'?></span>
              <a href="<?php echo $post_slug;?>" class="border border-yellow-300 py-2 px-8 text-sm bg-yellow-50 text-txt-amarillo rounded-full">Ver Curso</a>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}

function list_all_courses(){
  $args = array(
    'post_type' => 'cursos',
    'posts_per_page' => 100
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $curso_url = get_permalink();
    
      ?>
      
      <div class="px-2 flex-grow-0 flex-shrink-0 basis-[100%] sm:basis-[50%] lg:basis-[33.33%] mt-4 ">
        <div class="rounded-lg flex flex-col w-full  overflow-hidden shadow-xl shadow-neutral-100">
          <div class="w-full h-auto aspect-[11/6] ">
            <img class="max-w-full min-w-full w-full h-full" src="<?php echo get_field('banner')['url']?>">
          </div>
          <div class="w-full p-4 flex flex-col">
            <h3 class="font-semibold mb-4 capitalize"><?php the_title(); ?></h3>
            <p class="text-sm mb-4"><?php echo get_field('descripcion_corta_curso')?></p>            
            <div class="flex flex-row justify-between items-center">
              <span class="text-xs"><?php echo get_field('horas') . ' horas'?></span>
              <a href="<?php echo $curso_url;?>" class="border border-yellow-300 py-2 px-8 text-sm bg-yellow-50 text-yellow-500 rounded-full">Ver Curso</a>
            </div>
          </div>
        </div>
      </div>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}

function list_all_alumnos(){
  $args = array(
    'post_type' => 'alumnos',
    'posts_per_page' => -1
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $curso_url = get_permalink();
    
      ?>
      
      <div class="px-2 flex-grow-0 flex-shrink-0 basis-[100%] sm:basis-[50%] lg:basis-[33.33%] mt-4 max-w-[300px]">
        <a href="<?php echo get_permalink();?>">
          <div class="rounded-lg flex flex-col w-full  overflow-hidden shadow-xl shadow-neutral-100">
            <div class="w-full h-auto aspect-square max-h-[300px] ">
              <img class="max-w-full min-w-full w-full h-full object-cover object-center" src="<?php echo get_field('foto')['url']?>">
            </div>
            <div class="w-full p-4 flex flex-col bg-white">
              <h3 class="font-semibold mb-4 w-full text-center text-base capitalize"><?php the_title(); ?></h3>
              <p class="text-sm  w-full text-center"><?php echo get_field('profesion')?></p> 
            </div>
          </div>
        </a>
      </div>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}


function get_instructors(){
  $args = array(
    'post_type' => 'profesores',
    'posts_per_page' => 6
  );
  
  $query = new WP_Query($args);
  
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();      
      ?>      
      <div class="px-2 flex-grow-0 flex-shrink-0 basis-[100%] sm:basis-[50%] lg:basis-[33.33%] mt-4 ">
        <div class="rounded-lg flex flex-col w-full  overflow-hidden shadow-xl shadow-neutral-100">
          <div class="w-full h-auto aspect-[11/6] max-h-[350px] ">
            <img class="max-w-full min-w-full w-full h-full object-cover object-center" src="<?php echo get_field('foto')['url']?>">
          </div>
          <div class="w-full p-4 flex flex-col bg-white">
            <h3 class="font-semibold mb-4 w-full text-center"><?php the_title(); ?></h3>
            <p class="text-sm  w-full text-center"><?php echo get_field('profesion')?></p> 
          </div>
        </div>
      </div>
     
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}

function get_alumnos_from_course($slug_curso){
  $args = array(
    'post_type' => 'alumnos',
    'posts_per_page' => -1
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();  
      $post_slug = get_post_field( 'post_name', get_the_ID() ); // Obtener el slug del post

     
     foreach (get_field('cursos_realizados') as $array) { ?>
    
      <?php if($array['curso'][0]->post_name == $slug_curso){
      ?>
      
    
       
      
      <div class="px-2 flex-grow-0 flex-shrink-0 basis-[100%] sm:basis-[50%] lg:basis-[33.33%] mt-4 max-w-[300px]">
        <a href="<?php echo get_permalink();?>">
          <div class="rounded-lg flex flex-col w-full  overflow-hidden shadow-xl shadow-neutral-100">
            <div class="w-full h-auto aspect-square max-h-[300px] ">
              <img class="max-w-full min-w-full w-full h-full object-cover object-center" src="<?php echo get_field('foto')['url']?>">
            </div>
            <div class="w-full p-4 flex flex-col bg-white">
              <h3 class="font-semibold mb-4 w-full text-center text-base capitalize"><?php the_title(); ?></h3>
              <p class="text-sm  w-full text-center"><?php echo get_field('profesion')?></p> 
            </div>
          </div>
        </a>
      </div>
      <?php }} ?>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}

function get_certificados_by_alumno($slug_alumno){
  $args = array(
    'post_type' => 'alumnos',
    'posts_per_page' => -1
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();  
      $post_slug = get_post_field( 'post_name', get_the_ID() ); // Obtener el slug del post
     
     
     foreach (get_field('cursos_realizados') as $array) { 
      $titulo_curso = $array['curso'][0]->post_title;
      $archivo = $array['archivo_certificado']['icon'];
      $url_archivo = $array['archivo_certificado']['url'];
      $filename_archivo = $array['archivo_certificado']['filename'];
      
      if($slug_alumno == $post_slug){
      ?>
      
      <div class="px-2 flex-grow-0 flex-shrink-0 basis-[100%] sm:basis-[50%] lg:basis-[33.33%] mt-4 max-w-[400px] ">      
        <div class="rounded-lg flex flex-col w-full  overflow-hidden shadow-xl shadow-neutral-100 justify-center items-center">
          <div class="w-full h-auto aspect-square max-h-[300px] ">
            <a target="__blank" href="<?php echo $url_archivo;?>">
              <div class="max-w-full min-w-full w-full h-auto object-cover object-center flex justify-center items-center" id="<?php echo $filename_archivo; ?>"></div>
            </a>
          </div>
          <div class="w-full p-4 flex flex-col bg-white">
            <p class="text-sm  w-full text-center mb-2">Certificado en:</p> 
            <h3 class="font-semibold w-full text-center text-base capitalize"><?php echo $titulo_curso ?></h3>
          </div>
        </div>
      </div>


      <script>
        window.addEventListener('load', function () {
          let url = '<?php echo esc_js( $url_archivo );?>';
          let id = '<?php echo esc_js( $filename_archivo );?>';
          // Reemplaza 'archivo_pdf' con el nombre del campo personalizado donde se guarda la ruta del archivo PDF en la página de WordPress
          var pdfDoc = null,
              pageNum = 1,
              pageRendering = false,
              pageNumPending = null,
              scale = 0.4,
              canvas = document.createElement('canvas'),
              ctx = canvas.getContext('2d');

          function renderPage(num) {
              pageRendering = true;
              pdfDoc.getPage(num).then(function(page) {
                  var viewport = page.getViewport({scale: scale});
                  canvas.height = viewport.height;
                  canvas.width = viewport.width;
                  var renderContext = {
                      canvasContext: ctx,
                      viewport: viewport
                  };
                  var renderTask = page.render(renderContext);
                  renderTask.promise.then(function() {
                      pageRendering = false;
                      if (pageNumPending !== null) {
                          renderPage(pageNumPending);
                          pageNumPending = null;
                      }
                  });
              });
              document.getElementById(id).appendChild(canvas);
          }

          pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
              pdfDoc = pdfDoc_;
              for (var i = 1; i <= pdfDoc.numPages; i++) {
                  renderPage(i);
              }
          });

        })
      </script>
      <?php }} ?>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}