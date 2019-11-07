<aside>
    <a class="vereafy-logo" href="<?php echo home_url("/") ?>">
        <img class="" src="<?php bloginfo('template_url') ?>/assets/images/vereafy-icon.svg" alt="vereafy logo" />
        <div class="cecula-name">
            <span>Cecula</span>
            <span>Vereafy</span>
        </div>
    </a>
    <div class="search-div mt-3 pl-3">
    <form class="p-relative" role="search" method="get" id="searchform" action="<?php echo home_url("/"); ?>">
        <label  class="b find-website pl-half pb-half" for="for-seacrh">Find website</label>
        <input id="for-seacrh" type="text" class="search-input bg-black" placeholder="Search" value="<?php echo get_search_query() ?>" name="s">
        <i class="material-icons search-icon">search</i>
        <button class="btn" type="submit">Go</button>
</form>
</div>
    <ul class="sidebar-media-names b pt-2 pl-5">
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
</aside>