<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($gallery): ?>
		<div class="service-images spacing-15 d-none d-lg-block">
			<div class="container-fluid">
				<div class="row">

					<?php foreach ($gallery as $image): ?>
						<div class="col-4">
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