<?php
/*
Template Name: Контакти
*/
get_header(); ?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
           <?php 
            $loop = SCF::get( 'affiliate' );
              foreach ($loop as $row) {
            ?>
            <a href="<?php echo wp_get_attachment_url($row['portfolio_img']); ?>" data-caption="<?php echo $row['portfolio_desc']; ?>">
              <img src="<?php echo wp_get_attachment_url($row['portfolio_img']); ?>" alt="<?php echo $row['portfolio_text']; ?>">
            </a>

            <div class="contacts-block">
            <h2><?php echo $row['affiliate_city']; ?></h2>
            <div class="contacts-inner">
              <div class="contacts-card">
                <img src="<?php echo wp_get_attachment_url(SCF::get('img_text')); ?>" alt="пишіть">
                <h3><?php echo SCF::get( 'contacts_text' ); ?></h3>
                <p><?php echo $row['affiliate_email']; ?></p>
              </div>
              <div class="contacts-card">
                <img src="<?php echo wp_get_attachment_url(SCF::get('img_call')); ?>" alt="дзвоніть">
                <h3><?php echo SCF::get( 'contacts_call' ); ?></h3>
                <p><?php echo $row['affiliate_number']; ?></p>
              </div>
              <div class="contacts-card">
                <img src="<?php echo wp_get_attachment_url(SCF::get('img_come')); ?>" alt="приїжайте">
                <h3><?php echo SCF::get( 'contacts_come' ); ?></h3>
                <p><?php echo $row['affiliate_adress']; ?></p>
              </div>
            </div>
            <?php echo $row['affiliate_map']; ?>
        </div>
            <?php
              }         
            ?>


        <div class="col-3 col-lg-12" id="cities">
          <h2>Наши дилеры</h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
            <li><p class="city">Анапа, Анапское шоссе 75а, магазин "Люкс". 8(918)463-39-89</p></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>