		<footer class="footer">
			<div class="container">
				<div class="col-md-12">
					<div class="pontilhado top"></div>
					
					<div class="links row">
						<div class="col col-md-1">
							<div id="home" class="top active-bottom"><a href="index.php">início</a></div>
						</div>
						
						<div class="col col-md-1">
							<div id="projetos" class="top"><a href="projeto.php#sobreprojeto">o projeto</a></div>
							<div class="sub"><a href="projeto.php#sobreprojeto">Sobre o Projeto</a></div>
							<div class="sub"><a href="projeto.php#abaregulamento">Conheça o Regulamento</a></div>
						</div>
						
						<div class="col col-md-1">
							<div id="atividades" class="top"><a href="atividades.php">atividades</a></div>
							<div class="sub"><a href="atividades.php#naee">NAEE</a></div>
							<div class="sub"><a href="atividades.php#quem-pode-participar">Quem pode participar</a></div>
							<div class="sub"><a href="atividades.php#resultados">Resultados</a></div>
							<div class="sub"><a href="atividades.php#material-didatico">Material Didático</a></div>
						</div>
						
						<div class="col col-md-2">
							<div id="dicas" class="top"><a href="reconhecimento.php">reconhecimento</a></div>

							<div id="dicas" class="top"><a href="dicas.php">dicas de economia</a></div>

							<div id="novidades" class="top"><a href="novidades.php">Novidades</a></div>
						</div>
						
						<div class="col col-md-1">
							<div id="cadastro" class="top"><a href="contato">Contato</a></div>
							
							<div id="cadastro" class="top"><a href="contato">Sobre a Eletropaulo</a></div>
						</div>
						
						<div class="col col-md-1 social">
							<div class="facebook">
								<a href="https://www.facebook.com/AESEletropaulo" target="_blank" title="Ir para a página no Facebook">
									<img src="assets/images/icons/icon_facebook.png">
									<span class="facebook__text">Facebook</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer__bottom">
				<div class="container">
					<div class="footer-logos">
						<a href="https://www.aeseletropaulo.com.br/" target="_blank" class="footer-logos__aes">
							<img src="assets/images/logos/logo-aes-eletropaulo.svg">
						</a>
				
						<a href="https://www.aeseletropaulo.com.br/" target="_blank" class="footer-logos__eletro">
							<img src="assets/images/logos/logo-eletropaulo.svg">
						</a>
						
						<a href="http://www.aneel.gov.br/" target="_blank" class="footer-logos__aneel">
							<img src="assets/images/logos/logo-aneel.svg">
						</a>
					</div>
				</div>
				
				<div class="container volta">
					<div class="txt col-xs-4 col-xs-offset-2">Voltar<br>ao topo</div>
					<div class="img col-xs-4"><img src="assets//bt_voltar-ao-topo.png"></div>
				</div>
			</div>
		</footer>


		<?php include("includes/scripts.php") ?>

		
		<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
		
		<div id="lightbox" class="lightbox" style="display: none;">
			<div class="lb-outerContainer">
				<div class="lb-container">
					<div class="lb-closeContainer">
						<a class="lb-close"></a>
					</div>
					<a href="http://google.com/" class="lb-download"></a>
					<img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
					<div class="lb-nav">
						<a class="lb-prev" href="http://eletropaulonasescolas.com.br/"></a>
						<a class="lb-next" href="http://eletropaulonasescolas.com.br/"></a>
					</div>
					<div class="lb-loader">
						<a class="lb-cancel"></a>
					</div>
				</div>
			</div>
			
			<div class="lb-dataContainer">
				<div class="lb-data">
					<div class="lb-details">
						<p><span class="lb-caption"></span></p>
						<p><span class="lb-content"></span></p>
						<span class="lb-number"></span>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>