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


<?php get_footer(); ?>