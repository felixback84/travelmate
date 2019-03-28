<?php
get_header();
while(have_posts()) {
    the_post(); ?>
<!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
      	<!-- Apply your Parallax background image here -->
      	<?php $thumbParallax = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      	<div class="divimage dzsparallaxer--target gradient-overlay-half-dark-v2" style="height: 120%; background-image: url('<?php echo $thumbParallax['0'];?>');">	
      	</div>
      	<div class="d-flex align-items-end height-600 position-relative z-index-2">
        	<div class="container">
          		<div class="w-lg-60 text-center mx-lg-auto mb-9">
            		<!-- Title -->
            		<div class="my-7">
              			<h1 class="display-4 font-size-48--md-down text-white mb-4"><?php the_title();?></h1>
            		</div>
            		<!-- End Title -->
          		</div>
        	</div>
      	</div>
    </div>
    <!-- End Hero Section -->

    <!-- Article Content Section -->
    <div class="container space-2 space-3-bottom--lg">
      <div class="row">
        <div class="col-lg-9 mb-9 mb-lg-0">
          <!-- Info -->
          <ul class="list-inline text-secondary mb-9">
            <li class="list-inline-item mr-4">
              <span class="far fa-calendar-alt mr-2"></span>
              <?php the_time('Y - M - j');?>
            </li>
            <li class="list-inline-item mr-4">
              <span class="far fa-folder-open mr-2"></span>
              <a><?php echo get_the_category_list(',');?></a>
            </li>
            <li class="list-inline-item mr-4">
              <span class="fas fa-tags mr-2"></span>
              <a><?php echo get_the_tag_list('',' - ','');?></a>
            </li>
          </ul>
        	<!-- End Info -->
          <!-- Description -->
          <div class="mb-9">
            <p><?php the_content();?></p>          
          </div>
          <!-- End Description -->
          <hr class="my-8">
          <!-- Social Networks -->
          <div class="d-flex align-items-center">
            <h3 class="h6 d-inline-block text-uppercase mr-3 mb-0">Share:</h3>
            	<ul class="list-inline mb-0">
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                  	<span class="fab fa-facebook-f u-icon__inner"></span>
                	</a>
             		</li>
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                 		<span class="fab fa-google u-icon__inner"></span>
                	</a>
              	</li>
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                  	<span class="fab fa-twitter u-icon__inner"></span>
                	</a>
              	</li>
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                  	<span class="fab fa-pinterest u-icon__inner"></span>
                	</a>
              	</li>
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                  	<span class="fab fa-get-pocket u-icon__inner"></span>
                	</a>
              	</li>
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                  	<span class="fab fa-telegram-plane u-icon__inner"></span>
                	</a>
              	</li>
              	<li class="list-inline-item mb-2">
                	<a class="u-icon u-icon--secondary u-icon--sm" href="#">
                  	<span class="fab fa-slack-hash u-icon__inner"></span>
                	</a>
              	</li>
            	</ul>
          	</div>
          		<!-- End Social Networks -->
          	<hr class="my-8">
        	</div>
        	<div class="col-lg-3">
          	<!-- Recent Posts -->
         		<?php get_sidebar();?> 
        	</div>  
      	</div>
      </div>
    <!-- End Article Content Section -->
    </div>  
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

<?php }
get_footer();
 ?>