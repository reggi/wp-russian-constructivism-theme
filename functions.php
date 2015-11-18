<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="float sidebar_item">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget_title">',
        'after_title' => '</div>',
));

function browser_spec_styles(){
    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') )
    {
        echo '<script type="text/javascript" src=" ';
        echo 	bloginfo('template_url');
        echo '/javascripts/safari.js"></script>';
    };
};

function next_previous_div(){

ob_start();
posts_nav_link();
$links = ob_get_clean();

if(strlen($links) > 0){
	{	
		echo '<div class="float post" style="text-align:center">';
		echo posts_nav_link();
		echo '</div><!-- end post-->';
	};
};
};
?>