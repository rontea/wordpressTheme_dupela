<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Enqueue scripts and styles.
 *
 * @since Dupela 1.2
 */

function dupela_scripts()
{
    
    //Load Main Style
    wp_enqueue_style('dupela-style', get_stylesheet_uri());
    
    /* Load Sub Style */
    wp_enqueue_style('dupela-style', get_stylesheet_uri());
    wp_enqueue_style('mimic-style', get_template_directory_uri() . '/css/mimicStyle.css', array(), '1.0');
    wp_enqueue_style('dupela-ie-style', get_template_directory_uri() . '/css/ie.css.css', array(), '1.0');
    
    
    /* Load style for */
    wp_enqueue_style('slider-style', get_template_directory_uri() . '/js/slider/Theme/default/css/slider.css');
    wp_enqueue_script('slider-script', get_template_directory_uri() . '/js/slider/jquery.rrslider.js');
    wp_enqueue_script('map-script', get_template_directory_uri() . '/js/jquery.ui.map.full.min.js');
    
}

add_action('wp_enqueue_scripts', 'dupela_scripts');

/**
 *  This will Register a new menu type in Appearance under Menus 
 */
/**
 *  This will Register a new menu widget 
 */
// Register a widget 

function widget_dupela()
{
    
    /* Right Navigation */
    register_sidebar(array(
        
        name => 'Google Adds',
        id => 'sidebar1',
        before_widget => '<aside>',
        after_widget => '</aside>',
        before_title => '<div class="heading">  <div class="title">',
        after_title => '</div></div>'
    ));
    
    register_sidebar(array(
        
        name => 'Disclaimer',
        id => 'sidebar4',
        before_widget => '<aside> ',
        after_widget => '</aside>',
        before_title => '<div class="heading">  <div class="title">',
        after_title => '</div></div>'
        
        
    ));
    /* Footer Section */
    register_sidebar(array(
        name => 'Footer 1',
        id => 'sidebar2'
    ));
    
    /* Page About Me*/
    register_sidebar(array(
        
        name => 'About Me',
        id => 'sidebar3'
        
    ));
    /* social information */
    register_sidebar(array(
        
        name => 'Social Link',
        id => 'sidebar5',
        before_widget => ' ',
        after_widget => '',
        before_title => '',
        after_title => ''
    ));
    
    /* Home Titles */
    register_sidebar(array(
        
        name => 'Title 1',
        id => 'sidebar6',
        before_widget => '<div class="title"> ',
        after_widget => '</div>',
        before_title => '<span>',
        after_title => '</span>'
    ));
    
    /* Home Titles */
    register_sidebar(array(
        
        name => 'Title 2',
        id => 'sidebar7',
        before_widget => '<div class="title"> ',
        after_widget => '</div>',
        before_title => '<span>',
        after_title => '</span>'
    ));
    
    /* Home Titles */
    register_sidebar(array(
        
        name => 'Title 3',
        id => 'sidebar8',
        before_widget => '<div class="title"> ',
        after_widget => '</div>',
        before_title => '<span>',
        after_title => '</span>'
    ));
    
    
}
add_action('widgets_init', 'widget_dupela');
/**
 * Get Only the Menu of choice that is specified 
 */
function get_top_ancestor_id()
{
    
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}
/** 
 * setup the theme Menu, Featured Image
 */
function dupela_setup()
{
    
    // Navigation Menus
    register_nav_menus(array(
        "primary" => __("Primary Menu"),
        "footer" => __("Footer Menu"),
        "404Error" => __("404 Menu")
    ));
    
    // Add featured image support
    add_theme_support('post-thumbnails');
    //add_image_size('small-thumbnail', 180, 120, true);
    // add_image_size('banner-image', 600, 400, array('left', 'top'));
}

add_action('after_setup_theme', 'dupela_setup');

/* Add Submenu */


function custom_excerpt_length()
{
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');

/*
 * Error Message  
 *  */

function get_error_information()
{
    
    $message = '';
    
    $error = new WP_Error('broke', __("Error", "my_textdomain"));
    
    $message = $error->get_error_messages();
    
    return $message;
}
/* Add Category */
function add_cat()
{
    if (file_exists(ABSPATH . '/wp-admin/includes/taxonomy.php')) {
        require_once(ABSPATH . '/wp-admin/includes/taxonomy.php');
        if (!get_cat_ID('Image Slider')) {
            wp_create_category('Image Slider');
        }
        if (!get_cat_ID('Featured1')) {
            wp_create_category('Featured1');
        }
        if (!get_cat_ID('Featured2')) {
            wp_create_category('Featured2');
        }
        if (!get_cat_ID('paf1')) {
            wp_create_category('paf1');
        }
        if (!get_cat_ID('paf2')) {
            wp_create_category('paf2');
        }
        
    }
}
add_action('after_setup_theme', 'add_cat');

/* Getting the Related Items*/



function main_script()
{
    
?>
    <script type="text/javascript">
     /*
        *************************************************************
        Author:Ronryan Teano
        Update: 3/11/15
        *************************************************************
        */
/*
        Require: Jquery ui map 
        Require: Jquery ui css
        Require: Jquery ui 
       */
// JavaScript Document
$(document).ready(function() {
    
        (function() {
		var zergnet = document.createElement('script');
		zergnet.type = 'text/javascript'; zergnet.async = true;
		zergnet.src = 'http://www.zergnet.com/zerg.js?id=39979';
		var znscr = document.getElementsByTagName('script')[0];
		znscr.parentNode.insertBefore(zergnet, znscr);
	})();
        $("#zerglayout").attr('style','clear:both;line-height:normal;border: 0px solid #ddd; font-family: arial,serif; font-size: 11px; text-align: center; background: transparent; width: 100%; margin: 0px auto;');
        
        /*End */
        /* quick link height */
        $("#quick-link article").css("height" , ""+$("#quick-link").height()+"");

        $("#quick-link article ul li:odd").addClass("oddItem");

	/* Mobile Main Menu */
        $(".menu2-img").click(function() {
            
            $("#menu2 nav").slideToggle( function() {	
                if($('#menu2 nav').is(':visible')){
                    $("body").addClass("fixedPosition");
                 }else{
                    $("body").removeClass("fixedPosition");
                } 
            });
        }); 
        
        
        
        /* Mobile Sub Menu  */
           function expand(num){
              
               $('ul.sub-expand'+num.data.param+'').toggle("slow");
           }
           var ar = $("#menu2 ul li.menu-item-has-children").length;
            
           for(var len = 0; len < ar; len++){
               //a[href*="#"]
           $('#menu2 ul li.menu-item-has-children:eq('+len+') a:eq(0)').append('<div class="expand-Menu expand-Menu'+len+'"> + </div>');
           $('#menu2 ul li.menu-item-has-children:eq('+len+') ul.sub-menu').addClass('sub-expand'+len+'');
                
                
                $("#menu2 div.expand-Menu"+len+"").bind('click', { param: len }, expand);
            }
           
           
           
                
        /* Mobile Menu Alteration */

		
        /* Scroll code  */
        $(".scroll-top").hide(); 
            $(function () {
                $(window).scroll(function () {
					
                    if ($(this).scrollTop() > 100) {
                        $('.scroll-top').fadeIn();
						
                    } else {
                        $('.scroll-top').fadeOut();
                    }
                });

                // scroll body to 0px on click
                $('#back-top').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
			
            /* End */
            

            /* UI MAP */

                $('#map-google').gmap({'some_option':'some_value'}); // Add the contructor
               // addMarker returns a jQuery wrapped google.maps.Marker object 
                var $marker = $('#map-google').gmap('addMarker', {'position': '14.5369312,121.0597852', 'bounds': true});
                    $marker.click(function() {
                        $('#map-google').gmap('openInfoWindow', {'content': 'My Home Office'}, this);
                    }); 
                    /* End Map */   
    
    
    $("#slider-body").rrslider({
        imgLocId: ".items",
        title: ".info",
        description: ".sub",
        DelayNextClick: "1000",
        transitionDuration: "4000",
        setPreview: "true",
        buttonLocId: "#slider-body .bottom",
        imgOff: "<?php
    bloginfo('template_url');
?>/js/slider/Theme/default/img/off.fw.png",
        imgOn: "<?php
    bloginfo('template_url');
?>/js/slider/Theme/default/img/on.fw.png",
        setArrow: "false"
    });
    
    
});   

        </script>
    <?php
}


function comment_form_set_field()
{
    
    /* get comment */
    $fields = array(
        
        'author' => '<p><label for="author"> ' . __('Name', 'domainreference') . '<span class="required"> *</span></label> ' . ($req ? '' : '') . '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' /></p>',
        
        'email' => '<p><label for="email">' . __('Email', 'domainreference') . '<span class="required"> *</span></label> ' . ($req ? '' : '') . '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
        
        'url' => '<p><label for="url">' . __('Website', 'domainreference') . '</label>' . '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>'
    );
    
    return $fields;
    
}
/* Comment Form */

function comment_form_set_args()
{
    
    $fields = comment_form_set_field();
    
    $args = array(
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'class_submit' => 'global-inputs',
        'name_submit' => 'submit',
        'title_reply' => __('Leave a Comment'),
        'title_reply_to' => __('Leave a Reply to %s'),
        'cancel_reply_link' => __('Cancel Reply'),
        'label_submit' => __('Post Comment'),
        'format' => 'xhtml',
        
        'comment_field' => ' <div class="comment-box"><label for="comment">' . _x('Comment', 'noun') . '</label><textarea id="comment" name="comment" cols="50" rows="10">' . '</textarea></div>',
        
        'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        
        'logged_in_as' => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        
        'comment_notes_before' => ' <div class="comment-notes">' . __('Your email address will not be published. Required fields are marked *') . ($req ? $required_text : '') . '</div>',
        
        'comment_notes_after' => '' . sprintf(__('<code> You may use these HTML tags and attributes:&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code> '), ' <code>' . allowed_tags() . '</code>') . '',
        
        'fields' => apply_filters('comment_form_default_fields', $fields)
    );
    
    return $args;
    
}
/*
 * List of CSS that need to have an image
 * */
function load_background()
{
    
?>
 <style type="text/css">
#banner-container {
    background: url(<?php bloginfo(template_url); ?>/img/HeaderBack.png) repeat;
}

header #left {
    background: url(<?php bloginfo(template_url); ?>/img/logo.fw.png) no-repeat left;
}

header nav ul li.nav-down ul {
    background-color: #181C18;
}

.search-button {
    background: url(<?php bloginfo(template_url); ?>/img/Search.png) no-repeat scroll center center #7eac10;
}

.scroll-top {
    background-image: url(<?php bloginfo(template_url); ?>/img/icon/36.png);
}

.nav-extra .icons {
    background-image: url(<?php bloginfo(template_url); ?>/img/icon/Glyphish-Glyphish-06-magnify.ico);
}

.post-author,.post-date {
    background-image: url(<?php bloginfo(template_url); ?>/img/icon/bullet1.gif);
}

.facebook {
    background-image: url(<?php bloginfo(template_url); ?>/img/icon/Facebook.png);
}

.twitter {
    background-image: url(<?php bloginfo(template_url); ?>/img/icon/Twitter-2.png);
}

@media screen and (max-width:966px) {
    header {
        background-image: url(<?php bloginfo(template_url); ?>/img/backTop.fw.png);
		background-color:#FF0000;
    }

    header #bottom {
        background-image: url(<?php bloginfo(template_url); ?>/img/backTop.fw.png);
    }

    header #left {
        background: url(<?php bloginfo(template_url); ?>/img/HeaderMobile.jpg) no-repeat left;
    /* 
    				FIX background color
    				*****************
    				*/
    }

    header .menu2-img:hover {
        background: url(<?php bloginfo(template_url); ?>/img/menu2.gif) no-repeat left;
    }

    header .menu2-img {
        background: url(<?php bloginfo(template_url); ?>/img/menu.gif) no-repeat left;
    }
}  

</style>
    <?php
}
?>
