<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 */
?>
<div class="breadcrumb pb-1 pl-1">
  <h1 class="post-link container" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
                   <?php the_title(); ?> 
</h1>
</div>
<article id="post-<?php the_ID(); ?>" class="container mt-2 pl-2">
<?php the_content(); ?>
</article>