<?php snippet('header') ?>


  <div class="row">

    <div class="col-sm-12">
      <?php echo $page->text()->kirbytext() ?>

      <hr>
    </div>

    <div class="col-sm-12">
      
    </div>

    <?php $workshops = $page->children()->visible() ?>
    <?php if ($pub=param('public')) : ?>
      <div class="col-md-12">
        <ul class="nav nav-pills">
          <?php foreach (page('publics')->children() as $p) : ?>
            <?php if ($p->uid() == $pub) : ?>
              <?php $class='active' ?>
            <?php else : ?>
              <?php $class ='' ?>
            <?php endif ?>
            <li role="presentation" class="<?php echo $class ?>"><a href="<?php echo $site->url() ?>/workshops/public:<?php echo $p->uid() ?>"><?php echo $p->title() ?></a></li>
          <?php endforeach ?>
        </ul>
        <?php $workshops = $workshops->filterBy('public','*=',$pub) ?>
        <?php $count = $workshops->count() ?>
      </div>
      <div class="col-sm-12 spt">
        <em><?php echo $count ?> <?php echo l::get('workshop') ?><?php e($count>1,'s') ?></em>
      </div>
  	<?php endif ?>
    <?php foreach ($workshops as $workshop): ?>
      <?php snippet('workshop', array('workshop'=>$workshop)) ?>
    <?php endforeach ?>

  </div>

<?php snippet('footer') ?>