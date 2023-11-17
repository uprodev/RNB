<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($form): ?>
		<div id="contacts" class="contact-form">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="text font-3">

							<?php if ($title): ?>
								<div class="title"><?= $title ?></div>
							<?php endif ?>
							
							<?php if ($text): ?>
								<?= $text ?>
							<?php endif ?>
							
							<?php if ($label): ?>
								<div class="form-sticker"><?= $label ?></div>
							<?php endif ?>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="form">
							<?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>