<?php

get_header();
  while(have_posts()) {
    the_post();

    echo get_the_title();

    }
?>




<?php
get_footer();
?>
