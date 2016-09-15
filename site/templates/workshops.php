<?php snippet('header') ?>


  <div class="row">

    <div class="col-sm-12">
      <?php echo $page->text()->kirbytext() ?>

      <hr>
    </div>

    <?php $workshops = $page->children() ?>
    <?php if ($pub=param('public')) : ?>
		<?php $workshops = $workshops->filterBy('public','*=',$pub) ?>
	<?php endif ?>
    <?php foreach ($workshops as $workshop): ?>
      <?php snippet('workshop', array('workshop'=>$workshop)) ?>
    <?php endforeach ?>

  </div>

<?php snippet('footer') ?>