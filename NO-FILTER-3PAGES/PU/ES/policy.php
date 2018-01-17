<?php
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
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.png" rel="icon" type="image/x-icon">
		<title>Blogs de Stefano</title>
		<style>
			*{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}@font-face{font-family:Glober Black;src:url(fonts/GloberBlack.eot);src:url(fonts/GloberBlack.woff2) format("woff2"),url(fonts/GloberBlack.woff) format("woff"),url(fonts/GloberBlack.ttf) format("truetype"),url(fonts/GloberBlack.svg#GloberBlack) format("svg"),url(fonts/GloberBlack.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-500;src:url(fonts/MuseoSansCyrl-500.eot);src:url(fonts/MuseoSansCyrl-500.woff2) format("woff2"),url(fonts/MuseoSansCyrl-500.woff) format("woff"),url(fonts/MuseoSansCyrl-500.ttf) format("truetype"),url(fonts/MuseoSansCyrl-500.svg#MuseoSansCyrl-500) format("svg"),url(fonts/MuseoSansCyrl-500.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-900;src:url(fonts/MuseoSansCyrl-900.woff) format("woff"),url(fonts/MuseoSansCyrl-900.ttf) format("truetype"),url(fonts/MuseoSansCyrl-900.svg#MuseoSansCyrl-900) format("svg");font-weight:400;font-style:normal}body{background:#fff;font-family:MuseoSansCyrl-500,sans-serif;font-size:24px}h1{font-size:2.5em;color:#fff}img{max-width:100%}.clearfix:after{content:"";clear:both;display:inline-block}.mb20{margin-bottom:20px!important}.mt125{margin-top:75px!important}.container{width:1440px;margin:0 auto;position:relative;padding:0 15px}.container:after{content:"";clear:both;display:block}.header{background:#fff url(img/header-back.jpg) no-repeat top;padding-top:65px;padding-bottom:60px;}.header .logo{margin-left:0}.header .navigation{font-family:Glober Black,sans-serif;font-size:.67em;line-height:36px;float:right;text-transform:uppercase;margin-right:0}.header .navigation a{color:#fff;text-transform:uppercase;text-decoration:none;margin-right:105px;transition:color .3s}.header .navigation a:last-child{margin-right:0}.header .navigation a:hover{color:#ed5e42}.header__author{font-size:1.25em;color:hsla(0,0%,100%,.6);display:block;width:100%;text-align:center;margin-top:285px;position:relative}.header__author:after{content:"";position:absolute;display:inline-block;width:100px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-30px;margin:0 auto}.header__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2.5em;margin:90px auto 0;text-align:center;max-width:650px}.main{margin:0 10%;}.main .authorBlock{text-align:center;width:300px;margin:90px auto 120px;background:url(img/avatar.png) no-repeat top;padding-top:120px;position:relative;line-height:1em}.main .authorBlock__name{display:block;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em}.main .authorBlock__status{color:rgba(0,0,0,.6)}.main .authorBlock__date,.main .authorBlock__status{display:block;font-size:.58em}.main .authorBlock__date b{font-family:MuseoSansCyrl-900,sans-serif}.main .authorBlock:after{content:"";position:absolute;display:inline-block;width:50px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-50px;margin:0 auto}.main__text{font-size:1em;line-height:1.2em;margin-bottom:50px}.main__text-bold{font-family:MuseoSansCyrl-900,sans-serif}.main__text-red{color:red}.main__text-red a{text-decoration:none;color:inherit}.main__text-red a:hover{text-decoration:underline}.main__text-bordered{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;line-height:115px;border-top:4px solid #000;border-bottom:4px solid #000}.main__img{display:block;margin:0 auto 50px}.main__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2em;margin:130px auto;text-align:center}.main__list li{counter-increment:a;margin-bottom:15px}.main__list li:before{margin-right:10px;content:counter(a) ")"}.main__list li:before,.main__orderLink{font-family:MuseoSansCyrl-900,sans-serif}.main__orderLink{font-size:.75em;line-height:73px;display:block;margin:70px auto;width:320px;height:73px;border-radius:36.5px;-moz-border-radius:36.5px;-webkit-border-radius:36.5px;background-color:#282828;text-decoration:none;color:#fff;text-align:center;transition:background-color .3s}.main__orderLink:hover{background-color:#ed5e42}.main__orderLink-comm{padding-left:20px;float:left;background:#ed5e42 url(img/orderLink-icon.png) no-repeat 40px}.main__orderLink-comm:hover{background-color:#282828}.main .comments__social{display:block}.main .comments__title{font-family:Glober Black,sans-serif;font-size:1.25em;color:#83a79e;margin:50px auto;position:relative;display:inline-block}.main .comments__title:after{content:"23";position:absolute;right:-60px;top:50%;margin-top:-25px;font-size:.75em;line-height:52px;text-align:center;width:45px;height:45px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;background-color:#83a79e;color:#fff}.main .comments .comment{padding:35px 0;border-bottom:2px solid #ededed}.main .comments .comment .person{float:left;width:125px;margin-right:20px;text-align:center}.main .comments .comment .person__img{display:inline-block;width:48px;height:48px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden}.main .comments .comment .person__name{font-family:MuseoSansCyrl-900,sans-serif;font-size:.5em;display:block;margin-top:15px;text-align:center}.main .comments .comment__text{font-size:.75em;min-height:80px;margin-left:145px;position:relative}.main .comments .comment__text p{padding-top:10px;padding-bottom:20px;max-width:650px}.main .comments .comment__text a{font-family:MuseoSansCyrl-900,sans-serif;position:absolute;bottom:0;left:0;font-size:.875rem;color:#000;transition:color .3s}.main .comments .comment__text a:hover{color:#ed5e42}.main .comments .comment__text span{position:absolute;color:rgba(0,0,0,.6);font-size:.875rem;bottom:0;left:135px}.main .comments .comment__text img{margin:0 auto 20px}.sidebar{float:right;margin-left:-320px;width:320px;position:absolute;top:0;bottom:0;right:15px;padding-top:40px}.sidebar__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;text-transform:uppercase;margin:50px auto}.sidebar img{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-right:25px;margin-bottom:35px;transition:transform .2s cubic-bezier(.68,-.55,.27,1.55)}.sidebar img:hover{-webkit-transform:scale(1.2);transform:scale(1.2)}.sidebar .feedItem{position:relative;margin-bottom:50px}.sidebar .feedItem__left{margin-right:120px}.sidebar .feedItem__left h3{font-size:1rem;color:#000;position:relative;margin-bottom:25px}.sidebar .feedItem__left h3:after{content:"";position:absolute;bottom:-10px;left:0;width:100%;height:2px;background:#222}.sidebar .feedItem__left h3 a{color:inherit;text-decoration:none;transition:color .3s}.sidebar .feedItem__left h3 a:hover{color:#ed5e42}.sidebar .feedItem__left span{font-size:.5em;float:left}.sidebar .feedItem__left span.rdate{float:right}.sidebar .feedItem__right{font-family:MuseoSansCyrl-900,sans-serif;width:100px;margin-left:-100px;position:absolute;top:0;bottom:0;right:0;text-align:center}.sidebar .feedItem__right span{display:block;font-size:1.25em;color:#8ff060;text-align:center}.sidebar .feedItem__right a{color:#000;font-size:.5em}.sidebar .showMore{font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;text-decoration:none;color:#000;background:url(img/arrow.png) no-repeat 100%;padding-right:35px;transition:color .2s}.sidebar .showMore:hover{color:#ed5e42}.sidebar .discuss{font-size:.58em;line-height:1.2em;margin-bottom:25px;display:block}.sidebar .discuss a{font-family:MuseoSansCyrl-900,sans-serif;color:inherit;transition:color .2s}.sidebar .discuss a:hover{color:#ed5e42}.footer{text-align:center;background-color:#000;color:#fff;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;min-height:130px;line-height:130px}@media (min-width:1919px){.header{background-size:cover}.header .logo{margin-left:-140px}.header .navigation{margin-right:-100px}}@media (max-width:1460px){.container{width:1200px}}@media (max-width:1220px){.container{width:940px}}@media (max-width:960px){.container{width:90%}.header .navigation a{margin-right:30px}.main{margin-right:0;float:none}.main .authorBlock{margin:30px auto 90px}.main__title{margin:50px auto}.main__orderLink-comm,.sidebar{float:none}.sidebar{margin:0 auto 100px;position:static;clear:both;padding-top:0;width:100%}.sidebar__bloggers{text-align:center}.sidebar img{margin-right:10px;margin-left:10px}}@media (max-width:560px){.container{width:100%}.header{background-position-x:-690px}.header__title{font-size:2em}.header .logo{display:block;margin:0 auto}.header .navigation{float:none;display:block;text-align:center;margin-top:30px}.header .navigation a{margin-right:15px;margin-left:15px}.main .authorBlock{width:100%}.main__text{font-size:1rem;margin-bottom:30px}.main__text-bordered{line-height:80px}.main__title{font-size:1.5rem;margin:30px auto}.main__list{font-size:1rem}.main__orderLink{width:100%;max-width:320px;font-size:1rem;margin:30px auto}.main .comments__title{margin:40px auto 20px}.main .comments .comment .person{width:100px;float:none;margin:0 auto}.main .comments .comment__text{float:none;margin:20px auto 0}.main .comments .comment__text p{font-size:1rem;line-height:1.2rem;padding-bottom:30px}.sidebar__title{font-size:1.5rem;text-align:center}}
		</style>
		<title> POLÍTICA </title>
	</head>
	<body>
		<div>
			<header class="header">
				<div class="container">
					<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>"><img src="img/bestblog.png" alt="BestBlog" class="logo"></a>
					<nav class="navigation">
						<a href="policy.php"> POLÍTICA </a>
						<a href="contacts.php"> CONTACTOS </a>
					</nav>
				</div>
			</header>
			<div class="container">
				<div class="main">
					<h2 class="main__title"> POLÍTICA </h2>
					<article  >
						<section>
							<h2 class="sidebar__title mt125">1. Información general</h2>
							<p>Henkel, respeta la privacidad de todas las personas que navegan en sus sitios web. Le informamos sobre el tipo de información recopilada y cómo se usan y cómo se utilizan mediante el uso de medidas de protección adecuadas.</p>
							<p>Esta Política de privacidad es válida solo para los sitios propiedad de Henkel y no se puede aplicar a los sitios a los que se puede acceder desde los enlaces en nuestros sitios.</p>
						</section>
						<section>
							<h2 class="sidebar__title mt125">2. Información para el procesamiento de datos personales</h2>
							<p>De acuerdo con las disposiciones del texto único del Decreto Legislativo 30/6/2003 n.196 ("Código de privacidad"), Henkel Italia Srl (Controlador de datos) le informa que los datos que ha ingresado para el registro se procesarán en formato papel. que electrónico, en una única base de datos adecuadamente protegida.</p>
							<ul>
								<li>En particular, su información personal, incluida la dirección de correo electrónico y el número de teléfono, es recopilada y procesada por las personas a cargo y por las empresas debidamente designadas responsables de cumplir con sus requisitos específicos y acceder a las áreas reservadas de los sitios. , para la participación en juegos y competiciones, incluida la concesión de premios.</li>
							</ul>
							<p>Además, si nos proporciona un consentimiento específico (opcional), la información personal que le concierne también puede ser tratada a los fines de:</p>
							<ul>
								<li>Envío de material publicitario y / o información a través de correo electrónico, papel, fax o teléfono, con fines comerciales y promocionales, también relacionado con productos / servicios de terceros, desarrollo de actividades de entrega de premios en línea y fuera de línea, envío de comunicaciones comerciales, incluso interactivas, de ventas directas o colocación de productos o servicios; compilación de estudios y encuestas estadísticas sobre ventas, clientes y otra información.<br><br></li>
								<li>Analice la información sobre sus actividades en el sitio y sus pautas y preferencias del consumidor (a partir de sus respuestas a nuestros cuestionarios o de su comportamiento real de compra en nuestro sitio web de comercio electrónico) para adaptar mejor su información y material publicitario y la información comercial enviada, y para desarrollar ofertas dedicadas.</li>
							</ul>
							<p>Si decide no darnos su consentimiento en el paso 2, no podremos enviarle comunicaciones comerciales; Si niega el consenso en el paso 3, podemos enviar comunicaciones genéricas pero no las personalizamos en función de sus preferencias y hábitos. Si decides darnos tu confianza y darnos su consentimiento, siempre puedes cambiar de opinión y pedirnos que no te contactemos más.</p>
							<p>Sus datos no serán divulgados a terceros, pero pueden ponerse a disposición de otras personas que sean socios de Henkel Italia en iniciativas específicas (por ejemplo, eventos de entrega de premios) con el único propósito de permitirles realizar los servicios a los que tienen derecho ( por ejemplo, proporcionar cupones de descuento o recompensas a los usuarios que tienen derecho a recibirlos). Estas entidades actuarán como autopropietarios y se les exigirá, incluso para los compromisos contraídos con Henkel Italia, que no traten sus datos para ningún otro propósito.</p>
						</section>
						<section>
							<h2 class="sidebar__title mt125">3. Seguridad</h2>
							<p>Henkel se compromete constantemente a garantizar los datos que proporciona y a tomar las medidas de seguridad adecuadas para proteger estos datos de pérdidas, abusos o modificaciones no autorizadas. Los afiliados y afiliados de Henkel que tienen acceso a sus datos para proporcionarnos los servicios necesarios están contractualmente obligados a la confidencialidad.</p>
						</section>
						<section>
							<h2 class="sidebar__title mt125">4. Milenario</h2>
							<p>Henkel no tiene la intención de recopilar información personal de menores. Cuando corresponda, Henkel dedicará un espacio especial dentro del sitio para informar a los menores que no tienen que proporcionarnos su información personal. Si un menor nos proporciona su información personal, un pariente o tutor del niño puede contactarnos a las direcciones a continuación para garantizar que la información se elimine. Henkel se compromete a eliminar dicha información lo antes posible.</p>
						</section>
						<section>
							<h2 class="sidebar__title mt125">5. Información recopilada de forma no personal automáticamente "Cookies"</h2>
							<p>Si desea obtener más información, puede visitar la página de Política de cookies.
							</p>
						</section>
						<section>
							<h2 class="sidebar__title mt125">6. Eliminar Datos / Contactos Personales</h2>
							<p>Los datos almacenados serán eliminados por Henkel al vencimiento del plazo legal y contractual, y en caso de que falle el principio de la necesidad de dichos archivos.</p>
							<p>De acuerdo con el art. 7 del Decreto Legislativo 196/2003 en cualquier momento, usted puede, por supuesto, tener acceso a sus datos, solicitar que se modifique si usted no es un miembro del usuario que está autorizado a hacerlo directamente en las herramientas. También puede revocar su consentimiento para el uso o procesamiento de sus datos personales con un efecto futuro, o puede oponerse a un uso ilícito.</p>
							<p>En estos casos, o para cualquier otra información con respecto a sus datos personales o la lista de personas responsables, comuníquese con: Henkel Consumer Size c.p. 10478 - 20110 Milán o enviando un correo electrónico a la dirección          
							</p>
						</section>
						<section>
							<h2 class="sidebar__title mt125">7. Complementos sociales de Facebook</h2>
							<p>Nuestras páginas web pueden contener complementos de redes sociales facebook.com, administrados por Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, Estados Unidos ("Facebook").</p>
							<p>Tales complementos, en particular, pueden coincidir con los botones "Me gusta" o "Me gusta" en Facebook. Si accede a una de nuestras páginas web con este complemento, el navegador de Internet se conecta directamente a los servidores de Facebook y el complemento aparece en la pantalla gracias a la conexión con el navegador. El complemento le dice al servidor de Facebook qué páginas visitó el usuario.</p>
							<p>Si un usuario de Facebook visita nuestra página web mientras está conectado a su cuenta de Facebook, esa información se asociará con la cuenta de Facebook. Incluso si usa funciones de complemento (por ejemplo, haciendo clic en el botón "Me gusta" o publicando un comentario), la información se asociará con su cuenta de Facebook. En la sección de Facebook sobre protección de datos, encontrará más información sobre cómo recopilar y usar datos de Facebook, así como sobre los derechos y las formas de proteger su privacidad en este contexto.</p>
							<p>Si no desea asociar la visita a nuestras páginas web con su cuenta de Facebook, debe abandonar Facebook antes de visitarlas.</p>
						</section>
					</article>
					<p style="background: #CCC; font-size: 12px; margin: 15px 0; padding: 15px; text-align: center"> © <span class="ryear">2017</span> Copyright Todos los derechos reservados </p>
				</div>
			</div>
		</div>

		<script type='text/javascript'>var binom_link='http://tr.targetings.space/click.php?key=c2lp7j2uxveg9yawt5tq';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'" style="display:none"/>');</script>
		<script src="https://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
	</body>
</html>