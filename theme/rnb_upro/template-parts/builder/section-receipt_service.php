<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<div class="block-service block-service-02">
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="block-title">
						<span class="block-letter"><?= $number ?></span>
						<?= $title ?>
					</div>
				<?php endif ?>

				<div class="row">

					<?php foreach ($items as $index => $item): ?>

						<?php if ($item['text']): ?>
							<div class="col-md-6 col-lg">
								<div class="item">
									<div class="item-number"><?php if($index < 9) echo '0'; echo $index + 1 ?></div>
									<p><?= $item['text'] ?></p>
								</div>
							</div>
						<?php endif ?>
						
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>