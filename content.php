<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
   if(is_front_page()):
?>
    <h2><?php  the_title(); ?></h2>
<?php else: ?>
    <h1><?php  the_title(); ?></h1>
<?php endif; ?>  
    <div>
        <?php  the_content(); ?> 
    </div>
<?php
    endwhile; 
endif; 