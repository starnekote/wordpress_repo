<?php
/*
Template Name: Політика конфіденційності
*/
get_header(); ?>
  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url(<?php echo get_field('background_policy_name') ?>)">
    <div class="container">
      <div class="row">
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
      </div>
    </div>
  </div>
<?php get_footer(); ?>