<?php get_header(); ?>

<div id="body-container">
  <div id="wrap-body">
      
      <?php
    if (have_posts()) :
	while (have_posts()) : the_post(); 
        ?>
           <div class="body-title"> <?php the_title(); ?></div>	
                
                <div id="map-google-container">
                    <div id="map-google"> </div> 
                </div>
               
                <div id="contact-info-dupela">
                  <?php  the_content();  ?>       
                  
                  <?php
                    if(is_active_sidebar('sidebar5')){
                        dynamic_sidebar('sidebar5'); 
                    } 
                   ?>
                 <!-- <nav class="socil-icons" > <a href="#" class="facebook"> </a><a href="#" class="twitter"> </a>  </nav>-->
                  <div class="spacer"> </div>
                  <div class="qoutes">
                    The Internet is so big, so powerful and pointless that for some people it is a complete substitute for life.<br>
                    - Andrew Brown
                    </div>
                  </div>   

	<?php 
        endwhile;
    else :
      
        echo '<p>No Post is available</p>';
            
    endif; 
    ?> 
      
      
    
     
  
    <div id="contact-info">
        
      

    <div class="contact-right"> </div> 
    </div>

</div>
<?php get_footer(); ?>