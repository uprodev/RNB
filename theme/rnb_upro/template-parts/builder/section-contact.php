<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="block-contacts border-top">
		<div class="container-fluid">

			<?php if ($form): ?>
				<div class="row">
					<div class="col-lg-5 col-xl-6">
						<div class="contacts-intro">

							<?php if ($form['title']): ?>
								<div class="title"><?= $form['title'] ?></div>
							<?php endif ?>
							
							<?php if ($form['text']): ?>
								<?= $form['text'] ?>
							<?php endif ?>
							
						</div>
					</div>
					<div class="col-lg-7 col-xl-6">

						<?php if ($form['form']): ?>
							<div class="contact-form">
								<div class="form">
									<?= do_shortcode('[contact-form-7 id="' . $form['form'] . '"]') ?>
								</div>
							</div>
						<?php endif ?>
						
					</div>
				</div>
			<?php endif ?>
			
			<?php if ($contact): ?>
				<div class="row">
					<div class="col-lg-5 col-xl-6">
						<div class="contacts-info">

							<?php if ($contact['items']): ?>
								<div class="row">

									<?php foreach ($contact['items'] as $item): ?>
										<div class="col-md-6">
											<div class="item">

												<?php if ($item['title']): ?>
													<div class="title"><?= $item['title'] ?></div>
												<?php endif ?>
												
												<?php if ($item['text']): ?>
													<?= $item['text'] ?>
												<?php endif ?>
												
											</div>
										</div>
									<?php endforeach ?>
									
								</div>
							<?php endif ?>
							
							<?php if ($contact['label']): ?>
								<div class="sticker"><?= $contact['label'] ?></div>
							<?php endif ?>
							
						</div>
					</div>
					<div class="col-lg-7 col-xl-6 d-none d-lg-block">

						<?php if ($contact['image']): ?>
							<figure class="contacts-image">
								<?= wp_get_attachment_image($contact['image']['ID'], 'full') ?>
							</figure>
						<?php endif ?>
						
					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>

	<?php endif; ?>