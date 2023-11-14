<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($image || $image_mobile): ?>
		<div class="banner">
			<picture>

				<?php if ($image): ?>
					<source srcset="<?= $image['url'] ?>" media="(min-width: 576px)" />
					<?php endif ?>
					
					<?php if ($image_mobile): ?>
						<?= wp_get_attachment_image($image_mobile['ID'], 'full') ?>
					<?php endif ?>
					
				</picture>
			</div>
		<?php endif ?>

		<?php endif; ?>