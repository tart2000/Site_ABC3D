<?php snippet('header') ?>


  <div class="row">

    <div class="col-sm-12">
      <?php echo $page->text()->kirbytext() ?>

      <hr>
    </div>

    <?php $workshops = $page->children()->visible() ?>
    <?php if ($pub=param('public')) : ?>
  		<?php $workshops = $workshops->filterBy('public','*=',$pub) ?>
      <em><?php echo l::get('pulbic') ?>: <?php echo $pub?></em>
  	<?php endif ?>
    <?php foreach ($workshops as $workshop): ?>
      <?php snippet('workshop', array('workshop'=>$workshop)) ?>
    <?php endforeach ?>

  </div>

<?php snippet('footer') ?>