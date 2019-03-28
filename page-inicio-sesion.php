<?php 
/**
* Template Name: Login page
* @subpackage Travelmate theme 1.0
*/

get_header();
  while(have_posts()) {
    the_post();?>
  <!-- ========== MAIN CONTENT ========== -->

<div class="space-2 w-md-80 w-lg-80 mx-lg-auto">  
	<div class=row">
	  	<div class="col-9 mx-lg-auto">
		<?php echo do_shortcode('[wpforms id="1598" title="false" description="false"]');?>
		</div>
	</div>
</div>

<?php };
get_footer();
?>