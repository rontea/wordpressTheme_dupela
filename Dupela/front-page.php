<?php get_header(); ?>

<div id="body-container">
    <div id="slider-wrap">
        <?php get_template_part('slider'); ?>
    </div>

    <div id="wrap-body">

        <div id="body-home">
            <div class=""> Coming Soon </div>
            <div class="body-buttons"> 
                <img src="<?php bloginfo('template_url') ?>/img/D.fw.png" /> 
                <img src="<?php bloginfo('template_url') ?>/img/F.fw.png" /> 
                <img src="<?php bloginfo('template_url') ?>/img/P.fw.png" />
                <img src="<?php bloginfo('template_url') ?>/img/E.fw.png" /> 
                <img src="<?php bloginfo('template_url') ?>/img/U.fw.png" /> 
                <img src="<?php bloginfo('template_url') ?>/img/A.fw.png" /> 
            </div>
            <div class="add-home">
                <?php
                    if (is_active_sidebar('sidebar1')) {
                    dynamic_sidebar('sidebar1');
                     }
                ?>
            </div>
            <div id="project-new"> 
                <?php
                $the_query = new WP_Query('pagename=infopage');

                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        ?>
                        <div class="p-image p-video"> <?php the_post_thumbnail(); ?>  </div>
                        <div class="p-text">
                            <?php
                            the_content('<div class="article-read-more">  Read More </div>');
                        }
                    } wp_reset_postdata();
                    ?> 
                </div>
            </div>

            <?php
            $recentWidth = 1;
            $open2 = false;
            $open1 = false;

            if (get_cat_ID('paf1')) {

                $postsInCat = get_term_by('name', 'paf1', 'category');
                $postsInCat = $postsInCat->count;

                if ($postsInCat >= 5) {
                    $recentWidth++;
                    $open1 = true;
                }
            }

            if (get_cat_ID('paf2')) {

                $postsInCat2 = get_term_by('name', 'paf2', 'category');
                $postsInCat2 = $postsInCat2->count;

                if ($postsInCat2 >= 5) {
                    $recentWidth++;
                    $open2 = true;
                }
            }
            $styeWidth = (100 / $recentWidth) - 4;



            if ($recentWidth == 1) {
                $styel = 'width:' . $styeWidth . '%;margin-left:auto;margin-right:auto;';
            } else {
                $styel = 'width:' . $styeWidth . '%;float:left;';
            }
            ?>


            <?php $the_query = new WP_Query('posts_per_page=5'); ?>

            <div id="quick-link" class="clear-color">
                <article style="<?php echo $styel; ?>"> 

<?php
if (is_active_sidebar('sidebar6')) {
    dynamic_sidebar('sidebar6');
}
?>

                    <ul class="clear-list"> 
                    <?php if ($the_query->have_posts()) { ?> 
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post(); ?> 

                                <li> 
                                    <a href="<?php echo get_the_permalink(); ?>"> 
                                <?php echo get_the_title(); ?>  
                                    </a> 

                                    <?php } ?>

<?php } wp_reset_postdata(); ?>  
                    </ul> 
                </article>
                            <?php
                            if ($open1) {
                                ?> 
                    <article style="<?php echo $styel; ?>"> 
                    <?php
                    if (is_active_sidebar('sidebar7')) {
                        dynamic_sidebar('sidebar7');
                    }
                    ?>

                        <?php $the_query = new WP_Query('category_name=paf1&posts_per_page=5'); ?>
                        <ul class="clear-list"> 
                        <?php if ($the_query->have_posts()) { ?> 
                                <?php while ($the_query->have_posts()) {
                                    $the_query->the_post(); ?> 

                                    <li> 
                                        <a href="<?php echo get_the_permalink(); ?>"> 
                                            <?php echo get_the_title(); ?>  
                                        </a> 

                                    <?php } ?>

                                <?php } wp_reset_postdata(); ?>  
                        </ul> 
                    </article>
                    <?php
                }


                if ($open2) {
                    ?> 
                    <article style="<?php echo $styel; ?>"> 
                        <?php
                        if (is_active_sidebar('sidebar8')) {
                            dynamic_sidebar('sidebar8');
                        }
                        ?>
                            <?php $the_query = new WP_Query('category_name=paf2&posts_per_page=5'); ?>
                        <ul class="clear-list"> 
                            <?php if ($the_query->have_posts()) { ?> 
        <?php while ($the_query->have_posts()) {
            $the_query->the_post(); ?> 

                                    <li> 
                                        <a href="<?php echo get_the_permalink(); ?>"> 
                                        <?php echo get_the_title(); ?>  
                                        </a> 

                                    <?php } ?>

                    <?php } wp_reset_postdata(); ?>  
                        </ul> 
                    </article>
                    <?php
                }
                ?>  
            </div>

        </div>

    </div>

</div>
<?php get_footer(); ?>