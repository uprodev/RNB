<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div id="about" class="spacing-1 border-bottom">
		<div class="container-fluid">
			<div class="row g-xxl-0">
				<div class="col-md-6">

					<?php if ($text): ?>
						<div class="font-4"><?= $text ?></div>
					<?php endif ?>
					
				</div>
				<div class="col-md-6">

					<?php if ($link): ?>
						<div class="d-md-flex justify-content-center align-items-center h-100">
							<a href="<?= $link['url'] ?>" class="btn btn-arrow-red btn-lg btn-solid<?php if($link['url'] == '#modalForm') echo ' btn-modal' ?>"<?php if($link['target']) echo ' target="_blank"' ?>>
								<?= $link['title'] ?>
								<span class="icon">
									<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</a>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>