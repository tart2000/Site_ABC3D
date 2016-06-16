<!-- Sidebar -->
<div id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="<?php echo $site->url() ?>">
            <img src="assets/images/abc3d.png">
        </a>
    </div>
    <ul class="sidebar-nav">
        <?php foreach ($site->pages()->visible() as $p) : ?> 
            <li>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="side-footer">
        Un projet de <a href="http://technoculture.club" target="_blank">Techno Culture Club</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->