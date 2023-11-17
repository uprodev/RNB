<?php if ($image = get_field('image')): ?>
	<figure>
		<?= wp_get_attachment_image($image['ID'], 'full') ?>

		<?php if ($caption = get_field('caption')): ?>
			<figcaption><?= $caption ?></figcaption>
		<?php endif ?>
		
	</figure>
<?php endif ?>
