<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
 <?php get_header(); ?>
 <div id="body-container">
  <div id="wrap-body">
    <div class="body-title"> </div>
    
     <div class="article-box-wrap"> 
    <?php
    /*
     * Post only 2 and get the category 
     */
    $the_query = new WP_Query('posts_per_page=2&category_name=featured1'); 
     if ( $the_query->have_posts() ) {  
		while ($the_query->have_posts()) { $the_query->the_post(); 
              
               
                if($the_query->current_post == 1){ ?>

                    <div class="article-box-small">  <?php the_post_thumbnail(); ?>
                        <div class="article-free-box"> </div>
                        <div class="article-box-title-clone"> </div>
                        <div class="article-box-title"><a href="<?php echo get_the_permalink();  ?>"> <?php echo get_the_title();?> </a></div>
                        <div class="article-user"> TEST </div>
                    </div>
                   
                 <?php  }else{ ?>
             
                    <div class="article-box">  <?php the_post_thumbnail(); ?>
                        <div class="article-free-box"> </div>
                        <div class="article-box-title-clone"> </div>
                        <div class="article-box-title"> <a href="<?php echo get_the_permalink();?>"> <?php echo get_the_title();?> </a></div>
                        <div class="article-user"> Test </div>
        
                    </div>
                  
    <?php    
                }               
        } 
    }else{
    ?>
         <div class="article-box"> No Image 
            <div class="article-free-box"> </div>
            <div class="article-box-title-clone"> </div>
            <div class="article-box-title"> <a href="#"> No Item Has Been Define in featured1</a></div>
            <div class="article-user"></div>
        </div>
        <div class="article-box-small">  No Image 
            <div class="article-free-box"> </div>
            <div class="article-box-title-clone"> </div>
            <div class="article-box-title"><a href="#"> No Item Has Been Define in featured1</a></div>
            <div class="article-user"> TEST </div>
        </div>           
    <?php
    } wp_reset_postdata();
    ?>

    </div>
    <div id="body">
      <h2> Featured </h2>
       <?php get_template_part('boxpage'); ?>
      <div class="spacer"> </div>
      <div id="wrapHome-article">

         <?php  
          
           $the_query2 = new WP_Query('post'); 
            if ( $the_query2->have_posts() ) {  
                   while ( $the_query2->have_posts() ) { $the_query2->the_post();
                         get_template_part('content'); 
                   }
            }wp_reset_postdata();
         ?>
         
          
     
      </div>
         <div id="page-number">
       <?php // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'dupela' ),
				'next_text'          => __( 'Next page', 'dupela' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'dupela' ) . ' </span>',
                                'mid_size' => 5,
                                
        ) ); ?>
        
      </div>
    </div>
     <?php get_sidebar(); ?>
  </div>
</div>
  
  
  </div>
</div>
  <?php get_footer(); ?>