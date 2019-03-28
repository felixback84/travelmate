<?php
get_header();


  while(have_posts()) {
    the_post();  ?>


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Hero Section -->
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pageBannernew' );?>
  <div id="post" class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo $thumb['0'];?>')">
    <!-- Main Content -->
    <div class="d-lg-flex align-items-lg-center">
      <div class="container space-2 space-0--lg mt-lg-8">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Title -->
            <h1 class="h1"><?php the_title();?></h1>
      <p>Whether you have questions or you would just like to say hello, contact us.</p>
          </div>   
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Content -->
  

  <!-- Contacts Section -->
  <div class="container space-1 space-1--lg">
    <div class="row">
      <div class="col-sm-6 col-md-4 mb-7 mb-md-0 p-3">
        <h2 class="h4">London, England</h2>
        <span class="d-block text-secondary">Office</span>

        <hr class="my-5">

        <address>
          <!-- Contacts List -->
          <ul class="list-unstyled text-secondary">
            <li class="media align-items-center pb-2">
              <img class="max-width-5 mr-2" src="../../assets/svg/components/location-dark-icon.svg" alt="Image Description">
              <div class="media-body">
                153 Williamson Plaza, Maggieberg, MT 09514
              </div>
            </li>

            <li class="media align-items-center py-2">
              <img class="max-width-5 mr-2" src="../../assets/svg/components/clock-dark-icon.svg" alt="Image Description">
              <div class="media-body">
                Mon-Fri: 9 AM to 6 PM
              </div>
            </li>

            <li class="media align-items-center py-2">
              <img class="max-width-5 mr-2" src="../../assets/svg/components/contacts-dark-icon.svg" alt="Image Description">
              <div class="media-body">
                (0161) 347 8854
              </div>
            </li>
          </ul>
          <!-- End Contacts List -->
        </address>
      </div>
      <!-- Title -->  
      <div class="w-lg-65 mx-auto p-3">
        <!-- End Title -->
        <h2 class="h3">Tell us about yourself</h2>
        <p>Whether you have questions or you would just like to say hello, contact us.</p>
       
        <?php echo do_shortcode('[wpforms id="1606" title="false" description="false"]'); ?>
      
      </div>
      <!-- End Contacts Section -->
    </div>
  </div>

  <!-- Contact Us Form Section -->
  

  <!-- Location Section -->
  <div class="container space-2 space-3--lg">
    <!-- Title -->
    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
      <span class="u-label u-label--sm u-label--purple mb-3">Nuestros destinos</span>
      <h2 class="h3">Hacemos viajes a todos estos lugares</h2>
    </div>
    <!-- End Title -->

    <!-- Google Map -->
    <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9"
         data-type="custom"
         data-lat="40.674"
         data-lng="-73.946"
         data-zoom="12"
         data-title="Agency"
         data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
         data-pin="true"
         data-pin-icon="../../assets/img/map-markers/map-marker1.png"></div>
    <!-- End Google Map -->
  </div>
  <!-- End Location Section -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<?php } 

get_footer();
?>


