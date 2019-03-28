<?php
get_header();?>

<main id="content" role="main">
    <!-- Hero Section -->
    <div class="container space-2 space-1-top--lg">
      	<h1><?php echo get_the_archive_title();?></h1>
      	<p class="lead"><?php echo get_the_archive_description();?></p>
    </div>
    <!-- End Hero Section -->
    <!-- News Blog Content -->
    <div class="container space-3-bottom--lg">
      	<div class="card-mb card-sm-columns card-sm-2-count">
        <!-- Blog Grid -->
		<?php
        while(have_posts()) {
    	the_post();?>
        	<article class="card mb-3">
          		<img class="card-img-top" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('blogCover');}?>" alt="<?php the_title_attribute();?>">
          		<div class="card-body p-5">
            		<small class="d-block text-muted mb-2"><?php the_time('Y - M - j');?></small>
            		<small class="d-block text-muted mb-2"><?php echo get_the_category_list(',');?></small>
            		<h3 class="h5">
              			<a href="<?php the_permalink();?>"><?php the_title();?></a>
            		</h3>
          	  		<p><?php the_excerpt();?></p>
         		</div>
        	</article>
        	<?php }?>			
        </div>
        <?php echo paginate_links();?>
    </div>
    <!-- End Blog Grid -->
    <!-- End News Blog Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->         
<?php 

get_footer();?>
