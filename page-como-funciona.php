<?php
get_header();

get_header();
  while(have_posts()) {
    the_post(); ?>
    
<main id="content" role="main">
  <!-- Hero Section -->
  <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
    <!-- Apply your Parallax background image here -->
    	<?php $thumb4 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    	<div class="divimage dzsparallaxer--target gradient-overlay-half-dark-v1" style="height: 120%; background-image: url(<?php echo $thumb4['0'];?>);"></div>

    	<!-- Content -->
    	<div class="container position-relative z-index-2 space-2 space-3--lg">
      	<div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        		<h2 class="display-4 text-white"><?php the_title();?></h2>
        		<p class="lead text-white">Una nueva experiencia para tus viajes</p>
      	</div>
    	</div>
    	<!-- End Content -->
  </div>
  <!-- End Hero Section -->

  <!-- Video Section -->
  <div class="container position-relative z-index-2 mt-offset-9">
    	<div class="w-lg-75 bg-white shadow-sm rounded p-2 mx-lg-auto">
      <!-- Video Block -->
      	<div id="youTubeVideoPlayer" class="u-video-player">
      		<?php $imagenVideoFuncion = get_field('imagen_video_como_funciona');?>
      		<?php $urlVideoFuncion = get_field('url_video_como_funciona');?>
        		<!-- Cover Image -->
        		<img class="img-fluid u-video-player__preview" src="<?php echo $imagenVideoFuncion['url'];?>" alt="<?php echo $imagenVideoFuncion['alt']; ?>">
        		<!-- End Cover Image -->

        		<!-- Play Button -->
        		<a class="js-inline-video-player u-video-player__btn u-video-player__centered" href=""
           		data-parent="youTubeVideoPlayer"
           		data-target="youTubeVideoIframe"
           		data-classes="u-video-player__played">
          		<span class="u-video-player__icon">
            			<span class="fa fa-play u-video-player__icon-inner"></span>
          		</span>
        		</a>
        		<!-- End Play Button -->

        		<!-- Video Iframe -->
        		<div class="embed-responsive embed-responsive-16by9">
          		<iframe id="youTubeVideoIframe" class="embed-responsive-item" src="<?php echo $urlVideoFuncion;?>"></iframe>
        		</div>
        		<!-- End Video Iframe -->
      	</div>
      	<!-- End Video Block -->
    	</div>
  </div>
  <!-- End Video Section -->
</main>
<!-- Features Section -->

<!-- About Section -->
<div class="container space-2 space-1--lg">
  <!-- Title -->
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    <h1>¿Cómo funciona Travelmate?</h1>
  </div>
  <!-- End Title -->

  <!-- Tab Nav -->
  <div class="nav nav-tabs justify-content-center tab-modern mb-5" id="h-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link h5 active tab-modern__nav-link mb-4" id="h-tab-forward-tab" data-toggle="pill" href="#h-tab-forward" role="tab" aria-controls="h-tab-forward" aria-selected="true">
      <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="<?php 
                      $icon = wp_get_attachment_image_url('1533','iconsMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
      <?php echo the_field('1_enunciado_pregunta_funcionamiento');?>
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" id="h-tab-together-tab" data-toggle="pill" href="#h-tab-together" role="tab" aria-controls="h-tab-together" aria-selected="false">
      <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="<?php 
                      $icon = wp_get_attachment_image_url('1531','iconsMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
      <?php echo the_field('2_enunciado_pregunta_funcionamiento');?>
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" id="h-tab-toolsy-tab" data-toggle="pill" href="#h-tab-tools" role="tab" aria-controls="h-tab-tools" aria-selected="false">
      <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="<?php 
                      $icon = wp_get_attachment_image_url('1532','iconsMini',true );
                      echo $icon;
                      ?>" alt="Image Description">
      <?php echo the_field('3_enunciado_pregunta_funcionamiento');?>
    </a>
    
  </div>
  <!-- End Tab Nav -->

  <?php

  $imagen1 = get_field('1_imagen_enunciado_funcionamiento_1');
  $imagen2 = get_field('2_imagen_enunciado_funcionamiento_1');
  $imagen3 = get_field('3_imagen_enunciado_funcionamiento_1');
  
  ?>
  <!-- Tab Content como funciona-->
  <div class="tab-content" id="h-tabContent">

    <div class="tab-pane fade show active" id="h-tab-forward" role="tabpanel" aria-labelledby="h-tab-forward-tab">
      <div class="row align-items-lg-center">
        <div class="col-md-9 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <!-- Title -->
            <h3><?php echo the_field('1_subtitulo_funcionamiento_1');?> </h3>
            <p><?php echo the_field('1_respuesta_a_enunciado_funcionamiento_1');?></p>
            <!-- End Title -->
          </div>
        </div>
        <div class="col-md-3 order-md-1">
          <div class="">
            <img class="" src="<?php echo $imagen1['url'];?>" alt="<?php echo $imagen1['alt'];?>" style="display: block;margin-left: auto; margin-right: auto;">
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="h-tab-together" role="tabpanel" aria-labelledby="h-tab-together-tab">
      <!-- About -->
      <div class="row align-items-lg-center">
        <div class="col-md-9 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <!-- Title -->
            <h3><?php echo the_field('2_subtitulo_funcionamiento_1');?> </h3>
            <p><?php echo the_field('2_respuesta_a_enunciado_funcionamiento_1');?></p>
            <!-- End Title -->
          </div>
        </div>
        <div class="col-md-3 order-md-1">
          <div class="pr-lg-4">
            <img class="img-fluid" src="<?php echo $imagen2['url'];?>" alt="<?php echo $imagen2['alt'];?>" style="display: block; margin-left: auto; margin-right: auto;">
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="h-tab-tools" role="tabpanel" aria-labelledby="h-tab-toolsy-tab">
      <!-- About -->
      <div class="row align-items-lg-center">
        <div class="col-md-9 order-md-2 mb-5 mb-md-0">
          <div class="mb-4">
            <!-- Title -->
            <h3><?php echo the_field('3_subtitulo_funcionamiento_1');?> </h3>
            <p><?php echo the_field('3_respuesta_a_enunciado_funcionamiento_1');?></p>
          </div>
        </div>
        <div class="col-md-3 order-md-1">
          <div class="pr-lg-4">
            <img class="img-fluid" src="<?php echo $imagen3['url'];?>" alt="<?php echo $imagen3['alt'];?>" style="display: block; margin-left: auto; margin-right: auto;">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end Tab Content como funciona-->

<!-- planes base txt -->

<!-- <div class="bg-gray-100">
  <div class="container space-2 space-1--lg">
    <h3><?php //echo the_field('titulo_planes_base');?> </h3>
    <p><?php //echo the_field('texto_planes_base');?></p>
  </div>
</div> -->

<!-- end planes base txt-->

<!-- Extra content -->
<div class="bg-gray-100">
  <div class="container space-2 space-2--lg">
    <!-- Slick Carousel -->
    <div class="js-slick-carousel u-slick"
         data-fade="true"
         data-arrows-classes="u-slick__arrow u-slick__arrow-pos--bottom-minus-7 u-slick__arrow-centered--x"
         data-arrow-left-classes="fa fa-long-arrow-alt-left u-slick__arrow-inner ml-offset-5"
         data-arrow-right-classes="fa fa-long-arrow-alt-right u-slick__arrow-inner ml-5">
      <div class="js-slide">
        <!-- Testimonials -->
        <div class="w-md-80 w-lg-60 text-center mx-auto">
          <div class="mb-4">
            <h4 class="h4 mb-0"><?php echo the_field('titulo_planes_base');?></h4>
            <hr class="my-2">
            <blockquote class="h5 text-secondary"><?php echo the_field('texto_planes_base');?></blockquote>
          </div>
          <?php $imagenExtra1 = get_field('icono_planes_base');?>
          <img class="max-width-14 mb-2" src="<?php echo $imagenExtra1['url'];?>" alt="<?php echo $imagenExtra1['alt'];?>" style="display: block; margin-left: auto; margin-right: auto;">
          
        </div>
        <!-- End Testimonials -->
      </div>

      <div class="js-slide">
        <!-- Testimonials -->
        <div class="w-md-80 w-lg-60 text-center mx-auto">
          <div class="mb-4">
            <h4 class="h4 mb-0"><?php echo the_field('titulo_vuelos');?></h4>
            <hr class="my-2">
            <blockquote class="h5 text-secondary"><?php echo the_field('texto_vuelos');?></blockquote>
          </div>
          <?php $imagenExtra2 = get_field('icono_vuelos');?>
          <img class="max-width-14 mb-2" src="<?php echo $imagenExtra2['url'];?>" alt="<?php echo $imagenExtra2['alt'];?>" style="display: block; margin-left: auto; margin-right: auto;">
          
        </div>
        <!-- End Testimonials -->
      </div>

      <div class="js-slide">
        <!-- Testimonials -->
        <div class="w-md-80 w-lg-60 text-center mx-auto">
          <div class="mb-4">
            <h4 class="h4 mb-0"><?php echo the_field('titulo_personalizacion');?></h4>
            <hr class="my-2">
            <blockquote class="h5 text-secondary"><?php echo the_field('texto_personalizacion');?></blockquote>
          </div>
          <?php $imagenExtra3 = get_field('icono_personalizacion');?>
          <img class="max-width-14 mb-2" src="<?php echo $imagenExtra3['url'];?>" alt="<?php echo $imagenExtra3['alt'];?>" style="display: block; margin-left: auto; margin-right: auto;">
          
        </div>
        <!-- End Testimonials -->
      </div>
    </div>
    <!-- End Slick Carousel -->
  </div>
<!-- End Extra content -->
</div>

<!-- categorias de viajes -->

<?php

$imagen1_1 = get_field('1_1_icono_tipo_viaje');
$imagen1_2 = get_field('1_2_icono_tipo_viaje');
$imagen1_3 = get_field('1_3_icono_tipo_viaje');

$imagen2_1 = get_field('2_1_icono_tipo_viaje');
$imagen2_2 = get_field('2_2_icono_tipo_viaje');
$imagen2_3 = get_field('2_3_icono_tipo_viaje');

$imagen3_1 = get_field('3_1_icono_tipo_viaje');
$imagen3_2 = get_field('3_2_icono_tipo_viaje');
$imagen3_3 = get_field('3_3_icono_tipo_viaje');

?>

<div class="container space-1 space-1--lg">
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    <h1>Estilos de viaje</h1>
    <p>Travalemate tiene tres formas de viajar, todas pensadas para acomodarse a tus necesidades.</p>
  </div>

  <div class="nav nav-tabs justify-content-center tab-modern mb-5" id="h-1-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link h5 active tab-modern__nav-link mb-4" id="h-tab-forward-1-tab" data-toggle="pill" href="#h-tab-forward-1" role="tab" aria-controls="h-tab-forward" aria-selected="true">
      <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="" alt="Image Description">
      <?php echo the_field('1_titulo_tipo_viaje');?>
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" id="h-tab-together-1-tab" data-toggle="pill" href="#h-tab-together-1" role="tab" aria-controls="h-tab-together" aria-selected="false">
      <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="" alt="Image Description">
      <?php echo the_field('2_titulo_tipo_viaje');?>
    </a>
    <a class="nav-link h5 tab-modern__nav-link mb-4" id="h-tab-toolsy-1-tab" data-toggle="pill" href="#h-tab-tools-1" role="tab" aria-controls="h-tab-tools" aria-selected="false">
      <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="" alt="Image Description">
      <?php echo the_field('3_titulo_tipo_viaje');?>
    </a>
  </div>

  <div class="tab-content" id="h-tabContent-1">

    <!-- 1 categorias de viajes -->
    <div class="tab-pane fade show active" id="h-tab-forward-1" role="tabpanel" aria-labelledby="h-tab-forward-1-tab">

      <div class="text-center mx-md-auto">
          <p><?php echo the_field('1_texto_principal_tipo_viaje');?></p>
      </div>

      <div class="row align-items-lg-center my-5">

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen1_1['url'];?>" alt="<?php echo $imagen1_1['alt'];?>">
              <h3 class="h4"><?php echo the_field('1_1_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('1_1_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen1_2['url'];?>" alt="<?php echo $imagen1_2['alt'];?>">
              <h3 class="h4"><?php echo the_field('1_2_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('1_2_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen1_3['url'];?>" alt="<?php echo $imagen1_3['alt'];?>">
              <h3 class="h4"><?php echo the_field('1_3_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('1_3_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- end 1 categorias de viajes -->

    <!-- 2 categorias de viajes -->
    <div class="tab-pane fade" id="h-tab-together-1" role="tabpanel" aria-labelledby="h-tab-together-1-tab">
      <div class="text-center mx-md-auto">
          <p><?php echo the_field('2_texto_principal_tipo_viaje');?></p>
      </div>

      <div class="row align-items-lg-center my-5">

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen2_1['url'];?>" alt="<?php echo $imagen2_1['alt'];?>">
              <h3 class="h4"><?php echo the_field('2_1_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('2_1_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen2_2['url'];?>" alt="<?php echo $imagen2_2['alt'];?>">
              <h3 class="h4"><?php echo the_field('2_2_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('2_2_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen2_3['url'];?>" alt="<?php echo $imagen2_3['alt'];?>">
              <h3 class="h4"><?php echo the_field('2_3_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('2_3_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- end 2 categorias de viajes -->

    <!-- 3 categorias de viajes -->
    <div class="tab-pane fade" id="h-tab-tools-1" role="tabpanel" aria-labelledby="h-tab-toolsy-1-tab">
     <div class="text-center mx-md-auto">
          <p><?php echo the_field('3_texto_principal_tipo_viaje');?></p>
      </div>

      <div class="row align-items-lg-center my-5">

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen3_1['url'];?>" alt="<?php echo $imagen3_1['alt'];?>">
              <h3 class="h4"><?php echo the_field('3_1_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('3_1_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen3_2['url'];?>" alt="<?php echo $imagen3_2['alt'];?>">
              <h3 class="h4"><?php echo the_field('3_2_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('3_2_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-1 mb-md-0">
          <div class="bg-white text-center border pt-7 p-5 mb-3 mb-md-0">
            <div class="text-center px-lg-3">
              <img class="max-width-14 mb-2" src="<?php echo $imagen3_3['url'];?>" alt="<?php echo $imagen3_3['alt'];?>">
              <h3 class="h4"><?php echo the_field('3_3_subtitulo_tipo_viaje');?></h3>
              <p class="mb-0"><?php echo the_field('3_3_contenido_tipo_viaje');?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- end 3 categorias de viajes -->

  </div>  
</div>
<!-- end categorias de viajes -->



  <?php }

get_footer();
?>