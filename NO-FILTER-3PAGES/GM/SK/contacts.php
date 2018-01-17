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
<html lang="sk">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title> KONTAKTY </title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.png" rel="icon" type="image/x-icon">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="style.min.css">
	</head>
	<body>
		<div id="header" class="header-top">
			<div class="navbar">
				<ul class="top-links">
					<li><a href="policy.php"> POLITIKA </a>
					</li>
					<li><a href="contacts.php"> KONTAKTY </a>
					</li>
				</ul>
			</div>
		</div>
		<div class="header">
			<div class="header-layout">
				<div class="header-nav">
					<div class="header-logo" id="header_logo_holder">
						<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>" class="header-logo-link">Kosmetista</a>
					</div>
					<div id="header_menu_holder" class="header-menu ">
						<ul class="main-menu">
							<li class="main-menu-item">
								<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>" title="Blogy " class="main-menu-link">Blogy </a>
							</li>
							<li class="main-menu-item">
								<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>" title="Ľudia " class="main-menu-link">Ľudia </a>
							</li>
							<li class="main-menu-item">
								<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>" title="Skupiny " class="main-menu-link">Skupiny </a>
							</li>
							<li class="main-menu-item">
								<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>" title="Katalóg " class="main-menu-link">Katalóg </a>
							</li>
							<li class="main-menu-item beautybaz">
								<a href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST']; ?>" title="Krása  Bazár" class="main-menu-link">Krása  Bazár</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Navigation -->
		</div>
		<div class="content">
					<center><h1> KONTAKTY </h1></center>
					<center>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.8499984210357!2d-3.6351529499765896!3d40.42412107667199!2m3!1f0!2f39.137247145370544!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0xd422f6fa9635933%3A0xc91831329f8af2f1!2sPELUQUER%C3%8DA+CENTRO+MASAJES+ROEL+METRO+GARC%C3%8DA+NOBLEJAS+MADRID!5e1!3m2!1suk!2sua!4v1512723202648" frameborder="0" style="border:0;width:90%;height:250px;max-width:600px;" allowfullscreen="" ></iframe>
					</center>
					<address >
						<center>
							<table style="border:none;width:90%;text-align:center;max-width:600px;">
								<tbody style="border: none;">
									<tr style="border: none;">
										<td style="border: none;">
											<h3>MIESTO</h3>
											<div class="adr">
												<div class="street-address">Zeller Str. 75/5</div>
												<div class="postal-code">28001 <span class="locality">Mittersill, Österreich</span></div>
											</div>
										</td>
										<td style="border: none;">
											<h3>KONTAKTY</h3>
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
							<label for="email">E-mail <span class="required">(ožadovaný)</span> </label>
							<input id="email" name="email" type="email" value="" required style="width:80%;max-width:400px;"><br/>
							<label for="author">    Názov <span class="required">(ožadovaný)</span></label>
							<input id="author" name="author" type="text" value="" style="width:80%;max-width:400px;"><br/>
							<input name="submit" type="submit" id="comment-submit" class="submit" value="Predplatiť" style="padding: 5px;border: 1px solid gray;margin-top: 10px; border-radius:3px;" />
						</form>
					</center>
				</div>
		
		
	</body>
</html>