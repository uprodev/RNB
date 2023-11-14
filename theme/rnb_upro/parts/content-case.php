<a href="<?php the_permalink($args['post_id']) ?>" class="case-list-item">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="title"><?= get_the_title($args['post_id']) ?></div>

				<?php if (get_the_excerpt($args['post_id'])): ?>
					<div class="description d-md-none">
						<p><?= get_the_excerpt($args['post_id']) ?></p>
					</div>
				<?php endif ?>

				<?php $terms = get_the_terms($args['post_id'], 'case_tag') ?>

				<?php if ($terms): ?>
					<div class="tags">

						<?php foreach ($terms as $term): ?>
							<span><?= $term->name ?></span>
						<?php endforeach ?>

					</div>
				<?php endif ?>

			</div>
			<div class="col-md-6 d-none d-md-block ps-xxl-1">
				
				<?php if (get_the_excerpt($args['post_id'])): ?>
					<div class="description">
						<p><?= get_the_excerpt($args['post_id']) ?></p>
					</div>
				<?php endif ?>

			</div>
		</div>
	</div>
</a>