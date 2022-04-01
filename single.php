<?php

	/**
	 * SINGLE TEMPLATE
	 */
	$author = get_field('author', $post->ID);
	$estimated_read_time = get_field('estimated_read_time', $post->ID);
	get_header();

?>

<main id="single-blog">

	<section id="content-post">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
				</div>
				
				<div>
					<?php if($estimated_read_time): ?> <div class="time"><h6>Estimated read time: <i class="fa fa-clock-o" aria-hidden="true"></i>
 <?= $estimated_read_time ?></h6></div><?php endif; ?>
					<h3><?php the_title(); ?></h3>
					<div class="description"><?php echo get_the_content(); ?></div>
					<?php if($author): ?> <div class="author"><h6>Author: <?= $author ?></h6></div><?php endif; ?>
					<a href="<?php echo get_site_url(); ?>/news-info-data" class="back-to-posts">Back to all posts</a>
				</div>
				
				<?php
				endwhile;
				endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</section>
	
</main>

<?php get_footer(); ?>
