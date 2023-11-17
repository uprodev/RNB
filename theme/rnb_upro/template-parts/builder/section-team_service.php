<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="block-team-single spacing-14">
		<div class="container-fluid">
			<div class="block-team-single-intro">
				<div class="row">
					<div class="col-md-6">

						<?php if ($title): ?>
							<div class="block-title block-title--<?= mb_strtolower($color) ?>">
								<span class="block-letter"><?= $number ?></span>
								<?= $title ?>
							</div>
						<?php endif ?>

						<?php if ($gallery): ?>
							<div class="images">

								<?php foreach ($gallery as $image): ?>
									<span>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</span>
								<?php endforeach ?>

							</div>
						<?php endif ?>

						<?php if ($links_blocks): ?>

							<?php foreach ($links_blocks as $block): ?>
								<div class="buttons">

									<?php if ($block['links_block']): ?>

										<?php foreach ($block['links_block'] as $link): ?>
											<a href="<?= $link['link']['url'] ?>" class="btn btn-arrow"<?php if($link['link']['target']) echo ' target="_blank"' ?>>
												<?= $link['link']['title'] ?>
												<span class="icon">
													<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</span>
											</a>
										<?php endforeach ?>

									<?php endif ?>

								</div>
							<?php endforeach ?>
						<?php endif ?>

					</div>
					<div class="col-md-6 ps-xxl-0">

						<?php if ($first_text): ?>
							<div class="font-5"><?= $first_text ?></div>
						<?php endif ?>
						
						<?php if ($second_text): ?>
							<div class="box-border"><?= $second_text ?></div>
						<?php endif ?>
						
						<?php if ($pdf): ?>
							<a href="<?= $pdf['url'] ?>" class="btn btn-arrow r" target="_blank">
								<?php _e('Get the price in PDF format', 'RNB') ?>
								<span class="icon">
									<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</a>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>