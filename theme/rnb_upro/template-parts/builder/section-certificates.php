<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($certificates = get_field('certificates_2', 'option')): ?>
		<div class="spacing-13 border-top">

			<?php if ($title = get_field('title_2', 'option')): ?>
				<div class="container-fluid">
					<div class="block-title">

						<?php if ($number): ?>
							<span class="block-letter"><?= $number ?></span>
						<?php endif ?>

						<?= $title ?>
					</div>
				</div>
			<?php endif ?>
			
			<div class="sertificates-slider swiper">
				<div class="swiper-wrapper">

					<?php foreach ($certificates as $image): ?>
						<div class="swiper-slide">
							<figure>
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							</figure>
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>