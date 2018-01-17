<?php
if( count(get_included_files()) == 1 )
{
	header('HTTP/1.1 404 Not Found');
	exit();
}

$socialText = "Nejlepší+stavbou+Prahy+6+je+tělocvična";
?>
<!DOCTYPE html>
<html lang="cz">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nejlepší stavbou Prahy 6 je tělocvična</title>
  <link href="https://fonts.googleapis.com/css?family=Lato|Oswald:400,600&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <style>
    body{margin:0;padding: 0;box-sizing:border-box;width:100%; font-family: 'Lato', sans-serif; background-color: #FFFAFA;}
    h1,h2,h3,h4,h5,h6{font-family: 'Oswald', sans-serif; color:#294876;}
    p{text-align: left;}
    .main{width:80%; margin: 0 auto; max-width: 1100px;}
    .header{border-bottom: 1px solid #4682B4;background-color: #FFE4C4;margin-bottom: 10px; padding: 0 10%;}
    .header img{padding: 20px 0;}
    .content{width: 100%; text-align: left;}
    .content img{ width: 100%;  height: auto;}
    .content figure{float: right; margin: 50px; max-width: 700px;}
    .content p img{margin-right: 3em; width: 300px; float: left;}
    .content .subtext{color: gray; text-align: center;}
    .content h1{margin-bottom: 0;}
    @media all and (max-width: 600px) {
      .main{width:95%;}
      .content img{width: 100%;}
      .content p img{margin: 0 10%; width: 80%; float: none;}
      .content figure{float: none; margin: 20px auto; width: 100%;}
    }
  </style>
</head>
<body>
  <header class="header">
    <img src="imgs/lidovky.svg" alt="">
  </header>
  <div class="main">
    <div class="content">
      <h1>Nejlepší stavbou Prahy 6 je tělocvična</h1>
      <hr/>
      <figure>
        <img src="imgs/PRG_1.jpg" alt="">
        <figcaption class="subtext">TĚLOCVIČNA PŘI GYMNÁZIU JANA KEPLERA </figcaption>
      </figure>
      <br/>

      <br/><br/>
      <strong>PRAHA</strong>
      <h3> Nejlepším architektonickým počinem na území městské části Praha 6 se stala tělocvična Gymnázia Jana Keplera. Výsledky soutěže při slavnostním udílení cen oznámila starostka Prahy 6 Marie Kousalíková. Porota složená z odborníků vybírala z deseti projektů.</h3>
      <p>
        Vítězný projekt měl silnou konkurenci. Architekti mu dali přednost před novou budovou fakulty architektury ČVUT z ateliéru "první dámy české architektury" Aleny Šrámkové. Zvítězil i nad dřevěným zahradním domkem v Šáreckém údolí nebo nízkoenergetickou stavbou Mateřské školy Velvarská.
    </p>
    <p>Tělocvična vyrostla vedle  budovy gymnázia na Pohořelci v roce 2009. Půdorys betonové haly navrhla architektonická kancelář Sporadical podle rozměrů školního basketbalového hřiště. Toalety, šatny a ostatní zázemí je umístěno ve staré budově. Na zelené střeše stavby vznikla terasa, které je bezbariérově přístupná z knihovny ve třetím podlaží.</p>
    <p>"Stavbu jsme vybrali, protože velmi vhodně doplňuje areál. Je jednoduchá, střídmá a zapadá do okolí," řekl na vyhlášení výsledků člen poroty Luboš Pata. Zatímco vnějším stěnám dominuje šedá barva, pro interiér architekti zvolili světle modrou. Výrazný prvek tvoří prosklená plocha na východní fasádě, na níž jsou umístěny slunolamy.</p>

    <hr/>
<br/><br/>
    </div>
    <style>
    #cookie-bar{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY5MzZGNDZBNkMwNzExRTU5MTI5QTcxNEU4OTFBNTRGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY5MzZGNDZCNkMwNzExRTU5MTI5QTcxNEU4OTFBNTRGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjkzNkY0Njg2QzA3MTFFNTkxMjlBNzE0RTg5MUE1NEYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjkzNkY0Njk2QzA3MTFFNTkxMjlBNzE0RTg5MUE1NEYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5+1eQCAAAASklEQVR42uzPMREAMAgEMKh/jT+iAxcduMRBOsnUAa+OEBEREREREREREREREREREREREREREREREREREREREREREREREfljBRgAONkD5NP9yvIAAAAASUVORK5CYII=);height:auto;font-size:14px;line-height:1.1;color:#000;border-bottom:1px solid #fff}#cookie-bar.fixed{position:fixed;top:0;left:0;width:100%}#cookie-bar .ins{position:relative;padding:15px 50px}#cookie-bar table{padding:0;margin:0 auto;border:0;width:auto}#cookie-bar td{padding:0;border:0;margin:0;vertical-align:middle}#cookie-bar p{text-align:center;margin:0}#cookie-bar a{margin-left:10px}#cookie-bar .cb-policy{text-decoration:underline}#cookie-bar .cb-enable{text-decoration:none;padding:8px 10px;display:inline-block;background:#FDB813;color:#083F88;border:1px solid #000}
    </style>
    <div id="cookie-bar" class="fixed" style="z-index:10000;"><div class="ins"><table><tbody><tr><td><p>Piraeus Bank používá své webové stránky "cookies", aby zvýšila jejich online zážitek. Pokud se rozhodnete pokračovat v procházení našich stránek, automaticky přijímáte použití "cookies". Další informace o souborech cookie naleznete v tématu <a style="text-decoration: underline;" href="#policy"> Podmínky použití </a> našich stránek.<a href="#policy" class="cb-policy"></a></p></td><td><p><a class="cb-enable" >Ok</a></p></td></tr></tbody></table></div></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>$('.cb-enable').click(function(){$('#cookie-bar').css('display','none');});</script>


    <br/>
    <center>
    <form target="" action="mail.php" method="post" id="commentform" style="width:80%; max-width:600px;">
    <label for="email">Email <span class="required">(povinný)</span> </label>
    <input id="email" name="email" type="email" value="" required style="width:80%;max-width:400px;"><br/>
    <label for="author">    Název <span class="required">(povinný)</span></label>
    <input id="author" name="author" type="text" value="" style="width:80%;max-width:400px;"><br/>
    <input name="submit" type="submit" id="comment-submit" class="submit" value="Předplatit">
    </form>
    </center>
    <br/>




    <div class="share-post" style="top:50px;left:-40px;position:fixed;" ><ul class="flat-social" style="list-style-type:none;">
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('http://www.facebook.com/sharer.php?u=https://<?php echo $_SERVER['HTTP_HOST']; ?>', 'Facebook', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');" class="social-facebook" rel="external" target="_blank"><img alt="f" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAD/klEQVRYhe2Xy29UVRzHP+ece+fO3M7QBxSlBQrtKETBmECMCzesNGEh0QVhIYkmJEDCysTEnVs1Rhfqhg1hxwIf/AEkmrhBkqpBaFMcQFupAfqg03HuPS8XfUAtFOZOaWvid3fP79z7++R3z/k9RN+hkzngS+AAELA2ZIBvgWMBcBI4vLo8D9Q7QCCBg6tNsoQOSsCuNsUSshLQq02xhLRcbYJHac0DLktaEQKEEFTGa9hqAtbf50HS19VKIATG+4d/5EkBCiHw3nN1eJy9O55i/0vb2bm1Y94+OZ3w4ZmLTBtLlFMrD6iAwZEJju/fzUcn9tFSyC3a88nZn5lKEkLnkVKsLODgrSr7dnfzxXuvPtB+8840E9UqxguUyuMb/M1NXRLnPNRSjr7+4kP3dJQibl0ZZGJyiihcHN1HqakIGusR6/I829OxYP3UuQuc+uoCLaUCSWpACnJxmMlHU4AWEEoSqns/wjnP2x+chf7LkCvOVNNNrcRKIkRj5y8zoBCgteNuanCJQdt71dI5Dy0RbHwatmyEIAAcBRVgbONVNSOgYMo4qtZBXc9A3QfPdA3yMV19ZaR3tMYhidYkaboyt3hodIrPjrzCay9vp1pL2dGzft4mpeTH0ydwKNrWtVAZGefop+dJnSVesTxYS3mh3LkAbE5CwN5dPfPPYSC5kTo25xQuQx7MlmaUYLqWPtbWH/qvw8A1cIYgaDyC2fPgY0bi4qUKDA1R1ym5oPFUI/oOnZwAWht5qZoY9vRupCV09F+p8PXHb7GrvAkA5xxvvnuaX3+/TVdHke+uDMPYNFue30Gcz2OsacTVZKYz2BHnuFAZ43ZlGH66yK3335i3eQ/fnL8Mv1xlKC5AWwzdnUS5EOddw74yAabWsT4OMFs3MGF2UWyJFthLnUWmyj2wpRO0JhfHCCFwboUAAVKtKUZ5TLmXKFoIWNMptLex55kytXod7z3aZJssMgNKKXDWUTN6UYcihcA6S6o1+gH2hvxkfnNWbgnn3vum4OA/MJP8D9ismgK0AN7TXsrPryklyUsJrrmzN6emGtZQQKgkA9fHsNbN3FgHU9pAmK2DXlbAKJBsK0Yc//x7frs5CtduQJQDb8lv27r6gAB+rmewFurJ7KLFWZepxf+3mgf0IIVl84Z2xuLnCKTEOEdboUA9TZoHFEJgrWu4kbxfxlgK+YjeUgnvPUIItDGkWmf+rnMepeRMBJWSzZUjOdMI/J3UF61nlZqdFIPhO+Phzs3dJLq5mrmcEkIQhSEDwyNhUB/5U11yjk2t69YU4NDkXczNURUgxBkzPHL4j9G/ZmfGNSDvwRgIgjMBSh1BKYO1B/C+8anmyUgTReeAY/8AE1KTXPxe0RUAAAAASUVORK5CYII="/></a></li>
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $socialText; ?>&amp;url=https://<?php echo $_SERVER['HTTP_HOST']; ?>', 'Twitter', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');"" class="social-twitter" rel="external" target="_blank"><img alt="t" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAEZklEQVRYhe2XTWhcVRTHf/e++95853OIGpOKVdGFqRgquCjoprhRDOpCsGZRENuVW1fdieDChYgbd4qLropdiAhV/CCCFlwETSnY1tpOvprJpJPMzJv33r0u7oxNJHnv5YMkC/8wMPDu3Pt7557zP2cEUy0P+ASYABSHQyHwJXBWAZ8CkwfLs6lOA0ow1WoBmYOm2UK+BKKDpohRJIHgoCliFMiDJkjS/4C71aEH3HtjFlhfaBvQpnOKAE/YZwbQnXViLwBF5zCwh5iEtS1jdx12eC0vuBHB5ZqGZW3XaCAvLHRgEiGTAQOg37EbL0V2880gBdA0UJR894TL86WNJ79TifioEnHmAYcTOcmpGd/+KAFQMNWqAb1brmgaLox7vNAjyf/iQ11DQdrsXQ8aAhL+fsZjxIs/dfB6SHXFAT+EKAKx5fqV+CIxgIKsgJyExeMe3K+gqW201gO2DSdHnES42RAujSoIl2FpFVT8JSZXsYaoA1JWAjPm8v6YB70SfA0N/W+OniolbzdAxNM/34DfZqEnS3xSJwF2KvLF6sZ2/e6Qgxn3+OypDBxR0AFbCBP5mJypwk+zMFiEeh2CEOTWGMmvnBNwW/PhfEhbb3zbNwck5jEXM+7x67Mer/cl+8a1UEPGgVoNpADPA623XB+fAAYIDW8/6nGfo1mLNJ50Nl16vJDO8y83AxuxR45CqQS+H7s+HrDjgQ86hjfKe+Tpyw3IZyGfhyB5kEp+bVdw7maK5Eqh1VDDnZa9Yq3BxBcIpAH0BKyBmG7xfbWFTrHpVvpidhXuNKCQjS2M7QF2IZcizt28yx932zsGPHOlaiOXzYDjpIpgusTSGlyXjx8f4snczuAuLDTgyhL05Wz+xVTueqWLoBIQao5N+0w3tv8XJgRe+fYvCEMoFaBQsN/3DNAAGQGB4tilBcRXV3nvz1pqQPfrazC3CkUFfX3guqmuNxlQYKeYpoGGsT3PycOcTz1KjmTTgPjmOsxUIS+hpwcGB6GdPo/jczAEcoJXRx1yAvolnCz28lLvWOLGF+fXePnHW3CrDkVpozYyYicXreMmmG0AYiCAh5Tgg2GHzXvIRv1wp8lzvy/aqIWRHc2UgqMPQy4HrVZqOEiaB7vje0uDq2HAZaIIJ1TIEUeTdSRtY7jaCPh82WemUofKGjQDyDn2x6USjI7ayk1oa5toJXlgFcJ+FqtQWYBWG4Sxjb5rttpAENmMzkj7YtkslAehXLae5/vbilwXMNkHu9VW7oeMsiOS74Mf2GnYaEBCXtmrzGagUIS+XgsZBDuFA9IadReyv99WYRDYSgzDe89kJ9cynS4RhveudIdw6QG76k4fQliQ3H/aitY2qilNOI12NkMZY0FSeOFuJREitavvq4wBITqdJOXos6/qMCmWay7DQxCkGyD3RUKAK6Gy4CpmZx2MtoZ6mAAX6jA37yiEOM/tyiRK7coO9lTGWCdQ6rxCyrfwvBCtJzAmTbvdDwV43kXg7D8c5ZbjPkP5vgAAAABJRU5ErkJggg=="/></a></li>
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('https://plusone.google.com/_/+1/confirm?hl=en&amp;url=https://<?php echo $_SERVER['HTTP_HOST']; ?>&amp;name=<?php echo $socialText; ?>', 'Google', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');" class="social-google-plus" rel="external" target="_blank"><img alt="g" src="data:image/png;base64,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"/></a></li>
    <li style="line-height: 45px;"><a style="cursor:pointer;" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=https://<?php echo $_SERVER['HTTP_HOST']; ?>&amp;title=<?php echo $socialText; ?>', 'LinkedIn', 'top=50,left=50,width=300,height=300,menubar=no,toolbar=no,location=yes,location=no,status=no');" class="social-linkedin" rel="external" target="_blank"><img alt="l" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAE5ElEQVRYhc2YS2xUVRjHf+fcx8y0UzrTB5SCLWBABSL4DJpo2JDowsgKjBIWRmOIwQ0sSHQLJm5MXKiJiRs1EYkLMYaFLlzQAK58hZCABVJaWuiLgWnn3nvuOS7O9DHtzB3SdCj/xc3MOfd+53fO+c73ffcKDp/1gc+BvYDLwyEF/AQccoGvgIMry1NVbwOuBPavNEmC9ksgXmmKBMUSiFaaIkGRXGmCenroAeuHFVfAlILxAIyBlANtaRDC/l9RQEdAIQJXsOfNzTzXnuLEX2NwYQTy6YbD1QcMY4g133ywgwNPtgFw/KW1iJQDvw9Be+Mhk31wMoTtbbNwMzr/+ibI+BA3fouTAaWAQC9qLo1NwPAtcBufGZMBcz5cHOfIbzdmm4qBYvenfXB9EOIQXKehgILDZyeB1uq9wvphoGEjvJqBM3/fhj+HoCMDmzZArhXChsX6O3VOMfYkKwEnL3Pm0n/Q0QJrMpDNQHMTjE5BqConlU+BJ0EbCGKYVqCBtAMZFwRwn+6bDFiKocWDzVl4dheMbILCXQiBOAvSga3N4M/zFAMMFeFOBBMBdKZhc85O9NY0DBat62Q9UPUpkwHHSrAtj3l/e7lhGwCnrhbZd+wPEAED7z3N+la/4jFx9BwMFXnx4BY+e3ktz3Q1AXB1MuST88N8earfwudSdSNB8iFxhN2mBVKBshlGCEanVUXf5LSCuyHHju6gb9+js3AAG3M+X7zSw7dHdtrVK9UvpOrn4ioTlIV7cPkKhBFTC0wUSorvDz3Bx7u7a5p8a2sOXtsAo6VlAKwiJwphbAK0BllpoiefZv/O1RY20hRCVc0EF17ogKxrD8+yA3oupFOAwdQoGA783E/rGz/SuudrTvxyaVH/850+ZBWUkgmXXm4Je6lm4Pjpi3z3zinoH4Fr43x47AxXhwuVN6XT4IYwXkgM9ksCFKJ2nwE++uFfyLvQnoFdj0FXN303ilUGj23YcmoDLimZelJaSr14e7Q2MBVBsw8962H1amgucs9fXPno2EAQJo61tBWsF1+FhnweOtphahrCAK9W6oiTQ83SfFCKsg+CqbrdBpoyy1J1JwNqbLBeIMcRs4PXHF7rZXklWNIKmpmrAE8mnJhl0JIAXSHsk6b8u4Gqs8Wm/HWkUuvaMnb7laG7uTIQOFJYH52fw7Whq2lxKFnjOxAnB+rkMONLmFL8c7uEjCKE1iAE5y6P2j5P8utAkadaBFJFICRKG4jiyol5kr7haXpbPGQUzQbSkbsBpJMR6lTUWIeLgSv9NqimvPLUZLmizsO1Abg+AJmU7dMKeh+BtV1QCqwdx4PRMbhyDfwylI6hqxN6e2rFwzoV9QylMRBFEM4zYqRtF9JuUymcKxy0sqd4oX/GxtqYOd1a2TiY4MfJgKZ88QRsXA9KzUEYA74PKoDOHGQfnweoIZOZm5ABTAytzbB9yxyQ1pBK2cnXBJxJWYkJ1kA+ZwFmZi+E3ZYgtEF5VUtln1IQqTm7KoaUD9nmyvvi2L50LRzfGJCyvILzB66lWm9uUtrBVZWUNX9QIawrxEHyffPtAi4TEx7ruu0yP4CPQfclIcDzYHDIcxm86aA1rFr1cAEWRuDmiOMixEluDB3EvZXshw9Sxlgfdt2TLlK+i+8rtN6LMY39jnH/ivD908Ch/wE0uMIi9cR/tQAAAABJRU5ErkJggg=="/></a></li>
    </ul></div>

    <footer style="width:100%">
    	<center>
    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2559.0864989872584!2d14.4509482935511!3d50.10338790160016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94b220254121%3A0xfccea164fcd4ad84!2sCrossFit+Meat+Factory!5e0!3m2!1sru!2sua!4v1513864239056" frameborder="0" style="border:0;width:90%;height:250px;max-width:600px;" allowfullscreen="" ></iframe>
    	</center>
    	<address >
    	<center>
    		<table style="border:none;width:90%;text-align:center;max-width:600px;">
    		<tbody style="border: none;">
    		<tr style="border: none;">
    		<td style="border: none;">
    			<h3>LOKALITA</h3>
                <div class="adr">
                    <div class="street-address">Dělnická 49a</div>
                    <div class="postal-code"><span class="locality">Praha 7​ , Česká republika</span></div>
                </div>
    		</td>
    		<td style="border: none;">
    			<h3>KONTAKTY</h3>
                <div>Telefono: <span class="tel">+420 774 309 704</span></div>
    			<div>Email: <span class="mail">info@crossfitmeatfactory.com  </span></div>
    		</td>
    		</tr>
    		</tbody>
    		</table>
    	</center>
    	</address>
    </footer>


    <div class="field field-name-body field-type-text-with-summary field-label-hidden" style="font-size:10px;width:60%;margin-left:20%;"><div class="field-items"><div class="field-item even" property="content:encoded"><article id="privacy" class="static-page"><header><h1 id="informativa-privacy"> OCHRANA DAT</h1>
        </header> <section> <h3 id="informazioni-generali"> 1. Obecné informace </h3>
            <p> Henkel odpovídá za to, že se jedná o personál, který navazuje na webové stránky. Informujte se o informacích, které se používají při používání informací, které se používají s ochranou před spuštěním. </p>
            <p> Esta Política de privacidad sólo je válida na hranici se sídlem v Henkel a žádný z aplikací, které by mohly být přístupné z místních sítí. </p>
        </section> <section> <h3 id = "informativa-per-il-trattamento-dei-dati-personali"> Información pro zpracování osobních údajů</h3>

            <p> V souladu s právními předpisy ze dne 30. 6. 2003 č.196 (poskytnout jen "zákon o ochraně osobních údajů"), společnost Henkel Italia Srl (kontrolér údajů) informovala nebo bude zpracována v papírové podobě, řádně chráněných termínů.</p>

            <ul> <li> Zvláštní informace, které se týkají osobních údajů, které se týkají elektro nických a telekomunikačních záležitostí, jsou zodpovědné a odpovědné osoby, které jsou odpovědné za poskytování služeb, rezervy, které se účastní, účastnící se soutěže a soutěže, včetně rozhodnutí o předběžné otázce. </li>
            </ul> <p> <p> Pokud se chcete dozvědět více, kontaktujte prosím vašeho poskytovatele služeb </p>

            <ul> <li> Prostřednictvím informačních a komunikačních materiálů a informací o elektrotechnice, papíru, telefonech, telekomunikacích, telekomunikacích a telekomunikacích, které se týkají produktů / služeb, de línea, envío <br> <br> </li>
                <li> Analýza informačních informací o aktivitách v oblasti podpory spotřebitelských preferencí (od výše uvedených informací je nutno konstatovat, že se jedná o podnikatelské subjekty, které se zabývají obchodováním s elektrotechnickými službami) </li>
            </ul> <p> Rozhodněte se, že nebudete souhlasit s heslem 2, žádné podřízené obchody s obchodními partnery; Pokud si přejete, prosím, kontaktujte vašeho zástupce v sekci 3, podzemní komunikační média, které nejsou k dispozici, a nikterak neupravujte. Si rozhodne, že se obtěžuje a že se obrátí na svolení, aby se podařilo získat svolení, aby se nestalo. </p>


            <p> Nebyl nalezen žádný terceros, který by mohl být podněcován a vyloučen z osobních otázek společnosti Henkel Italia, které se zabývají iniciativami v oblasti ochrany životního prostředí (např. que tienen derecho.), které se vyskytují v recipech, které se odrazí od recibirálu. Veškerá práva a povinnosti vyplývající z této smlouvy jsou zahrnuty v dodatku k dohodě s Henkel Italia, bez ohledu na to, co se týká těchto otázek.
    </p>
        </section> <section> <h3 id="sicurezza"> 3. Zabezpečení</h3>

            <p> Společnost Henkel splňuje požadavky na záruky a záruky, které jsou v souladu s platnými právními předpisy, které se vztahují k ochraně osobních údajů a ochraně před zneužitím. Společnost Henkel se sídlem v Helsinkách se sídlem v Helsinkách.</p>
        </section> <section> <h3 id="minorenni">4. Mládež </h3>

            <p> Společnost Henkel neinformovala o žádných osobních zdrojích. Cílem je, aby společnost Henkel věnovala zvláštní pozornost informacím o lidech, které by neměly obsahovat osobní informace. Si nenechávejte žádné informace o osobě, neznámé osobě, která by měla být informována o tom, že se jedná o informace a informace o životním prostředí. Společnost Henkel kompromisuje odstranění informací, které jsou k dispozici.
    </p>

        </section> <section> <h3 id="informazioni-non-personali-raccolte-automaticamente-cookies"> 5. Informace nejsou automaticky oznamovány automaticky "Cookies" </h3>

            <p> Získáte informace, které se týkají cookies Política de cookies.
            </p>
        </section> <section> <h3 id="cancellazione-dei-dati-personali-contatti"> 6. Vymazání osobních údajů / kontaktů </h3>

            <p> Uložená data budou vymazány Henkel po uplynutí zákonné a smluvní lhůtě, a pokud zásady, že je třeba, aby tyto soubory nezdaří. </p>

            <p> Podle čl. 7 legislativního nařízení 196/2003 kdykoliv můžete samozřejmě přístup ke svým datům, požádat o jeho změnu, pokud není členem uživatele, který je k tomu oprávněn přímo v nástroji. Můžete také odvolat svůj souhlas s používáním nebo zpracováním svých osobních údajů s budoucím účinkem, nebo můžete vznést námitky proti nezákonnému použití. </p>

            <p> V těchto případech nebo pro jakékoli další informace týkající se vašich osobních údajů nebo seznam odpovědných osob kontaktujte: Henkel Consumer Size c.p. 10478 - 20110 Milán nebo zasláním e-mailu na adresu
            </p>
        </section> <section> <h3 id="facebook-social-plugins"> 7. Facebook sociální pluginy </h3>

            <p> Naše webové stránky mohou obsahovat doplňuje sociální sítě facebook.com, provozované společností Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA ( "Facebook"). </p>
    <p> Tyto doplňky mohou zejména odpovídat tlačítkům "Like" nebo "Like" ve Facebooku. Pokud přistupujete k některému z našich webových stránek s tímto doplňkem, internetový prohlížeč se připojí přímo na servery Facebook a plug-in se objeví na obrazovce díky připojení prohlížeče. Plugin informuje server Facebook, jaké stránky navštívil uživatel. </p>
    <p> Pokud uživatel Facebooku navštíví naše webové stránky, když je připojen ke svému účtu Facebook, budou tyto informace spojeny s účtem Facebook. I když používáte doplňkové funkce (například klepnutím na tlačítko "Líbí se" nebo přidáním komentáře), informace budou přidruženy k vašemu účtu Facebook. Více informací o tom, jak shromažďovat a používat údaje z Facebooku, jakož i práva a způsobů, jak chránit vaše soukromí v této souvislosti se v sekci Facebook o ochraně osobních údajů. </p>
    <p> Pokud nechcete přiřadit návštěvu našich webových stránek s účtem Facebook, měli byste před návštěvou opustit Facebook. </p>
        </section> </article> </div> </div> </div>
  </div>
</body>
</html>
