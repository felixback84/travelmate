<?php
get_header();
?>
<div class="container space-2 space-1--lg">
  <!-- Title -->
  	<div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    	<h2 class="h3"><?php echo get_the_archive_title();?></h2>
    	<p><?php echo get_the_archive_description();?></p>
  	</div> 
  	<div class="container u-cubeportfolio space-0 space-0--lg">
    <!-- Content -->
    	<div class="cbp mb-9"
         data-layout="grid"
          data-controls="#filterControls"
          data-animation="quicksand"
          data-caption-animation="zoom"
          data-x-gap="30"
          data-y-gap="30"
          data-load-more-selector="#cubeLoadMore"
          data-load-more-action="auto"
          data-load-items-amount="2"
          data-media-queries='[
              {"width": 1500, "cols": 2},
              {"width": 1100, "cols": 2},
              {"width": 800, "cols": 2},
              {"width": 580, "cols": 2},
              {"width": 300, "cols": 1}
            ]'> 
  	
  <?php
  while(have_posts()){
    the_post();
    $ciudadesRegiones = get_field('ciudades_regiones');
    $img = get_field('bandera_paises'); 
    //$alt = $banderaPaises['alt'];
    //$size = 'banderaMini';
    //$thumbFlag = $banderaPaises['sizes'][$size];
    ?>  
        <!-- Item -->
      		<div class="cbp-item graphic">
        		<div class="cbp-caption">
          			<div class="cbp-caption-defaultWrap">
            			<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('homeDestinoCover');}?>" alt="<?php the_title_attribute();?>">
          			</div>
          			<div class="cbp-caption-activeWrap">
            			<div class="cbp-l-caption-alignCenter d-flex align-items-end">
              				<ul class="list-inline ml-auto p-3 mb-0">
                				<li class="list-inline-item">
                  					<a class="u-icon u-icon--primary rounded-circle" href="<?php the_permalink();?>">
                    				<span class="fa fa-link u-icon__inner"></span>
                  					</a>
                				</li>
                				<li class="list-inline-item">
                  					<a class="cbp-lightbox u-icon  rounded-circle">
                               <?php
                                foreach($ciudadesRegiones as $id){ 
                                  $img = get_field('bandera_paises', $id);
                                  //echo print_r($img['url']);
                                  echo '<img class="u-avatar rounded-circle mr-3" src="'.$img['url'].'">';
                              }?>
                   				 	<!--<img class="u-avatar rounded-circle mr-3" src="" alt="?>">-->
                  					</a>
                				</li>
              				</ul>
            			</div>
         			</div>
        		</div>
        		<div class="p-4">
          			<h2 class="h5 mb-0"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
          			<small class="d-block text-muted mb-2">Ubicación de hotel en: <?php echo travelmate_get_terms( $post->ID, 'ubicacion_hoteles' );?></small>
        		</div>
    		</div>

<?php } ?>
		</div>   
	</div>
</div>	
<?php
get_footer();
?> 
	


