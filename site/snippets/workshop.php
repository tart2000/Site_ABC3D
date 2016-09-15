<div class="col-sm-4">
	<?php if ($page->postimage() != '') : ?>
		<?php $background = $page->postimage()->toFile(); ?>
	<?php elseif ($workshop->hasImages()) : ?>
		<?php $background = $workshop->images()->first(); ?>
	<?php endif ?>
	<a href="<?php echo $workshop->url() ?>">
		<div class="backimg" <?php 
		if ($background != '') {
			echo 'style="background-image:url(' . $background->url() .')"';
		}?> ></div>
		<div class="card-meta">
			<h4><?php echo $workshop->title() ?></h4>
		</div>
	</a>
</div>