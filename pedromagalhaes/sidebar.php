<sidebar id="sidebar" class="pull-right">


	<div id="sidebar-perfil">
		<ul>
			<img class="img-circle imagem-perfil" src="<?php bloginfo('template_url'); ?>/images/pedro05.jpg">
		</ul>
		<div class="text-perfil"><p>Carioca,Violinista,Scholar and Gentleman.</p></div>
	</div>
	<!-- FIM DE SIDEBAR-PERFIL -->
	<div id="sidebar-vistos">

		<div id="title-vistos">

			<span>POSTS MAIS VISTOS</span>
		</div>
		<!-- FIM DE TITLE-VISTOS -->	
		<?php if(function_exists('get_most_viewed')): ?>
			<ul>
			  	<li>
					<?php get_most_viewed('post',5); ?>
			    </li>
			</ul>
		<?php endif; ?>
	</div>
	<!-- FIM DE SIDEBAR-VISTOS -->
	<div id="sidebar-coment">

		<div id="title-coment">
			<span>MAIS COMENTADOS</span>
		</div>
		<!-- FIM DE TITLE-COMENT -->	
		<ul>
			<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0, 5");
			foreach($result as $post){
			setup_postdata($post);
			$postid = $post->ID;
			$title = $post->post_title;
			$commentcount = $post->comment_count;
			if($commentcount != 0) { ?>
		
			<li>
				<span class="coment-number"><?php $i = $i; $i++; echo $i ;?></span>
				<a href="<?php the_permalink(); ?>"><?php echo $title; ?>(<?php echo $commentcount; ?>)</a>
			</li>
			<?php }?>
			<?php }?>
		</ul>
	</div>
	<!-- FIM DE SIDEBAR-COMENT -->
	<div id="main-sidebar"><?php dynamic_sidebar('main-sidebar') ?></div>
	
	<div id="sidebar-facebook">

		<div id="title-facebook">
			<span>FACEBOOK</span>
			<div id="face-box">
				<div class="fb-page" data-href="https://www.facebook.com/magillajazz/" data-tabs="timeline" data-width="280px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/magillajazz/"><a href="https://www.facebook.com/magillajazz/">Magilla</a></blockquote></div></div>
			</div>
	
			<div id="like-box">
				<div class="fb-like" data-href="https://www.facebook.com/magillajazz/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
		</div>
		<!-- FIM DE TITLE-FACEBOOK-->
	</div>
	<!-- FIM DE SIDEBAR-FACEBOOK-->
</sidebar>
<!-- FIM DE SIDEBAR -->		