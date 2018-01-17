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
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.png" rel="icon" type="image/x-icon">
		<style>
			*{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}@font-face{font-family:Glober Black;src:url(fonts/GloberBlack.eot);src:url(fonts/GloberBlack.woff2) format("woff2"),url(fonts/GloberBlack.woff) format("woff"),url(fonts/GloberBlack.ttf) format("truetype"),url(fonts/GloberBlack.svg#GloberBlack) format("svg"),url(fonts/GloberBlack.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-500;src:url(fonts/MuseoSansCyrl-500.eot);src:url(fonts/MuseoSansCyrl-500.woff2) format("woff2"),url(fonts/MuseoSansCyrl-500.woff) format("woff"),url(fonts/MuseoSansCyrl-500.ttf) format("truetype"),url(fonts/MuseoSansCyrl-500.svg#MuseoSansCyrl-500) format("svg"),url(fonts/MuseoSansCyrl-500.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-900;src:url(fonts/MuseoSansCyrl-900.woff) format("woff"),url(fonts/MuseoSansCyrl-900.ttf) format("truetype"),url(fonts/MuseoSansCyrl-900.svg#MuseoSansCyrl-900) format("svg");font-weight:400;font-style:normal}body{background:#fff;font-family:MuseoSansCyrl-500,sans-serif;font-size:24px}h1{font-size:2.5em;color:#fff}img{max-width:100%}.clearfix:after{content:"";clear:both;display:inline-block}.mb20{margin-bottom:20px!important}.mt125{margin-top:75px!important}.container{width:1440px;margin:0 auto;position:relative;padding:0 15px}.container:after{content:"";clear:both;display:block}.header{background:#fff url(img/header-back.jpg) no-repeat top;padding-top:65px;padding-bottom:60px;}.header .logo{margin-left:0}.header .navigation{font-family:Glober Black,sans-serif;font-size:.67em;line-height:36px;float:right;text-transform:uppercase;margin-right:0}.header .navigation a{color:#fff;text-transform:uppercase;text-decoration:none;margin-right:105px;transition:color .3s}.header .navigation a:last-child{margin-right:0}.header .navigation a:hover{color:#ed5e42}.header__author{font-size:1.25em;color:hsla(0,0%,100%,.6);display:block;width:100%;text-align:center;margin-top:285px;position:relative}.header__author:after{content:"";position:absolute;display:inline-block;width:100px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-30px;margin:0 auto}.header__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2.5em;margin:90px auto 0;text-align:center;max-width:650px}.main{margin:0 10%;}.main .authorBlock{text-align:center;width:300px;margin:90px auto 120px;background:url(img/avatar.png) no-repeat top;padding-top:120px;position:relative;line-height:1em}.main .authorBlock__name{display:block;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em}.main .authorBlock__status{color:rgba(0,0,0,.6)}.main .authorBlock__date,.main .authorBlock__status{display:block;font-size:.58em}.main .authorBlock__date b{font-family:MuseoSansCyrl-900,sans-serif}.main .authorBlock:after{content:"";position:absolute;display:inline-block;width:50px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-50px;margin:0 auto}.main__text{font-size:1em;line-height:1.2em;margin-bottom:50px}.main__text-bold{font-family:MuseoSansCyrl-900,sans-serif}.main__text-red{color:red}.main__text-red a{text-decoration:none;color:inherit}.main__text-red a:hover{text-decoration:underline}.main__text-bordered{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;line-height:115px;border-top:4px solid #000;border-bottom:4px solid #000}.main__img{display:block;margin:0 auto 50px}.main__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2em;margin:130px auto;text-align:center}.main__list li{counter-increment:a;margin-bottom:15px}.main__list li:before{margin-right:10px;content:counter(a) ")"}.main__list li:before,.main__orderLink{font-family:MuseoSansCyrl-900,sans-serif}.main__orderLink{font-size:.75em;line-height:73px;display:block;margin:70px auto;width:320px;height:73px;border-radius:36.5px;-moz-border-radius:36.5px;-webkit-border-radius:36.5px;background-color:#282828;text-decoration:none;color:#fff;text-align:center;transition:background-color .3s}.main__orderLink:hover{background-color:#ed5e42}.main__orderLink-comm{padding-left:20px;float:left;background:#ed5e42 url(img/orderLink-icon.png) no-repeat 40px}.main__orderLink-comm:hover{background-color:#282828}.main .comments__social{display:block}.main .comments__title{font-family:Glober Black,sans-serif;font-size:1.25em;color:#83a79e;margin:50px auto;position:relative;display:inline-block}.main .comments__title:after{content:"23";position:absolute;right:-60px;top:50%;margin-top:-25px;font-size:.75em;line-height:52px;text-align:center;width:45px;height:45px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;background-color:#83a79e;color:#fff}.main .comments .comment{padding:35px 0;border-bottom:2px solid #ededed}.main .comments .comment .person{float:left;width:125px;margin-right:20px;text-align:center}.main .comments .comment .person__img{display:inline-block;width:48px;height:48px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden}.main .comments .comment .person__name{font-family:MuseoSansCyrl-900,sans-serif;font-size:.5em;display:block;margin-top:15px;text-align:center}.main .comments .comment__text{font-size:.75em;min-height:80px;margin-left:145px;position:relative}.main .comments .comment__text p{padding-top:10px;padding-bottom:20px;max-width:650px}.main .comments .comment__text a{font-family:MuseoSansCyrl-900,sans-serif;position:absolute;bottom:0;left:0;font-size:.875rem;color:#000;transition:color .3s}.main .comments .comment__text a:hover{color:#ed5e42}.main .comments .comment__text span{position:absolute;color:rgba(0,0,0,.6);font-size:.875rem;bottom:0;left:135px}.main .comments .comment__text img{margin:0 auto 20px}.sidebar{float:right;margin-left:-320px;width:320px;position:absolute;top:0;bottom:0;right:15px;padding-top:40px}.sidebar__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;text-transform:uppercase;margin:50px auto}.sidebar img{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-right:25px;margin-bottom:35px;transition:transform .2s cubic-bezier(.68,-.55,.27,1.55)}.sidebar img:hover{-webkit-transform:scale(1.2);transform:scale(1.2)}.sidebar .feedItem{position:relative;margin-bottom:50px}.sidebar .feedItem__left{margin-right:120px}.sidebar .feedItem__left h3{font-size:1rem;color:#000;position:relative;margin-bottom:25px}.sidebar .feedItem__left h3:after{content:"";position:absolute;bottom:-10px;left:0;width:100%;height:2px;background:#222}.sidebar .feedItem__left h3 a{color:inherit;text-decoration:none;transition:color .3s}.sidebar .feedItem__left h3 a:hover{color:#ed5e42}.sidebar .feedItem__left span{font-size:.5em;float:left}.sidebar .feedItem__left span.rdate{float:right}.sidebar .feedItem__right{font-family:MuseoSansCyrl-900,sans-serif;width:100px;margin-left:-100px;position:absolute;top:0;bottom:0;right:0;text-align:center}.sidebar .feedItem__right span{display:block;font-size:1.25em;color:#8ff060;text-align:center}.sidebar .feedItem__right a{color:#000;font-size:.5em}.sidebar .showMore{font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;text-decoration:none;color:#000;background:url(img/arrow.png) no-repeat 100%;padding-right:35px;transition:color .2s}.sidebar .showMore:hover{color:#ed5e42}.sidebar .discuss{font-size:.58em;line-height:1.2em;margin-bottom:25px;display:block}.sidebar .discuss a{font-family:MuseoSansCyrl-900,sans-serif;color:inherit;transition:color .2s}.sidebar .discuss a:hover{color:#ed5e42}.footer{text-align:center;background-color:#000;color:#fff;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;min-height:130px;line-height:130px}@media (min-width:1919px){.header{background-size:cover}.header .logo{margin-left:-140px}.header .navigation{margin-right:-100px}}@media (max-width:1460px){.container{width:1200px}}@media (max-width:1220px){.container{width:940px}}@media (max-width:960px){.container{width:90%}.header .navigation a{margin-right:30px}.main{margin:0;}.main .authorBlock{margin:30px auto 90px}.main__title{margin:50px auto}.main__orderLink-comm,.sidebar{float:none}.sidebar{margin:0 auto 100px;position:static;clear:both;padding-top:0;width:100%}.sidebar__bloggers{text-align:center}.sidebar img{margin-right:10px;margin-left:10px}}@media (max-width:560px){.container{width:100%}.header{background-position-x:-690px}.header__title{font-size:2em}.header .logo{display:block;margin:0 auto}.header .navigation{float:none;display:block;text-align:center;margin-top:30px}.header .navigation a{margin-right:15px;margin-left:15px}.main .authorBlock{width:100%}.main__text{font-size:1rem;margin-bottom:30px}.main__text-bordered{line-height:80px}.main__title{font-size:1.5rem;margin:30px auto}.main__list{font-size:1rem}.main__orderLink{width:100%;max-width:320px;font-size:1rem;margin:30px auto}.main .comments__title{margin:40px auto 20px}.main .comments .comment .person{width:100px;float:none;margin:0 auto}.main .comments .comment__text{float:none;margin:20px auto 0}.main .comments .comment__text p{font-size:1rem;line-height:1.2rem;padding-bottom:30px}.sidebar__title{font-size:1.5rem;text-align:center}.main{margin:0}}
			body{min-width: 520px;}
		</style>
		<title> KONTAKTY </title>
	</head>
	<body>
		<div>
			<header class="header">
				<div class="container">
					<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>"><img src="img/bestblog.png" alt="BestBlog" class="logo"></a>
					<nav class="navigation">
						<a href="policy.php"> POLITYKA </a>
						<a href="contacts.php"> KONTAKTY </a>
					</nav>
				</div>
			</header>
			<div class="container">
				<div class="main">
					<h2 class="main__title"> KONTAKTY </h2>
					<center>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156449.59706772928!2d20.91217538684992!3d52.21567977985169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecb7d652c86eb%3A0xfedb629058ffdf4e!2sX-Gym+%26+Fitness+24!5e0!3m2!1sru!2sua!4v1514910532999" frameborder="0" style="border:0;width:90%;height:250px;max-width:600px;" allowfullscreen="" ></iframe>
					</center>
					<address >
						<center>
							<table style="border:none;width:90%;text-align:center;max-width:600px; margin-bottom:20px;">
								<tbody style="border: none;">
									<tr style="border: none;">
										<td style="border: none;">
											<h3>ADRESA</h3>
											<div class="adr">
												<div class="street-address">Wolska 19/25</div>
												<div class="postal-code">01-207 <span class="locality">Warszawa, Poland</span></div>
											</div>
										</td>
										
									</tr>
								</tbody>
							</table>
						</center>
					</address>
					<center>
						<form target="" action="mail.php" method="post" id="commentform" style="width:80%; max-width:600px;">
							<label for="email">E-mail <span class="required">(wymagany)</span> </label>
							<input id="email" name="email" type="email" value="" required style="width:80%;max-width:400px;"><br/>
							<label for="author">    Nazwa <span class="required">(wymagany)</span></label>
							<input id="author" name="author" type="text" value="" style="width:80%;max-width:400px;"><br/>
							<input name="submit" type="submit" id="comment-submit" class="submit" value="Předplatit">
						</form>
					</center>
					<p style="background: #CCC; font-size: 12px; margin: 15px 0; padding: 15px; text-align: center"> © <span class="ryear">2017</span> </p>
				</div>
			</div>
		</div>

		<script src="https://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
	</body>
</html>
