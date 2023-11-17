<?php get_header(); ?>

<?php 

$cases_id = 34;

$terms = get_terms( [
	'taxonomy' => 'case_cat',
	'hide_empty' => false,
] ); 

?>

<?php if ($terms): ?>
	<nav class="content-nav content-nav--type1">
		<ul class="filter">
			<li><a href="<?php the_permalink(apply_filters('wpml_object_id', $cases_id, 'page')) ?>"><?php _e('All Cases', 'RNB') ?></a></li>

			<?php foreach ($terms as $term): ?>
				<li>
					<a href="<?= get_term_link($term->term_id) ?>"<?php if(get_queried_object_id() == $term->term_id) echo ' class="active"' ?>><?= $term->name ?></a>
				</li>
			<?php endforeach ?>

		</ul>
	</nav>
<?php endif ?>

<?php $posts_per_page = 7 ?>

<div class="block-cases">
	<div class="cases-list">

		<?php 
		$wp_query = new WP_Query(array('post_type' => 'case', 'tax_query' => array(array('taxonomy' => 'case_cat', 'field' => 'id',	'terms' => get_queried_object_id())), 'posts_per_page' => $posts_per_page, 'paged' => get_query_var('paged')));
		while ($wp_query->have_posts()): $wp_query->the_post(); 
			?>

			<?php get_template_part('parts/content', 'case', ['post_id' => get_the_ID()]) ?>

			<?php 
		endwhile;
		wp_reset_postdata(); 
		?>

	</div>

	<?php if ( $wp_query->max_num_pages > 1 ) { ?>
		<script> var this_page = 1; </script>

		<div class="container-fluid">
			<div class="mt-9 mt-lg-8">
				<a href="#" class="btn btn-outline w-100 btn-load_cases" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?php _e('More Cases', 'RNB') ?> <span><?= $posts_per_page ?></span></a>
			</div>
		</div>
	<?php } ?>

</div>

<?php get_footer(); ?>