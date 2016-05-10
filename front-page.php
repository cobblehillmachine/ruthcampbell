<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php endwhile; ?>

<div id="home-boxes">
	<a id="about-box" class="box" href="/about"></a>
	<a id="services-box" class="box" href="/services"></a>
	<a id="gallery-box" class="box" href="/gallery"></a>
	<a id="contact-box" class="box" href="/contact"></a>
</div>



<?php get_footer(); ?>