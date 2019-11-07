<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <title>Vereafy |</title>
</head>

<body>
    <div class="container-fluid">
        <?php include('sidebar.php'); ?>
        <div style="width:100%" class="bg-gray"> 
            <?php
                include('header.php');
                get_template_part('parts/content-category', get_post_format())
                ?>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>
    <?php include('footer.php') ?>
</body>

</html>