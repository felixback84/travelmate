<?php
get_header();

while(have_posts()) {
    the_post();?>

    <!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
	  <!-- Article Content -->
	 	<div class="container space-1 space-1--lg">
	    	<header class="w-md-75 w-lg-60 mx-md-auto">
	    		<h1 class="text-center"><?php the_title();?></h1>
	   		</header>
	   	</div>
	   	<!-- Description -->
	   	<!-- Job Description Section -->
	   	<div class="container">
	    	<div class="row">
	     		<div class="col-lg-3 order-lg-1 mb-lg-0">
	      			<!-- Contacts List -->
	       			<ul class="list-unstyled">
	        			<li class="media align-items-center pb-2">
	        			 	<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('747','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	         				<div class="media-body">
	         					<?php $aerolinea = get_field_object('aerolinea_del_vuelo');?>
	          					<h3 class="h6 mb-0"><?php echo $aerolinea['label'];?></h3>
	          					<small class="text-secondary"><?php echo $aerolinea['value'];?></small>
	         				</div>
	        			</li>

	            		<li class="dropdown-divider"></li>

	        			<li class="media align-items-center pb-2">
	         				<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('757','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	        				<div class="media-body">
	         					<?php $numeroVuelo = get_field_object('numero_de_vuelo');?>
	          					<h3 class="h6 mb-0"><?php echo $numeroVuelo['label'];?></h3>
	          					<small class="text-secondary"><?php echo $numeroVuelo['value'];?></small>
	        				</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	             			<div class="media-body">
	                			<?php $horaSalidaVuelo = get_field_object('hora_salida_del_vuelo');?>
	          					<h3 class="h6 mb-0"><?php echo $horaSalidaVuelo['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horaSalidaVuelo['value'];?></small>
	              			</div>
	            		</li>
	          		</ul>
	          		<!-- End Contacts List -->
	        	</div>

		        <div class="col-lg-9 order-lg-1 my-2">
		        	<div class="card border-1 p-5">
			          	<div class="p-lg-4">
			            	<div class="mb-5">
			            		<a class="btn btn-sm btn-primary btn-block" href="">Apply Now</a>
			          		</div>
			          		<div class="mb-5">
			            		<a class="btn btn-sm btn-primary btn-block" href="">Apply Now</a>
			          		</div>
			          		<!-- End Article Content -->
			        	</div>
			        </div>	
		      	</div>
	    	<!-- End Job Description Section -->
	    	</div>
	    </div>	
	</main>
 	<!-- ========== END MAIN CONTENT ========== -->
	
    
<?php }
get_footer();
?>