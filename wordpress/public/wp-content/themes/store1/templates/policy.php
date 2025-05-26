<?php
/*
Template Name: Політика конфіденційності
*/
get_header(); ?>
  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url(<?php echo pods_field_display('background_image') ?>)">
    <div class="container">
      <div class="row">
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
      </div>
    </div>
  </div>
<?php get_footer(); ?>