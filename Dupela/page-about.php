<?php get_header(); ?>
<div id="body-container">
  <div id="wrap-body">
    <?php
    if (have_posts()) :
	while (have_posts()) : the_post(); 
        ?>
           <div class="body-title"> <?php the_title(); ?></div>	
		<div class="about-image"> 
                <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }else{
                   ?>
                    <img src="<?php bloginfo('template_url')?>/img/duPelaDefault.jpg" />
                  <?php
                }
                ?> 
                </div>
                <div class="about-right"> 
                    <?php  the_content();  ?>
                <div class="disclaimer"> All information in the website are free to use and the website is not liable for any damage (use it at your own risk) and all information taken from other website as reference are property of their respected owner.</div>
                </div>
	<?php 
        endwhile;
    else :
      
        echo '<p>No Post is available</p>';
            
    endif; 
    ?>  

    <div class="spacer"> </div>
    <div id="about-me">
      <div class="image-holder"> <?php echo get_avatar('dupela@gmail.com', 200 ); ?> </div>
      
      <div class="about-me-info">
          <?php    
            /* check if this is active */
            if(is_active_sidebar('sidebar3')){
                dynamic_sidebar('sidebar3'); 
            } 
         ?>
        
        <div class="aboutme-social">
          <nav class="socil-icons"> <a href="#" class="facebook"> </a><a href="#" class="twitter"> </a></nav>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>