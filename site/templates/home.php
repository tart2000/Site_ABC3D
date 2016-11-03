<?php snippet('header') ?>
<div class="row">
	<div class="col-lg-12">
	  <?php echo $page->text()->kirbytext() ?>
	</div>
	<div class="col-lg-6">
		<h3><?php echo page('workshops')->title() ?></h3>
	</div>
	<div class="col-lg-6 right smt">
		<a class="btn btn-default" href="<?php echo page('workshops')->url() ?>"><?php echo l::get('allworkshops') ?></a>
	</div>

  	<div class="col-lg-12">
  		<div class="row">
		  	<?php foreach (page('workshops')->children()->visible()->limit(3) as $workshop): ?>
		      <?php snippet('workshop', array('workshop'=>$workshop)) ?>
		    <?php endforeach ?>
		</div>
	</div>
</div>
<?php snippet('footer') ?>