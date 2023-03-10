
<?php get_header(); ?>
<div id="body-container">
  <div id="wrap-body">
     <div class="body-title">
        <?php 
 	if(is_category()){
		single_cat_title();
	}else if(is_tag()){
		single_tag_title();
	}else if(is_author()){
		the_post(); echo  'Author Archives: ' . get_the_author();
		rewind_posts();  // so the loop can go on unaffected
		
	}else if(is_day()){
	
		echo 'Daily Archives ' . get_the_date();
	}else if(is_month()){
		echo 'Monthly Archives ' . get_the_date('F Y');
	}else if (is_year()){
		echo 'Year Archives ' . get_the_date('Y');
	} else{
        
            echo "None";
        } 
         ?>
     </div>
    <div id="body">
     <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?> 
        <div class="article-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </div>
        <article class="article-body">
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>
    <?php endif; ?> 
    </div>
   
     <?php get_sidebar(); ?>
     
   
    
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
        
<?php get_footer(); ?>
