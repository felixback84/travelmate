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
      	</div>
    	</div>
    </div>
  </main>

  <!-- Article Content Section -->
  <div class="container space-1 space-1-bottom--lg">
    <div class="row">
      <div class="col-lg-12 mb-3 mb-lg-0">
        <!-- Info -->
        <ul class="list-inline text-secondary mb-3">
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
      </div> 
    </div>   
    
    <div class="row">  
      <div class="col-lg-9 mb-3">
        <h2 class="text-secondary"><?php the_title();?></h2>
        <p><?php the_content();?></p>          
      </div>
    	<div class="col-lg-3">
     		<?php get_sidebar();?> 
    	</div>  
  	</div>
  </div>  
  
  <!-- ========== END MAIN CONTENT ========== -->

<?php }
get_footer();
 ?>