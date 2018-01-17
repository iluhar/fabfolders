<?php
if( count(get_included_files()) == 1 )
{
	header('HTTP/1.1 404 Not Found');
	exit();
}
include 'config.php';
preg_match('/^.*\//',$_SERVER['REQUEST_URI'],$matches);
$host .= $matches[0];
function sanitize_output($buffer)
{
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s'
        );
    $replace = array(
        '>',
        '<',
        '\\1'
        );
  $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>
<!DOCTYPE html>
<html lang="pt">
	<head>

		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
		<meta content="IE=EmulateIE8" http-equiv="X-UA-Compatible"/>
		<title>Abuso de um novo queimador de gordura provoca atrofia</title>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.png" rel="icon" type="image/x-icon">
    <style>
*{margin:0;padding:0}body{width:100%;font-size:100%;background-color:#fff;overflow-x:hidden}a{text-decoration:none;color:#0e64bc}a img{border:none}a:hover{text-decoration:underline;color:red}input:focus{outline:none}ul{list-style-type:none}#centering{margin:7px auto 0;position:relative;width:94%;max-width:977px}#logo{float:left;padding-left:17px;width:208px;height:73px;margin-bottom:13px}.mail_b{width:92px}.read_us{position:absolute;width:114px;right:11.3%;top:39px}.read_us a{float:left;width:26px;height:26px;font-size:0;line-height:0;margin-right:12px;background:url(img/read_us.png) no-repeat left top}#vk{background-position:left center}#twitt{background-position:left bottom}#social_label{position:absolute;width:114px;right:11.3%;top:16px;color:#c8c8c8;font:13px Arial;text-indent:0}img{border:medium none}.login_td{position:absolute;left:271px;top:20px;font:12px Arial,sans-serif}.top_link_login_authorized{color:#969696;text-decoration:underline}.top_link_login{color:#0e64bc;text-decoration:underline;cursor:pointer}.ya-site-form__input{position:absolute;width:32%;padding-right:77px;height:26px;left:271px;top:39px;z-index:1}.ya-site-form__input-text{float:left;width:100%;border:1px solid #dbdbdb;height:24px;margin-bottom:-26px;font:13px Arial;font-style:oblique}#Buscar{float:right;margin:0 -77px 0 0;background:none repeat scroll 0 0 #90ee90!important;width:77px;color:#000;font-size:13px;border:1px solid #777;border-radius:0 13px 13px 0;height:26px;padding:0;cursor:pointer;z-index:999}#content{float:left;width:100%;position:relative;padding-top:76px;background-color:#fff;border-radius:6px;margin-bottom:19px;padding-bottom:20px;behavior:url(PIE/PIE.html);-webkit-box-shadow:0 0 4px 3px #dbdbdb;-moz-box-shadow:0 0 4px 3px #dbdbdb;box-shadow:0 0 4px 3px #dbdbdb}#content p{text-indent:20px}#patch{position:absolute;left:20px;top:43px}#patch,#patch a{color:#818181;font:11px Arial,sans-serif}#nav{position:absolute;height:25px;width:98.2%;left:.5%;padding-left:.5%;background:#2c99c8;padding-right:.5%;top:5px;display:table;background:-moz-linear-gradient(top,rgba(44,153,200,1) 0%,rgba(44,153,200,1) 0%,rgba(22,128,177,1) 100%);background:-webkit-linear-gradient(top,rgba(44,153,200,1) 0%,rgba(44,153,200,1) 0%,rgba(22,128,177,1) 100%);background:linear-gradient(to bottom,rgba(44,153,200,1) 0%,rgba(44,153,200,1) 0%,rgba(22,128,177,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2c99c8',endColorstr='#1680b1',GradientType=0)}#m_m_left_item{display:block;width:5px;height:25px;position:absolute;z-index:9999;left:0;top:0;background:url(img/menu_c.jpg) no-repeat left top}#m_m_right_item{display:block;width:5px;height:25px;position:absolute;z-index:9999;right:0;top:0;background:url(img/menu_c.jpg) no-repeat right top}#nav a{position:relative;float:left;color:#fff;padding-top:4px;padding-bottom:0;height:21px;font:13px Arial,sans-serif;text-align:center;cursor:pointer}#nav #home{width:4.3%}#Art{width:10.1%}#Noticias{width:9.4%}#Video{width:7.6%}#Presen{width:13.5%}#Pruebas{width:9.6%}#Enfermedades{width:14.6%}#Farmacia{width:10.5%}#Calculadoras{width:13.5%}#Foro{background:none;width:6.9%}#nav a span{float:left;width:2px;height:17px;margin:0;background:url(img/divaider.png) no-repeat right top}#nav a,#nav a:hover{text-decoration:none}#nav a:hover{background:#1a84b5;background:-moz-linear-gradient(top,rgba(26,132,181,1) 0%,rgba(26,132,181,1) 0%,rgba(44,153,200,1) 100%);background:-webkit-linear-gradient(top,rgba(26,132,181,1) 0%,rgba(26,132,181,1) 0%,rgba(44,153,200,1) 100%);background:linear-gradient(to bottom,rgba(26,132,181,1) 0%,rgba(26,132,181,1) 0%,rgba(44,153,200,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1a84b5',endColorstr='#2c99c8',GradientType=0)}#home img{position:absolute;left:16px;top:8px}#main{display:table-cell;padding:0 311px 0 15px;text-align:left}#main p a:hover{text-decoration:none}p{font:87.5% Tahoma,Arial,sans-serif;color:#2b2b2b;text-align:justify;text-indent:20px;padding:3px 0 4px;line-height:129.7%}h1{font:162.5% Georgia,sans-serif;width:120%;font-weight:400;line-height:28px;color:#2b2b2b;margin-bottom:10px}h3{font:100% Tahoma;color:#333;font-weight:700}.startdate{font:75% Tahoma,Arial,sans-serif;font-weight:400;color:#818181;margin-bottom:32px;padding-top:1px}center{text-align:center;overflow-x:hidden}center img{width:100%; max-width:400px;}.holder{padding:15px 0 15px 70px;min-height:74px;position:relative;margin:10px 0;border-top:1px dashed #666}.pic{position:absolute;left:0;top:15px;padding:6px;width:50px}.title a{font:italic 14px/1em Georgia,"Times New Roman",Times,serif;color:#000;text-decoration:none}.holder p{margin:.5em 0}.holder .date{margin-left:10px;border-left:1px solid #c4c4c4;padding-left:10px;text-transform:uppercase;color:#999;font:italic 12px/1em Arial,Helvetica,sans-serif}.ord_button{background-color:#FF5C73;color:#fff;display:inline-block;padding:15px 30px;font:28px Arial,sans-serif;behavior:url(PIE/PIE.html);font-weight:700;box-shadow:2px 3px 8px #999;text-decoration:none;border-radius:8px;border:3px solid #fff;margin:20px 0 30px;line-height:28px}.ord_button:hover{background-color:#7CBC1F;box-shadow:2px 3px 3px #999;text-decoration:none;color:#fff}#tab1_span{text-decoration:underline;padding:2px 0;font:123.0769% Georgia;color:#88a906;cursor:default}#aside{position:absolute;width:240px;top:76px;right:14px;text-align:left;font:13px Arial,sans-serif}.div_3col{float:left;width:240px;margin-left:10px;padding-bottom:30px}.div_3col span,.div_3col img{display:block;width:100%;max-width:198px;margin-bottom:17px}#aside p{font-size:100%;text-indent:0;text-align:left}#aside_bot_bold_ul{font-weight:700;list-style-type:disc;margin-bottom:17px}.CollapsiblePanelContent{margin:0;font-weight:400;color:#3789b9}.pic img{width:50px;height:50px}@media screen and (max-width:1024px){#social_label,.read_us{right:1%}#home img{left:8px}h1{width:100%}}@media screen and (max-width:800px){#main,#aside,.div_3col{display:block;position:static;padding:0 0 30px;width:94%;margin:0 auto}h1{width:100%}#patch{width:94%;left:3%}.read_us,#social_label{display:none}#aside{width:70%;min-width:200px;padding-top:15px;font-size:87.5%}.div_3col span{max-width:100%}.div_3col img{margin:0 auto 17px}#aside_bot_bold_ul{list-style-type:none}#tab1_span{text-align:center}}@media screen and (max-width:700px){#nav a,.ya-site-form__input,.login_td,#m_m_right_item,#m_m_left_item{display:none}#nav{width:96%;margin-left:1%}#nav,#home{-webkit-border-top-left-radius:6px;-webkit-border-top-right-radius:6px;-moz-border-radius-topleft:6px;-moz-border-radius-topright:6px;border-top-left-radius:6px;border-top-right-radius:6px}#nav #home{display:block;width:100%}#home img{position:static;text-align:center}}@media screen and (max-width:412px){.title{position:absolute;left:66px;top:18px}.holder{position:relative;padding-top:70px;padding-left:0}.description_text,.box h1,.box .startdate{display:block;width:94%;margin:0 3%!important}}@media screen and (-webkit-min-device-pixel-ratio:0){::i-block-chrome,#nav{min-width:99.2%;width:99.2%}}
    </style>
	</head>
	<body>
		<div id="centering">
			<a href="<?php echo $url; ?>" target="_blank" id="logo"><img alt="logo" src="img/logo-trans.png" width="208"/></a>
			<div class="login_td"></div>

			<div class="read_us">
				<a href="<?php echo $url; ?>" target="_blank" id="facebook" title="Facebook"> </a>
				<a href="<?php echo $url; ?>" target="_blank" id="twitt" title="Twitter"> </a>
			</div>
			<div id="content">
				<div id="nav">
					<span id="m_m_left_item"> </span>
					<a href="<?php echo $url; ?>" target="_blank" id="home"> <img alt="" height="10" src="img/home.png" width="11"/></a>
					<a href="<?php echo $url; ?>" target="_blank" id="Art"><span> </span>Artigos</a>
					<a href="<?php echo $url; ?>" target="_blank" id="Noticias"><span> </span>Novidades </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Video"><span> </span>Vídeos </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Presen"><span> </span>Apresentações </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Pruebas"><span> </span>Testes </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Enfermedades"><span> </span>Doenças </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Farmacia"><span> </span>Farmácias </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Calculadoras"><span> </span>Calculadoras </a>
					<a href="<?php echo $url; ?>" target="_blank" id="Foro"><span> </span>Fórum</a>
					<span id="m_m_right_item"> </span>
				</div>
				<div id="patch">
					<a href="<?php echo $url; ?>" target="_blank">Início </a> <span>  &gt;&gt;  </span>
					<a href="<?php echo $url; ?>" target="_blank">Saúde </a> <span>  &gt;&gt;  </span>
					<a href="<?php echo $url; ?>" target="_blank">Artigos </a> <span>  &gt;&gt;  </span>
					<span> Abuso de um novo queimador de gordura provoca distrofia </span>
				</div>
				<div id="main">
					<h1>Abuso de um novo queimador de gordura provoca distrofia</h1>
					<h5>
						<w class="prDate"></w>
					</h5>
					<p>
						Para obter um corpo mais lindo, as mulheres emagrecem cada vez mais. Agora perder peso é muito simples - com a ajuda do suplemento <b> <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>  </b> para queimar gordura. Os médicos estão preocupados.
					</p>
					<center>
						<img alt="" src="img/anorexia.jpg" style="max-width: 500px;" width="100%"/>
					</center>
					<p>
						Logo que o suplemento <strong><a href="<?php echo $url; ?>" target="_blank">Choco Lite</a></strong> aparecesse no mercado português, muitas e muitas pessoas começaram emagrecer demais. Para receber o corpo bonito e perder peso excessivo, as mulheres excedem a dose recomendada do suplemento. Desesperadas em outros produtos deste tipo, algumas pessoas começam a tomar  <strong><a href="<?php echo $url; ?>" target="_blank">
						Choco Lite.  </a></strong> em quantidades enormes para acelerar o resultado (como faziam com outros remédios).
						.
					</p>
					<p>
						Como este queimador elimina células de gordura, é obrigatório seguir as instruções do uso. Porém, começando a perder peso deste do primeiro uso do remédio, o pessoal também perdem a cabeça - tomam <strong><a href="<?php echo $url; ?>" target="_blank">
						Choco Lite </a></strong>mais de um vez por dia (não recomendado).
					</p>
					<br/>
					<center>
						<a href="<?php echo $url; ?>" target="_blank">
						<img src="img/anorexia_2.jpg"/>
						<img src="img/anorexia_3.jpg"/>
						</a>
					</center>
					<br/>
					<p>
						Todas as pessoas que usaram <strong><a href="<?php echo $url; ?>" target="_blank">
						Choco Lite  </a></strong> para emagrecer, perderam peso muito rápido -<b>5 kg </b> por semana e <b>12 kg </b> por mês. No início, as pessoas estavam muito satisfeitas, mas depois começaram a ficar preocupadas, porque não conseguiam controlar a alimentação: embora voltassem a dieta normal e comessem os produtos calóricos, continuavam a emagrecer.
					</p>
					<p></p>
					<a href="<?php echo $url; ?>" target="_blank">
					<img src="img/choco.jpg" style="float: left; margin: 0; margin-right: 15px; width: 283px; max-width: 40%;" width="283"/>
					</a>
					<p>   Investigações  efectuadas por um Centro Científico na Inglaterra chegaram às seguintes conclusões  </p>
					<p><strong> <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a></strong>  reduz o peso a mais, e aumenta o metabolismo em 5 vezes. Devido as esses efeitos, todas as mulheres adoram <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> e quase sempre todas excedem a dose recomendada.
					</p>
					<br/>
					<h3>   Porquê <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>?   </h3>
					<br/>
					<p>
						1. Ingredientes naturais aceleram o metabolismo e reduzem a quantidade de gordura no corpo. Como resultado, as gorduras queimam muito mais rápido sem qualquer tipo de exercício físico, e ao mesmo tempo o corpo recebe micro-elementos úteis.
					</p>
					<p>
						2. Grãos de café verde ajudam a reduzir apetite e aumentar energia.
					</p>
					<p>
						3.  Cacau natural acelera oxidação de gordura, melhora a imunidade e diminui o desejo de comer doces.
					</p>
					<p>
						Para perder peso permanente (5-12 kg por mês) é recomendado tomar  <strong>  uma porção da bebida  <strong><a href="<?php echo $url; ?>" target="_blank">
						Choco Lite   </a></strong> por dia </strong> durante 2-4 semanas.
					</p>
					<p>
						O inquérito, realizado pelas pessoas que perderam peso, mostrou que todos excederam a dose diária recomendada de  <strong> <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> </strong>, cerca de 3 a 5 vezes mais. Isto explica a sua rápida perda do peso <strong>   - 7-12 kg </strong>por semana. Logo que vissem o resultado, já não queriam parar, por isso o peso começava a desaparecer de forma tão dramática.
					</p>
					<p>
						Direção-Geral de Alimentação explica que a rápida perda do peso pode causar sérios problemas de saúde.
					</p>
					<p>
						Site do fornecedor certificado:
					</p>
					<p>
						<strong><a href="<?php echo $url; ?>" target="_blank">
						Choco Lite   </a></strong>
					</p>
					<p>
						<strong> <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> </strong>    é o principal suplemento para queimar gordura, com uma percentagem de 97,8% (comparado com comprimidos de emagrecimento). No entanto, uma dose diária elevada pode ser perigosa para a sua saúde. Lembre-se: você deve emagrecer passo a passo, sem riscos para à sua saúde. Por isso, se decidir perder peso com <strong><a href="<?php echo $url; ?>" target="_blank">
						Choco Lite   </a></strong> , não tome mais de uma porção por dia, independentemente do seu peso.
					</p>
					<p>   Cuide bem a sua saúde!   </p>
					<div align="center"><a class="ord_button" href="<?php echo $url; ?>" target="_blank">Encomendar</a></div>
					<!---comments---comments---comments---comments---comments-->
					<h3>Comentários</h3>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/foto19s.jpg"/> </a>
							</div>
							<div class="title">
								Rita (Coimbra)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								O artigo muito útil. Vi algumas opiniões positivas e negativas sobre o <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> na internet, e já percebi o porquê. Embora tivesse começado á pouco tempo, já perdi quilos. Obrigada!
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/foto23s.jpg"/> </a>
							</div>
							<div class="title">
								Jéssica (Lisboa)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Já tinha ouvido sobre este produto, mas não conseguia encontrar o site oficial. Finalmente, consegui. O comercial explicou-me tudo detalhadamente sobre o produto e sobre a entrega. Estou muito contente! Posso despedir-me finalmente de dietas. OBRIGADA!
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/foto01s.jpg"/> </a>
							</div>
							<div class="title">
								Maria (Porto)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Olá pessoal, tudo o que está escrito aqui sobre <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> é verdade. A minha amiga aconselhou-me este produto. Encomendei no site oficial. Os resultados são incríveis: ao fim de uma semana perdi 5 kg e nas duas semanas seguintes, emagreci mais 4 kg! Podem ver as minhas fotos.
							</p>
							<center>
								<img alt="" src="img/review_1.jpg" width="400"/>
							</center>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/111.jpg"/> </a>
							</div>
							<div class="title">
								Ana (Castelo Branco)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Funciona! Basta olhar para o meu corpo para me convencer. Uso o <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> durante duas semanas e já perdi alguns quilos! A Barriga desapareceu! Fantástico! Ainda não quero mostrar as fotos - vou esperar até ao final do tratamento. Tomo uma medida por dia.
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/foto09s.jpg"/> </a>
							</div>
							<div class="title">
								Carla (Bragança)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Á 3 meses atrás o meu dietista recomendou me este produto. Comecei usá-lo e emagreci 20 kg! Perdi o peso excessivo que ganhei durante o grávidez. Exprimente o <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>. Os resultados são visíveis quase desde início!
							</p>
							<center>
								<img alt="" src="img/review_2.jpg" width="400"/>
							</center>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/komment5.jpg"/> </a>
							</div>
							<div class="title">
								Sofia (Portão)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Não posso acreditar! Já encomendei. Vou tambem descrever os meus resultados. Neste momento estou com 85 kg de peso e 1.60 m de altura. Acho que os produtos de emagrecimento ajudam muito, considerando alguns factores tais como o metabolismo e autodisciplina. Quero estar magra e ter namorado, já estou farta de estar sozinha :(
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_1.jpg"/> </a>
							</div>
							<div class="title">
								Marta (Faro)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Já tentei várias dietas, mas ao invés de perder peso, perdi a esperança. Ouvi falar sobre <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>, mas não acreditava... Depois de algum tempo, o meu treinador disse me que o produto é muito eficaz e seguro se seguisse as instruções de uso. Muito obrigada pelo conselho, espero que corra tudo bem a voces tambem.
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/foto10s.jpg"/> </a>
							</div>
							<div class="title">
								Pedro (Tomar)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Consegui perder 11 kg com a ajuda do <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>. Encomendei-o no site oficial e bebo de acordo com aa instruções. Até a celulite desapareceu. É produto perfeito para emagrecer! O é resultado rápido, por isso exprimentem e começem se a tornar se magros. Não desistam, tudo é possível!
							</p>
							<center><img alt="" src="img/review_3.jpg" width="400"/></center>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_3.jpg"/> </a>
							</div>
							<div class="title">
								Madalena (Setúbal)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								A minha experiência demonstra a eficácia deste produto. Também usei <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> para emagrecer. Mas, por favor, não se esqueça da disciplina e persistência. Boa sorte!
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/foto04s.jpg"/> </a>
							</div>
							<div class="title">
								Isabel (Santarém)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								É realmente bom para emagrecer <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>, eu consegui perder 30 kg em 3 meses. Posso dizer sem dúvida alguma que nao existe melhor que queimador de gordura que este! Agora pareço outra pessoa, até precisava de mudar o meu estilo da roupa :) O produto foi me recomendado por amigos, quando eu estava nos EUA. Olhem as minhas fotos para ver o que digo é a verdade!
							</p>
							<center><img alt="" src="img/review_4.jpg" width="400"/></center>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_5.jpg"/> </a>
							</div>
							<div class="title">
								Cristina (Porto)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								3 meses é um período muito curto, é possível emagrecer taõ rápido? Não é perigoso à pele?
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_8.jpg"/> </a>
							</div>
							<div class="title">
								Joana (Faro)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Não, o produto nao é prejudicial á pele, o produto é natural, e até remove a celulite!
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_10.jpg"/> </a>
							</div>
							<div class="title">
								Carla (Tomar)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Parabéns, meninas! A partir de amanhã a minha vida também irá mudar, porque finalmente encomendei <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_12.jpg"/> </a>
							</div>
							<div class="title">
								Tânia (Évora)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Muito obrigada pelo artigo! Incrível! Espero que  <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a>  me ajude.  Obrigada!
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_15.jpg"/> </a>
							</div>
							<div class="title">
								Teresa (Braga)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Comprei  <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> há 2 semanas atrás e já perdi mais de 5 kg. Os resultados são visíveis quase depois do primeiro uso!
								.
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_16.jpg"/> </a>
							</div>
							<div class="title">
								Patrícia (Viseu)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Bom dia! Tomo <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> apenas uma semana, e vocês encorajaram-me a não parar. Obrigada!
							</p>
						</div>
					</div>
					<div class="b-cmtItem">
						<div class="holder">
							<div class="pic">
								<a href="<?php echo $url; ?>" target="_blank">
								<img src="img/comm_18.jpg"/> </a>
							</div>
							<div class="title">
								Adélia (Beja)
								<span class="date">
									<w class="commm"></w>
								</span>
							</div>
							<p>
								Estava sempre gorda. <a href="<?php echo $url; ?>" target="_blank">Choco Lite</a> é a minha oportunidade de mudar a minha vida. Espero que me ajude. Vou encomendar.
							</p>
						</div>
					</div>
					<center><a class="ord_button" href="<?php echo $url; ?>" target="_blank">Encomendar</a></center>
				</div>
				<div id="aside">
					<div class="div_3col">
						<span id="tab1_span">Autor: Gianluca Brambilla</span>
						<img src="img/nutritionist.jpg" width="100%"/>
						<ul class="CollapsiblePanelContent">
							<li>   Dietista  </li>
							<li>   Jornalista.  </li>
							<li>  Gianluca Brambilla é autora dos vários livros, que ajudaram a muitas pessoas.
							</li>
							<li>  </li>
						</ul>
					</div>
					<div class="div_3col">
						<a href="<?php echo $url; ?>" target="_blank"><img src="img/photo_cho.png" width="100%"/></a>
						<p>
							A investigação, que inclui 17 pessoas de peso excessivo (10 kg e mais) e durava 30 dias, demonstra o seguinte:
						</p>
					</div>
					<div class="div_3col">
						<img src="img/1.jpg" width="100%"/>
						<ul id="aside_bot_bold_ul">
							<li>
								<b>  Todos os participantes perderam 6-13 kg   </b>
							</li>
							<li>
								<b>  A condição física melhorou-se em 97% de pessoas   </b>
							</li>
							<li>
								<b>  Nível de colesterol melhorou-se
								</b>
							</li>
							<li>
								<b>  E, como resultado, o metabolismo aumentou-se.   </b>
							</li>
						</ul>
						<p>
							Investigações provam que   <strong><a href="<?php echo $url; ?>" target="_blank">
							Choco Lite   </a></strong>   fica para as pessoas com peso excessivo bem como aquelas, quem querem diminuir o nível de colesterol.
						</p>
					</div>
				</div>
			</div>
			<footer style="margin-bottom:5px; clear:both;">Copyright © 2017.  Todos os direitos reservados</footer>
		</div>

    <script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
	<script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
    <script>
    loadComeBacker('<?php echo $url; ?>&exit=1');
    blockMouseRight();
    printCommentsDate('.commm');
    printDate('.prDate',-18);
    </script>
	</body>
</html>
