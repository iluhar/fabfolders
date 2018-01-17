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
<html lang="ro">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.ico" rel="icon" type="image/x-icon">
		<style>
			@charset "UTF-8";html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;vertical-align:baseline}body,html{height:100%}img,fieldset,a img{border:none}input[type="text"],input[type="email"],input[type="tel"],textarea{-webkit-appearance:none}textarea{overflow:auto}input,button{margin:0;padding:0;border:0}input[type="submit"],button{cursor:pointer}div,input,textarea,select,button,h1,h2,h3,h4,h5,h6,a,span,a:focus{outline:none}ul,ol{list-style-type:none}table{border-spacing:0;border-collapse:collapse;width:100%}html{-webkit-box-sizing:border-box;box-sizing:border-box}*,:before,:after{-webkit-box-sizing:inherit;box-sizing:inherit}body{font-family:Roboto,Arial,sans-serif;font-size:18px;line-height:1.4;color:#010101;font-weight:400}b{font-weight:700}img{display:inline-block;max-width:100%}.top,.wrapper{max-width:1170px;margin:auto;position:relative}.form{position:relative;margin-top:47px}.search{border-radius:19px;background-color:#f4f0eb;color:#b7b7b7;font:italic 14px Roboto,Arial,sans-serif;padding:11px 50px 11px 16px;width:100%;display:block}.social{font-size:0;text-align:right}.social__item{display:inline-block;vertical-align:top;margin:0 2px}.social a{display:block;width:36px;height:36px;background-size:contain;cursor:pointer;-webkit-transition:-webkit-transform .3s;transition:-webkit-transform .3s;transition:transform .3s;transition:transform 0.3s,-webkit-transform .3s}.social a:hover{-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05)}.fb{background:url(./img/fb.svg) no-repeat center}.tw{background:url(./img/tw.svg) no-repeat center}.g{background:url(./img/g.svg) no-repeat center}.pi{background:url(./img/pi.svg) no-repeat center}.out{background-color:#fff;padding:0 15px 75px;min-width:320px}.top{padding-top:10px;*zoom:1}.top:after{content:" ";display:table;clear:both}.top__left{width:73%;float:left}.top__right{width:27%;float:left}.post{font-family:"Times New Roman",Arial,sans-serif;text-align:center;margin-bottom:16px;max-width:688px}.post__media{width:23.25581%;overflow:hidden;float:left}.post__media img{max-width:100%;max-height:100%}.post__content{margin-left:25.72674%}.post__human-name{display:inline-block;font-style:italic;font-size:20px;line-height:1;padding-bottom:7px;border-bottom:1px solid #f06eaa;margin-bottom:15px}.post__quote{font-size:35px;font-weight:800;line-height:1.2}.post__list{font-size:0;font-family:Roboto,Arial,sans-serif;font-weight:400;color:#959595;margin-top:24px}.post__list-item{display:inline-block;vertical-align:top;font-size:14px;text-transform:uppercase}.post__list-item b{margin-right:6px}.post__list-item + .post__list-item{margin-left:15px}.wrapper{background-color:#ffdab3;*zoom:1;box-shadow:0 9px 20px 0 #ccc}.wrapper:after{content:" ";display:table;clear:both}.content{background-color:#f4f7fc;width:100%;float:left;padding:40px 30px 0; padding-bottom:100px;}.content p:not(:last-of-type){margin-bottom:10px}.demo{padding:20px 0}.comment-all{padding:20px 30px;margin:40px -30px 0;background:#fff}.comment-all__title{font-size:20px;line-height:1;padding-bottom:18px;border-bottom:1px solid #f06eaa;margin-bottom:14px}.comment{background-color:#fff4e9;padding:20px;font-size:16px;margin-bottom:12px;*zoom:1}.comment:after{content:" ";display:table;clear:both}.comment__media{width:110px;float:left;font-size:15px;font-weight:700;text-align:center}.comment__media time{font-size:12px;display:block;margin-top:6px;font-weight:400}.comment__content{margin-left:128px;font-size:16px}.comment__content b{font-style:italic}.comment__result{margin-top:19px}.comment_color{background-color:#f4f7fc}.comment_space .comment__content{padding-top:16px}.comment_space2 .comment__content{padding-top:32px}.comment_space3 .comment__content{padding-top:22px}.comment_space4 .comment__content{padding-top:12px}.brands{margin-top:40px}.brands img{width:100%;display:block}.sidebar{padding:18px;width:27%;float:left}.banner,.adv{display:block}.banner img,.adv img{display:block;width:100%}.adv{margin-top:16px}.post__quote span{display:block}.comment__result:last-child img{max-height:290px}a:visited,a:hover,a:active,a{color:inherit;text-decoration:inherit}@media only screen and (min-device-width: 320px) and (max-device-width: 480px){*{-webkit-text-size-adjust:none}}@media only screen and (max-width: 900px){.form{margin-top:0;width:300px;float:right}.social{float:left}.out{padding:0 15px}.top{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}.top__left{float:none;width:100%;margin-top:15px}.top__right{width:100%;float:none}.post{max-width:560px}.post__human-name{font-size:22px}.post__quote{font-size:26px}.post__quote br{display:none}.post__list{margin-top:10px}.wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}.content{float:none;width:100%;padding:15px}.comment-all{padding:20px 15px;margin:20px -15px 0}.comment{padding:15px}.comment__media{width:90px;font-size:14px}.comment__content{margin-left:110px}.brands{margin-bottom:10px}.sidebar{float:none;width:100%}.banner img,.adv img{width:auto}.banner img{margin:auto}.adv{width:50%;float:left}.adv img{width:100%}}@media only screen and (max-width: 600px){.form{float:none;width:100%;clear:both;margin-top:10px}.social{float:none;text-align:left}.post__media{float:none;width:100%}.post__content{margin:10px 0 0}.comment__media{width:100%;float:none;font-size:16px}.comment__media time{font-size:16px;margin-top:0}.comment__content{margin:10px 0 0;padding:0!important}.adv{float:none;width:70%;margin:20px auto 0}}@media only screen and (max-width: 500px){.adv{width:100%}}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/WxrXJa0C3KdtC7lMafG4dRTbgVql8nDJpwnrE27mub0.woff2) format("woff2");unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/OpXUqTo0UgQQhGj_SFdLWBTbgVql8nDJpwnrE27mub0.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/1hZf02POANh32k2VkgEoUBTbgVql8nDJpwnrE27mub0.woff2) format("woff2");unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/cDKhRaXnQTOVbaoxwdOr9xTbgVql8nDJpwnrE27mub0.woff2) format("woff2");unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/K23cxWVTrIFD6DJsEVi07RTbgVql8nDJpwnrE27mub0.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/vSzulfKSK0LLjjfeaxcREhTbgVql8nDJpwnrE27mub0.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:italic;font-weight:400;src:local('Roboto Italic'),local(Roboto-Italic),url(https://fonts.gstatic.com/s/roboto/v18/vPcynSL0qHq_6dX7lKVByfesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/-2n2p-_Y08sg57CNWQfKNvesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/u0TOpm082MNkS5K0Q4rhqvesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/CWB0XYA8bzo0kSThX0UTuA.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/77FXFjRbGzN4aCrSFhlh3hJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/isZ-wbCXNKAbnjo6_TwHThJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/UX6i4JxQDm3fVTc1CPuwqhJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/jSN2CGVDbcVyCnfJfjSdfBJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/PwZc-YbIL414wB9rB1IAPRJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aWxJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}
			@media only screen and (max-width: 900px){
		.top__right li{display: inline-block !important;}
		.top__right li:first-of-type{margin-right: 45px;}
		.top__right{margin-top: 15px !important; }
		}
		</style>
		<title> CONTATOS </title>
	</head>
	<body>
		<div class="out">
			<div class="top">
				<div class="top__left">
					<div class="post">
						<div class="post__media"><a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>"><img src="img/post-avatar.png" alt=""></a></div>
						<div class="post__content">
							<div class="post__human-name">Blogul Cezara Tacaluta</div>
							<div class="post__quote">
								<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>"><span>“ROYAL GOLDEN MASK –</span></a><span> Cel mai nou si eficient produs de utilizat!”</span>
							</div>
							
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
					<center><h1> CONTATOS </h1></center>
					<center>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.8499984210357!2d-3.6351529499765896!3d40.42412107667199!2m3!1f0!2f39.137247145370544!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0xd422f6fa9635933%3A0xc91831329f8af2f1!2sPELUQUER%C3%8DA+CENTRO+MASAJES+ROEL+METRO+GARC%C3%8DA+NOBLEJAS+MADRID!5e1!3m2!1suk!2sua!4v1512723202648" frameborder="0" style="border:0;width:90%;height:250px;max-width:600px;" allowfullscreen="" ></iframe>
					</center>
					<address >
						<center>
							<table style="border:none;width:90%;text-align:center;max-width:600px;">
								<tbody style="border: none;">
									<tr style="border: none;">
										<td style="border: none;">
											<h3>ENDEREÇO</h3>
											<div class="adr">
												<div class="street-address">Zeller Str. 75/5</div>
												<div class="postal-code">28001 <span class="locality">Mittersill, Österreich</span></div>
											</div>
										</td>
										<td style="border: none;">
											<h3>CONTATOS</h3>
											<div>Telefon: <span class="tel">(+34) 910340050 LLÁMANOS</span></div>
											<div>Fax: <span class="tel">(+34) 651329839 ESCRÍBENOS</span></div>
											<div>E-mail: <span class="mail">peluqeriaroel777@gmail.com </span></div>
										</td>
									</tr>
								</tbody>
							</table>
						</center>
					</address>
					<center>
						<form target="" action="mail.php" method="post" id="commentform" style="width:80%; max-width:600px;">		
							<label for="email">E-mail <span class="required">(Obrigatório)</span> </label>
							<input id="email" name="email" type="email" value="" required style="width:80%;max-width:400px;"><br/>
							<label for="author">    Nome <span class="required">(Obrigatório)</span></label>
							<input id="author" name="author" type="text" value="" style="width:80%;max-width:400px;"><br/>
							<input name="submit" type="submit" id="comment-submit" class="submit" value="Subscrever" style="padding: 5px;border: 1px solid #000;margin-top: 10px;" />
						</form>
					</center>
				</div>
			</div>
		</div>
	</body>
</html>