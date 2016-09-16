<?php snippet('header') ?>

  <div class="row">

    <div class="col-sm-12">
      <h1><?php echo $page->title()->html() ?></h1>
    </div>
    

    <div class="col-sm-3 col-sm-push-9"><!-- méta -->
      <div class="meta-col">
        <?php snippet('meta-icons', array('workshop'=>$page)) ?>
        <hr>

        <?php if($page->public() != '') : ?>
          <h4><?php echo l::get('public') ?></h4>
          <?php $publics = $page->public()->split() ?>
          <?php foreach ($publics as $p) : ?>
            <?php $onepub = $pages->index()->findByURI($p) ?>
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="<?php echo $site->url().'/workshops/public:'.$onepub->uid() ?>"><?php echo $p ?></a></li>
            </ul>
          <?php endforeach ?>
        <?php endif ?>

        <?php if($page->software() != '') : ?>
          <h4><?php echo l::get('software') ?></h4>
          <?php foreach ($page->software()->split() as $s) : ?>
            <?php $onesoft = $pages->index()->findByURI($s) ?>
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="<?php echo $onesoft->url() ?>"><?php echo $onesoft->title() ?></a></li>
            </ul>
          <?php endforeach ?>
        <?php endif ?>

        <?php if ($page->hasDocuments()) : ?>
          <hr>
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
          <img src="<?php echo $image->url() ?>" class="img-responsive header-image"> 
        <?php endif ?>

        <?php if ($page->aims() != '') : ?>
          <h4><?php echo $page->aims() ?></h4>
        <?php endif ?>

        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Description</a></li>
          <?php if ($page->deroule() != '') : ?>
            <li role="presentation"><a href="#deroule" aria-controls="deroule" role="tab" data-toggle="tab"><?php echo l::get('timing') ?></a></li>
          <?php endif ?>
          <?php if ($page->materiel() != '') : ?>
            <li role="presentation"><a href="#materiel" aria-controls="materiel" role="tab" data-toggle="tab"><?php echo l::get('equipment') ?></a></li>
          <?php endif ?>
          <li role="presentation" class="disabled"><a href="#"><?php echo l::get('comments') ?></a></li>
        </ul>
        
        <div class="workshop-text tab-content">
          <div role="tabpanel" class="tab-pane active" id="desc">
            <?php echo $page->text()->kirbytext() ?>
          </div>
          <?php if ($page->deroule() != '') : ?>
            <div role="tabpanel" class="tab-pane" id="deroule">
              <?php echo $page->deroule()->kirbytext() ?>
            </div>
          <?php endif ?>
          <?php if ($page->materiel() != '') : ?>
            <div role="tabpanel" class="tab-pane" id="materiel">
              <?php echo $page->materiel()->kirbytext() ?>
            </div>
          <?php endif ?>
        </div>

      </div>
      <!-- Navigation -->
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

    </div><!-- end column -->

  </div><!-- end row -->

  
  

<?php snippet('footer') ?>