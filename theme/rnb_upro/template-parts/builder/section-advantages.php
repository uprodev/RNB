<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($list): ?>
		<div class="advantages-list spacing-4">
			<div class="container-fluid">
				<div class="row">

					<?php foreach ($list as $item): ?>
						<div class="col-6 col-md-3">

							<?php if ($item['number'] || $item['title']): ?>
								<div class="text">

									<?php if ($item['number']): ?>
										<div class="number"><?= $item['number'] ?></div>
									<?php endif ?>
									
									<?php if ($item['title']): ?>
										<p><?= $item['title'] ?></p>
									<?php endif ?>
									
								</div>
							<?php endif ?>
							
							<?php if ($item['text']): ?>
								<?= $item['text'] ?>
							<?php endif ?>
							
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>