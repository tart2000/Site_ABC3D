
<div class="col-sm-4">
	<?php if ($soft->hasImages()) {
		$background = $soft->images()->first()->url();
	} ?>
	<a href="<?php echo $soft->url() ?>">

		<div class="backimg" <?php 
		if ($soft->hasImages()) {
			echo 'style="background-image:url(' . $background .')"';
		}?> >
		<?php if ($soft->abc3d() == 'true') : ?>
			<div class="abc3d">
				<img src="<?php echo $site->url() ?>/assets/images/abc3d_star.png">
			</div>
		<?php endif ?>
		</div>
		
		<div class="card-meta">
			<h4><?php echo $soft->title() ?></h4>
		</div>
	</a>
</div>
