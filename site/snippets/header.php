<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <link rel="icon" href="<?php echo $site->url() ?>/assets/images/favicon.ico" type="image/x-icon" />

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $site->url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $site->url() ?>/assets/css/simple-sidebar.css" rel="stylesheet">

    <link href="<?php echo $site->url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $site->url() ?>/assets/css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">
    <?php snippet('sidebar') ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header pull-left">
                    <div class="navbar-brand">
                        <a href="#menu-toggle" type="button" class="" id="menu-toggle">
                            <i class="fa fa-bars fa-2x"></i>
                        </a>
                    </div>
                </div>
                <ul class="nav navbar-nav pull-left">
                    <li>
                    <?php if ($page->depth() == 1) : ?>
                        <a href="#"><?php echo $page->title() ?></a>
                    <?php endif ?>
                    <?php if ($page->depth() == 2) : ?>
                        <a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a>
                    <?php endif ?>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right pull-right">
                    <?php foreach($site->languages() as $language): ?>
                        <?php if ($site->language() != $language) : ?>
                            <li class="lang">
                                <a href="<?php echo $page->url($language->code()) ?>">
                                    <?php echo html($language->code()) ?>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">



