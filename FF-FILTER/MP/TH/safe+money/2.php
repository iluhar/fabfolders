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
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>M-POWER Thailand เจล M-POWER</title>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="favicon.png" rel="icon" type="image/x-icon">
<style>
*{margin:0;padding:0}body{background: #fff;font-family:Tahoma,Verdana;font-size:14px;line-height:23px;width:100%}a{color:#0a78c2;outline:medium none;text-decoration:underline}a:hover{text-decoration:none}p{margin:0 0 11px}strong,b{font-weight:bolder}img{border:medium none}h1,h2{line-height:1.3}h1{margin:10px 0;font-size:25px}h3{margin:2px 0 10px;font-size:20px;font-weight:400}.container{width:960px;margin:0 auto}.header{width:960px;margin:0 auto 20px;background:url(img/header.jpg) no-repeat scroll 0 0 transparent;height:131px;cursor:pointer;box-shadow:0 1px 2px #818181}.left-column{float:left;width:570px;background:none repeat scroll 0 0 #fff;box-shadow:0 0 3px rgba(0,0,0,0.3);margin-right:20px;padding:30px;margin-bottom:10px}.sidebar{float:left;width:309px;font-size:12px}.sidebar-last-posts{background:none repeat scroll 0 0 #fff;box-shadow:0 0 3px rgba(0,0,0,0.3);padding:15px;margin-bottom:20px}.sidebar-last-post{margin-bottom:0}.sidebar-last-post a{color:#489b1f}.sidebar-last-post-info{font-size:11px;margin-bottom:15px}.sidebar-last-post-info-login{color:#bb225c;margin-right:5px}.sidebar-last-post-info-date{margin-right:5px;color:#777}.sidebar-last-post-info-comments{color:#777;text-decoration:underline}.sidebar-bloggers{background:none repeat scroll 0 0 #fff;box-shadow:0 0 3px rgba(0,0,0,0.3);padding:15px;margin-bottom:20px}.sidebar-bloggers-avatar{display:inline-block}.sidebar-bloggers img{margin:5px}.footer{clear:both;margin-left:220px;margin-bottom:20px;font-size:12px;color:#777}.vk-container{font-family:tahoma,arial,verdana,sans-serif,Lucida Sans;font-size:11px;line-height:17px;color:#000;text-decoration:none}.vk-link{text-decoration:none!important;cursor:default!important}.vk-header{background:none repeat scroll 0 0 #dae2e8;padding:4px 4px 4px 6px;margin-bottom:10px}.vk-logo{background:transparent;width:16px;height:16px;float:right;margin-top:-1px}.vk-header-text{padding:2px 3px 1px;line-height:100%;color:#45688e;font-weight:700}.vk-avatar img{float:left;margin-right:10px}.vk-comment,.vk-comment-load{margin-bottom:15px;position:relative;border-bottom:1px solid #dae1e8;padding-bottom:15px}.vk-comment:last-child{border-bottom:0 none}.vk-comment-name{color:#2b587a;font-weight:700;font-size:12px}.vk-comment-text{margin-left:60px}.vk-comment-date{margin-left:60px;color:#999}.vk-comment-like{position:absolute;right:-5px;bottom:10px;background:transparent;width:30px;height:16px;display:inline-block}.vk-comment-like:hover{opacity:.5;cursor:pointer}.vk-comment-like-count{padding-left:20px;font-weight:700;color:#7295b2;font-size:10px}.vk-comment-answer{color:#2b587a}.vk-comment-answer:hover{opacity:.5;cursor:pointer}.button{padding:20px;width:250px;font-weight:700;font-size:18px;text-align:center;text-decoration:none;color:#fff;border:1px solid #7fc7ff;border-radius:10px;background:none repeat scroll 0 0 #007fff;box-shadow:5px 5px 5px #CCC}.button:hover{color:#007fff;background:none repeat scroll 0 0 #7fc7ff}#lleo_dialog,#lleo_dialog *{color:#000!important;font:normal 13px Arial,Helvetica!important;line-height:15px!important;margin:0!important;padding:0!important;background:none!important;border:none 0!important;position:static!important;vertical-align:baseline!important;overflow:visible!important;width:auto!important;height:auto!important;max-width:none!important;max-height:none!important;float:none!important;visibility:visible!important;text-align:left!important;text-transform:none!important;border-collapse:separate!important;border-spacing:2px!important;box-sizing:content-box!important;box-shadow:none!important;opacity:1!important;text-shadow:none!important;letter-spacing:normal!important;-webkit-filter:none!important;-moz-filter:none!important;filter:none!important}#lleo_dialog :before,#lleo_dialog :after{content:''}#lleo_dialog iframe{height:0!important;width:0!important}#lleo_dialog{position:absolute!important;background:#fff!important;border:solid 1px #ccc!important;padding:7px 0 0!important;left:-999px;top:-999px;width:440px!important;overflow:hidden;display:block!important;z-index:999999999!important;box-shadow:8px 16px 30px rgba(0,0,0,0.16)!important;border-radius:3px!important;opacity:0!important;-webkit-transform:translateY(15px);-moz-transform:translateY(15px);-ms-transform:translateY(15px);-o-transform:translateY(15px);transform:translateY(15px)}#lleo_dialog.lleo_show_small{width:150px!important}#lleo_dialog.lleo_show{opacity:1!important;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);-webkit-transition:-webkit-transform 0.3s,opacity .3s!important;-moz-transition:-moz-transform 0.3s,opacity .3s!important;-ms-transition:-ms-transform 0.3s,opacity .3s!important;-o-transition:-o-transform 0.3s,opacity .3s!important;transition:transform 0.3s,opacity .3s!important}#lleo_dialog.lleo_collapse{opacity:0!important;-webkit-transform:scale(0.25,0.1) translate(-550px,100px);-moz-transform:scale(0.25,0.1) translate(-550px,100px);-ms-transform:scale(0.25,0.1) translate(-550px,100px);-o-transform:scale(0.25,0.1) translate(-550px,100px);transform:scale(0.25,0.1) translate(-550px,100px);-webkit-transition:-webkit-transform 0.4s,opacity .4s!important;-moz-transition:-moz-transform 0.4s,opacity .4s!important;-ms-transition:-ms-transform 0.4s,opacity .4s!important;-o-transition:-o-transform 0.4s,opacity .4s!important;transition:transform 0.4s,opacity .4s!important}#lleo_dialog input::-webkit-input-placeholder{color:#aaa!important}#lleo_dialog .lleo_has_pic #lleo_word{margin-right:80px!important}#lleo_dialog #lleo_translationsContainer1{position:relative!important}#lleo_dialog #lleo_translationsContainer2{padding:7px 0 0!important;vertical-align:middle!important}#lleo_dialog #lleo_word{color:#000!important;margin:0 5px 2px 0 !important}#lleo_dialog .lleo_has_sound #lleo_word{margin-left:30px!important}#lleo_dialog #lleo_text{font-weight:700!important;color:#d56e00!important;text-decoration:none!important;cursor:default!important}#lleo_dialog #lleo_optionsBtn{position:absolute!important;right:3px!important;top:5px!important;line-height:1px!important;text-decoration:none!important;font-weight:700!important;font-size:13px!important;color:#aaa!important;padding:2px!important;display:none}#lleo_dialog.lleo_optionsShown #lleo_optionsBtn{display:block!important}#lleo_dialog #lleo_optionsBtn img{width:12px!important;height:12px!important}#lleo_dialog #lleo_sound{float:left!important;width:16px!important;height:16px!important;margin-left:9px!important;margin-right:3px!important;background:0 0 no-repeat!important;cursor:pointer!important;display:none!important;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfNJREFUeNq0U01IVFEU/u57Oo5WhBRIBBptykWLYBa2soWiEKQQEbrSFsGbVRQKQc2iFqGitXqvjQxCoCJCqyI0aBUtZILaJNUuYWYWo8HovJ/707nP94bnz0rxwvfOuefd8517fi5TSuE4i50YwZ3l37ZhNlpgzFkaaM/G9sHF1YskNrT+7l4PjMOcb78t2JL71uxgB+2UlfxHTtq5N94fIOh/88kWgWfl73ZCSQkpeGg3H091JY6dI2S00qA/N3KO3dDUYhFgEmZGurG+w9FqApIHsVM7kaTF9Nhn0r8Q7hPWQgIRuNaH3AMUA4W/Lkdh04cpFS43G0TgxQTvCdMETVAk3KynIHwXZU/ge8XDt7KH9bKLjU0P2zVO5LsEpSejVRJ9UR18EtfqKegovs9R3Q6w9c/H1o4Aa2Jwm1lIvn9RJ4w9RdRRzqcYrpwycCll4Cy1lnkS3Bc6vfBg28v8aRIfI78zhB/1GygROH3jLyyzMQ0zlUZuZBSlKkeLoegGtTjYLcJ8pF+NakHOFC2J6w+f25mxSfWrWFF/ShXVPTGvtN14NNkVnxlYWJkgZEL7/vwKr55lKSVnaGYWkuYgrgG172uUv47+U7fw0EHaJXmalUQy/HqO6lBzEsVjJC4Q8kd6TETQpjuaGOvjv8b/AgwA/ij1XMx58NIAAAAASUVORK5CYII=)!important}#lleo_dialog .lleo_has_sound #lleo_sound{display:block!important}#lleo_dialog #lleo_soundWave{border:solid 5px #4495CC!important;border-radius:5px!important;position:absolute!important;left:-5px!important;top:-5px!important;right:-5px!important;bottom:-5px!important;z-index:0!important;opacity:.9!important;display:none!important}#lleo_dialog #lleo_soundWave.lleo_beforePlaying{display:block!important}#lleo_dialog #lleo_soundWave.lleo_playing{opacity:0!important;border-width:20px!important;border-radius:30px!important;-webkit-transform:scale(1.07,1.1)!important;-moz-transform:scale(1.07,1.1)!important;-ms-transform:scale(1.07,1.1)!important;transform:scale(1.07,1.1)!important;-webkit-transition:all .6s!important;-moz-transition:all .6s!important;-ms-transition:all .6s!important;transition:all .6s!important}#lleo_dialog #lleo_picOuter{position:absolute!important;float:right!important;top:4px;right:5px;z-index:9!important;display:none!important;width:100px!important}#lleo_dialog.lleo_optionsShown #lleo_picOuter{right:25px}#lleo_dialog .lleo_has_pic #lleo_picOuter{display:block!important}#lleo_dialog #lleo_picOuter:hover{width:auto!important;z-index:11!important}#lleo_dialog #lleo_pic,#lleo_dialog #lleo_picBig{position:absolute!important;top:0!important;right:0!important;border:solid 2px #fff!important;-webkit-border-radius:2px!important;-moz-border-radius:2px!important;border-radius:2px!important;z-index:1!important}#lleo_dialog #lleo_pic{position:relative!important;border:none!important;width:30px!important}#lleo_dialog #lleo_picBig{box-shadow:-1px 2px 4px rgba(0,0,0,0.3);z-index:2!important;opacity:0!important;visibility:hidden!important}#lleo_dialog #lleo_picOuter:hover #lleo_picBig{visibility:visible!important;opacity:1!important;-webkit-transition:opacity .3s!important;-webkit-transition-delay:.3s!important}#lleo_dialog #lleo_transcription{margin:0 80px 4px 31px !important;color:#aaa!important}#lleo_dialog .lleo_no_trans{color:#aaa!important}#lleo_dialog .ll-translation-counter{float:right!important;font-size:11px!important;color:#aaa!important;padding:2px 2px 1px 10px !important}#lleo_dialog .ll-translation-text{float:left!important}#lleo_dialog #lleo_trans a{color:#3F669F!important;text-decoration:none!important;text-overflow:ellipsis!important;padding:1px 4px!important;overflow:hidden!important;float:left!important;width:320px!important}#lleo_dialog .ll-translation-item{color:#3F669F!important;border:solid 1px #fff!important;padding:3px!important;width:100%!important;float:left!important;-moz-border-radius:2px!important;-webkit-border-radius:2px!important;border-radius:2px!important}#lleo_dialog .ll-translation-item:hover{border:solid 1px #9FC2C9!important;background:#EDF4F6!important;cursor:pointer!important}#lleo_dialog .ll-translation-item:hover .ll-translation-counter{color:#83a0a6!important}#lleo_dialog .ll-translation-marker{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAWSURBVBhXY7RPm/+fAQkwIXNAbMICAJQ8AkvqWg/SAAAAAElFTkSuQmCC)!important;display:inline-block!important;width:4px!important;height:4px!important;margin:7px 5px 2px 2px !important;float:left!important}#lleo_dialog #lleo_icons{color:#aaa!important;font-size:11px!important;background:#f8f8f8!important;padding:10px 10px 10px 16px !important}#lleo_icons a{display:inline-block!important;width:16px!important;height:16px!important;margin:0 10px -4px 3px !important;text-decoration:none!important;opacity:.5!important;background:url(data:image/png;base64,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)!important}#lleo_icons a:hover{opacity:1!important}#lleo_icons a.lleo_google{background-position:-34px 0!important}#lleo_icons a.lleo_multitran{background-position:-64px 0!important}#lleo_icons a.lleo_lingvo{background-position:-51px 0!important;width:12px!important}#lleo_icons a.lleo_dict{background-position:-17px 0!important}#lleo_icons a.lleo_linguee{background-position:-81px 0!important}#lleo_icons a.lleo_michaelis{background-position:-98px 0!important}#lleo_dialog #lleo_contextContainer{margin:0!important;padding:3px 15px 8px 10px !important;background:#eee!important;background:-webkit-gradient(linear,left top,left bottom,from(#fff),to(#eee))!important;background:-moz-linear-gradient(-90deg,#fff,#eee)!important;border-bottom:solid 1px #ddd!important;border-top-left-radius:3px!important;border-top-right-radius:3px!important;display:none!important;overflow:hidden!important}#lleo_dialog .lleo_has_context #lleo_contextContainer{display:block!important}#lleo_dialog #lleo_context{color:#444!important;text-shadow:1px 1px 0 #f4f4f4!important;line-height:12px!important;font-size:11px!important;margin-left:2px!important}#lleo_dialog #lleo_context b{line-height:12px!important;color:#000!important;font-weight:700!important;font-size:11px!important}#lleo_dialog #lleo_translateContextLink{color:#444!important;text-shadow:1px 1px 0 #f4f4f4!important;background:-webkit-gradient(linear,left top,left bottom,from(#f4f4f4),to(#ddd))!important;background:-moz-linear-gradient(-90deg,#f4f4f4,#ddd)!important;border:solid 1px!important;box-shadow:1px 1px 0 #f6f6f6!important;border-color:#999 #aaa #aaa #999 !important;-moz-border-radius:2px!important;-webkit-border-radius:2px!important;border-radius:2px!important;padding:0 3px!important;font-size:11px!important;text-decoration:none!important;margin:1px 5px 0!important;display:inline-block!important;white-space:nowrap!important}#lleo_dialog #lleo_translateContextLink:hover{background:#f8f8f8!important}#lleo_dialog #lleo_translateContextLink.hidden{visibility:hidden!important}#lleo_dialog #lleo_setTransForm{display:block!important;margin-top:3px!important;padding-top:5px!important;position:relative!important;background:#fff!important;z-index:10!important;padding-bottom:10px!important;padding-left:16px!important}#lleo_dialog .lleo-custom-translation{padding:4px 5px!important;border:solid 1px #ddd!important;border-radius:2px!important;width:90%!important;min-width:270px!important;background:-webkit-gradient(linear,0 0,0 20,from(#f1f1f1),to(#fff))!important;background:-moz-linear-gradient(-90deg,#f1f1f1,#fff)!important;font:normal 13px Arial,Helvetica!important;line-height:15px!important}#lleo_dialog .lleo-custom-translation:hover{border:solid 1px #aaa!important}#lleo_dialog .lleo-custom-translation:focus{background:#FFFEC9!important}#lleo_dialog .hidden{display:none!important}#lleo_dialog .infinitive{color:#D56E00!important;text-decoration:none;border-bottom:1px dotted #D56E00!important}#lleo_dialog .infinitive:hover{border:none!important}#lleo_dialog .lleo_separator{height:1px!important;background:#eee;margin-top:10px!important;background:-webkit-linear-gradient(left,rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%)!important;background:-moz-linear-gradient(left,rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%)!important;background:-ms-linear-gradient(left,rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%)!important;background:linear-gradient(to right,rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%)!important}#lleo_dialog #lleo_trans{padding:5px 30px 0 14px !important;zoom:1}#lleo_dialog .lleo_clearfix{display:block!important;clear:both!important;visibility:hidden!important;height:0!important;font-size:0!important}#lleo_dialog #lleo_picOuter table{width:44px!important;position:absolute!important;right:0!important;top:0!important;vertical-align:middle!important}#lleo_dialog #lleo_picOuter td{width:38px!important;height:38px!important;vertical-align:middle!important;text-align:center!important}#lleo_dialog #lleo_picOuter td div{height:38px!important;overflow:hidden!important}#lleo_dialog .lleo_empty{margin:0 5px 7px!important}#lleo_youtubeExportBtn{margin-left:10px;height:24px}#lleo_youtubeExportBtn i{display:inline-block;width:16px;height:16px;}#lleo_youtubeExportBtn .yt-uix-button-content{font-size:12px;line-height:2px}.lleo_lyrics tran{background:transparent!important;border-radius:2px!important;text-shadow:none!important;cursor:pointer!important}.lleo_lyrics tran:hover{color:#fff!important;background:#C77213!important;-webkit-transition:all .1s!important;-moz-transition:all .1s!important;-ms-transition:all .1s!important;-o-transition:all .1s!important;transition:all .1s!important}.lleo_songName{border:solid 1px #ffd47c;background:#fff1c2;border-radius:2px}.lleo_hidden_iframe{visibility:hidden}
</style>

	</head>
	<body>
		<div class="container">
			<a href="<?php echo $url; ?>" target="_blank">
				<div class="header"></div>
			</a>
			<div class="left-column">
				<h1> M-POWER ( เจล M-POWER) วิธีที่ช่วยทำให้อวัยวะเพศของผมยาวใหญ่ขึ้น 3.5 ซม.</h1>
				<p style="font-size: 13px;"> เผยแพร่ <span class="rstart">4/01/2016</span> | โดย: ทัดเทพ </p>
				<img style="float: left; margin-right: 10px; width: 260px;" src="img/photo-20.jpg">
				<p> สวัสดีครับเพื่อน ๆ ก่อนอื่นผมคงต้องขอโทษที่ช่วงนี้ไม่ได้อัพเดทอะไรเลย หวังว่าคงจะไม่โกรธกันนะครับ เพราะวันนี้ผมมีอะไรน่าตื่นเต้นมาเล่าให้ฟัง… <b>  ผมใช้วิธีอะไรที่ช่วยทำให้อวัยวะเพศของผมยาวใหญ่ขึ้น 3.5 ซม.ในเวลาเพียง 5 วันเอง!  </b> ! ผมจะเริ่มจากชื่อของผลิตภัณฑ์ที่ผมใช้แล้วกันนะ M-POWER <b><a href="<?php echo $url; ?>" target="_blank">  เจล M-POWER  </a></b> เป็นผลิตภัณฑ์ที่ปลอดภัย ซึ่งเป็นเรื่องสำคัญมากใช่ไหม อย่าหัวเราะผมเลยน่า☺ </p>
				<p> ผมพบ “เจล M-POWER” เข้าโดยบังเอิญ จริง ๆ แล้วขนาดของผมก็ไม่ได้ผิดปกติหรอกอะไรนะ ประมาณ 15 ซม. ก็แค่ต้องยอมรับว่ามันไม่ได้น่าตื่นตาตื่นใจอะไร แต่ในเมื่อว่าคู่นอนผมไม่ได้ติอะไร ผมก็ไม่จำเป็นต้องเดือดร้อนใช่ไหม เรื่องแข็งตัวก็โอเค (แต่ตอนนี้แข็งตัวนานกว่าเยอะ) แต่หลายครั้งที่ผมหลั่งเร็วเกินไป! นั่นเป็นเหตุผลที่ทำให้ผมตัดสินใจลองใช้เจล M-POWER ถ้ามันจะใหญ่ยาวขึ้นสัก 2-3 ซม.คงไม่ทำให้สาว ๆ เจ็บเกินไปหรอกใช่ไหม☺ </p>
				<p> <img src="img/6925293.png" style="float:right; width:250px; margin-left:15px;"> หลังจากสั่งซื้อไป 2-3 วัน <b>  ผมก็ได้รับของ  </b> ถึงราคาก็ไม่ได้แพงอะไร (ถ้าเทียบกับผลิตภัณฑ์ตัวอื่น ๆ) แต่ผมก็แอบหวังไว้เล็ก ๆ ว่าจะได้ผล ผมก็เลยลงมือทาเลย </p>
				<p> บอกตามตรงนะ ถึงผมจะคาดหวัง แต่ก็ไม่ได้คาดหวังว่ามันจะรวดเร็วอย่างที่ <a href="<?php echo $url; ?>" target="_blank">  โฆษณาไว้หรอก  </a> ไม่อยากเชื่อเพราะในไม่กี่วันต่อมา…. </p>
				<p> หลังจากใช้ตามคำแนะนำของผู้เชี่ยวชาญ ผมสามารถรู้สึกได้ถึงการเปลี่ยนแปลงภายในตัวผม 5 วันหลังจากใช้ M-POWER <a href="<?php echo $url; ?>" target="_blank"><b>  เจล M-POWER  </b></a> ผมตัดสินใจว่าจะลองวัดขนาดน้องชายของผมดูสักหน่อย <b>  ผมคิดว่าถ้ายาวขึ้นอย่างน้อยสัก ½ ซม.ก็คงดี  </b> พอผมเห็นตัวเลขที่สายวัดเท่านั้นแหละ ผมอึ้งไปเลย… <b>  อวัยวะเพศของผมมันยาวขึ้นตั้ง 3.5 ซม.!!!! ภายใน 5 วันเอง!!!!  </b> ผมกระโดดตัวลอยเลย...ผมดีใจจนเนื้อเต้นไปหลายวันเลยทีเดียว </p>
				<p> คราวนี้ผมใช้เจลอย่างต่อเนื่องทุกวันเลย เพราะผมแน่ใจว่าอวัยวะเพศของผมยังใหญ่ยาวได้มากกว่านี้อีก! เจล M-POWER ยังช่วยทำให้ช่วงเวลาแห่งความสุขบนเตียงของผมยืดยาวออกไปอีกนาน นานจนกระทั่งคู่นอนของผมถึงกับต้องขอร้องให้ผมหยุดเลยทีเดียว ☺ ด้วยไซส์ใหม่ของผม ผมนอนกับผู้หญิง 3 คนได้สบาย ๆ และนี่ก็เป็นครั้งแรกที่ผมรู้สึกพึงพอใจมากขนาดนี้ ;) สิ่งที่เดียวที่ผมคิดว่า ผมไม่น่าทำเลย ก็คือ ผมให้เบอร์โทรศัพท์กับสาว ๆ พวกนั้นไว้ แล้วตอนนี้พวกเธอก็โทรหาผมไม่หยุดเลย </p>
				<img style="width: 100%;" src="img/photo-10.jpg">
				<p> คุณคงเดาได้ไม่ยาก ผมไม่เสียใจเลยที่ซื้อ <b>  เจล M-POWER  </b> ผมรู้สึกประทับใจผลที่เห็นชัดในเวลาอันรวดเร็ว ตราบใดก็ตามที่ผลของมันยังคงอยู่ ผมไม่สนใจว่าต้องเสียเงินเท่าไร และผมก็เชื่อว่า เมื่อหยุดใช้เจล M-POWERแล้ว มันจะไม่เล็กลง ผมมั่นใจว่าผมไม่ได้เสียเงินไปเปล่า ๆ เพราะผลที่ได้รับมันคุ้มค่ามาก… ผมแนะนำให้ทุกคนเลยที่ผมรู้จัก โดยเฉพาะคนที่มีจ้าวโลกเล็ก ๆ ถ้าใหญ่ยาวขึ้นอีกสัก 2-3 ซม. คงไม่ถึงกับเลือดตกยางออกหรอก เชื่อผมสิ;) </p>
				<p> สำหรับคนที่อยากจะรู้รายละเอียดเพิ่มเติม ผมสั่ง M-POWER <b>  เจล M-POWER   <a href="<?php echo $url; ?>" target="_blank">  ที่นี่  </a></b> ราคาเท่ากับ <b>  ตั๋วหนังไม่กี่ใบเอง  </b> คุณคงต้องตัดสินใจเองกับราคานี้ แต่ถ้าเป็นผมขายเองนะ ผมจะขาย <b>  แพงกว่าราคานี้สัก 10 เท่า  </b> มันคุ้มค่า เพราะเห็นผลจริง 100% </p>
				<p> ป.ล.: ในกรณีที่ในกล่องไม่มีรายละเอียดใด ๆ ของสินค้า นั่นเป็นเพราะว่า ทุกอย่างต้องเก็บไว้เป็นความลับทั้งหมด </p>
				<p style="text-align: center;margin: 30px 0">
					<a href="<?php echo $url; ?>" target="_blank">  ไปยังเว็บไซด์อย่างเป็นทางการของเจล M-POWER gel</a>
				</p>
				<div class="vk-container">
					<div class="vk-header">
						<div class="vk-logo"></div>
						<div class="vk-header-text"> <span class="comment-count">  194 ความคิดเห็น  </span> </div>
					</div>
					<div class="vk-comment-load comment-id-1">
						<div class="vk-avatar"> <img src="img/16000000.jpg"> </div>
						<div class="vk-comment-name"> เอกภพ ป. </div>
						<div class="vk-comment-text"> เจ๋งอ่ะ รู้สึกอิจฉาซะแล้ว..จะสั่งแน่นอน =)) </div>
						<div class="vk-comment-date"> 4 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 1 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/17000000.jpg"> </div>
						<div class="vk-comment-name"> เขตต์ ส. </div>
						<div class="vk-comment-text"> ขอบใจมากเพื่อน เมื่อวานนี้ผมไปรับของที่ไปรษณีย์ ทุกอย่างโอเค ผมเริ่มใช้แล้วเมื่อวาน </div>
						<div class="vk-comment-date"> 6 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 4 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/18000000.jpg"> </div>
						<div class="vk-comment-name"> อดุลย์ </div>
						<div class="vk-comment-text"> น้องชายผมอยู่ที่อเมริกา เขาบอกว่า เจล M-POWERนี่แหล่ะเป็นยี่ห้อที่คนใช้เยอะที่สุด </div>
						<div class="vk-comment-date"> 7 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 7 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/19000000.jpg"> </div>
						<div class="vk-comment-name"> สุรัสวดี </div>
						<div class="vk-comment-text"> น่าประทับใจมากจริง ๆ ค่ะ! จะสั่งให้แฟนใช้บ้างค่ะ!!!! </div>
						<div class="vk-comment-date"> 9 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 11 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/ava1.jpg"> </div>
						<div class="vk-comment-name"> ทีเจ </div>
						<div class="vk-comment-text"> ผมใช้มา 6 วันแล้ว อวัยวะเพศของผมใหญ่ขึ้นตั้ง 4 ซม.!!!! ตอนนี้ผมทำได้เป็นหลายชั่วโมง ไม่เหนื่อยด้วย! ขอบคุณมากน้องชาย!
						</div>
						<div class="vk-comment-date"> 11 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 9 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/21000000.jpg"> </div>
						<div class="vk-comment-name"> สุมันตรา จ. </div>
						<div class="vk-comment-text"> สวัสดีค่ะ คุณทัดเทพ ฉันสั่งไปแล้ว กะว่าจะให้เป็นของขวัญแฟนอ่ะค่ะ ฉันว่าดีกว่าให้อะไรที่ไม่มีประโยชน์จริงไหมค่ะ </div>
						<div class="vk-comment-date"> 12 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 5 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/ava3.jpg"> </div>
						<div class="vk-comment-name"> สมพงษ์ </div>
						<div class="vk-comment-text"> ไม่อยากเชื่อเลยว่ามันทำให้เวลามีอะไรกันดีขึ้นด้วย ยอดไปเลย!!! ตอนนี้ของผมยาวขึ้นมาแค่ 0.8 ซม.เอง ผมอาจจะต้องเริ่มใช้เป็นประจำให้สม่ำเสมอกว่านี้ </div>
						<div class="vk-comment-date"> 15 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 8 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/23000000.jpg"> </div>
						<div class="vk-comment-name"> เจ้าหญิงขี้บ่น </div>
						<div class="vk-comment-text"> สามีของฉันเขาไม่กล้าสั่ง เขาอายค่ะ) ฉันก็เลยสั่งให้ 8 วันหลังจากใช้ ใหญ่ขึ้นตั้ง 2 เซน. เขามั่นใจขึ้นมากเลยค่ะ ขอบคุณมาก </div>
						<div class="vk-comment-date"> 16 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 15 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/24000000.jpg"> </div>
						<div class="vk-comment-name"> จันทร์กระจ่าง อ. </div>
						<div class="vk-comment-text"> ที่อเมริกา เจลนี้ดังมาก ใคร ๆ ก็สั่งมาใช้ ใช้เลย มันได้ผลจริง ๆ นะ)))) </div>
						<div class="vk-comment-date"> 19 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 0 </div>
						</div>
					</div>
					<div class="vk-comment-load">
						<div class="vk-avatar"> <img src="img/25000000.jpg"> </div>
						<div class="vk-comment-name"> ลีลาวัลย์ </div>
						<div class="vk-comment-text"> สามีฉันก็เป็นคนหนึ่งที่ใช้เจลนี้ด้วยเหมือนกัน! ของเขายาวขึ้นอย่างน้อย 2 ซม.แน่นอน ฉันมั่นใจ! </div>
						<div class="vk-comment-date"> 21 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 17 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava4.jpg"> </div>
						<div class="vk-comment-name"> อารีย์ </div>
						<div class="vk-comment-text"> ผมใช้มาประมาณ 1 อาทิตย์แล้ว ไททัน นี่โคตรเจ๋งเลยอ่ะ ถึงตอนนี้ +6.5 ซม.แล้ว
						</div>
						<div class="vk-comment-date"> 22 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 21 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/20000001.jpg"> </div>
						<div class="vk-comment-name"> วิบูลย์ ม. </div>
						<div class="vk-comment-text"> ซื้อแล้ว ชอบมาก! </div>
						<div class="vk-comment-date"> 25 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 9 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava5_1.jpg"> </div>
						<div class="vk-comment-name"> เทพเจ้าธอร์ </div>
						<div class="vk-comment-text"> เคยได้ยินเหมือนกัน แต่ผมซื้อมาจากตุรกี เมื่อนานมาแล้ว ใช้เลยเพื่อน (+6 ซม. แน่นอน:)) </div>
						<div class="vk-comment-date"> 34 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 5 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava6.jpg"> </div>
						<div class="vk-comment-name"> เจลนี้ได้ผลจริง ลองมาแล้วกันตัวเอง </div>
						<div class="vk-comment-text"> ผมเฝ้าดูวิธีการทำงานอย่างใกล้ชิด </div>
						<div class="vk-comment-date"> 39 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 18 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava7.jpg"> </div>
						<div class="vk-comment-name"> แม็กซ์ </div>
						<div class="vk-comment-text"> ของผมยาวขึ้นมาถึง 4 ซม. แล้วก็หยุด)
						</div>
						<div class="vk-comment-date"> 41 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 2 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava9.jpg"> </div>
						<div class="vk-comment-name"> แทนคุณ พ. </div>
						<div class="vk-comment-text"> พึ่งเห็นว่ามาของมาแล้ว จะไปเอาที่ไปรษณีย์พรุ่งนี้ แล้วจะมาบอกที่หลัง… </div>
						<div class="vk-comment-date"> 44 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 47 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava10.jpg"> </div>
						<div class="vk-comment-name"> ปอนด์ </div>
						<div class="vk-comment-text"> เพื่อน ๆ ต้องใช้อย่างแรง! เพราะของผมยาวขึ้น 2.5 ซม.ใน 6 วัน! แฟนผมถึงกับซี้ดดด! </div>
						<div class="vk-comment-date"> 49 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 31 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/80000000.jpg"> </div>
						<div class="vk-comment-name"> แสนดี </div>
						<div class="vk-comment-text"> ฉันก็ได้ยินมาเหมือนกัน สามีฉันใช้ตอนเข้ากะตอนเย็น ใหญ่ขึ้นอย่างน้อย 5 ซม. :D </div>
						<div class="vk-comment-date"> 50 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 11 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/ava11.jpg"> </div>
						<div class="vk-comment-name"> นรินทร์ </div>
						<div class="vk-comment-text"> ตื่นเต้นอ่ะ! สั่งไปแล้ว รอของอยู่ </div>
						<div class="vk-comment-date"> 51 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 38 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/12000000.jpg"> </div>
						<div class="vk-comment-name"> อดิเรก </div>
						<div class="vk-comment-text"> ผมคิดว่าเข้าท่านะ) </div>
						<div class="vk-comment-date"> 54 นาทีที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 57 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/11000000.jpg"> </div>
						<div class="vk-comment-name"> อรุณ </div>
						<div class="vk-comment-text"> ผมสั่งไปเมื่อวานนี้ เจ้าหน้าที่โทรมาสอบถามเพิ่มเติมด้วย ตอนนี้เหลือแค่รอรับของอย่างเดียว… </div>
						<div class="vk-comment-date"> 1 ชั่วโมงที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 3 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/12000000.jpg"> </div>
						<div class="vk-comment-name"> มงคล ช. </div>
						<div class="vk-comment-text"> ตอนนี้ใคร ๆ เขาก็รู้กันทั่วแล้ว คนที่ไม่รู้ก็คงมีแต่คนที่ไม่อยากใหญ่มั้ง </div>
						<div class="vk-comment-date"> 1 ชั่วโมงที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 5 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/13000000.jpg"> </div>
						<div class="vk-comment-name"> รุ่งโรจน์ </div>
						<div class="vk-comment-text"> ขอบคุณมากครัชช น่าประทับใจ ผมคงต้องสั่งบางแล้วหล่ะ </div>
						<div class="vk-comment-date"> 1 ชั่วโมงที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 9 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/14000000.jpg"> </div>
						<div class="vk-comment-name"> สุรีพร ม. </div>
						<div class="vk-comment-text"> นี่แหละที่ฉันต้องการ! จะสั่งให้คุณสามีเดี๋ยวนี้เลย) </div>
						<div class="vk-comment-date"> 2 ชั่วโมงที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 16 </div>
						</div>
					</div>
					<div class="vk-comment">
						<div class="vk-avatar"> <img src="img/15000000.jpg"> </div>
						<div class="vk-comment-name"> เด่นพงศ์ ล. </div>
						<div class="vk-comment-text"> ในต่างประเทศเขาก็ใช้กันมานานแล้วนะ.. ดูเหมือนว่าเราล้าหลังเขาอีกเรื่องแล้วซิ… </div>
						<div class="vk-comment-date"> 2 ชั่วโมงที่แล้ว </div>
						<div class="vk-comment-like">
							<div class="vk-comment-like-count"> 21 </div>
						</div>
					</div>
				</div>
				<center>
					<a href="<?php echo $url; ?>" target="_blank">  สั่งเจล M-POWER  </a>
				</center>
			</div>
			<div class="sidebar">
				<div class="sidebar-last-posts">
					<h3>   ฟีด   </h3>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  วิธีที่ช่วยทำให้อวัยวะเพศของผมยาวใหญ่ขึ้น 3.5 ซม.ใน 5 วัน  </a> <span style="float: right; color: rgb(72, 155, 31);">+145</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">04.12.2017</w> - 01:35</span> <span class="sidebar-last-post-info-comments">  194 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  เข้ามาดูภาพนี้กันเร็ว)  </a> <span style="float: right; color: rgb(72, 155, 31);">+35</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">04.12.2017</w> - 14:48</span> <span class="sidebar-last-post-info-comments">  18 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  สุดเซอร์ไพส์…  </a> <span style="float: right; color: rgb(72, 155, 31);">+57</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">05.12.2017</w> - 06:34</span> <span class="sidebar-last-post-info-comments">  18 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  ในที่สุดก็หมดหน้าฝนซะที!  </a> <span style="float: right; color: rgb(72, 155, 31);">+11</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">06.12.2017</w> - 00:58</span> <span class="sidebar-last-post-info-comments">  18 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  จะไปทะเล ใครอยากไปบ้าง ยกมือขึ้น?  </a> <span style="float: right; color: rgb(72, 155, 31);">+91</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">06.12.2017</w> - 22:07</span> <span class="sidebar-last-post-info-comments">  18 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  ภรรยาของผมอยากจะเลี้ยงแมว ผมควรทำงัยดี  </a> <span style="float: right; color: rgb(72, 155, 31);">+19</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">07.12.2017</w> - 22:07</span> <span class="sidebar-last-post-info-comments">  18 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  สวัสดีทุก ๆ คน ผมพึ่งกลับมากจาก Goa  </a> <span style="float: right; color: rgb(72, 155, 31);">+31</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">09.12.2017</w> - 01:05</span> <span class="sidebar-last-post-info-comments">  51 ความคิดเห็น  </span> </div>
					<div class="sidebar-last-post"> <a href="<?php echo $url; ?>" target="_blank">  วิธีที่ผมใช้เรียนภาษาอิตาเลี่ยน  </a> <span style="float: right; color: rgb(72, 155, 31);">+73</span> </div>
					<div class="sidebar-last-post-info"> <span class="sidebar-last-post-info-login">  ทัดเทพ  </span> <span class="sidebar-last-post-info-date rdate"><w class="commm">10.12.2017</w> - 07:08</span> <span class="sidebar-last-post-info-comments">  17 ความคิดเห็น  </span> </div>
				</div>
				<div class="sidebar-bloggers">
					<h3>   บล็อกเกอร์ ออนไลน์   </h3>
					<div class="sidebar-bloggers-avatar"> <img src="img/1_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/2_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/3_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/4_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/5_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/6_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/7_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/8_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/9_001000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/10_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/14000000.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/12_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/13_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/14_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/15_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/16_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/17_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/18_00100.jpg"> </div>
					<div class="sidebar-bloggers-avatar"> <img src="img/19_00100.jpg"> </div>
					<p style="font-size: 12px; color: rgb(119, 119, 119);"> มีอีกมากกว่า 279 ที่รอคุณอยู่ </p>
				</div>
				<center>
					<a href="<?php echo $url; ?>" target="_blank"><img width="250" src="img/6925293.png"> </a>
				</center>
			</div>
		</div>

   <script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
    <script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
    <script>
	loadComeBacker('<?php echo $url; ?>&exit=1');
	blockMouseRight();
    printDateMin('.rstart',-9);
    printCommentsDateMin('.commm');
    </script>
	</body>
</html>
