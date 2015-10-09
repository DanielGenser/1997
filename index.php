<?php get_header(); ?>

<section class="post-list">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<div <?php post_class() ?>>
		<a class="post-link" href="<?php the_permalink() ?>">
			<h2><?php the_title(); ?></h2> 
			<span class="post-date"><?php the_time('M j Y'); ?></span>			
	    </a>
	</div>

	<?php endwhile; ?>

	<div class="pagination">
		<div class="pagination-older"><?php next_posts_link('Older'); ?></div>
		<div class="pagination-newer"><?php previous_posts_link( 'Newer'); ?></div>
	</div>

	<?php else: ?>
	<div class="404">
		<h1>404</h1>
		<p>The content you requested no longer exists.</p>
	</div>
	<?php endif; ?>

</section>
<?php get_footer(); ?>
