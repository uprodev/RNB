<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<div class="block-service block-service-04">
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="block-title">
						<span class="block-letter"><?= $number ?></span>
						<?= $title ?>
					</div>
				<?php endif ?>

				<div class="row">

					<?php foreach ($items as $item): ?>
						<div class="col-lg-6">
							<div class="item">

								<?php if ($item['title']): ?>
									<div class="item-title"><?= $item['title'] ?></div>
								<?php endif ?>
								
								<?php if ($item['items']): ?>
									<ul>

										<?php foreach ($item['items'] as $item_2): ?>
											<li>

												<?php if ($item_2['title']): ?>
													<?= $item_2['title'] ?>
												<?php endif ?>
												
												<?php if ($item_2['text']): ?>
													<p><?= $item_2['text'] ?></p>
												<?php endif ?>
												
											</li>
										<?php endforeach ?>
										
									</ul>
								<?php endif ?>
								
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	<?php endif ?>
	
	<?php endif; ?>