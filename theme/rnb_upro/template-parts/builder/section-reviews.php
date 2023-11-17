<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($reviews = get_field('reviews_1', 'option')): ?>
		<div id="reviews" class="spacing-8">
			<div class="container-fluid">

				<?php if ($title = get_field('title_1', 'option')): ?>
					<div class="row mb-9">
						<div class="col-md-6">
							<div class="block-title">

								<?php if ($number): ?>
									<span><?= $number ?></span>
								<?php endif ?>

								<?= $title ?>
							</div>
						</div>
					</div>
				<?php endif ?>
				
				<div class="d-lg-none">

					<?php foreach ($reviews as $review): ?>
						<div class="review-item">
							<div class="text">

								<?php if ($review['text']): ?>
									<?= $review['text'] ?>
								<?php endif ?>
								
								<a href="<?= $review['url'] ?>" class="link-arrow" target="_blank">
									<?php _e('See on Clutch', 'RNB') ?>
									<span class="icon">
										<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</a>
							</div>
							<div class="row g-3">
								<div class="col-6">

									<?php if ($review['date']): ?>
										<p><?= $review['date'] ?></p>
									<?php endif ?>
									
								</div>
								<div class="col-6">

									<?php if ($review['description']): ?>
										<p><?= $review['description'] ?></p>
									<?php endif ?>
									
									<?php if ($review['position']): ?>
										<p><?= $review['position'] ?></p>
									<?php endif ?>
									
									<div class="author">
										
										<?php if ($review['name']): ?>
											<p><?= $review['name'] ?></p>
										<?php endif ?>

										<?php if ($review['avatar']): ?>
											<figure>
												<?= wp_get_attachment_image($review['avatar']['ID'], 'full') ?>
											</figure>
										<?php endif ?>

									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
				<div class="d-none d-lg-block">

					<?php foreach ($reviews as $review): ?>
						<div class="review-item">
							<div class="row">
								<div class="col-2">
									<div class="author">

										<?php if ($review['name']): ?>
											<p><?= $review['name'] ?></p>
										<?php endif ?>

										<?php if ($review['avatar']): ?>
											<figure>
												<?= wp_get_attachment_image($review['avatar']['ID'], 'full') ?>
											</figure>
										<?php endif ?>

									</div>
								</div>
								<div class="col-2">

									<?php if ($review['position']): ?>
										<p><?= $review['position'] ?></p>
									<?php endif ?>
									
								</div>
								<div class="col-2">

									<?php if ($review['description']): ?>
										<p><?= $review['description'] ?></p>
									<?php endif ?>

								</div>
								<div class="col-4">
									<div class="text">

										<?php if ($review['text']): ?>
											<?= $review['text'] ?>
										<?php endif ?>

										<a href="<?= $review['url'] ?>" class="link-arrow" target="_blank">
											<?php _e('See on Clutch', 'RNB') ?>
											<span class="icon">
												<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</span>
										</a>
									</div>
								</div>
								<div class="col-2 text-end">

									<?php if ($review['date']): ?>
										<p><?= $review['date'] ?></p>
									<?php endif ?>
									
								</div>
							</div>
						</div>
					<?php endforeach ?>
					
				</div>

				<?php if ($url = get_field('url_1', 'option')): ?>
					<div class="mt-9 mt-xl-0">
						<a href="<?= $url ?>" class="btn btn-outline w-100" target="_blank"><?php _e('See more', 'RNB') ?></a>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	<?php endif ?>

	<?php endif; ?>