<?php
get_header();

while(have_posts()) {
    the_post();?>

<main id="content" role="main">
    <!-- Hero Section -->
    <?php $thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBannernew' );?>
    <div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumb2['0'];?>');">
      <!-- Info -->
      <div class="container text-center space-1">
        <div class="w-lg-75 mx-lg-auto">
          <h2 class="text-white font-weight-medium"><?php the_title();?></h2>
        </div>

        <?php $precioDestinoRegional = get_field('precio_destino_regional'); ?>
        <div class="w-md-75 w-lg-50 mx-md-auto">
          <div class="mb-5">
            <hr class="my-2">
            <h6 class="d-block text-white">Los precios están sujetos a cambios según las fechas, la disponibilidad y tus elecciones.</h6>
          </div>
          <a class="btn btn-info btn-wide mb-2 mb-md-0" href="">
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

<!-- Features Section -->
<div class="bg-gray-100">
  <div class="container space-1 space-1--lg">
    <div class="row">
      <div class="col-lg-4 mb-7 mb-lg-0">
        <!-- Features -->
        <div class="media align-items-center">
          <img class="max-width-14 mr-3" src="<?php 
                      $icon = wp_get_attachment_image_url('1534','banderaMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
          <div class="media-body">
            <?php 
            $numDias = get_field('numero_de_dias_ruta');
            ?>
            <h6 style="color: #000042;" class="">Nº de dias</h6>
            <hr class="my-1">
            <h5 class="h5" style="color: #000042;" class="d-block"><?php echo $numDias;?><span> USD</span></h5>
          </div>
        </div>
        <!-- End Features -->
      </div>

      <div class="col-lg-4 mb-7 mb-lg-0">
        <!-- Features -->
        <div class="media align-items-center">
          <img class="max-width-14 mr-3" src="<?php 
                      $icon = wp_get_attachment_image_url('1535','banderaMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
          <div class="media-body">
          	<?php 
          	$valorRuta = get_field('precio_ruta_basico');
          	?>
            <h6 style="color: #000042;" class="h6">Valor mínimo estilo básico</h6>
            <hr class="my-1">
            <h5 class="h5" style="color: #000042;" class="d-block"><?php echo $valorRuta;?><span> USD</span></h5>
            <p style="color: #000042;" class="lead">x persona</p>
          </div>
        </div>
        <!-- End Features -->
      </div>

      <div class="col-lg-4 mb-7 mb-lg-0">
        <!-- Features -->
        <div class="media align-items-center">
          <img class="max-width-14 mr-3" src="<?php 
                      $icon = wp_get_attachment_image_url('1534','banderaMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
          <div class="media-body">
            <?php 
            $valorVuelo = get_field('valor_vuelo_ruta');
            ?>
            <h6 style="color: #000042;" class="h6">Valor Vuelo</h6>
            <hr class="my-1">
            <h5 class="h5" style="color: #000042;" class="d-block"><?php echo $valorVuelo;?><span> USD</span></h5>
          </div>
        </div>
        <!-- End Features -->
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-7 mb-lg-0">
        <!-- Features -->
        <div class="media align-items-center">
          <img class="max-width-14 mr-3" src="<?php 
                      $icon = wp_get_attachment_image_url('1534','banderaMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
          <div class="media-body">
            <?php 
            $valorAlojamiento = get_field('valor_alojamiento_ruta');
            ?>
            <h6 style="color: #000042;" class="h6">Valor Alojamiento</h6>
            <hr class="my-1">
            <h5 class="h5" style="color: #000042;" class="d-block"><?php echo $valorAlojamiento;?><span> USD</span></h5>
          </div>
        </div>
        <!-- End Features -->
      </div>

      <div class="col-lg-4 mb-7 mb-lg-0">
        <!-- Features -->
        <div class="media align-items-center">
          <img class="max-width-14 mr-3" src="<?php 
                      $icon = wp_get_attachment_image_url('1535','banderaMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
          <div class="media-body">
            <?php 
            $valorTranslado = get_field('valor_translado_ruta');
            ?>
            <h6 style="color: #000042;" class="h6">Valor Translados</h6>
            <hr class="my-1">
            <h5 class="h5" style="color: #000042;" class="d-block"><?php echo $valorTranslado;?><span> USD</span></h5>
          </div>
        </div>
        <!-- End Features -->
      </div>

      <div class="col-lg-4 mb-7 mb-lg-0">
        <!-- Features -->
        <div class="media align-items-center">
          <img class="max-width-14 mr-3" src="<?php 
                      $icon = wp_get_attachment_image_url('1534','banderaMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
          <div class="media-body">
            <?php 
            $valorActividades = get_field('valor_actividades_ruta');
            ?>
            <h6 style="color: #000042;" class="h6">Valor Actividades</h6>
            <hr class="my-1">
            <h5 class="h5" style="color: #000042;" class="d-block"><?php echo $valorActividades;?><span> USD</span></h5>
          </div>
        </div>
        <!-- End Features -->
      </div>
    </div>
  </div>
</div>
<!-- End Features Section -->	

<div class="container space-1 space-1--lg">	
	<div class="row align-items-lg-center">
		<div class="col-lg-12 order-lg-1">
    	<div class="pr-lg-4">
      	<p><?php the_content();?></p>
      	<div class="mb-5"></div>
      		<a class="btn btn-sm btn-info btn-wide" href="">Empieza ahora</a>
    		</div>
    		<!-- End Article Content -->
  	 </div>
	  </div>
	</div>

	<!-- Gmap -->
  <?php if( have_rows('ubicaciones_rutas') ): ?>
  <div class="acf-map">
    <?php while ( have_rows('ubicaciones_rutas') ) : the_row(); 
    $location = get_sub_field('google_map_destino_rutas');
    ?>
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
      <h4><?php the_sub_field('destino_para_rutas'); ?></h4>
      <p class="address"><?php echo $location['address']; ?></p>
    </div>
  <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <!-- end Gmap -->
</div>

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
          <button type="submit" class="btn btn-block btn-info btn-wide" >Contáctanos ya</button>
        </span>
      </div>     
    </div>
  </div>
</div>
<!-- End viaje nuevo -->

<!-- Title -->
<div class="container text-center space-1">
  <div class="w-md-80 text-center mx-auto">
    <h2 style="color: #000042;">Itinerario</h2>
  </div>
</div>
<!-- end Title -->

<!-- rutas iti -->
<div class="container">
	<div class="card-deck d-block d-lg-flex">
		<div class="col-md-12 order-md-2 mb-5 mb-md-0">
    	<div class="mb-2">
      	<!-- Title -->
        
	        <?php

	        if( have_rows('diario_de_ruta') ):
	        while( have_rows('diario_de_ruta') ) : the_row();
	          
	          $imagenDia = get_sub_field('imagen_del_dia_en_ruta');
	          $nombreDia = get_sub_field('nombre_del_dia_en_ruta');
	          $DescripcionDia = get_sub_field('descripcion_del_dia_en_ruta');
	          $tourDia = get_sub_field('tour_del_dia_en_ruta');
	          $lugarInteresDia = get_sub_field('lugar_de_interes_en_ruta');
	          ?>

		    <article class="card rounded mb-3 card border-1 bg-white shadow">
		      <div class="card-body row align-items-stretch no-gutters p-0">
		       <div class="col-7">
			        <div class="p-5">
                <h3 style="color: #000042;" class="d-block"><?php echo $nombreDia;?></h3>
                <p> <?php echo $DescripcionDia;?> </p>
                <hr class="my-1">
                <ul class="list-inline text-secondary">
			                	
			            <li class="list-inline-item mr-4">
			              	<span class="fas fa-map-marked-alt mr-2"></span>
			              	<?php if($tourDia):
          						foreach( $tourDia as $tour ):?>
			              	<a href="<?php echo get_the_permalink($tour->ID);?>"><?php echo get_the_title($tour->ID);?> </a>
			              	<?php
				            endforeach;
          						endif;
				            ?>
			            </li>
			            
			            <li class="list-inline-item mr-4">
			              	<span class="fas fa-map-marker-alt mr-2"></span>
			              	<?php if($lugarInteresDia):
          						foreach( $lugarInteresDia as $lugar ):?>
			              	<a href="<?php echo get_the_permalink($lugar->ID);?>"><?php echo get_the_title($lugar->ID);?> </a>
			              	<?php
				            endforeach;
          						endif;
				            ?>
			            </li>
					      </ul>   
			        </div>
		        </div>
            <div class="col-5 card-img-right d-none d-inline-block bg-img-hero" data-bg-img-src="<?php echo $imagenDia['url'];?>">
            </div>
		      </div>
	      </article>
        <?php 
          endwhile;
          endif;?>  
    	</div>      
	  </div>          
  </div>              	
</div>
<!-- end rutas iti -->
    
<?php }
get_footer();
?>