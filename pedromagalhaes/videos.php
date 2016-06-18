<?php
/*
Template Name: Videos
*/
?>

<?php get_header(); ?>
	
	<div class="background-black">
        <div class=" container main-page">
            <div id="title-biografia"><span><h1>Vídeos</h1></span></div>
            <div class="container col-md-12 campo-videos">
            <video src="<?php bloginfo('template_url'); ?>/mp4/pedro-arraial do-cabo.mp4" controls class="wow fadeIn"></video>
            <video src="<?php bloginfo('template_url'); ?>/mp4/pedro-trio.mp4" controls class="wow fadeIn"></video>
            </div>
        </div>
        <!-- FIM DE MAIN-PAGE-->
  	</div>
  	<!-- FIM DE BACKGROUND-BLACK-->     
<?php get_footer(); ?>