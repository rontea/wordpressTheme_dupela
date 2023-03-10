
<div id="slider-body">
    <?php $max = 0; ?>
    <?php $the_query = new WP_Query('category_name=Image Slider'); ?>

    <?php if ($the_query->have_posts()) { ?> 
        <div class="items">
            <?php while ($the_query->have_posts()) {
                $the_query->the_post(); ?> 
        <?php if (has_post_thumbnail()) { ?>


                    <?php
                    $default_attr = array(
                        'alt' => get_the_content(),
                        'title' => get_the_title(),
                        'id' => get_the_permalink()
                    );

                    the_post_thumbnail('image', $default_attr);
                    ?>
                <?php
                } else {
                    ?>
                    <img src="<?php bloginfo('template_url') ?>/js/slider/Theme/default/img/image1.jpg" id="http://dupela.com/about/" alt="This is the information"  title="The page is now live " />

                    <?php }
                ?>

                <?php $max++;
            } ?>
        </div>
        <div id="slider-info">
            <div class="info"> </div>
            <div class="sub">  </div>
            <div class="bottom"></div>
        </div>
        <?php
    } else {
        ?>
        <div class="items">
            <img src="<?php bloginfo('template_url') ?>/js/slider/Theme/default/img/sliderDefault.jpg" id="http://dupela.com/about/" alt="Dupela offers Templates, Links, which aims to share information to new Website developer as myself, so let’s journey to HTML, CSS, and other study in web development such as AJAX and JQUERY; in developing website template from ground up and posting problem encountered, tips, tricks, and techniques on website programming such as PHP."  title="About Dupela" /> 

        </div>
        <div id="slider-info">
            <div class="info"> </div>
            <div class="sub">  </div>
            <div class="bottom"></div>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>

</div>  