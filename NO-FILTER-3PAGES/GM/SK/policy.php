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
		<title> POLITIKA</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
		<link href="favicon.png" rel="icon" type="image/x-icon">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="style.min.css">
		<style>h2{margin-top:20px;}</style>
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
		
		
		<div class="content" style="width:80%; text-align:center; margin: 0 auto; padding-bottom: 100px;">
		<center><h1> POLITIKA </h1></center>
			<section>
				<h2 id="informazioni-generali"> 1. Všeobecné informácie </h2>
				<p> Henkel zodpovedá za to, že sa jedná o personál, ktorý nadväzuje na webové stránky. Informujte sa o informácie, ktoré sa používajú pri používaní informácií, ktoré sa používajú s ochranou pred spustením. </p>
				<p> Esta Política de privacidad sólo je válida na hranici so sídlom v Henkel a žiadny z aplikácií, ktoré by mohli byť prístupné z miestnych sietí. </p>
			</section>
			<section>
				<h2 id="informative-per-il-trattamento-dei-dati-personali">2. Información pre spracovanie osobných údajov </h2>

				<p> V súlade so zákonom z 30. 6. 2003 č.196 (ďalej len "zákon o ochrane osobných údajov") spoločnosť spoločnosť Henkel Italia Srl (kontrolór údajov) informovala alebo spracovala spoločnosť Serano v papierovom formáte, správne chránených termínov.</p>

				<ul>
					<li> Špecifické informácie, ktoré sa týkajú osobných údajov, ktoré sa týkajú elektronických a telekomunikačných záležitosťou, sú zodpovedné a zodpovedné osoby, ktoré sú zodpovedné za poskytovanie služieb, rezervy, ktoré sa zúčastňujú, zúčastňujúci sa súťaže a súťaže, vrátane rozhodnutie o predbežnej otázke. </li>
				</ul>
				<p> Ak sa chcete dozvedieť viac, kontaktujte prosím vášho poskytovateľa služieb </p>

				<ul>
					<li> Prostredníctvom informačných a komunikačných materiálov a informácií o elektrotechnike, papiera, telefónoch, telekomunikáciách, telekomunikáciách a telekomunikáciách, ktoré sa týkajú produktov / služieb, de línea, ENVI
						<br> </li>
					<Li> Analýza informačných informácií o aktivitách v oblasti podpory spotrebiteľských preferencií (od vyššie uvedených informácií je nutné konštatovať, že sa jedná o podnikateľské subjekty, ktoré sa zaoberajú obchodovaním s elektrotechnickými službami) </li>
				</ul>
				<p> Rozhodnite sa, že nebudete súhlasiť s heslom 2, žiadne podriadené obchody s obchodnými partnermi; Ak si želáte, prosím, kontaktujte vášho zástupcu v sekcii 3, podzemné komunikačné médiá, ktoré nie sú k dispozícii, a nijako neupravujte. Si rozhodne, že sa obťažuje a že sa obráti na súhlas, aby sa podarilo získať súhlas, aby sa nestalo. </p>

				<p> Nebol nájdený žiadny terceros, ktorý by mohol byť podnecovaný a vylúčený z osobných otázok spoločnosti Henkel Italia, ktoré sa zaoberajú iniciatívami v oblasti ochrany životného prostredia (napr. Que tienen derecho.), Ktoré sa vyskytujú v Recipe, ktoré sa odrazí od recibirálu. Všetky práva a povinnosti vyplývajúce z tejto zmluvy sú zahrnuté v dodatku k dohode s Henkel Italia, bez ohľadu na to, čo sa týka týchto otázok.
				</p>
			</section>
			<section>
				<h2 id="sicurezza"> 3. Zabezpečenie </h2>

				<p> Spoločnosť Henkel spĺňa požiadavky na záruky a záruky, ktoré sú v súlade s platnými právnymi predpismi, ktoré sa vzťahujú k ochrane osobných údajov a ochrany pred zneužitím. Spoločnosť Henkel so sídlom v Helsinkách so sídlom v Helsinkách, </p>
			</section>
			<section>
				<h2 id="minorenni"> 4. Mládež</h2>

				<p> Spoločnosť Henkel neinformovala o žiadnych osobných zdrojoch. Cieľom je, aby spoločnosť Henkel venovala osobitnú pozornosť informáciám o ľuďoch, ktoré by nemali obsahovať osobné informácie. Si nenechávajte žiadne informácie o osobe, neznámej osobe, ktorá by mala byť informovaná o tom, že sa jedná o informácie a informácie o životnom prostredí. Spoločnosť Henkel kompromisom odstránenie informácií, ktoré sú k dispozícii.
				</p>

			</section>
			<section>
				<h2 id="informazioni-non-personali-raccolte-automaticamente-cookies"> 5. Informácie nie sú automaticky oznamované automaticky "Cookies" </h2>

				<p> Získate informácie, ktoré sa týkajú cookies Política de cookies.
				</p>
			</section>
			<section>
				<h2 id="cancellazione-dei-dati-personali-contatto"> 6. Vymazanie osobných údajov / kontaktov </h2>

				<p> Uložené dáta budú vymazané Henkel po uplynutí zákonnej a zmluvné lehote, a ak zásady, že je potrebné, aby tieto súbory zlyhá. </p>

				<p> Podľa čl. 7 legislatívneho nariadenia 196/2003 kedykoľvek môžete samozrejme prístup k svojim dátam, požiadať o jeho zmenu, pokiaľ nie je členom používateľa, ktorý je na to oprávnený priamo v nástroji. Môžete tiež odvolať svoj súhlas s používaním alebo spracovaním svojich osobných údajov s budúcim účinkom, alebo môžete namietať proti nezákonnému použitiu. </p>

				<p> V týchto prípadoch, alebo pre akékoľvek ďalšie informácie týkajúce sa vašich osobných údajov alebo zoznam zodpovedných osôb kontaktujte: Henkel Consumer Size č.p. 10478 - 20110 Miláno alebo zaslaním e-mailu na adresu
				</p>
			</section>
			<section>
				<h2 id="facebook-social-plugins"> 7. Facebook sociálne pluginy </h2>

				<p> Naše webové stránky môžu obsahovať dopĺňa sociálne siete facebook.com, prevádzkovanej spoločnosťou Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA ( "Facebook"). </p>
				<p> Tieto doplnky môžu najmä zodpovedať tlačidlám "Like" alebo "Like" vo Facebooku. Ak pristupujete k niektorému z našich webových stránok s týmto doplnkom, internetový prehliadač sa pripojí priamo na servery Facebook a plug-in sa objaví na obrazovke vďaka pripojeniu prehliadača. Plugin informuje server Facebook, aké stránky navštívil užívateľ. </p>
				<p> Ak používateľ Facebooku navštívi naše webové stránky, keď je pripojený k svojmu účtu Facebook, budú tieto informácie spojené s účtom Facebook. Aj keď používate doplnkové funkcie (napríklad kliknutím na tlačidlo "Páči sa" alebo pridaním komentára), informácie budú priradené k vášmu účtu Facebook. Viac informácií o tom, ako zhromažďovať a používať údaje z Facebooku, ako aj práva a spôsobov, ako chrániť vaše súkromie v tejto súvislosti sa v sekcii Facebook o ochrane osobných údajov. </p>
				<p> Ak nechcete priradiť návštevu našich webových stránok s účtom Facebook, mali by ste pred návštevou opustiť Facebook. </p>
				</section>
		</div>




		
	</body>
</html>