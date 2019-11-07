<?php
/**
 * The template part for displaying single posts category
 *
 * @package WordPress
 */
$keyword = isset($_REQUEST['s']) ? $_REQUEST['s'] : '';
        $arg = array(
                'post_type' =>'post',
                's' =>$keyword
            );
$searchEngine = new WP_Query($arg);
if($searchEngine->have_posts()): while($searchEngine->have_posts()):$searchEngine->the_post();
endwhile;
else:
    $nosearch = '<h3 class="container">Sorry, nothing matched your search criteria</h3>';
endif;
?>
<div class="breadcrumb pb-1 pl-1 mt-2">
    <h1 class="post-link container" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
        <?php the_title(); ?> 
    </h1>
</div>
<article id="post-<?php the_ID(); ?>" class="container mt-2 pl-2">
    <?php the_content(); ?>
    <?php echo $nosearch ?>
</article>