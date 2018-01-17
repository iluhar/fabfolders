<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
include '../config.php';
$data = array(
	'bg' => array(
		'title' => 'Благодаря Ви!',
		'line1' => 'Благодаря Ви!',
		'line2' => 'Вашата молба беше успешно приета!',
		'line3' => 'Ние ще се свьржем с вас скоро!',
		'value' => 'Вьрнисе на сайта'	
	),
	'cs' => array(
		'title' => 'DĚKUJEME!',
		'line1' => 'DĚKUJEME!',
		'line2' => 'VAŠE OBJEDNAVKA JE ÚSPĚŠNĚ PŘIJATÁ',
		'line3' => 'Kontaktujeme Vás co nejdříve!',
		'value' => 'Vrátit se na stránku'	
	),
	'de' => array(
		'title' => 'DANKE!',
		'line1' => 'DANKE!',
		'line2' => 'IHRE BESTELLUNG WURDE ERFOLGREICH AUFGENOMMEN',
		'line3' => 'Wir werden uns mit Ihnen in der nächsten Zeit in Verbindung setzen!',
		'value' => 'Zurück zur Seite'	
	),
	'el' => array(
		'title' => 'ΣΑΣ ΕΥΧΑΡΙΣΤΟΥΜΕ!',
		'line1' => 'ΣΑΣ ΕΥΧΑΡΙΣΤΟΥΜΕ!',
		'line2' => 'ΑΠΟΔΕΧΤΗΚΑΜΕ ΜΕ ΕΠΙΤΥΧΙΑ ΤΗΝ ΠΑΡΑΓΓΕΛΙΑ ΣΑΣ',
		'line3' => 'Θα επικοινωνήσουμε μαζί σας σύντομα!',
		'value' => 'Επιστροφή στη ιστοσελίδα'	
	),
	'en' => array(
		'title' => 'THANK YOU!',
		'line1' => 'THANK YOU!',
		'line2' => 'YOUR REQUEST SUCCESSFULLY',
		'line3' => 'We will contact you!',
		'value' => 'Back to site'	
	),
	'es' => array(
		'title' => '¡Gracias!',
		'line1' => '¡Gracias!',
		'line2' => 'Su pedido está aceptado.',
		'line3' => 'En breve nos pondremos en contacto con usted',
		'value' => 'Volver al sitio web'		
	),
	'hu' => array(
		'title' => 'Köszönöm!',
		'line1' => 'Köszönöm!',
		'line2' => 'Megrendelését sikeresen feldolgozták',
		'line3' => 'Hamarosan visszajutunk hozzánk!',
		'value' => 'Vissza a webhelyre'	
	),
	'it' => array(
		'title' => 'Grazie!',
		'line1' => 'Grazie!',
		'line2' => 'La Sua richiesta è stata effettuata con successo!',
		'line3' => 'La richiamiamo prima possibile!',
		'value' => 'Ritornare sul sito'	
	),
	'pl' => array(
		'title' => 'Dziękujemy!',
		'line1' => 'Dziękujemy!',
		'line2' => 'Twoje zamówienie zostało złożone!',
		'line3' => 'Nasz operator skontaktuje się z Tobą!',
		'value' => 'Powrót na stronę'	
	),
	'pt' => array(
		'title' => 'OBRIGADO!',
		'line1' => 'OBRIGADO!',
		'line2' => 'Sua ordem foi processada com sucesso',
		'line3' => 'Nós entraremos em contato com você em breve!',
		'value' => 'Voltar-se ao site'	
	),	
	'ro' => array(
		'title' => 'Vă mulţumesc!',
		'line1' => 'Vă mulţumesc!',
		'line2' => 'APLICAŢIA este ÎNCHEIAT cu SUCCES!',
		'line3' => 'Vă vom contacta în scurt timp!',
		'value' => 'A reveni la site-ul!'	
	),
	'sk' => array(
		'title' => 'ĎAKUJEM!',
		'line1' => 'ĎAKUJEM!',
		'line2' => 'Vaša ponuka je úspešné prijatie',
		'line3' => 'Budeme Vás kontaktovať čoskoro!',
		'value' => 'Späť na stránkach'	
	),
	'th' => array(
		'title' => 'ขอบคุณครับ/ค่ะ',
		'line1' => 'ขอบคุณครับ/ค่ะ',
		'line2' => 'ใบสมัครของคุณได้รับการยอมรับเรียบร้อยแล้ว',
		'line3' => 'เราจะติดต่อกลับโดยเร็วที่สุด',
		'value' => 'กลับไปที่เว็บไซต์'	
	),
	'vn' => array(
		'title' => 'Xin cảm ơn!',
		'line1' => 'Xin cảm ơn!',
		'line2' => 'Chúng tôi nhận được yêu cầu của Bạn.',
		'line3' => 'Chúng sẽ liên lạc với Bạn trong thời gian sớm nhất!',
		'value' => 'Trở về trang web'
	)
);
$lang = isset($_GET['lang']) ? (array_key_exists($_GET['lang'], $data) ? $_GET['lang'] : 'en') : 'en';
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data[$lang]['title']; ?></title>
  <style>
    .message,.page{position:relative}body,html{font-family:Arial,Helvetica,sans-serif}body,h2,h3,html{margin:0;padding:0}.page{width:100%;background-color:#fff;min-height:374px}.message{width:884px;border:6px solid #fcc92f;text-align:center;padding:36px 32px 30px;margin:68px auto 20px;box-sizing:border-box}h2{color:#fa501e;text-transform:uppercase;font-weight:900;font-size:25px;line-height:58px}h3{font-weight:400;font-size:19px;line-height:36px}input.btn-back{width:200px;line-height:35px;color:#000;padding:5px 10px;background-color:#f4f4f4;-moz-box-shadow:0 4px 0 #fa501e;-webkit-box-shadow:0 4px 0 #fa501e;box-shadow:0 4px 0 #fa501e;border:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s;transition:all linear .3s;outline:0;margin-top:34px}input.btn-back:hover{background-color:#dedede;-webkit-transition:none;-moz-transition:none;-ms-transition:none;-o-transition:none;transition:none}input.btn-back:active{position:relative;top:3px;-moz-box-shadow:0 1px 0 #fa501e;-webkit-box-shadow:0 1px 0 #fa501e;box-shadow:0 1px 0 #fa501e}@media screen and (max-width:920px){.message{width:750px}h2{font-size:20px}}@media screen and (max-width:767px){body,html{min-width:320px}.message{width:auto;margin-left:15px;margin-right:15px;margin-top:25px}h2{line-height:40px}}
  </style>  
<?php 
if ($pixelType == 'fb') {
	echo '<script>  !function(f,b,e,v,n,t,s)  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?  n.callMethod.apply(n,arguments):n.queue.push(arguments)};  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';  n.queue=[];t=b.createElement(e);t.async=!0;  t.src=v;s=b.getElementsByTagName(e)[0];  s.parentNode.insertBefore(t,s)}(window, document,\'script\',  \'https://connect.facebook.net/en_US/fbevents.js\');  fbq(\'init\', \''.$pixel.'\');  fbq(\'track\', \'PageView\'); </script> <noscript><img height="1" width="1" style="display:none"  src="https://www.facebook.com/tr?id='.$pixel.'&ev=PageView&noscript=1" /></noscript>';
}
else if ($pixelType == 'gtm') {
	echo '<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);})(window,document,\'script\',\'dataLayer\',\''.$pixel.'\');</script>';
}
?>
</head>
<body>
<?php 
if ($pixelType == 'gtm') {
	echo '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id='.$pixel.'" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>';
}
?>
  <div class="page">
    <div class="message">
      <h2><?php echo $data[$lang]['line1']; ?></h2>
      <h2><?php echo $data[$lang]['line2']; ?></h2>
      <h3><?php echo $data[$lang]['line3']; ?></h3>
      <input type="button" class="btn-back" value="<?php echo $data[$lang]['value']; ?>" onclick="history.back()">
    </div>
  </div>
</body>
</html>