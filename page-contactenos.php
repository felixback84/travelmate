<?php
get_header();

  while(have_posts()) {
    the_post();  ?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Contacts Section -->
  <div class="container space-1 space-1--lg">
    <div class="row">
      <div class="col-sm-6 col-md-4 mb-7 mb-md-0 p-3">
        <h2 class="h4">Bogotá D.C, Colombia</h2>
        <span class="d-block text-secondary">Oficina</span>
        <hr class="my-5">
        <address>
          <!-- Contacts List -->
          <ul class="list-unstyled text-secondary">
            <li class="media align-items-center pb-2">
              <div class="media-body">
                153 Williamson Plaza, Maggieberg, MT 09514
              </div>
            </li>

            <li class="media align-items-center py-2">
              <div class="media-body">
                Mon-Fri: 9 AM to 6 PM
              </div>
            </li>

            <li class="media align-items-center py-2">
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
        <h2 class="h3">Dinos que opinas o a donde quieres ir:</h2>
        <p>Cualquier pregunta que tengas no dudes en contactarnos.</p>
       
        <?php echo do_shortcode('[wpforms id="1606" title="false" description="false"]'); ?>
      
      </div>
      <!-- End Contacts Section -->
    </div>
  </div>
  <!-- Contact Us Form Section -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<?php } 

get_footer();
?>


