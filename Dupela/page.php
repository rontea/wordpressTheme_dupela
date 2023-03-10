

<?php get_header(); ?> 
<div id="body-container">
    
    <div id="wrap-body">
    
   
    <?php
    if (have_posts()) :
	while (have_posts()) : the_post(); 
        ?>
           <div class="body-title"></div>	
		
           <div class="page-content">
               <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }else{
                   ?>
                    <img src="<?php bloginfo('template_url')?>/img/duPelaDefault.jpg" />
                  <?php
                }
                ?> 
               
               <?php 
                         
                    the_content();
                    ?>
           </div>
                
	<?php 
        endwhile;
    else :
      
        echo '<p>No Post is available</p>';
            
    endif; 
    ?>  
      </div>   
</div> 



 <?php get_footer(); ?>