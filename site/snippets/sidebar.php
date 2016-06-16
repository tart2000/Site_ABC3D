<!-- Sidebar -->
<div id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="<?php echo $site->url() ?>">
            <img src="<?php echo $site->url() ?>/assets/images/abc3d.png">
        </a>
    </div>
    <ul class="sidebar-nav">
        <?php foreach ($site->pages()->visible() as $p) : ?> 
            <li>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
                <?php if ($p->hasVisibleChildren()) : ?>
                    <ul>
                        <?php foreach ($p->children()->visible() as $sub) : ?>
                            <li><a href="<?php echo $sub->url() ?>"><?php echo $sub->title() ?></a></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="side-footer">
        <em>Un projet de <a href="http://technoculture.club" target="_blank">Techno Culture Club</a></em>
    </div>
</div>
<!-- /#sidebar-wrapper -->