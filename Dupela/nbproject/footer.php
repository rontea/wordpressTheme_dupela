<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="footer-container">
  <div id="wrap-footer">
    <footer>
        <div class="right"><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/img/footerLogo.fw.png" /> </a>
        <nav>
          <div class="footer-title"> Quick Links </div>
        
            <?php  wp_nav_menu($args);  ?>
         
        </nav>
        <nav>
            <ul class="widget">
            <?php    
            /* check if this is active */
            if(is_active_sidebar('sidebar2')){
              dynamic_sidebar('sidebar2'); 
            } 
            ?>
            </ul>
        </nav>
        <div class="social-right">
            <?php
            if(is_active_sidebar('sidebar5')){
                dynamic_sidebar('sidebar5'); 
            } 
            ?>
            
        </div>
      </div>
        <div class="bottom"> <?php bloginfo(); ?> © 2015 Alpha V1</div>
    </footer>
  </div>
</div>
</div>
<a id="back-top" href="#">
<div class="scroll-top"> </div>
</a>
        <?php wp_footer(); ?>
</body>
</html>