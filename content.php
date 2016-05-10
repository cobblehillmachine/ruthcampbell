<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="content-title"><?php the_title(); ?></div>
			<div class="image"><?php the_post_thumbnail('full'); ?></div>
			<div class="text"><?php the_content(); ?></div>
			<div class="info-cont">
				<div class="post-info-cont">
					<div class="title">DATE</div>
					<div class="info"><?php twentyeleven_posted_on(); ?></div>
				</div>
			
				<div class="post-info-cont">
					<div class="title">SHARE THIS</div>
					<div class="info">
						<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
						<a id="share-facebook" class="social-icon" target="_blank" href="http://www.facebook.com/sharer.php?&u=<?php echo urlencode(get_permalink($post->ID)); ?>&p[images][0]=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>"></a>
						<div id="share-pinterest" class="social-icon"><a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="pin-it-button" target="_blank"></a></div>
						<a id="share-twitter" class="social-icon" target="_blank" href="http://www.twitter.com/share?text=&url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>"></a>
					</div>
				</div>
			</div>

	</article>
