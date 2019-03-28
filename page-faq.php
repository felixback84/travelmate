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

          <!-- Tab Nav -->

          <div class="nav nav-tabs justify-content-center tab-modern"  id="navbar-faq"  aria-orientation="vertical">
     
            <li class="nav-item">
              <a class="nav-link h5 tab-modern__nav-link mb-4" 
               id="Previaje-tab" 
               href="#Previaje">
                Pre-viaje
              </a>
            </li>  
            <li class="nav-item">
              <a class="nav-link h5 tab-modern__nav-link mb-4" 
                id="Viaje-tab" 
                href="#Viaje">
                Viaje
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5 tab-modern__nav-link mb-4" 
                id="Posviaje-tab" 
                href="#Posviaje">
                Pos-viaje
              </a>
            </li>
          </div>
          <!--  vuelos -->
          <div data-spy="scroll" class="container" data-target="#navbar-viajero" data-offset="0">
            <!--  vuelos -->
            <div class="" id="Previaje">
              <div class="row align-items-lg-center">
                <div class="col-md-12 order-md-2 mb-1 mb-md-0">
                  <div class="mb-1">
                    
                    <?php
                        if( have_rows('preguntas_y_respuestas_pre_viaje') ): 
                        while( have_rows('preguntas_y_respuestas_pre_viaje') ): the_row();

                        $preguntaPre = get_sub_field('pregunta_pre_viaje');
                        $respuestaPre = get_sub_field('respuesta_pre_viaje'); ?>

                    <div class="space-1">
                      <div class="mb-1">
                        
                        <?php if( $preguntaPre ):?>
                        <h3><?php echo $preguntaPre; ?></h3>
                        <?php endif; ?>

                      </div>
                      <?php if( $respuestaPre ):?>
                      <p><?php echo $respuestaPre; ?></p>
                      <?php endif; ?>

                    </div>
                    <?php endwhile; 
                     endif; ?>
                          
                  
                  </div>
                </div>        
              </div>
            </div>  
          
            <!--  end vuelos -->

            <!--  vuelos -->
            <div class="" id="Viaje">
              <div class="row align-items-lg-center">
                <div class="col-md-12 order-md-2 mb-1 mb-md-0">
                  <div class="mb-1">
                    
                    <?php
                        if( have_rows('preguntas_y_respuestas_viaje') ): 
                        while( have_rows('preguntas_y_respuestas_viaje') ): the_row();

                        $preguntaViaje = get_sub_field('pregunta_viaje');
                        $respuestaViaje = get_sub_field('respuesta_viaje'); ?>

                    <div class="space-1">
                      <div class="mb-1">
                        
                        <?php if( $preguntaViaje ):?>
                        <h3><?php echo $preguntaViaje; ?></h3>
                        <?php endif; ?>

                      </div>
                      <?php if( $respuestaViaje ):?>
                      <p><?php echo $respuestaViaje; ?></p>
                      <?php endif; ?>

                    </div>
                    <?php endwhile; 
                     endif; ?>

                  </div>
                </div>        
              </div>
            </div>
          
            <!--  end vuelos -->

            <!--  vuelos -->
            <div class="" id="Posviaje">
              <div class="row align-items-lg-center">
                <div class="col-md-12 order-md-2 mb-1 mb-md-0">
                  <div class="mb-1">
                    
                    <?php
                        if( have_rows('preguntas_y_respuestas_pos_viaje') ): 
                        while( have_rows('preguntas_y_respuestas_pos_viaje') ): the_row();

                        $preguntaPost = get_sub_field('pregunta_pos_viaje');
                        $respuestaPost = get_sub_field('respuesta_pos_viaje'); ?>

                    <div class="space-1">
                      <div class="mb-1">
                        
                        <?php if( $preguntaPost ):?>
                        <h3><?php echo $preguntaPost; ?></h3>
                        <?php endif; ?>

                      </div>
                      <?php if( $respuestaPost ):?>
                      <p><?php echo $respuestaPost; ?></p>
                      <?php endif; ?>

                    </div>
                    <?php endwhile; 
                     endif; ?>
                
                  
                  </div>
                </div>        
              </div>
            </div>
          </div>
          <!--  end vuelos -->  
        </div>         
      </div>
    </div>
  </main>
 <script>
    
  jQuery(document).on('ready', function (){
  
 $('#Previaje a[href="#Previaje"]').tab('show')
 $('#Viaje a[href="#Viaje"]').tab('show')
 $('#Posviaje a[href="#Posviaje"]').tab('show')

})

  </script>
 
    
  <?php  }

get_footer();
?>