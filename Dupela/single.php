<?php get_header(); ?> 
    
<div id="body-container">
  <div id="wrap-body">
     
    
    
    <div id="body">
     <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?> 
       
        <div class="article-title"> <?php the_title(); ?> </div>
          <div class="post-info">
             <div class="post-date"> <?php echo get_the_date(); ?> </div>
             <div class="post-author"> <?php the_author(); ?> </div>
          </div>
        <article class="article-body">
                <div class="add-mobile"> 
                <?php
                     /* check if this is active */
                if(is_active_sidebar('sidebar1')){
                    dynamic_sidebar('sidebar1'); 
                } ?>
                </div>
            <?php the_post_thumbnail(); ?>
          <?php the_content(); $postid = get_the_ID(); ?>
        </article>
      <?php endwhile; ?>
     <?php endif; ?> 
    </div>
   
     <?php get_sidebar(); ?>
     <div class="post-cat">
      <?php 
        $array_category = get_the_category();
	$seperator = ", ";
	$output = "";
					
            if($array_category){
						
		foreach ($array_category as $category){
		$output .= ' <a href="'.get_category_link($category->term_id) .'"> '. $category->cat_name .' </a>' . $seperator;					
		}
		echo trim($output, $seperator);
            }	
     ?>
    </div>
   
    
    <div class="post-info">
      <div class="post-next">  <?php previous_post_link('%link','Previous Blog Post');?> </div>
      <div class="post-author"> <?php the_author(); ?> </div>
       <div class="post-date"> <?php the_date();?> </div>
      <div class="post-next">  <?php next_post_link('%link',"Next Blog Post");?> </div>
       
    </div>
     


      <div class="fb-comments" data-href="<?php echo the_permalink();?>" data-width="100%" data-numposts="5"></div>
       
          
      
    </div> 
</div>
    <?php
        /* This section is temporarily removed
         * 
        <div class="body-message">
          <div class="postby">
            <div class="person">Written by <?php the_author();?></div>
            <div class="postinfo-wrap">
              <div class="avatar-post"> <img src="img/unknown.png" /> </div>
              <div class="avatar-info"> <?php echo get_the_author_meta('description'); ?> </div>
            </div>
            <div class="about">View all posts by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?> </a></div>
          </div>
          <?php comments_template(); ?>
      </div>
    </div>	
         * 
       */
   ?>          

<?php get_footer(); ?>