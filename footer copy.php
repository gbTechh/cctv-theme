<?php


wp_footer();
?>
<footer class="o-bg--dark c-footer o-wrapper--full o-wrapper">
  <div class="c-footer__wrap o-wrapper--sm o-wrapper">
    <h3 class="h2 c-footer__title"><?php echo get_option('aboutus')?></h1>
    <div class="c-footer__content">
      <div class="c-footer__img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/europe.svg" alt="europe map">
      </div>
      <div class="c-footer__content-text">
        <div class="c-footer__countries">
          <span class="h3 c-footer__text"><?php echo get_option('supportinthesecontries');?></span>
          <div class="c-footer__list">
            <p class="c-footer__item"><?php echo get_option('belgium');?></p>
            <p class="c-footer__item"><?php echo get_option('france');?></p>
            <p class="c-footer__item"><?php echo get_option('germany');?></p>
            <p class="c-footer__item"><?php echo get_option('ireland');?></p>
            <p class="c-footer__item"><?php echo get_option('netherlands');?></p>
            <p class="c-footer__item"><?php echo get_option('unitedkingdom');?></p>
            <p class="c-footer__item"><?php echo get_option('luxemburgo');?></p>
          </div>
        </div>
        <div class="c-footer__languages">
          <span class="h3 c-footer__text"><?php echo get_option('languagessupport');?></span>
          <div class="c-footer__list">
            <p class="c-footer__item"><?php echo get_option('arabic');?></p>
            <p class="c-footer__item"><?php echo get_option('croatian');?></p>
            <p class="c-footer__item"><?php echo get_option('english');?></p>
            <p class="c-footer__item"><?php echo get_option('french');?></p>
            <p class="c-footer__item"><?php echo get_option('greek');?></p>
            <p class="c-footer__item"><?php echo get_option('italian');?></p>
            <p class="c-footer__item"><?php echo get_option('portuguese');?></p>
            <p class="c-footer__item"><?php echo get_option('spanish');?></p>
            <p class="c-footer__item"><?php echo get_option('germany');?></p>
          </div>
        </div>
      </div>    
    </div>
    <div class="c-footer__divider"></div>
    <div class="c-footer__footer">
      <div class="c-footer__footer-devices">
        <img class="c-footer__img c-footer__devices-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/devices.svg" alt="devices">
        <p class="c-footer__text c-footer__devices-text"><?php echo get_option('over4devices')?></p>
      </div>
      <div class="c-footer__footer-cards">
        <img class="c-footer__img c-footer__cards-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sim_card.svg" alt="sim card">
        <p class="c-footer__text c-footer__cards-text"><?php echo get_option('4simcards')?></p>
      </div>
    </div>
  </div>
</footer>
</div>
</body>

</html>