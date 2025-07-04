<?php get_header(); ?>
  <!-- Каталог -->
	<div class="popular" style="background-image: url(img/background.jpg)">
		<div class="container">
			<div class="row popular-title">
				<h2>Каталог</h2>
			</div>
			<div class="category-controll text-center">
				<button class="btn" type="button" data-filter="all">Все</button>
				<button class="btn" type="button" data-filter=".<?php echo get_category(8, ARRAY_A)['slug'] ?>"><?php echo get_category(8, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-filter=".<?php echo get_category(9, ARRAY_A)['slug'] ?>"><?php echo get_category(9, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-filter=".<?php echo get_category(10, ARRAY_A)['slug'] ?>"><?php echo get_category(10, ARRAY_A)['name'] ?></button>
				<button class="btn" type="button" data-sort="order:asc">По возрастанию</button>
				<button class="btn" type="button" data-sort="order:descending">По убыванию</button>
			</div>
			<div class="row popular-goods catalog">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

        $all_category = get_the_category();
        $res_name = '';

        foreach ($all_category as $category) {
            if (in_array($category->term_id, [8, 9, 10])) {
                $res_name = $category->slug;
            }
        }
?>
    <div class="col-3 col-lg-6 col-sm-12 product mix <?php echo $res_name ?>" data-order="<?php echo SCF::get('price'); ?>">
        <img src="<?php echo wp_get_attachment_url(SCF::get('thumbnail')); ?>" alt="Название">
        <h3><?php the_title(); ?></h3>
        <div><?php echo SCF::get('price'); ?> &#8381;</div>
        <a href="<?php the_permalink(); ?>" class="btn"><?php echo SCF::get('button_text'); ?></a>
    </div>
<?php
    }
}
?>
</div>
    <?php the_posts_pagination(); ?>
	</div>
</div>
<?php get_footer(); ?>