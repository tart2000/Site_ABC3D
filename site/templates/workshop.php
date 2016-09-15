<?php snippet('header') ?>

  <div class="row">

    <div class="col-sm-12">
      <h1><?php echo $page->title()->html() ?></h1>
    </div>
    

    <div class="col-sm-3 col-sm-push-9"><!-- méta -->
      <div class="meta-col">
        <?php if($page->public() != '') : ?>
          <strong><?php echo l::get('public') ?>: </strong><?php echo $page->public() ?><br>
        <?php endif ?>

        <?php if($page->lengt() != '') : ?>
          <strong><?php echo l::get('length') ?>: </strong><?php echo $page->lengt() ?><br>
        <?php endif ?>

        <?php if($page->groupsize() != '') : ?>
          <strong><?php echo l::get('group') ?>: </strong><?php echo $page->groupsize() ?> <i class="fa fa-users"></i><br>
        <?php endif ?>

        <?php $soft = $page->software() ?>
        <strong><?php echo l::get('software') ?>: </strong>
        <?php foreach ($soft->split() as $s) : ?>
          <?php $onesoft = $pages->index()->findByURI($s) ?>
          <a href="<?php echo $onesoft->url() ?>"><?php echo $onesoft->title() ?> </a>
        <?php endforeach ?>

        <hr>

        <?php if ($page->hasDocuments()) : ?>
          <?php foreach ($page->documents() as $doc) : ?>
            <a href="<?php echo $doc->url() ?>" download>
              <?php echo $doc->filename() ?> - (<?php echo $doc->niceSize() ?>) <i class="fa fa-download"></i>
            </a><br>
          <?php endforeach ?>
        <?php endif ?>

      </div>
    </div> <!-- end meta col -->

    <div class="col-sm-9 col-sm-pull-3">
      

      <div class="text">
        <?php if ($page->postimage() != '') : ?>
          <?php $image = $page->postimage()->toFile(); ?>
          <img src="<?php echo $image->url() ?>" class="img-responsive"> 
        <?php endif ?>
        
        <?php echo $page->text()->kirbytext() ?>

      </div>
    </div>

  </div><!-- end row -->

  <div class="row">
    <nav>
      <ul class="pager">
        <?php if($prev = $page->prevVisible()): ?>
          <li class="previous"><a href="<?php echo $prev->url() ?>"><span aria-hidden="true">&larr;</span> <?php echo l::get('previous') ?></a></li>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
          <li class="next"><a href="<?php echo $next->url() ?>"><?php echo l::get('next') ?> <span aria-hidden="true">&rarr;</span></a></li>
        <?php endif ?>
      </ul>
    </nav>
  </div>
  

<?php snippet('footer') ?>