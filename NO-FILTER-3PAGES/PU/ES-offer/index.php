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
$country = 'ES';
$code = '1528';
$category = 'Beauty';
$offer = 'Power Up';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.png" rel="icon" type="image/x-icon">
    <title>PowerUp Premium. El concentrado de proteína de proteína vegetal </title>
    <style>
    @font-face{font-family:'PT Sans Caption Bold';src:url(fonts/pt-sans-caption-bold.ttf)}@font-face{font-family:'PT Sans Caption';src:url(fonts/pt-sans-caption.ttf)}@font-face{font-family:'Lobster';src:url(fonts/lobster-regular.ttf)}@font-face{font-family:'Roboto Medium';src:url(fonts/roboto-medium.ttf)}html{font-family:'PT Sans Caption',arial;font-size:15px;color:#fff}ul,ol,p,body,h1,h2,h3,h4,h5,h6,figure{padding:0;margin:0}ul,ol{list-style:none!important}h1,h2,h3,h4,h5,h6{font-family:'PT Sans Caption Bold',arial}a{color:inherit;text-decoration:none}.clearfix:after{content:'';clear:both;display:table}.center-wrapper{width:970px;margin:0 auto}.left{float:left}.right{float:right}.for640,.for320{display:none}[id^="block"]{position:relative}#block1{width:100%;background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block1-bg.jpg) no-repeat 50% 0;box-shadow:0 0 5px rgba(0,0,0,0.75);z-index:10}#block1 .content{padding-top:90px;padding-bottom:115px}#block1 h1{padding-bottom:15px;text-align:center;font-size:35px;line-height:35px}#block1 .tagline{text-align:center;font-size:17px;line-height:35px;padding-bottom:60px}#block1 .plus{float:left;width:33.3%;text-align:center;padding-bottom:85px}#block1 .plus img{padding-bottom:10px}#block1 .plus .text{color:rgba(255,255,255,0.7)}#block1 .prices{text-align:center;font-size:20px;line-height:20px;padding-top:65px;padding-bottom:80px}#block1 .prices .old{color:rgba(255,255,255,0.7);text-decoration:line-through}.to-form{display:block;box-sizing:border-box;width:260px;padding:10px 0;text-align:center;font-family:'PT Sans Caption Bold',arial;font-size:25px;line-height:25px;border:2px solid #fff;border-radius:15px;transition-duration:.3s}.to-form:hover{transform:scale(1.1);box-shadow:0 0 5px #000}#block1 .to-form:hover{box-shadow:0 0 5px red}#block1 .to-form{margin:auto}#block2{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block2-bg.jpg) no-repeat 50% 0;z-index:9}#block2 .content{padding-top:90px;padding-bottom:115px}#block2 .column{width:50%}#block2 .column.right{width:42%}#block2 .column h2{padding-bottom:40px;font-size:28px;line-height:32px}#block2 .column .graph-description{padding-bottom:65px;line-height:25px;color:rgba(255,255,255,0.5)}#block3{z-index:8;color:#010101;font-size:0}#block3 .content{padding-top:90px;padding-bottom:30px;text-align:center;vertical-align:top}#block3 .article{display:inline-block;vertical-align:top;width:30%;min-height:325px;padding:0 20px;text-align:center;font-size:14px}#block3 .article:nth-child(1){padding-left:0}#block3 .article:nth-child(3){padding-right:0}#block3 .article img{padding-bottom:10px}#block3 .article .title{padding-bottom:20px;font-weight:700}#block3 .article *{display:inline-block;vertical-align:top;line-height:20px}#block4{z-index:7;background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block4-bg.jpg) no-repeat 50% 0;box-shadow:0 5px 5px rgba(0,0,0,0.75)}#block4 .content{padding-top:80px;padding-bottom:115px}#block4 .column{width:44%;text-align:center}#block4 h2{text-align:center;font-size:28px;line-height:32px;padding-bottom:70px}#block4 .column.left img{padding-top:15px;padding-bottom:45px}#block4 .rest{font-size:18px;line-height:25px;font-weight:700}#block4 .prices{font-size:25px;line-height:32px;padding-bottom:10px}#block4 .prices .old{text-decoration:line-through}#block4 .prices .new{font-family:'PT Sans Caption Bold',arial}#block4 .price-with-delivery{color:rgba(255,255,255,0.9);font-size:18px;line-height:32px;padding-bottom:50px}#order-form{padding-top:75px}#order-form .form-element{box-sizing:border-box;background-color:transparent;width:340px;height:48px;padding:15px;margin-bottom:15px;color:#fff;font-size:15px;border:1px solid #fff;border-radius:15px}#order-form select.form-element{background-image:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/select-arrow.png);background-repeat:no-repeat;background-position:95% 50%;appearance:none;-moz-appearance:none;-webkit-appearance:none}#order-form select.form-element::-ms-expand{display:none}#order-form select.form-element option{background-color:rgba(0,0,0,0.5)}#order-form .form-element[type="submit"]{height:50px;margin-top:10px;padding:10px;border:2px solid #fff;font-size:23px;line-height:23px;font-weight:700;cursor:pointer}#order-form .form-element[type="submit"]:disabled{opacity:.5;cursor:not-allowed}#block5{z-index:6;background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-bg.jpg) no-repeat 50% 0;color:rgba(255,255,255,0.7)}#block5 .content{padding-top:100px;padding-bottom:30px}#block5 .column{width:50%}#block5 .trick{min-height:130px}#block5 .trick .image{float:left;width:100px;height:65px;text-align:center;padding-right:20px}#block5 .trick .text{padding-top:10px}#block6{z-index:5;color:#262327}#block6 .content{padding-top:90px;padding-bottom:85px}#block6 .column.left{width:63%}#block6 .column.right{position:relative;width:37%}#block6 h2{font-size:28px;line-height:32px;padding-bottom:30px}#block6 .cooking{color:rgba(38,35,39,0.85);line-height:23px;padding-bottom:40px}#block6 .info{font-size:0}#block6 .info .title:first-child{text-align:left}#block6 .info .title{display:inline-block;width:33.3%;text-align:center;vertical-align:top;font-family:'PT Sans Caption Bold',arial;font-size:14px;line-height:20px;text-transform:uppercase}#block6 .info .text{padding-top:30px;color:rgba(38,35,39,0.85);font-size:15px;line-height:23px}#block6 img{position:absolute;top:-75px;right:0}#block7{z-index:5;background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block7-bg.jpg) no-repeat 50% 0;box-shadow:0 0 5px rgba(0,0,0,0.75)}#block7 .content{padding-top:90px;padding-bottom:90px}#block7 h2{padding-bottom:55px;font-size:28px;line-height:32px}#block7 .slider{overflow:hidden}#block7 .slider .slides{float:left;width:300%;transition-duration:.5s}#block7 .slider .slides .review{float:left;position:relative;width:990px;min-height:250px}#block7 .slider .slides .review h3{position:absolute;bottom:15px;right:275px;font-size:18px;line-height:25px}#block7 .slider .slides .review h3 .q{padding-right:15px;color:rgba(255,255,255,0.38);font-size:90px}#block7 .slider .slides .review p{width:760px;padding-top:20px;color:rgba(255,255,255,0.85)}#block7 .slider .slides .review img{position:relative;top:10px;padding-right:1px}#block7 .slider input[type=radio]{display:none}#block7 .slider-controls{z-index:11;position:relative;top:230px}#block7 .slider-controls label{display:inline-block;width:12px;height:12px;margin:0 3px;cursor:pointer;background-color:#fff;border-radius:50%}#btn-1:checked ~ .slider-controls label[for="btn-1"],#btn-2:checked ~ .slider-controls label[for="btn-2"],#btn-3:checked ~ .slider-controls label[for="btn-3"]{background:#339632}#btn-1:checked ~ .slides{transform:translate(0)}#btn-2:checked ~ .slides{transform:translate(-990px)}#btn-3:checked ~ .slides{transform:translate(-1980px)}#block7 .flexslider .review{position:relative;min-height:230px}#block7 .flexslider .review h3{position:absolute;bottom:10px;right:225px;font-size:14px;font-weight:700;line-height:20px;text-transform:uppercase}#block7 .flexslider .review p{padding-top:10px;color:rgba(255,255,255,0.85)}#block7 .flexslider .review h3 .q{font-size:90px;color:rgba(255,255,255,0.38)}#block7 .flexslider .review img{position:relative;float:right;padding-right:1px}#block8{z-index:4;background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-bg.jpg) no-repeat 50% 0}#block8 .content{padding-top:100px;padding-bottom:105px;font-size:0}#block8 h2{padding-bottom:70px;text-align:center;font-size:28px;line-height:32px}#block8 .article{width:17%;padding:0 18px;display:inline-block;text-align:center}#block8 .article:first-of-type{padding-left:0}#block8 .article:last-of-type{padding-right:0}#block8 .article *{display:inline-block;vertical-align:top}#block8 .article img{padding-bottom:15px}#block8 .article .text{color:rgba(255,255,255,0.85);font-size:15px;line-height:23px}#footer{background-color:#060606}#footer .content{text-align:center;padding:35px 0}#footer .content a{text-decoration:underline;font-size:13px;line-height:22px}#footer .content a:hover{text-decoration:none}@media screen and (max-width: 990px){.for990,.for320{display:none}.for640{display:block}.center-wrapper{width:574px}.left,.right{float:none}#block1{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block1-bg-640.jpg) no-repeat 50% 0}#block1 .content{padding-top:100px;padding-bottom:95px}#block1 h1{font-size:30px;line-height:40px}#block1 .plus{width:28%;padding-left:20px;padding-right:20px;padding-bottom:55px}#block1 .plus:first-child{padding-left:0}#block1 .plus:last-child{padding-right:0}#block1 .prices{padding-top:50px;padding-bottom:60px}#block2{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block2-bg-640.jpg) no-repeat 50% 0;text-align:center}#block2 .content{padding-top:75px;padding-bottom:75px;position:relative}#block2 .column{width:100%!important}#block2 img{padding-top:220px;padding-bottom:70px}#block2 .column h2,#block2 .column .graph-description{position:absolute}#block2 .column h2{top:75px;width:490px;padding-left:42px}#block2 .column .graph-description{top:200px;text-align:left;padding-left:75px}.to-form{margin:0 auto}#block3 .content{padding-bottom:0}#block3 .article{width:44%;min-height:335px}#block3 .article img{padding-bottom:20px}#block4{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block4-bg-640.jpg) no-repeat 50% 0}#block4 .content{padding-top:65px;padding-bottom:75px}#block4 h2{width:380px;padding-left:97px;padding-bottom:40px}#block4 .column.left img{width:290px;padding-bottom:30px}#block4 .column{width:100%!important}#block4 .rest{padding-bottom:50px}#order-form{padding-top:55px}#order-form .form-element{margin-bottom:20px}#order-form .form-element[type="submit"]{margin-top:15px}#block5{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-bg-640.jpg) no-repeat 50% 0}#block5 .content{padding-top:75px}#block5 .column{width:100%!important}#block5 .column.right:last-child .trick .text{padding-top:0}#block5 .trick{min-height:105px}#block6 .content{padding-top:70px;padding-bottom:0}#block6 .column{width:100%!important}#block6 h2{padding-bottom:50px}#block6 .cooking{padding-bottom:45px}#block6 img{position:static;display:block;margin:auto}#block7{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block7-bg-640.jpg) no-repeat 50% 0}#block7 h2{text-align:center;padding-bottom:45px}#block7 .content{padding-top:85px;padding-bottom:70px}#block7 .slider{position:relative}#block7 .slider .slides .review{width:574px}#block7 .slider .slides .review p{width:auto;padding-top:320px}#block7 .slider .slides .review h3{top:0;left:0;width:100%;text-align:center}#block7 .slider .slides .review img{position:absolute;top:55px;left:202px}#block7 .slider-controls{text-align:center;top:275px}#btn-1:checked ~ .slides{transform:translate(0)}#btn-2:checked ~ .slides{transform:translate(-574px)}#btn-3:checked ~ .slides{transform:translate(-1148px)}#block7 .flexslider .review{position:relative;text-align:center;min-height:230px}#block7 .flexslider .review h3{position:static;padding-bottom:35px;font-size:18px;line-height:20px;text-transform:none}#block7 .flexslider .review p{padding-top:90px;text-align:justify}#block7 .flexslider .review img{position:static;float:none}#block8{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-bg-640.jpg) no-repeat 50% 0}#block8 .content{padding-top:80px;padding-bottom:0;text-align:center}#block8 .article{width:29%;min-height:250px}#block8 .article:nth-of-type(3){padding-right:0}#block8 .article:last-of-type{padding-right:18px}}@media screen and (max-width: 639px){.center-wrapper{width:320px}.for990,.for640{display:none}.for320{display:block}#block1{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block1-bg-320.jpg) no-repeat 50% 0}#block1 .content{padding-top:75px;padding-bottom:90px}#block1 h1{width:88%;margin:0 auto;font-size:25px;line-height:30px;padding-bottom:25px}#block1 .tagline{width:88%;margin:0 auto;padding-bottom:30px;font-size:15px;line-height:22px}#block1 .plus{width:100%;padding-left:0!important;padding-right:0!important;padding-bottom:35px}#block1 .plus .text{width:80%;margin:0 auto}#block1 .prices{padding-top:50px;padding-bottom:50px}.timer{padding-top:20px}#block2{display:none}#block3 .content{padding-top:70px;padding-bottom:20px}#block3 .article{padding-left:20px!important;padding-right:20px!important;min-height:0;width:auto}#block3 .article .text{padding-bottom:45px}#block4{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block4-bg-320.jpg) no-repeat 50% 0}#block4 .content{padding-top:60px;padding-bottom:55px}#block4 h2{width:auto;padding-left:15px;padding-right:15px}#block4 .column.left img{padding-top:0}#block4 .rest{display:none}#block4 .prices > span{display:block}#block4 .prices .old{padding-bottom:15px}.timer{padding-top:0}#order-form .form-element{width:282px}#order-form .form-element[type="submit"]{margin-top:25px}#block5{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-bg-320.jpg) no-repeat 50% 0}#block5 .content{padding-top:65px;padding-bottom:50px}#block5 .trick{padding:0 15px 45px}#block5 .trick .image{float:none;width:auto;padding-right:0}#block5 .trick .image img{margin:auto}#block5 .trick .text{padding-top:25px;line-height:23px;text-align:center}#block6{display:none}#block7{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block7-bg-320.jpg) no-repeat 50% 0}#block7 .content{padding-top:75px;padding-bottom:75px}#block7 h2{width:80%;margin:auto}#block7 .slider .slides .review{width:284px;padding-right:18px;padding-left:18px}#block7 .slider .slides .review p{width:auto;padding-top:320px}#block7 .slider .slides .review h3{top:0;left:0;width:100%;text-align:center}#block7 .slider .slides .review img{position:absolute;top:55px;left:75px}#block7 .slider-controls{text-align:center;top:275px}#btn-1:checked ~ .slides{transform:translate(0)}#btn-2:checked ~ .slides{transform:translate(-320px)}#btn-3:checked ~ .slides{transform:translate(-640px)}#block8{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-bg-320.jpg) no-repeat 50% 0}#block8 .content{padding-top:60px;padding-bottom:70px}#block8 h2{padding-bottom:50px}#block8 .article{width:80%!important;padding-left:18px!important;padding-right:18px!important;min-height:0}#block8 .article:not(:last-child){padding-bottom:40px}#block8 .article img{padding-bottom:30px}}.ddc{font-size:10px;display:block}input,textarea{font-family:Arial}textarea{resize:vertical;max-height:600px;min-height:37px}
    </style>
    <style>
    .flexslider{width:780px;margin:0 auto;position:relative}.flex-control-nav{display:block}.slides{float:left}.slides li{list-style:none}.slides li .review{width:100%}.flex-next,.flex-prev{position:absolute;margin-top:-40px;text-indent:-9999999px}.flexslider{width:875px}.flex-next{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/arrow-right.png) no-repeat center center;-webkit-background-size:contain;background-size:contain;width:22px;height:47px;right:-5%;top:60%}.flex-prev{background:url(http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/arrow-left.png) no-repeat center center;-webkit-background-size:contain;background-size:contain;width:22px;height:47px;left:-5%;top:60%}.flex-control-nav{position:relative;top:-50px}.flex-control-nav li{display:inline-block}.flex-control-nav li a{display:inline-block;font-size:0;width:12px;height:12px;margin-right:5px;border-radius:50%;background-color:#fff}.flex-control-nav li a.flex-active{background-color:#339632}@media screen and (max-width: 990px){.flexslider{width:574px}.flex-control-nav{top:-240px;text-align:center}}@media screen and (max-width: 639px){.flexslider{width:284px}.flex-control-nav{top:-430px}}
    </style>
    <style>
    .timer{margin:auto;text-align:center;width:235px}.timer .title{font-size:16px;line-height:16px;font-weight:500;margin-bottom:20px;text-align:center;color:rgba(255,255,255,0.75)}.timer .block{float:left}.timer .block .rect{width:50px;margin-bottom:20px;background-color:rgba(62,179,60,0.71);border-radius:15px;font-family:'PT Sans Caption Bold',arial;font-weight:700;line-height:35px;font-size:35px;padding:5px}.timer .block .label{color:rgba(255,255,255,0.7);font-size:14px;text-align:center}.timer .points{float:left;width:23px;height:40px;text-align:center;line-height:40px;font-size:40px;ont-family:'PT Sans Caption Bold',arial;font-weight:700}
    </style>
    <style>
    .footer_bg{font-size:0;position:relative;color:rgba(38,35,39,0.85)}.footer_bg__inner{max-width:1018px;margin:0 auto;padding:20px 15px 90px}@media screen and (max-width: 767px){.footer_bg__inner{padding-bottom:15px}}.footer_bg__left,.footer_bg__right{display:inline-block;vertical-align:top;width:50%;font-size:14px;line-height:22px}.footer_bg__left:after,.footer_bg__right:after{content:'';display:table;clear:both}.footer_bg__right-content{float:right}.footer_bg__text{font-size:12px;text-align:center;margin-top:50px}@media screen and (max-width: 767px){.footer_bg__text{margin-top:20px}}.footer_bg a{display:block;cursor:pointer}.footer_bg a:hover{text-decoration:underline}.overlay_bg{position:fixed;top:0;right:0;bottom:0;left:0;background-color:rgba(232,232,232,0.8);z-index:800;display:none}.popup_bg{position:relative;max-width:490px;margin:30px auto;background-color:#fff;color:#000;border-radius:4px;padding:18px 35px;display:none}.close-popup_bg{font-size:28px;font-weight:700;color:#aaa;position:absolute;right:0;top:0;padding:5px 15px;cursor:pointer}.close-popup_bg:hover{color:#000}.popup_bg h2{font-size:20px;line-height:25px;margin-bottom:18px}.popup_bg form{padding:15px}.popup_bg form input,.popup_bg form textarea{width:100%;max-width:100%;box-sizing:border-box;margin-top:10px;padding:10px;border:1px solid #ccc}.popup_bg form [type="submit"]{padding:10px 0;font-family:'PT Sans Caption Bold',arial;border:2px solid #000;border-radius:15px;transition-duration:.3s;font-size:25px;line-height:25px;cursor:pointer;background-color:#fff}.popup_bg form [type="submit"]:hover{transform:scale(1.1);box-shadow:0 0 5px #000}
    </style>
</head>

<body>
    <div id="block1">
        <div class="center-wrapper">
            <div class="content">
                <h1>PowerUp Premium. El concentrado  de proteína vegetal</h1>
                <p class="tagline">¡El remedio eficaz para generar  masa muscular!</p>
                <div class="clearfix">
                    <div class="plus">
                        <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block1-pic1.png" alt="Гарантия" />
                        <p class="text">100% de garantía de calidad</p>
                    </div>
                    <div class="plus">
                        <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block1-pic2.png" alt="Результат" />
                        <p class="text">El resultado rápido y eficaz</p>
                    </div>
                    <div class="plus">
                        <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block1-pic3.png" alt="Здоровье" />
                        <p class="text">Es inocuo para la salud</p>
                    </div>
                </div>
                <div class="timer clearfix">
                    <div class="block">
                        <div class="rect hours">09</div>
                        <div class="label">horas</div>
                    </div>
                    <div class="points">:</div>
                    <div class="block">
                        <div class="rect mins"><w class="minnn"></w></div>
                        <div class="label">minutos</div>
                    </div>
                    <div class="points">:</div>
                    <div class="block">
                        <div class="rect secs"><w class="seccc"></w></div>
                        <div class="label">segundos</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="prices">
                    <span class="old"><span class="al-cost-promo">78 €</span></span>
                    <span class="new"><span class="al-cost">39 €</span></span>
                </div>
                <a class="to-form" href="#block4">Quiero</a>
            </div>
        </div>
    </div>
    <div id="block2">
        <div class="center-wrapper">
            <div class="content clearfix">
                <div class="column left">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block2-pic1.png" alt="График">
                </div>
                <div class="column right">
                    <h2>El concentrado de proteína de proteína vegetal PowerUp Premium</h2>
                    <p class="graph-description">Gráfico del crecimiento de la masa muscular con el PowerUp Premium y durante entrenamientos ordinarios</p>
                    <a class="to-form" href="#block4">Quiero</a>
                </div>
            </div>
        </div>
    </div>
    <div id="block3">
        <div class="center-wrapper">
            <div class="content">
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block3-pic1.png" alt="Лого" />
                    <br/>
                    <p class="title">GENERA Y AUMENTA LA MASA MUSCULAR DE MANERA NATURAL</p>
                    <p class="text">El batido enriquece notablemente el porcentaje de masa muscular, debido a su alto nivel en proteínas, disminuyendo la cantidad de grasa acumulada</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block3-pic2.png" alt="Лого" />
                    <br/>
                    <p class="title">NUTRIENTE  PARA EL ORGANISMO CON VITAMINAS Y MICROELEMENTOS</p>
                    <p class="text">Gracias a la composición natural y los ingredientes beneficiosos, como el amaranto orgánico, es uno de los vegetales más alto en minerales como el calcio, hierro, fósforo y carotenoides, haciendo nuestro organismo más fuerte que nunca. El concentrado es completamente seguro para los seres humanos y es una fuente poderosa de vitaminas y minerales para el cuerpo</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block3-pic3.png" alt="Лого" />
                    <br/>
                    <p class="title">UNA GRAN FUENTE DE ENERGÍA </p>
                    <p class="text">Potencia nuestros entrenamientos de la mejor forma que existe, debido a la gran concentración de salvado de avena, quinoa organica y trigo sarraceno, ya que Los hidratos de carbono son su componente principal</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block3-pic4.png" alt="Лого" />
                    <br/>
                    <p class="title">AUMENTO EN LA RESISTENCIA</p>
                    <p class="text">Gracias a los extractos de germen de trigo, el cuerpo combate de forma natural  el estrés diario, el sistema inmune se vuelve fuerte, una persona permanece sin cansancio durante mucho tiempo.</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block3-pic5.png" alt="Лого" />
                    <br/>
                    <p class="title">BAJADA DE  EXCESO DE PESO
</p>
                    <p class="text">El batido es un quemador de grasa natural, que usarás durante los entrenamientos , tonifica las zonas donde más porcentaje de grasa acumulada tengas, haciendo que disminuya totalmente.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="block4">
        <div class="center-wrapper">
            <div class="content clearfix">
                <h2 id="order-title">PÍDALO JUSTO AHORA CON EL DESCUENTO DEL 50%</h2>
                <div class="column left">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block4-pic1.png" alt="Качок" />
                    <p class="rest">¡Tenga prisa!
                        <br class="for990" /> ¡Quedan 7 piezas!</p>
                </div>
                <div class="column right">
                    <div class="prices">
                        <span class="old"> <span class="al-cost-promo">78 €</span></span>
                        <span class="new">  <span class="al-cost">39 €</span></span>
                    </div>
                    <div class="timer clearfix">
                        <div class="block">
                            <div class="rect hours">09</div>
                            <div class="label">Horas</div>
                        </div>
                        <div class="points">:</div>
                        <div class="block">
                            <div class="rect mins"><w class="minnn"></w></div>
                            <div class="label">Minutos</div>
                        </div>
                        <div class="points">:</div>
                        <div class="block">
                            <div class="rect secs"><w class="seccc"></w></div>
                            <div class="label">Segundos</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <form id="order-form" class="al-form" method="post" action="../api.php">
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
                        <input class="form-element" placeholder="Nombre" type="text" name="name">
                        <input class="form-element" placeholder="Teléfono" type="text" name="phone">
                        <input class="form-element" type="submit" value="PEDIR AHORA">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="block5">
        <div class="center-wrapper">
            <div class="content clearfix">
                <div class="column left">
                    <div class="trick">
                        <div class="image">
                            <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-pic1.png" alt="Картинка" />
                        </div>
                        <p class="text">Ud quiere verse como un Dios Griego  y llamar la atención general</p>
                    </div>
                    <div class="trick">
                        <div class="image">
                            <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-pic2.png" alt="Картинка" />
                        </div>
                        <p class="text">Su cuerpo necesita vitaminas y microelementos
 </p>
                    </div>
                </div>
                <div class="column right">
                    <div class="trick">
                        <div class="image">
                            <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-pic3.png" alt="Картинка" />
                        </div>
                        <p class="text">Ud necesita un impulso de energía para todo el día</p>
                    </div>
                </div>
                <div class="column right">
                    <div class="trick">
                        <div class="image">
                            <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block5-pic4.png" alt="Картинка" />
                        </div>
                        <p class="text">Ud desea sustituir la grasa subcutánea y  resistente  por  masa muscular </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="block6">
        <div class="center-wrapper">
            <div class="content clearfix">
                <div class="column left">
                    <h2>Modo de uso del concentrado</h2>
                    <p class="cooking">Mezclamos 1⁄2 cacito del proteína vegetal PowerUp Premium con un vaso de agua (o con leche de soja, desnatada) después del entrenamiento. La Proteína va directa al músculo, recuperándolo después de la actividad física. Además, el efecto saciante evita la tentación de comer en exceso, sobre todo grasa, a la noche.</p>
                    <div class="info">
                        <span class="title">Valor alimenticio</span>
                        <span class="title">Nutrientes por 100 gramos</span>
                        <span class="title">Porciones por envase</span>
                        <div class="text">Valor energético....................................................416 kcal ................................................ 10 g
                            <br> Proteínas..................................................................71 g
                            <br> Grasas .......................................................................12 g
                            <br> Hidratos de Carbono ..........................................22 g </div>
                    </div>
                </div>
                <div class="column right">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block6-img1.jpg" alt="Качок" />
                </div>
            </div>
        </div>
    </div>
    <div id="block7">
        <div class="center-wrapper">
            <div class="content clearfix">
                <h2>Comentarios </h2>
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="review clearfix">
                                <h3><span class="q for990">,, </span>Pablo, 23 años, Madrid</h3>
                                <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block7-pic1.png" alt="Аватар" />
                                <p>
                                    Sabía sobre los beneficios de los batidos de proteína para el cuerpo, pero no podía encontrar el adecuado. Hay muchos tipos de ellos en el mercado, por lo tanto, es fácil confundirse y elegirlo de baja cualidad. Probé productos de varios fabricantes, pero no quedé satisfecho. No se logró el objetivo, la masa muscular no aumentó. Sólo sentía una ráfaga de energía del uso de unos tipos de los batidos de proteína. Este es el adecuado para mi, ya que me ha aumentado mucho la masa muscular. La descripción se corresponde con la realidad. Tomo antes del entrenamiento y los resultados son perfectamente visibles, mi novia es la que mas ha notado mi gran cambio.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="review clearfix">
                                <h3><span class="q for990">,, </span>Paula, 33 años</h3>
                                <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block7-pic3.png" alt="Аватар" />
                                <p>
                                    Mi marido tomaba el batido y siempre tenía buen aspecto, brillando con fuerza y energía. He decidido probarlo también, al leer que elimina la grasa, y hace un cuerpo perfecto. De hecho, confirmo que la g rasa en abdomen, flancos y pantorrillas, las zonas mas dificiles de quemar la grasa, se han sustituido por músculos atractivos, tonificando todo mi cuerpo. Mi marido y yo estamos encantados de mi gran cambio físico.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="review clearfix">
                                <h3><span class="q for990">,, </span>Javier, 27 años</h3>
                                <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block7-pic2.png" alt="Аватар" />
                                <p>
                                    Siempre estaba insatisfecho con mi cuerpo; entrenaba mucho en el gimnasio, pero no lograba tener los músculos de chicos realmente fuertes. Por eso tenía complejos terribles y sufría problemas de comunicación con chicas, sobre todo en verano cuando vas a playa, piscina... Y te tienes que quitar la camiseta. En el gimnasio un entrenador me recomendó comprar el batido de proteína de suero PowerUp Premium . Dijo que vería el resultado. ¡Ahora sé el secreto de su cuerpo y ahora también de mi cuerpo perfecto! Gracias por haber hecho que gane confianza en mí mismo!
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="block8">
        <div class="center-wrapper">
            <div class="content">
                <h2>CÓMO TRABAJAMOS</h2>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-pic1.png" alt="Рисунок" />
                    <p class="text">Haga su pedido en nuestra página web</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-pic2.png" alt="Рисунок" />
                    <p class="text">En unos minutos un asesor específico contactará con usted</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-pic3.png" alt="Рисунок" />
                    <p class="text">Pregunte lo que les interesa y confirme sus datos de pedido </p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-pic4.png" alt="Рисунок" />
                    <p class="text">Te enviamos el concentrado de proteína vegetal en 48 horas</p>
                </div>
                <div class="article">
                    <img src="http://d3isoh8x5r7c7o.cloudfront.net/power/es1/img/block8-pic5.png" alt="Рисунок" />
                    <p class="text">¡Pago contra reembolso a su entrega! SIN RIESGOS</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="center-wrapper">
            <div class="content">
                <br />
                <a href="#block4" class="js-open-contacts_bg" modal="polit">Política de privacidad</a>
            </div>
        </div>
    </div>

    <div id="polit" class="modal overlay_bg">
        <div class="modal-block popup_bg js-contacts_bg">
            <div class="icon-close"></div>
            <div class="title">Política de privacidad</div>
            <div class="content">
                <div class="padding">
                    <p>Nuestra tienda en línea respeta los derechos del cliente. Se observa una estricta confidencialidad con el pedido. Los datos se guardan de forma segura y están protegidos de la transmisión a los terceros. </p>
                    <p>El consentimiento para el tratamiento de los datos de los clientes con el único fin de prestar los servicios es colocamiento del pedido en la página web.Согласием на обработку данных клиента исключительно с целью оказания услуг является размещение заказа на сайте. </p>
                    <p>Los datos personales incluyen información personal sobre el cliente: la dirección de su casa; nombre, apellido; información sobre el nacimiento; patrimonio, estado civil; contactos personales (teléfono, correo electrónico) y otros datos que se enumeran en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal y la Ley de Servicios de la Sociedad de la Información y Comercio Electrónico -Ley 34/2002, de 11 de julio. </p>
                    <p>Cliente tiene derecho a oponerse al tratamiento de los datos personales. En este caso garantizamos la retirada de todos los datos personales de la página web dentro de tres días durante las horas de trabajo.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
    <script>
      printTimerTwo('.minnn','.seccc',49);
    </script>
	<script>
var queryStr=window.location.search,currentRequestModify="../api.php",forms=document.forms,formLength=forms.length,i;if(formLength>0)for(i=0;i<formLength;i++){var form=forms[i];form.action=currentRequestModify+queryStr,(name=form.name)&&(name.required=!0),(phone=form.phone)&&(phone.required=!0),(country=form.country)&&(country.style.display="none")}
</script>
    <script>
      !function(e){e.flexslider=function(t,n){var a=e(t),i=e.extend({},e.flexslider.defaults,n),o=i.namespace,s="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,r=s?"touchend":"click",l="vertical"===i.direction,c=i.reverse,d=i.itemWidth>0,u="fade"===i.animation,p=""!==i.asNavFor,m={};e.data(t,"flexslider",a),m={init:function(){a.animating=!1,a.currentSlide=i.startAt,a.animatingTo=a.currentSlide,a.atEnd=0===a.currentSlide||a.currentSlide===a.last,a.containerSelector=i.selector.substr(0,i.selector.search(" ")),a.slides=e(i.selector,a),a.container=e(a.containerSelector,a),a.count=a.slides.length,a.syncExists=e(i.sync).length>0,"slide"===i.animation&&(i.animation="swing"),a.prop=l?"top":"marginLeft",a.args={},a.manualPause=!1,a.transitions=!i.video&&!u&&i.useCSS&&function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var n in t)if(void 0!==e.style[t[n]])return a.pfx=t[n].replace("Perspective","").toLowerCase(),a.prop="-"+a.pfx+"-transform",!0;return!1}(),""!==i.controlsContainer&&(a.controlsContainer=e(i.controlsContainer).length>0&&e(i.controlsContainer)),""!==i.manualControls&&(a.manualControls=e(i.manualControls).length>0&&e(i.manualControls)),i.randomize&&(a.slides.sort(function(){return Math.round(Math.random())-.5}),a.container.empty().append(a.slides)),a.doMath(),p&&m.asNav.setup(),a.setup("init"),i.controlNav&&m.controlNav.setup(),i.directionNav&&m.directionNav.setup(),i.keyboard&&(1===e(a.containerSelector).length||i.multipleKeyboard)&&e(document).bind("keyup",function(e){var t=e.keyCode;if(!a.animating&&(39===t||37===t)){var n=39===t?a.getTarget("next"):37===t?a.getTarget("prev"):!1;a.flexAnimate(n,i.pauseOnAction)}}),i.mousewheel&&a.bind("mousewheel",function(e,t,n,o){e.preventDefault();var s=0>t?a.getTarget("next"):a.getTarget("prev");a.flexAnimate(s,i.pauseOnAction)}),i.pausePlay&&m.pausePlay.setup(),i.slideshow&&(i.pauseOnHover&&a.hover(function(){a.pause()},function(){a.manualPause||a.play()}),i.initDelay>0?setTimeout(a.play,i.initDelay):a.play()),s&&i.touch&&m.touch(),(!u||u&&i.smoothHeight)&&e(window).bind("resize focus",m.resize),setTimeout(function(){i.start(a)},200)},asNav:{setup:function(){a.asNav=!0,a.animatingTo=Math.floor(a.currentSlide/a.move),a.currentItem=a.currentSlide,a.slides.removeClass(o+"active-slide").eq(a.currentItem).addClass(o+"active-slide"),a.slides.click(function(t){t.preventDefault();var n=e(this),o=n.index();e(i.asNavFor).data("flexslider").animating||n.hasClass("active")||(a.direction=a.currentItem<o?"next":"prev",a.flexAnimate(o,i.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){a.manualControls?m.controlNav.setupManual():m.controlNav.setupPaging()},setupPaging:function(){var t,n="thumbnails"===i.controlNav?"control-thumbs":"control-paging",l=1;if(a.controlNavScaffold=e('<ol class="'+o+"control-nav "+o+n+'"></ol>'),a.pagingCount>1)for(var c=0;c<a.pagingCount;c++)t="thumbnails"===i.controlNav?'<img src="'+a.slides.eq(c).attr("data-thumb")+'"/>':"<a>"+l+"</a>",a.controlNavScaffold.append("<li>"+t+"</li>"),l++;a.controlsContainer?e(a.controlsContainer).append(a.controlNavScaffold):a.append(a.controlNavScaffold),m.controlNav.set(),m.controlNav.active(),a.controlNavScaffold.delegate("a, img",r,function(t){t.preventDefault();var n=e(this),s=a.controlNav.index(n);n.hasClass(o+"active")||(a.direction=s>a.currentSlide?"next":"prev",a.flexAnimate(s,i.pauseOnAction))}),s&&a.controlNavScaffold.delegate("a","click touchstart",function(e){e.preventDefault()})},setupManual:function(){a.controlNav=a.manualControls,m.controlNav.active(),a.controlNav.live(r,function(t){t.preventDefault();var n=e(this),s=a.controlNav.index(n);n.hasClass(o+"active")||(s>a.currentSlide?a.direction="next":a.direction="prev",a.flexAnimate(s,i.pauseOnAction))}),s&&a.controlNav.live("click touchstart",function(e){e.preventDefault()})},set:function(){var t="thumbnails"===i.controlNav?"img":"a";a.controlNav=e("."+o+"control-nav li "+t,a.controlsContainer?a.controlsContainer:a)},active:function(){a.controlNav.removeClass(o+"active").eq(a.animatingTo).addClass(o+"active")},update:function(t,n){a.pagingCount>1&&"add"===t?a.controlNavScaffold.append(e("<li><a>"+a.count+"</a></li>")):1===a.pagingCount?a.controlNavScaffold.find("li").remove():a.controlNav.eq(n).closest("li").remove(),m.controlNav.set(),a.pagingCount>1&&a.pagingCount!==a.controlNav.length?a.update(n,t):m.controlNav.active()}},directionNav:{setup:function(){var t=e('<ul class="'+o+'direction-nav"><li><a class="'+o+'prev" href="#">'+i.prevText+'</a></li><li><a class="'+o+'next" href="#">'+i.nextText+"</a></li></ul>");a.controlsContainer?(e(a.controlsContainer).append(t),a.directionNav=e("."+o+"direction-nav li a",a.controlsContainer)):(a.append(t),a.directionNav=e("."+o+"direction-nav li a",a)),m.directionNav.update(),a.directionNav.bind(r,function(t){t.preventDefault();var n=e(this).hasClass(o+"next")?a.getTarget("next"):a.getTarget("prev");a.flexAnimate(n,i.pauseOnAction)}),s&&a.directionNav.bind("click touchstart",function(e){e.preventDefault()})},update:function(){var e=o+"disabled";i.animationLoop||(1===a.pagingCount?a.directionNav.addClass(e):0===a.animatingTo?a.directionNav.removeClass(e).filter("."+o+"prev").addClass(e):a.animatingTo===a.last?a.directionNav.removeClass(e).filter("."+o+"next").addClass(e):a.directionNav.removeClass(e))}},pausePlay:{setup:function(){var t=e('<div class="'+o+'pauseplay"><a></a></div>');a.controlsContainer?(a.controlsContainer.append(t),a.pausePlay=e("."+o+"pauseplay a",a.controlsContainer)):(a.append(t),a.pausePlay=e("."+o+"pauseplay a",a)),m.pausePlay.update(i.slideshow?o+"pause":o+"play"),a.pausePlay.bind(r,function(t){t.preventDefault(),e(this).hasClass(o+"pause")?(a.pause(),a.manualPause=!0):(a.play(),a.manualPause=!1)}),s&&a.pausePlay.bind("click touchstart",function(e){e.preventDefault()})},update:function(e){"play"===e?a.pausePlay.removeClass(o+"pause").addClass(o+"play").text(i.playText):a.pausePlay.removeClass(o+"play").addClass(o+"pause").text(i.pauseText)}},touch:function(){function e(e){a.animating?e.preventDefault():1===e.touches.length&&(a.pause(),m=l?a.h:a.w,f=Number(new Date),p=d&&c&&a.animatingTo===a.last?0:d&&c?a.limit-(a.itemW+i.itemMargin)*a.move*a.animatingTo:d&&a.currentSlide===a.last?a.limit:d?(a.itemW+i.itemMargin)*a.move*a.currentSlide:c?(a.last-a.currentSlide+a.cloneOffset)*m:(a.currentSlide+a.cloneOffset)*m,s=l?e.touches[0].pageY:e.touches[0].pageX,r=l?e.touches[0].pageX:e.touches[0].pageY,t.addEventListener("touchmove",n,!1),t.addEventListener("touchend",o,!1))}function n(e){v=l?s-e.touches[0].pageY:s-e.touches[0].pageX,g=l?Math.abs(v)<Math.abs(e.touches[0].pageX-r):Math.abs(v)<Math.abs(e.touches[0].pageY-r),(!g||Number(new Date)-f>500)&&(e.preventDefault(),!u&&a.transitions&&(i.animationLoop||(v/=0===a.currentSlide&&0>v||a.currentSlide===a.last&&v>0?Math.abs(v)/m+2:1),a.setProps(p+v,"setTouch")))}function o(e){if(a.animatingTo===a.currentSlide&&!g&&null!==v){var l=c?-v:v,d=l>0?a.getTarget("next"):a.getTarget("prev");a.canAdvance(d)&&(Number(new Date)-f<550&&Math.abs(l)>20||Math.abs(l)>m/2)?a.flexAnimate(d,i.pauseOnAction):a.flexAnimate(a.currentSlide,i.pauseOnAction,!0)}t.removeEventListener("touchmove",n,!1),t.removeEventListener("touchend",o,!1),s=null,r=null,v=null,p=null}var s,r,p,m,v,f,g=!1;t.addEventListener("touchstart",e,!1)},resize:function(){!a.animating&&a.is(":visible")&&(d||a.doMath(),u?m.smoothHeight():d?(a.slides.width(a.computedW),a.update(a.pagingCount),a.setProps()):l?(a.viewport.height(a.h),a.setProps(a.h,"setTotal")):(i.smoothHeight&&m.smoothHeight(),a.newSlides.width(a.computedW),a.setProps(a.computedW,"setTotal")))},smoothHeight:function(e){if(!l||u){var t=u?a:a.viewport;e?t.animate({height:a.slides.eq(a.animatingTo).height()},e):t.height(a.slides.eq(a.animatingTo).height())}},sync:function(t){var n=e(i.sync).data("flexslider"),o=a.animatingTo;switch(t){case"animate":n.flexAnimate(o,i.pauseOnAction,!1,!0);break;case"play":n.playing||n.asNav||n.play();break;case"pause":n.pause()}}},a.flexAnimate=function(t,n,s,r,v){if(!a.animating&&(a.canAdvance(t)||s)&&a.is(":visible")){if(p&&r){var f=e(i.asNavFor).data("flexslider");if(a.atEnd=0===t||t===a.count-1,f.flexAnimate(t,!0,!1,!0,v),a.direction=a.currentItem<t?"next":"prev",f.direction=a.direction,Math.ceil((t+1)/a.visible)-1===a.currentSlide||0===t)return a.currentItem=t,a.slides.removeClass(o+"active-slide").eq(t).addClass(o+"active-slide"),!1;a.currentItem=t,a.slides.removeClass(o+"active-slide").eq(t).addClass(o+"active-slide"),t=Math.floor(t/a.visible)}if(a.animating=!0,a.animatingTo=t,i.before(a),n&&a.pause(),a.syncExists&&!v&&m.sync("animate"),i.controlNav&&m.controlNav.active(),d||a.slides.removeClass(o+"active-slide").eq(t).addClass(o+"active-slide"),a.atEnd=0===t||t===a.last,i.directionNav&&m.directionNav.update(),t===a.last&&(i.end(a),i.animationLoop||a.pause()),u)a.slides.eq(a.currentSlide).fadeOut(i.animationSpeed,i.easing),a.slides.eq(t).fadeIn(i.animationSpeed,i.easing,a.wrapup);else{var g,h,S,x=l?a.slides.filter(":first").height():a.computedW;d?(g=i.itemWidth>a.w?2*i.itemMargin:i.itemMargin,S=(a.itemW+g)*a.move*a.animatingTo,h=S>a.limit&&1!==a.visible?a.limit:S):h=0===a.currentSlide&&t===a.count-1&&i.animationLoop&&"next"!==a.direction?c?(a.count+a.cloneOffset)*x:0:a.currentSlide===a.last&&0===t&&i.animationLoop&&"prev"!==a.direction?c?0:(a.count+1)*x:c?(a.count-1-t+a.cloneOffset)*x:(t+a.cloneOffset)*x,a.setProps(h,"",i.animationSpeed),a.transitions?(i.animationLoop&&a.atEnd||(a.animating=!1,a.currentSlide=a.animatingTo),a.container.unbind("webkitTransitionEnd transitionend"),a.container.bind("webkitTransitionEnd transitionend",function(){a.wrapup(x)})):a.container.animate(a.args,i.animationSpeed,i.easing,function(){a.wrapup(x)})}i.smoothHeight&&m.smoothHeight(i.animationSpeed)}},a.wrapup=function(e){u||d||(0===a.currentSlide&&a.animatingTo===a.last&&i.animationLoop?a.setProps(e,"jumpEnd"):a.currentSlide===a.last&&0===a.animatingTo&&i.animationLoop&&a.setProps(e,"jumpStart")),a.animating=!1,a.currentSlide=a.animatingTo,i.after(a)},a.animateSlides=function(){a.animating||a.flexAnimate(a.getTarget("next"))},a.pause=function(){clearInterval(a.animatedSlides),a.playing=!1,i.pausePlay&&m.pausePlay.update("play"),a.syncExists&&m.sync("pause")},a.play=function(){a.animatedSlides=setInterval(a.animateSlides,i.slideshowSpeed),a.playing=!0,i.pausePlay&&m.pausePlay.update("pause"),a.syncExists&&m.sync("play")},a.canAdvance=function(e){var t=p?a.pagingCount-1:a.last;return p&&0===a.currentItem&&e===a.pagingCount-1&&"next"!==a.direction?!1:e!==a.currentSlide||p?i.animationLoop?!0:a.atEnd&&0===a.currentSlide&&e===t&&"next"!==a.direction?!1:a.atEnd&&a.currentSlide===t&&0===e&&"next"===a.direction?!1:!0:!1},a.getTarget=function(e){return a.direction=e,"next"===e?a.currentSlide===a.last?0:a.currentSlide+1:0===a.currentSlide?a.last:a.currentSlide-1},a.setProps=function(e,t,n){var o=function(){var n=e?e:(a.itemW+i.itemMargin)*a.move*a.animatingTo,o=function(){if(d)return"setTouch"===t?e:c&&a.animatingTo===a.last?0:c?a.limit-(a.itemW+i.itemMargin)*a.move*a.animatingTo:a.animatingTo===a.last?a.limit:n;switch(t){case"setTotal":return c?(a.count-1-a.currentSlide+a.cloneOffset)*e:(a.currentSlide+a.cloneOffset)*e;case"setTouch":return c?e:e;case"jumpEnd":return c?e:a.count*e;case"jumpStart":return c?a.count*e:e;default:return e}}();return-1*o+"px"}();a.transitions&&(o=l?"translate3d(0,"+o+",0)":"translate3d("+o+",0,0)",n=void 0!==n?n/1e3+"s":"0s",a.container.css("-"+a.pfx+"-transition-duration",n)),a.args[a.prop]=o,(a.transitions||void 0===n)&&a.container.css(a.args)},a.setup=function(t){if(u)a.slides.css({width:"100%","float":"left",marginRight:"-100%",position:"relative"}),"init"===t&&a.slides.eq(a.currentSlide).fadeIn(i.animationSpeed,i.easing),i.smoothHeight&&m.smoothHeight();else{var n,s;"init"===t&&(a.viewport=e('<div class="flex-viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(a).append(a.container),a.cloneCount=0,a.cloneOffset=0,c&&(s=e.makeArray(a.slides).reverse(),a.slides=e(s),a.container.empty().append(a.slides))),i.animationLoop&&!d&&(a.cloneCount=2,a.cloneOffset=1,"init"!==t&&a.container.find(".clone").remove(),a.container.append(a.slides.first().clone().addClass("clone")).prepend(a.slides.last().clone().addClass("clone"))),a.newSlides=e(i.selector,a),n=c?a.count-1-a.currentSlide+a.cloneOffset:a.currentSlide+a.cloneOffset,l&&!d?(a.container.height(200*(a.count+a.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){a.newSlides.css({display:"block"}),a.doMath(),a.viewport.height(a.h),a.setProps(n*a.h,"init")},"init"===t?100:0)):(a.container.width(200*(a.count+a.cloneCount)+"%"),a.setProps(n*a.computedW,"init"),setTimeout(function(){a.doMath(),a.newSlides.css({width:a.computedW,"float":"left",display:"block"}),i.smoothHeight&&m.smoothHeight()},"init"===t?100:0))}d||a.slides.removeClass(o+"active-slide").eq(a.currentSlide).addClass(o+"active-slide")},a.doMath=function(){var e=a.slides.first(),t=i.itemMargin,n=i.minItems,o=i.maxItems;a.w=a.width(),a.h=e.height(),a.boxPadding=e.outerWidth()-e.width(),d?(a.itemT=i.itemWidth+t,a.minW=n?n*a.itemT:a.w,a.maxW=o?o*a.itemT:a.w,a.itemW=a.minW>a.w?(a.w-t*n)/n:a.maxW<a.w?(a.w-t*o)/o:i.itemWidth>a.w?a.w:i.itemWidth,a.visible=Math.floor(a.w/(a.itemW+t)),a.move=i.move>0&&i.move<a.visible?i.move:a.visible,a.pagingCount=Math.ceil((a.count-a.visible)/a.move+1),a.last=a.pagingCount-1,a.limit=1===a.pagingCount?0:i.itemWidth>a.w?(a.itemW+2*t)*a.count-a.w-t:(a.itemW+t)*a.count-a.w):(a.itemW=a.w,a.pagingCount=a.count,a.last=a.count-1),a.computedW=a.itemW-a.boxPadding},a.update=function(e,t){a.doMath(),d||(e<a.currentSlide?a.currentSlide+=1:e<=a.currentSlide&&0!==e&&(a.currentSlide-=1),a.animatingTo=a.currentSlide),i.controlNav&&!a.manualControls&&("add"===t&&!d||a.pagingCount>a.controlNav.length?m.controlNav.update("add"):("remove"===t&&!d||a.pagingCount<a.controlNav.length)&&(d&&a.currentSlide>a.last&&(a.currentSlide-=1,a.animatingTo-=1),m.controlNav.update("remove",a.last))),i.directionNav&&m.directionNav.update()},a.addSlide=function(t,n){var o=e(t);a.count+=1,a.last=a.count-1,l&&c?void 0!==n?a.slides.eq(a.count-n).after(o):a.container.prepend(o):void 0!==n?a.slides.eq(n).before(o):a.container.append(o),a.update(n,"add"),a.slides=e(i.selector+":not(.clone)",a),a.setup(),i.added(a)},a.removeSlide=function(t){var n=isNaN(t)?a.slides.index(e(t)):t;a.count-=1,a.last=a.count-1,isNaN(t)?e(t,a.slides).remove():l&&c?a.slides.eq(a.last).remove():a.slides.eq(t).remove(),a.doMath(),a.update(n,"remove"),a.slides=e(i.selector+":not(.clone)",a),a.setup(),i.removed(a)},m.init()},e.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7e3,animationSpeed:600,initDelay:0,randomize:!1,pauseOnAction:!0,pauseOnHover:!1,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:0,maxItems:0,move:0,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){}},e.fn.flexslider=function(t){if(t=t||{},"object"==typeof t)return this.each(function(){var n=e(this),a=t.selector?t.selector:".slides > li",i=n.find(a);1===i.length?(i.fadeIn(400),t.start&&t.start(n)):void 0===n.data("flexslider")&&new e.flexslider(this,t)});var n=e(this).data("flexslider");switch(t){case"play":n.play();break;case"pause":n.pause();break;case"next":n.flexAnimate(n.getTarget("next"),!0);break;case"prev":case"previous":n.flexAnimate(n.getTarget("prev"),!0);break;default:"number"==typeof t&&n.flexAnimate(t,!0)}}}(jQuery);
    </script>
    <script>
    $(function() {

  jQuery().ready(function() {

    $(".to-form").on("click", function (event) {
      event.preventDefault();
      var id  = $('#block4'),
      top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1000);
      });

   $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
          $('body').removeClass('loading');
      }
  });
});
});
    </script>

    <script>
        var btnContacts = $(".js-open-contacts_bg"),
            btnContactUs = $(".js-open-contacts_us_bg"),
            popupContacts = $(".js-contacts_bg"),
            popupContactUs = $(".js-contact_us_bg"),
            overlayBg = $(".overlay_bg"),
            jsClosePopup = $(".js-close-popup_bg");

            btnContacts.on("click", function() {
                popupContacts.show();
                overlayBg.show();
            });

            btnContactUs.on("click", function() {
                popupContactUs.show();
                overlayBg.show();
            });

            jsClosePopup.on("click", function() {
                $(this).closest(".popup_bg").hide();
                overlayBg.hide();
            });

            overlayBg.on("click", function(evt) {
                if(evt.target == this) {
                    popupContacts.hide();
                    popupContactUs.hide();
                    $(this).hide();
                }
            });
    </script>
</body>
</html>
