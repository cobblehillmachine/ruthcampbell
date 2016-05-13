<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="text">
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
	<div class="content-title">testimonials</div>
	<?php query_posts(array('post_type' => 'testimonials', 'order' => 'asc', 'posts_per_page' => 100)); ?>
	<div id="testimonial-cont">
		<div class="grid-sizer"></div>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="testimonial <?php $category = get_the_category(); echo strtolower($category[0]->cat_name); ?>">
				<div class="info"><?php the_content(); ?></div>
				<div class="author"><?php the_title(); ?></div>
			</div>
		<?php endwhile; // wp_reset_query(); ?>
	</div>





<?php get_footer(); ?>