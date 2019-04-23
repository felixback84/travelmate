<?php
get_header();

while(have_posts()) {
    the_post();?>

    <!-- ========== MAIN CONTENT ========== -->
	<div class="container py-3">
		<header class="w-md-75 w-lg-60 mx-md-auto">
	    	<h2 class="text-center"><?php the_title();?></h2>
	   	</header>
      <div class="card-mb card-sm-columns card-sm-2-count"> 
        <img class="bg-white shadow rounded p-2 card-img-top" src="<?php $thumb13 = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homeDestinoCover' );
        echo $thumb13['0'];?>" alt="Image Description" style= "height: 500px">
        <div class="card border-1 m-1 p-3">
          <ul class="list-unstyled">

        		<li class="media align-items-center">
          			<img class="max-width-0 mr-3" src="<?php 
          			$icon = wp_get_attachment_image_url('795','iconsMini',true );
          			echo $icon;
          			?>" alt="Image Description">
         			<div class="media-body">
            			<?php $direccionHotel = get_field_object('field_5c1c2b1a2d03f');?>
      					<h3 class="h6 mb-0"><?php echo $direccionHotel['label'];?></h3>
      					<small class="text-secondary"><?php echo $direccionHotel['value'];?></small>
          			</div>
        		</li>

        		<li class="dropdown-divider"></li>

        		<li class="media align-items-center">
          			<img class="max-width-0 mr-3" src="<?php 
          			$icon = wp_get_attachment_image_url('759','iconsMini',true );
          			echo $icon;
          			?>" alt="Image Description">
         			<div class="media-body">
            			<?php $telefonoHotel = get_field_object('field_5c1c2bc087149');?>
      					<h3 class="h6 mb-0"><?php echo $telefonoHotel['label'];?></h3>
      					<small class="text-secondary"><?php echo $telefonoHotel['value'];?></small>
          			</div>
        		</li>

            <li class="dropdown-divider"></li>

            <li class="media align-items-center">
                <img class="max-width-0 mr-3" src="<?php 
                $icon = wp_get_attachment_image_url('761','iconsMini',true );
                echo $icon;
                ?>" alt="Image Description">
              <div class="media-body">
                  <?php $fechaEntrada = get_field_object('field_5c1c2958d5535');?>
                  <?php $fechaSalida = get_field_object('field_5c1c2a1286c4b');?>
                <h3 class="h6 mb-0">Fechas:</h3>
                <small class="text-secondary"><?php echo $fechaEntrada['value'].' - '.$fechaSalida['value'];?></small>
                </div>
            </li>

            <li class="dropdown-divider"></li>

            <li class="media align-items-center">
                <img class="max-width-0 mr-3" src="<?php 
                $icon = wp_get_attachment_image_url('763','iconsMini',true );
                echo $icon;
                ?>" alt="Image Description">
              <div class="media-body">
                  <?php $cantidadNoches = get_field_object('field_5c1c2c0ae5e2d');?>
                <h3 class="h6 mb-0"><?php echo $cantidadNoches['label'];?></h3>
                <small class="text-secondary"><?php echo $cantidadNoches['value'];?></small>
                </div>
            </li>
  		    </ul>

          <?php $urlReservar = get_field_object('field_5c9ce0c84c489');?>
          <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo $urlReservar['value'];?>">
            Reservar
          </a>
          <?php $cantidadNoches = get_field_object('field_5c1c2c0ae5e2d');?>
          <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="#fotoconfirma2" data-modal-target="#fotoconfirma2">
            Confirmación
          </a>
          <?php $urlIndicaciones = get_field_object('field_5c9ce0de4c48a');?>
          <a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo $urlIndicaciones['value'];?>">
            Indicaciones
          </a>
        </div>
      </div>
    </div>

    <!-- Signup Modal Window -->
    <div id="fotoconfirma2" class="js-signup-modal u-modal-window" style="width: 600px;">
      <!-- Modal Close Button -->
      <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
        <span class="fas fa-times"></span>
      </button>
      <!-- End Modal Close Button -->

      <!-- Content -->
      <div class="p-5">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Confirmaciones de alojamientos</h2>
            <p>Suba imagen (jpg, jpeg, png) de hasta 2 Megas.</p>
          </header>
          <hr class="my-5">
          <?php echo do_shortcode('[wpforms id="1734"]');?>
          <!-- End Title -->
        </div>
        <!-- End Signin -->
      </div>
      <!-- End Content -->
    </div>

<?php }
get_footer();
?>