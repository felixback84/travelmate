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
	         					<?php $precioTrans = get_field_object('field_5c1c372c6ee62');?>
	          					<h3 class="h6 mb-0"><?php echo $precioTrans['label'];?></h3>
	          					<small class="text-secondary"><?php echo $precioTrans['value'];?></small>
	         				</div>
	        			</li>

	            		<li class="dropdown-divider"></li>

	        			<li class="media align-items-center pb-2">
	         				<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('757','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	        				<div class="media-body">
	         					<?php $tiempoTrans = get_field_object('field_5c1c376692b21');?>
	          					<h3 class="h6 mb-0"><?php echo $tiempoTrans['label'];?></h3>
	          					<small class="text-secondary"><?php echo $tiempoTrans['value'];?></small>
	        				</div>
	            		</li>
	          		</ul>
	        	</div>

		        <div class="col-lg-9 order-lg-1 my-2">
		        	<div class="card border-1">
			          	<div class="p-lg-4">
			          		<?php $subtituloTrans = get_field_object('field_5c1c3717212f9');?>
			          		<h4 style ="color:#15DA94"><?php echo $subtituloTrans['value'];?></h4>
			          		<p><?php the_content();?></p>
			            	<div class="mb-5">
			            		<?php 
			            		$urlIndicaciones = get_field_object('field_5c9d3d2813e58');
			            		if ($urlIndicaciones != NULL) {?>
			            		<a class="btn btn-outline-primary btn-wide mb-2 mb-md-0" href="<?php echo $urlIndicaciones['value'];?>">Indicaciones</a>
			            		<?php }; ?>
			          		</div>
			        	</div>
			        </div>	
		      	</div>
	    	</div>
	    </div>	
	</main>
 	<!-- ========== END MAIN CONTENT ========== -->   
<?php }
get_footer();
?>