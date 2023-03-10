
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!-- Tell the browser the width of the device -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title -->
<title><?php bloginfo('name');?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/icon/footerLogo.fw.png" /> 


<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"> </script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<?php wp_head(); ?>
    
<?php load_background(); ?>

<?php main_script(); ?>
<body <?php body_class(); ?>>


    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
<div id="wrap"> 
    <div id="banner-container">
  <header>
      <a href="<?php bloginfo('url');?>"> <div id="left"> </div> </a>
    <div id="right">
      <div id="top">
          <nav>  <?php wp_nav_menu(array('theme_location' => 'primary',)); ?>  </nav>
          <div class="nav-extra">
              <a href="#" class="search"> <i class="icons"> </i> SEARCH
                     <div class="search-wrap">
                       <div class="search-box">
                         <div class="search-form">
                             <?php get_search_form(); ?>
                          
                         </div>
                       </div>
                     </div>
              </a> 
           
          </div>    
      </div>
      <div id="bottom">
        <div class="menu2-img">  </div>
      </div>
    </div>
  
  <div id="menu2">
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'primary',)); ?>
        <ul>
        
      <div class="search-wrap-mobile">
        <div class="search-box">
          <div class="search-form">
           
            <?php get_search_form(); ?>
          </div>
        </div>
      </div><li></ul>
    </nav>
  </div>
      </header>

</div>