<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="spacing-2">
		<div class="container-fluid">
			<div class="row g-xxl-0">
				<div class="col-md-6">

					<?php if ($number || $title): ?>
						<div class="block-title">

							<?php if ($number): ?>
								<span><?= $number ?></span>
							<?php endif ?>

							<?= $title ?>
						</div>
					<?php endif ?>

				</div>
				<div class="col-md-6">

					<?php if ($text): ?>
						<div class="font-3 mb-5 mb-lg-7"><?= $text ?></div>
					<?php endif ?>

					<?php if ($link): ?>
						<a href="<?= $link['url'] ?>" class="btn btn-arrow btn-anchor"<?php if($link['target']) echo ' target="_blank"' ?>>
							<?= $link['title'] ?>
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

	<?php endif; ?>