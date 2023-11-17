<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="block-case-singe block-case-singe--blue">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">

					<?php if ($subtitle): ?>
						<div class="block-title block-title--blue">

							<?php if ($number): ?>
								<span class="block-letter"><?= $number ?></span>
							<?php endif ?>

							<?= $subtitle ?>
						</div>
					<?php endif ?>

				</div>
				<div class="col-md-6 ps-xxl-1">
					<div class="cite">
						<div class="author">
							<figure>

								<?php if ($avatar): ?>
									<?= wp_get_attachment_image($avatar['ID'], 'full') ?>
								<?php endif ?>
								
							</figure>
							<p>

								<?php if ($name): ?>
									<?= $name ?>
								<?php endif ?>
								
								<?php if ($position): ?>
									<span><?= $position ?></span>
								<?php endif ?>
								
							</p>
						</div>

						<?php if ($text): ?>
							<blockquote><?= $text ?></blockquote>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>