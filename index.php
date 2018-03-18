<?php
	$page 	= "home";
	$title 		= "Eletropaulo nas Escolas";
	$descricao	= "Programa de Eficiência Energética, que dissemina o uso consciente e o combate ao desperdício de energia elétrica e de água.";
	$keywords	= "";
	
	include("includes/head.php");

	include("includes/header.php");
?>


	<input type="hidden" name="me" id="me" value="home">
	<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="assets//Ms1VZf1Vg1J.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="assets//Ms1VZf1Vg1J(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
	<div id="conteudo" data-target="home" class="home">
		<div class="container">
			<div class="col-md-10 col-md-offset-1"></div>
		</div>
<!--
		<div class="slider">
			<ul id="slide">
				< ?php if(isset($banners)) { 
					foreach($banners as $banner) { ?>
					< ?php if($banner["tipo"] == "imagem") { ?>
						<li><a href="< ?=$banner['link']?>" target="_blank"><img src="< ?=base_url().$this->config->item('dir_upload_banner').'images/'.$banner['imagem']?>" alt=""></a></li>
					< ?php }else { ?>
						<li>
							<iframe src="< ?=base_url().$this->config->item('dir_upload_banner').'folder/'.$banner['folder']?>"></iframe>
						</li>
					< ?php } ?>
				< ?php }
				} else { ?>
					<li><img src="< ?=base_url().$this->config->item('dir_assets_site').'images/banner.jpg'?>" alt="< ?=$this->config->item('title_project')?>"></li>
				< ?php }?>
			</ul>
		</div>
-->
        <div id="hot-home"></div>
	
		<div class="midle-content">
			<div class="bg-midle">
				<div class="container">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-sm-6 chamada"><img src="assets//chamada_home.png"></div>
						<div class="col-sm-6 texto">
							<h1 class="titulo ie-8">Para nós, tão importante quanto educar, é conscientizar.</h1>
                            <div class="tracinho"></div>
							<div class="txt">
								<p>A <b>Eletropaulo nas Escolas</b> entende que, cada vez mais, a conscientização é tão importante quanto a educação. Por isso, desenvolveu o <b>Projeto Eletropaulo nas Escolas</b>, que dissemina o uso consciente e seguro de energia elétrica e o combate ao desperdício de energia e água.</p>
								<p>A partir de uma estratégia de mobilização de educadores e estudantes, os Núcleos de Ação para a Eficiência Energética atuam divulgando a cultura da eficiência energética tanto nas escolas quanto nas famílias. Quer ajudar a promover o consumo responsável na sua comunidade? Então, <a href="http://eletropaulonasescolas.com.br/site/pagina/contato">deixe uma mensagem</a> que retornaremos com as orientações. </p>
								<div class="col-xs-12 text-center">
									<div class="bt-cadastrese">
									<!-- div class="titulo ie-8">Você tem interesse em participar?</div-->
										<a href="http://eletropaulonasescolas.com.br/participar"><!-- img src="http://eletropaulonasescolas.com.br/assets/site/images/bt_cadastre-se.png"--></a>									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="video-home">
				<iframe src="assets//w0PeMvIdsuA.html" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div>
		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<!-- <div class="col-sm-12"> -->
						<div class="titulo noticias">Últimas notícias</div>
															<div class="noticia-item">
									<div class="noticia-titulo">HOJE É DIA DA ESCOLA!</div>
									<a href="http://eletropaulonasescolas.com.br/site/noticia/item/hoje-e-dia-da-escola" class="btn-ler-noticia">Ler notícia</a>
								</div>
															<div class="noticia-item">
									<div class="noticia-titulo">UM NOVO OLHAR SOBRE A EFICIÊNCIA ENERGÉTICA</div>
									<a href="http://eletropaulonasescolas.com.br/site/noticia/item/um-novo-olhar-sobre-a-eficiencia-energetica" class="btn-ler-noticia">Ler notícia</a>
								</div>
															<div class="noticia-item">
									<div class="noticia-titulo">PEQUENOS PESQUISADORES... E VIGILANTES!</div>
									<a href="http://eletropaulonasescolas.com.br/site/noticia/item/pequenos-pesquisadores-e-vigilantes" class="btn-ler-noticia">Ler notícia</a>
								</div>
															<div class="noticia-item">
									<div class="noticia-titulo">CONHEÇA ENEDINA ALVES MARQUES</div>
									<a href="http://eletropaulonasescolas.com.br/site/noticia/item/conheca-enedina-alves-marques" class="btn-ler-noticia">Ler notícia</a>
								</div>
														<a href="http://eletropaulonasescolas.com.br/site/noticia" class="btn-mais-noticias">Mais notícias</a>
							<!-- >div class="box box-1 ie-8">
								<div class="img"><img src="</?=base_url().$this->config->item('dir_assets_site')?>images/img_box_01_b.jpg"></div>
								<div class="tipo">
									<div class="icone"><img src="</?=base_url().$this->config->item('dir_assets_site')?>images/ico_box_01.png"></div>
								</div>
								<div class="row">
									<div class="info">
										
										<div class="texto">Começou a primeira etapa do<br>Programa AES Eletropaulo nas Escolas.</div>
									</div>
									<div class="saiba-mais">
										<a href="</?=base_url()?>noticias">
											<div class="txt">saiba mais</div>
											<div class="icon"><img src="</?=base_url().$this->config->item('dir_assets_site')?>images/seta.png"></div>
										</a>
									</div>
								</div>
							</div-->
						<!-- </div> -->
						<!-- >div class="col-sm-12">
							<div class="box box-2 ie-8" style="margin-top:10px;">
								<div class="img"><img src="</?=base_url().$this->config->item('dir_assets_site')?>images/img_box_02_b.jpg"></div>
								<div class="tipo">
									<div class="icone"><img src="</?=base_url().$this->config->item('dir_assets_site')?>images/ico_box_02.png"></div>
								</div>
								<div class="row">
									<div class="info">
										<div class="titulo">simulador</div>
										<div class="texto">Navegue pelos cômodos da casa e saiba<br>o valor aproximado da sua conta de energia.</div>
									</div>
									<div class="saiba-mais">
										<a href="</?=base_url()?>simulador">
											<div class="txt">saiba mais</div>
											<div class="icon"><img src="</?=base_url().$this->config->item('dir_assets_site')?>images/seta.png"></div>
										</a>
									</div>
								</div>
							</div>
						</div-->
					</div>
					<div class="col-sm-6">
						<!-- <div class="col-sm-12"> -->
							<div class="box box-4 ie-8">
								<div class="titulo">
									<img src="assets//ico_facebook_home.png">Eletropaulo <span>no Facebook</span>
								</div>
								<div class="postagem">
									<div id="fb-posts" style="background-color: #fff">
										<div class="fb-post fb_iframe_widget" data-href="https://www.facebook.com/EletropauloNasEscolas/posts/1842166289149335" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=510&amp;href=https%3A%2F%2Fwww.facebook.com%2FEletropauloNasEscolas%2Fposts%2F1842166289149335&amp;locale=pt_BR&amp;sdk=joey"><span style="vertical-align: bottom; width: 552px; height: 988px;"><iframe name="f1d6af0a0c32118" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:post Facebook Social Plugin" src="assets//post.html" style="border: none; visibility: visible; width: 552px; height: 988px;" class=""></iframe></span></div>               
									</div>
								</div>
							</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>		


<?php
	include("includes/footer.php");
?>