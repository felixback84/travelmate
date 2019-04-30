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
        <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo $urlReservar['value'];?>">
          Reservar
        </a>
        <a id="upload-button-hotel" class="btn btn-outline-info btn-wide mb-2 mb-md-0">Confirmación
        </a>
        <?php $urlIndicaciones = get_field_object('field_5c9ce0de4c48a');?>
        <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo $urlIndicaciones['value'];?>">
          Indicaciones
        </a>
        <input id="post_meta_image_hotel" type="hidden">
        <?php $urlReservaHotel = get_field('field_5cbe7a17dcb9c',$post_id);?>
      </div>
    </div>

    <div class="py-3">
      <table class="table table-bordered table-hover"style="width:100%">
        <thead>
            <tr>
               <th style="width:50%;text-align:center">Alojamientos</th>
               <th style="width:50%;text-align:center">Confirmaciones</th>
            <tr>  
        </thead>

        <tbody>
          <tr class="text-center">
            <td class="align-middle">
              <?php $nombreConfirmacion = the_field('field_5cbf2127e6677');?>
              <p ><?php echo $nombreConfirmacion['value'];?></p>
            </td>
            <td class="align-middle">
              <a class="u-label u-label--info mb-3" href="<?php echo $urlReservaHotel['url'];?>"><?php echo get_the_title($urlReservaHotel['value']);?></a>
            </td>
          </tr> 
        </tbody>     
      </table>
    </div>
  </div>



<?php }
get_footer();
?>