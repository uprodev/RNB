<div class="col-md-6 col-lg-3">
	<div class="blog-item">
		<div class="title">
			<a href="<?php the_permalink($args['post_id']) ?>">
				<span><?= get_the_title($args['post_id']) ?></span>
			</a>
		</div>
		<div class="text">

			<?php if (get_the_excerpt($args['post_id'])): ?>
				<p><?= get_the_excerpt($args['post_id']) ?></p>
			<?php endif ?>
			
			<?php $terms = get_the_terms($args['post_id'], 'post_tag') ?>

			<?php if ($terms): ?>
				<div class="tags">

					<?php foreach ($terms as $term): ?>
						<a href="<?= get_term_link($term->term_id) ?>"><?= $term->name ?></a>
					<?php endforeach ?>

				</div>
			<?php endif ?>
			
		</div>
	</div>
</div>