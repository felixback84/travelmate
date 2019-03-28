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

        <?php $precioDestinoRegional = get_field('precio_destino_regional'); ?>
        <div class="w-md-75 w-lg-50 mx-md-auto">
          <div class="mb-5">
            <h2 class="h2 text-white">Viaja desde <?php echo $precioDestinoRegional ?> x persona</h2>
            <hr class="my-2">
            <h6 class="d-block text-white">Los precios están sujetos a cambios según las fechas, la disponibilidad y tus elecciones.</h6>
          </div>
          <a class="btn btn-primary btn-wide mb-2 mb-md-0" href="">
            Inicia tu viaje
            <span class="fa fa-angle-right ml-2"></span>
          </a>
          <div class="pt-5">
          <?php
            $ciudadesRegiones = get_field('ciudades_regiones');
            $img = get_field('bandera_paises');
            foreach($ciudadesRegiones as $id){ 
              $img = get_field('bandera_paises', $id);
              //echo print_r($img['url']);
                echo '<img class="u-avatar rounded-circle mx-1" src="'.$img['url'].'">';
            }?>
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
  <?php if( have_rows('ubicaciones_destinos_ciudades') ): ?>
  <div id="GMapSatellite" class="acf-map">
    <?php while ( have_rows('ubicaciones_destinos_ciudades') ) : the_row(); 
    $location = get_sub_field('google_map_destino_region');
    ?>
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
      <h4><?php the_sub_field('destino_para_region'); ?></h4>
      <p class="address"><?php echo $location['address']; ?></p>
    </div>
  <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <!-- end Gmap -->

  <!-- loop paises en regiones -->
  <?php

  $termsPost = wp_get_post_terms( $post->ID, 'ubicacion_regiones', array("fields" => "names"));
  //var_dump($termsPost);
  $destinos = new WP_Query(array(
  'posts_per_page' => -1,
  'post_type' => 'destino',
  'tax_query' => array(
      array(
        'taxonomy' => 'ubicacion_destinos',
        'field' => 'slug',
        'terms' => $termsPost[1] ,
      ),
    ),
  ));

  while($destinos->have_posts()) {
      $destinos->the_post();
      $img = get_field('bandera_paises');
      //$preciosDestino = get_field('precio_destino');
      ?>
  
  <div class="container space-1 space-1--lg">         
    <div class="row align-items-lg-center">          
      <div class="col-md-6 order-md-2 mb-5 mb-md-0">
        <div class="mb-2">
          <!-- Title -->
          <h3>
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
            <span>
              <a>
              <?php
                $img = get_field('bandera_paises');
                echo '<img class="u-avatar rounded-circle mx-1" style = "width:7%; height:7%" src="'.$img['url'].'">';
              ?>
              </a>
            </span>
          </h3>
          <!-- Divider -->
          <hr class="my-2">
          <!-- end Divider -->
          <p><?php the_excerpt();?></p>
          <!-- End Title -->
          <!-- btn -->
          <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0 mr-sm-2" href="<?php the_permalink();?>">Descubre</a>
          <!-- btn -->
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <div class="pr-lg-4">
          <img class="img-fluid bg-white shadow p-2" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('pageDestinoCover');}?>"alt="<?php the_title_attribute()?>">
        </div>
      </div>
    </div>  
  </div>
  <?php } wp_reset_postdata();?>
  <!-- end loop paises en regiones -->

  <!-- Razones región -->
  <div class="container text-center space-2 space-0--lg">
    <!-- Title -->
    <div class="w-md-80 text-center mx-auto mb-5">
      <h1 style="color: #000042;">¿Por qué viajar a <?php the_title();?>?</h1>
      
    </div>
  </div> 
   
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

  <!-- Hero Slick Paging -->
  <div class="container position-relative" style="text-color: #000042">
    <div id="slickPaging" class="u-slick__paging-v1"></div>
  </div>
  <!-- End Hero Slick Paging --> 
  
  <!-- end razones región -->
  <div class="container text-center space-1">
    <div class="w-md-80 text-center mx-auto mb-5">
      <h1 style="color: #000042;">Rutas en <?php the_title();?></h1>
    </div>

    <!-- rutas regionales -->
    <div class="card-deck d-block d-lg-flex">
      <?php

      $termsPost = wp_get_post_terms( $post->ID, 'ubicacion_regiones', array("fields" => "names"));
      //var_dump($termsPost);
      $rutas = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'ruta',
      'tax_query' => array(
          array(
            'taxonomy' => 'ubicacion_rutas',
            'field' => 'slug',
            'terms' => $termsPost[1] ,
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
                    echo '<img class="u-avatar rounded-circle mb-1" style = "width:15%; height:15%" src="'.$img['url'].'">';
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
       <?php } wp_reset_postdata();?>
      </div>
    </div>  
    <!-- end rutas regionales -->

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

    <div class="bg-light p-5">
      <div class="conatiner text-center mx-auto">
        <div class="w-md-80 text-center mx-auto mb-9">
          <h1 style="color: #000042;">Temporadas</h1>
          <hr class="my-1">
        </div>
        <div class="row">
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1537','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Ene</a></p>
          </div> 
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1537','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Feb</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1538','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Mar</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1536','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Abr</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1536','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">May</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1538','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Jun</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1538','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Jul</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1538','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Ago</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1536','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Sep</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1536','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Oct</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1537','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Nov</a></p>
          </div>
          <div class="col-1">
            <img class="u-avatar rounded-circle"  src="<?php 
                      $icon = wp_get_attachment_image_url('1537','iconsMini',true );
                      echo $icon;
                      ?>">
            <p><a href="#" class="text-secondary">Dic</a></p>
          </div> 
        </div>
      </div>

      <div class="container">
        <div class="row">
          
          <?php

          if( have_rows('info_temporadas') ):
              while( have_rows('info_temporadas') ): the_row();
                
              $meses = get_sub_field('meses_temporada');
              $tipo = get_sub_field('tipo_de_temporada');
              $infoTemp = get_sub_field('informacion_periodo');

          ?>
          
          <div class="col-md-4 mt-5">
            <div class="card text-center shadow border-0">
              <header class="card-header p-5">
                <?php if( $meses ): ?>
                <h2 class="h5 mb-4"><?php echo $meses;?></h2>
                <?php endif; ?>
                <span class="d-block">
                  <?php if( $tipo ): ?>
                  <span class="d-block text-primary font-size-18"><?php echo $tipo;?></span>
                  <?php endif; ?>
                </span>
              </header>
              <?php if( $infoTemp ): ?>
              <div class="card-body p-5">
                <p class="lead"><?php echo $infoTemp;?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php 
            endwhile;
            ?>
          <?php 
          endif; ?> 
        </div> 
      </div>
    </div>
    <!-- end consejos temporadas -->
<?php }
get_footer();
?>