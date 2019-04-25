<?php

get_header();

if (is_user_logged_in()) {

while(have_posts()) {
    the_post();

    $idUsuario = get_current_user_id();
    $idViajero = get_field('id_usuario');
    $estadoUser = get_field('estado_viajero');
    $estado1 = 'Pre viaje';
    $estado2 = 'En viaje';

    if ( !is_admin() AND $idUsuario == $idViajero AND $estadoUser == $estado1 OR $estadoUser == $estado2 ) {

    ?>

<main id="content" role="main" class="pt-5 ">
  <div class="container">
    <div class="w-lg-60 text-center mx-lg-auto mb-1">
  		<!-- Author -->
    	<img class="rounded-circle mb-3" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('avatarCover');}?>" alt="Image Description">
    	<!-- End Author -->
    	<!-- Title -->
    	<div class="mb-7">
      	<h2 class="text-muted font-weight-medium">Hola, <?php the_title();?></h2>
      </div>
    	<!-- End Title -->
    </div>
  </div>
            
  <!-- Tab Nav -->
  <div class="nav nav-tabs justify-content-center tab-modern" id="navbar-viajero" aria-orientation="vertical">
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
     id="h-tab-vuelos-tab" 
     href="#vuelos">
     <h3><i class="fas fa-plane"></i></h3>
      Transporte
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
      id="h-tab-hoteles-tab" 
      href="#hoteles">
      <h3><i class="fas fa-bed"></i></h3>
      Alojamientos      
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
     id="h-tab-tours-tab" 
     href="#tours">
     <h3><i class="fas fa-map-marked-alt"></i></h3>
      Excursiones
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
      id="h-tab-itinerario-tab" 
      href="#itinerario">
      <h3><i class="fas fa-suitcase"></i></h3>
      Itinerario
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
      id="h-tab-experiencia-tab" 
      href="#experiencia">
      <h3><i class="fas fa-user-check"></i></h3>
      Experiencia
    </a>
  </div>
  <!--  End Tab Nav -->

  <div data-spy="scroll" class="container" data-target="#navbar-viajero" data-offset="0">
    <!--  vuelos -->
    <div id="vuelos">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <h2><i class="fas fa-plane"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Transporte</h2>
            <div class="py-2">
              <div class="card-mb card-sm-columns card-sm-2-count">

            <?php

            $current_user = wp_get_current_user();
            $vuelos = new WP_Query(
                  array(

                  'posts_per_page' => -1,
                  'post_type' => 'vuelo',
                  'tax_query' =>  array(
                                        array(
                                              'taxonomy' => 'nombre_de_viajeros',
                                              'field'    => 'slug',
                                              'terms'    => $current_user->user_nicename,
                                        ), 
                                  ),
                        )
              );

            while($vuelos->have_posts()) {
            $vuelos->the_post(); 
            $tipoTransporte = get_field_object('field_5cb65abd14932');
            $fecha = get_field('field_5c1c3a36c2c39'); 
            $hora = get_field('field_5cbdc769ee009');
            $ruta = get_field('field_5cb66049dfb71');

                ?>

                <div class="pt-3 card border-1 mt-1 p-3" style="background-color: #f1f1f1">
                  <span class="">
                    <h3 class="d-inline-block" style="padding-right: 5px;"><i class="fas fa-plane"></i></h3>
                    <a class="d-inline-block" href="<?php echo get_the_permalink();?>">
                      <h4 class="h5 mb-0"><?php echo get_the_title();?></h4>
                    </a>
                  </span>
                
                  <hr class="my-2">
          
                  <p>Tipo: <?php echo $tipoTransporte['value'];?></p>
                  <p>Fecha y hora: <?php echo $fecha . ' - ' . $hora ;?></p>
                  <p>Ruta: <?php echo $ruta;?></p>
                  <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink();?>">
                    Conoce más
                    <span class="fa fa-angle-right ml-2"></span>
                  </a>
                </div>
                <?php } wp_reset_postdata();?>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </div>
    <!--  end vuelos -->

    <!--  hoteles -->
    <div class="" id="hoteles">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <!-- Title -->
            <h2><i class="fas fa-bed"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Alojamientos</h2>
            <div class="py-2">
              <div class="card-mb card-sm-columns card-sm-2-count">

                <?php

                $current_user = wp_get_current_user();
                $hoteles = new WP_Query(
                      array(

                      'posts_per_page' => -1,
                      'post_type' => 'hotel',
                      'tax_query' =>  array(
                                            array(
                                                  'taxonomy' => 'nombre_de_viajeros',
                                                  'field'    => 'slug',
                                                  'terms'    => $current_user->user_nicename,
                                            ), 
                                      ),
                            )
                  );

                while($hoteles->have_posts()) {
                $hoteles->the_post(); 
                $ciudadHotel = get_field_object('field_5cb7b8561eb64');
                
                ?>

                <div class="pt-3 card border-1 mt-1 p-3" style="background-color: #f1f1f1">
                  <span class="">
                    <h3 class="d-inline-block" style="padding-right: 5px;"><i class="fas fa-bed"></i></h3>
                    <a class="d-inline-block" href="<?php echo get_the_permalink();?>">
                      <h4 class="h5 mb-0"><?php echo get_the_title();?></h4>
                    </a>
                  </span>
                
                  <hr class="my-2">
          
                  <p>Ciudad: <?php echo $ciudadHotel['value'];?></p>
                  <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink();?>">
                    Conoce más
                    <span class="fa fa-angle-right ml-2"></span>
                  </a>
                </div>
                <?php } wp_reset_postdata();?>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
    <!--  end hoteles -->
    
    <!--  tours -->
    <div class="" id="tours">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <h2><i class="fas fa-map-marked-alt"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Excursiones</h2>
            
            <div class="py-2">
              <div class="card-mb card-sm-columns card-sm-2-count">

                <?php

                $current_user = wp_get_current_user();
                $tour = new WP_Query(
                      array(

                      'posts_per_page' => -1,
                      'post_type' => 'tour',
                      'tax_query' =>  array(
                                            array(
                                                  'taxonomy' => 'nombre_de_viajeros',
                                                  'field'    => 'slug',
                                                  'terms'    => $current_user->user_nicename,
                                            ), 
                                      ),
                            )
                  );

                while($tour->have_posts()) {
                $tour->the_post(); 
                $horaTour = get_field_object('field_5c1c32a813220');
                
                ?>

                <div class="pt-3 card border-1 mt-1 p-3" style="background-color: #f1f1f1">
                  <span class="">
                    <h3 class="d-inline-block" style="padding-right: 5px;"><i class="fas fa-map-marked-alt"></i></h3>
                    <a class="d-inline-block" href="<?php echo get_the_permalink();?>">
                      <h4 class="h5 mb-0"><?php echo get_the_title();?></h4>
                    </a>
                  </span>
                
                  <hr class="my-2">
          
                  <p>Fecha y hora: <?php echo $horaTour['value'];?></p>
                  <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink();?>">
                    Conoce más
                    <span class="fa fa-angle-right ml-2"></span>
                  </a>
                </div>
                <?php } wp_reset_postdata();?>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </div>
    <!--  end tours -->

    <!-- intinerario por dias -->
    <div class="" id="itinerario">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
          <!-- Title -->
            <h2><i class="fas fa-suitcase"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Itinerario de viaje</h2>
            <!-- intinerario -->
            <h6>Mis dias de viaje:</h6>

            <?php  

            if( have_rows('itinerario') ):
            while( have_rows('itinerario') ) : the_row();

              $product_terms = get_sub_field('pais_viajero');
              $fechas = get_sub_field('fecha_itinerario');
              $nombreDia = get_sub_field('nombre_del_dia');

                if($product_terms):
                foreach( $product_terms as $terms ):
                  //var_dump($terms);?>
                  <div class="btn-group py-1" id="navbar-pais">
                    <button type="button" class="btn btn-outline-info btn-wide">
                      <a class="h6" href="<?php echo '#'.get_the_title($terms->ID).$fechas;?>"><?php echo get_the_title($terms->ID);?>
                        <div class="">
                          <small class=""><?php echo $fechas ?></small> 
                        </div>
                        <hr class="my-2">
                        <small class=""><?php echo $nombreDia ?></small>
                      </a>
                     </button>
                  </div>
               <?php 
               endforeach;
             endif;
          
            endwhile;
            endif;   

              ?> 
            <!-- end intinerario por dias -->

            <?php

  if( have_rows('itinerario') ):
  while( have_rows('itinerario') ) : the_row();
              

              $fecha = get_sub_field('fecha_itinerario');
              $pais = get_sub_field('pais_viajero');
              $nombre = get_sub_field('nombre_del_dia');
              $vueloItiViaje = get_sub_field('vuelos');
              $hotelesItinerario = get_sub_field('hoteles');
              $toursItinerario = get_sub_field('tour');
              $lugaresItinerario = get_sub_field('lugares_de_interes');
              $transladosItinerario = get_sub_field('translados');

    if($pais):
    foreach( $pais as $terms1 ):
         
      echo '<div data-spy="scroll" class="card border-1 mt-3 bg-white shadow" data-target="#navbar-pais" data-offset="0">';
        echo '<div id ="'. get_the_title($terms1->ID) . $fecha .'">'; 

          echo '<div class="bg-gray-100 pt-3 border-bottom">';

            echo '<h2 style="text-align:center">'. $nombre . '</h2>';
          
            echo '<h3 style="text-align:center"><span class="u-label u-label--info mb-3">' . $fecha . '</span></h3>';

          echo '</div>'; 

              if($vueloItiViaje):
                foreach( $vueloItiViaje as $vueloIti ):?>
                <div class="container py-2">
                  <div class="card-mb card-sm-columns card-sm-1-count">
                    
                    <div class="pt-3 card border-1 mt-1 p-3">
                      <span class="">
                        <h3 style="padding-right: 5px;" class="d-inline-block"><i class="fas fa-plane"></i></h3>
                        <h4 class="h5 mb-0 d-inline-block"><?php echo get_the_title($vueloIti->ID);?></h4>
                      </span>
                      <hr class="my-2">
                      <a class="btn btn-outline-info btn-wide my-1" href="<?php echo get_the_permalink($vueloIti->ID);?>">
                        Conoce más
                        <span class="fa fa-angle-right ml-2"></span>
                      </a>
                    </div>
                  </div>
                </div>  
                <?php endforeach;
              endif;
              
              if($hotelesItinerario):  
                foreach( $hotelesItinerario as $hotelesIti ):?>
                <div class="container py-2">
                  <div class="card-mb card-sm-columns card-sm-1-count"> 
                    
                    <div class="pt-3 card border-1 mt-1 p-3">
                      <h3 style="padding-right: 5px;" class="d-inline-block"><i class="fas fa-bed"></i></h3>
                      <h4 class="h5 mb-0 d-inline-block"><?php echo get_the_title($hotelesIti->ID);?></h4>
                      <hr class="my-2">
                      <a class="btn btn-outline-info btn-wide my-1" href="<?php echo get_the_permalink($hotelesIti->ID);?>">
                        Conoce más
                        <span class="fa fa-angle-right ml-2"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <?php 
                endforeach;
              endif;

              if($toursItinerario):  
                foreach( $toursItinerario as $toursIti ):?>
                <div class="container py-2">
                  <div class="card-mb card-sm-columns card-sm-1-count"> 
                    
                    <div class="pt-3 card border-1 mt-1 p-3">
                      <h3 style="padding-right: 5px;" class="d-inline-block"><i class="fas fa-map-marked-alt"></i></h3>
                      <h4 class="h5 mb-0 d-inline-block"><?php echo get_the_title($toursIti->ID);?></h4>
                      <hr class="my-2">
                      <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink($toursIti->ID);?>">
                        Conoce más
                        <span class="fa fa-angle-right ml-2"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <?php 
                endforeach;
              endif;

              if($lugaresItinerario):  
                foreach( $lugaresItinerario as $lugaresIti ):?>
                <div class="container py-2">
                  <div class="card-mb card-sm-columns card-sm-1-count"> 
                    <div class="pt-3 card border-1 mt-1 p-3">
                      <h3 style="padding-right: 5px;" class="d-inline-block"><i class="fas fa-map-marker-alt"></i></h3>
                      <h4 class="h5 mb-0 d-inline-block"><?php echo get_the_title($lugaresIti->ID);?></h4>
                      <hr class="my-2">
                      <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink($lugaresIti->ID);?>">
                        Conoce más
                        <span class="fa fa-angle-right ml-2"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <?php 
                endforeach;
              endif;

              if($transladosItinerario):  
                foreach( $transladosItinerario as $transladosIti ):?>
                <div class="container py-2">
                  <div class="card-mb card-sm-columns card-sm-1-count"> 
                    <div style="padding-right: 5px;" class="pt-3 card border-1 mt-1 p-3">
                      <h3 style="padding-right: 5px;" class="d-inline-block"><i class="fas fa-bus"></i></h3>
                      <h4 class="h5 mb-0 d-inline-block"><?php echo get_the_title($transladosIti->ID);?></h4>
                      <hr class="my-2">
                      <a class="btn btn-outline-info btn-wide my-1" href="<?php echo get_the_permalink($transladosIti->ID);?>">
                        Conoce más
                        <span class="fa fa-angle-right ml-2"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <?php 
                endforeach;
              endif;?>
              </div>
            </div>

            <?php 
            endforeach;
            endif; 

          endwhile;
          endif;?>  
          </div> 
        </div>   
      </div>
    </div>
    <!-- end intinerario -->

    <!-- experiencia -->
    <div class="" id="experiencia">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <h2><i class="fas fa-user-check"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Experiencia</h2>
                <!-- End Item --> 
            <div class=" bg-img-hero" >
              <!-- Main Content -->
              <div class="d-lg-flex align-items-lg-center">
                
                <div class="row justify-content-lg-between align-items-lg-center">
                  <div class="col-lg-5 mb-7 mb-lg-0">
                    <!-- Title -->
                    <span class="d-block text-secondary text-uppercase mb-2">Experiencia Travelmate</span>
                    <h1 class="display-4 font-size-48--md-down text-secondary mb-0">Cuéntanos como te fue en tu viaje</h1>
                    <!-- End Title -->
                  </div>  
                  <div class="col-lg-6">
                    <!-- Signup Form -->
                    <div class="bg-white shadow-sm p-6">
                      <?php echo do_shortcode('[wpforms id="1600" title="false" description="false"]'); ?>
                      
                    </div>
                    <!-- End Signup Form -->
                  </div>
                </div>
                
              </div>
              <!-- End Main Content -->
            </div>    
            <!--  End experiencia -->                 
          </div>
        </div>
      </div>        
    </div>
  </div>
</main> 

<?php }  } }?>

<?php 
get_footer();
?>
