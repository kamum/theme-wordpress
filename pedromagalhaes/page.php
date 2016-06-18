<?php get_header(); ?>

    
  	<div class="background-black">

      	<div class=" container main-page">
          <div id="title-page"><span><h1><?php the_title(); ?><hr><h1></span></div>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		    <p><?php the_content() ?></p>
          <?php endwhile; else: ?>
          <?php endif; ?>
      	</div>
      <!-- FIM DE MAIN-PAGE-->
    </div>
    <!-- FIM DE BACKGROUND-BLACK-->
<?php get_footer(); ?>
