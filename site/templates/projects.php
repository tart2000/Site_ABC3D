<?php snippet('header') ?>


  <div class="row">

    <div class="col-sm-12">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

      <hr>
    </div>


    <?php snippet('projects') ?>

  </div>

<?php snippet('footer') ?>