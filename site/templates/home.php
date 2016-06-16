<?php snippet('header') ?>
<div class="row">
  <div class="col-lg-12">
  	<h1><?php echo $page->title() ?></h1>
  	<?php echo $page->text()->kirbytext() ?>
  </div>
</div>
<?php snippet('footer') ?>