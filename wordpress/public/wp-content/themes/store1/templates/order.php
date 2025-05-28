<?php
/*
Template Name: На замовлення
*/
get_header(); ?>
  <!-- На заказ -->
  <div class="to-order">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- На заказ -->
           <?php 
                $posts = get_posts([
                    'numberposts' => -1,
                    'category_name' => 'order',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                ?>
          <div class="to-order-card">
            <h2><?php the_title(); ?></h2>
            <div class="to-order-card-inner">
              <?php the_post_thumbnail(''); ?>
              <div class="to-order-text">
                <?php the_content(); ?>
                <p><?php echo pods_field_display('to_order_add_text'); ?></p>
              </div>
            </div>
          </div>
                <?php  
                }
                wp_reset_postdata();
                ?>



          <!-- Форма -->
          <div class="to-order-form">
            <h3><?php echo pods_field_display('form_title') ?></h3>
            <?php echo do_shortcode(pods_field_display('form_shortcode')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>