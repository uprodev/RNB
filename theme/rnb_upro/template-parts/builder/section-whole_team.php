<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($team): ?>
		<div id="team" class="spacing-11">
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="block-title">

						<?php if ($number): ?>
							<span class="block-letter"><?= $number ?></span>
						<?php endif ?>
						
						<?= $title ?>
					</div>
				<?php endif ?>
				
				<div class="row">

					<?php foreach ($team as $item): ?>
						<div class="col-md-4">
							<div class="team-member">

								<?php if ($item['image'] || $item['hover_image']): ?>
									<figure>

										<?php if ($item['image']): ?>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
										<?php endif ?>

										<?php if ($item['hover_image']): ?>
											<?= wp_get_attachment_image($item['hover_image']['ID'], 'full', false, array('class' => 'img-hover')) ?>
										<?php endif ?>

									</figure>
								<?php endif ?>
								
								<?php if ($item['name']): ?>
									<div class="team-member-title"><?= $item['name'] ?></div>
								<?php endif ?>
								
								<?php if ($item['position']): ?>
									<p><?= $item['position'] ?></p>
								<?php endif ?>
								
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>