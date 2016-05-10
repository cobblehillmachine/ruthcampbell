<?php get_header(); ?>


<div id="services-cont">	
	<div id="col-left">
		<?php query_posts(array('post_type' => 'services', 'order' => 'asc', 'posts_per_page' => 25, 'cat' => '5')); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="service">
				<div class="service-title"><?php the_title(); ?></div>
				<div class="service-info"><?php the_content(); ?></div>
			</div>
		<?php endwhile;  wp_reset_query(); ?>
	</div>
	<div id="col-right">
		<?php query_posts(array('post_type' => 'services', 'order' => 'asc', 'posts_per_page' => 25, 'cat' => '6')); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="service">
				<div class="service-title"><?php the_title(); ?></div>
				<div class="service-info"><?php the_content(); ?></div>
			</div>
		<?php endwhile;  wp_reset_query(); ?>
	</div>
	
</div>
<div class="content-title">rates</div>
<div id="rates-cont">
	<div class="info"><?php the_content(); ?></div>
	<div class="rate-box">
		<div class="price"><span class="dollar">$</span><span><?php echo get_post_meta($post->ID, 'Hourly Rate', true); ?></span></div>
		<div class="title">hourly rate</div>
	</div>
	<div class="rate-box">
		<div class="price"><span class="dollar">$</span><span><?php echo get_post_meta($post->ID, 'Daily Rate', true); ?></span></div>
		<div class="title">daily rate</div>
	</div>
</div>



<?php get_footer(); ?>