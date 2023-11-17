<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($posts): ?>
		<div id="blog" class="spacing-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="d-flex align-items-center">

							<?php if ($title): ?>
								<div class="block-title">

									<?php if ($number): ?>
										<span><?= $number ?></span>
									<?php endif ?>
									
									<?= $title ?>
								</div>
							<?php endif ?>
							
							<?php if ($subtitle): ?>
								<div class="d-none d-lg-block font-3 ms-4"><?= $subtitle ?></div>
							<?php endif ?>
							
						</div>
					</div>
				</div>
				<div class="row">

					<?php foreach ($posts as $post): ?>
						<?php get_template_part('parts/content', 'post', ['post_id' => $post->ID]) ?>
					<?php endforeach ?>
					
				</div>
				<div class="mt-5">
					<a href="<?php the_permalink(apply_filters('wpml_object_id', 36, 'page')) ?>" class="btn btn-outline w-100"><?php _e('Show more', 'RNB') ?></a>
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>