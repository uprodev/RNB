<?php get_header(); ?>

<nav class="content-nav">
	<a href="<?php the_permalink(apply_filters('wpml_object_id', 32, 'page')) ?>" class="link-back">
		<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-arrow-left.svg" alt="" />
		<?php _e('All services', 'RNB') ?>
	</a>
</nav>

<?php if ( have_posts() ) :

	get_template_part( 'template-parts/content', 'builder' );

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

<?php get_footer(); ?>