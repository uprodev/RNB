<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="block-case-singe">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6 ps-xxl-1">

					<?php if ($subtitle): ?>
						<div class="block-title">

							<?php if ($number): ?>
								<span class="block-letter"><?= $number ?></span>
							<?php endif ?>

							<?= $subtitle ?>
						</div>
					<?php endif ?>

					<?php if ($text): ?>
						<div class="box-border">
							<?= $text ?>
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>