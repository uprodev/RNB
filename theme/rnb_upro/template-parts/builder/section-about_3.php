<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($list): ?>
		<div class="spacing-<?= get_queried_object_id() == 30 || get_queried_object_id() == 243 ? '10' : '3' ?>">
			<div class="container-fluid">
				<div class="row">

					<?php foreach ($list as $item): ?>
						<div class="col-md-6 col-lg-3">

							<?php if ($item['title']): ?>
								<div class="tag"><?= $item['title'] ?></div>
							<?php endif ?>

							<?php if ($item['text']): ?>
								<div class="font-2"><?= $item['text'] ?></div>
							<?php endif ?>

						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>