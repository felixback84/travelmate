<?php
get_header();

  while(have_posts()) {
    the_post(); ?>

    <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Terms Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <!-- Info Content -->

          <hr class="my-0">

            <?php 

            if( have_rows('preguntas_y_respuestas_tc') ): 
                  while( have_rows('preguntas_y_respuestas_tc') ): the_row();

            $numero = get_sub_field('numero_pregunta_tc');
            $pregunta = get_sub_field('pregunta_tc');
            $respuesta = get_sub_field('respuesta_tc');


             ?>

            <!-- Info Content -->
            <div id="services" class="space-2">
              <div class="mb-3">
                <?php 
                if( $numero ):?>
                <span class="d-block text-secondary font-weight-medium"><?php echo $numero; ?></span>
                <?php endif;

                if( $pregunta ):?>
                <h3><?php echo $pregunta; ?></h3>
                <?php endif; ?>

              </div>
              <?php if( $respuesta ):?>
              <p><?php echo $respuesta; ?></p>
              <?php endif; ?>

            </div>
            <?php endwhile; 
             endif; ?>
          <hr class="my-0">   
        </div>
      </div>
    </div>
    <!-- End Terms Section -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->
    
  <?php  }

get_footer();
?>