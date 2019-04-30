<?php
get_header();

while(have_posts()) {
    the_post();?>

    <!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main">
	  <!-- Article Content -->
	 	<div class="container py-3">
	    	<header class="w-md-75 w-lg-60 mx-md-auto">
	    		<h2 class="mb-3 text-center"><?php the_title();?></h2>
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
	              			$icon = wp_get_attachment_image_url('757','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	        				<div class="media-body">
	         					<?php $proveedorTour = get_field_object('field_5c1c31f633226');?>
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
	                			<?php $horarioTour = get_field_object('field_5c1c32a813220');?>
	          					<h3 class="h6 mb-0"><?php echo $horarioTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $horarioTour['value'];?></small>
	              			</div>
	            		</li>

	            		<li class="dropdown-divider"></li>

	            		<li class="media align-items-center pb-2">
	        			 	<img class="max-width-0 mr-3" src="<?php 
	              			$icon = wp_get_attachment_image_url('763','iconsMini',true );
	              			echo $icon;
	              			?>" alt="Image Description">
	         				<div class="media-body">
	         					<?php $duracionTour = get_field_object('field_5c1c340ab8e47');?>
	          					<h3 class="h6 mb-0"><?php echo $duracionTour['label'];?></h3>
	          					<small class="text-secondary"><?php echo $duracionTour['value'];?></small>
	         				</div>
	        			</li>

	          		</ul>
	          		<!-- End Contacts List -->
	        	</div>
	        <div class="col-lg-9 order-lg-1">
	          	<div class="pr-lg-4">
	          		<div class="mb-2 d-inline-block">
	          			<?php $indicacionesTour = get_field_object('field_5c9d529fccdc1');?>
	            		<a class="btn btn-outline-info btn-wide mb-2 mb-md-0" href="<?php echo $indicacionesTour['value'];?>">Reservar</a>
	          		</div>
	          		<div class="mb-2 d-inline-block">
	            		<a id="upload-button-tour" class="btn btn-outline-info btn-wide mb-2 mb-md-0">Confirmación
        				</a>
	          		</div>
	          		<input id="post_meta_image_tour" type="hidden">
	          		<?php $urlReservaTour = get_field('field_5cbe7a404730e',$post_id);?>
	            	<p><?php the_content();?></p>
	        	</div>
	      	</div>
	    	<!-- End Job Description Section -->
	    </div>

	    <div class="py-1">
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
              <?php $nombreConfirmacion = the_field('field_5cbf2c4ac9874');?>
              <p ><?php echo $nombreConfirmacion['value'];?></p>
            </td>
            <td class="align-middle">
              <a class="u-label u-label--info mb-3" href="<?php echo $urlReservaTour['url'];?>"><?php echo get_the_title($urlReservaTour['value']);?></a>
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