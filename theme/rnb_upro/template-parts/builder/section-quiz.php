<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($form): ?>
		<div class="block-form-steps d-none d-lg-block" data-step="1">
			<?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
		</div>
	<?php endif ?>

	<?php endif; ?>