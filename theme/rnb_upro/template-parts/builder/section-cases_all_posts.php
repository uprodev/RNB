<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php $posts_per_page = 7 ?>

	<div class="block-cases">
		<div class="cases-list">

			<?php 
			$wp_query = new WP_Query(array('post_type' => 'case', 'posts_per_page' => $posts_per_page, 'paged' => get_query_var('paged')));
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

	<?php endif; ?>