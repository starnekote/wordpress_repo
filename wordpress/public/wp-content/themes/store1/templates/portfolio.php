<?php
/*
Template Name: Портфоліо
*/
get_header(); ?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(<?php echo wp_get_attachment_url(SCF::get( 'portfolio_bg' )); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">
            <?php 
            $loop = SCF::get( 'portfolio' );
              foreach ($loop as $row) {
            ?>
            <a href="<?php echo wp_get_attachment_url($row['portfolio_img']); ?>" data-caption="<?php echo $row['portfolio_desc']; ?>">
              <img src="<?php echo wp_get_attachment_url($row['portfolio_img']); ?>" alt="<?php echo $row['portfolio_text']; ?>">
            </a>
            <?php
              }         
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>