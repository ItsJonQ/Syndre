<div class="span4">
	<article class="block">
		<div class="block-image">
			<?php if(has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail('medium'); ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="block-title">
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>
		<div class="block-meta">
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
		</div>
		<div class="block-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</article>
</div>