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
	    		Ubicación de lugar de interes en: <?php echo travelmate_get_terms( $post->ID, 'ubicacion_lugares' );?>
	    		</small>
	    		<small class="d-block text-muted mb-2">
	    		Tipo de lugar de interes: <?php echo travelmate_get_terms( $post->ID, 'etiquetas' );?>
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
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	        				<div class="media-body">
	         					<?php $horaInicioLugar = get_field_object('hora_apertura_lugar');?>
	          					<h3 class="h6 mb-0"><?php echo $horaInicioLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaInicioLugar['value'];?></small>
	        				</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	             			<div class="media-body">
	                			<?php $horaFinalLugar = get_field_object('hora_cierre_lugar');?>
	          					<h3 class="h6 mb-0"><?php echo $horaFinalLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaFinalLugar['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	        			 	<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('750','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	         				<div class="media-body">
	         					<?php $especificacionesLugar = get_field_object('especificaciones_del_lugar');?>
	          					<h3 class="h6 mb-0"><?php echo $especificacionesLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $especificacionesLugar['value'];?></small>
	         				</div>
	        			</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('767','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $websiteLugar = get_field_object('web_site_del_lugar');?>
	          					<h3 class="h6 mb-0"><?php echo $websiteLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $websiteLugar['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	            			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('758','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	              			<div class="media-body">
	                			<?php $tarifasLugar = get_field_object('tarifas_lugar_interes');
				                  $tablaAlgunosItemsLugar = get_field( 'tarifas_lugar_interes' );
				                    if ( $tablaAlgunosItemsLugar ) {
				                        echo '<table class="table table-bordered table-hover">';
				                            if ( $tablaAlgunosItemsLugar['header'] ) {
				                                echo '<thead>';
				                                    echo '<tr>';
				                                        foreach ( $tablaAlgunosItemsLugar['header'] as $th ) {
				                                            echo '<th>';
				                                                echo $th['c'];
				                                            echo '</th>';
				                                        }
				                                    echo '</tr>';
				                                echo '</thead>';
				                            }
				                            echo '<tbody>';
				                                foreach ( $tablaAlgunosItemsLugar['body'] as $tr ) {
				                                    echo '<tr>';
				                                        foreach ( $tr as $td ) {
				                                            echo '<td>';
				                                                echo $td['c'];
				                                            echo '</td>';
				                                        }
				                                    echo '</tr>';
				                                }
				                            echo '</tbody>';
				                        echo '</table>';
				                    }?>
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
    <div class="bg-gray-100">
      	<div class="container space-2">
        	<!-- Title -->
        	<div class="w-md-80 w-lg-60 text-center mx-auto mb-7">
          		<h2 class="h3">Ubicación de <?php the_title();?></h2>
        	</div>
        	<!-- End Title -->
         	<!-- Gmap -->
			<?php
			$locationLugarInteres = get_field('ubicacion_lugar');
			if( !empty($locationLugarInteres) ):
			?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $locationLugarInteres['lat']; ?>" data-lng="<?php echo $locationLugarInteres['lng']; ?>"></div>
			</div>
			<?php endif; ?>
		 	<!-- End Gmap -->	
      	</div>
    </div>
    
<?php }
get_footer();
?>