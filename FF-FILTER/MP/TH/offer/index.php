<?php
$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : '';
$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';
$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';
$utm_term = isset($_GET['utm_term']) ? $_GET['utm_term'] : '';
$utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
$sub1 = isset($_GET['sub1']) ? $_GET['sub1'] : '';
$sub2 = isset($_GET['sub2']) ? $_GET['sub2'] : '';
$sub3 = isset($_GET['sub3']) ? $_GET['sub3'] : '';
$sub4 = isset($_GET['sub4']) ? $_GET['sub4'] : '';
$sub5 = isset($_GET['sub5']) ? $_GET['sub5'] : '';
$land = isset($_GET['land']) ? $_GET['land'] : '';
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

$flowHash = 'xnUV';
$landing = 'm.th.forfun.themaxisize.com';
$country = 'th';
$category = 'Adult';
$offer = 'M-POWER';
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta charset="utf-8">
		<meta content="telephone=no" name="format-detection">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" name="viewport">
		<title>M-POWER</title>
		<style media="all">
			@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nE8xhg-WlD4iG4AP-V7QxYA.woff2) format("woff2");unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nN_eC2PfU-cUGGN7U-FIfKc.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nLvM2QJLsjx6Keu1D2MYodo.woff2) format("woff2");unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nNd5cRMOq5PeG3VabknWPxo.woff2) format("woff2");unicode-range:U+0370-03FF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nLpX8dGXLalyu5OokvgDQcs.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nPVFL0ofnRu5Y2lP-UpEUGU.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:300;src:local('Roboto Condensed Light'),local(RobotoCondensed-Light),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nBBQ_Gf4FfI8J4SYljBAylk.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsDrvev4WAjW489CRDHIkJ90.woff2) format("woff2");unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsCGXDOnx9ptx3UTSPTrfsgk.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsAZ98xO_Wnt-JIem4AuLGfs.woff2) format("woff2");unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsE1G989qbVg6RT5ly5jB8V8.woff2) format("woff2");unicode-range:U+0370-03FF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsJ84zb0nVte6liF9gGtpo1Y.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsD86pq2NkPzVgw_9lpT6RGI.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'),local(RobotoCondensed-Regular),url(http://fonts.gstatic.com/s/robotocondensed/v16/Zd2E9abXLFGSr9G3YK2MsDAdhzWOYhqHvOZMRGaEyPo.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nDW5FUgIgejJvrHuLWqrSMw.woff2) format("woff2");unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nA30BZHTGu2N_DqssQcMQNQ.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nPDoBG10JtAX-GAwn6iwU1Y.woff2) format("woff2");unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nGhQuge17febRYSUkWKdLWA.woff2) format("woff2");unicode-range:U+0370-03FF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nBBtmDLrZTTOm3p1EhiGCXc.woff2) format("woff2");unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nEV356qNqHCUb41pS3zqMSE.woff2) format("woff2");unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'),local(RobotoCondensed-Bold),url(http://fonts.gstatic.com/s/robotocondensed/v16/b9QBgL0iMZfDSpmcXcE8nHm2hrkyco9jQ3NKMXpgOBg.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}
		</style>
<style media="all">
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,div.footer,div.header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,div.footer,div.header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}.clearfix:after{content:'';display:block;clear:both}html{height:100%}body{min-width:480px;width:100%;height:100%;background:#1b212f;font:400 17px/25px Georgia,sans-serif;color:#fff;-webkit-font-smoothing:antialiased}input,textarea{font:400 17px/1 Tahoma,Geneva,sans-serif;color:#1b212f}button{font:700 25px "Roboto Condensed",sans-serif;color:#fff}.body{width:100%;min-height:100%;position:relative}.cnt_wrapp{width:480px;margin:0 auto;position:relative}.headline{text-transform:uppercase;font:700 40px/40px "Roboto Condensed",sans-serif;color:#fff}.button{display:block;width:85px;height:65px;background:#fff2aa;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZjJhYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmMzMWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:linear-gradient(to bottom,#fff2aa 0%,#ffc31e 100%);border:0;border-radius:10px;box-shadow:0 1px 3px #c12478;text-align:center;text-transform:uppercase;text-decoration:none;font:700 30px/1 "Roboto Condensed",sans-serif;color:#821855;text-shadow:0 1px 0 #ffe996;cursor:pointer}.button:hover{background:#ffe996}.button:active{box-shadow:inset 0 0 15px #444,0 1px 3px #c12478}div.header.base{background:url(img/bg_header.jpg) center top no-repeat}div.header.base .cnt_wrapp{padding-top:895px}div.header.base h1{position:absolute;left:10px;top:770px;text-transform:uppercase;font:700 35px/34px "Roboto Condensed",sanss-serif;color:#3ab4dc}div.header.base h1 span{display:block}div.header.base h1 .s{color:#74d9fa}div.header.base h1 .t{color:#fff}div.header.base .days{width:95px;position:absolute;right:10px;top:20px;text-align:center;text-transform:uppercase;font:700 20px/22px "Roboto Condensed",sans-serif}div.header.base .days span{display:block;font-size:55px;line-height:47px}div.header.base .benefits{position:absolute;left:225px;top:645px}div.header.base .benefits li{padding:2px 0 2px 65px;margin-top:15px;background-position:left center;background-repeat:no-repeat;text-transform:uppercase;font:700 23px/20px "Roboto Condensed",sans-serif}div.header.base .benefits li span{display:block;font-size:16px;color:#3ab4dc}div.header.base .benefits li:first-child{margin-top:0}div.header.base .benefits .li1{background-image:url(img/header_1.png)}div.header.base .benefits .li2{background-image:url(img/header_2.png)}div.header.base .benefits .li3{background-image:url(img/header_3.png)}div.header.base .benefits .li4{background-image:url(img/header_4.png)}div.header.base form{width:446px;min-height:262px;padding:0 17px 32px;background:url(img/form.jpg) center top no-repeat}div.header.base form .restriction{height:40px;text-transform:uppercase;font:700 18px/40px "Roboto Condensed",sans-serif;color:#ffc21c}div.header.base form .row{margin-top:5px}div.header.base form label{display:block;font:400 17px/24px "Roboto Condensed",sans-serif}div.header.base form select,div.header.base form input{display:block;width:100%;box-sizing:border-box;height:28px;float:right;padding:0 7px;background:#fff;border:solid 1px #851d59;border-radius:2px;box-shadow:inset 0 0 1px #fff,0 1px 2px #df2891}div.header.base form input{background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjM3JSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlN2U4ZWMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:linear-gradient(to bottom,white 0%,white 37%,#e7e8ec 100%)}div.header.base form select{width:100%;height:30px}div.header.base form .price_change{display:block;width:158px;float:left;padding:4px 0 0;font:400 17px/22px "Roboto Condensed",sans-serif}div.header.base form .price_change .last{font-weight:700}div.header.base form .price_change .last span{text-decoration:line-through;font-weight:400;color:#ffaedd}div.header.base form .button{width:135px;height:52px;font-size:25px;outline:none}div.header.base .who{padding:2px 0 0 195px;position:absolute;top:512px;left:20px;background:url(img/logo2.png) left 3px no-repeat;text-transform:uppercase;font:700 23px/25px "Roboto Condensed",sans-serif}div.header.base .who:after{content:'';display:block;width:4px;position:absolute;left:170px;top:0;bottom:0;background:url(img/dot1.png) left top repeat-y}.expert{padding:20px 0 0}.expert p{margin-top:23px;font-style:italic}.expert p:first-child{margin-top:0}.expert .top{padding:0 10px 10px;background:url(img/expert_0.png) center bottom no-repeat}.expert .bottom{padding:20px 15px 60px 25px;position:relative;background:#00a1d6 url(img/expert_1.jpg) left bottom no-repeat}.expert .bottom p{margin-top:30px}.expert .bottom p:first-child{margin-top:0}.expert .bottom .name{margin-left:95px;color:#a1e8ff}.how_work{padding:20px 0 0;position:relative;z-index:1;color:#fff}.how_work h4{text-transform:uppercase;font:700 18px/22px "Roboto Condensed",sans-serif}.how_work p{margin-top:20px;font-style:italic;font-size:14px;line-height:17px}.how_work .top,.how_work .pre_bottom{padding:0 10px;background-position:center bottom;background-repeat:no-repeat}.how_work .top{padding-bottom:205px;background-image:url(img/how_work_0.png)}.how_work .pre_bottom{padding-bottom:235px;background-image:url(img/how_work_1.jpg)}.how_work .bottom{padding:0 0 20px}.how_work .bottom li{width:440px;height:113px;padding:20px;margin-top:20px;background-color:#333c4f;background-position:left top}.how_work .bottom li:first-child{margin-top:0}.how_work .bottom .li1{background-image:url(img/how1.jpg)}.how_work .bottom .li2{background-image:url(img/how2.jpg)}.how_work .bottom .li3{background-image:url(img/how3.jpg)}.how_work .bottom .li4{background-image:url(img/how4.jpg)}.how_work .bottom p{margin-top:10px}.progress{width:460px;padding:585px 10px 10px;position:relative;z-index:2;background:url(img/progress_0.jpg) left top no-repeat;color:#fff}.progress .headline{margin-bottom:30px;font-size:40px;line-height:1}.progress .weeks{font-style:italic}.progress .weeks li{padding:0 0 0 40px;margin-top:25px;background-position:left center;background-repeat:no-repeat}.progress .weeks li:first-child{margin-top:0}.progress .weeks .li1{background-image:url(img/weeks_1.png)}.progress .weeks .li2{background-image:url(img/weeks_2.png)}.progress .weeks .li3{background-image:url(img/weeks_3.png)}.progress .small_banner{width:440px;padding:0 20px;position:absolute;left:0;top:29px;text-transform:uppercase;font:700 13px/24px "Roboto Condensed",sans-serif}.progress .small_banner a{padding-left:30px;position:absolute;right:20px;top:-10px;line-height:65px}.progress .small_banner a:after{content:'';display:block;width:53px;height:103px;position:absolute;left:-22px;bottom:-11px;background:url(img/progress_1.png) left top no-repeat}.progress .m li{width:73px;position:absolute;text-align:center;text-transform:uppercase;font:700 14px/20px "Roboto Condensed",sans-serif}.progress .m li span{display:block;font-size:17px}.progress .m .li1{left:198px;top:295px}.progress .m .li2{left:272px;top:218px}.progress .m .li3{left:357px;top:114px}.reviews{padding-bottom:20px}.reviews_box{padding:15px 20px 20px;margin-top:20px;position:relative;background:#333c4f;background-position:left bottom;background-repeat:no-repeat;font-style:italic;font-size:16px;line-height:23px}.reviews_box.rev1{background-image:url(img/rev1.png)}.reviews_box.rev2{background-image:url(img/rev2.png)}.reviews_box.rev3{background-image:url(img/rev3.png)}.reviews_box .wrapp{padding:25px 0 0 100px}.reviews_box .text{color:#fff}.reviews_box .author{color:#7483a2}.reviews_box .stars{margin-top:5px}.reviews_box .stars,.reviews_box .stars div{width:100px;height:16px;background:url(img/stars_0.png) left top repeat-x}.reviews_box .stars div{background-position:bottom left}.action{padding-top:20px;position:relative;background:url(img/bg_action.jpg) center 94px no-repeat}.action .text_wrapp{width:270px;height:149px}.action .headline{margin-bottom:10px;font-size:30px;line-height:32px}.action .h_desc{font-style:italic;font-size:15px;line-height:19px;color:#f350ae}.action .left{height:300px;padding:46px 20px 0}.action .right{padding:15px 20px 10px;background:#fff}.action .today{height:60px;padding-left:130px;position:relative;text-transform:uppercase;font:700 27px/60px "Roboto Condensed",sans-serif;color:#fff}.action .today span.percent{display:block;width:120px;height:60px;position:absolute;left:0;top:0;text-align:center;font-size:34px;line-height:57px;color:#f350ae}.action .price_change{height:83px;padding-top:27px;position:relative;text-transform:uppercase;font-family:'Roboto Condensed',sans-serif}.action .price_change div{height:53px;float:left;text-align:center}.action .price_change .old{width:150px;text-decoration:line-through;font-size:31px;line-height:65px;color:#ff80c9}.action .price_change .new{width:205px;font-weight:700;font-size:45px;line-height:53px;color:#fff}.action .count_wrapp p{width:370px;text-align:center;text-transform:uppercase;font:700 23px/1 "Roboto Condensed",sans-serif;color:#fff}.action .count_wrapp .landing__countdown{margin:15px 0 0 20px}.action .count_wrapp .landing__countdown span{position:relative;display:inline-block;width:77px;height:47px;margin:0 6px;background:url(img/count_0.png) left top no-repeat;font:700 27px/40px "Roboto Condensed",sans-serif;color:#f350ae;text-align:center;letter-spacing:26px;padding-left:12px}.action .count_wrapp .landing__countdown span:first-of-type{margin-left:0}.action .landing__countdown span:not(:first-of-type):before,.action .landing__countdown span:not(:first-of-type):after{content:'';display:block;width:7px;height:7px;position:absolute;left:-14px;background:#fff;border-radius:4px}.action .landing__countdown span:before{top:11px}.action .landing__countdown span:after{top:26px}.action form .row{margin-top:19px}.action form .row:first-child{margin-top:0}.action form label{display:block;height:27px;font-style:italic;color:#f350ae}.action form label span:not(.label){float:right;font-size:13px;line-height:30px;color:#1b212f}.action form input,.action form select{width:424px;height:33px;padding:0 7px;margin-top:4px;background:#fff;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjM3JSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlN2U4ZWMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:linear-gradient(to bottom,white 0%,white 37%,#e7e8ec 100%);border:solid 1px #a6a9b0;border-radius:2px;box-shadow:inset 0 0 1px #fff}.action form select{width:440px;margin-top:0}.action form button{display:block;width:195px;height:54px;float:left;background:#f350ae;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2YzNTBhZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlOTFiOTIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:linear-gradient(to bottom,#f350ae 0%,#e91b92 100%);border:0;border-radius:5px;outline:none;cursor:pointer;text-transform:uppercase;font:700 25px "Roboto Condensed",sans-serif}.action form button:hover{background:#f350ae}.action form button:active{box-shadow:inset 0 0 15px #444}.action .spy{height:60px;float:right;padding:4px 0 0 60px;background:url(img/icon_0.jpg) left top no-repeat;text-transform:uppercase;font:700 15px/18px "Roboto Condensed",sans-serif;color:#f350ae}div.footer.base{padding:40px 0;text-align:center;font-style:italic;font-size:16px;line-height:23px;color:#4c5875;margin:0 auto}div.footer.base .mt{margin-top:20px}form .custom_select{position:relative;margin-top:4px}.cnt_wrapp:not(.action) form .custom_select{height:30px}form .custom_select:before{pointer-events:none;content:'';position:absolute;top:2px;bottom:2px;right:2px;border-left:#CCC 1px solid;width:30px;background:#fff;background:linear-gradient(to bottom,white 50%,#e7e8ec 100%)}form .custom_select:after{pointer-events:none;content:'';position:absolute;top:50%;margin-top:-2px;right:12px;width:0;height:0;border-style:solid;border-width:5px 5px 0;border-color:#AFAFB0 transparent transparent}form .custom_select:hover:after{border-color:#000 transparent transparent}.cnt_wrapp.footer{text-align:center}.price_caption{font-style:italic;color:#f350ae}.footer_text{text-align:center}
</style>
<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
<link href="favicon.png" rel="icon" type="image/x-icon">
	</head>
	<body>
		<div class="header base">
			<div class="cnt_wrapp">
				<h1>
					<span class="t lt1">นานขึ้น</span> <span class="s lt2">แข็งแรงขึ้น</span> <span class="lt3">ใหญ่ขึ้น</span>
				</h1>
				<ul class="benefits">
					<li class="li1 lt4">เพิ่ม <span>ความยาวและความโตขึ้น</span>
					</li>
					<li class="li2 lt5">ลูกค้า 1 ล้านคน <span>ที่พอใจ!</span>
					</li>
					<li class="li3 lt6">ปลอดภัย<span>และใช้ง่าย!</span>
					</li>
					<li class="li4 lt7">ไม่มีสารเคมี <span>ปั๊มและฟิลเลอร์ .</span>
					</li>
				</ul>
				<div class="who lt8">
					Ajinomoto<br>
					ญี่ปุ่น<br>
					<br>
				</div>
				<div class="days lt9">
					เพียงแค่<span>4</span> สัปดาห์
				</div>
			</div>
		</div>
		<div class="header base" style="background: none;">
			<div class="cnt_wrapp" style="padding-top: 1px;">
				<form action="../../../api/apilb.php" class="right" id="order_form0" method="post" name="order_form0">
					<p class="restriction lt10">
						จำนวนมีจำกัด !
					</p><br>
					<div class="row clearfix">
						<label for="lebel6">
						<span class="label lt13">โทรศัพท์มือถือของคุณ</span>
						<span class="phone phone_helper">เช่น, +66 123456789</span>
					</label>
					<input id="lebel6" name="phone" type="tel">
					<input id="label1" type="hidden" name="name" value="default">
					<select id="label0" name="country" class="country_select" style="display:none;">
						<option value="th">THAILAND</option>
					</select>
					<input name="landing" value="M-POWER" type="hidden">
					</div><br>
					<div class="row clearfix">
						<div class="price_change">
							<p>
								<span class="lt14">ราคา:</span><br>
								<span class="new-price price_main"><span class="price_main_value">990฿</span><span class="price_main_currency"></span></span>
							</p>
						</div><button class="button lt15" type="submit">สั่งซื้อ</button>
					</div>					
					<input type='hidden' name='utm_source' value='<?php echo $utm_source; ?>'>
					<input type='hidden' name='utm_medium' value='<?php echo $utm_medium; ?>'>
					<input type='hidden' name='utm_campaign' value='<?php echo $utm_campaign; ?>'>
					<input type='hidden' name='utm_term' value='<?php echo $utm_term; ?>'>
					<input type='hidden' name='utm_content' value='<?php echo $utm_content; ?>'>					
					<input type='hidden' name='sub1' value='<?php echo $sub1; ?>'>
					<input type='hidden' name='sub2' value='<?php echo $sub2; ?>'>
					<input type='hidden' name='sub3' value='<?php echo $sub3; ?>'>
					<input type='hidden' name='sub4' value='<?php echo $sub4; ?>'>
					<input type='hidden' name='sub5' value='<?php echo $sub5; ?>'>
					<input type='hidden' name='land' value='<?php echo $land; ?>'>	
					<input type='hidden' name='referrer' value='<?php echo $referrer; ?>'>	
					<input type='hidden' name='flow_hash' value='<?php echo $flowHash; ?>'>
					<input type='hidden' name='landing' value='<?php echo $landing; ?>'>
					<input type='hidden' name='country' value='<?php echo $country; ?>'>					
					<input type='hidden' name='category' value='<?php echo $category; ?>'>
					<input type='hidden' name='offer' value='<?php echo $offer; ?>'>
				</form>
			</div>
		</div>
		<div class="expert cnt_wrapp">
			<div class="top">
				<h3 class="headline lt16">
					ความคิดเห็นของผู้เชี่ยวชาญ
				</h3>
				<p class="lt17">
					M-POWER - รับประกันการโตขึ้นของอวัยวะเพศชาย 5 ซม. ต่อเดือน
				</p>
				<p class="lt18">
					มันเป็นเจลที่ไม่ก่อให้เกิดผลข้างเคียงใด ๆ ไม่ก่อให้เกิดอาการแพ้เช่นเดียวกัน M-POWER ไม่ก่อให้เกิดอาการติดและที่สำคัญที่สุดผลหลังการใช้จะอยู่กับคุณตลอดไป.
				</p>
			</div>
			<div class="bottom">
				<p class="lt19">
					ด้วยความช่วยเหลือของเจลคุณจะประสบความสำเร็จในการเปลี่ยนแปลงขนาดของอวัยวะเพศชายซึ่งจะส่งผลกระทบโดยตรงต่อชีวิตเซ็กซ์ของคุณ:คุณจะได้รับความสุขเหมือนได้อยู่สวรรค์จากการอยู่กับผู้หญิงและทำให้พวกเขาถึงจุดการสำเร็จความใคร่ที่แรงและยาวนาน
				</p>
				<p class="lt20">
					กับ M-POWER คุณจะรู้สึกพร้อมเสมอ!
				</p>
				<p class="name lt21">
					หัวหน้าแพทย์แผนกระบบทางเดินปัสสาวะ
				</p>
			</div>
		</div>
		<div class="how_work cnt_wrapp">
			<div class="top">
				<h3 class="headline lt22">
					วิธีทำงานของ M-POWER
				</h3>
				<p class="lt23">
					เอนไซม์พิเศษที่ไม่เป็นอันตรายต่อสุขภาพและเป็นส่วนประกอบที่ส่งผลประโยชน์ถึงเนื้อเยื่อของอวัยวะเพศชายซึ่งทำให้เนื้อเยื่อยืดออกมา. ซึ่งเป็นผลให้อวัยวะยาวขึ้นและเส้นรอบวงใหญ่ขึ้น
				</p>
			</div>
			<div class="pre_bottom">
				<p class="lt24">
					ทาเจลด้วยการนวดยังเคลื่อนไหวที่อวัยวะเพศชายที่แข็งตัว
				</p>
				<p class="lt24">
					รับประกันว่าอวัยวะของคุณจะยาวขึ้น + 5 ซม. หลังจากการนวดด้วย M-POWER.
				</p>
				<p class="lt24">
					สำหรับผลที่ดีที่สุด - ทาเจลก่อนครึ่งชั่วโมงก่อนที่จะมีเพศสัมพันธ์ .ซึ่งจะทำให้มีการกระตุ้นพิเศษให้อวัยวะเพศชายยาวขึ้นและเส้นรอบวงเพิ่มขึ้น
				</p>
			</div>
		</div>
		<div class="how_work cnt_wrapp">
			<ul class="bottom">
				<li class="li1">
					<h4 class="lt29">
						รับประกันความสุข<br>
						ของผู้หญิงของคุณ
					</h4>
					<p class="lt30">
						คุณจะรู้ว่าผู้หญิงต้องการอะไรและวิธีการที่<br>
						จะให้สิ่งนั้นให้เธอ กับ M-POWER คุณทำให้เธอ<br>
						ขออีกและอีก ๆ!!!
					</p>
				</li>
				<li class="li2">
					<h4 class="lt31">
						ทั้งคืน<br>
						ทุกคืน!
					</h4>
					<p class="lt32">
						คุณจะกลายเป็นที่หนึ่งในเซ็กซ์มาราธอน<br>
						ขอบคุณความแข็งแรงและการตั้งตรงที่แข็งเหมือนเหล็ก<br>
						.
					</p>
				</li>
				<li class="li3">
					<h4 class="lt33">
						SEX DRIVE<br>
						ที่สุดยอด
					</h4>
					<p class="lt34">
						สูตรพิเศษจะช่วนในการผลิตฮอร์โมนเพศชายในเลือด - ฮอร์โมนที่เป็นกุญแจสำคัญในพลังและความสำเร็จของผู้ชาย!
					</p>
				</li>
				<li class="li4">
					<h4 class="lt35">
						ผลที่รวดเร็ว<br>
						โดยไม่มีผลข้างเคียง
					</h4>
					<p class="lt36">
						อีกเพียงไม่กี่วันคุณจะรู้สึกการตั้งตรงที่เข้มแข็งเหมือนหินและ<br>
						การสำเร็จความใคร่ที่แรงสุดยอด.
					</p>
				</li>
			</ul>
		</div>
		<div class="progress cnt_wrapp" style="background: url('img/progress_01.jpg') left top no-repeat; padding: 485px 10px 10px;">
			<h3 class="headline lt37">
				คุณจะเห็นผลเมื่อไร?
			</h3>
			<ul class="weeks">
				<li class="li1 lt38">การตั้งตรงยาวขึ้นและนานขึ้น ความไวของอวัยวะเพศชายจะเพิ่มขึ้น 2 เท่า ความยาวและเส้นรอบวงของอวัยวะเจะเพิ่มขึ้นถึง 2 ซม..
				</li>
				<li class="li2 lt39">อวัยวะของคุณจะมีขนาดใหญ่ขึ้น รูปร่างจะถูกต้องตามทางกายภาพ .ระยะเวลาของการมีเพศสัมพันธ์เพิ่มขึ้นถึง 70%!<br>
					<br>
				</li>
				<li class="li3 lt40">อวัยวะยาวขึ้นถึง 5 ซม!คุณภาพของเพศสัมพันธ์จะดีขึ้น! การสำเร็จความใคร่จะเร็วขึ้นและนานถึง 5-7 นาที!<br>
					<br>
				</li>
			</ul>
			<ul class="m">
				<li class="li1 lt43" style="top:190px;">
					<span>2 ซม.<br>
					<!-- span-->2 สัปดาห์</span>
				</li>
				<li class="li2 lt44" style="top:113px;">
					<span>3 ซม.<br>
					<!-- span-->3 สัปดาห์</span>
				</li>
				<li class="li3 lt45" style="top:9px;">
					<span>5 ซม.<br>
					<!-- span-->4 สัปดาห์</span>
				</li>
			</ul>
		</div><!-- /.progress -->
		<div class="reviews cnt_wrapp">
			<div class="reviews_box rev1">
				<p class="text lt42">
					เมื่อก่อนผมเคยคิดว่า 15.5 ซม. ถือว่าเป็นขนาดค่อนข้างปกติ ที่จริงเซ็กซ์ก็ไม่ได้ดีอะไรเป็นพิเศษ ผมเจอ M-POWER ที่อินเทอร์เน็ตและคิดว่าทำไมจะไม่ลองให้ของมันใหญ่ขึ้นน้อย ผมใช้เจลตลอดเป็นเวลาเดือนครึ่งและอวัยวะยาวขึ้น 3 ซม. หนาและแข็งขึ้น.
				</p>
				<div class="wrapp">
					<p class="author lt43">
						Suppakiat, 23
					</p>
					<div class="stars">
						<div></div>
					</div>
				</div>
			</div>
			<div class="reviews_box rev2">
				<p class="text lt44">
					อวัยวะของผมตอนตั้งตรงยาวไม่ถึง 12 ซม ผมลองยามาทุกชนิดแต่ว่าผลศูนย์ แต่หลังจากใช้เจลแค่ 2 สัปดาห์ ผมก็เห็นผลแล้ว อวัยวะยาวขึ้น 2.5 ซม. ความรู้สึกไวมากขึ้นและการตั้งตรงก็เข้มแข็งมากขึ้นเช่นกัน!
				</p>
				<div class="wrapp">
					<p class="author lt45">
						Sunju, 32
					</p>
					<div class="stars">
						<div></div>
					</div>
				</div>
			</div>
			<div class="reviews_box rev3">
				<p class="text lt46">
					แฟนของผมเคยบ่นว่า: "อืม: วันนี้คงไม่ต้องรอนิทานก่อนนอนแล้ว ผมผ่านนรกหลายวงเพื่อเพิ่มความยาวเพียงแค่ครึ่งเซนติเมตร (การผ่าตัด)แต่กับเจล เพิ่มอวัยวะของผมยาวขึ้น 3.9 ซม.ตอนนี้คุณภาพของเพศสัมพันธ์เยี่ยมมาก.
				</p>
				<div class="wrapp">
					<p class="author lt47">
						Sarit, 32
					</p>
					<div class="stars">
						<div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="action cnt_wrapp" id="order_bottom" style="padding-top:0;">
			<form action="../../../api/apilb.php" class="right" id="order_form1" method="post" name="order_form1">
				<div class="row clearfix">
					<label for="lebel6">
						<span class="label lt13">โทรศัพท์มือถือของคุณ</span>
						<span class="phone phone_helper">เช่น, +66 123456789</span>
					</label>
					<input id="lebel6" name="phone" type="tel">
					<input id="label1" type="hidden" name="name" value="default">
					<select id="label0" name="country" class="country_select" style="display:none;">
						<option value="th">THAILAND</option>
					</select>
					<input name="landing" value="m.th.forfun.maxisize-pro.com" type="hidden">
				</div>
				<div class="row clearfix">
					<p class="price_caption">
						<span class="lt14">ราคา:</span> <span class="new-price price_main"><span class="price_main_value">990</span><span class="price_main_currency">฿</span></span>
					</p>
				</div>
				<div class="row clearfix">
					<button class="lt15" type="submit">สั่งซื้อ</button>
					<p class="spy lt56">
						เป็น<br>
						ความลับ
					</p>
				</div>
					<input type='hidden' name='utm_source' value='<?php echo $utm_source; ?>'>
					<input type='hidden' name='utm_medium' value='<?php echo $utm_medium; ?>'>
					<input type='hidden' name='utm_campaign' value='<?php echo $utm_campaign; ?>'>
					<input type='hidden' name='utm_term' value='<?php echo $utm_term; ?>'>
					<input type='hidden' name='utm_content' value='<?php echo $utm_content; ?>'>					
					<input type='hidden' name='sub1' value='<?php echo $sub1; ?>'>
					<input type='hidden' name='sub2' value='<?php echo $sub2; ?>'>
					<input type='hidden' name='sub3' value='<?php echo $sub3; ?>'>
					<input type='hidden' name='sub4' value='<?php echo $sub4; ?>'>
					<input type='hidden' name='sub5' value='<?php echo $sub5; ?>'>
					<input type='hidden' name='land' value='<?php echo $land; ?>'>	
					<input type='hidden' name='referrer' value='<?php echo $referrer; ?>'>	
					<input type='hidden' name='flow_hash' value='<?php echo $flowHash; ?>'>
					<input type='hidden' name='landing' value='<?php echo $landing; ?>'>
					<input type='hidden' name='country' value='<?php echo $country; ?>'>					
					<input type='hidden' name='category' value='<?php echo $category; ?>'>
					<input type='hidden' name='offer' value='<?php echo $offer; ?>'>
			</form>
		</div><br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
	</body>
</html>
