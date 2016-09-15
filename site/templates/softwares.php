<?php snippet('header') ?>


  <div class="row">

    <div class="col-sm-12">
      <?php echo $page->text()->kirbytext() ?>

      <hr>
    </div>


    <?php foreach ($page->children() as $soft) : ?>
      <?php snippet('software', array('soft'=>$soft)) ?>
	<?php endforeach ?>

  </div>

<?php snippet('footer') ?>