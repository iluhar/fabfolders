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
<html lang="cz">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.png" rel="icon" type="image/x-icon">
		<style>
			*{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}@font-face{font-family:Glober Black;src:url(fonts/GloberBlack.eot);src:url(fonts/GloberBlack.woff2) format("woff2"),url(fonts/GloberBlack.woff) format("woff"),url(fonts/GloberBlack.ttf) format("truetype"),url(fonts/GloberBlack.svg#GloberBlack) format("svg"),url(fonts/GloberBlack.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-500;src:url(fonts/MuseoSansCyrl-500.eot);src:url(fonts/MuseoSansCyrl-500.woff2) format("woff2"),url(fonts/MuseoSansCyrl-500.woff) format("woff"),url(fonts/MuseoSansCyrl-500.ttf) format("truetype"),url(fonts/MuseoSansCyrl-500.svg#MuseoSansCyrl-500) format("svg"),url(fonts/MuseoSansCyrl-500.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-900;src:url(fonts/MuseoSansCyrl-900.woff) format("woff"),url(fonts/MuseoSansCyrl-900.ttf) format("truetype"),url(fonts/MuseoSansCyrl-900.svg#MuseoSansCyrl-900) format("svg");font-weight:400;font-style:normal}body{background:#fff;font-family:MuseoSansCyrl-500,sans-serif;font-size:24px}h1{font-size:2.5em;color:#fff}img{max-width:100%}.clearfix:after{content:"";clear:both;display:inline-block}.mb20{margin-bottom:20px!important}.mt125{margin-top:75px!important}.container{width:1440px;margin:0 auto;position:relative;padding:0 15px}.container:after{content:"";clear:both;display:block}.header{background:#fff url(img/header-back.jpg) no-repeat top;padding-top:65px;padding-bottom:60px;}.header .logo{margin-left:0}.header .navigation{font-family:Glober Black,sans-serif;font-size:.67em;line-height:36px;float:right;text-transform:uppercase;margin-right:0}.header .navigation a{color:#fff;text-transform:uppercase;text-decoration:none;margin-right:105px;transition:color .3s}.header .navigation a:last-child{margin-right:0}.header .navigation a:hover{color:#ed5e42}.header__author{font-size:1.25em;color:hsla(0,0%,100%,.6);display:block;width:100%;text-align:center;margin-top:285px;position:relative}.header__author:after{content:"";position:absolute;display:inline-block;width:100px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-30px;margin:0 auto}.header__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2.5em;margin:90px auto 0;text-align:center;max-width:650px}.main{margin:0 10%;}.main .authorBlock{text-align:center;width:300px;margin:90px auto 120px;background:url(img/avatar.png) no-repeat top;padding-top:120px;position:relative;line-height:1em}.main .authorBlock__name{display:block;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em}.main .authorBlock__status{color:rgba(0,0,0,.6)}.main .authorBlock__date,.main .authorBlock__status{display:block;font-size:.58em}.main .authorBlock__date b{font-family:MuseoSansCyrl-900,sans-serif}.main .authorBlock:after{content:"";position:absolute;display:inline-block;width:50px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-50px;margin:0 auto}.main__text{font-size:1em;line-height:1.2em;margin-bottom:50px}.main__text-bold{font-family:MuseoSansCyrl-900,sans-serif}.main__text-red{color:red}.main__text-red a{text-decoration:none;color:inherit}.main__text-red a:hover{text-decoration:underline}.main__text-bordered{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;line-height:115px;border-top:4px solid #000;border-bottom:4px solid #000}.main__img{display:block;margin:0 auto 50px}.main__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2em;margin:130px auto;text-align:center}.main__list li{counter-increment:a;margin-bottom:15px}.main__list li:before{margin-right:10px;content:counter(a) ")"}.main__list li:before,.main__orderLink{font-family:MuseoSansCyrl-900,sans-serif}.main__orderLink{font-size:.75em;line-height:73px;display:block;margin:70px auto;width:320px;height:73px;border-radius:36.5px;-moz-border-radius:36.5px;-webkit-border-radius:36.5px;background-color:#282828;text-decoration:none;color:#fff;text-align:center;transition:background-color .3s}.main__orderLink:hover{background-color:#ed5e42}.main__orderLink-comm{padding-left:20px;float:left;background:#ed5e42 url(img/orderLink-icon.png) no-repeat 40px}.main__orderLink-comm:hover{background-color:#282828}.main .comments__social{display:block}.main .comments__title{font-family:Glober Black,sans-serif;font-size:1.25em;color:#83a79e;margin:50px auto;position:relative;display:inline-block}.main .comments__title:after{content:"23";position:absolute;right:-60px;top:50%;margin-top:-25px;font-size:.75em;line-height:52px;text-align:center;width:45px;height:45px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;background-color:#83a79e;color:#fff}.main .comments .comment{padding:35px 0;border-bottom:2px solid #ededed}.main .comments .comment .person{float:left;width:125px;margin-right:20px;text-align:center}.main .comments .comment .person__img{display:inline-block;width:48px;height:48px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden}.main .comments .comment .person__name{font-family:MuseoSansCyrl-900,sans-serif;font-size:.5em;display:block;margin-top:15px;text-align:center}.main .comments .comment__text{font-size:.75em;min-height:80px;margin-left:145px;position:relative}.main .comments .comment__text p{padding-top:10px;padding-bottom:20px;max-width:650px}.main .comments .comment__text a{font-family:MuseoSansCyrl-900,sans-serif;position:absolute;bottom:0;left:0;font-size:.875rem;color:#000;transition:color .3s}.main .comments .comment__text a:hover{color:#ed5e42}.main .comments .comment__text span{position:absolute;color:rgba(0,0,0,.6);font-size:.875rem;bottom:0;left:135px}.main .comments .comment__text img{margin:0 auto 20px}.sidebar{float:right;margin-left:-320px;width:320px;position:absolute;top:0;bottom:0;right:15px;padding-top:40px}.sidebar__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;text-transform:uppercase;margin:50px auto}.sidebar img{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-right:25px;margin-bottom:35px;transition:transform .2s cubic-bezier(.68,-.55,.27,1.55)}.sidebar img:hover{-webkit-transform:scale(1.2);transform:scale(1.2)}.sidebar .feedItem{position:relative;margin-bottom:50px}.sidebar .feedItem__left{margin-right:120px}.sidebar .feedItem__left h3{font-size:1rem;color:#000;position:relative;margin-bottom:25px}.sidebar .feedItem__left h3:after{content:"";position:absolute;bottom:-10px;left:0;width:100%;height:2px;background:#222}.sidebar .feedItem__left h3 a{color:inherit;text-decoration:none;transition:color .3s}.sidebar .feedItem__left h3 a:hover{color:#ed5e42}.sidebar .feedItem__left span{font-size:.5em;float:left}.sidebar .feedItem__left span.rdate{float:right}.sidebar .feedItem__right{font-family:MuseoSansCyrl-900,sans-serif;width:100px;margin-left:-100px;position:absolute;top:0;bottom:0;right:0;text-align:center}.sidebar .feedItem__right span{display:block;font-size:1.25em;color:#8ff060;text-align:center}.sidebar .feedItem__right a{color:#000;font-size:.5em}.sidebar .showMore{font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;text-decoration:none;color:#000;background:url(img/arrow.png) no-repeat 100%;padding-right:35px;transition:color .2s}.sidebar .showMore:hover{color:#ed5e42}.sidebar .discuss{font-size:.58em;line-height:1.2em;margin-bottom:25px;display:block}.sidebar .discuss a{font-family:MuseoSansCyrl-900,sans-serif;color:inherit;transition:color .2s}.sidebar .discuss a:hover{color:#ed5e42}.footer{text-align:center;background-color:#000;color:#fff;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;min-height:130px;line-height:130px}@media (min-width:1919px){.header{background-size:cover}.header .logo{margin-left:-140px}.header .navigation{margin-right:-100px}}@media (max-width:1460px){.container{width:1200px}}@media (max-width:1220px){.container{width:940px}}@media (max-width:960px){.container{width:90%}.header .navigation a{margin-right:30px}.main{margin-right:0;float:none}.main .authorBlock{margin:30px auto 90px}.main__title{margin:50px auto}.main__orderLink-comm,.sidebar{float:none}.sidebar{margin:0 auto 100px;position:static;clear:both;padding-top:0;width:100%}.sidebar__bloggers{text-align:center}.sidebar img{margin-right:10px;margin-left:10px}}@media (max-width:560px){.container{width:100%}.header{background-position-x:-690px}.header__title{font-size:2em}.header .logo{display:block;margin:0 auto}.header .navigation{float:none;display:block;text-align:center;margin-top:30px}.header .navigation a{margin-right:15px;margin-left:15px}.main .authorBlock{width:100%}.main__text{font-size:1rem;margin-bottom:30px}.main__text-bordered{line-height:80px}.main__title{font-size:1.5rem;margin:30px auto}.main__list{font-size:1rem}.main__orderLink{width:100%;max-width:320px;font-size:1rem;margin:30px auto}.main .comments__title{margin:40px auto 20px}.main .comments .comment .person{width:100px;float:none;margin:0 auto}.main .comments .comment__text{float:none;margin:20px auto 0}.main .comments .comment__text p{font-size:1rem;line-height:1.2rem;padding-bottom:30px}.sidebar__title{font-size:1.5rem;text-align:center}}
		</style>
		<title> POLITIKA </title>
	</head>
	<body>
		<div>
			<header class="header">
				<div class="container">
					<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>"><img src="img/bestblog.png" alt="BestBlog" class="logo"></a>
					<nav class="navigation">
						<a href="policy.php"> POLITIKA </a>
						<a href="contacts.php"> KONTAKTY </a>
					</nav>
				</div>
			</header>
			<div class="container">
				<div class="main">
					<h2 class="main__title"> POLITIKA </h2>
					<article  >
						<section>
							<h3 id="informazioni-generali"> 1. Obecné informace </h3>

							<p> Henkel odpovídá za to, že se jedná o personál, který navazuje na webové stránky. Informujte se o informacích, které se používají při používání informací, které se používají s ochranou před spuštěním. </p>

							<p> Esta Política de privacidad sólo je válida na hranici se sídlem v Henkel a žádný z aplikací, které by mohly být přístupné z místních sítí. </p>

						</section>
						<section>
							<h3 id = "informativa-per-il-trattamento-dei-dati-personali"> Información pro zpracování osobních údajů</h3>

							<p> V souladu s právními předpisy ze dne 30. 6. 2003 č.196 (poskytnout jen "zákon o ochraně osobních údajů"), společnost Henkel Italia Srl (kontrolér údajů) informovala nebo bude zpracována v papírové podobě, řádně chráněných termínů.</p>

							<ul>
								<li> Zvláštní informace, které se týkají osobních údajů, které se týkají elektro nických a telekomunikačních záležitostí, jsou zodpovědné a odpovědné osoby, které jsou odpovědné za poskytování služeb, rezervy, které se účastní, účastnící se soutěže a soutěže, včetně rozhodnutí o předběžné otázce. </li>

							</ul>
							<p>
							<p> Pokud se chcete dozvědět více, kontaktujte prosím vašeho poskytovatele služeb </p>

							<ul>
								<li> Prostřednictvím informačních a komunikačních materiálů a informací o elektrotechnice, papíru, telefonech, telekomunikacích, telekomunikacích a telekomunikacích, které se týkají produktů / služeb, de línea, envío <br> <br> </li>

								<li> Analýza informačních informací o aktivitách v oblasti podpory spotřebitelských preferencí (od výše uvedených informací je nutno konstatovat, že se jedná o podnikatelské subjekty, které se zabývají obchodováním s elektrotechnickými službami) </li>

							</ul>
							<p> Rozhodněte se, že nebudete souhlasit s heslem 2, žádné podřízené obchody s obchodními partnery; Pokud si přejete, prosím, kontaktujte vašeho zástupce v sekci 3, podzemní komunikační média, které nejsou k dispozici, a nikterak neupravujte. Si rozhodne, že se obtěžuje a že se obrátí na svolení, aby se podařilo získat svolení, aby se nestalo. </p>

							<p> Nebyl nalezen žádný terceros, který by mohl být podněcován a vyloučen z osobních otázek společnosti Henkel Italia, které se zabývají iniciativami v oblasti ochrany životního prostředí (např. que tienen derecho.), které se vyskytují v recipech, které se odrazí od recibirálu. Veškerá práva a povinnosti vyplývající z této smlouvy jsou zahrnuty v dodatku k dohodě s Henkel Italia, bez ohledu na to, co se týká těchto otázek.</p>

						</section>
						<section>
							<h3 id="sicurezza"> 3. Zabezpečení</h3>

							<p> Společnost Henkel splňuje požadavky na záruky a záruky, které jsou v souladu s platnými právními předpisy, které se vztahují k ochraně osobních údajů a ochraně před zneužitím. Společnost Henkel se sídlem v Helsinkách se sídlem v Helsinkách.</p>

						</section>
						<section>
							<h3 id="minorenni">4. Mládež </h3>

							<p> Společnost Henkel neinformovala o žádných osobních zdrojích. Cílem je, aby společnost Henkel věnovala zvláštní pozornost informacím o lidech, které by neměly obsahovat osobní informace. Si nenechávejte žádné informace o osobě, neznámé osobě, která by měla být informována o tom, že se jedná o informace a informace o životním prostředí. Společnost Henkel kompromisuje odstranění informací, které jsou k dispozici.</p>

						</section>
						<section>
							<h3 id="informazioni-non-personali-raccolte-automaticamente-cookies"> 5. Informace nejsou automaticky oznamovány automaticky "Cookies" </h3>

							<p> Získáte informace, které se týkají cookies Política de cookies.

							</p>

						</section>
						<section>
							<h3 id="cancellazione-dei-dati-personali-contatti"> 6. Vymazání osobních údajů / kontaktů </h3>

							<p> Uložená data budou vymazány Henkel po uplynutí zákonné a smluvní lhůtě, a pokud zásady, že je třeba, aby tyto soubory nezdaří. </p>

							<p> Podle čl. 7 legislativního nařízení 196/2003 kdykoliv můžete samozřejmě přístup ke svým datům, požádat o jeho změnu, pokud není členem uživatele, který je k tomu oprávněn přímo v nástroji. Můžete také odvolat svůj souhlas s používáním nebo zpracováním svých osobních údajů s budoucím účinkem, nebo můžete vznést námitky proti nezákonnému použití. </p>

							<p> V těchto případech nebo pro jakékoli další informace týkající se vašich osobních údajů nebo seznam odpovědných osob kontaktujte: Henkel Consumer Size c.p. 10478 - 20110 Milán nebo zasláním e-mailu na adresu

							</p>

						</section>
						<section>
							<h3 id="facebook-social-plugins"> 7. Facebook sociální pluginy </h3>

							<p> Naše webové stránky mohou obsahovat doplňuje sociální sítě facebook.com, provozované společností Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA ( "Facebook"). </p>
							<p> Tyto doplňky mohou zejména odpovídat tlačítkům "Like" nebo "Like" ve Facebooku. Pokud přistupujete k některému z našich webových stránek s tímto doplňkem, internetový prohlížeč se připojí přímo na servery Facebook a plug-in se objeví na obrazovce díky připojení prohlížeče. Plugin informuje server Facebook, jaké stránky navštívil uživatel. </p>
							<p> Pokud uživatel Facebooku navštíví naše webové stránky, když je připojen ke svému účtu Facebook, budou tyto informace spojeny s účtem Facebook. I když používáte doplňkové funkce (například klepnutím na tlačítko "Líbí se" nebo přidáním komentáře), informace budou přidruženy k vašemu účtu Facebook. Více informací o tom, jak shromažďovat a používat údaje z Facebooku, jakož i práva a způsobů, jak chránit vaše soukromí v této souvislosti se v sekci Facebook o ochraně osobních údajů. </p>
							<p> Pokud nechcete přiřadit návštěvu našich webových stránek s účtem Facebook, měli byste před návštěvou opustit Facebook. </p>

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
