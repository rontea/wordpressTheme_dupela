<?php get_header(); ?>

<div id="body-container">
  
<div id="wrap-body">
    <div id="body">
      <h2> Latest Post</h2>
       
      <div class="spacer">  </div>
      <div id="wrapHome-article">
        <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                        get_template_part('content'); 
                endwhile;
                
               else :
                   echo 'There is no Post ';
                    
               endif;
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
<?php get_footer(); ?>