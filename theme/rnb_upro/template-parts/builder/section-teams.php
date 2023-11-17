<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if($teams): ?>
		<div id="teams" class="block-teams">

			<?php foreach ($teams as $index => $team): ?>
				<div class="team-item team-item--<?= $index % 2 != 0 ? 'blue' : 'red' ?><?php if($index == 0) echo ' active' ?>">
					<div class="row g-0">

						<?php if($team['items']): ?>
							<?php foreach ($team['items'] as $index => $item): ?>
								
								<?php if ($item['type'] == 'Photos'): ?>
									<div class="col-lg-6 d-none d-lg-block">
										<div class="team-toggler">

											<?php if ($item['photos']['title']): ?>
												<div class="team-title">
													<span class="team-title-text"><span class="team-letter"><?= mb_substr($item['photos']['title'], 0, 1) ?></span><?= $item['photos']['title'] ?></span>
													<?php _e('View details', 'RNB') ?>
												</div>
											<?php endif ?>
											
											<?php if ($item['photos']['images'] || $item['photos']['hover_images']): ?>
												<div class="team-images">

													<?php $images = $item['photos']['images'];
													if($images): ?>

														<div class="team-images-<?= $item['photos']['hover_images'] ? 'start' : 'base' ?>">

															<?php foreach($images as $index_2 => $image): ?>

																<?php if ($index_2 % 2 == 0): ?>
																	<ul>
																	<?php endif ?>

																	<li>
																		<?= wp_get_attachment_image($image['ID'], 'full') ?>
																	</li>

																	<?php if ($index_2 % 2 != 0 || $index_2 == count($images) - 1): ?>
																	</ul>
																<?php endif ?>

															<?php endforeach; ?>

														</div>

													<?php endif; ?>

													<?php $images = $item['photos']['hover_images'];
													if($images): ?>

														<div class="team-images-hover">

															<?php foreach($images as $index_3 => $image): ?>

																<?php if ($index_3 % 2 == 0): ?>
																	<ul>
																	<?php endif ?>

																	<li>
																		<?= wp_get_attachment_image($image['ID'], 'full') ?>
																	</li>

																	<?php if ($index_3 % 2 != 0 || $index_3 == count($images) - 1): ?>
																	</ul>
																<?php endif ?>

															<?php endforeach; ?>

														</div>

													<?php endif; ?>

												</div>
											<?php endif ?>

											<div class="team-icons">
												<div class="team-icon team-icon--blue<?php if(mb_substr($item['photos']['title'], 0, 1) == 'B') echo ' active' ?>"><span>B</span></div>
												<div class="team-icon team-icon--red<?php if(mb_substr($item['photos']['title'], 0, 1) == 'R') echo ' active' ?>"><span>R</span></div>
											</div>
										</div>
									</div>
								<?php else: ?>
									<div class="col-lg-6">
										<div class="team-item-description">
											<div class="team-item-description-top">

												<?php if ($item['description']['title']): ?>
													<div class="team-title">
														<span class="team-letter"><?= mb_substr($item['description']['title'], 0, 1) ?></span>
														<span class="team-title-text"><?= $item['description']['title'] ?></span>
													</div>
												<?php endif ?>

												<?php if ($item['description']['text']): ?>
													<?= $item['description']['text'] ?>
												<?php endif ?>

												<?php if ($item['description']['link']): ?>
												<a href="<?= $item['description']['link']['url'] ?>" class="link-arrow"<?php if($item['description']['link']['target']) echo ' target="_blank"' ?>>
													<?= $item['description']['link']['title'] ?>
													<span class="icon">
														<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
													</span>
												</a>
												<?php endif ?>

											</div>

											<?php if ($item['description']['goals']): ?>
												<div class="team-item-description-bottom">

													<?php if ($item['description']['goals']['title']): ?>
														<h5><?= $item['description']['goals']['title'] ?></h5>
													<?php endif ?>

													<?php if($item['description']['goals']['items']): ?>

														<ul>

															<?php foreach ($item['description']['goals']['items'] as $index_4 => $item_2): ?>

																<?php if ($item_2['text']): ?>
																	<li>
																		<span class="number"><?php if($index_4 < 9) echo '0'; echo $index_4 + 1 ?></span>
																		<p><?= $item_2['text'] ?></p>
																	</li>
																<?php endif ?>

															<?php endforeach ?>

														</ul>

													<?php endif; ?>

												</div>
											<?php endif ?>

										</div>
									</div>
								<?php endif ?>

							<?php endforeach ?>
						<?php endif; ?>

					</div>
				</div>
			<?php endforeach ?>

		</div>
	<?php endif ?>

	<?php endif; ?>