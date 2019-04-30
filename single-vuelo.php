<?php
get_header();

while(have_posts()) {
    the_post();?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Article Content -->
 	<div class="container py-3">
  	<header class="w-md-75 w-lg-60 mx-md-auto">
  		<h2 class="text-center"><?php the_title();?></h2>
 		</header>
   	<!-- Description -->
   	<!-- Job Description Section -->
  	<div class="row">
   		<div class="col-lg-3 order-lg-1 mb-lg-0">
  			<!-- Contacts List -->
   			<ul class="list-unstyled">
   				<li class="media align-items-center pb-2">
      			<img class="max-width-0 mr-3" src="<?php 
      			$icon = wp_get_attachment_image_url('762','iconsMini',true );
      			echo $icon;
      			?>" alt="Image Description">
     			<div class="media-body">
        			<?php $fechaAndHoraVuelo = get_field_object('field_5c1c3a36c2c39');?>
  					<h3 class="h6 mb-0"><?php echo $fechaAndHoraVuelo['label'];?></h3>
  					<small class="text-secondary"><?php echo $fechaAndHoraVuelo['value'];?></small>
      		</div>
        </li>

        <li class="dropdown-divider"></li>

  			<li class="media align-items-center pb-2">
  			 	<img class="max-width-0 mr-3" src="<?php 
        			$icon = wp_get_attachment_image_url('747','iconsMini',true );
        			echo $icon;
        			?>" alt="Image Description">
   				<div class="media-body">
   					<?php $aerolineaAndNumero = get_field_object('field_5c1c399bff370');?>
    					<h3 class="h6 mb-0"><?php echo $aerolineaAndNumero['label'];?></h3>
    					<small class="text-secondary"><?php echo $aerolineaAndNumero['value'];?></small>
   				</div>
  			</li>

    		<li class="dropdown-divider"></li>

  			<li class="media align-items-center pb-2">
   				<img class="max-width-0 mr-3" src="<?php 
        			$icon = wp_get_attachment_image_url('756','iconsMini',true );
        			echo $icon;
        			?>" alt="Image Description">
  				<div class="media-body">
   					<?php $tiempoVuelo = get_field_object('field_5cbdc769ee009');?>
    					<h3 class="h6 mb-0"><?php echo $tiempoVuelo['label'];?></h3>
    					<small class="text-secondary"><?php echo $tiempoVuelo['value'];?></small>
  				</div>
      		</li>
    		</ul>
    	<!-- End Contacts List -->
  	  </div>

      <div class="col-lg-9 order-lg-1 my-2">
      	<div class="card border-1 p-5">
        	<div class="p-lg-4">
            <ul class="list-unstyled float-right">
              <li class="mb-1">
                <a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="">Reservar</a>
              </li>
              <li>
                <a id="upload-button-vuelo" class="btn btn-outline-info btn-wide mb-2 mb-md-0">Confirmación</a>
              </li>
            </ul>
            <input id="post_meta_image_vuelo" type="hidden">
            <?php $urlReservaVuelo = get_field('field_5cc3130abf05d',$post_id);?>
          </div>
        </div>	
    	</div>
	  </div>

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
            <?php $nombreConfirmacion = the_field('field_5cc4d1f4d0f5e');?>
            <p ><?php echo $nombreConfirmacion['value'];?></p>
          </td>
          <td class="align-middle">
            <a class="u-label u-label--info mb-3" href="<?php echo $urlReservaVuelo['url'];?>"><?php echo get_the_title($urlReservaVuelo['value']);?></a>
          </td>
        </tr> 
      </tbody>     
    </table>
  </div>	
</main>
<!-- ========== END MAIN CONTENT ========== -->

<?php }
get_footer();
?>