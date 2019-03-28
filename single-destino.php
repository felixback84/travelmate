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
          <h1 class="text-white font-weight-medium"><?php the_title();?></h1>
        </div>

        <?php $precioDestino = get_field('precio_destino'); ?>
        <div class="w-md-75 w-lg-50 mx-md-auto">
          <div class="mb-5">
            <h2 class="h2 text-white">Viaja desde <?php echo $precioDestino ?> x persona</h2>
            <hr class="my-2">
            <h6 class="d-block text-white">Los precios están sujetos a cambios según las fechas, la disponibilidad y tus elecciones.</h6>
          </div>
          <a class="btn btn-primary btn-wide mb-2 mb-md-0" href="">
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
          <h3><?php the_title();?></h3>   
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
  <div class="container text-center space-2 space-0--lg">
    <!-- Title -->
    <div class="w-md-80 text-center mx-auto mb-5">
      <h1 style="color: #000042;">¿Por qué viajar a <?php the_title();?>?</h1>
      
    </div>
  </div> 

  <?php if( have_rows('razones_destino') == 1) { ?>
   
  <div class="p-5" style="background-color: #ddd;">
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
      ?>     

        <div class="js-slide">

          <?php if( $imagen ): ?>
          <div class="">
            <img class="rounded-circle mr-3 mx-auto d-block" src="<?php echo $imagen['url'];?>" alt="<?php echo $imagen['alt'];?>">
          </div>
          <?php endif; ?>
    
          <?php if( $titulo ): ?>
          <h3 class="text-muted text-center"><?php echo $titulo;?></h3>
          <?php endif; ?>
          <hr class="my-2">
          <?php if( $contenido ): ?>
          <p class="lead"><?php echo $contenido;?></p>
          <?php endif; ?>
         
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
    <div class="w-md-80 text-center mx-auto mb-9">
      <h1 style="color: #000042;">Rutas en <?php the_title();?></h1>
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
        <article class="card mb-1 bg-white shadow p-2 col-xl-4 col-md-4 col-xs-4">
          <div class="card-body row align-items-stretch no-gutters p-0">
            <div class="col-12">
              <div class="p-5">
                <span>
                  <!-- banderas -->
                  <?php
                    foreach($ciudadesRegiones as $id){ 
                    $img = get_field('bandera_paises', $id);
                    //echo print_r($img['url']);
                    echo '<img class="u-avatar mb-1" style = "width:15%; height:15%" src="'.$img['url'].'">';
                  }?>    
                  <!-- end banderas -->
                </span>

                <h2 class="h5 mb-3">
                  <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a>
                </h2>

                <span>
                  <hr class="my-1">
                  <img class="u-avatar" style = "width:25%; height:25%" src="<?php 
                    $icon = wp_get_attachment_image_url('1534','iconsMini',true );
                    echo $icon;
                    ?>">
                  <h3 style="color: #000042" class="d-block"><?php echo $numeroDias;?></h3>
                  <h6 style="color: #000042">Dias</h6>
                </span>

                <span>
                  <hr class="my-1">
                  <img class="u-avatar" style = "width:25%; height:25%" src="<?php 
                    $icon = wp_get_attachment_image_url('1535','iconsMini',true );
                    echo $icon;
                    ?>">
                  <h6 style="color: #000042">Valor mínimo</h6>
                  <h3 style="color: #000042" class="d-block"><?php echo $precioRuta;?> USD</h3>
                  <h6 style="color: #000042">x por persona</h6>
                </span>
              </div>
            </div>
            
          </div>
        </article>
      <?php
      } wp_reset_postdata();?>
      
    </div>  
  </div>  
  <!-- end rutas destinos -->

  <!-- viaje nuevo -->
  <div style="background-color: #000042">
    <div class="container">
      <div class="row justify-content-md-left align-items-md-left py-5">    
        <div class="col-lg-9 col-md-3">
          <h2 class="text-white mb-1">Si tienes otro viaje en mente</h2>
          <p class="lead text-light">Ponte en contácto con nosotros ya, sabemos como hacerlo mejor para ti.</p>
        </div>
        <div class="col-lg-3 col-md-3 mt-4">
          <span class="input-group-append form__append">
            <button type="submit" class="btn btn-block btn-primary btn-wide">Contáctanos ya</button>
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
            <header class="card-header p-5">
              <?php if( $iconDest ): ?>
              <img class=" mr-3 mx-auto d-block" src="<?php echo $iconDest['url'];?>" alt="<?php echo $iconDest['alt'];?>">
              <?php endif; ?>
              <span class="d-block">
                <?php if( $tituloDest ): ?>
                <span class="d-block text-primary font-size-18"><?php echo $tituloDest;?></span>
                <?php endif; ?>
              </span>
            </header>
            <?php if( $infoDest ): ?>
            <div class="card-body p-5">
              <p class="lead"><?php echo $infoDest;?></p>
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