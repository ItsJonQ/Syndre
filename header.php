<?php get_template_part('/templates/header'); ?>
<div class="container main-container">
	<header class="main-header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php bloginfo( 'description' ); ?>
		<?php get_search_form(); ?>
	</header>
