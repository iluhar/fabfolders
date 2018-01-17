<?php
$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : '';
$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';
$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';
$utm_term = isset($_GET['utm_term']) ? $_GET['utm_term'] : '';
$utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
$sub_id = isset($_GET['sub_id']) ? $_GET['sub_id'] : '';
$sub_id_1 = isset($_GET['sub_id_1']) ? $_GET['sub_id_1'] : '';
$sub_id_2 = isset($_GET['sub_id_2']) ? $_GET['sub_id_2'] : '';
$sub_id_3 = isset($_GET['sub_id_3']) ? $_GET['sub_id_3'] : '';
$sub_id_4 = isset($_GET['sub_id_4']) ? $_GET['sub_id_4'] : '';
$land = isset($_GET['land']) ? $_GET['land'] : '';

$stream_id = '';
$country = 'PT';
$code = '1499';
$category = 'Diet';
$offer = 'Choco Lite';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
    <title>Choco Lite</title>
	<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.png" rel="icon" type="image/x-icon">

    <style>
  @font-face{font-family:Lobster;src:local(Lobster),local(Lobster-Regular),url(https://fonts.gstatic.com/s/lobster/v18/c28rH3kclCLEuIsGhOg7evY6323mHUZFJMgTvxaG2iE.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Lobster;src:local(Lobster),local(Lobster-Regular),url(https://fonts.gstatic.com/s/lobster/v18/RdfS2KomDWXvet4_dZQehvY6323mHUZFJMgTvxaG2iE.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:Lobster;src:local(Lobster),local(Lobster-Regular),url(https://fonts.gstatic.com/s/lobster/v18/9NqNYV_LP7zlAF8jHr7f1vY6323mHUZFJMgTvxaG2iE.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Lobster;src:local(Lobster),local(Lobster-Regular),url(https://fonts.gstatic.com/s/lobster/v18/cycBf3mfbGkh66G5NhszPQ.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}*{margin:0;padding:0;border:0;outline:none}li{list-style:none}a{text-decoration:none}body{font-family:Roboto,arial,sans-serif;font-size:15px;color:#6d6c6c}.clearfix:before,.clearfix:after{content:" ";display:table}.clearfix:after{clear:both}input[type=text],select{background:url(img/input.png);display:block;width:268px;height:50px;line-height:50px;font-family:Roboto,arial,sans-serif;padding:0 20px;font-size:15px;color:#fff;margin:0 auto 13px}#footer input::-webkit-input-placeholder{color:#fff}#footer input::-moz-placeholder{color:#fff}select{width:308px;padding:0 0 0 20px}select option{color:#000}.width{width:990px;margin:0 auto;position:relative}.clear{clear:both;display:block}.button{background:none;border:3px solid #fff;width:262px;height:56px;line-height:56px;display:block;font-size:25px;font-family:Lobster,arial,sans-serif;color:#fff;text-align:center;cursor:pointer;margin:0 auto}.button:hover{background:#fff;color:#2e150f}.title{color:#2e150f;font-size:40px;line-height:45px;text-align:center;font-family:Lobster,arial,sans-serif}h1,h2,h3,h4{font-weight:400;font-size:100%}.video{width:550px;margin:0 auto;margin-top:20px}#header{background:url(img/top.jpg) no-repeat center 0;height:739px;color:#fff}#header .block{width:550px;text-align:center}#header .block h1{padding:84px 0 0;font-size:85px;line-height:1;font-family:Lobster,arial,sans-serif}#header .block h2{font-size:24px;font-weight:500;padding:15px 0 0}#header .block .list{line-height:30px;padding:45px 0 0}#header .block .sale{font-size:30px;color:#f2eb2e;font-family:Lobster,arial,sans-serif;line-height:1;padding:73px 0 0}#header .block .action{padding:15px 0 0;color:#f2eb2e;font-weight:500}#header .price{padding:35px 0 47px}#header .price div,#header .price del{font-size:40px;display:inline-block;line-height:1;padding:0 15px;vertical-align:middle}#header .price del{font-size:20px;color:#c7c0be}#steps .title{padding:80px 0 40px}#steps .item{text-align:center;width:33%;float:left}#steps .item img{vertical-align:bottom}#steps .item div{height:74px}#steps .item span{vertical-align:bottom;height:74px;display:inline-block}#steps .item p{font-weight:500;padding:25px 0 0}#steps .text{text-align:center;padding:0 0 100px}#steps .text .title{font-size:25px;line-height:1;padding:96px 0 33px}#steps .text p{line-height:25px}#sostav{background:url(img/sostav.jpg) no-repeat center 0;padding-bottom:60px}#sostav .title{padding:70px 0 0}#sostav h2{padding:20px 0 0;font-weight:500;color:#2e150f;text-align:center}#sostav .item{text-align:center;width:308px;float:left;padding:0 0 95px;position:relative}#sostav .item.first{margin:-30px 0 0}#sostav .item.right{float:right}#sostav .item img{margin:0 0 -18px;position:relative;z-index:2}#sostav .item .message{background:#fff;font-size:14px;border-radius:15px;-moz-border-radius:15px;padding:0 10px 30px}#sostav .item .message div{padding:33px 0 15px;font-size:23px;line-height:1;color:#2e150f;font-family:Lobster,arial,sans-serif}#sostav .item.third{padding-bottom:20px}#sostav .item .message p{line-height:23px}#sostav .plaha{position:absolute;width:200px;text-align:center;bottom:92px;left:50%;margin-left:-100px;color:#205a22;font-size:20px;font-family:Lobster,cursive;text-shadow:1px 1px 2px rgba(255,255,255,.5);-webkit-background-clip:text}#result{padding:75px 0 90px}#result h2{padding:20px 0 65px;color:#2e150f;font-weight:500;text-align:center}#result .item{width:20%;float:left;text-align:center}#result .item img{vertical-align:bottom}#result .item p{padding:25px 0 0}#info-block{background:url(img/info-block.jpg) no-repeat center 0;min-height:585px}#info-block p{line-height:25px;padding:60px 425px 0 0}#compare{background:url(img/compare.jpg) no-repeat center bottom;height:680px}#compare .title{color:#fff;padding:50px 0 0}#compare h2{color:#2e150f;text-align:center;padding:22px 0 0;font-weight:500}#compare .wr{position:relative;width:445px;top:60px;left:52%}#compare .wr .text1{padding-top:15px;text-align:center;font-family:Lobster,cursive;font-size:30px;margin:0 0 215px;color:#5b5a56}#compare .wr .text1 span{color:#ff0108;font-size:22px;display:block}#compare .wr .text2{padding:0;margin:0 0 50px;font-family:Lobster,cursive;font-size:0}#compare .wr .text2 li{list-style-type:none;margin:0;padding:0;width:90px;display:inline-block;text-align:center;color:#5b5a56;font-size:13px}#compare .wr .text2 li:first-child{width:35px;margin-right:45px}#compare .wr .text3{font-size:0}#compare .wr .text3 span{display:block;font-family:Lobster,cursive;width:50%;padding-left:50px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-size:13px;color:#5b5a56;display:inline-block;line-height:1.5;vertical-align:middle}#compare .wr .text3 span:last-child{padding-left:35px}#doctor .title{padding:72px 0 68px}#doctor p{line-height:25px;width:565px;font-weight:300}#doctor .info{float:right;text-align:center}#doctor .info img{vertical-align:bottom}#doctor .info span{display:block;font-size:21px;line-height:25px;font-family:Lobster,arial,sans-serif;padding:24px 0 0}#doctor .text{text-align:center;font-weight:300;padding:0 0 95px}#doctor .text .title{padding:40px 0 20px;font-size:25px;line-height:1}#reviews{background:url(img/reviews.jpg) no-repeat center 0;height:1161px}#reviews .title{color:#fff;padding:70px 0 0}#reviews h2{color:#fff;font-weight:300;text-align:center;padding:20px 0 78px}#reviews .review{background:#fff;border-radius:15px;-moz-border-radius:15px;padding:24px 24px 0;height:628px;width:254px;text-align:center;float:left}#reviews .review.center{margin:0 42px}#reviews .review img{vertical-align:bottom}#reviews .review .date{overflow:hidden}#reviews .review .date div{padding:15px 0 25px;width:50%;float:left}#reviews .review .name{font-size:23px;color:#2e150f;line-height:1;font-family:Lobster,arial,sans-serif}#reviews .review .email{color:#2e150f;padding:17px 0 35px}#reviews .review p{line-height:25px;font-weight:300;text-align:left}#reviews .buy div{padding:60px 0 38px;font-size:18px;color:#fff;text-align:center}#info-block2{padding:40px 0 0}.info__content{width:650px;margin:0 auto}#info-block2 .title{font-size:25px;line-height:30px;text-align:center;height:139px}#info-block2 .title.second{text-align:center;padding:30px 0 0}#info-block2 .title span{display:inline-block;vertical-align:middle;height:139px}#info-block2 .title div{display:inline-block;vertical-align:middle}#info-block2 .left{float:left;width:272px}#info-block2 .right{float:right;width:325px}#info-block2 .center{width:290px;margin:0 0 0 325px}#info-block2 p{line-height:25px;font-weight:300;text-align:center}#how-buy{padding:95px 0}#how-buy .title{padding:0 0 60px}#how-buy .item{width:33%;float:left;text-align:center}#how-buy .item img{vertical-align:bottom}#how-buy .item p{font-weight:500;line-height:25px;padding:25px 30px 0}#footer{background:url(img/footer.jpg) no-repeat center 0;height:686px}#footer .left{color:#fff;text-align:center;width:550px;float:left}#footer .left h1{padding:84px 0 0;font-size:85px;line-height:1;font-family:Lobster,arial,sans-serif}#footer .left h2{font-size:24px;font-weight:500;padding:15px 0 0}#footer .left .sale{font-size:30px;color:#f2eb2e;font-family:Lobster,arial,sans-serif;line-height:1;padding:243px 0 0}#footer .left .action{padding:15px 0 0;color:#f2eb2e;font-weight:500}#footer .price{padding:35px 0 47px}#footer .price div,#footer .price del{font-size:40px;display:inline-block;line-height:1;padding:0 15px;vertical-align:middle}#footer .price del{font-size:20px;color:#c7c0be}#footer .time{text-align:center;color:#f2eb2e;padding:120px 0 75px}#footer .time .name-t{font-size:18px;font-weight:500;padding:0 0 25px}#footer #timer *{display:inline-block;vertical-align:middle;font-size:50px;line-height:1;font-family:Lobster,arial,sans-serif}#footer #timer div{width:63px}#footer #timer .dots{padding:0 5px}#footer .right{float:right}#footer .button{width:307px;height:63px}#footer .prices{color:#fff;font-size:20px;text-align:center;line-height:1.5;margin-bottom:20px}#bottom{background:#141414;font-family:arial,sans-serif;font-size:13px;color:#ccc;text-align:center;padding:30px 0}#bottom a{color:#ccc;text-decoration:underline}#bottom a:hover{text-decoration:none}#howuse{width:100%}#howuse h2{color:#2e150f;font-size:40px;line-height:45px;text-align:center;font-family:Lobster,arial,sans-serif;margin-bottom:40px}#howuse .hu_step{float:left;width:33%;min-width:280px;margin-bottom:40px}#howuse .hu_step img{width:280px;display:block;margin:0 auto 20px;border:1px dashed rgba(125,255,125,.7)}#howuse .hu_step .hu_title{color:#2e150f;text-align:center;font-size:30px;font-family:Lobster,arial,sans-serif}#howuse .hu_step p{width:280px;margin:20px auto 0}@media screen and (max-width:1023px){.info__content{max-width:610px;width:auto}}@media screen and (max-width:889px){#howuse .hu_step{width:50%}#howuse .hu_step:last-of-type{float:none;clear:both;margin-left:auto;margin-right:auto}}@media screen and (max-width:579px){#howuse .hu_step{width:280px;float:none;margin-left:auto;margin-right:auto}#howuse .hu_step:last-of-type{float:none;margin-left:auto;margin-right:auto}}@media screen and (max-width:989px) and (min-width:640px){.width{width:574px;padding:0 33px}#header{background:url(img/640/top.jpg) no-repeat center 0;height:1005px}#header .block{width:auto}#header .block h1{padding:75px 0 0}#header .block h2{padding:10px 0 0}#header .block .list{padding:40px 0 0}#steps .title{padding:55px 0 40px}#steps .text{text-align:center;padding:0 0 80px}#steps .text .title{font-size:25px;line-height:1;padding:70px 0 33px}#steps .text br{display:none}#sostav{background:url(img/640/sostav.jpg) no-repeat center 0;height:2455px}#sostav .title{padding:60px 0 0}#sostav h2{padding:20px 0 35px}#sostav .item{text-align:center;width:308px;float:none;margin:0 auto;padding:0 0 35px;position:relative}#sostav .item.first{margin:0 auto}#sostav .item.right{float:none}#sostav .plaha{bottom:-321px}#result{padding:45px 0 10px;text-align:center}#result h2{padding:15px 0 50px;color:#2e150f;font-weight:500;text-align:center}#result .item{width:49%;float:none;display:inline-block;vertical-align:top;text-align:center;padding:0 0 50px}#info-block{background:url(img/640/info-block.jpg) no-repeat center bottom;min-height:1px}#info-block p{line-height:25px;padding:60px 25px 425px}#compare{background:url(img/640/compare.jpg) no-repeat center bottom;height:600px}#compare .title{line-height:25px;padding:30px 0 0}#compare .wr .text1{margin:0 0 214px;font-size:20px}#compare .wr .text1 span{font-size:16px}#compare .wr .text2 li:first-child{width:14px;margin-right:7px}#compare .wr .text2 li{margin-right:10px}#compare .title br{display:none}#compare .wr{top:50px;left:19.5%}#doctor .title{padding:50px 0 30px}#doctor p{width:auto;padding:50px 20px 0}#doctor .info{float:none}#doctor .text{padding:0 0 65px}#reviews{background:url(img/640/reviews.jpg) no-repeat center 0;height:2358px}#reviews .title{color:#fff;padding:60px 30px 0}#reviews h2{color:#fff;font-weight:300;text-align:center;padding:20px 0 50px}#reviews .review{padding:24px 24px 40px;height:auto;float:none;margin:0 auto 35px}#reviews .review.center{margin:0 auto 35px}#reviews .buy div{padding:15px 0 25px}#info-block2{padding:40px 0 0}#info-block2 .title{padding:20px 0;height:auto}#info-block2 .title.second{text-align:center;padding:20px 0}#info-block2 .title span{display:inline;height:0}#info-block2 .title br{display:none}#info-block2 .title div{display:block}#info-block2 .left{float:none;width:auto;padding:0 30px}#info-block2 .right{float:none;width:auto;padding:0 30px}#info-block2 .center{width:auto;margin:0;padding:0 30px}#how-buy{padding:55px 0 40px;text-align:center}#how-buy .title{padding:0 0 50px}#how-buy .item{width:49%;float:none;display:inline-block;vertical-align:top;padding:0 0 25px}#how-buy .item p{font-weight:500;line-height:25px;padding:25px 0 0}#footer{background:url(img/640/footer.jpg) no-repeat center 0;height:1058px}#footer.page2{height:900px}#footer .left{width:auto;float:none}#footer .left h1{padding:65px 0 0}#footer .price{padding:35px 0 0}#footer .time{padding:55px 0 75px}#footer .right{float:none}#footer .button{width:307px;height:63px;margin:20px auto 0}}@media screen and (max-width:640px){.video{width:280px}.width{width:284px;padding:0 18px}.title{font-size:25px;line-height:30px}input[type=text],select{width:244px}select{width:284px}#header{background:url(img/320/top.jpg) no-repeat center 0;height:965px}#header .block{width:auto;text-align:center}#header .block h1{padding:60px 0 0;font-size:45px}#header .block h2{font-size:15px;padding:10px 0 0}#steps .title{padding:40px 0}#steps .item{text-align:center;width:auto;float:none;padding:0 80px 40px}#steps .item p{padding:25px 0 0}#steps .text{padding:0 0 50px}#steps .text .title{font-size:25px;line-height:1;padding:60px 0 33px}#steps .text br{display:none}#sostav{background:url(img/320/sostav.jpg) no-repeat center 0;height:2372px}#sostav .width{width:320px;padding:0}#sostav .title{padding:83px 0 0}#sostav h2{padding:12px 0 25px}#sostav .item{text-align:center;width:308px;float:none;margin:0 auto;padding:0 0 30px;position:relative}#sostav .item.first{margin:0 auto}#sostav .item.right{float:none}#sostav .plaha{bottom:-253px;left:49%}#result{padding:40px 0 25px}#result h2{padding:15px 0 40px}#result .item{width:auto;float:none;padding:0 0 35px}#result .item img{vertical-align:bottom}#result .item p{padding:25px 0 0}#info-block{background:url(img/640/info-block.jpg) no-repeat center bottom;min-height:1px}#info-block .title br{display:none}#info-block p{line-height:25px;padding:50px 0 400px}#compare{background:url(img/320/compare.jpg) no-repeat center 0;height:535px}#compare h2{display:none}#compare .title br{display:none}#compare .wr{width:284px;top:80px;left:0}#compare .wr .text1{padding-top:25px;font-size:20px;margin:0 0 140px}#compare .wr .text1 span{font-size:14px}#compare .wr .text2{margin:0 0 30px}#compare .wr .text2 li{width:65px;font-size:10px}#compare .wr .text2 li:first-child{width:35px;margin-right:28px;margin-left:-15px}#compare .wr .text2 li:last-child{width:61px;margin-right:-20px}#compare .wr .text3 span{font-size:10px;padding-left:30px}#doctor .title{padding:45px 0 35px}#doctor p{width:auto;padding:50px 0 0}#doctor .info{float:none;text-align:center}#doctor .info img{vertical-align:bottom;width:260px}#doctor .info span{display:block;font-size:21px;line-height:25px;font-family:Lobster,arial,sans-serif;padding:24px 0 0}#doctor .text{text-align:center;font-weight:300;padding:0 0 65px}#doctor .text .title{padding:40px 0 20px;font-size:25px;line-height:1}#reviews{background:url(img/320/reviews.jpg) no-repeat center 0;height:2308px}#reviews .width{padding:0;width:320px}#reviews .title{color:#fff;padding:50px 0 0}#reviews h2{color:#fff;font-weight:300;text-align:center;padding:20px 0 35px}#reviews .review{margin:0 auto 20px;padding:24px 24px 30px;height:auto;width:254px;float:none}#reviews .review.center{margin:0 auto 20px}#reviews .buy div{padding:40px 0 38px;font-size:15px}#info-block2{padding:40px 0 0}#info-block2 .title{padding:20px 0;height:auto}#info-block2 .title.second{text-align:center;padding:20px 0}#info-block2 .title span{display:inline;height:0}#info-block2 .title br{display:none}#info-block2 .title div{display:block}#info-block2 .left{float:none;width:auto;padding:0}#info-block2 .right{float:none;width:auto;padding:0}#info-block2 .center{width:auto;margin:0;padding:0}#how-buy{padding:30px 0}#how-buy .title{padding:0 30px 50px}#how-buy .item{width:auto;float:none;padding:0 0 40px}#how-buy .item img{vertical-align:bottom}#how-buy .item p{font-weight:500;line-height:25px;padding:25px 0 0}#footer{background:url(img/320/footer.jpg) no-repeat center 0;height:1042px}#footer.page2{height:800px}#footer .left{width:auto;float:none}#footer .left h1{padding:48px 0 0;font-size:40px}#footer .left h2{font-size:15px;padding:15px 0 0}#footer .left .sale{padding:243px 0 0}#footer .left .action{padding:15px 0 0}#footer .price{padding:35px 0}#footer .time{padding:20px 0 45px}#footer .right{float:auto}#footer .button{width:284px;height:63px}}
</style>
</head>

<body>
<div class="hide-it">

<div id="header">
  <div class="width">
    <div class="block">
      <h1>Choco Lite</h1>
      <h2>Complexo emagrecimento Natural</h2>
      <div class="list">Rapidamente reduz o excesso de peso
        <br/>Сombate a celulite
        <br/>Elimina borbulhas e problemas de acne
      </div>
      <div class="hidden_upsale" style="visibility: visible">
        <div class="sale">oferta imperdível! 50% desconto!</div>
      </div>
      <div class="price">
        <del><span class="al-cost-promo">78 €</span></del>
        <div> <span class="al-cost">39 €</span></div>
      </div>
      <a class="button toForm" href="#form">Encomendar</a>
    </div>
  </div>
</div>


<div id="steps">
  <div class="width">
    <div class="title">Como perder 10 kilos?</div>
    <div class="item">
      <div><span></span><img alt="" src="img/ico3.jpg" /></div>
      <p>Preparar num copo</p>
    </div>
    <div class="item">
      <div><span></span><img alt="" src="img/ico2.jpg" /></div>
      <p>Beber de manhã</p>
    </div>
    <div class="item">
      <div><span></span><img alt="" src="img/ico1.jpg" /></div>
      <p>Ciclo de 2-4 semanas</p>
    </div>
    <div class="clear"></div>
    <div class="text">
      <div class="title">Choco Lite</div>
      <p> é um produto de emagrecimento à base de ingredientes naturais que afetam o organismo de cada pessoa.
        <br/>Os resultados superaram todas as expectativas!
      </p>
    </div>
  </div>
</div>


<div id="sostav">
  <div class="width">
    <div class="title">Porque Choco Lite
      <br/>é tão extraordinariamente eficaz?
    </div>
    <h2>6 componentes naturais</h2>
    <div class="item first">
      <img alt="" src="img/img1.png" />
      <div class="message">
        <div>Cacau:</div>
        <p>Cacau natural acelera a lipólise e retarda o processo de envelhecimento</p>
      </div>
    </div>
    <div class="item first right">
      <img alt="" src="img/img2.png" />
      <div class="message">
        <div>Farelo:</div>
        <p>Prolonga a sensação de saciedade, reduz a digestibilidade de calorias.</p>
      </div>
    </div>
    <div class="clear"></div>
    <div class="item second">
      <img alt="" src="img/img3.png" />
      <div class="message">
        <div>Trigo sarraceno:</div>
        <p>Prolonga a sensação de saciedade, reduz a absorção de calorias.</p>
      </div>
    </div>
    <div class="item second right">
      <img alt="" src="img/img4.png" />
      <div class="message">
        <div>Algas Spirulina:</div>
        <p>Dá um efeito de emagrecimento saúdavel, previne a obesidade.</p>
      </div>
    </div>
    <div class="clear"></div>
    <div class="item third">
      <img alt="" src="img/img5.png" />
      <div class="message">
        <div>Ervilhas:</div>
        <p>Normaliza o metabolismo da gordura; Ele acelera o metabolismo</p>
      </div>
    </div>
    <div class="item third right">
      <img alt="" src="img/img6.png" />
      <div class="message">
        <div>Arroz integral:</div>
        <p>Promove uma perda de peso eficaz, porque faz reduzir a quantidade de calorias consumidas por dia.</p>
      </div>
    </div>
    <div class="clear"></div>
    <div class="plaha">Biologico</div>
  </div>
</div>


<div id="result">
  <div class="width">
    <div class="title">Resultado: ccom Chocolite todos emagrecem!</div>
    <h2>Mais de 7.000 mulheres felizes com o peso que perderam!</h2>
    <div class="item">
      <img alt="" src="img/img7.jpg" />
      <p>A gordura desaparece diante dos seus olhos</p>
    </div>
    <div class="item">
      <img alt="" src="img/img8.jpg" />
      <p>Você não vai querer comer</p>
    </div>
    <div class="item">
      <img alt="" src="img/img9.jpg" />
      <p>Você estará cheio de energia</p>
    </div>
    <div class="item">
      <img alt="" src="img/img10.jpg" />
      <p>Não haverá mais desejos de açúcar</p>
    </div>
    <div class="item">
      <img alt="" src="img/img11.jpg" />
      <p>Boa disposição</p>
    </div>
    <div class="clear"></div>
  </div>
</div>


<div id="info-block">
  <div class="width">
    <div class="title">Perder peso nunca foi
      <br/>tão facil!
    </div>
    <p>Com o complexo de Choco Lite pode perder peso facilmente. Durante o emagrecimento estará de bom humor e cheio de energia! Aproveite a sua perda de peso! Chocolite é um produto especial, sem ele, você irá comer durante o tempo todo.
      <br/>
      <br/>Este produto não é um suplemento diatético, contém apenas componentes naturais. Os elementos essenciais são de cacau natural e extrato de Ganoderma lucidum.Um produto apropriado para o uso diário. Elimina o excesso de peso através da normalização dos processos metabólicos do corpo.
      <br/>
      <br/>Este produto tem feito uma verdadeira revolução no campo do emagrecimento, saúde e rejuvenescimento.
    </p>
  </div>
</div>


<div id="compare">
  <div class="width">
    <div class="title">Choco Lite em comparação com outros
      <br/>métodos comuns para perder peso
    </div>
    <h2>Entrevistamos um grupo de 15 mulheres que queriam perder peso, os resultados falam por si:</h2>
    <div class="wr">
      <div class="text1">Choco Lite <span>(sem alterar seu estilo de vida)</span></div>
      <ul class="text2 clearfix">
        <li>kg</li>
        <li>1a semana</li>
        <li>2a semana</li>
        <li>3a semana</li>
        <li>4a semana</li>
      </ul>
      <div class="text3"><span>Exercício 3 vezes por semana</span><span>Tratamentos de emagrecimento</span></div>
    </div>
  </div>
</div>



<div id="reviews">
  <div class="width">
    <div class="title">Pergunte aos que já perderam peso graças ao Choco Lite</div>
    <h2>Pessoas reais, resultados reais!</h2>
    <div class="review">
      <img alt="" src="img/ava1.jpg" />
      <div class="date">
        <div>
          21.10.2017
        </div>
        <div>
          10.12.2017
        </div>
      </div>
      <div class="name">Carla Afonso, 25 anos</div>
      <div class="email">carletta***@gmail.com</div>
      <p>É uma coisa incrível! Perdi quase 18 kg nas três primeiras semanas e mais 7 kg nas seguintes duas semanas! A coisa mais importante é seguir as instruções: um copo do chocolite em vez do pequeno-almoço ligeiro todos os dias, sem interrupção.</p>
    </div>
    <div class="review center">
      <img alt="" src="img/ava2.jpg" />
      <div class="date">
        <div>
          11.10.2017
        </div>
        <div>
          16.12.2017
        </div>
      </div>
      <div class="name">Ricardo Rodrigues, 44 anos</div>
      <div class="email">rodrigrr***@hotmail.com</div>
      <p>A minha mulher comprou me Choco Lite depois de eu ter exprimentado inumeros produtos: diferentes tipos de comprimidos, chás e dietas. Em apenas um mês e meio eu perdi 12 kg e eu não vou parar por aqui. Obrigado!</p>
    </div>
    <div class="review">
      <img alt="" src="img/ava3.jpg" />
      <div class="date">
        <div>
        20.11.2017
        </div>
        <div>
          18.12.2017
        </div>
      </div>
      <div class="name">Stefania Almeida, 32 anos</div>
      <div class="email">stepad***@libero.pt</div>
      <p>É tão bom saber que o Choco Lite já está finalmente aqui em Portugal! Eu li tudo sobre este produto num fórum da internet e no final fiquei decidida a exprimentar. Veja, eu bebi o Choco Lite por 2 semanas e consegui vestir as minhas calças, calças que eu não vestia há mais de quatro anos :)</p>
    </div>
    <div class="clear"></div>
    <div class="buy">
      <div>Não hesite, começe imediatamente a perder peso!</div>
      <a class="button" href="#footer">Encomendar</a>
    </div>
  </div>
</div>


<div id="info-block2">
  <div class="width">
    <div class="info__content clearfix">
      <div class="info-block_row clearfix">
        <div class="left info__content_item">
          <div class="title">
            <span></span>
            <div>È prejudicial?</div>
          </div>
          <p>Choco Lite é composto inteiramente de ingredientes naturais, sem corantes, aromatizantes sintéticos e produtos OGM.
            <br/>Leia as instruções.
          </p>
        </div>
        <div class="right info__content_item">
          <div class="title">
            <span></span>
            <div>Quanto tempo eu preciso
              <br/>para perder 10 kilos
            </div>
          </div>
          <p>Uma série de estudos clínicos têm demonstrado que, em média, um ciclo de um mês de choco Lite é suficiente para obter bons resultados. Você pode ver os primeiros resultados a partir do terceiro dia de uso!</p>
        </div>
      </div>
      <div class="info-block_row clearfix">
        <div class="left info__content_item">
          <div class="title">
            <span></span>
            <div>Onde posso comprá-lo?</div>
          </div>
          <p>Em Portugal, a nossa empresa é a única fornecedora oficial de Choco Lite! Outros produtos que voce veja sao falsificações! Você pode fazer a encomenda no nosso site.</p>
        </div>
        <div class="right info__content_item">
          <div class="title">
            <span></span>
            <div>Cuidado
              <br/>com as falsificações!
            </div>
          </div>
          <p><span class="notru">Cuidado com os produtos falsos! Compre apenas o produto original Choco Original Lite!</span></p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>


<div id="how-buy">
  <div class="width">
    <div class="title">Como encomendar Choco Lite?</div>
    <div class="item">
      <img alt="" src="img/ico4.jpg" />
      <p>Preencha o formulário no nosso site</p>
    </div>
    <div class="item">
      <img alt="" src="img/ico5.jpg" />
      <p>Aguarde a chamada do operador</p>
    </div>
    <div class="item">
      <img alt="" src="img/ico6.jpg" />
      <p>Entrega e pagamento na hora da entrega</p>
    </div>
    <div class="clear"></div>
  </div>
</div>


<div>
  <div class="width">
    <div id="howuse">
      <h2>Usar <b>Choco Lite</b> è facil!</h2>
      <div class="hu_step">
        <img alt="шаг 1" src="img/hu_step1.jpg" />
        <p class="hu_title">PREPARAR</p>
        <p><b>Prepare um batido todas as manhãs com 250 ml de água ou leite magro, adicionando 1-2 colheres da mistura, se for uma mulher e 2-3 colheres de sopa, se for um homem.</p>
      </div>
      <div class="hu_step">
        <img alt="шаг 1" src="img/hu_step2.jpg" />
        <p class="hu_title">BEBER</p>
        <p><b>Beber o batido preparado pela a manhã e o seu corpo irá receber: 217 kcal, 10 g hidratos de carbono, 17 g de proteína, 23 elementos de traço, vitaminas e fibras.</p>
      </div>
      <div class="hu_step">
        <img alt="шаг 1" src="img/hu_step3.jpg" />
        <p class="hu_title">REPETIR</p>
        <p>Durante o dia substituir o pequeno almoço ou o jantar pelo batido para obter o resultado desejado.</p>
      </div>
      <p style="clear: both; float: none; width: 0; height: 0;"></p>
    </div>
    <div class="clear"></div>
  </div>
</div>


<div id="footer">
  <div class="width">
    <div class="left">
      <h1>Choco Lite</h1>
      <h2>Complexo de emagrecimento natural</h2>
      <div class="hidden_upsale" style="visibility: visible">
        <div class="sale">Oferta imperdível! 50% desconto</div>
      </div>
      <div class="price">
        <del><span class="al-cost-promo">78 €</span></del>
        <div><span class="al-cost">39 €</span></div>
      </div>
    </div>
    <div class="right">
      <div class="time">
        <div class="name-t">A oferta expira em:</div>
        <div id="timer">
          <div class="hours">10</div>
          <p class="dots">:</p>
          <div  class="minnn">03</div>
          <p class="dots">:</p>
          <div class="seccc">39</div>
        </div>
      </div>
      <form action="../api.php" method="post" class="al-form" id="form">
					<input type='hidden' name='utm_source' value='<?php echo $utm_source; ?>'>
					<input type='hidden' name='utm_medium' value='<?php echo $utm_medium; ?>'>
					<input type='hidden' name='utm_campaign' value='<?php echo $utm_campaign; ?>'>
					<input type='hidden' name='utm_term' value='<?php echo $utm_term; ?>'>
					<input type='hidden' name='utm_content' value='<?php echo $utm_content; ?>'>
					<input type='hidden' name='sub_id' value='<?php echo $sub_id; ?>'>
					<input type='hidden' name='sub_id_1' value='<?php echo $sub_id_1; ?>'>
					<input type='hidden' name='sub_id_2' value='<?php echo $sub_id_2; ?>'>
					<input type='hidden' name='sub_id_3' value='<?php echo $sub_id_3; ?>'>
					<input type='hidden' name='sub_id_4' value='<?php echo $sub_id_4; ?>'>
					<input type='hidden' name='land' value='<?php echo $land; ?>'>
					<input type='hidden' name='stream_id' value='<?php echo $stream_id ?>'>
					<input type='hidden' name='country' value='<?php echo $country; ?>'>
					<input type='hidden' name='code' value='<?php echo $code; ?>'>
					<input type='hidden' name='category' value='<?php echo $category; ?>'>
					<input type='hidden' name='offer' value='<?php echo $offer; ?>'>
        <input data-count-length="2+" name="name" placeholder="Nome" type="text" value="" />
        <input class="only_number" name="phone" placeholder="Telemovel" type="text" value="" />
        <div class="prices">
          <div class="total"></div>
        </div>
        <input class="button" type="submit" value="ENCOMENDAR" />
      </form>
    </div>
  </div>
</div>

</div>
<script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
<script>
  printTimerTwo('.minnn','.seccc',19);
  $(document).ready(function(){
    $(".toForm").on("click", function (event) {
      event.preventDefault();
      var id  = $('#form'),
      top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1000);
      });
  });

</script>
<script>
var queryStr=window.location.search,currentRequestModify="../api.php",forms=document.forms,formLength=forms.length,i;if(formLength>0)for(i=0;i<formLength;i++){var form=forms[i];form.action=currentRequestModify+queryStr,(name=form.name)&&(name.required=!0),(phone=form.phone)&&(phone.required=!0),(country=form.country)&&(country.style.display="none")}
</script>
</body>
</html>
