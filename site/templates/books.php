<?php snippet('header') ?>


  <div class="row">

    <?php foreach ($page->children() as $book) : ?>
      <?php snippet('book', array('book'=>$book)) ?>
	<?php endforeach ?>

  </div>

<?php snippet('footer') ?>