<?php
//acf_form_head();
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

<main id="content" role="main" class="pt-5">
  <div class="container">
    <div class="w-lg-60 text-center mx-lg-auto mb-1">
  		<!-- Author -->
    	<img class="rounded-circle mb-3" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('avatarCover');}?>" alt="Image Description">
    	<!-- End Author -->
    	<!-- Title -->
    	<div class="mb-7">
      	<h1 class="display-4 font-size-48--md-down text-muted mb-4">Hola, <?php the_title();?></h1>
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
      Vuelos
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
      id="h-tab-hoteles-tab" 
      href="#hoteles">
      <h3><i class="fas fa-bed"></i></h3>
      Hoteles      
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
     id="h-tab-tours-tab" 
     href="#tours">
     <h3><i class="fas fa-map-marked-alt"></i></h3>
      Tours
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" 
     id="h-tab-mapa-tab" 
     href="#mapa">
     <h3><i class="fas fa-globe-americas"></i></h3>
      Mapa de ruta
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
    <div class="" id="vuelos">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <h2><i class="fas fa-plane"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Vuelos</h2>
            
            <table class="table table-bordered table-hover"style="width:100%">
              <thead class="">
                <tr>
                  <th style="width:50%;text-align:center">Vuelos</th>
                  <th style="width:50%;text-align:center">Confirmaciones</th>
                <tr>  
              </thead>

              <tbody>
                
              <?php
                if( have_rows('confirmaciones_de_vuelos') ): 
                while( have_rows('confirmaciones_de_vuelos') ): the_row();

                $vuelosViaje = get_sub_field('vuelo_del_viajero');
                //$fotoHotelesConfirmacion = get_sub_field('foto_confirmacion_hotel'); ?>
                
               <tr style="">
                  <?php
                   echo '<td>'; 
                    if( $vuelosViaje ): 
                    foreach( $vuelosViaje as $vuelo ): ?>
                      <li class="list-group-item align-items-center p-1">   
                        <div class="p-4">
                          <a class="text-center" href="<?php echo get_the_permalink($vuelo->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($vuelo->ID);?></h4></a>
                        </div>
                      </li> 
                    <?php 
                    endforeach;
                    endif;
                   echo '</td>';?>
                   <td>
                    <button type="submit" class="btn btn-outline-primary btn-block">Foto reservas</button>
                   </td> 
                </tr>
                   <?php
                  endwhile; 
                  endif; 
                  ?>
              </tbody>     
            </table>        

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
            <h2 class="h3">Hoteles</h2>
            
                 <table class="table table-bordered table-hover"style="width:100%">
              <thead class="">
                <tr>
                  <th style="width:50%;text-align:center">Vuelos</th>
                  <th style="width:50%;text-align:center">Confirmaciones</th>
                <tr>  
              </thead>

              <tbody>
                
              <?php
                if( have_rows('confirmaciones_de_hotel') ): 
                while( have_rows('confirmaciones_de_hotel') ): the_row();

                $hotelesViaje = get_sub_field('hotel_del_viajero');
                //$fotoHotelesConfirmacion = get_sub_field('foto_confirmacion_hotel'); ?>
                
               <tr style="">
                  <?php
                   echo '<td>'; 
                    if( $hotelesViaje ): 
                    foreach( $hotelesViaje as $hotel ): ?>
                      <li class="list-group-item align-items-center p-1">   
                        <div class="p-4">
                          <a class="text-center" href="<?php echo get_the_permalink($hotel->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($hotel->ID);?></h4></a>
                        </div>
                      </li> 
                    <?php 
                    endforeach;
                    endif;
                   echo '</td>';?>
                   <td>
                    <button type="submit" class="btn btn-outline-primary btn-block">Foto reservas</button>
                   </td> 
                </tr>
                   <?php
                  endwhile; 
                  endif; 
                  ?>
              </tbody>     
            </table>  
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
            <h2 class="h3">Tours</h2>
            <div class="u-cubeportfolio">
              <!-- Content -->
              <div class="cbp"
                    data-controls="#filterControls"
                    data-animation="quicksand"
                    data-caption-animation="zoom"
                    data-x-gap="30"
                    data-y-gap="30"
                    data-media-queries='[
                      {"width": 1500, "cols": 2},
                      {"width": 1100, "cols": 2},
                      {"width": 800, "cols": 2},
                      {"width": 480, "cols": 2},
                      {"width": 300, "cols": 1}
                    ]'>

                <?php
                if( have_rows('tours_itinerario') ): 
                while( have_rows('tours_itinerario') ): the_row();

                $toursViaje = get_sub_field('tour_del_viajero');
                
                //$fotoConfirmacion = get_sub_field('foto_confirmacion_vuelo'); ?>

                <div class="cbp-item graphic bg-white shadow rounded p-2">
                  <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    <?php 
                    if( $toursViaje ): 
                    foreach( $toursViaje as $tour ): ?>  
                      <img src="<?php $thumb12 = wp_get_attachment_image_src( get_post_thumbnail_id($tour->ID), 'full' );
                        echo $thumb12['0'];?>" alt="Image Description">
                    </div>
                  </div>
                  <div class="p-4">
                    <a href="<?php echo get_the_permalink($tour->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($tour->ID);?></h4></a>
                    <p><?php echo get_the_excerpt($tour->ID);?></p>
                  </div>
                  <?php 
                  endforeach;
                  endif;?>
                </div>
                <?php 
                endwhile;
                endif;
                  ?>
                <!-- End Item -->   
              </div>  
          </div>
        </div>
      </div>        
    </div>
    <!--  end tours -->

    <!--  mapa -->
    <div class="" id="mapa">
      <div class="row align-items-lg-center">
        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <h2><i class="fas fa-globe-americas"></i></h2>
            <hr class="my-2">
            <h2 class="h3">Mapa de ruta</h2>
            <style>
              .embed-container { 
                position: relative; 
                padding-bottom: 56.25%;
                overflow: hidden;
                max-width: 100%;
                height: auto;
              } 

              .embed-container iframe,
              .embed-container object,
              .embed-container embed { 
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
              }
            </style>
          
          <h6>Mis mapas:</h6>
          <?php

          if( have_rows('mapas_viajero') ): 
          while( have_rows('mapas_viajero') ): the_row();

            $nombreMapa = get_sub_field('nombre_de_mapa_iti');
            $embedMapa = get_sub_field('embed_mapa');?>
              
            <div class="btn-group py-2" id="navbar-pais">
              <button type="button" class="btn btn-outline-primary btn-wide">
                <a class="h6" href="<?php echo '#'.$nombreMapa;?>"><?php echo $nombreMapa;?>
                </a>
              </button>
            </div>
       
             <?php 
           endwhile;
          endif; 
          ?>
          
          <?php 

          if( have_rows('mapas_viajero') ): 
          while( have_rows('mapas_viajero') ): the_row();

            $nombreMapa = get_sub_field('nombre_de_mapa_iti');
            $embedMapa = get_sub_field('embed_mapa');

              if( $embedMapa ): 

                echo '<div id ="'.$nombreMapa.'">';
                  echo '<div class="container mb-5 embed-container bg-white shadow">';
                    echo '<iframe src= "'.$embedMapa.'" >';
                    echo '</iframe>';
                  echo '</div>';
                echo '</div>';

              endif; 
               
          endwhile;
          endif; 

          ?>
          </div>
        </div>
      </div> 
    </div>         
    <!-- end mapa -->
 
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
                  <div class="btn-group" id="navbar-pais">
                    <button type="button" class="btn btn-outline-primary btn-wide">
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
                <div class="container py-3">
                  <div class="card-mb card-sm-columns card-sm-1-count">
                    
                    <div class="pt-3 card border-1 mt-3 p-3">
                      <h3><i class="fas fa-plane"></i></h3>
                      <hr class="my-2">
                      <a href="<?php echo get_the_permalink($vueloIti->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($vueloIti->ID);?></h4></a>
                      <a class="btn btn-outline-primary btn-wide my-1" href="<?php echo get_the_permalink($vueloIti->ID);?>">
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
                <div class="container py-3">
                  <div class="card-mb card-sm-columns card-sm-2-count"> 
                    <img class="bg-white shadow rounded p-2 card-img-top" src="<?php $thumb13 = wp_get_attachment_image_src( get_post_thumbnail_id($hotelesIti->ID), 'homeDestinoCover' );
                    echo $thumb13['0'];?>" alt="Image Description">
                    <div class="pt-3 card border-1 mt-3 p-3">
                      <h3><i class="fas fa-bed"></i></h3>
                      <hr class="my-2">
                      <a href="<?php echo get_the_permalink($hotelesIti->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($hotelesIti->ID);?></h4></a>
                      
                      <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink($hotelesIti->ID);?>">
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
                <div class="container py-3">
                  <div class="card-mb card-sm-columns card-sm-2-count"> 
                    <img class="bg-white shadow rounded p-2 card-img-top" src="<?php $thumb13 = wp_get_attachment_image_src( get_post_thumbnail_id($toursIti->ID), 'homeDestinoCover' );
                    echo $thumb13['0'];?>" alt="Image Description">
                    <div class="pt-3 card border-1 mt-3 p-3">
                      <h3><i class="fas fa-map-marked-alt"></i></h3>
                      <hr class="my-2">
                      <a href="<?php echo get_the_permalink($toursIti->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($toursIti->ID);?></h4></a>
                      <p><?php echo get_the_excerpt($toursIti->ID);?></p>
                      <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink($toursIti->ID);?>">
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
                <div class="container py-3">
                  <div class="card-mb card-sm-columns card-sm-2-count"> 
                    <img class="bg-white shadow rounded p-2 card-img-top" src="<?php $thumb13 = wp_get_attachment_image_src( get_post_thumbnail_id($lugaresIti->ID), 'homeDestinoCover' );
                    echo $thumb13['0'];?>" alt="Image Description">
                    <div class="pt-3 card border-1 mt-3 p-3">
                      <h3><i class="fas fa-map-marker-alt"></i></h3>
                      <hr class="my-2">
                      <a href="<?php echo get_the_permalink($lugaresIti->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($lugaresIti->ID);?></h4></a>
                      <p><?php echo get_the_excerpt($lugaresIti->ID);?></p>
                      <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo get_the_permalink($lugaresIti->ID);?>">
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
                <div class="container py-3">
                  <div class="card-mb card-sm-columns card-sm-1-count"> 
                    
                    <div class="pt-3 card border-1 mt-3 p-3">
                      <h3><i class="fas fa-bus"></i></h3>
                      <hr class="my-2">
                      <a href="<?php echo get_the_permalink($transladosIti->ID);?>"><h4 class="h5 mb-0"><?php echo get_the_title($transladosIti->ID);?></h4></a>
                      
                      <a class="btn btn-outline-primary btn-wide my-1" href="<?php echo get_the_permalink($transladosIti->ID);?>">
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
