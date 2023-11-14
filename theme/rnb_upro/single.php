<?php get_header(); ?>

<nav class="content-nav">
	<a href="<?php the_permalink(apply_filters('wpml_object_id', 36, 'page')) ?>" class="link-back">
		<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-arrow-left.svg" alt="" />
		<?php _e('All Articles', 'RNB') ?>
	</a>
</nav>
<div class="article">

	<?php $author_id = $post->post_author ?>

	<div class="article-info d-none d-lg-block">
		<div class="article-sidebar">
			<div class="sticky">
				
				<?php if ($author_id): ?>
					<div class="author">

						<?php if ($field = get_field('avatar', 'user_' . $author_id)): ?>
							<figure>
								<?= wp_get_attachment_image($field['ID'], 'full') ?>
							</figure>
						<?php endif ?>

						<p>
							<?= get_the_author_meta('first_name', $author_id); ?> <?= get_the_author_meta('last_name', $author_id); ?>

							<?php if ($field = get_the_author_meta('description', $author_id)): ?>
								<span><?= $field ?></span>
							<?php endif ?>

						</p>
					</div>
				<?php endif ?>

				<div class="article-nav">
					<ul></ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="article-content">

		<?php $terms = get_the_terms(get_the_ID(), 'post_tag') ?>

		<?php if ($terms): ?>
			<div class="tags">

				<?php foreach ($terms as $term): ?>
					<a href="<?= get_term_link($term->term_id) ?>"><?= $term->name ?></a>
				<?php endforeach ?>

			</div>
		<?php endif ?>

		<?php the_content() ?>

		<?php $posts = get_posts(array('post_type' => 'post', 'posts_per_page' => -1, 'suppress_filters' => false,)) ?>

		<?php if ($next_post = get_next_post() ?: $posts[count($posts) - 1]): ?>
		<a href="<?php the_permalink($next_post->ID) ?>" class="article-next">
			<div class="title"><?php _e('Read Next', 'RNB') ?></div>
			<p><?= get_the_title($next_post->ID) ?></p>
		</a>
	<?php endif ?>

</div>
</div>

<?php get_footer(); ?>