
    <article>
        <div class="article-title"><a href="<?php echo get_the_permalink();?>"> <?php echo get_the_title(); ?> </a> </div>
        <div class="article-body"> 
            <?php 
                
            
            if ( has_post_thumbnail() ) { 
                ?>
                 <div class="article-image">
                <?php
                    the_post_thumbnail();
                ?>
                 </div>
                <?php
                 if(is_search()){
                     
                     the_excerpt();
                     
                 }else{
                     
                        global $more;    // Declare global $more (before the loop).
                        $more = 0;       // Set (inside the loop) to display all content, including text below more.
                        
                      the_content('<div class="article-read-more">  Read More </div>');  
                      
                 } 
                
            }else{
                if(is_search()){
                     
                     the_excerpt();
                     
                 }else{
                     
                        global $more;    // Declare global $more (before the loop).
                        $more = 0;       // Set (inside the loop) to display all content, including text below more.
                        
                      the_content('<div class="article-read-more">  Read More </div>');  
                      
                 } 
                
            }
              
                  
            ?>
        </div>
    </article>
    
