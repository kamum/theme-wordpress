	

	<footer>

		<div class="row row-cinza-claro">

			<div class="container">
				<div class="row row-colunas">
					<div class="col-md-4 col-post-mais-vistos hidden-xs">

						<h4>POSTS MAIS VISTOS</h4>

						<?php if(function_exists('get_most_viewed')): ?>
						<ul class="list-unstyled">
					  		<li>
								<h5><?php get_most_viewed('post',4); ?></h5>
					    	</li>
						</ul>
						<?php endif; ?>

					</div>
					<div class="col-md-4 col-links hidden-xs">

						<h4>LINKS</h4>

						<ul class="list-unstyled">
							<li><a href="http://magillamusic.com.br/blog/"><i class="fa fa-angle-right">Blog</i></a></li>
							<li><a href="http://magillamusic.com.br/biografia/"><i class="fa fa-angle-right">Biografia</i></a></li>
							<li><a href="http://magillamusic.com.br/contato/"><i class="fa fa-angle-right">Contato</i></a></li>
							<li><a href="http://magillamusic.com.br/videos/"><i class="fa fa-angle-right">Vídeos</i></a></li>
						</ul>

					</div>
					<!-- FIM DE COL-LINKS-->
					<div class="col-md-4 col-entre-contato">

						<h4 class="hidden-xs">ENTRE EM CONTATO</h4>
						
						<address class="hidden-xs">
							<a href="tel:21967001542"><i class="fa fa-phone">Telefone Celular</i></a>
						</address>
						
						<div class="row-fluid visible-xs">
							<div class="col-xs-6">
								<a href="tel:21967001542" class="btn btn-footer"><i class="fa fa-phone">&nbsp;Ligar</i></a>
							</div>
						</div>
						
						<ul class="list-unstyled list-socials">
							<li>
								<a href="https://www.facebook.com/ilmagilla" target="_blank"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/ilmagilla/" target="_blank"><i class="fa fa-instagram"></i></a>
							</li>
							<li class="page-up">
								<a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a>
							</li>
						</ul>
					</div>
					<!-- FIM DE COL-ENTRE-CONTATO-->
				</div>
				<!-- FIM DE ROW ROW-COLUNAS-->
			</div>
			<!-- FIM DE CONTAINER -->
		</div>
		<!-- FIM DW ROW-CINZA-CLARO -->
		<div class="row row-cinza-escuro">

			<div class="container copyright-mobile">
				<p class="pull-left text-creditos">Copyright © 2016 Pedro Moreira Magalhães todos os direitos reservados.Criado por Jonathan Magalhães</p>
			</div>
		</div>
		<!-- FIM DE ROW-CINZA-ESCURO -->
	</footer>
	<!-- FIM DE FOOTER -->   
    <?php wp_footer(); ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/efeitos.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <!-- FACEBOOK -->
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  </body>
</html>