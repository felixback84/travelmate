<?php
get_header();

  while(have_posts()) {
    the_post(); ?>
<!-- porque nosotros -->
<div class="container space-1 space-1--lg">
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    <?php
    $fraseRazon = get_field('frase_razon');
     ?>
    <h1 style="color: #000042;">¿Por qué nosotros?</h1>
    <p><?php echo $fraseRazon;?></p>
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
          
      <div class="bg-white text-center border p-3 col-lg-4">
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
<!-- end porque nosotros -->
  <?php  }

get_footer();
?>