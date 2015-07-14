<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="mh-content-section">
	<div class="mh-container clearfix">
		<div id="main-content">
			<?php get_template_part('content', 'single'); ?>
			<?php mh_elegance_lite_postnav(); ?>
			<div class="separator separator-margin"></div>
            <?php endwhile; ?>
			<?php comments_template(); ?>
			<?php endif; ?>
		</div>
        <?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>