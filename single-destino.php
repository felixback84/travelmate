<?php
get_header();

while(have_posts()) {
    the_post();?>

<!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <?php $thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBannernew' );?>
    <div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumb2['0'];?>');">
      <!-- Info -->
      <div class="container text-center space-1">
        <div class="w-lg-75 mx-lg-auto">
          <h2 class="text-white font-weight-medium"><?php the_title();?></h2>
        </div>

        <?php $precioDestino = get_field('precio_destino'); ?>
        <div class="w-md-75 w-lg-50 mx-md-auto">
          <div class="mb-5">
            <h3 class="text-white">Viaja desde <?php echo $precioDestino ?> x persona</h3>
            <hr class="my-2">
            <h6 class="d-block text-white">Los precios están sujetos a cambios según las fechas, la disponibilidad y tus elecciones.</h6>
          </div>
          <a class="btn btn-info btn-wide mb-2 mb-md-0" href="<?php echo site_url('/inicia-tu-viaje-new/');?>">
            Inicia tu viaje
            <span class="fa fa-angle-right ml-2"></span>
          </a>
          <div class="pt-5">
          <?php
              $img = get_field('bandera_paises');
              echo '<img class="u-avatar rounded-circle mx-1" src="'.$img['url'].'">';
            ?>
          </div>
        </div>
      </div>
      <!-- End Info -->
    </div>
  </main> 
  <!-- End Hero Section --> 
    
  <!-- main sector region -->
  <div class="position-relative">
    <div class="container">
      <div class="row align-self-lg-center space-2">
        <div class="col-lg-12">
          <!-- Title -->   
          <p><?php the_content();?></p>
          <!-- End Title -->
        </div>
      </div>
    </div>
  </div>
  <!-- End main sector region -->

  <!-- Gmap -->
  <?php if( have_rows('destino_ubicacion') ): ?>
  <div class="acf-map">
    <?php while ( have_rows('destino_ubicacion') ) : the_row(); 
    $location = get_sub_field('ubicacion_ciudad_destino');
    ?>
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
      <h4><?php the_sub_field('nombre_ciudad_destino'); ?></h4>
      <p class="address"><?php echo $location['address']; ?></p>
    </div>
  <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <!-- end Gmap -->

  <!-- Razones región -->

  <?php if( have_rows('razones_destino') == 1) { ?>
   
  <!-- Razones región -->
  <div class="py-6" style="background-color: #ddd;">
    <div class="w-md-80 text-center mx-auto mb-5">
      <h2 style="color: #000042;">¿Por qué viajar a <?php the_title();?>?</h2>
    </div>
    <hr class="py-3">
    <div class="col-md-12">
      <!-- Slick Carousel - Testimonials -->
      <div class="container js-slick-carousel u-slick"
           data-fade="true"
           data-infinite="true"
           data-autoplay="true"
           data-speed="7500"
           data-pagi-classes="u-slick__pagination justify-content-center mt-7"
           data-numbered-pagination="#slickPaging">
      
      <?php

      if( have_rows('razones_destino') ):
        while( have_rows('razones_destino') ): the_row();
          
          $titulo = get_sub_field('titulo_razon_destino');
          $contenido = get_sub_field('texto_de_razon_destino');
          $imagen = get_sub_field('icono');
          $imagenRazon = get_sub_field('icono_contenido');
      ?>      

        <div class="js-slide">
          <div class="row align-items-lg-center">
            <div class="col-md-10 order-md-2 mb-5 mb-md-0">
              <div class="mb-4">
                <!-- Title -->

                <?php if( $titulo ): ?>
                <h3>
                  <?php if( $imagen ): ?>
                  <span style="padding-left: 10px">
                    <img style="float: left;" class="u-avatar rounded-circle mx-1" src="<?php echo $imagen['url'];?>" alt="<?php echo $imagen['alt'];?>" style="height: 60px; width: 60px">
                  </span>
                  <?php echo $titulo;?>
                  <?php endif; ?>
                </h3>
                <?php endif; ?>

                <?php if( $contenido ): ?>
                <p><?php echo $contenido;?></p>
                <?php endif; ?>

                <!-- End Title -->
              </div>
            </div>
            <div class="col-md-2 order-md-1">
              <div class="">
                <img class="" src="<?php echo $imagenRazon['url'];?>" alt="<?php echo $imagenRazon['alt'];?>" style="display: block;margin-left: auto; margin-right: auto;">
              </div>
            </div>
          </div>
        </div>
      <?php 
      endwhile;
      ?>
      </div>
    <?php 
    endif;
    ?>
    <!-- End Slick Carousel - Testimonials -->
    </div>
  </div>
<?php };?>

  <!-- Hero Slick Paging -->
  <div class="container position-relative" style="text-color: #000042">
    <div id="slickPaging" class="u-slick__paging-v1"></div>
  </div>
  <!-- End Hero Slick Paging -->

  <!-- Title -->
  <div class="container text-center space-1">
    <div class="w-md-80 text-center mx-auto mb-5">
      <h2 style="color: #000042;">Rutas</h2>
    </div>

  <!-- rutas destinos -->
    <div class="card-deck">
    
      <?php

      $termsPost = wp_get_post_terms( $post->ID, 'ubicacion_destinos', array("fields" => "names"));
      //var_dump($termsPost);
      $rutas = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'ruta',
      'tax_query' => array(
          array(
            'taxonomy' => 'ubicacion_rutas',
            'field' => 'slug',
            'terms' => $termsPost[2] ,
        ),
      ),
    ));

      while($rutas->have_posts()) {
          $rutas->the_post(); 
          $ciudadesRegiones = get_field('ciudades_regiones');
          $img = get_field('bandera_paises');
          $precioRuta = get_field('precio_ruta_basico');
          $numeroDias = get_field('numero_de_dias_ruta');
          ?>
        <article class="card mb-3 img-fluid bg-white shadow">
          <img class="card-img-top" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('blogCover');}?>" alt="<?php the_title_attribute();?>" style="height: 250px;">
          <div class="card-body p-2">
            <h5 class="">
              <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h5>
            <hr class="my-1">
            <p>Desde <span class="text-primary"><?php echo $precioRuta;?></span> COP / <?php echo $numeroDias;?> dias</p>
            <a class="btn btn-outline-info btn-block mb-2 mb-md-0 mr-sm-2" href="<?php the_permalink();?>">Descubre</a>
          </div>
        </article>
      <?php
      } wp_reset_postdata();?>
      
    </div>  
  </div>  
  <!-- end rutas destinos -->

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
            <a class="btn btn-block btn-primary" href="<?php echo site_url('/contactenos/')?>">Contáctanos ya</a>
          </span>
        </div>     
      </div>
    </div>
  </div>
  <!-- End viaje nuevo -->

  <!-- consejos temporadas -->
  <?php if( have_rows('datos_importantes_destino') == 1) { ?>
    
  <div class="bg-light p-5">
    <div class="conatiner text-center mx-auto">
      <div class="container">
        <div class="row">
          
        <?php

        if( have_rows('datos_importantes_destino') ):
            while( have_rows('datos_importantes_destino') ): the_row();

            $iconDest = get_sub_field('icono_info_destino');
            $tituloDest = get_sub_field('titulo_info_destino');
            $infoDest = get_sub_field('informacion_info_destino');

        ?>
        
        <div class="col-md-4 mt-5">
          <div class="card text-center shadow border-0">
            <header class="card-header p-2">
              <?php if( $iconDest ): ?>
              <img class=" mr-3 mx-auto d-block" src="<?php echo $iconDest['url'];?>" alt="<?php echo $iconDest['alt'];?>" style="height: 30%; width: 30%">
              <?php endif; ?>
              <span class="d-block">
                <?php if( $tituloDest ): ?>
                <span class="d-block font-size-18" style="color: #000042"><?php echo $tituloDest;?></span>
                <?php endif; ?>
              </span>
            </header>
            <?php if( $infoDest ): ?>
            <div class="card-body p-5">
              <p><?php echo $infoDest;?></p>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php 
          endwhile;
          ?>
          </div>
        <?php 
        endif; ?> 
      </div> 
    </div> <?php }; ?>
  </div>
  <!-- end consejos temporadas -->
<?php }

get_footer();
?>