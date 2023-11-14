<div class="<?= $args['index'] == 3 || $args['index'] == 4 || $args['index'] == 7 || $args['index'] == 8 ? 'col-lg-6' : 'col-md-6 col-lg-3' ?>">
	<div class="blog-list-item">

		<?php if (has_post_thumbnail($args['post_id'])): ?>
			<a href="<?php the_permalink($args['post_id']) ?>" class="blog-item-img">
				<?= get_the_post_thumbnail($args['post_id'], 'full') ?>
			</a>
		<?php endif ?>

		<div class="blog-item-title">
			<a href="<?php the_permalink($args['post_id']) ?>"><?= get_the_title($args['post_id']) ?></a>
		</div>

		<?php if (get_the_excerpt($args['post_id'])): ?>
			<p><?= get_the_excerpt($args['post_id']) ?></p>
		<?php endif ?>

		<?php $terms = get_the_terms($args['post_id'], 'post_tag') ?>

		<?php if ($terms): ?>
			<div class="blog-item-tags">

				<?php foreach ($terms as $term): ?>
					<a href="<?= get_term_link($term->term_id) ?>"><?= $term->name ?></a>
				<?php endforeach ?>

			</div>
		<?php endif ?>

	</div>
</div>