<?php snippet('header') ?>

  <div class="row">

    <div class="col-sm-12">
      <h1><?php echo $page->title()->html() ?></h1>
    </div>
    

    <div class="col-sm-3 col-sm-push-9"><!-- méta -->
      <div class="meta-col">
        
        <?php if ($page->free() == 'true') : ?>
          <strong><?php echo l::get('free') ?></strong>
        <?php else : ?>
          <strong><?php echo l::get('notfree') ?></strong>
        <?php endif ?>
        <br>
        <?php if ($page->open() == 'true') : ?>
          <strong><?php echo l::get('open') ?></strong>
        <?php else : ?>
          <strong><?php echo l::get('notopen') ?></strong>
        <?php endif ?>
        <br>
        <?php if ($page->open() == 'insatll') : ?>
          <strong><?php echo l::get('install') ?></strong>
        <?php else : ?>
          <strong><?php echo l::get('inbrowser') ?></strong>
        <?php endif ?>
        <br>

        <a href="<?php echo $page->link() ?>" target="_blank"><?php echo $page->link() ?></a>

        <?php if ($page->abc3d() == 'true') : ?>
          <div class="abc3d-page smt">
            <img src="<?php echo $site->url() ?>/assets/images/abc3d_star.png">
            <div class="abc3d-text"><?php l::get('abc3d') ?></div>
          </div>
        <?php endif ?>

         <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure class="smt">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </figure>
        <?php endforeach ?>

      </div>
    </div>

    <div class="col-sm-9 col-sm-pull-3">
      <div class="text">
        <?php echo $page->text()->kirbytext() ?>
      </div>
      <div class="row">
        <?php $uid = $page->uid() ?>
        <?php $linked = page('workshops')->children()->filterBy('software','*=',$uid) ?>
        <?php foreach ($linked as $workshop): ?>
          <?php snippet('workshop', array('workshop'=>$workshop)) ?>
        <?php endforeach ?>
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