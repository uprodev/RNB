<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($clients): ?>
		<div class="<?= $title ? 'spacing-12' : 'spacing-7' ?><?php if($is_top_border) echo ' border-top' ?>">
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="block-title">

						<?php if ($number): ?>
							<span class="block-letter"><?= $number ?></span>
						<?php endif ?>
						
						<?= $title ?>
					</div>
				<?php endif ?>
				
				<div class="clients-list">
					<div class="d-inline-flex d-lg-flex">

						<?php foreach ($clients as $client): ?>
							<div class="item">
								<figure>

									<?php if ($client['logo']): ?>
										<span>
											<?= wp_get_attachment_image($client['logo']['ID'], 'full') ?>
										</span>
									<?php endif ?>
									
									<?php if ($client['text']): ?>
										<figcaption><?= $client['text'] ?></figcaption>
									<?php endif ?>
									
								</figure>
							</div>
						<?php endforeach ?>
						
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>