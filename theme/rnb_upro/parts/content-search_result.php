<div class="col-md-6 col-lg-3">
	<div class="search-card">
		<div class="title"><?php the_title() ?></div>

		<?php if (get_the_excerpt()): ?>
			<p><?php the_excerpt() ?></p>
		<?php endif ?>
		
		<a href="<?php the_permalink() ?>" class="link-arrow">
			<?php _e('Read More', 'RNB') ?>
			<span class="icon">
				<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 7L4 4L1 1" stroke="#F4F5F7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</a>
	</div>
</div>