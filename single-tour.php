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
	    		<small class="d-block text-muted mb-2">
	    		Ubicación de tour en: <?php echo travelmate_get_terms( $post->ID, 'ubicacion_tours' );?>
	    		</small>
	    		<small class="d-block text-muted mb-2">
	    		Cateoría de tour: <?php echo travelmate_get_terms( $post->ID, 'categoria_de_tours' );?>
	    		</small>
	    	</div>	
	    	<!-- end terms -->
	   	</div>
	   	<!-- Description -->
	   	<!-- Job Description Section -->
	   	<div class="container space-0 space-1--lg">
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
	         					<?php $proveedorTour = get_field_object('proveedor_del_tour');?>
	          					<h3 class="h6 mb-0"><?php echo $proveedorTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $proveedorTour['value'];?></small>
	         				</div>
	        			</li>

	            		<li class="dropdown-divider"></li>

	        			<li class="media align-items-center pb-2">
	         				<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	        				<div class="media-body">
	         					<?php $horaInicioTour = get_field_object('hora_inicio_tour');?>
	          					<h3 class="h6 mb-0"><?php echo $horaInicioTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaInicioTour['value'];?></small>
	        				</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('799','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	             			<div class="media-body">
	                			<?php $horaFinalTour = get_field_object('hora_cierre_tour');?>
	          					<h3 class="h6 mb-0"><?php echo $horaFinalTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaFinalTour['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('767','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $websiteTour = get_field_object('web_site_del_tour');?>
	          					<h3 class="h6 mb-0"><?php echo $websiteTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $websiteTour['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	            			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('758','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $precioPersonaTour = get_field_object('precio_tour');?>
	          					<h3 class="h6 mb-0"><?php echo $precioPersonaTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $precioPersonaTour['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>
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
        	<!-- Title -->
        	<div class="w-md-80 w-lg-60 text-center mx-auto mb-7">
          		<h2 class="h3">Paradas en <?php the_title();?></h2>
        	</div>
        	<!-- End Title -->
         	<!-- Gmap -->
			<?php if( have_rows('ubicacion_tour') ): ?>
			<div class="acf-map">
		 		<?php while ( have_rows('ubicacion_tour') ) : the_row(); 
		 		$location = get_sub_field('ubicacion_parada_tour');?>
				 	<div class="marker" data-lat="<?php echo $location['lat'];?>" data-lng="<?php echo $location['lng'];?>">
		   				<h4><?php the_sub_field('lugar_parada_tour'); ?></h4>
		   				<p class="address"><?php echo $location['address']; ?></p>
		 			</div>
		 		<?php endwhile; ?>
			</div>
		 	<?php endif; ?>
		 	<!-- End Gmap -->
		 	<!-- paradas tour -->
        	<div class="card-deck d-block d-lg-flex">
        		<?php
        		$paradasTours = get_field('parada_tour');
        		if ($paradasTours) {        		 
			    foreach($paradasTours as $paradas) {?>
          		<article class="card rounded mb-5">
            		<div class="card-body row align-items-stretch no-gutters p-0">
              		<!-- News Blog Card -->
              			<div class="col-7">
                			<div class="p-5">
                  				<h2 class="h5 mb-3">
                    				<a href="<?php echo get_the_permalink($paradas);?>"><?php echo get_the_title($paradas);?></a>
                  				</h2>
                  				<small class="d-block text-muted mb-2">
					    		Ubicación de lugar de interes en: <?php echo travelmate_get_terms( $paradas, 'ubicacion_lugares' );?>
					    		</small>
                  				<p class="mb-0"><?php echo get_the_excerpt($paradas);?></p>
                			</div>
              			</div>
	              			<div class="col-5 card-img-right d-none d-inline-block bg-img-hero" data-bg-img-src="<?php echo get_the_post_thumbnail_url($paradas);?>">
	              			</div>
            		</div>
            		<!-- End News Blog Card -->
          		</article>
          		<?php 
          	 }
          		}
          		;?>
        	</div>
        	<!-- End paradas tour -->
      	</div>
    </div>
    
<?php }
get_footer();
?>