<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($menu): ?>
		<nav class="content-nav<?php if($is_round_items) echo ' content-nav--type1' ?>">
			<ul>

				<?php foreach ($menu as $item): ?>

					<?php if ($item['link']): ?>
						<li>
							<a href="<?= $item['link']['url'] ?>"<?php if($item['is_active']) echo ' class="active"' ?><?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
						</li>
					<?php endif ?>
					
				<?php endforeach ?>
				
			</ul>
		</nav>
	<?php endif ?>

	<?php endif; ?>