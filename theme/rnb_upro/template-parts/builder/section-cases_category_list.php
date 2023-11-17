<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php 
	$terms = get_terms( [
		'taxonomy' => 'case_cat',
		'hide_empty' => false,
	] ); 
	?>

	<?php if ($terms): ?>
		<nav class="content-nav content-nav--type1">
			<ul class="filter">
				<li><a href="<?php the_permalink(apply_filters('wpml_object_id', 34, 'page')) ?>" class="active"><?php _e('All cases', 'RNB') ?></a></li>

				<?php foreach ($terms as $term): ?>
					<li>
						<a href="<?= get_term_link($term->term_id) ?>"><?= $term->name ?></a>
					</li>
				<?php endforeach ?>
				
			</ul>
		</nav>
	<?php endif ?>

	<?php endif; ?>