<?php 

function get_all_products(){
  $args = array(
    'post_type' => 'our_products',
    'posts_per_page' => -1
  );
  
  $query = new WP_Query($args);
  
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      // aquí puedes imprimir el contenido de cada producto
      // por ejemplo, el título del producto y su imagen destacada     
      $post_slug = get_post_field( 'post_name', get_the_ID() );
      $img = get_field("image")['url']
      ?>
     
      
      <div class="wa--one">
        <button
          class="wa--one__tgt c--fic h--sww js-wd-hit"
          type="button"
          aria-label=""
        >
          <div class="wa--one__img h--sww__i">
            <div
              class="c--bg js-bg"
              data-src='{"sp":"<?php echo $img;?>","pc":"<?php echo $img;?>","retina":"<?php echo $img;?>","mq":"1025"}'
            ></div>
          </div>
        </button>
      </div>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}

function get_all_products_for_modal(){
  $args = array(
    'post_type' => 'our_products',
    'posts_per_page' => -1
  );
  
  $query = new WP_Query($args);
  
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      // aquí puedes imprimir el contenido de cada producto
      // por ejemplo, el título del producto y su imagen destacada     
      $post_slug = get_post_field( 'post_name', get_the_ID() );
      $img = get_field("image")['url'];
      $link = get_field("link");
      $array = explode('*', get_field("description"));
      $string = '';
      foreach ($array as $key) { 
        $string .= $key . "</br>";
      }
      ?>
  
      <div class="wm--hd js-wd-one">
        <div class="wm--hd__fig">
          <div class="wm--hd__img c--fic">
            <div
              class="c--bg js-bg"
              data-src='{"sp":"<?php echo $img;?>","pc":"<?php echo $img;?>","retina":"<?php echo $img;?>","mq":"1025"}'
            ></div>
          </div>
        </div>
        <div class="wm--hd__meta">
          <p class="wm--hd__ttl f--srf"><?php echo get_field("name")?></p>
          <p class="wm--hd__de">
            <?php echo $string;?>
          </p>
          <div class="wm--hd__btn">
            <a
              class="wm--hd__btn__tgt js-hv"
              href="<?php echo $link?>"
              target="_blank"
              data-hv="btn"
            >
              <p class="wm--hd__btn__lab f--en">Official</p>
              <div class="wm--hd__btn__ico c--fic">
                <span class="wm--hd__btn__b c--fic">
                  <svg class="c--sg" viewBox="0 0 18 18">
                    <polygon
                      class="_bg"
                      points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"></polygon>
                  </svg>
                </span>
                <span class="wm--hd__btn__f c--fic -i">
                  <span class="m--btn__ico__fi -i">
                    <svg class="c--sg" viewBox="0 0 18 18">
                      <path
                        class="_st"
                        d="M0,9h18"
                        clip-path="url(#__btnArrow)"></path>
                    </svg>
                  </span>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}



function get_all_services_swiper_slide(){
  $args = array(
    'post_type' => 'our_services',
    'posts_per_page' => -1
  );
  
  $query = new WP_Query($args);
  
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      // aquí puedes imprimir el contenido de cada producto
      // por ejemplo, el título del producto y su imagen destacada     
      $post_slug = get_post_field( 'post_name', get_the_ID() );
     
      ?>
  
        <div class="swiper-slide swiper-slide--one" style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url(<?php echo get_field("image")["url"]?>) no-repeat 50% 50%/cover;">
          <div class="mitexto">
            <h2 class="t1"><?php echo the_title();?></h2>
            <p class="t2"><?php echo get_field("description");?></p>
            
          </div>
        </div>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}

function get_swiper_view_content(){
  $args = array(
    'post_type' => 'our_services',
    'posts_per_page' => -1
  );
  
  $query = new WP_Query($args);
  $i = 0;
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $i++;
      $query->the_post();
      // aquí puedes imprimir el contenido de cada producto
      // por ejemplo, el título del producto y su imagen destacada     
      $post_slug = get_post_field( 'post_name', get_the_ID() );
     
      ?>
  
        <li class="team-info-item <?php echo $i === 1 ? 'active' : '' ?>">
          <h1 class="heading"><?php echo the_title();?> </h1>
          <article class="content">
              <p>
                <?php echo get_field("description")?></p>
          </article>
        </li>
        <?php the_post_thumbnail(); ?>
      <?php
    }
    wp_reset_postdata();
  }
}