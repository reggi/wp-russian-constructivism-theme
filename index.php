<?php get_header(); ?>
<!-- start include index.php -->
<div class="float posts">
<?php while ( have_posts() ) : the_post(); ?>
<div class="float post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<div class="meta_data">
<div class="meta_categorys"><?php echo the_category(', ')?> &nbsp;</div>
<div class="meta_comments"><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></div >
<div class="meta_author"><?php the_author() ?> | <?php the_time('F') ?>, <?php the_time('dS') ?>, <?php the_time('Y') ?></div >
</div><!-- end meta_data-->
</div><!-- end post-->
<?php endwhile; ?>
<?php next_previous_div() ?>
</div><!-- end posts -->
<!-- end include index.php -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
