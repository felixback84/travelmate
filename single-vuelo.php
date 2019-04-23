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
		   	<div class="container">
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
				            	<div class="mb-5 d-flex flex-row-reverse">
				            		<?php $urlReservaVuelo = get_field_object('field_5c9d3499894fc');?>
				            		<a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo $urlReservaVuelo['value'];?>">Reservar</a>
				          		</div>
				          		<div class="mb-5 d-flex flex-row-reverse">
				            		<a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="#fotoconfirma1" data-modal-target="#fotoconfirma1">Confirmación</a>
				          		</div>
				          		<!-- End Article Content -->
				        	</div>
				        </div>	
			      	</div>
		    	<!-- End Job Description Section -->
		    	</div>
		    </div>
	    </div>	
	</main>
 	<!-- ========== END MAIN CONTENT ========== -->

 	<!-- Signup Modal Window -->
    <div id="fotoconfirma1" class="js-signup-modal u-modal-window" style="width: 600px;">
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
            <h2 class="h4 mb-0">Confirmaciones de transportes</h2>
            <p>Suba imagen (jpg, jpeg, png) de hasta 2 Megas.</p>
          </header>
          <hr class="my-5">
          <?php echo do_shortcode('[wpforms id="1733"]');?>
          <!-- End Title -->
        </div>
        <!-- End Signin -->
      </div>
      <!-- End Content -->
    </div>

<?php }
get_footer();
?>