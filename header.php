<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php cctv_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Noto+Sans+JP:wght@500&amp;family=Noto+Serif+JP:wght@500&amp;family=Poppins:wght@500&amp;display=swap" rel="stylesheet">
  
	<?php wp_head(); ?>


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

<body <?php body_class(); ?>>
<button class="b--hm " type="button" aria-label="Navigation Controlr" id="js-hm2">
  <span class="b--hm__in">
  <?php the_custom_logo('<div style="width: 200%;">','</div>'); ?>
  </span>
</button>
<?php wp_body_open(); ?>
<!--<?php get_template_part( 'template-parts/loading/loading' ); ?>-->
<div id="page" class="prueba">	
	<?php get_template_part( 'template-parts/header/header-front' ); ?>


	<main id="main" class="site-main">
