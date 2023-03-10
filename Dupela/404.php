<?php get_header(); ?>
/*TEST is*/
<div id="body-container">
  <div id="wrap-body">
    <div id="body">
      <div id="not-found">
          
          <?php _e( 'Not Found', 'dupela' ); ?>
          
        <div class="search-wrap">
            <div class="search-box">
                <div class="search-form">
                 <?php get_search_form(); ?>     
                </div>
            </div>
        </div>
      </div>
    </div>
    <div id="wrapper-rightNav">
      <div class="heading">
        <div class="title"> Quick Links </div>
      </div>
      <div class="error-links">
         <?php  wp_nav_menu($args);  ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>