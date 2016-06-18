<?php
/*
Template Name: Biografia
*/
?>

<?php get_header(); ?>
	
	<div class="background-black">

	    <div class=" container main-page">

	        <div id="title-biografia"><span><h1>Biografia</h1></span></div>
	        <img class="pull-right img-biografia wow fadeInRight" data-wow-delay="1s" src="<?php bloginfo('template_url'); ?>/images/imagem-biografia.jpg">

	        <div class="wow fadeIn" data-wow-delay="0.7s">
	            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	            <p><?php the_content() ?></p>

	          	<?php endwhile; else: ?>
	          	<?php endif; ?>
	        </div>
	    </div>
	    <!-- FIM DE MAIN-PAGE -->
	</div>
	<!-- FIM DE BACKGROUND-BLACK -->     
<?php get_footer(); ?>