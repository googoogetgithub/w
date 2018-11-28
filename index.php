<?php
get_header();
echo __FILE__;
?>

<h1>ทดสอบภาษาไทย</h1>




<?php

if(have_posts()) :
  while(have_posts()):
     the_post(); ?>

     <h3><?php the_title(); ?></h3>



     <div class="post-thumbnails"><?php the_post_thumbnail('thumbnail');?></div>
     <small><?php echo the_time('F j,Y g:i a');?></small><br />
     Posted under <u><?php the_category(); ?></u>
     <p><?php the_content(); ?></p>

     <hr style="color:red;">
     <?php

  endwhile;
endif;

?>


<?php get_footer();?>
