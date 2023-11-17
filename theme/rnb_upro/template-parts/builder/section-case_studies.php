<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php $cases_page_id = 34 ?>

	<?php if ($items): ?>
		<div id="cases" class="spacing-5">
			<div class="container-fluid">
				<div class="row">

					<?php if ($title): ?>
						<div class="col-md-6">
							<div class="block-title">

								<?php if ($number): ?>
									<span><?= $number ?></span>
								<?php endif ?>
								
								<?= $title ?>
							</div>
						</div>
					<?php endif ?>
					
					<div class="col-12">
						<div class="d-flex justify-content-between">

							<?php foreach ($items as $item): ?>
								<div class="case-item">

									<?php if ($item['image']): ?>
										<div class="image">
											<a href="<?php the_permalink(apply_filters('wpml_object_id', $cases_page_id, 'page')) ?>">
												<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
											</a>
										</div>
									<?php endif ?>

									<div class="text">

										<?php if ($item['name'] || $item['position']): ?>
											<a href="<?php the_permalink(apply_filters('wpml_object_id', $cases_page_id, 'page')) ?>">

												<?php if ($item['name']): ?>
													<div class="title"><?= $item['name'] ?></div>
												<?php endif ?>

												<?php if ($item['position']): ?>
													<div class="position"><?= $item['position'] ?></div>
												<?php endif ?>

											</a>
										<?php endif ?>
										
										<a href="<?php the_permalink(apply_filters('wpml_object_id', $cases_page_id, 'page')) ?>" class="link-arrow">
											<?php _e('More', 'RNB') ?>
											<span class="icon">
												<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</span>
										</a>
									</div>
								</div>
							<?php endforeach ?>
							
						</div>
					</div>
				</div>
				<div class="mt-9 mt-lg-8">
					<a href="<?php the_permalink(apply_filters('wpml_object_id', $cases_page_id, 'page')) ?>" class="btn btn-outline w-100"><?php _e('More cases', 'RNB') ?></a>
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>