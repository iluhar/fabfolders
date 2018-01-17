<?php
include 'config.php';
preg_match('/^.*\//',$_SERVER['REQUEST_URI'],$matches);
$host .= $matches[0];
class Redirect {	
	public function echoUrl(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randstring = '';	    	
		for ($i = 0; $i < rand(6,20); $i++) {
    	    $randstring .= substr($characters, rand(0,strlen($characters)-1), 1);
    	}
		echo "page".$randstring;
	}
}
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
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Blogul Cezara Tacaluta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="favicon.ico" rel="icon" type="image/x-icon">
	<style>
		@charset "UTF-8";html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;vertical-align:baseline}body,html{height:100%}img,fieldset,a img{border:none}input[type="text"],input[type="email"],input[type="tel"],textarea{-webkit-appearance:none}textarea{overflow:auto}input,button{margin:0;padding:0;border:0}input[type="submit"],button{cursor:pointer}div,input,textarea,select,button,h1,h2,h3,h4,h5,h6,a,span,a:focus{outline:none}ul,ol{list-style-type:none}table{border-spacing:0;border-collapse:collapse;width:100%}html{-webkit-box-sizing:border-box;box-sizing:border-box}*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit}body{font-family:Roboto, Arial, sans-serif;font-size:18px;line-height:1.4;color:#010101;font-weight:400}b{font-weight:700}img{display:inline-block;max-width:100%}.top,.wrapper{max-width:1170px;margin:auto;position:relative}.form{position:relative;margin-top:47px}.search{border-radius:19px;background-color:#f4f0eb;color:#b7b7b7;font:italic 14px Roboto, Arial, sans-serif;padding:11px 50px 11px 16px;width:100%;display:block}input[type=submit]{background:none;outline:none;background:url(./img/search.svg) no-repeat center;width:24px;height:24px;background-size:contain;position:absolute;top:0;bottom:0;right:16px;margin:auto;font:0/0 a;text-shadow:none;color:transparent}.social{font-size:0;text-align:right}.social__item{display:inline-block;vertical-align:top;margin:0 2px}.social a{display:block;width:36px;height:36px;background-size:contain;cursor:pointer;-webkit-transition:-webkit-transform 0.3s;transition:-webkit-transform 0.3s;transition:transform 0.3s;transition:transform 0.3s, -webkit-transform 0.3s}.social a:hover{-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05)}.fb{background:url(./img/fb.svg) no-repeat center}.tw{background:url(./img/tw.svg) no-repeat center}.g{background:url(./img/g.svg) no-repeat center}.pi{background:url(./img/pi.svg) no-repeat center}.out{background-color:#ffffff;padding:0 15px 75px;min-width:320px}.top{padding-top:10px;*zoom:1}.top:after{content:" ";display:table;clear:both}.top__left{width:73%;float:left}.top__right{width:27%;float:left}.post{font-family:"Times New Roman", Arial, sans-serif;text-align:center;margin-bottom:16px;max-width:688px}.post__media{width:23.25581%;overflow:hidden;float:left}.post__media img{max-width:100%;max-height:100%}.post__content{margin-left:25.72674%}.post__human-name{display:inline-block;font-style:italic;font-size:20px;line-height:1;padding-bottom:7px;border-bottom:1px solid #f06eaa;margin-bottom:15px}.post__quote{font-size:35px;font-weight:800;line-height:1.2}.post__list{font-size:0;font-family:Roboto, Arial, sans-serif;font-weight:400;color:#959595;margin-top:24px}.post__list-item{display:inline-block;vertical-align:top;font-size:14px;text-transform:uppercase}.post__list-item b{margin-right:6px}.post__list-item + .post__list-item{margin-left:15px}.wrapper{background-color:#ffdab3;*zoom:1;box-shadow:0px 9px 20px 0px #ccc}.wrapper:after{content:" ";display:table;clear:both}.content{background-color:#f4f7fc;width:73%;float:left;padding:40px 30px 0}.content p:not(:last-of-type){margin-bottom:10px}.demo{padding:20px 0}.comment-all{margin-top:40px;padding:20px 30px;margin:40px -30px 0;background:#fff}.comment-all__title{font-size:20px;line-height:1;padding-bottom:18px;border-bottom:1px solid #f06eaa;margin-bottom:14px}.comment{background-color:#fff4e9;padding:20px;font-size:16px;margin-bottom:12px;*zoom:1}.comment:after{content:" ";display:table;clear:both}.comment__media{width:110px;float:left;font-size:15px;font-weight:700;text-align:center}.comment__media time{font-size:12px;display:block;margin-top:6px;font-weight:400}.comment__content{margin-left:128px;font-size:16px}.comment__content b{font-style:italic}.comment__result{margin-top:19px}.comment_color{background-color:#f4f7fc}.comment_space .comment__content{padding-top:16px}.comment_space2 .comment__content{padding-top:32px}.comment_space3 .comment__content{padding-top:22px}.comment_space4 .comment__content{padding-top:12px}.brands{margin-top:40px}.brands img{width:100%;display:block}.sidebar{padding:18px;width:27%;float:left}.banner,.adv{display:block}.banner img,.adv img{display:block;width:100%}.adv{margin-top:16px}.post__quote span{display:block}.comment__result:last-child img{max-height:290px}a:visited,a:hover,a:active,a{color:inherit;text-decoration:inherit}@media only screen and (min-device-width: 320px) and (max-device-width: 480px){*{-webkit-text-size-adjust:none}}@media only screen and (max-width: 900px){.form{margin-top:0;width:300px;float:right}.social{float:left}.out{padding:0 15px 0}.top{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}.top__left{float:none;width:100%;margin-top:15px}.top__right{width:100%;float:none}.post{max-width:560px}.post__human-name{font-size:22px}.post__quote{font-size:26px}.post__quote br{display:none}.post__list{margin-top:10px}.wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}.content{float:none;width:100%;padding:15px}.comment-all{padding:20px 15px;margin:20px -15px 0}.comment{padding:15px}.comment__media{width:90px;font-size:14px}.comment__content{margin-left:110px}.brands{margin-bottom:10px}.sidebar{float:none;width:100%}.banner img,.adv img{width:auto}.banner img{margin:auto}.adv{width:50%;float:left}.adv img{width:100%}}@media only screen and (max-width: 600px){.form{float:none;width:100%;clear:both;margin-top:10px}.social{float:none;text-align:left}.post__media{float:none;width:100%}.post__content{margin:10px 0 0}.comment__media{width:100%;float:none;font-size:16px}.comment__media time{font-size:16px;margin-top:0}.comment__content{margin:10px 0 0;padding:0 !important}.adv{float:none;width:70%;margin:20px auto 0}}@media only screen and (max-width: 500px){.adv{width:100%}}
	</style>
	<style>
		@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/WxrXJa0C3KdtC7lMafG4dRTbgVql8nDJpwnrE27mub0.woff2) format('woff2');unicode-range:U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/OpXUqTo0UgQQhGj_SFdLWBTbgVql8nDJpwnrE27mub0.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/1hZf02POANh32k2VkgEoUBTbgVql8nDJpwnrE27mub0.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/cDKhRaXnQTOVbaoxwdOr9xTbgVql8nDJpwnrE27mub0.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/K23cxWVTrIFD6DJsEVi07RTbgVql8nDJpwnrE27mub0.woff2) format('woff2');unicode-range:U+0102-0103, U+1EA0-1EF9, U+20AB}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/vSzulfKSK0LLjjfeaxcREhTbgVql8nDJpwnrE27mub0.woff2) format('woff2');unicode-range:U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/vPcynSL0qHq_6dX7lKVByfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/-2n2p-_Y08sg57CNWQfKNvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/u0TOpm082MNkS5K0Q4rhqvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+0102-0103, U+1EA0-1EF9, U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');unicode-range:U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/77FXFjRbGzN4aCrSFhlh3hJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/isZ-wbCXNKAbnjo6_TwHThJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/UX6i4JxQDm3fVTc1CPuwqhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/jSN2CGVDbcVyCnfJfjSdfBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/PwZc-YbIL414wB9rB1IAPRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0102-0103, U+1EA0-1EF9, U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aWxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215}
		@media only screen and (max-width: 900px){
		.top__right li{display: inline-block !important;}
		.top__right li:first-of-type{margin-right: 45px;}
		.top__right{margin-top: 15px !important; }
		}
	</style>
</head>
<body>
<!-- BEGIN  out-->
<div class="out">
	<div class="top">
		<div class="top__left">
			<div class="post">
				<div class="post__media"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/post-avatar.png" alt=""></a></div>
				<div class="post__content">
					<div class="post__human-name">Blogul Cezara Tacaluta</div>
					<div class="post__quote">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><span>“ROYAL GOLDEN MASK –</span></a><span> Cel mai nou si eficient produs de utilizat!”</span>
					</div>
					<ul class="post__list">
						<li class="post__list-item"><b>UPDATED</b></li>
						<li class="post__list-item rdate">12:53, <w class="prDate"></w></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="top__right"  style="text-align:center; margin-top: 35px;">
			<ul >
				<li style="display:block;" class="post__human-name"><a href="policy.php"> POLÍTICA </a></li>
				<li style="display:block;" class="post__human-name"><a href="contacts.php"> CONTACTOS </a></li>
			</ul>
			
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			<p>
				Odata cu inaintarea in varsta, apar modificari ale tenului, in diferite momente ale vietii,iar unul mai diaccentuat ntre acestea ar fi pierderea elasticitatii pielii. Pielea devine uscată, isi pierde din elasticitate aparand in acest caz ridurile si petele pe fata. Si dupa cum stim, fiecare femeie are propria metodă personala de ingrijire a tenului cu produse destinate exclusiv acestui domeniu. Unele utilizeza metodele populare de stopare a acestora,iar altele apeleaza la tratamentele cosmeticale, si nu in cele din urma la cel mai eficient produs din aceasta gama <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>. Rezultatele aplicării măștii sunt impresionante!
			</p>
			<p>
				<b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b> este un instrument eficient pentru mentinerea și redarea unui aspect al tenului mai tanar. Cu ajutorul <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b> se pot diminua ridurile, se inlatura aspectul de piele lipsita de elasticitate, de piele lasata, si totodata va reda un aspect al tenului mult mai estetic si curat si o stare de confort. Este foarte simplu și ușor. Am încredere deplină in <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>.
			</p>
			<div class="demo"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/result.jpg" alt=""></a></div>
			<p>
				Masca reface pielea uscata in piele netedă si elimină complet toate imperfecțiunile acesteia.Utilizarea regulată a măștilor au o foarte mare importanta  pentru ten, deoarece ajuta la mentinerea starii de sanatate a acestuia. Din compozitia acestei masti fac parte (Ulei de migdale, Coenzima Q10, Ioni de aur, Ulei de lavanda, Vitamina C, Galbenele, Acid hialuronic, Esenta de aloe) in ansamblu, <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>,  are un efect pozitiv: hrănește perfect pielea, mentine tenul proaspăt, si în mod activ lupta cu o varietate de leziuni ale pielii. Lipsa multora dintre aceste componente, în corp, duce la pierderea de lichide si aparitia ridurilor.
			</p>
			<p>
				Din momentul în care am început să folosesc <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>, am avut incredere si siguranta ca aceasta isi va face efectul asupra tenului. Ea are efect de fermitate si regenereaza celulele, în orice stadiu de îmbătrânire a pielii și la orice vârstă. Cu acest produs în orice situație, eu sunt la inaltime. Acesta vă permite sa aveti un aspect al tenului mai tanar si intretinut pentru mai mult timp!
			</p>
			<div class="brands"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/brands.png" alt=""></a></div>

			<div class="comment-all">
				<div class="comment-all__title">COMENTARII</div>
				<div class="comment">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava1.png" alt=""></a>
						<div class="comment__media-desc">
							Xenia, 28 de ani
							<time class="rdate" datetime="28.01.2016"><w class="commm"></w> - 14:32</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Buna ziua! Eu folosesc,de asemenea <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>, care face tenul mai curat mai sanatos indepartand toate petele si impuritatile de pe el.
						</p>
						<div class="comment__result"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/img1.jpg" alt=""></a></div>
					</div>
				</div>
				<div class="comment comment_color comment_space">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava2.png" alt=""></a>
						<div class="comment__media-desc">
							Zoe, 29 de ani
							<time class="rdate" datetime="28.01.2016"><w class="commm"></w> - 14:29</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Acest articol este foarte interesant. Esti foare frumoasa cu un ten bine ingrijit. Trebuie sa cumpar <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>.
						</p>
					</div>
				</div>
				<div class="comment comment_space">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava3.png" alt=""></a>
						<div class="comment__media-desc">
							Ruxandra, 30 de ani
							<time class="rdate" datetime="28.11.2016"><w class="commm"></w> - 14:00</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Bine ai venit! Sora mea foloseste <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>. Aceasta ajută la o imbunatatire notabila a aspectul pielii faciae. Intr-adevar este o reala schimbare! Mă gândesc tot mai mult sa comand aceasta mască.
						</p>
					</div>
				</div>
				<div class="comment comment_color comment_space2">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava4.png" alt=""></a>
						<div class="comment__media-desc">
							Virginia, 25 de ani
							<time class="rdate" datetime="28.11.2016"><w class="commm"></w> - 13:59</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Am aflat despre <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b> dintr-o revista de specialitate, citind de mijloace eficiente pentru curățarea tenului. Am folosit cu plăcere. Nu are efecte secundare.
						</p>
					</div>
				</div>
				<div class="comment comment_space">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava5.png" alt=""></a>
						<div class="comment__media-desc">
							Valentina, 40 de ani
							<time class="rdate" datetime="28.11.2016"><w class="commm"></w> - 13:50</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Bună ziua tuturor! Christine, mulțumesc pentru articol. Masca are numeroase efecte benefice, pielea a devenit mai neteda cu o tenta zilnica de prospețime. Tenul a devenit mai sănătos! Ridurile dispar repede.
						</p>
						<div class="comment__result"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/img3.jpg" alt=""></a></div>
					</div>
				</div>
				<div class="comment comment_color comment_space">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava6.png" alt=""></a>
						<div class="comment__media-desc">
							Rafaela, 33 de ani
							<time class="rdate" datetime="28.11.2016"><w class="commm"></w> - 13:48</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Tenul este surprinzator de curat. Chiar imi doresc sa comand <b><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Royal Golden Mask</a></b>!
						</p>
					</div>
				</div>
				<div class="comment comment_space4">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava7.png" alt=""></a>
						<div class="comment__media-desc">
							Olimpia, 47 de ani
							<time class="rdate" datetime="28.11.2016"><w class="commm"></w> - 13:48</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Eu folosesc această mască de o lungă perioadă de timp. Acesta conține mai multe ingrediente benefice care ajuta la curatarea pielii. În ciuda faptului că am fumat mai mult de 15 ani, cu ajutorul ei, am avut ocazia de a avea un ten mai frumos, luminous si ridurile au inceput sa dispara.
						</p>
						<div class="comment__result"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/img5.jpg" alt=""></a></div>
					</div>
				</div>
				<div class="comment comment_color comment_space3">
					<div class="comment__media">
						<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/ava8.png" alt=""></a>
						<div class="comment__media-desc">
							Narcisa, 49 de ani
							<time class="rdate" datetime="28.11.2016"><w class="commm"></w> - 13:00</time>
						</div>
					</div>
					<div class="comment__content">
						<p>
							Masca ofera tratamente faciale profesionale! Sunt mulțumita de rezultatele obținute prin aplicarea mastii! Pielea devine elastică, si nu se mai exfoliaza. Acum pot sa spun ca am un aspect al tenului mai tanar decat varsta mea, si ma simt excelent!
						</p>
						<div class="comment__result"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/img6.jpg" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="banner"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/banner.jpg" alt=""></a>
			<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="adv"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/adv1.jpg" alt=""></a>
			<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="adv"><img src="http://d3isoh8x5r7c7o.cloudfront.net/ro/gm/skin/img/adv2.jpg" alt=""></a>
		</div>
	</div>
</div>
<!-- END out-->

<script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
<script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
<script>
	printCommentsDate('.commm');
	printDateSting('.prDate','ro',-10);
</script>
</body>
</html>
