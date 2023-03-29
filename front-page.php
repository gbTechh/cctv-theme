<?php





get_header();
?>

  <style>
    html{background-color:#000;}
    .-loadhidden{opacity: 0;}
    .b--wrap{opacity: 0;}
    .b--aw{width: 100%;height: 100%;position: fixed;top: 0;left: 0;z-index: 0;margin: 0;padding: 0;}
    .b--awc{width: 100%;height: 100%;position: fixed;top: 0;left: 0;z-index: 0;margin: 0;padding: 0;}
  iframe{
    overflow:hidden;
    -ms-overflow-style: none;
}

 .img1 {
  width: 100%;
  height: 400px;
  object-fit: contain;;
  object-position: bottom;
  margin-right:3%;
}

.img2 {
        width: 100%;
        height: 450px;
        background-image: url("../assets/sec1.jpg");
        background-repeat: no-repeat;
        background-size: contain;
        height: 450px;
       }
      
      .margin-1{
      position:relative;
      }
      @media screen and (max-width: 1024px){
      .margin-1{
      position:relative;
      margin-left:5%;
      left:5%;
      }
      .wa--one{
      width:600px;
      
      }
      
      .img1 {
       width: 85%;
       height: 300px;
       object-fit: cover;
       }
      
      }
      
      @media screen and (max-width: 768px){
       .margin-1{
      position:relative;
      margin-left:1%;
      left:0;
      }
      
       .img1 {
       
       width: 100%;
       height: 300px;
       margin-right:1%;
       object-fit: cover;
       }
       
       .img2 {
        width: 100%;
        height: 250px;
        }
        }
        
        @media screen and (max-width: 480px){
        .img1 {
         width: 100%;
       height: 200px;
       margin-right:1%;
       object-fit: contain;
         }
         
         .img2 {
        width: 100%;
        height: 150px;
        }
        
        
        
          }

.main-slide {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  margin: 0;
  padding: 0;
 } 



.swiper-container {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  max-width: 520px;
  width:100%;
  background-color: #fff;
  overflow: hidden;
  border-radius: 8px;
}

.picture {
  width: 100%;
  max-height: 420px;
  height:auto;
  overflow: hidden;
  
  img {
    display: block;
    width: 100%;
    max-width:100% !important;
    height: 100%;
    object-fit: cover;
  }
}

.detail {
  padding: 25px 20px;
  
  text-align: center;
 
} 


.swiper-container span {
	color: gray;
  }

  </style>
  

</head>

<body class="js-rpto">
  
  <?php get_template_part( 'template-parts/svg' ); ?>
	<?php get_template_part( 'template-parts/loading/loading' ); ?>

 <?php get_template_part( 'template-parts/hamburger/hamburger' ); ?>
  <div class="b--wrap -loadhidden" id="js-wrap" data-pj="w">
      <div class="b--ct" id="js-ct" data-pj="c" data-pj-dir="home">
        <div class="b--pw -siteparts" id="js-pw">
          

          <header class="tp--hd js-vh js-mv">
            <div class="c--htx"></div>
            <div class="tp--hd__bd">
              <div class="tp--hd__mn js-pos">
                <div class="tp--hd__lg a--op">
                   <?php the_custom_logo(' <div class="tp--hd__lg__i c--fic">','</div>'); ?>
                  
                    <img src="assets/config/logo.png" class="logo-t" />
                  
                </div>

                <div
                  class="tp--hd__tw js-tdr"
                  data-de=".03"
                  data-de-offset=".08"
                >
                  <h1
                    class="tp--hd__ttl f--head js-tex"
                    data-class="a--op js-tdi"
                  >
                    Security <br />camera
                  </h1>
                </div>
              </div>
              <div class="tp--hd__ft">
                <div class="tp--hd__sc">
                  <button
                    class="tp--hd__sc__tgt h--clr js-hit"
                    type="button"
                    data-hit="toScroll"
                    data-tgt="vh"
                  >
                    <span class="tp--hd__sc__lab"
                      ><span class="tp--hd__sc__tx f--en"
                        >（ Scroll ）</span
                      ></span
                    >
                  </button>
                </div>
              </div>
              <div class="tp--hd__nxb">
                <button
                  class="tp--hd__nxb__tgt js-mv-btn js-hv"
                  type="button"
                  aria-label="Next"
                  data-hv="mag"
                >
                  <span class="tp--hd__nxb__ico -i">
                    <span class="tp--hd__nxb__bg">
                      <svg class="c--sg">
                        <use xlink:href="#s-mvArr"></use>
                      </svg>
                    </span>
                    <span class="tp--hd__nxb__f js-mv-prg">
                      <span class="tp--hd__nxb__fi js-mv-prg">
                        <svg class="c--sg">
                          <use xlink:href="#s-mvArr"></use>
                        </svg>
                      </span>
                    </span>
                  </span>
                </button>
              </div>
            </div>
          </header>

          <section class="tp--ab">
            <div
              class="tp--ab__cp js-pos js-tdg"
              data-de=".08"
              data-de-offset=".5"
            >
              <header class="tp--ab__hd">
                <h2 class="tp--ab__ttl f--en a--op js-tdi"></h2>
              </header>
              <div class="tp--ab__stg">
                <img
                  class="tp--ab__stg__img _s -aboutimg mobile"
                  src="assets/img/index/about3.png"
                  alt="CCTV"
                /><img
                  class="tp--ab__stg__img _p -aboutimg desktop"
                  src="assets/img/index/about.png"
                  alt="CCTV"
                />
                <p class="c--htx"></p>
                <p class="c--htx"></p>
              </div>
            </div>
            <div class="tp--ab__rl">
              <div class="tp--ab__vds"></div>
              <div class="tp--ab__btn js-pos a--op">
                <button
                  class="tp--ab__btn__tgt js-hv js-hit"
                  type="button"
                  data-hv="mag"
                  data-hit="aboutModal"
                  data-tgt="--about"
                  aria-label="Play Movies"
                >
                  <span class="tp--ab__btn__bd -i"
                    ><span class="tp--ab__btn__i -i"></span
                  ></span>
                </button>
              </div>
            </div>

            <div class="tp--ob__bd" id="about">
              <div class="ab--kv">
                <header class="m--phd">
                  <div class="m--phd__in js-pos js-tdr" data-de=".03">
                    <h1
                      class="m--phd__ttl f--head js-tex"
                      data-class="a--op js-tdi"
                    >
                      About
                    </h1>
                  </div>
                </header>

                <section class="ab--cp">
                  <div class="ab--cp__in">
                    <div class="ab--cp__bd">
                      <header class="c--htx">
                        <h2 class="c--htx">About</h2>
                      </header>

                      <div class="cr--jo__nv">
                        <ul class="cr--jo__nu">
                          <li class="cr--jo__nl">
                            <hr
                              style="
                                height: 100%;
                                position: absolute;
                                width: 0.1vw;
                                border-width: 0;
                                color: #000;
                                background-color: grey;
                                left: 5%;
                              "
                            />
                          </li>
                        </ul>
                      </div>
                      <div class="margin-1">
                        <a
                          class="m--btn__tgt js-hv"
                          aria-label="About Detail"
                          data-hv="btn"
                        >
                          <p
                            class="m--mc__ne f--head"
                            style="text-transform: none !important"
                          >
                            We have experience
                          </p>
                        </a>

                        <div class="ab--cp__rd">
                          <p class="ab--cp__p a--op js-pos">
                             In Gallery Security we are specialists in Integral
                            Security Solutions, offering to the market:
                            <br />our Consulting and Advisory Services,
                            <br />with the support of Expert Personnel, <br />as
                            well as a wide variety of electronic security
                            equipment of the latest generation, <br />which give
                            efficient response to the demands of protection to
                            property and people, <br />inside and outside the
                            country.
                          </p>
                          <br />

                          <!-- <div class="wa--one"> -->
                          <!-- <button class="wa--one__tgt c--fic h--sww js-wd-hit" type="button" aria-label="「湯道」" style="" > -->
                          <!-- <div class="wa--one__img h--sww__i"> -->
                          <div
                            data-tilt=""
                            data-tilt-glare="false"
                            data-tilt-scale="1.1"
                            id="p1"
                          >
                            <div class="img2"></div>
                            <!-- <img src="/wp-content/uploads/2022/10/sec1.jpg" alt="" class="img1" id="img1"> -->
                          </div>
                          <!-- <div class="c--bg js-bg" data-src="{&quot;sp&quot;:&quot;/wp-content/uploads/2022/10/1.jpg&quot;,&quot;pc&quot;:&quot;/wp-content/uploads/2022/10/1.jpg&quot;,&quot;retina&quot;:&quot;/wp-content/uploads/2022/10/1.jpg&quot;,&quot;mq&quot;:&quot;1025&quot;}"></div> -->
                          <!-- </div> -->
                          <!-- </button> -->
                          <!-- </div> -->
                          <br />
                          <div
                            class="cr--cm__lab js-rpt js-pos a--op js-scspd-t"
                            style="position: relative !important"
                          >
                            <div
                              class="cr--cm__lab__ln js-rpt-ln"
                              style="opacity: 1 !important"
                            >
                              <div
                                class="cr--cm__lab__i f--head js-rpt-one"
                                style="
                                  color: #d70538 !important;
                                  opacity: 1 !important;
                                "
                              >
                                20 years
                              </div>
                              <div
                                class="cr--cm__lab__i f--head js-rpt-one"
                                style="
                                  color: #fff !important;
                                  opacity: 1 !important;
                                "
                              >
                                behind us
                              </div>
                            </div>
                          </div>

                          <p class="ab--cp__p a--op js-pos">
                            <br />For more than 20 years, <br />Gallery Security
                            has been serving Corporate, <br />Industrial,
                            Business, Residential and Personal Clients,
                            <br />maintaining exclusive alliances with the
                            support of recognized international brands experts
                            in the security area, <br />manufacturers of
                            hardware and high-tech software, <br />which support
                            and complement our broad portfolio of products.
                          </p>
                        </div>
                      </div>
                      <br />
                      <br />
                    </div>
                  </div>
                </section>
              </div>
            </div>

            <section class="tp--ob">
              <div class="tp--ob__bd">
                <header class="tp--ow__hd js-pos js-tdr" data-de=".03">
                  <h3
                    class="tp--ow__ttl f--head titulo-p js-tex"
                    data-class="a--op js-tdi"
                  >
                    Our <br />Services
                  </h3>
                </header>
                <div class="main-slide">
                  <div class="swiper-container" id="myswap">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide">
                        <div class="picture">
                          <img src="services/img/image_1.jpg" alt="" />
                        </div>
                        <div class="detail">
                          <h3 style="color: black; text-align: center">
                            Surveillance cameras
                          </h3>
                          <span
                            >Ofek systems offers world-class security camera
                            systems installed by professional security camera
                            system installers. We have years of experience in
                            planning, customizing and installing comprehensive
                            CCTV systems. We offer video surveillance systems,
                            indoor and outdoor camera systems and cutting-edge
                            video analytics. We specialize in the design and
                            installation of security camera systems for homes,
                            businesses, companies and institutions.
                          </span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="picture">
                          <img src="services/img/image_2.jpg" alt="" />
                        </div>
                        <div class="detail">
                          <h3 style="color: black; text-align: center">
                            Alarm systems
                          </h3>
                          <span
                            >Your home / business contains people and assets
                            that you want to protect. Installing an alarm system
                            helps you keep out burglars, reduce employee theft,
                            stop unauthorized access, cut insurance costs and
                            prevent theft. Our professional alarm system
                            installers have years of experience in designing,
                            customizing and installing burglar alarms. As a
                            leading commercial alarm company, Safe and Sound
                            Security designs and installs alarm systems for
                            homes, stores, cannabis businesses, industrial
                            facilities, warehouses, apartment complexes, general
                            contractors, commercial buildings, retail
                            establishments and technology companies.
                          </span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="picture">
                          <img src="services/img/image_3.jpg" alt="" />
                        </div>
                        <div class="detail">
                          <h3 style="color: black; text-align: center">
                            Network installation
                          </h3>
                          <span
                            >ofek systems provides speedy and reliable
                            connection for maximum business security. We ensure
                            your commercial security system is strong,
                            connected, and communicative with top-notch cabling
                            services. Whether your property is an office
                            building, industrial facility, apartment complex, or
                            any other commercial area, we have the tools to
                            handle your project.
                          </span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="picture">
                          <img src="services/img/image_4.jpg" alt="" />
                        </div>
                        <div class="detail">
                          <h3 style="color: black; text-align: center">
                            Access control installers
                          </h3>
                          <span
                            >Ofek Systems provides effective and simple-to-use
                            door access control systems. We offer over a decade
                            of experience in the design, customization and
                            installation of wired and wireless key card access
                            systems. As access control installers, we understand
                            the importance of controlling who enters and exits
                            your building. We specialize in designing door
                            access control systems for cannabis operations,
                            offices, stores, homes, industrial facilities,
                            warehouses, apartment complexes, general
                            contractors, commercial buildings, retail
                            establishments and technology companies.
                          </span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="picture">
                          <img src="services/img/image_5.jpg" alt="" />
                        </div>
                        <div class="detail">
                          <h3 style="color: black; text-align: center">
                            Audio / Video installations
                          </h3>
                          <span
                            >We are industry-leading specialists in the design,
                            supply, and installation of professional audio and
                            video systems for commercial premises, restaurants,
                            bars, places of worship, schools, and home use. We
                            have a large range of pre-configured off-the-shelf
                            installation packages to suit most requirements,
                            along with our ever-expanding catalog, which covers
                            everything from modern 'smart home' equipment to
                            high-powered PA systems for events and large venues.
                            Our team is always on hand to guide you in creating
                            an audio system to suit your specific needs, whether
                            you require a discreet home system or a large
                            multi-zone commercial system, we will work with you
                            to create a bespoke package.
                          </span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="picture">
                          <img src="services/img/image_6.jpg" alt="" />
                        </div>
                        <div class="detail">
                          <h3 style="color: black; text-align: center">
                            Finance And Legal <br />
                            Working Streams Occur Throughout
                          </h3>
                          <span
                            >Far far away, behind the word mountains, far from
                            the countries Vokalia and Consonantia, there live
                            the blind texts.
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <!--     <div class="swiper-button-prev"></div> -->
                    <!--     <div class="swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                  </div>
                </div>
              </div>
            </section>
          </section>

          <section class="tp--ow">
            <div class="tp--ow__bd js-pos">
              <header class="tp--ow__hd js-tdr" data-de=".03">
                <h2
                  class="tp--ow__ttl f--head js-tex titulo-p"
                  data-class="a--op js-tdi"
                >
                  Our <br />Products
                </h2>
              </header>
              <div class="tp--ow__rd js-tdg" data-de=".08" data-de-offset=".08">
                <p class="tp--ow__rd__p a--op js-tdi"></p>
              </div>
            </div>
            <div class="tp--ow__link">
              <a
                class="tp--ow__link__a js-hv h--bgt"
                href="/work/"
                aria-label="All work"
                data-hv="storker"
              >
                <div class="tp--ow__link__ico">
                  <div class="c--pvt -p"></div>
                  <div class="tp--ow__link__ar -i h--bgt__i">
                    <div class="tp--ow__link__i">
                      <div class="tp--ow__link__iw c--fic">
                        <svg class="c--sg">
                          <use xlink:href="#__skeletonArrow"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </section>

          <!-- <section class="tp--ob"> -->
          <!-- <div class="tp--ob__bd"> -->
          <!-- <header class="tp--ob__hd js-pos js-tdr" data-de=".03"> -->
          <!-- <h3 class="tp--ob__ttl f--head js-tex" data-class="a--op js-tdi">Services</h3> -->
          <!-- </header> -->
          <!-- <div class="tp--ob__rd js-pos js-tdg" data-de=".08" data-de-offset=".08"> -->
          <!-- <iframe src="services_section/" style="width: 100%; height: 1700px;"></iframe>  -->
          <!-- </div> -->
          <!-- </div> -->
          <!-- </section> -->

          <div class="hola">
            <footer>
              <div class="row primary">
                <div class="column about">
                  <a href="../" aria-label="Back to Home page">
                    <img src="../assets/config/logo.png" style="width: 100%" />
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
                        <a href="../">Home</a>
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
        <div class="tp--av c--mdal" id="--about">
          <div class="tp--av__bb">
            <button
              class="tp--av__back js-hv -close"
              type="button"
              aria-label="Go back"
              data-hv="lines"
            >
              <spsn class="tp--av__back__lab f--en">Go back</spsn>
              <spsn class="tp--av__back__ico">
                <spsn class="tp--av__back__i _1">
                  <spsn class="tp--av__back__b -i"></spsn>
                </spsn>
                <spsn class="tp--av__back__i _2">
                  <spsn class="tp--av__back__b -i"></spsn>
                </spsn>
              </spsn>
            </button>
          </div>

          <div class="tp--av__ctrls">
            <div class="tp--av__ctrl">
              <button
                class="tp--av__btn js-hv _rev -rev -btn"
                type="button"
                tabindex="-1"
                aria-label="Previous"
                data-hv="arrow"
                data-dir="p"
              >
                <span class="tp--av__btn__ico c--fic">
                  <span class="tp--av__btn__b c--fic">
                    <svg class="c--sg" viewBox="0 0 18 18">
                      <polygon
                        class="_bg"
                        points="9,18 9.6,17.3 1.9,9.6 18,9.6 18,8.6 1.8,8.6 9.6,0.7 9,0 0,9"
                      ></polygon>
                    </svg>
                  </span>
                  <span class="tp--av__btn__f c--fic -i">
                    <span class="tp--av__btn__fi -i">
                      <svg class="c--sg" viewBox="0 0 18 18">
                        <path
                          class="_st"
                          d="M18,9H0"
                          clip-path="url(#__btnArrowLeft)"
                        ></path>
                      </svg>
                    </span>
                  </span>
                </span>
                <span class="tp--av__btn__lab f--en">Previous</span>
              </button>
            </div>
            <div class="tp--av__ctrl">
              <button
                class="tp--av__btn js-hv -btn"
                type="button"
                tabindex="-1"
                aria-label="Next"
                data-hv="arrow"
                data-dir="n"
              >
                <span class="tp--av__btn__lab f--en">Next</span>
                <span class="tp--av__btn__ico c--fic">
                  <span class="tp--av__btn__b c--fic">
                    <svg class="c--sg" viewBox="0 0 18 18">
                      <polygon
                        class="_bg"
                        points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                      ></polygon>
                    </svg>
                  </span>
                  <span class="tp--av__btn__f c--fic -i">
                    <span class="tp--av__btn__fi -i">
                      <svg class="c--sg" viewBox="0 0 18 18">
                        <path
                          class="_st"
                          d="M0,9h18"
                          clip-path="url(#__btnArrow)"
                        ></path>
                      </svg>
                    </span>
                  </span>
                </span>
              </button>
            </div>
          </div>
        </div>

        <div class="tp--wm c--mdal" id="--work">
          <div class="tp--wm__cl -close">
            <div class="tp--wm__back -btn">
              <spsn class="tp--wm__back__lab f--en">Go back</spsn>
              <spsn class="tp--wm__back__ico">
                <spsn class="tp--wm__back__i _1">
                  <spsn class="tp--wm__back__b -i"></spsn>
                </spsn>
                <spsn class="tp--wm__back__i _2">
                  <spsn class="tp--wm__back__b -i"></spsn>
                </spsn>
              </spsn>
            </div>
          </div>
          <div class="tp--wm__tgt -pos">
            <div class="tp--wm__iw">
              <!-- 2 -->
              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">劇場版「シグナル」</p>
                <p class="tp--wm__de -item">
                  2021年4月2日（金） 公開<br />ⓒ2021
                  映画「劇場版シグナル」製作委員会
                </p>
              </div>
              <!-- 2 -->
              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「るろうに剣心　最終章　The Final」
                </p>
                <p class="tp--wm__de -item">
                  2021年4月23日（金） 公開<br />ⓒ和月伸宏 / 集英社<br />
                  ⓒ2020映画「るろうに剣心 最終章 The Final」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「映画 賭ケグルイ　絶体絶命ロシアンルーレット」
                </p>
                <p class="tp--wm__de -item">
                  2021年6月1日（金） 公開<br />ⓒ河本ほむら・尚村透 / SQUARE
                  ENIX<br />
                  ⓒ「映画 賭ケグルイ2」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「るろうに剣心　最終章　The Beginning」
                </p>
                <p class="tp--wm__de -item">
                  2021年6月4日（金） 公開<br />ⓒ和月伸宏 / 集英社<br />
                  ⓒ2020映画「るろうに剣心 最終章 The Beginning」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「ヒノマルソウル」</p>
                <p class="tp--wm__de -item">
                  2021年6月18日（金） 公開<br />ⓒ2021映画「ヒノマルソウル」製作委員会
                </p>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「ザ・ファブル」</p>
                <p class="tp--wm__de -item">
                  2019年6月21日（金） 公開<br />ⓒ2019
                  映画「ザ・ファブル」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「全裸監督　シーズン２」</p>
                <p class="tp--wm__de -item">
                  2021年6月24日（木） 公開<br />©2021 C&I entertainment
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「かぐや様は告らせたい　ファイナル」
                </p>
                <p class="tp--wm__de -item">
                  2021年8月20日（金） 公開<br />ⓒ赤坂アカ / 集英社<br />
                  ⓒ2021映画「かぐや様は告らせたい ファイナル」製作委員会
                </p>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「狐狼の血　LEVEL2」</p>
                <p class="tp--wm__de -item">
                  2021年8月20日（金） 公開<br />ⓒ2021「狐狼の血　LEVEL2」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「ドライブ・マイ・カー」</p>
                <p class="tp--wm__de -item">
                  2021年8月20日（金） 公開<br />ⓒ2021「ドライブ・マイ・カー」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「マスカレード・ナイト」</p>
                <p class="tp--wm__de -item">
                  2021年9月17日（金） 公開<br />ⓒ2021東野圭吾 /
                  集英社・映画「マスカレード・ナイト」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「空白」</p>
                <p class="tp--wm__de -item">
                  2021年9月23日（木） 公開<br />ⓒ2021「空白」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「ボクたちはみんな大人になれなかった」
                </p>
                <p class="tp--wm__de -item">
                  2021年11月5日（金） 公開<br />©2021 C&I entertainment
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「あなたの番です　劇場版」
                </p>
                <p class="tp--wm__de -item">
                  2021年12月10日（金） 公開<br />ⓒ2021「あなたの番です　劇場版」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「私はいったい、何と闘っているのか」
                </p>
                <p class="tp--wm__de -item">
                  2021年12月17日（金） 公開<br />ⓒ2021つぶやきシロー・ホリプロ・小学館
                  / 闘う製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「KAPPEI」</p>
                <p class="tp--wm__de -item">
                  2022年3月18日（金） 公開<br />ⓒ2022
                  映画『KAPPEI』製作委員会　<br />
                  ©若杉公徳／白泉社（ヤングアニマルコミックス）
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「女子高生に殺されたい」</p>
                <p class="tp--wm__de -item">
                  2022年4月1日（金） 公開<br />ⓒ2022日活
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「劇場版ラジエーションハウス」
                </p>
                <p class="tp--wm__de -item">
                  2022年4月29日（金） 公開<br />ⓒ2022横幕智裕・モリタイシ /
                  集英社・映画「劇場版ラジエーションハウス」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「流浪の月」</p>
                <p class="tp--wm__de -item">
                  2022年5月13日（金） 公開<br />ⓒ2022「流浪の月」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「神は見返りを求める」</p>
                <p class="tp--wm__de -item">
                  2022年6月24日（金） 公開<br />ⓒ2022「神は見返りを求める」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="#"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「キングダム2 遙かなる大地へ」
                </p>
                <p class="tp--wm__de -item">
                  2022年7月15日（金） 公開<br />ⓒ原泰久／集英社<br />
                  ©2022映画「キングダム」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="https://kingdom-the-movie.jp/"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「HiGH&#038;LOW THE WORST X」
                </p>
                <p class="tp--wm__de -item">
                  2022年9月9日（金） 公開<br />ⓒ2022「HiGH&LOW THE WORST
                  X」製作委員会　<br />
                  ©髙橋ヒロシ(秋田書店)　HI-AX
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="https://www.high-low.jp/movies/theworst-x/"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「ラーゲリより愛を込めて」
                </p>
                <p class="tp--wm__de -item">
                  2022年12月9日（金） 公開<br />ⓒ2022『ラーゲリより愛を込めて』製作委員会　<br />
                  ⓒ1989清水香子
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="https://lageri-movie.jp/"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">
                  「THE LEGEND ＆ BUTTERFLY」
                </p>
                <p class="tp--wm__de -item">
                  2023年1月27日（金） 公開<br />ⓒ2023「THE LEGEND ＆
                  BUTTERFLY」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="https://legend-butterfly.com/"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- 2 -->

              <div class="tp--wm__one -one">
                <p class="tp--wm__ttl f--srf -item">「湯道」</p>
                <p class="tp--wm__de -item">
                  2023年2月23日（木） 公開<br />©2023映画「湯道」製作委員会
                </p>
                <div class="tp--wm__btn -item">
                  <a
                    class="tp--wm__btn__tgt js-hv"
                    href="https://yudo-movie.jp/"
                    target="_blank"
                    data-hv="btn"
                  >
                    <p class="tp--wm__btn__lab f--en">Official</p>
                    <div class="tp--wm__btn__ico c--fic">
                      <span class="tp--wm__btn__b c--fic">
                        <svg class="c--sg" viewBox="0 0 18 18">
                          <polygon
                            class="_bg"
                            points="9,0 8.4,0.7 16.1,8.4 0,8.4 0,9.4 16.2,9.4 8.4,17.3 9,18 18,9"
                          ></polygon></svg></span
                      ><span class="tp--wm__btn__f c--fic -i"
                        ><span class="m--btn__ico__fi -i">
                          <svg class="c--sg" viewBox="0 0 18 18">
                            <path
                              class="_st"
                              d="M0,9h18"
                              clip-path="url(#__btnArrow)"
                            ></path></svg></span
                      ></span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <div class="b--nv" id="js-nv">
      <div class="b--nv__win">
        <div class="b--nv__bd">
          <div class="b--nv__mn">
            <div class="hamburger">
              <button
                class="b--hm -loadhidden -siteparts"
                type="button"
                aria-label="Navigation Controlr"
                id="js-hm3"
              >
                <div class="_layer -top"></div>
                <div class="_layer -mid"></div>
                <div class="_layer -bottom"></div>
              </button>
            </div>
            <br />
            <br />
            <br />
            <div class="b--nv__hr _l">
              <div class="b--nv__hr__i js-nv-bd"></div>
            </div>

            <ul class="b--nv__ul">
              <li class="b--nv__one">
                <div class="b--nv__one__i">
                  <div class="b--nv__one__t js-nv-one">
                    <a class="b--nv__one__a h--tx" href="../" aria-label="Home">
                      <span class="b--nv__one__lab f--head">
                        <span class="b--nv__one__lab__f h--tx__i">Home</span>
                        <span class="b--nv__one__lab__b h--tx__i">Home</span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="b--nv__hr">
                  <div class="b--nv__hr__i js-nv-bd"></div>
                </div>
              </li>

              <li class="b--nv__one">
                <div class="b--nv__one__i">
                  <div class="b--nv__one__t js-nv-one">
                    <a
                      class="b--nv__one__a h--tx"
                      href="#"
                      onclick="miFuncion2(); return false;"
                      aria-label="About"
                    >
                      <span class="b--nv__one__lab f--head">
                        <span class="b--nv__one__lab__f h--tx__i">About</span>
                        <span class="b--nv__one__lab__b h--tx__i">About</span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="b--nv__hr">
                  <div class="b--nv__hr__i js-nv-bd"></div>
                </div>
              </li>

              <li class="b--nv__one">
                <div class="b--nv__one__i">
                  <div class="b--nv__one__t js-nv-one">
                    <a
                      class="b--nv__one__a h--tx"
                      href="#"
                      onclick="miFuncion(); return false;"
                      aria-label="Our crew"
                    >
                      <span class="b--nv__one__lab f--head">
                        <span class="b--nv__one__lab__f h--tx__i"
                          >Services</span
                        >
                        <span class="b--nv__one__lab__b h--tx__i"
                          >Services</span
                        >
                      </span>
                    </a>
                  </div>
                </div>
                <div class="b--nv__hr">
                  <div class="b--nv__hr__i js-nv-bd"></div>
                </div>
              </li>

              <li class="b--nv__one">
                <div class="b--nv__one__i">
                  <div class="b--nv__one__t js-nv-one">
                    <a
                      class="b--nv__one__a h--tx"
                      href="/work"
                      aria-label="Work"
                    >
                      <span class="b--nv__one__lab f--head">
                        <span class="b--nv__one__lab__f h--tx__i"
                          >Products</span
                        >
                        <span class="b--nv__one__lab__b h--tx__i"
                          >Products</span
                        >
                      </span>
                    </a>
                  </div>
                </div>
                <div class="b--nv__hr">
                  <div class="b--nv__hr__i js-nv-bd"></div>
                </div>
              </li>

              <li class="b--nv__one">
                <div class="b--nv__one__i">
                  <div class="b--nv__one__t js-nv-one">
                    <a
                      class="b--nv__one__a h--tx"
                      href="/contact"
                      aria-label="Contact"
                    >
                      <span class="b--nv__one__lab f--head">
                        <span class="b--nv__one__lab__f h--tx__i">Contact</span>
                        <span class="b--nv__one__lab__b h--tx__i">Contact</span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="b--nv__hr">
                  <div class="b--nv__hr__i js-nv-bd"></div>
                </div>
              </li>
            </ul>
            <div class="b--nv__hr _r">
              <div class="b--nv__hr__i js-nv-bd"></div>
            </div>
          </div>

          <div class="b--nv__ft">
            <div class="b--nv__ft__in">
              <div class="b--nv__ft__bd">
                <div class="b--nv__ft__mt">
                  <div class="b--nv__ft__lg js-nv-op">
                    <a
                      class="b--nv__ft__lg__a h--op"
                      href="../"
                      aria-label="to Home"
                    >
                      <img
                        src="../assets/config/logo.png"
                        style="width: 200%"
                      />
                    </a>
                  </div>
                  <div class="b--nv__ft__sns">
                    <div class="b--nv__ft__sns__one js-nv-op">
                      <a
                        class="b--nv__ft__sns__a h--op"
                        href=""
                        target="_blank"
                        rel="noopener"
                        aria-label="Official facebook"
                      >
                        <svg class="c--sg">
                          <use xlink:href="#s-face"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="b--nv__ft__add">
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
        </div>
      </div>
    </div>
    <canvas class="b--awc" id="-aw"></canvas>
  </div>
  

 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

  <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYe_l9viV0LlwhjyLeS-jRCn95fGYW4lI" defer></script-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js'></script>
   <script src="<?php echo get_template_directory_uri()?>/js/app.js" defer></script>
    <script src="<?php echo get_template_directory_uri()?>/js/scripts.js" defer></script>
    <script src="<?php echo get_template_directory_uri()?>/js/lib.js" defer></script>
    <script src="<?php echo get_template_directory_uri()?>/js/vndr.js" defer></script>
  <script >

let ejecutado = false; // indicador booleano


let ruta_obj =  {}
ruta_obj.ruta = "<?php echo $ruta;?>"


function miFuncion(link) {

  
  
    ejecutado = true; // cambiar el indicador a verdadero
    var newTab=  window.location.replace("/services/index.html", "self");
    newTab.location.reload();
  
}

function miFuncion2(link) {
  
  
  
    ejecutado = true; // cambiar el indicador a verdadero
    var newTab=  window.location.replace("/about/index.html", "self");
    newTab.location.reload();
  
}



// var swiper = new Swiper(".swiper-container", {
//   effect: "coverflow",
//   loop:true,
//   grabCursor: true,
//   centeredSlides: true,
//   slidesPerView: "auto",
//   coverflowEffect: {
//     rotate: 20,
//     stretch: 0,
//     depth: 350,
//     modifier: 1,
//     slideShadows: true
//   },
//   autoplay: {
// 	  delay: 3000,
// 	  disableOnInteraction: false,
// 	},
//   pagination: {
//     el: ".swiper-pagination"
//   }
// });

// document.querySelector(".hamburguer").addEventListener("click", function(){
// 	document.querySelector("#b--nv").classList.toggle("active");
// 	document.querySelector(".hamburguer").classList.toggle("close-hamburguer");
// });


// $(document).ready(function() {
//   if ($("#js-nv").css("opacity") == "1") {
//     $(".hamburguer").css("opacity", "1");
//   } else {
//     $(".hamburguer").css("opacity", "0");
//   }
// });
  </script>
  

</body>
</html>