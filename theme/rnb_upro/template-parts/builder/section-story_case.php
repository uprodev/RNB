<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="block-case-singe">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="case-headline">

						<?php if ($number): ?>
							<span class="number"><?= $number ?></span>
						<?php endif ?>

						<?php if ($title): ?>
							<h1><?= $title ?></h1>
						<?php endif ?>

					</div>
				</div>
				<div class="col-md-6 ps-xxl-1">

					<?php if ($subtitle): ?>
						<h4><?= $subtitle ?></h4>
					<?php endif ?>

					<?php if ($text): ?>
						<div class="box-border"><?= $text ?></div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>