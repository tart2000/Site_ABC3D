<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <ul class="meta cf">

    </ul>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
    </div>

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

  </main>

<?php snippet('footer') ?>