<?php
get_header();
  while(have_posts()) {
    the_post(); 
?>
<!-- header -->
<main id="content" role="main">
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBannernew' );?>
  <div id="post" class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumb['0'];?>')">
    <!-- Main Content -->
    <div class="d-lg-flex align-items-lg-center">
      <div class="container space-2 space-0--lg mt-lg-8">
        <div class="container space-2">
          <div class="w-md-80 w-lg-60 text-center mx-auto">
            <!-- Title -->
            <div class="">
              <h1 class="display-4 font-size-48--md-down text-white"><?php the_title();?></h1>
              <p class="lead text-white">Mira a todos los sitios que puedes viajar ya con Travelmate.</p>
            </div>
            <!-- End Title -->
            <!-- End Buttons -->
          </div>
          
          <nav id="navBarClassic" class="navbar justify-content-center navbar-expand-lg u-header__navbar">
            <ul class="nav justify-content-center">
              <li class="nav-item u-header__nav-item mx-1">
                <a class="btn btn-info btn-wide mb-2" href="<?php echo site_url('/nuestros-destinos-en-america/')?>">América</a>
              </li>
              <li class="nav-item u-header__nav-item mx-1">
                <a class="btn btn-info btn-wide mb-2" href="<?php echo site_url('/nuestros-destinos-en-asia/')?>">Asia</a>
              </li>
              <li class="nav-item u-header__nav-item mx-1">
                <a class="btn btn-info btn-wide mb-2" href="<?php echo site_url('/nuestros-destinos-en-europa/')?>">Europa</a>
              </li>
              <li class="nav-item u-header__nav-item mx-1">
                <a class="btn btn-info btn-wide mb-2" href="<?php echo site_url('/nuestros-destinos-en-medio-oriente/')?>">Medio Oriente</a>
              </li>  
            </ul>
          </nav>     
        </div>
      </div>
    </div>
  </div>  
</main>
<!-- header end -->

<!-- America -->
<div class="bg-gray-100">
  <div class="container space-1">
    <div class="row align-items-lg-center">
      <div class="col-md-12 order-md-2 mb-5 mb-md-0">
        <div class="mb-4">
          <!-- Title -->
          <p><?php the_content();?></p>
        </div>
      </div>
    </div>
  </div>   
</div>

<div class="w-lg-90 w-lg-60 mx-md-auto">
   
  <?php 

  $destinosAmericaRegion = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => array('region'),
    'tax_query' => array(
        array(
          'taxonomy' => 'ubicacion_regiones',
          'field' => 'slug',
          'terms' => 'america',
      )),
    
  ));

  while($destinosAmericaRegion->have_posts()) {
        $destinosAmericaRegion->the_post(); 
        $ciudadesRegiones = get_field('ciudades_regiones');
        //echo print_r($ciudadesRegiones);
        $img = get_field('bandera_paises');
        //echo print_r($img);
        $preciosRegion = get_field('precio_destino_regional');
        ?>

  <div class="container space-1 space-1--lg">         
    <div class="row align-items-lg-center">          
      <div class="col-md-6 order-md-2 mb-5 mb-md-0">
        <div class="mb-2">
          <!-- Title -->
          <h3><a href="<?php the_permalink();?>"><?php the_title();?></a>
            <span>
            <!-- banderas -->
            <?php
              foreach($ciudadesRegiones as $id){ 
              $img = get_field('bandera_paises', $id);
              //echo print_r($img['url']);
              echo '<img class="u-avatar rounded-circle" style = "width:7%; height:7%" src="'.$img['url'].'">';
            }?>    
            <!-- end banderas -->
            </span>
          </h3>
          <!-- Divider -->
          <hr class="my-2">
          <!-- end Divider -->
          <span class="h5 d-inline-block text-primary mb-1"><small class="text-secondary">Desde </small><?php echo $preciosRegion;?></span>
            <small class="text-secondary"> por persona</small>
          </span>
          <p><?php the_excerpt();?></p>
          <!-- End Title -->
          <!-- btn -->
          <a class="btn btn-outline-info btn-wide mb-2 mb-md-0 mr-sm-2" href="<?php the_permalink();?>">Descubre</a>
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

  <?php 

  $destinosAmericaDestinos = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => array('destino'),
    'tax_query' => array(
        array(
          'taxonomy' => 'ubicacion_destinos',
          'field' => 'slug',
          'terms' => 'america',
      )),
    
  ));

  while($destinosAmericaDestinos->have_posts()) {
        $destinosAmericaDestinos->the_post(); 
        $img = get_field('bandera_paises');
        $preciosDestino = get_field('precio_destino');
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
          <span class="h5 d-inline-block text-primary mb-1"><small class="text-secondary">Desde </small><?php echo $preciosDestino;?></span>
            <small class="text-secondary"> por persona</small>
          </span>
          <p><?php the_excerpt();?></p>
          <!-- End Title -->
          <!-- btn -->
          <a class="btn btn-outline-info btn-wide mb-2 mb-md-0 mr-sm-2" href="<?php the_permalink();?>">Descubre</a>
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
<!-- end America -->          
</div>   

 <?php }
get_footer();
?>