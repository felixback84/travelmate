<?php

//if (is_user_logged_in()){
get_header();
?>
<!-- Header Hero Section -->
<main id="content" role="main">
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBannernew' );?>
  <div id="post" class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumb['0'];?>')">
    <!-- Main Content -->
    <div class="d-lg-flex align-items-lg-center">
      <div class="container space-2 space-0--lg mt-lg-8">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Title -->
            <h1 class="display-4 font-size-28--md-down text-white">Explora el mundo con nosotros</h1>
            <!-- End Title -->
            <div class="pb-6">
              <a class="btn btn-info" href="">Comienza con Travelmate</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Content -->
  </div>
  
<!--  Header End Hero Section -->

<div class="container text-center pt-6">
  <h2 style="color: #000042; text-align: left;">Destinos</h2>
</div>

<div class="container py-3">
  <div class="js-slick-carousel u-slick u-slick--gutters-3 u-slick--equal-height u-slick--pagination-modern"
     data-slides-show="3"
     data-slides-scroll="2"
     data-pagi-classes="u-slick__pagination mt-2 mr-1"
     data-responsive='[{
       "breakpoint": 992,
       "settings": {
         "slidesToShow": 2
       }
     }, {
       "breakpoint": 768,
       "settings": {
         "slidesToShow": 1
       }
     }]'>

    <?php 
    $destinosAndRegiones = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => array('destino', 'region'),
    'orderby' => 'title',
    'order'   => 'ASC',
    ));?>

    <!--  destinations-->

    <?php while($destinosAndRegiones->have_posts()) {
    $destinosAndRegiones->the_post(); 
    $precioDestino = get_field('precio_destino'); 
    $precioDestinoRegional = get_field('precio_destino_regional');
    ?>
    <div class="js-slide">
      <article class="card my-2">
        <img class="card-img-top bg-white p-2" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('homeDestinoCover');}?>" 
        alt="<?php the_title_attribute()?>">
          
        <div class="card-body p-2">  
          <h3 class="h5">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
          </h3>
          <hr class="my-2">
            <span class="h5 d-inline-block text-primary mb-1"><small class="text-secondary">Desde </small><?php echo $precioDestinoRegional;?><?php echo $precioDestino;?></span>
            <small class="text-secondary"> por persona</small>
          </span>
          <!-- End Pricing -->
          <a class="btn btn-block btn-outline-info" href="">Descubre</a>      
        </div>
      </article>
    </div>  
    <?php } wp_reset_postdata();?>
  </div>
</div> 
<!-- end destinations-->

<!-- viaje nuevo -->
<div style="background-color: #bbb">
  <div class="container">
    <div class="row justify-content-md-left align-items-md-left py-5">    
      <div class="col-lg-9 col-md-3">
        <p class="text-light px-3">¨Todos nuestros planes base son 100%
      personalizables / cada elemento puedes adaptarlo según tus necesidades, intereses
      y presupuesto, desde la duración hasta el alojamiento o las actividades¨</p>
      </div>
      <div class="col-lg-3 col-md-3">
        <span class="input-group-append form__append">
          <button type="submit" class="btn btn-block btn-primary btn-wide">Contáctanos ya</button>
        </span>
      </div>     
    </div>
  </div>
</div>
<!-- End viaje nuevo -->


<!-- como funciona Section -->
<?php 

$icon1 = get_field('1_imagen_enunciado_funcionamiento');
$pre1 = get_field('1_enunciado_pregunta_funcionamiento');
$resp1 = get_field('1_respuesta_a_enunciado_funcionamiento');

$icon2 = get_field('2_imagen_enunciado_funcionamiento');
$pre2 = get_field('2_enunciado_pregunta_funcionamiento');
$resp2 = get_field('2_respuesta_a_enunciado_funcionamiento');

$icon3 = get_field('3_imagen_enunciado_funcionamiento');
$pre3 = get_field('3_enunciado_pregunta_funcionamiento');
$resp3 = get_field('3_respuesta_a_enunciado_funcionamiento');

?>

<div class="container mb-5">
  <!-- Title -->
  <div class="container text-center py-6">
    <h2 style="color: #000042; text-align: left;">¿Cómo funciona?</h2>
  </div>
  <!-- End Title -->
  <div class="row">
    <div class="col-lg-4">
      <div class="media pr-lg-2">
        <img class="max-width-12 mr-3" src="<?php echo $icon1{'url'};?>" alt="<?php $icon1{'alt'};?>">
        <div class="media-body">
          <h3 class="h6"><?php echo $pre1;?></h3>
          <p class="mb-0"><?php echo $resp1;?></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="media pr-lg-2">
        <img class="max-width-12 mr-3" src="<?php echo $icon2{'url'};?>" alt="<?php $icon2{'alt'};?>">
        <div class="media-body">
          <h3 class="h6"><?php echo $pre2;?></h3>
          <p class="mb-0"><?php echo $resp2;?></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="media pr-lg-2">
        <img class="max-width-12 mr-3" src="<?php echo $icon3{'url'};?>" alt="<?php $icon3{'alt'};?>">
        <div class="media-body">
          <h3 class="h6"><?php echo $pre3;?></h3>
          <p class="mb-0"><?php echo $resp3;?></p>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- end como funciona Section -->

<!-- Tarifa -->
<?php 

$mesajeTarifa = get_field('mensaje_tarifa_home');
$valorTarifa = get_field('valor_tarifa_por_persona_home');


?>

<div class="p-3 mb-2 text-white" style="background-color: #000042;">
  <div class="container space-2 space-1--lg">
    <div class="w-md-80 w-lg-60 text-center mx-md-auto pt-3 mb-5">
      <h1 style="color: #15DA94;">Tarifas</h1>
      <p class="text-white"><?php echo $mesajeTarifa;?></p>
      <h1 style="color: #15DA94;"> <?php echo $valorTarifa;?></h1>
      <p class="text-white">x Persona x día</p>
    </div>

    <hr class="my-5">

    <div class="row">

      <?php
      if( have_rows('frases_en_tarifa') ): ?>
        <?php while( have_rows('frases_en_tarifa') ): the_row();
          
          $contenidoFrase = get_sub_field('frase_tarifa');
          
      ?>

      <div class="col-4">
        <!-- List -->
        <ul class="list-unstyled text-secondary">
          <li class="media align-items-center mb-2">
            <span class="fa fa-check mr-2 text-white"></span>
            <?php if ('contenidoFrase'):?>
            <div class="media-body text-white">
              <?php echo $contenidoFrase;?>
            </div>
            <?php endif;?>
          </li>
        </ul>
        <!-- End List -->
      </div>
      <?php 
      endwhile;
      endif;?>
    </div>  

  </div>
</div>

<!-- End tarifa -->

<!-- porque nosotros -->

<div class="container text-center py-6">
  
    <?php
    $fraseRazon = get_field('frase_razon');
     ?>
    <h2 style="color: #000042; text-align: left;">¿Por qué nosotros?</h2>
    <p style="text-align: left;"><?php echo $fraseRazon;?></p>
  
  <div class="container">
    <div class="row">
      <?php

        if( have_rows('razones_para_viajar_con_nosotros') ): ?>
          <?php while( have_rows('razones_para_viajar_con_nosotros') ): the_row();
            
            $titulo = get_sub_field('titulo_razon');
            $contenido = get_sub_field('descripcion_razon');
            $imagen = get_sub_field('foto_de_la_razon');

          ?>
          
      <div class="text-center border p-3 col-lg-3 my-2" style="background-color: #f4f2f2">
        <div class="text-center px-lg-3">
          <?php if( $imagen ): ?>
          <img class="max-width-14" src="<?php echo $imagen['url'];?>" alt="<?php echo $imagen['alt'];?>">
          <?php endif; ?>
          <?php if( $titulo ): ?>
          <h3 class="h4"><?php echo $titulo;?></h3>
          <?php endif; ?>
          <?php if( $contenido ): ?>
          <p class="mb-0"><?php echo $contenido;?></p>
          <?php endif; ?>
        </div>
      </div>
      
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
</div>
<!-- end porque nosotros -->

<!-- Bloc Testimonials -->



<div class="container-fluid py-3" style="background-color: #fafafa">
  <div class="container text-center pt-1 pb-3">
    <h2 style="color: #000042; text-align: left;">Experiencias</h2>
  </div>
  <div class="container">
  <div class="js-slick-carousel u-slick u-slick--gutters-3 u-slick--equal-height u-slick--pagination-modern"
     data-slides-show="2"
     data-slides-scroll="2"
     data-pagi-classes="u-slick__pagination mt-2 mr-1"
     data-responsive='[{
       "breakpoint": 992,
       "settings": {
         "slidesToShow": 2
       }
     }, {
       "breakpoint": 768,
       "settings": {
         "slidesToShow": 1
       }
     }]'>
      
<?php 

    $comentariosViajeros = new WP_Query(
      array(

      'posts_per_page' => -1,
      'post_type' => 'post',
      'tax_query' =>  array(
                            array(
                                  'taxonomy' => 'category',
                                  'field'    => 'slug',
                                  'terms'    => array( 'experiencias-travelmate' ),
                            ), 
                      ),
            )
  );

  while($comentariosViajeros->have_posts()) {
      $comentariosViajeros->the_post(); ?>

    <!-- Card -->
    <div class="card-deck d-block d-lg-flex">
      <div class="js-slide">
        <article class="card rounded mb-5">
          <div class="card-body row align-items-stretch no-gutters p-0">
            <!-- News Blog Card -->
              <div class="col-7">
                <div class="p-5">
                  <h6><?php echo get_the_author();?></h6>
                  <h2 class="h5 mb-3">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                  </h2>
                  <p class="mb-0"><?php echo wp_trim_words(get_the_content(),18);?></p>
                </div>
              </div>
              <div class="col-5 card-img-right d-none d-inline-block bg-img-hero" data-bg-img-src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('blogCover');}?>">
              </div>
          </div>
          <!-- End News Blog Card -->
        </article> 
      </div>
    </div>  
  <!-- End Card -->        
  <?php } wp_reset_postdata();?>
  </div>  
  </div> 
</div>
<!-- End Bloc Testimonials -->

<!-- CTA Section -->
<div class="container space-2">
  <div class="row align-items-md-center">
    <div class="col-md-6 mb-5 mb-md-0">
      <h2 class="h4 mb-1">Inscríbete a nuestro newsletter</h2>
      <p class="mb-0">Aceptas recibir emails & noticias de Travelmate.</p>
      <a href="">¿Cómo se utilizan mis datos?</a>
    </div>

    <div class="col-md-6">
      <!-- Form -->
      <?php echo do_shortcode('[wpforms id="1605"]'); ?>
      <!-- End Form -->
    </div>
  </div>
</div>
<!-- End CTA Section -->

<?php

get_footer();

//} else {?>

<!-- <div class="container space-2" style="padding-top: 320px;">
  <div class=" text-center ">
    <h1 style="color: #000042; text-align: center;">Travelmate está en desarrollo</h1>
    <h3 style= "text-align: center;">Pronto estaremos al aire</h3>
    <h2 style="color: #000042; text-align: center;">;)</h2>
  </div>
</div> -->

<?php //};
