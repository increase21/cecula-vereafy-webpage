<header class="pt-1 p-relative">
    <a class="vereafy-logo" href="<?php echo home_url("/") ?>">
        <img src="<?php bloginfo('template_url') ?>/assets/images/vereafy-icon.svg" class="header-logo d-none" alt="vereafy logo">
    </a>
    <ul class="b nav">
        <li>Business</li>
        <button class="btn pl-1 pr-1">DOWNLOAD APP</button>
    </ul>
    <div class="mv-search d-none">
        <div class="search-div mt-5 pl-3 pr-1">
            <i class="material-icons menu-icon">menu</i>
            <form role="search" method="get" id="searchform" action="<?php echo home_url("/"); ?>">
                <input type="text" class="search-input bg-black" placeholder="Search" value="<?php echo get_search_query() ?>" name="s">
                <i class="material-icons search-icon">search</i>
                <button class="btn" type="submit">Go</button>
            </form>
        </div>
        <ul class="sidebar-media-names b pt-2 d-none mobile-menu">
        <?php
            $categories = get_categories();
            foreach ( $categories as $category ) {
                ?>
            <li>
                <?php
                    echo '<a href="' . get_category_link( $category->term_id ) . '" class="color-black">';               
            ?>
            <img class="sidebar-icon" src="<?= bloginfo('template_url')?> /assets/images/<?=$category->name ?>.png" alt="">
            <span><?=$category->name ?></span>
            </a>
            </li>
        <?php

        }?>
</ul>
    </div>
</header>