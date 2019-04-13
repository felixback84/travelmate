<?php
get_header();

  while(have_posts()) {
    the_post(); ?>
<!-- inicio -->
<main id="content" role="main">
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBannernew' );?>
  <div id="post" class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumb['0'];?>'); height: 40vh ;">
  </div>  
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
</main>
<!-- end inicio -->

<!-- razones -->
<div class="container pb-9">
  <div class="container text-center py-6">
  <h2 style="color: #000042; text-align: center;">Lo que nos hace únicos</h2>
</div>
  <div class="container">
    <div class="row">
      <?php

        if( have_rows('razones_para_viajar_con_nosotros') ): ?>
          <?php while( have_rows('razones_para_viajar_con_nosotros') ): the_row();
            
            $titulo = get_sub_field('titulo_razon');
            $contenido = get_sub_field('descripcion_razon');
            $imagen = get_sub_field('foto_de_la_razon');
          ?>

      <div class="bg-white text-center border p-3 col-lg-3 mb-2">
        <div class="text-center px-lg-3">
          <?php if( $imagen ): ?>
          <img class="max-width-14 mb-2" src="<?php echo $imagen['url'];?>" alt="<?php echo $imagen['alt'];?>">
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
<!-- razones -->

<!-- valores -->
<?php $thumbValores = get_field('foto_de_fondo_valores');?>
<div id="post" class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumbValores['url'];?>');">  
  <div class="container space-1">
    <div class="row align-items-lg-center">
      <div class="col-md-12 order-md-2 mb-5 mb-md-0">
        <div class="mb-4">
          <!-- Title -->
          <div class="container text-center py-3">
            <h2 style="color: #000042; text-align: center;">Nuestros valores</h2>
            <div class="container">
              <div class="row py-3">
                <?php

                  if( have_rows('lista_de_valores') ): ?>
                    <?php while( have_rows('lista_de_valores') ): the_row();
                      
                      $titulo = get_sub_field('titulo_valores');
                      $contenido = get_sub_field('contenido_valores');

                    ?>
                <div class="text-center border p-6 col-lg-4 my-2" style="background-color: #f4f2f2">
                  <div class="text-center px-lg-3">
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
        </div>
      </div>
    </div>
  </div> 
</div>  
<!-- end valores -->

<!-- team -->
<div class="container pb-9">
  <div class="container text-center py-6">
    <h2 style="color: #000042; text-align: center;">Nosotros</h2>
  </div>

  <div class="row mb-9">
    <div class="col-sm-6 col-md-6 col-lg-3 mb-7 mb-lg-0">
    <?php

    if( have_rows('equipo') ): ?>
      <?php while( have_rows('equipo') ): the_row();
        
        $foto = get_sub_field('foto_equipo');
        $nombre = get_sub_field('nombre_equipo');
        $bio = get_sub_field('bio_equipo');

      ?>
      <!-- Team -->
      <div class="text-center">
        <?php if( $foto ): ?>
        <img class="u-lg-avatar shadow-lg rounded-circle mx-auto mb-4" src="<?php echo $foto['url'];?>" alt="<?php echo $foto['alt'];?>">
        <?php endif; ?>
        <?php if( $nombre ): ?>
        <h4 class="h5"><?php echo $nombre;?></h4>
        <?php endif; ?>
        <hr>
        <?php if( $bio ): ?>
        <p><?php echo $bio;?></p>
        <?php endif; ?>
      </div>
      <!-- End Team -->
    </div>
    <?php endwhile; ?>
      <?php endif; ?>
  </div>  
</div>


<!-- end team -->

<?php  }
get_footer();
?>