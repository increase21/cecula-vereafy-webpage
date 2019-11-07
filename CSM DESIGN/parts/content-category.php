<?php
/**
 * The template part for displaying single posts category
 *
 * @package WordPress
 */
  $current_category = get_queried_object(); ////getting current category
                $args = array(
                        'post_type' => 'post',// post type,
                        'orderby' => 'post_date', //date posted
                        'cat' => $current_category->cat_ID // current category ID
                );
                $the_query = new WP_Query($args);
                // loop the post if exist
                if($the_query->have_posts()):
                   while($the_query->have_posts()):
                         $the_query->the_post();
                endwhile;
                endif;
?>
<div class="breadcrumb pb-1 pl-1 mt-3">
        <h1 class="post-link container" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
                <?php the_title(); ?> 
        </h1>
</div>
<article id="post-<?php the_ID(); ?>" class="container mt-2 pl-2">
        <?php the_content(); ?>
</article>