
<div class="col-sm-4">
	<?php if ($soft->hasImages()) {
		$background = $soft->images()->first()->url();
	} ?>
	<a href="<?php echo $soft->url() ?>">
		<div class="backimg" <?php 
		if ($soft->hasImages()) {
			echo 'style="background-image:url(' . $background .')"';
		}?> ></div>
		<div class="card-meta">
			<h4><?php echo $soft->title() ?></h4>
		</div>
	</a>
</div>
