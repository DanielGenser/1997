<?php get_header(); ?>
<article class="post-container">
	<?php if (have_posts()) :?>
	<?php while(have_posts()) : the_post(); ?>
    <header class="article_title_container">
        <h1 class="article_title"><?php the_title(); ?></h1>                        
    </header>

    <?php the_content(); ?>

    <footer class="article_meta_footer">
        <p class="article_meta muted"><?php the_time('M j Y'); ?></span>
    </footer>

	<?php endwhile; ?>
	<?php endif; ?>
</article>
<?php get_footer(); ?>