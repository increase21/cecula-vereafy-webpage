<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" />
    <title>Vereafy |</title>
</head>

<body>
    <div class="container-fluid">
        <?php include('sidebar.php'); ?>
        <div style="width:100%" class="bg-gray"> 
            <?php
                include('header.php');
                if(!is_home()):
                    get_search_form();
                else:
                    echo '<div class="breadcrumb pb-1 mt-3"> 
                    <h1 class="container">Home Page Contents</h1>
                    </div>';
                    echo '<article id="" class="container mt-2">
                    This is how to blog on wordpress
                    </article>';
                endif;
            ?>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>
    <?php include('footer.php') ?>
</body>

</html>