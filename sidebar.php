<!-- start include sidebar.php -->
<div class="float sidebar_items">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>

<div class="float sidebar_item">
<ul class="buttons_demo">
<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>
</ul><!-- end buttons_demo -->
</div><!-- end sidebar_item -->

<div class="float sidebar_item">
<ul class="buttons_demo">
<?php wp_list_categories('title_li=<h2>' . __('Categories') . '</h2>' ); ?>
</ul><!-- end buttons_demo -->
</div><!-- end sidebar_item -->

<div class="float sidebar_item">
<ul class="buttons_demo">
<?php wp_list_bookmarks(); ?>
</ul><!-- end buttons_demo -->
</div><!-- end sidebar_item -->


<div class="float sidebar_item">
<ul class="buttons_demo">
<h2>Meta</h2>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<li><a title="Syndicate this site using RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
<li><a title="The latest comments to all posts in RSS" href="<?php bloginfo('comments_rss2_url'); ?>">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
<li><a title="Powered by WordPress, state-of-the-art semantic personal publishing platform." href="http://wordpress.org/">WordPress.org</a></li>
</ul><!-- end buttons_demo -->
</div><!-- end sidebar_item -->

<?php endif; ?>
</div><!-- end sidebar_items -->
<!-- end include sidebar.php -->