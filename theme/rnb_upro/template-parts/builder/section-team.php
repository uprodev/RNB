<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div id="team<?= $color ?>" class="block-team-single block-team-single--<?= mb_strtolower($color) ?>">
		<div class="container-fluid">

			<?php if ($team['title'] || $team['number'] || $team['gallery'] || $team['text']): ?>
				<div class="block-team-single-intro">
					<div class="row">
						<div class="col-md-6">

							<?php if ($team['title']): ?>
								<div class="block-title block-title--<?= mb_strtolower($color) ?>">
									<span class="block-letter"><?= $team['number'] ?></span>
									<?= $team['title'] ?>
								</div>
							<?php endif ?>
							
							<?php if ($team['gallery']): ?>
								<div class="images">

									<?php foreach ($team['gallery'] as $image): ?>
										<span>
											<?= wp_get_attachment_image($image['ID'], 'full') ?>
										</span>
									<?php endforeach ?>

								</div>
							<?php endif ?>
							
							<?php if ($team['links_blocks']): ?>
								
								<?php foreach ($team['links_blocks'] as $block): ?>
									<div class="buttons">

										<?php if ($block['links_block']): ?>

											<?php foreach ($block['links_block'] as $link): ?>
												<a href="<?= $link['link']['url'] ?>" class="btn btn-arrow<?php if($link['is_popup']) echo ' btn-modal' ?>"<?php if($link['link']['target']) echo ' target="_blank"' ?>>
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

							<?php if ($team['text']): ?>
								<div class="font-5"><?= $team['text'] ?></div>
							<?php endif ?>
							
						</div>
					</div>
				</div>
			<?php endif ?>
			
			<?php if ($members['members']): ?>
				<div class="block-team-single-members">

					<?php if ($members['title']): ?>
						<div class="block-title block-title--<?= mb_strtolower($color) ?>">
							<span class="block-letter"><?= $members['number'] ?></span>
							<?= $members['title'] ?>
						</div>
					<?php endif ?>

					<div class="row">

						<?php foreach ($members['members'] as $member): ?>
							<div class="col-md-4">
								<div class="team-member">

									<?php if ($member['image'] || $member['hover_image']): ?>
										<figure>

											<?php if ($member['image']): ?>
												<?= wp_get_attachment_image($member['image']['ID'], 'full') ?>
											<?php endif ?>
											
											<?php if ($member['hover_image']): ?>
												<?= wp_get_attachment_image($member['hover_image']['ID'], 'full', false, array('class' => 'img-hover')) ?>
											<?php endif ?>
											
										</figure>
									<?php endif ?>
									
									<?php if ($member['name']): ?>
										<div class="team-member-title"><?= $member['name'] ?></div>
									<?php endif ?>
									
									<?php if ($member['position']): ?>
										<p><?= $member['position'] ?></p>
									<?php endif ?>
									
									<?php if ($member['tags']): ?>
										<div class="team-member-tags">

											<?php foreach ($member['tags'] as $tag): ?>
												<?php if ($tag['tag']): ?>
													<span><?= $tag['tag'] ?></span>
												<?php endif ?>
											<?php endforeach ?>

										</div>
									<?php endif ?>
									
								</div>
							</div>
						<?php endforeach ?>
						
					</div>
				</div>
			<?php endif ?>

			<?php if ($services['services']): ?>
				<div class="block-team-single-services block-team-single-services--<?= mb_strtolower($color) ?>">

					<?php if ($services['title']): ?>
						<div class="block-title block-title--<?= mb_strtolower($color) ?>">
							<span class="block-letter"><?= $services['number'] ?></span>
							<?= $services['title'] ?>
						</div>
					<?php endif ?>

					<div class="row">

						<?php foreach ($services['services'] as $service): ?>
							<div class="col-md-6 col-lg-3">
								<div class="item">
									<div class="title"><?= get_the_title($service->ID) ?></div>

									<?php if ($excerpt = get_the_excerpt($service->ID)): ?>
										<?= $excerpt ?>
									<?php endif ?>
									
									<a href="<?php the_permalink($service->ID) ?>" class="link-arrow">
										<?php _e('Read more', 'RNB') ?>
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
			<?php endif ?>
			
			<?php if ($goals['goals']): ?>
				<div class="block-team-single-list">
					<div class="row">
						<div class="col-md-6">

							<?php if ($goals['title']): ?>
								<div class="block-title block-title--<?= mb_strtolower($color) ?>">
									<span class="block-letter"><?= $goals['number'] ?></span>
									<?= $goals['title'] ?>
								</div>
							<?php endif ?>

						</div>
						<div class="col-md-6 ps-xxl-0">
							<div class="numbered-list">
								<ol>

									<?php foreach ($goals['goals'] as $goal): ?>

										<?php if ($goal['goal']): ?>
											<li><p><?= $goal['goal'] ?></p></li>
										<?php endif ?>

									<?php endforeach ?>

								</ol>
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>
			
			<?php if ($methods['methods']): ?>
				<div class="block-team-single-list">
					<div class="row">
						<div class="col-md-6">

							<?php if ($methods['title']): ?>
								<div class="block-title block-title--<?= mb_strtolower($color) ?>">
									<span class="block-letter"><?= $methods['number'] ?></span>
									<?= $methods['title'] ?>
								</div>
							<?php endif ?>

						</div>
						<div class="col-md-6 ps-xxl-0">
							<div class="numbered-list">
								<ol>

									<?php foreach ($methods['methods'] as $method): ?>

										<?php if ($method['method']): ?>
											<li><p><?= $method['method'] ?></p></li>
										<?php endif ?>
										
									<?php endforeach ?>
									
								</ol>
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>

	<?php endif; ?>