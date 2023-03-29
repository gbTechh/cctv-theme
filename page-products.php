<?php

/**
 * Template Name: Page for products
 */

get_header();
?>
   <style>
      html {
        background-color: #000;
      }
      .-loadhidden {
        opacity: 0;
      }
      .b--wrap {
        opacity: 0;
      }
      .b--aw {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 0;
        margin: 0;
        padding: 0;
      }
      .b--awc {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 0;
        margin: 0;
        padding: 0;
      }

      @media only screen and (max-width: 1024px) {
        .m--phd {
          padding: 5.5rem 5.33333% 0.1875rem !important;
        }
      }
    </style> 

  <?php get_template_part( 'template-parts/svg' ); ?>
	<?php get_template_part( 'template-parts/loading/loading' ); ?>
  <?php get_template_part( 'template-parts/hamburger/hamburger' ); ?>

  

 

    <div class="b--wrap -loadhidden" id="js-wrap" data-pj="w">
      <div class="b--ct js-wd" id="js-ct" data-pj="c" data-pj-dir="work">
        <div class="b--pw -siteparts" id="js-pw">
          <div class="b--gn">
            <!--MENU-->
          </div>

          <header class="m--phd">
            <div class="m--phd__in js-pos js-tdr" data-de=".03">
              <h1 class="m--phd__ttl f--head js-tex" data-class="a--op js-tdi">
                Products
              </h1>
            </div>
          </header>

          <div class="wa--wp">
            <div class="wa--in">
              <div class="wa--list">
                <!-- work 25 -->
                <?php get_all_products()?>
                <!-- work -->
              </div>
            </div>
          </div>

          <div class="FOOTER">
            <footer>
              <div class="row primary">
                <div class="column about">
                  <a
                    href="#"
                    onclick="miFuncion3(); return false;"
                    aria-label="Back to Home page"
                  >
                    <img src="<?php echo $ruta;?>/assets/config/logo.png" style="width: 100%" />
                  </a>
                  <br />
                  <div class="social">
                    <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="#"
                      ><i class="fa-brands fa-instagram-square"></i
                    ></a>
                    <a href="#"><i class="fa-brands fa-whatsapp-square"></i></a>
                  </div>
                </div>
                <div class="column links">
                  <h3>Some Links</h3>
                  <div style="margin-top: 20px">
                    <ul>
                      <li>
                        <a href="#" onclick="miFuncion3(); return false;"
                          >Home</a
                        >
                      </li>
                      <li>
                        <a href="/work">Products</a>
                      </li>
                      <li>
                        <a href="#" onclick="miFuncion(); return false;"
                          >Services</a
                        >
                      </li>
                      <li>
                        <a href="#" onclick="miFuncion2(); return false;"
                          >About</a
                        >
                      </li>
                      <li>
                        <a href="/contact">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="column links">
                  <h3>Contact</h3>
                  <div style="margin-top: 20px">
                    <ul>
                      <li>Phone: <a href="#">+00 0000 0000-0000</a></li>
                      <li>Mail: <a href="#">test@gmail.com</a></li>
                      <li>795 Folsom Ave, Suite 600 San Francisco, CA 94107</li>
                    </ul>
                  </div>
                </div>
                <div class="column subscribe">
                  <h3>Ubication</h3>
                  <div style="margin-top: 20px">
                    <div style="width: 100%">
                      <iframe
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        width="100%"
                        height="200"
                        frameborder="0"
                      ></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="copyright">
                <center>
                  <p style="margin-bottom: 10px; margin-top: 10px">
                    Copyright &copy;CCTV&amp;. Inc.
                  </p>
                </center>
              </div>
            </footer>
          </div>
        </div>
        <div class="c--mdal wm--wp js-wd-wp" id="--workdetail">
          <div class="wm--bb">
            <button
              class="wm--back js-hv js-wd-close"
              type="button"
              aria-label="Go back"
              data-hv="lines"
            >
              <span class="wm--back__lab f--en">Go back</span>
              <span class="wm--back__ico">
                <span class="wm--back__i _1">
                  <span class="wm--back__b -i"></span>
                </span>
                <span class="wm--back__i _2">
                  <span class="wm--back__b -i"></span>
                </span>
              </span>
            </button>
          </div>
          <div class="wm--win js-wd-win">
            <div class="wm--bd">
              <div class="wm--sl js-wd-slb">
                <div class="wm--sl__win js-wd-sl">
                  <div class="wm--sl__list js-wd-list">
                    <!-- work 25 -->
                    <?php get_all_products_for_modal() ?>                  
                    <!-- work -->
                  </div>
                </div>
                <div class="wm--pn _p">
                  <button
                    class="wm--pn__btn js-wd-btn"
                    type="button"
                    aria-label="Prev"
                    data-dir="p"
                  >
                    <span class="c--pvt -pvt"></span
                    ><span class="wm--pn__btn__ico -arr">
                      <svg class="c--sg">
                        <use xlink:href="#__skeletonArrow"></use></svg></span>
                  </button>
                </div>
                <div class="wm--pn _n">
                  <div class="c--pvt -p"></div>
                  <button
                    class="wm--pn__btn js-wd-btn"
                    type="button"
                    aria-label="Next"
                    data-dir="n"
                  >
                    <span class="c--pvt -pvt"></span
                    ><span class="wm--pn__btn__ico -arr">
                      <svg class="c--sg">
                        <use xlink:href="#__skeletonArrow"></use></svg></span>
                  </button>
                </div>
              </div>
              <div class="wm--de">
                <div class="wm--cre">
                  <p class="wm--cre__ttl f--en">Credits</p>
                  <div class="wm--cre__list js-wd-cbd">
                    <!-- work -->

                     <?php get_all_credits_for_product() ?>  
                    
                    <!-- /work -->
                  </div>
                </div>
              </div>

              <div class="wm--ft">
                <div class="wm--ctrls">
                  <div class="wm--ctrl">
                    <button
                      class="wm--ctrl__btn js-hv _rev -rev js-wd-btn"
                      type="button"
                      tabindex="-1"
                      aria-label="Previous"
                      data-hv="arrow"
                      data-dir="p"
                    >
                      <span class="wm--ctrl__btn__ico c--fic"
                        ><span class="wm--ctrl__btn__b c--fic">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <polygon
                              class="_bg"
                              points="9,18 9.6,17.3 1.9,9.6 18,9.6 18,8.6 1.8,8.6 9.6,0.7 9,0 0,9"
                            ></polygon></svg></span
                        ><span class="wm--ctrl__btn__f c--fic -i"
                          ><span class="wm--ctrl__btn__fi -i">
                            <svg class="c--sg" viewBox="0 0 18 18">
                              <path
                                class="_st"
                                d="M18,9H0"
                                clip-path="url(#__btnArrowLeft)"
                              ></path></svg></span></span></span
                      ><span class="wm--ctrl__btn__lab f--en">Previous</span>
                    </button>
                  </div>
                  <div class="wm--ctrl">
                    <button
                      class="wm--ctrl__btn js-hv js-wd-btn"
                      type="button"
                      tabindex="-1"
                      aria-label="Next"
                      data-hv="arrow"
                      data-dir="n"
                    >
                      <span class="wm--ctrl__btn__lab f--en">Next</span
                      ><span class="wm--ctrl__btn__ico c--fic"
                        ><span class="wm--ctrl__btn__b c--fic">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <polygon
                              class="_bg"
                              points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                            ></polygon></svg></span
                        ><span class="wm--ctrl__btn__f c--fic -i"
                          ><span class="wm--ctrl__btn__fi -i">
                            <svg class="c--sg" viewBox="0 0 18 18">
                              <path
                                class="_st"
                                d="M0,9h18"
                                clip-path="url(#__btnArrow)"
                              ></path></svg></span></span
                      ></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <?php get_template_part( 'template-parts/header/navbar-mobil' ); ?>

    <div class="b--aw">
      <canvas class="b--awc" id="-aw"></canvas>
    </div>
<?php get_footer(); ?>