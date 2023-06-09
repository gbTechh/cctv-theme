<?php

/**
 * Template Name: Page for services
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
      main {
  position: relative;
  width: calc(min(90rem, 90%));
  margin: 0 auto;
  min-height: 32vh;
  column-gap: 3rem;
  padding-block: min(20vh, 1rem);
}

.bg {
  position: fixed;
  top: -4rem;
  left: -12rem;
  z-index: -1;
  opacity: 0;
}

.bg2 {
  position: fixed;
  bottom: -2rem;
  right: -3rem;
  z-index: -1;
  width: 9.375rem;
  opacity: 0;
}

main > div span {
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: 1rem;
  color: #717171;
}

main > div h1 {
  text-transform: capitalize;
  letter-spacing: 0.8px;
  font-family: "Roboto", sans-serif;
  font-weight: 900;
  font-size: clamp(3.4375rem, 3.25rem + 0.75vw, 4rem);
  background-color: #005baa;
  background-image: linear-gradient(45deg, #005baa, #000000);
  background-size: 100%;
  background-repeat: repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
}

main > div hr {
  display: block;
  background: #005baa;
  height: 0.25rem;
  width: 6.25rem;
  border: none;
  margin: 1.125rem 0 1.875rem 0;
}

main > div p {
  line-height: 1.6;
}

main a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  color: #717171;
  font-weight: 500;
  background: #fff;
  border-radius: 3.125rem;
  transition: 0.3s ease-in-out;
}

main > div > a {
  border: 2px solid #c2c2c2;
  margin-top: 2.188rem;
  padding: 0.625rem 1.875rem;
}

main > div > a:hover {
  border: 0.125rem solid #005baa;
  color: #005baa;
}

.swiper {
  width: 100%;
  padding-top: 3.125rem;
}

.swiper-pagination-bullet,
.swiper-pagination-bullet-active {
  background: #fff;
}

.swiper-pagination {
   
}
.swiper-scrollbar{
  
}

.swiper-wrapper{
    bottom:2rem;
}
.swiper-slide {
  width: 18.75rem;
  height: 28.125rem;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: self-start;
}

.swiper-slide h2 {
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.4;
  margin-bottom: 0.625rem;
  padding: 0 0 0 1.563rem;
  text-transform: uppercase;
}

.swiper-slide p {
  color: #dadada;
  font-family: "Roboto", sans-serif;
  font-weight: 300;
  padding: 0 1.563rem;
  line-height: 1.6;
  font-size: 0.75rem;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.swiper-slide a {
  margin: 1.25rem 1.563rem 3.438rem 1.563rem;
  padding: 0.438em 1.875rem;
  font-size: 0.9rem;
}

.swiper-slide a:hover {
  color: #005baa;
}

.swiper-slide div {
  display: none;
  opacity: 0;
  padding-bottom: 0.625rem;
}

.swiper-slide-active div {
  display: block;
  opacity: 1;
}

.swiper-slide--one {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("./img/image_1.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--two {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("./img/image_2.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--three {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("./img/image_3.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--four {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("./img/image_4.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--five {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("./img/image_5.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--six {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("./img/image_6.jpg") no-repeat 50% 50%/cover;
}


.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right {
  background-image: none;
}

@media screen and (min-width: 48rem) {
  main {
    display: flex;
    align-items: center;
  }

  .bg,
.bg2 {
    opacity: 0.1;
  }
}
@media screen and (min-width: 93.75rem) {
  .swiper {
    width: 100%;
  }
}

.swiper-slide .mitexto {
    color: white;
    position: absolute;
    top: 100%;
    color: black;
    opacity: 0;
    margin-top: 20px;
    width: 200%;
    left: -50%;
  transition: all .1s;
  text-align: justify;
    /*background: rgba(255,255,255, .2);*/
}

 .single-view-content {
      height:460px;
      width: 100%;
      overflow-y: auto;
      position: relative;

    }
    
    .team-info {
  padding: 0;
  list-style: none;
  position: relative;
  align-items:center;
}

.team-info .team-info-item {
    font-size: 22px;
    padding: 15px 30px;
    display: none;
    position: absolute;

}

.team-info .team-info-item.active {
  display: block;
}


@-webkit-keyframes team-info-item {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 50px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
  }
}

.team-info-item.active .heading, .team-info-item.active .content{
  -webkit-animation-name: team-info-item;
  animation-name: team-info-item;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-delay: 0s;
}
.team-info-item.active .content {
  -webkit-animation-delay: .2s;
}
.heading {
  margin: 0;
  color: #fff;
  text-align:center;
}
.content {
      font-size: 15px;
    font-weight: 300;
    line-height: 1.5;
    color: #fff;
    margin-top: 15px;
    text-align:center;
}

/* @media screen and(max-width:320px){ */
/* .single-view-content{ */
/* height:620px !important; */
/* } */
 /* .content{ */
/* font-size:14px; */
/* } */
/* } */

/* @media screen and(max-width:480px){ */
 /* .content{ */
/* font-size:14px; */

/* } */

/* .single-view-content{ */
/* height:480px !important; */
/* } */
/* } */

/* @media only screen and(max-width:760px){ */
 /* .content{ */
/* font-size:16px; */
/* } */
/* .single-view-content{ */
/* height:460px !important; */
/* } */


/* } */

/* @media only screen and(min-width:761px){ */
/* .content { */
    /* font-size:19px; */
/* } */
/* } */
@media only screen and(max-width:479px){
   .single-view-content {
      height:800px !important;
     

    }
}


@media only screen and(max-width:849px){
   .alinear{
    text-align:center;
} 
    
}

@media only screen and(max-width:479px){
   .single-view-content {
      height:700px !important;
      .content {font-size:13px !important;}

    }
}

@media only screen and(max-width:768px){
   .single-view-content {
      height:560px !important;
     .content {font-size:14px !important;}

    }
}

    </style> 

   <?php get_template_part( 'template-parts/svg' ); ?>
	<?php get_template_part( 'template-parts/loading/loading' ); ?>
 <?php get_template_part( 'template-parts/hamburger/hamburger' ); ?>
 

  
  <div class="b--wrap -loadhidden" id="js-wrap" data-pj="w">  
    <div class="b--ct" id="js-ct" data-pj="c" data-pj-dir="about">

    <!--menu-->
      <div class="b--pw -siteparts" id="js-pw">
          <!--menu-->

      <div class="ab--kv">

        <header class="m--phd">
          <div class="m--phd__in js-pos js-tdr" data-de=".03">
            <h1 class="m--phd__ttl f--head js-tex alinear" data-class="a--op js-tdi">Services</h1>
          </div>
        </header>

        <section class="ab--cp" style="margin:0 !important;padding:0 !important;">
                     
          <main>      
            <div class="swiper swiper-container">
              <div class="swiper-wrapper">
                <?php get_all_services_swiper_slide();?>
               
                
                
              </div>
              <!-- Add Pagination -->
              <div class="swiper-scrollbar"></div>
            </div>   
          </main>


          <aside class="single-view-content">
            <ul class="team-info">
                <?php get_swiper_view_content();?> 
            </ul>
          </aside>      

        </section>
        
      </div>


      </div>
    </div>
  </div>


   <?php get_template_part( 'template-parts/header/navbar-mobil' ); ?>

    <div class="b--aw">
      <canvas class="b--awc" id="-aw"></canvas>
    </div>



<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<?php get_footer(); ?>