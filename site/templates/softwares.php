<?php snippet('header') ?>


  <div class="row">

    <div class="col-sm-12">
      <?php echo $page->text()->kirbytext() ?>

      <hr>
    </div>


    <?php foreach ($page->children() as $soft) : ?>
    	<div class="col-sm-4">
    		<a href="<?php echo $soft->url() ?>">
	    		<div class="backimg" style="background-image:url('<?php echo $soft->images()->first()->url() ?>')"></div>
	    		<h2><?php echo $soft->title() ?></h2>
    		</a>
    	</div>
	<?php endforeach ?>

  </div>

<?php snippet('footer') ?>