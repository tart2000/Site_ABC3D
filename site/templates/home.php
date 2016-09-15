<?php snippet('header') ?>
<div class="row">
  <div class="col-lg-12">
  	<?php echo $page->text()->kirbytext() ?>
  </div>
  <?php foreach (page('workshops')->children()->limit(3) as $workshop): ?>
      <?php snippet('workshop', array('workshop'=>$workshop)) ?>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>