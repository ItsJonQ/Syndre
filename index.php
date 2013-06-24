<?php get_header(); ?>

<div class="row">
	<?php if ( have_posts() ): ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('templates/post'); ?>
	<?php endwhile; ?>

	<?php else: ?>

		<h2>No posts to display</h2>
	
	<?php endif; ?>
</div>

<?php get_footer(); ?>