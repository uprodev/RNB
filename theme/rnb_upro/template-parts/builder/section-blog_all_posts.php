<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php $posts_per_page = 12 ?>

	<div class="blog-list">
		<div class="container-fluid">
			<div class="row">

				<?php $wp_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => $posts_per_page, 'paged' => get_query_var('paged')));
				$i = 1;
				while ($wp_query->have_posts()): $wp_query->the_post(); ?>

					<?php get_template_part('parts/content', 'post_blog', ['post_id' => get_the_ID(), 'index' => $i]) ?>

					<?php 
					$i++;
				endwhile;
				wp_reset_postdata(); 
				?>

			</div>

			<?php if ( $wp_query->max_num_pages > 1 ) { ?>
				<script> var this_page = 1; </script>

				<div class="mt-9 mt-lg-8">
					<a href="#" class="btn btn-outline w-100 btn-load_posts" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?php _e('More Posts', 'RNB') ?> <span><?= $posts_per_page ?></span></a>
				</div>
			<?php } ?>

		</div>
	</div>

	<?php endif; ?>