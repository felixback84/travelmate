<?php
get_header();

while(have_posts()) {
    the_post();?>

    <!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
	  <!-- Article Content -->
	 	<div class="container space-1 space-1--lg">
	    	<header class="w-md-75 w-lg-60 mx-md-auto">
	    		<h1 class="mb-5 text-center"><?php the_title();?></h1>
	   		</header>
	   		<!-- Image -->
	   		<img class="img-fluid mb-3" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('pageTourCover');}?>" alt="Image Description">
	   		<!-- End Image -->
	   		<div class="w-lg-75 text-center mx-lg-auto mb-5">
	    	<!-- terms -->
	    		<!-- terms -->
	    		<small class="d-block text-muted mb-2">
	    		Ubicación de translado: <?php echo travelmate_get_terms( $post->ID, 'ubicacion_translados' );?>
	    		</small>
	    		<small class="d-block text-muted mb-2">
	    		Categoría de translado: <?php echo travelmate_get_terms( $post->ID, 'categoria_de_translado' );?>
	    		</small>
	    	</div>	
	    	<!-- end terms -->
	   	</div>
	   	<!-- Description -->
	   	<!-- Job Description Section -->
	   	<div class="container space-0 space-0--lg">
	    	<div class="row">
	     		<div class="col-lg-3 order-lg-2 mb-7 mb-lg-0">
	      			<div class="mb-4">
	       				<h2 class="h4"><?php the_title();?> snapshot</h2>
	      			</div>
	      			<!-- Contacts List -->
	       			<ul class="list-unstyled">

	       				<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('755','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $proveedorTransfer = get_field_object('proveedor_del_translado');?>
	          					<h3 class="h6 mb-0"><?php echo $proveedorTransfer['label'];?></h3>
	          					<small class="text-secondary"><?php echo $proveedorTransfer['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	             			<div class="media-body">
	                			<?php $horaInicioTransfer = get_field_object('hora_inicio_del_translado');?>
	          					<h3 class="h6 mb-0"><?php echo $horaInicioTransfer['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaInicioTransfer['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('799','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	             			<div class="media-body">
	                			<?php $horaFinalTransfer = get_field_object('hora_cierre_del_translado');?>
	          					<h3 class="h6 mb-0"><?php echo $horaFinalTransfer['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaFinalTransfer['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	            			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('767','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $websiteTransfer = get_field_object('web_site_del_translado');?>
	          					<h3 class="h6 mb-0"><?php echo $websiteTransfer['label'];?></h3>
	          					<small class="text-secondary"><?php echo $websiteTransfer['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	            			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('758','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $precioPersonaTransfer = get_field_object('precio_del_translado');?>
	          					<h3 class="h6 mb-0"><?php echo $precioPersonaTransfer['label'];?></h3>
	          					<small class="text-secondary"><?php echo $precioPersonaTransfer['value'];?></small>
	              			</div>
	            		</li>
	          		</ul>
	          		<!-- End Contacts List -->
	        	</div>
	        <div class="col-lg-9 order-lg-1">
	          	<div class="pr-lg-4">
	            	<p><?php the_content();?></p>
	            	<div class="mb-5"></div>
	            		<a class="btn btn-sm btn-primary btn-wide" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Apply Now</a>
	          		</div>
	          		<!-- End Article Content -->
	        	</div>
	      	</div>
	    	<!-- End Job Description Section -->
	    </div>	
	</main>
 	<!-- ========== END MAIN CONTENT ========== -->
	<!-- Social Networks --> 
	<div class="col-lg-12 order-lg-1">	
	    <ul class="list-inline w-md-75 w-lg-60 text-center mx-md-auto mb-0">
	        <li class="list-inline-item">
	        	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-facebook-f u-icon__inner"></span>
	          	</a>
	        </li>
	        <li class="list-inline-item">
	          	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-google u-icon__inner"></span>
	          	</a>
	        </li>
	        <li class="list-inline-item">
	          	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-twitter u-icon__inner"></span>
	          	</a>
	        </li>
	        <li class="list-inline-item">
	          	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-pinterest u-icon__inner"></span>
	          	</a>
	        </li>
	        <li class="list-inline-item">
	          	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-get-pocket u-icon__inner"></span>
	          	</a>
	        </li>
	        <li class="list-inline-item">
	          	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-telegram-plane u-icon__inner"></span>
	          	</a>
	        </li>
	        <li class="list-inline-item">
	          	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
	            	<span class="fab fa-slack-hash u-icon__inner"></span>
	          	</a>
	        </li>
	    </ul>
	</div>     
	<!-- End Social Networks -->
    <!-- Related News Section -->
    <div class="bg-gray-100">
      	<div class="container space-2">
         	<!-- Gmap -->
    		<div class="bg-gray-100">
      			<div class="container space-2">
        			<!-- Title -->
        			<div class="w-md-80 w-lg-60 text-center mx-auto mb-7">
          				<h2 class="h3">Ubicación de <?php the_title();?></h2>
        			</div>
		        	<!-- End Title -->
		         	<!-- Gmap -->
					<?php
					$locationTranslado = get_field('ubicacion_transaldo');
					if( !empty($locationTranslado) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $locationLugarInteres['lat']; ?>" data-lng="<?php echo $locationLugarInteres['lng']; ?>">
						</div>
					</div>
					<?php endif; ?>
				 	<!-- End Gmap -->	
      			</div>
    		</div>
		 	<!-- End Gmap -->
    	</div>
    </div>
    
<?php }
get_footer();
?>