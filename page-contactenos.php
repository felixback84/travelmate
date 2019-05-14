<?php
get_header();

  while(have_posts()) {
    the_post();  ?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Contacts Section -->
  <div class="container space-1 space-1--lg">
    <div class="row">  
      <div class="w-lg-65 mx-auto p-3">
        <!-- End Title -->
        <h2 class="h3">Dinos que opinas o a donde quieres ir:</h2>
        <p>Cualquier pregunta que tengas no dudes en contactarnos.</p>
       
        <?php echo do_shortcode('[wpforms id="1800" title="false" description="false"]'); ?>
      
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


