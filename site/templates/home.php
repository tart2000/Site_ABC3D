<?php snippet('header') ?>
<div class="row">
  <div class="col-lg-12">
  	<div class="jumbotron">
  		<h1><?php echo $site->title() ?></h1>
  		<?php echo $site->description()->kirbytext() ?>
  	</div>
  	<h1><?php echo $page->title() ?></h1>
  	<?php echo $page->text()->kirbytext() ?>
  </div>
</div>
<?php snippet('footer') ?>