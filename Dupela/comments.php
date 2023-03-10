<?php 

?>
<div class="body-message">      

     <?php if ( have_comments() ) : // if have comment ?>
            <div class="comments-title">
                <?php		
                   
                    if(get_comments_number() == 0) :
                         echo 1;
                    else :
                        echo get_comments_number() + 1;
                   endif;
                ?>
            </div>

    <?php endif; ?>
    <?php
  
    $args = comment_form_set_args();
    comment_form($args); 
    
    ?>  
</div>

