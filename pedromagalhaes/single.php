<?php get_header(); ?>

	<div id="background-blog"></div>

	<div class="container" id="blog">
  	
      	<div class=" container main-single">

          <div id="title-single"><span><h1><?php the_title(); ?><hr></h1></span></div>

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <p><?php the_content() ?></p>
          <?php endwhile; else: ?>
          <?php endif; ?>

		  <div class="author">
		  <?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email (), '100'); } ?>
			<div>
				<h3><?php the_author_posts_link(); ?></h3>
				<p><?php the_author_description(); ?></p>
			</div>
		  </div>
		  <!-- FIM DE AUTHOR -->		
		  <div class="comentarios">
		  	<?php comments_template(); ?>
		  </div>		
	    </div>
	    <!-- FIM DE MAIN-SINGLE-->
      <?php get_sidebar(); ?>
    </div>
    <!-- CONTAINER BLOG -->
<?php get_footer(); ?>
