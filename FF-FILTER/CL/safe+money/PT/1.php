<?php
if( count(get_included_files()) == 1 )
{
	header('HTTP/1.1 404 Not Found');
	exit();
}

$socialText = "";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dieta vegetariana</title>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans|Mukta+Malar:400,600,700" rel="stylesheet">
  <style>
    body{margin:0;padding: 0;box-sizing:border-box;width:100%; font-family: 'Merriweather Sans', sans-serif; background-color: #FFFAFA;}
    h1,h2,h3,h4,h5,h6{font-family: 'Mukta Malar', sans-serif; color:#29481E;}
    p{text-align: left;}
    .main{width:80%; margin: 0 auto; max-width: 1100px;}
    .header{border-bottom: 1px solid #4682B4;background-color: #4682B4;margin-bottom: 10px; padding: 0 10%;}
    .header img{padding: 25px 0 10px;}
    .content{width: 100%; text-align: left;}
    .content img{width: 90%; height: auto;}
    .content p img{margin-right: 3em; width: 200px; float: left;}
    .content .subtext{color: gray; text-align: center;}
    .content h1{margin-bottom: 0;text-align: center;}
    .imwr{width: 100%; text-align: center;margin: 50px 0;}
    .imwr img{width: 70%; margin: 0 auto;}
    .content h3{text-align: center;background-color: lightgrey; width: 50%; padding: 40px 100px;}
    @media all and (max-width: 600px) {
      .main{width:95%;}
      .content img{width: 100%;}
      .content p img{margin: 0 10%; width: 80%; float: none;}
      .content h3{width: 70%; padding: 20px 30px;}
    }
  </style>
</head>
<body>
  <header class="header">
    <img src="imgs/logo.png" alt="">
  </header>
  <div class="main">
    <div class="content">
      <h1>Dieta vegetariana permite perda radical de peso</h1>

      <div class="imwr">
        <img src="imgs/xAlimen.jpg" alt="">
      </div>
      <p>RIO - Dietas têm muitos nomes, mas a única que leva a uma radical perda de peso é a vegetariana. E isto vale especialmente para quem nunca fez. Esta é a conclusão dos médicos americanos Susan E. Berkow e Neal Barnard, depois de analisarem 40 estudos diferentes relacionando hábitos vegetarianos e massa corporal. Os dois notaram que as mulheres vegetarianas pesam de 6% a 17% menos do que as que são carnívoras. E o mesmo vale para os homens: os que não comem carne são de 8% a 17% mais magros.</p>
      <p>Mas a doutora Susan Berkow, PhD da Universidade de George Mason, de Washington D.C., faz um alerta: a dieta vegetariana só tem efeito de perda radical de peso para os carnívoros. Por que? Ela explica: como os vegetarianos são, em média, mais magros do que os carnívoros, para eles é muito mais difícil perder peso. Eles chegam a um ponto que, por defesa de seu organismo, não emagrecem mais.</p>
      <p>Os vegetarianos também adoecem menos do coração, porque seu níveis de colesterol são baixos e sua pressão fica melhor controlada. E ainda estão protegidos contra diabetes, que se tornou epidemia global. Os adeptos da dieta vegan - os vegetarianos extremos, que passam longe de qualquer produto de origem animal, incluindo carnes, ovos, leite e seus derivados - são os mais magros de todos, segundo Marcela Knibel, autora de "Nutrição contemporânea - Saúde com sabor" (Rubio, com Dora Cardoso). A dieta rica em vegetais eleva em 16% o efeito térmico dos alimentos por até três horas após a refeição.</p>
      <p>- Por não consumirem produtos de origem animal, vegetarianos não comem gordura saturada e, portanto, acumulam menos calorias. Para ter ideia, um grama desse nutriente tem 9kcal. Vegetarianos ainda comem mais fibras de frutas, legumes, verduras, cereais integrais e leguminosas; e as fibras saciam. Então a ingestão de calorias total do dia é pouca - explica Marcela. - Um fato que sempre achei, e que o artigo mostra, é que vegetarianos são mais preocupados com a qualidade de vida. Isso também ajuda a emagrecer.Alimentação deve ser equilibrada e fracionada</p>
      <p>Bia Rique, da Clínica Ivo Pitanguy, autora de "Comer para emagrecer" (Editora Casa da Palavra), concorda com Marcela e comenta que os vegetarianos que se alimentam de forma balanceada, com orientação de nutricionista, tendem a ser mais magros.</p>
      <p>- O gasto calórico de repouso, o metabolismo basal, isto é, o que queimamos sem fazer nada, varia de acordo com genética, idade, peso e massa muscular. Porém a digestão do vegetariano costuma ser acelerada porque ele ingere menos gorduras e mais fibras, e segue uma dieta fracionada, comendo poucas porções em intervalos menores no dia. E come alimentos de alta densidade nutricional e baixas calorias.</p>
      <p>Só que não basta cortar do cardápio as proteínas de origem animal, lembra Bia.</p>
      <p>- Muitas pessoas deixam de comer carnes e consomem cereais refinados, doces e frituras. Ainda assim acreditam que estão tendo os mesmos benefícios dos vegetarianos - afirma a nutricionista.</p>
      <p>Também a nutricionista Vilma Blondet, pesquisadora da UFF e da UFRJ, aprova a dieta vegetariana como medida para emagrecer bem, desde que orientada. O consumo de óleos vegetais é associado a baixo risco de doenças. As fibras normalizam o intestino, evitando males como câncer de intestino, e ajudam a controlar o nível de açúcar e colesterol.</p>
      <p>- Com certeza a incidência de obesidade é muito pequena em vegetarianos, devido aos seus bons hábitos alimentares e ao estilo de vida - diz Vilma.</p>
      <p>Mas a perda de peso nos vegetarianos tem um limite, que depende de cada metabolismo. Isso faz parte de um processo natural do próprio organismo, como lembra o endocrinologista Amelio Godoy-Matos. Quando a pessoa começa a restringir muito a alimentação, o corpo lança contrarreguladores do peso, ou mecanismos de proteção. O mais conhecido é a diminuição da produção de leptina, um hormônio produzido pela gordura corporal e que inibe a fome e aumenta o gasto de energia. Este contra-ataque mantém a fome e a pessoa não consegue sustentar a sua perda de peso.Risco de anemia, unha fracas e queda de cabelo</p>
      <p>Além disso, seguir dieta vegetariana por conta própria, sem nutricionista, não emagrece e ainda traz problemas de saúde, lembra Marcela. O organismo começa a ficar pobre em vitamina B12, em proteínas de alto valor biológico e em ferro-heme, aquele mais bem absorvido. Resultado: anemias; pele flácida e sem vida, palidez acentuada, cansaço, apatia, menor percentual de massa muscular, unhas quebradiças e queda de cabelo.</p>
      <p>- Os vegans que não consomem leite e derivados ainda podem ter perda de massa óssea e osteoporose em idade madura. Sou contra a retirada de produtos de origem animal. Uma boa opção é dieta mediterrânea, baseada em parte na vegetariana - diz.Harvard reprova o prato preferido dos brasileiros</p>
      <p>A refeição preferida dos brasileiros, composta por arroz, feijão, carne vermelha, café e pão francês - como mostrou a Pesquisa de Consumo Alimentar Pessoal no Brasil (IBGE) - está na berlinda: o novo "Prato da Alimentação Saudável" da Universidade de Harvard, lançado esta semana, condena o cardápio nacional. Os americanos privilegiam a dieta rica em grãos integrais, gorduras e proteínas saudáveis, o que quer dizer que os brasileiros estão comendo mais e mal, já que também adoram carboidratos refinados como lasanha, pizza e batata-frita, que só fazem engordar.</p>
      <p>- Concordo que a combinação arroz, feijão, bife e batata frita não é a melhor - diz Vilma Blondet. - As frituras devem ser evitadas. Bife só com moderação, porque é rico em gordura saturada e colesterol. Prefira carne branca ou vermelha magra acompanhada de salada verde, hortaliças e sobremesa de fruta. Arroz, os nutricionistas de Harvard só aceitam o integral.</p>
      <p>- O branco é processado e perde suas películas nutritivas, ricas em fibras, vitaminas e minerais, e só fica o carboidrato. Ele é preferido porque é de preparo rápido - acrescenta Marcela Knibel.</p>
      <p>Assim como Harvard, ela recomenda um cardápio com água, chás e pouco café, legumes, verduras, frutas, cereais integrais, leite e derivados magros, frutas oleaginosas, azeite extravirgem, ervas aromáticas, molho de tomate caseiro, vinho tinto moderado, suco de frutas (naturais), especiarias, peixes, frango orgânico, ovos caipiras ou orgânicos. E é a favor de até 300g de carne de boi magra por semana, divididas em duas a três refeições semanais.</p>
      <p>- Essa dieta garante a ingestão de todos os nutrientes para se manter no peso ideal, evitando doenças. A caloria total da alimentação deve ser personalizada, pois cada um de nós tem uma necessidade energética. E não use açúcar. Prefira a sucralose ou a estévia para adoçar.</p>
      <p>Quanto ao feijão, só existe em sua forma integral, pois não há processamento para retirada da camada externa (a casca), onde está praticamente toda a fibra diz Vilma.</p>
      <br/><br/><br/>
    </div>
    <style>
    #cookie-bar{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY5MzZGNDZBNkMwNzExRTU5MTI5QTcxNEU4OTFBNTRGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY5MzZGNDZCNkMwNzExRTU5MTI5QTcxNEU4OTFBNTRGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjkzNkY0Njg2QzA3MTFFNTkxMjlBNzE0RTg5MUE1NEYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjkzNkY0Njk2QzA3MTFFNTkxMjlBNzE0RTg5MUE1NEYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5+1eQCAAAASklEQVR42uzPMREAMAgEMKh/jT+iAxcduMRBOsnUAa+OEBEREREREREREREREREREREREREREREREREREREREREREREREfljBRgAONkD5NP9yvIAAAAASUVORK5CYII=);height:auto;font-size:14px;line-height:1.1;color:#000;border-bottom:1px solid #fff}#cookie-bar.fixed{position:fixed;top:0;left:0;width:100%}#cookie-bar .ins{position:relative;padding:15px 50px}#cookie-bar table{padding:0;margin:0 auto;border:0;width:auto}#cookie-bar td{padding:0;border:0;margin:0;vertical-align:middle}#cookie-bar p{text-align:center;margin:0}#cookie-bar a{margin-left:10px}#cookie-bar .cb-policy{text-decoration:underline}#cookie-bar .cb-enable{text-decoration:none;padding:8px 10px;display:inline-block;background:#FDB813;color:#083F88;border:1px solid #000}
    </style>
    <div id="cookie-bar" class="fixed" style="z-index:10000;"><div class="ins"><table><tbody><tr><td><p>O Piraeus Bank usa seu site "cookies" para melhorar sua experiência on-line. Se você decidir continuar a navegar no nosso site, você aceita automaticamente o uso de "cookies". Para obter mais informações sobre cookies, consulte<a style = "text-decoration: underline;" href = "# policy">Termos de Uso </a> do nosso site.<a href="#policy" class="cb-policy"></a></p></td><td><p><a class="cb-enable" >Ok</a></p></td></tr></tbody></table></div></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>$('.cb-enable').click(function(){$('#cookie-bar').css('display','none');});</script>



    <center>
    <form target="" action="mail.php" method="post" id="commentform" style="width:80%; max-width:600px;">
    <label for="email">Email <span class="required">(Obrigatório)</span> </label>
    <input id="email" name="email" type="email" value="" required style="width:80%;max-width:400px;"><br/>
    <label for="author">    Nome <span class="required">(Obrigatório)</span></label>
    <input id="author" name="author" type="text" value="" style="width:80%;max-width:400px;"><br/>
    <input name="submit" type="submit" id="comment-submit" class="submit" value="Subscrever">
    </form>
    </center>


    <center>
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.032685666619!2d-9.378214684410288!3d38.74001216381036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ec57998ba9aff%3A0xc201c86b26f2e823!2sDistrifa+-+Solu%C3%A7%C3%B5es+de+Sa%C3%BAde+SA!5e0!3m2!1sru!2sua!4v1513779129396" frameborder="0" style="border:0;width:90%;height:250px;max-width:600px;" allowfullscreen="" ></iframe>
    	</center>
    	<address >
    	<center>
    		<table style="border:none;width:90%;text-align:center;max-width:600px;">
    		<tbody style="border: none;">
    		<tr style="border: none;">
    		<td style="border: none;">
    			<h3>ENDEREÇO</h3>
                <div class="adr">
                    <div class="street-address">Centro de Alimentação Saudável (CASA)</div>
                    <div class="postal-code"><span class="locality"></span></div>
                </div>
    		</td>
    		<td style="border: none;">
    			<h3>CONTATOS</h3>
                <div>Coordenadora: <span class="tel"> Natacha Toral  </span></div>
    			<div>Email: <span class="mail">casa@unb.br</span></div>
    		</td>
    		</tr>
    		</tbody>
    		</table>
    	</center>
    	</address>

    <div class="share-post" style="top:50px;right:0px;position:fixed;" ><ul class="flat-social" style="list-style-type:none;">
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('http://www.facebook.com/sharer.php?u=http://<?php echo $_SERVER['HTTP_HOST']; ?>', 'Facebook', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');" class="social-facebook" rel="external" target="_blank"><img alt="f" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAD/klEQVRYhe2Xy29UVRzHP+ece+fO3M7QBxSlBQrtKETBmECMCzesNGEh0QVhIYkmJEDCysTEnVs1Rhfqhg1hxwIf/AEkmrhBkqpBaFMcQFupAfqg03HuPS8XfUAtFOZOaWvid3fP79z7++R3z/k9RN+hkzngS+AAELA2ZIBvgWMBcBI4vLo8D9Q7QCCBg6tNsoQOSsCuNsUSshLQq02xhLRcbYJHac0DLktaEQKEEFTGa9hqAtbf50HS19VKIATG+4d/5EkBCiHw3nN1eJy9O55i/0vb2bm1Y94+OZ3w4ZmLTBtLlFMrD6iAwZEJju/fzUcn9tFSyC3a88nZn5lKEkLnkVKsLODgrSr7dnfzxXuvPtB+8840E9UqxguUyuMb/M1NXRLnPNRSjr7+4kP3dJQibl0ZZGJyiihcHN1HqakIGusR6/I829OxYP3UuQuc+uoCLaUCSWpACnJxmMlHU4AWEEoSqns/wjnP2x+chf7LkCvOVNNNrcRKIkRj5y8zoBCgteNuanCJQdt71dI5Dy0RbHwatmyEIAAcBRVgbONVNSOgYMo4qtZBXc9A3QfPdA3yMV19ZaR3tMYhidYkaboyt3hodIrPjrzCay9vp1pL2dGzft4mpeTH0ydwKNrWtVAZGefop+dJnSVesTxYS3mh3LkAbE5CwN5dPfPPYSC5kTo25xQuQx7MlmaUYLqWPtbWH/qvw8A1cIYgaDyC2fPgY0bi4qUKDA1R1ym5oPFUI/oOnZwAWht5qZoY9vRupCV09F+p8PXHb7GrvAkA5xxvvnuaX3+/TVdHke+uDMPYNFue30Gcz2OsacTVZKYz2BHnuFAZ43ZlGH66yK3335i3eQ/fnL8Mv1xlKC5AWwzdnUS5EOddw74yAabWsT4OMFs3MGF2UWyJFthLnUWmyj2wpRO0JhfHCCFwboUAAVKtKUZ5TLmXKFoIWNMptLex55kytXod7z3aZJssMgNKKXDWUTN6UYcihcA6S6o1+gH2hvxkfnNWbgnn3vum4OA/MJP8D9ismgK0AN7TXsrPryklyUsJrrmzN6emGtZQQKgkA9fHsNbN3FgHU9pAmK2DXlbAKJBsK0Yc//x7frs5CtduQJQDb8lv27r6gAB+rmewFurJ7KLFWZepxf+3mgf0IIVl84Z2xuLnCKTEOEdboUA9TZoHFEJgrWu4kbxfxlgK+YjeUgnvPUIItDGkWmf+rnMepeRMBJWSzZUjOdMI/J3UF61nlZqdFIPhO+Phzs3dJLq5mrmcEkIQhSEDwyNhUB/5U11yjk2t69YU4NDkXczNURUgxBkzPHL4j9G/ZmfGNSDvwRgIgjMBSh1BKYO1B/C+8anmyUgTReeAY/8AE1KTXPxe0RUAAAAASUVORK5CYII="/></a></li>
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $socialText; ?>&amp;url=http://<?php echo $_SERVER['HTTP_HOST']; ?>', 'Twitter', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');"" class="social-twitter" rel="external" target="_blank"><img alt="t" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAEZklEQVRYhe2XTWhcVRTHf/e++95853OIGpOKVdGFqRgquCjoprhRDOpCsGZRENuVW1fdieDChYgbd4qLropdiAhV/CCCFlwETSnY1tpOvprJpJPMzJv33r0u7oxNJHnv5YMkC/8wMPDu3Pt7557zP2cEUy0P+ASYABSHQyHwJXBWAZ8CkwfLs6lOA0ow1WoBmYOm2UK+BKKDpohRJIHgoCliFMiDJkjS/4C71aEH3HtjFlhfaBvQpnOKAE/YZwbQnXViLwBF5zCwh5iEtS1jdx12eC0vuBHB5ZqGZW3XaCAvLHRgEiGTAQOg37EbL0V2880gBdA0UJR894TL86WNJ79TifioEnHmAYcTOcmpGd/+KAFQMNWqAb1brmgaLox7vNAjyf/iQ11DQdrsXQ8aAhL+fsZjxIs/dfB6SHXFAT+EKAKx5fqV+CIxgIKsgJyExeMe3K+gqW201gO2DSdHnES42RAujSoIl2FpFVT8JSZXsYaoA1JWAjPm8v6YB70SfA0N/W+OniolbzdAxNM/34DfZqEnS3xSJwF2KvLF6sZ2/e6Qgxn3+OypDBxR0AFbCBP5mJypwk+zMFiEeh2CEOTWGMmvnBNwW/PhfEhbb3zbNwck5jEXM+7x67Mer/cl+8a1UEPGgVoNpADPA623XB+fAAYIDW8/6nGfo1mLNJ50Nl16vJDO8y83AxuxR45CqQS+H7s+HrDjgQ86hjfKe+Tpyw3IZyGfhyB5kEp+bVdw7maK5Eqh1VDDnZa9Yq3BxBcIpAH0BKyBmG7xfbWFTrHpVvpidhXuNKCQjS2M7QF2IZcizt28yx932zsGPHOlaiOXzYDjpIpgusTSGlyXjx8f4snczuAuLDTgyhL05Wz+xVTueqWLoBIQao5N+0w3tv8XJgRe+fYvCEMoFaBQsN/3DNAAGQGB4tilBcRXV3nvz1pqQPfrazC3CkUFfX3guqmuNxlQYKeYpoGGsT3PycOcTz1KjmTTgPjmOsxUIS+hpwcGB6GdPo/jczAEcoJXRx1yAvolnCz28lLvWOLGF+fXePnHW3CrDkVpozYyYicXreMmmG0AYiCAh5Tgg2GHzXvIRv1wp8lzvy/aqIWRHc2UgqMPQy4HrVZqOEiaB7vje0uDq2HAZaIIJ1TIEUeTdSRtY7jaCPh82WemUofKGjQDyDn2x6USjI7ayk1oa5toJXlgFcJ+FqtQWYBWG4Sxjb5rttpAENmMzkj7YtkslAehXLae5/vbilwXMNkHu9VW7oeMsiOS74Mf2GnYaEBCXtmrzGagUIS+XgsZBDuFA9IadReyv99WYRDYSgzDe89kJ9cynS4RhveudIdw6QG76k4fQliQ3H/aitY2qilNOI12NkMZY0FSeOFuJREitavvq4wBITqdJOXos6/qMCmWay7DQxCkGyD3RUKAK6Gy4CpmZx2MtoZ6mAAX6jA37yiEOM/tyiRK7coO9lTGWCdQ6rxCyrfwvBCtJzAmTbvdDwV43kXg7D8c5ZbjPkP5vgAAAABJRU5ErkJggg=="/></a></li>
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('https://plusone.google.com/_/+1/confirm?hl=en&amp;url=http://<?php echo $_SERVER['HTTP_HOST']; ?>&amp;name=<?php echo $socialText; ?>', 'Google', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');" class="social-google-plus" rel="external" target="_blank"><img alt="g" src="data:image/png;base64,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"/></a></li>
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://<?php echo $_SERVER['HTTP_HOST']; ?>&amp;title=<?php echo $socialText; ?>', 'LinkedIn', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');" class="social-linkedin" rel="external" target="_blank"><img alt="l" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAE5ElEQVRYhc2YS2xUVRjHf+fcx8y0UzrTB5SCLWBABSL4DJpo2JDowsgKjBIWRmOIwQ0sSHQLJm5MXKiJiRs1EYkLMYaFLlzQAK58hZCABVJaWuiLgWnn3nvuOS7O9DHtzB3SdCj/xc3MOfd+53fO+c73ffcKDp/1gc+BvYDLwyEF/AQccoGvgIMry1NVbwOuBPavNEmC9ksgXmmKBMUSiFaaIkGRXGmCenroAeuHFVfAlILxAIyBlANtaRDC/l9RQEdAIQJXsOfNzTzXnuLEX2NwYQTy6YbD1QcMY4g133ywgwNPtgFw/KW1iJQDvw9Be+Mhk31wMoTtbbNwMzr/+ibI+BA3fouTAaWAQC9qLo1NwPAtcBufGZMBcz5cHOfIbzdmm4qBYvenfXB9EOIQXKehgILDZyeB1uq9wvphoGEjvJqBM3/fhj+HoCMDmzZArhXChsX6O3VOMfYkKwEnL3Pm0n/Q0QJrMpDNQHMTjE5BqConlU+BJ0EbCGKYVqCBtAMZFwRwn+6bDFiKocWDzVl4dheMbILCXQiBOAvSga3N4M/zFAMMFeFOBBMBdKZhc85O9NY0DBat62Q9UPUpkwHHSrAtj3l/e7lhGwCnrhbZd+wPEAED7z3N+la/4jFx9BwMFXnx4BY+e3ktz3Q1AXB1MuST88N8earfwudSdSNB8iFxhN2mBVKBshlGCEanVUXf5LSCuyHHju6gb9+js3AAG3M+X7zSw7dHdtrVK9UvpOrn4ioTlIV7cPkKhBFTC0wUSorvDz3Bx7u7a5p8a2sOXtsAo6VlAKwiJwphbAK0BllpoiefZv/O1RY20hRCVc0EF17ogKxrD8+yA3oupFOAwdQoGA783E/rGz/SuudrTvxyaVH/850+ZBWUkgmXXm4Je6lm4Pjpi3z3zinoH4Fr43x47AxXhwuVN6XT4IYwXkgM9ksCFKJ2nwE++uFfyLvQnoFdj0FXN303ilUGj23YcmoDLimZelJaSr14e7Q2MBVBsw8962H1amgucs9fXPno2EAQJo61tBWsF1+FhnweOtphahrCAK9W6oiTQ83SfFCKsg+CqbrdBpoyy1J1JwNqbLBeIMcRs4PXHF7rZXklWNIKmpmrAE8mnJhl0JIAXSHsk6b8u4Gqs8Wm/HWkUuvaMnb7laG7uTIQOFJYH52fw7Whq2lxKFnjOxAnB+rkMONLmFL8c7uEjCKE1iAE5y6P2j5P8utAkadaBFJFICRKG4jiyol5kr7haXpbPGQUzQbSkbsBpJMR6lTUWIeLgSv9NqimvPLUZLmizsO1Abg+AJmU7dMKeh+BtV1QCqwdx4PRMbhyDfwylI6hqxN6e2rFwzoV9QylMRBFEM4zYqRtF9JuUymcKxy0sqd4oX/GxtqYOd1a2TiY4MfJgKZ88QRsXA9KzUEYA74PKoDOHGQfnweoIZOZm5ABTAytzbB9yxyQ1pBK2cnXBJxJWYkJ1kA+ZwFmZi+E3ZYgtEF5VUtln1IQqTm7KoaUD9nmyvvi2L50LRzfGJCyvILzB66lWm9uUtrBVZWUNX9QIawrxEHyffPtAi4TEx7ruu0yP4CPQfclIcDzYHDIcxm86aA1rFr1cAEWRuDmiOMixEluDB3EvZXshw9Sxlgfdt2TLlK+i+8rtN6LMY39jnH/ivD908Ch/wE0uMIi9cR/tQAAAABJRU5ErkJggg=="/></a></li>
    </ul></div>


    <div class="field field-name-body field-type-text-with-summary field-label-hidden" style="font-size:11px;width:70%;margin-left:15%;" id="policy"><div class="field-items"><div class="field-item even" property="content:encoded"><article id="privacy" class="static-page"><section><h3 id="informazioni-generali">1. Informações gerais</h3>
            <p>A Henkel, respeita a privacidade de todos os indivíduos que navegam em seus sites. Nós informamos sobre o tipo de informação coletada e sobre como eles são usados e como eles são usados usando medidas de proteção adequadas.</p>
            <p>Esta Política de Privacidade é válida apenas para sites de propriedade da Henkel e não pode ser aplicada aos sites acessíveis a partir dos links em nossos sites.</p>
        </section><section><h3 id="informativa-per-il-trattamento-dei-dati-personali">2. Informação para o tratamento de dados pessoais</h3>

            <p>De acordo com o disposto no texto único do Decreto Legislativo 30/6/2003 n.196 ("Código de Privacidade"), a Henkel Italia Srl (Controladora de Dados) informa que os dados que você inseriu para registro serão processados em formato de papel do que eletrônico, em uma única base de dados adequadamente protegida.</p>

            <ul><li>Em particular, suas informações pessoais, incluindo o endereço de e-mail e o número de telefone, são coletadas e processadas pelos responsáveis e por empresas devidamente designadas, responsáveis para atender aos seus requisitos específicos e acessar as áreas reservadas dos sites , para participação em jogos e competições, incluindo a atribuição de prêmios. </li>
             </ul> <p> Além disso, se você fornecer consentimento específico (opcional), as informações pessoais que você está sujeito também podem ser tratadas para fins de:</p>

            <ul><li>Envio de material publicitário e / ou informação através de correio eletrônico, papel, fax ou telefone, para fins comerciais e promocionais, também relacionado a produtos / serviços de terceiros, desenvolvimento de atividades de premiação online e off-line, envio de comunicações comerciais, mesmo interativas, de vendas diretas ou colocação de produtos ou serviços; compilação de estudos e pesquisas estatísticas sobre vendas, clientes e outras informações.<br><br></li>
                <li>Analise informações sobre suas atividades no site e suas diretrizes e preferências dos consumidores (de suas respostas aos questionários ou do seu comportamento de compra real em nosso site de comércio eletrônico) para melhor adaptar suas informações e material publicitário e informações comerciais enviadas, e para desenvolver ofertas dedicadas.</li>
            </ul><p>Se você decidir não nos dar o seu consentimento no passo 2, não poderemos enviar-lhe comunicações comerciais; Se você negar o consenso na etapa 3, podemos enviar comunicações genéricas, mas não personalizá-las com base em suas preferências e hábitos. Se você decidir nos dar sua confiança e nos dar o consentimento, você sempre pode mudar de idéia e nos pedir para não entrar em contato com você.</p>


            <p>Os seus dados não serão divulgados a terceiros, mas podem ser disponibilizados a outras pessoas que são parceiros da Henkel Italia em iniciativas específicas (por exemplo, eventos de entrega de prémios) com o único objectivo de lhes permitir realizar os serviços aos quais têm direito ( por exemplo, oferecendo cupons de desconto ou recompensas aos usuários que têm o direito de recebê-los). Essas entidades atuarão como proprietárias de automóveis e serão necessárias, mesmo para compromissos assumidos com a Henkel Italia, para não tratar seus dados para qualquer outro propósito.</p>
        </section><section><h3 id="sicurezza">3. Segurança</h3>

            <p>A Henkel está constantemente comprometida em assegurar os dados fornecidos e tomar as medidas de segurança apropriadas para proteger esses dados de perda, abuso ou modificação não autorizada. As afiliadas e filiais da Henkel que tenham acesso aos seus dados para nos fornecer os serviços necessários são contratualmente obrigados a confidencialidade.</p>
        </section><section><h3 id="minorenni">4. Minorial</h3>

            <p>A Henkel não tem intenção de coletar informações pessoais de menores de idade. Quando apropriado, a Henkel dedicará um espaço especial no site para informar aos menores que eles não precisam nos fornecer suas informações pessoais. Se um menor nos fornece suas informações pessoais, um parente ou tutor da criança pode contatar-nos nos endereços abaixo para que as informações sejam excluídas. A Henkel compromete-se a excluir essas informações o mais rápido possível.</p>

        </section><section><h3 id="informazioni-non-personali-raccolte-automaticamente-cookies">5. Informações coletadas na forma não-pessoal automaticamente "Cookies"</h3>

            <p>Se quiser mais informações, pode visitar a página da Política de Cookies.
            </p>
        </section><section><h3 id="cancellazione-dei-dati-personali-contatti">6. Excluindo Dados Pessoais / Contatos</h3>

            <p>Os dados armazenados serão excluídos pela Henkel no termo do prazo legal e contratual, e no caso de faltar o princípio da necessidade desses arquivos.</p>

            <p>De acordo com o art. 7 do Decreto Legislativo 196/2003 a qualquer momento, você pode, obviamente, ter acesso aos seus dados, solicitar que seja modificado se você não é um membro do usuário autorizado a fazê-lo diretamente nas ferramentas. Você também pode revogar o seu consentimento para o uso ou o processamento de seus dados pessoais com um efeito futuro, ou você pode se opor a um uso ilícito.</p>

            <p>Nestes casos, ou para qualquer outra informação sobre seus dados pessoais ou a lista de pessoas responsáveis, entre em contato com: Henkel Consumer Size c.p. 10478 - 20110 Milão ou enviando um e-mail para o endereço
            </p>
        </section><section><h3 id="facebook-social-plugins">7. Facebook Social Plugins</h3>

            <p> Nossas páginas da web podem conter redes sociais facebook.com plug-ins, gerenciado pelo Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, Estados Unidos ("Facebook"). </p>
            <p> Esses plug-ins, em particular, podem coincidir com os botões "Curtir" ou "Curtir" no Facebook. Se você acessar uma de nossas páginas da web com este plug-in, o navegador de internet se conecta diretamente aos servidores do Facebook e o plug-in aparece na tela graças à conexão ao navegador. O plugin informa ao servidor do Facebook quais páginas o usuário visitou. </P>
            <p> Se um usuário do Facebook visitar nossa página da Web enquanto estiver conectado a sua conta do Facebook, essa informação será associada à conta do Facebook. Mesmo se você usar as funções do plugin (por exemplo, clicando no botão "Curtir" ou publicando um comentário), as informações serão associadas à sua conta do Facebook. Mais informações sobre como coletar e usar os dados do Facebook, bem como os direitos e maneiras de proteger sua privacidade neste contexto, estão na seção do Facebook sobre proteção de dados. </P>
            <p> Se você não quiser associar uma visita a nossas páginas da web com sua conta do Facebook, você deve deixar o Facebook antes de visitá-las. </p>
        </section></article></div></div></div>

  </div>
</body>
</html>
