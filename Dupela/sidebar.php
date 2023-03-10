<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="wrapper-rightNav">
    <aside>
        <div class="heading">
            <div class="title"> Recent Article </div>
        </div>
<?php $the_query = new WP_Query('posts_per_page=5'); ?>
        <?php if ($the_query->have_posts()) { ?> 
            <?php while ($the_query->have_posts()) {
                $the_query->the_post(); ?>  
                <div class="articleLink"> <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?> </a>  </div>
            <?php } ?>
        <?php } wp_reset_postdata(); ?> 

    </aside>
    <?php
    if (is_single()) {
        /* Get the slug */
        $cat = "category_name=";
        $catPlus = "";
        $count = 0;
        $categories = get_the_category($postid = false);
        if (!empty($categories)) {
            foreach ($categories as $category) {

                if ($count == 0) {
                    $catPlus = $category->slug;
                    $count++;
                } else {
                    $catPlus = $catPlus.'&#43;'.$category->slug;
                }
            }
        }
        $cat = $cat . $catPlus;
       
        ?>
        <aside>
           
        <?php $the_query = new WP_Query($cat); ?>
    <?php if ($the_query->have_posts()) { ?> 
             <div class="heading">
                <div class="title"> Related Items </div>
            </div>

        <?php while ($the_query->have_posts()) {
            $the_query->the_post(); ?>  
                    <div class="articleLink"> <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?> </a>  </div>
                <?php } ?>
            <?php } wp_reset_postdata(); ?> 
        </aside>
            <?php
        }


        /* check if this is active */
        if (is_active_sidebar('sidebar1')) {
            dynamic_sidebar('sidebar1');
        }

        if (is_active_sidebar('sidebar4')) {
            dynamic_sidebar('sidebar4');
        }
        ?>
</div>
