<div class="col-sm-4">
	<?php if ($workshop->postimage() != '') : ?>
		<?php $background = $workshop->postimage()->toFile(); ?>
	<?php elseif ($workshop->hasImages()) : ?>
		<?php $background = $workshop->images()->first(); ?>
	<?php else : ?>
		<?php $background = '' ?>
	<?php endif ?>
	<a href="<?php echo $workshop->url() ?>">
		<div class="backimg" <?php 
		if ($background != '') {
			echo 'style="background-image:url(' . $background->url() .')"';
		}?> >
			<div class="card-meta-mini">
				<?php snippet('meta-icons', array('workshop'=>$workshop)) ?>
			</div>
		</div>
		<div class="card-meta">
			<h4><?php echo $workshop->title() ?></h4>
		</div>
	</a>
</div>