<?php /* Template Name: Page - Full Width */ ?>
<?php get_header(); ?>
<div class="mh-content-section clearfix">
	<div class="mh-container">
    	<?php while (have_posts()) : the_post(); ?>
    		<header class="separator">
    	 		<h1 class="page-title section-title"><?php the_title(); ?></h1>
    		</header>
			<?php get_template_part('content', 'page'); ?>
		<?php endwhile; ?>
		<?php get_template_part('comments', 'pages'); ?>
	</div>
</div>
<?php get_footer(); ?>