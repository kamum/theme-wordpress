<?php
/*
Template Name: Contato
*/
?>


<?php get_header(); ?>

    
    <div id="image-background"></div>

  	<div class=" container main-page">
       
		<div class=" container col-md-6 box-form">  
		    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		    <p><?php the_content() ?></p>

		    <?php endwhile; else: ?>
		    <?php endif; ?>
		</div>
  	</div>
  <!-- FIM DE MAIN-PAGE-->
<?php get_footer(); ?>