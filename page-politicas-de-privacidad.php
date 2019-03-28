<?php
get_header();

  while(have_posts()) {
    the_post(); ?>

    <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Terms Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <!-- Info Content -->

          <hr class="my-0">

          <!-- Info Content -->
          <div id="services" class="space-2">
            <div class="mb-3">
              <span class="d-block text-secondary font-weight-medium">2.0</span>
              <h3>Using our services</h3>
            </div>

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            
          </div>
          
        </div>
      </div>
    </div>
    <!-- End Terms Section -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->
    
  <?php  }

get_footer();
?>