<?php get_header(); ?>

<?php 

$blog_id = 36;

$terms = get_terms( [
	'taxonomy' => 'post_tag',
	'hide_empty' => false,
] ); 

?>

<?php if ($terms): ?>
	<nav class="content-nav content-nav--type1">
		<ul class="filter">
			<li><a href="<?php the_permalink(apply_filters('wpml_object_id', $blog_id, 'page')) ?>"><?php _e('All Posts', 'RNB') ?></a></li>

			<?php foreach ($terms as $term): ?>
				<li>
					<a href="<?= get_term_link($term->term_id) ?>"<?php if(get_queried_object_id() == $term->term_id) echo ' class="active"' ?>><?= $term->name ?></a>
				</li>
			<?php endforeach ?>

		</ul>
	</nav>
<?php endif ?>

<?php $posts_per_page = 12 ?>

<div class="blog-list">
	<div class="container-fluid">
		<div class="row">

			<?php $wp_query = new WP_Query(array('post_type' => 'post', 'tag_id' => get_queried_object_id(), 'posts_per_page' => $posts_per_page, 'paged' => get_query_var('paged')));
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
				<a href="#" class="btn btn-outline w-100 btn-loadmore" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?php _e('More Posts', 'RNB') ?> <span><?= $posts_per_page ?></span></a>
			</div>
		<?php } ?>

	</div>
</div>

<?php if (get_field('content', apply_filters('wpml_object_id', $blog_id, 'page'))): ?>
	<?php foreach (get_field('content', apply_filters('wpml_object_id', $blog_id, 'page')) as $row): ?>
		<?php if ($row['acf_fc_layout'] == 'contact_form' && $row['form']): ?>
			<div id="contacts" class="contact-form">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="text font-3">

								<?php if ($row['title']): ?>
									<div class="title"><?= $row['title'] ?></div>
								<?php endif ?>

								<?php if ($row['text']): ?>
									<?= $row['text'] ?>
								<?php endif ?>

								<?php if ($row['label']): ?>
									<div class="form-sticker"><?= $row['label'] ?></div>
								<?php endif ?>

							</div>
						</div>
						<div class="col-md-6">
							<div class="form">
								<?= do_shortcode('[contact-form-7 id="' . $row['form'] . '"]') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>

<?php get_footer(); ?>