<?php $max = 0; ?>
<?php $the_query3 = new WP_Query('category_name=featured2'); ?>
        <?php if ( $the_query3->have_posts() ) { ?> 
      <div class="box-wrap">
       
           <?php while ($the_query3->have_posts() && $max <= 2) { $the_query3->the_post(); ?> 
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="box-small">  <?php the_post_thumbnail(); ?>
                      <div class="box-free"> </div>
                      <div class="box-title-clone"> </div>
                      <div class="box-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></div>
                      <div class="box-user">  <?php the_author(); ?>    <?php echo get_the_date(); ?></div>
                    </div>
                    <div class="spacer-left"> </div>
                     <?php }else{ ?>
                     <div class="box-small">  
                      <div class="box-free"> </div>
                      <div class="box-title-clone"> </div>
                      <div class="box-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></div>
                      <div class="box-user">  <?php the_author(); ?>   <?php echo get_the_date(); ?></div>
                    </div>
                         
                     <?php } ?>
                <?php $max++; } ?>
        </div>
        <?php  }else{
                ?>
                    
                         <div class="box-small"> 
                            <div class="box-free"> </div>
                            <div class="box-title-clone"> </div>
                            <div class="box-title"><a href="#"> No Item Available in featured2 </a></div>
                            <div class="box-user">  </div>
                          </div>
                          
                    
                    
                   
            <?php
            } 
            wp_reset_postdata(); ?>
      