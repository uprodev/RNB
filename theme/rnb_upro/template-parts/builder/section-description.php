<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<div class="spacing-9">
          <div class="container-fluid">
            <div class="row g-xxl-0">
              <div class="col-md-6">
                <div class="font-6"><?= $text ?></div>
              </div>
            </div>
          </div>
        </div>
	<?php endif ?>

	<?php endif; ?>