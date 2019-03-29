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
	   		<div class="w-lg-75 text-center mx-lg-auto">
	   	</div>
	   	<!-- Description -->
	   	<!-- Job Description Section -->
	   	<div class="container space-0 space-1--lg">
	    	<div class="row">
	     		<div class="col-lg-3 order-lg-1 mb-7 mb-lg-0">
	      			<!-- Contacts List -->
	       			<ul class="list-unstyled">

	        			<li class="media align-items-center pb-2">
	         				<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	        				<div class="media-body">
	         					<?php $precioLugar = get_field_object('field_5c1c2d8681c8c');?>
	          					<h3 class="h6 mb-0"><?php echo $precioLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $precioLugar['value'];?></small>
	        				</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	              			<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('756','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	             			<div class="media-body">
	                			<?php 
	                			$diasLugar = get_field_object('field_5c9d4d1510a50');
	                			$horarioAperturaLugar = get_field_object('field_5c1c2ee46036d');
	                			$horarioCierreLugar = get_field_object('field_5c9d4e0e23eb0');
	                			?>
	          					<h3 class="h6 mb-0"><?php echo $horarioLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $diasLugar['value'];?></small>
	          					<p><small class="text-secondary"><?php echo $horarioAperturaLugar['value'] . ' - ' . 
	          					$horarioCierreLugar['value'];?></small></p>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	        			 	<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('750','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	         				<div class="media-body">
	         					<?php $duracionLugar = get_field_object('field_5c1c3150b73f5');?>
	          					<h3 class="h6 mb-0"><?php echo $duracionLugar['label'];?></h3>
	          					<small class="text-secondary"><?php echo $duracionLugar['value'];?></small>
	         				</div>
	        			</li>

	          		</ul>
	          		<!-- End Contacts List -->
	        	</div>
	        <div class="col-lg-9 order-lg-1">
	          	<div class="pr-lg-4">
	          		<div class="mb-5"></div>
	          		<?php $indicacionesLugar = get_field_object('field_5c9d489288d3a');?>
	            		<a class="btn btn-sm btn-primary btn-wide" href="<?php echo $indicacionesLugar['value'];?>">Indicaciones</a>
	          		</div>
	            	<p><?php the_content();?></p>
	        	</div>
	      	</div>
	    	<!-- End Job Description Section -->
	    </div>	
	</main>
 	<!-- ========== END MAIN CONTENT ========== -->
    
<?php }
get_footer();
?>