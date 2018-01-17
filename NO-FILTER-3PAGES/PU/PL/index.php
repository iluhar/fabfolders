<?php
include 'config.php';
preg_match('/^.*\//',$_SERVER['REQUEST_URI'],$matches);
$host .= $matches[0];
class Redirect {
	public function echoUrl(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randstring = '';
		for ($i = 0; $i < rand(6,20); $i++) {
    	    $randstring .= substr($characters, rand(0,strlen($characters)-1), 1);
    	}
		echo "page".$randstring;
	}
}
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
    <title>Blog Stefan</title>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.png" rel="icon" type="image/x-icon">
<style media="all">
  *{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}@font-face{font-family:Glober Black;src:url(fonts/GloberBlack.eot);src:url(fonts/GloberBlack.woff2) format("woff2"),url(fonts/GloberBlack.woff) format("woff"),url(fonts/GloberBlack.ttf) format("truetype"),url(fonts/GloberBlack.svg#GloberBlack) format("svg"),url(fonts/GloberBlack.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-500;src:url(fonts/MuseoSansCyrl-500.eot);src:url(fonts/MuseoSansCyrl-500.woff2) format("woff2"),url(fonts/MuseoSansCyrl-500.woff) format("woff"),url(fonts/MuseoSansCyrl-500.ttf) format("truetype"),url(fonts/MuseoSansCyrl-500.svg#MuseoSansCyrl-500) format("svg"),url(fonts/MuseoSansCyrl-500.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-900;src:url(fonts/MuseoSansCyrl-900.woff) format("woff"),url(fonts/MuseoSansCyrl-900.ttf) format("truetype"),url(fonts/MuseoSansCyrl-900.svg#MuseoSansCyrl-900) format("svg");font-weight:400;font-style:normal}body{background:#fff;font-family:MuseoSansCyrl-500,sans-serif;font-size:24px}h1{font-size:2.5em;color:#fff}img{max-width:100%}.clearfix:after{content:"";clear:both;display:inline-block}.mb20{margin-bottom:20px!important}.mt125{margin-top:125px!important}.container{width:1440px;margin:0 auto;position:relative;padding:0 15px}.container:after{content:"";clear:both;display:block}.header{background:#fff url(img/header-back.jpg) no-repeat top;padding-top:65px;min-height:1000px}.header .logo{margin-left:0}.header .navigation{font-family:Glober Black,sans-serif;font-size:.67em;line-height:36px;float:right;text-transform:uppercase;margin-right:0}.header .navigation a{color:#fff;text-transform:uppercase;text-decoration:none;margin-right:105px;transition:color .3s}.header .navigation a:last-child{margin-right:0}.header .navigation a:hover{color:#ed5e42}.header__author{font-size:1.25em;color:hsla(0,0%,100%,.6);display:block;width:100%;text-align:center;margin-top:285px;position:relative}.header__author:after{content:"";position:absolute;display:inline-block;width:100px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-30px;margin:0 auto}.header__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2.5em;margin:90px auto 0;text-align:center;max-width:650px}.main{margin-right:375px;float:left}.main .authorBlock{text-align:center;width:300px;margin:90px auto 120px;background:url(img/avatar.png) no-repeat top;padding-top:120px;position:relative;line-height:1em}.main .authorBlock__name{display:block;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em}.main .authorBlock__status{color:rgba(0,0,0,.6)}.main .authorBlock__date,.main .authorBlock__status{display:block;font-size:.58em}.main .authorBlock__date b{font-family:MuseoSansCyrl-900,sans-serif}.main .authorBlock:after{content:"";position:absolute;display:inline-block;width:50px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-50px;margin:0 auto}.main__text{font-size:1em;line-height:1.2em;margin-bottom:50px}.main__text-bold{font-family:MuseoSansCyrl-900,sans-serif}.main__text-red{color:red}.main__text-red a{text-decoration:none;color:inherit}.main__text-red a:hover{text-decoration:underline}.main__text-bordered{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;line-height:115px;border-top:4px solid #000;border-bottom:4px solid #000}.main__img{display:block;margin:0 auto 50px}.main__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2em;margin:130px auto;text-align:center}.main__list li{counter-increment:a;margin-bottom:15px}.main__list li:before{margin-right:10px;content:counter(a) ")"}.main__list li:before,.main__orderLink{font-family:MuseoSansCyrl-900,sans-serif}.main__orderLink{font-size:.75em;line-height:73px;display:block;margin:70px auto;width:320px;height:73px;border-radius:36.5px;-moz-border-radius:36.5px;-webkit-border-radius:36.5px;background-color:#282828;text-decoration:none;color:#fff;text-align:center;transition:background-color .3s}.main__orderLink:hover{background-color:#ed5e42}.main__orderLink-comm{padding-left:20px;float:left;background:#ed5e42 url(img/orderLink-icon.png) no-repeat 40px}.main__orderLink-comm:hover{background-color:#282828}.main .comments__social{display:block}.main .comments__title{font-family:Glober Black,sans-serif;font-size:1.25em;color:#83a79e;margin:50px auto;position:relative;display:inline-block}.main .comments__title:after{content:"23";position:absolute;right:-60px;top:50%;margin-top:-25px;font-size:.75em;line-height:52px;text-align:center;width:45px;height:45px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;background-color:#83a79e;color:#fff}.main .comments .comment{padding:35px 0;border-bottom:2px solid #ededed}.main .comments .comment .person{float:left;width:125px;margin-right:20px;text-align:center}.main .comments .comment .person__img{display:inline-block;width:48px;height:48px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden}.main .comments .comment .person__name{font-family:MuseoSansCyrl-900,sans-serif;font-size:.5em;display:block;margin-top:15px;text-align:center}.main .comments .comment__text{font-size:.75em;min-height:80px;margin-left:145px;position:relative}.main .comments .comment__text p{padding-top:10px;padding-bottom:20px;max-width:650px}.main .comments .comment__text a{font-family:MuseoSansCyrl-900,sans-serif;position:absolute;bottom:0;left:0;font-size:.875rem;color:#000;transition:color .3s}.main .comments .comment__text a:hover{color:#ed5e42}.main .comments .comment__text span{position:absolute;color:rgba(0,0,0,.6);font-size:.875rem;bottom:0;left:135px}.main .comments .comment__text img{margin:0 auto 20px}.sidebar{float:right;margin-left:-320px;width:320px;position:absolute;top:0;bottom:0;right:15px;padding-top:40px}.sidebar__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;text-transform:uppercase;margin:50px auto}.sidebar img{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-right:25px;margin-bottom:35px;transition:transform .2s cubic-bezier(.68,-.55,.27,1.55)}.sidebar img:hover{-webkit-transform:scale(1.2);transform:scale(1.2)}.sidebar .feedItem{position:relative;margin-bottom:50px}.sidebar .feedItem__left{margin-right:120px}.sidebar .feedItem__left h3{font-size:1rem;color:#000;position:relative;margin-bottom:25px}.sidebar .feedItem__left h3:after{content:"";position:absolute;bottom:-10px;left:0;width:100%;height:2px;background:#222}.sidebar .feedItem__left h3 a{color:inherit;text-decoration:none;transition:color .3s}.sidebar .feedItem__left h3 a:hover{color:#ed5e42}.sidebar .feedItem__left span{font-size:.5em;float:left}.sidebar .feedItem__left span.rdate{float:right}.sidebar .feedItem__right{font-family:MuseoSansCyrl-900,sans-serif;width:100px;margin-left:-100px;position:absolute;top:0;bottom:0;right:0;text-align:center}.sidebar .feedItem__right span{display:block;font-size:1.25em;color:#8ff060;text-align:center}.sidebar .feedItem__right a{color:#000;font-size:.5em}.sidebar .showMore{font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;text-decoration:none;color:#000;background:url(img/arrow.png) no-repeat 100%;padding-right:35px;transition:color .2s}.sidebar .showMore:hover{color:#ed5e42}.sidebar .discuss{font-size:.58em;line-height:1.2em;margin-bottom:25px;display:block}.sidebar .discuss a{font-family:MuseoSansCyrl-900,sans-serif;color:inherit;transition:color .2s}.sidebar .discuss a:hover{color:#ed5e42}.footer{text-align:center;background-color:#000;color:#fff;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;min-height:130px;line-height:130px}@media (min-width:1919px){.header{background-size:cover}.header .logo{margin-left:-140px}.header .navigation{margin-right:-100px}}@media (max-width:1460px){.container{width:1200px}}@media (max-width:1220px){.container{width:940px}}@media (max-width:960px){.container{width:90%}.header .navigation a{margin-right:30px}.main{margin-right:0;float:none}.main .authorBlock{margin:30px auto 90px}.main__title{margin:50px auto}.main__orderLink-comm,.sidebar{float:none}.sidebar{margin:0 auto 100px;position:static;clear:both;padding-top:0;width:100%}.sidebar__bloggers{text-align:center}.sidebar img{margin-right:10px;margin-left:10px}}@media (max-width:560px){.container{width:100%}.header{background-position-x:-690px}.header__title{font-size:2em}.header .logo{display:block;margin:0 auto}.header .navigation{float:none;display:block;text-align:center;margin-top:30px}.header .navigation a{margin-right:15px;margin-left:15px}.main .authorBlock{width:100%}.main__text{font-size:1rem;margin-bottom:30px}.main__text-bordered{line-height:80px}.main__title{font-size:1.5rem;margin:30px auto}.main__list{font-size:1rem}.main__orderLink{width:100%;max-width:320px;font-size:1rem;margin:30px auto}.main .comments__title{margin:40px auto 20px}.main .comments .comment .person{width:100px;float:none;margin:0 auto}.main .comments .comment__text{float:none;margin:20px auto 0}.main .comments .comment__text p{font-size:1rem;line-height:1.2rem;padding-bottom:30px}.sidebar__title{font-size:1.5rem;text-align:center}}
</style>
</head>

<body>
    <header class="header">
        <div class="container">
            <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/bestblog.png" alt="BestBlog" class="logo"></a>
            <nav class="navigation">
                <a href="policy.php"> POLITYKA </a>
                <a href="contacts.php"> KONTAKTY </a>
            </nav>
            <span class="header__author">Blog Stefan</span>
            <h1 class="header__title">Jak osiągnąć wyrzeźbioną sylwetkę w ciągu miesiąca?</h1>
        </div>
    </header>
    <div class="container">
        <div class="main">
            <div class="authorBlock">
                <span class="authorBlock__name">Stefan</span>
                <span class="authorBlock__status">Autor</span>
                <span class="authorBlock__date">Opublikowany&nbsp;<b class="rstart"><w class="prDate"></w></b></span>
            </div>
            <p class="main__text">
                Ja też w swoim czasie, tak bardzo jak Ty, chciałem zbudować piękną muskularną sylwetkę, bicepsy, uzyskać widoczne mięśni brzucha i resztę. Ja spędziłem 2 lata, aby znaleźć naprawdę skuteczną metodę na muskularną sylwetkę. Co tylko nie próbowałem: chodziłem na siłownię, robiłem specjalne ćwiczenia, które polecali "guru" bodybuildingu, biegałem na bieżni, ale... rezultat był prawie niezauważalny, mięśnie nadal były ukryte pod fałdami tłuszczu, a o bicepsach można było tylko pomarzyć.
            </p>
            <img src="img/img1.jpg" alt="article image" class="main__img">
            <p class="main__text">
                I dosłownie dwa miesiące temu natknąłem się na nowość o tym, że Jason Statham za kilka tygodni do rozpoczęcia zdjęć w nowym filmie wyszlifował sobie figurę.
            </p>
            <p class="main__text">
                Zacząłem swoje dochodzenie, dzięki mojemu zawodowi (jestem reporterem zagranicznego kanału TV) mam przyjaciół i kolegów w USA, którzy mi w tym pomogli. Po 2 tygodniach okazało się, że Statham prowadzi bardzo aktywny tryb życia - on oczywiście chodził na siłownię, ale bywał tam dość krótko, większą część czasu spędzał na planie, spotkaniach... Długo zastanawialiśmy się: "Jak można ze wszystkim nadążać?" - głowili się moi koledzy, po tym wszystkim moi przyjaciele stracili nadzieję i postanowili wprost spytać aktora o jego metodę, ku naszemu zdziwieniu Jason okazał się bardzo pozytywnym facetem i wyłożył wszystkie karty na stół... Dzięki jego metodzie można szybko i nie umierając przez 2-3 godziny na siłowni uzyskać seksowną figurę w dwa tygodnie! Na podstawie jego programu stworzyłem swój własny i teraz opowiem wam wszystko, mam nadzieję, że ta informacja i moje bezcenne doświadczenie przyda się wam i zmieni wasze życie!
            </p>
            <h2 class="main__title">Nowoczesna metoda na przyrost mięśni</h2>
            <p class="main__text mb20">- więcej o którym teraz opowiem.</p>
            <p class="main__text">Ten sposób jest <strong class="main__text-bold">najtańszy i najszybszy</strong> (na tę chwilę)! Aby wywalczyć umięśnioną, piękną sylwetkę, niepotrzebne są ćwiczenia do utraty przytomności, ale tylko, jeśli stosujesz białkowy koncentrat białka serwatkowego, który da ci oszałamiający wynik. W 21 wieku, technologia poszła do przodu od dawna!</p>
            <p class="main__text"><strong class="main__text-bold"><span class="main__text-red"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">PowerUp Premium</a></span> to koktajl proteinowy </strong> - wspaniały przykład rozwoju technologicznego w naszym stuleciu. Dzięki składowi koktajlu, twój wysiłek będzie podwojony, i niewielki wysiłek fizyczny twój organizm oceni jak kilkugodzinny trening.</p>
            <p class="main__text">W efekcie <strong class="main__text-bold">bez jakiegokolwiek dodatkowego wysiłku</strong> wytrenujesz swoje mięśnie za pomocą koktajlu. Wykorzystanie tego napoju pomoże uzyskać muskularną sylwetkę w warunkach domowych <strong class="main__text-bold">zarówno mężczyznom, jak i kobietom</strong>.</p>
            <p class="main__text">
                Wystarczy zażywać go przed treningiem, wzięciem na siłownię lub domowym treningiem i wspaniały wynik jest gwarantowany.
            </p>
            <p class="main__text">
                Koktajl działa od razu w 4 kierunkach:
            </p>
            <ol class="main__list">
                <li>Pompowanie mięśni (kulturystyka) </li>
                <li>Redukcja tłuszczu, poprawa napięcia mięśniowego ciała</li>
                <li>Przypływ witalności i energii</li>
                <li>Zwiększenie wytrzymałości i siły fizycznej.</li>
            </ol>
            <p class="main__text">
                Po pierwszym tygodniu stosowania koktajlu, <strong class="main__text-bold">mięśnie wyraźnie się umocniły</strong>. Tłuszcz w dolnej części brzucha zaczął powoli odchodzić, zjawili się bicepsy, a po miesiącu uprawiania wyraźnie zaczęła zjawiać się właśnie ta rzeźba sylwetki!
            </p>
            <img src="img/img2.jpg" alt="article image" class="main__img">
            <h2 class="main__title">OTO MÓJ PROGRAM ĆWICZEŃ:</h2>
            <p class="main__text mb20"><strong class="main__text-bold">Poniedziałek </strong> - przed pracą 20-30 minut porannej wprawki, jem śniadanie oraz idę do pracy.</p>
            <p class="main__text mb20"><strong class="main__text-bold">Środa </strong> - po pracy trenuję 20 minut.</p>
            <p class="main__text mb20"><strong class="main__text-bold">Piątek </strong> - rano 20 minut treningu.</p>
            <p class="main__text">Czyli w sumie robię ćwiczenia fizyczne 3 razy w tygodniu przez 15-20 minut. Czasami również chodzę na siłownię. Koktajl posiada wyraźny efekt tonizujący, co czynu ćwiczenia podwójnie przyjemnymi.</p>
            <p class="main__text">Zamówiłem koktajl na sprawdzonej <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">stronie</a>. Cena jest równa kosztowi miesięcznego abonamentu na siłownię, albo dwóm biletom do kina. Wybierz sam, czy to dużo, czy nie, biorąc pod uwagę, ile pieniędzy zazwyczaj można wyrzucić na sportowe jedzenie Jeśli chodzi o dostawę - przesyłka jest dostarczana pocztą za pobraniem.</p>
            <p class="main__text">No cóż, mam nadzieję, że te informacje były dla ciebie przydatne i że uda ci się nareszcie uzyskać wymarzoną, muskularną sylwetkę w kilka tygodni! Powodzenia!</p>
            <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="main__orderLink">Zamów koktajl białkowy!</a>
            <p class="main__text main__text-bordered">Zaoszczędzisz 5 minut</p>
            <div class="comments">
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/social_networks.png" alt="social bullets" class="comments__social"></a>
                <h2 class="comments__title">Komentarzy</h2>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/16.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Kuba</span>
                    </div>
                    <div class="comment__text">
                        <p>Chodziłem do siłowni przez okres około dwóch lat, ale nic nie pomogło. Brałem koktajl w ciągu 3 tygodni i już widzę wynik !!!!!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>4 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/17.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Romek</span>
                    </div>
                    <div class="comment__text">
                        <p>Dziękuję, wczoraj odebrałem paczkę na poczcie, wszystko jest ok. Już zacząłem brać. Co za przyjemne uczucie witalności i energii!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>6 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/18.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Krystian</span>
                    </div>
                    <div class="comment__text">
                        <p>Mój brat mieszka w USA i mówi, że tam wysoko cenią tę mieszankę, hmm ...</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>7 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/19.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Alinka</span>
                    </div>
                    <div class="comment__text">
                        <p>Cześć! Jestem pod wrażeniem! Świetna robota! Ja też zamówię.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>9 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/20.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Paweł</span>
                    </div>
                    <div class="comment__text">
                        <p>Ćwiczę już drugi tydzień, i taką rzeźbę już mam! Waga spadła o 2-3 kg! Cieszę się bardzo.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>11 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/21.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Alicja</span>
                    </div>
                    <div class="comment__text">
                        <p>Cześć! Już zrobiłam zamówienie, czekam na dostawę :)</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>12 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/22.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Olgierd</span>
                    </div>
                    <div class="comment__text">
                        <p>Zaskakująco, dobrze zrobione! Fajne wyniki.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>15 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/23.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Aleksandra</span>
                    </div>
                    <div class="comment__text">
                        <p>Witam! Biorę już drugi tydzień i tłuszcz nadal znikać! Polecam go wszystkim.</p>
                        <img src="img/review-3.png" alt="review image">
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>16 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/24.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Kinga</span>
                    </div>
                    <div class="comment__text">
                        <p>W Stanach produkt ten istnieje już od kilku lat, prawdopodobnie wszyscy formują swoje sylwetki dzięki niemu! Zamawiam.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>19 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/25.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Zośka</span>
                    </div>
                    <div class="comment__text">
                        <p>Cześć! Ja tylko miesiąc biorę koktajl, a wrażenie takie, niby od lat uprawiam fitness!! Brak słów! Wielkie dzięki !</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>21 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/1.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Paweł</span>
                    </div>
                    <div class="comment__text">
                        <p>Piję tydzień i już mam rezultaty. Pod względem wizualnym zniknął brzuch i zaczęli pojawiać się bicepsy!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>22 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/2.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Ryszard</span>
                    </div>
                    <div class="comment__text">
                        <p>Ja spróbowałem i mi się podobało! Wcześniej brakowało mi sił, ale z tym koktajlem odczuwam przypływ energii. Ponadto tłuszcz zniknął, ciało zrobiło się mocniejsze i mięśnie są już widoczne, jestem po prostu sexy!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>25 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/3.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Jacek</span>
                    </div>
                    <div class="comment__text">
                        <p>Ja też znam ten środek, kupiłem niedawno. Na mojej sylwetce tłuszcz nie pozostawił nawet śladu.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>34 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/4.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Jarek</span>
                    </div>
                    <div class="comment__text">
                        <p>Moja żona była w siódmym niebie ze szczęścia. Ona mówi, że nawet siłownia fitness nie jest w stanie zrobić takiej super rzeźby, jak ten koktajl w domu! I to prawie w ciągu 3 tygodni! Od siebie muszę dodać, że to jest naprawdę zauważalny efekt, nawet po 1-2 tygodniach.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>39 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/5.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Irek</span>
                    </div>
                    <div class="comment__text">
                        <p>Spróbowałem ten produkt. Muszę powiedzieć, że ta metoda działa. Zamówiłem z tej witryny, bez przedpłaty, wszystko bardzo szybko.</p>
                        <img src="img/review-1.png" alt="review image">
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>41 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/6.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Tomek</span>
                    </div>
                    <div class="comment__text">
                        <p>W ciągu dwóch tygodni usunąłem cały tłuszcz. Teraz wracam do pracy po urlopie, koledzy będą w szoku.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>44 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/16_001.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Andrzej</span>
                    </div>
                    <div class="comment__text">
                        <p>Chłopaki, mam nadzieję, że osiągniecie taki sam efekt, jak u mnie. Sylwetkę mam jak w kinie! Wreszcie, mam mięśnie! Gorąco polecam ten produkt.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>49 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/8.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Kaśka</span>
                    </div>
                    <div class="comment__text">
                        <p>Ja też znam tę metodę. Mój wujek pil ten koktajl i stał się podobny do Schwarzeneggera.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>50 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/9.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Mirek</span>
                    </div>
                    <div class="comment__text">
                        <p>Jest to świetny napój, a przede wszystkim -on jest prosty i łatwy w użyciu.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>51 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/10.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Kuba</span>
                    </div>
                    <div class="comment__text">
                        <p>Fajna rzecz, dzięki niej zmogłem wybudować mięśnie.  Zrzuciłem 2 kg. Nie dużo, ale widać.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>54 minut temu</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/11.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Grzesiek</span>
                    </div>
                    <div class="comment__text">
                        <p>Cześć. Moja żona kupiła ten koktajl proteinowy, a ja, oczywiście, tylko się skrzywiłem, bo sądziłem, że ona znowu wpadła w sidła gównianej reklamy... ale po dwóch tygodniach przeprosiłem ją skruszony</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>Godzinę temu </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/13.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Ryszard</span>
                    </div>
                    <div class="comment__text">
                        <p>Dziękuję za info. Zamówię jak najszybciej </p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>Godzinę temu </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/11_001.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Zofia</span>
                    </div>
                    <div class="comment__text">
                        <p>Akurat to, co trzeba!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dodaj komentarz</a>
                        <span>Dwie godziny temu </span>
                    </div>
                </div>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="main__orderLink main__orderLink-comm">Napisz komentarz</a>
            </div>
        </div>
        <aside class="sidebar">
            <h2 class="sidebar__title">BLOGERS ONLINE</h2>
            <div class="sidebar__bloggers">
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/1_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/2_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/3_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/4_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/5_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/6_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/7_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/8_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/9_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/10_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/11_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/12_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/13_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/14_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/15_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/16_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/17_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/18_001.jpg" alt="blogger"></a>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/19_001.jpg" alt="blogger"></a>
            </div>

            <h2 class="sidebar__title">FEED</h2>
            <div class="feedItem">
                <div class="feedItem__left clearfix">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Mięśnie brzucha za  2 tygodnia</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 16:04</span>
                </div>
                <div class="feedItem__right">
                    <span>+145</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">194 komentarza</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Zobacz zdjęcia</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 05:18</span>
                </div>
                <div class="feedItem__right">
                    <span>+35</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">18 komentarza</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Ale heca Alitalia dziwi...</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 21:04</span>
                </div>
                <div class="feedItem__right">
                    <span>+11</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">64 komentarza</a>
                </div>
            </div>
             <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">W Tajlandii nie pada deszcz! Na reszcie!</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 15:28</span>
                </div>
                <div class="feedItem__right">
                    <span>+91</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">33 komentarza</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Kto chce ze mną pojechać nad morze?</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 15:28</span>
                </div>
                <div class="feedItem__right">
                    <span>+19</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">98 komentarza</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Moja żona zamierza kopić kota..</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 12:37</span>
                </div>
                <div class="feedItem__right">
                    <span>+31</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">51 komentarza</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Jak nauczyłem się włoskiego</a></h3>
                    <span class="author">Stefan </span>
                    <span class="rdate"><w class="commm"></w> - 15:35</span>
                </div>
                <div class="feedItem__right">
                    <span>+73</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">17 komentarza</a>
                </div>
            </div>
            <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="showMore">show more</a>
            <h2 class="sidebar__title mt125">Discusión</h2>
            <span class="discuss">Marek&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Chodziłem na salę treningową przez 2 lata, ale</a></span>
            <span class="discuss">Mieczysław&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Dziękuję za artykuł Ugo, wczoraj zabrałem swoją paczkę</a></span>
            <span class="discuss">Grzegorz&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"> Mój brat mieszka w USA i mówi, że tam</a></span>
            <span class="discuss">Agnieszka&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Witam! Robi duże wrażenie! Brawo! A teraz zrobię zamówienie.</a></span>
            <span class="discuss">Krystian&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Trenuję już dwa tygodnie i moje mięśnie są już widoczne.</a></span>
            <span class="discuss">Malwina&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"> Cześć! Już zrobiłam zamówienie, teraz czekam na przesyłkę. :)</a></span>
            <span class="discuss">Marian&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"> Szok, zuch! ..</a></span>
            <span class="discuss">Elena&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Cześć! Już trenuję kilka tygodni, a tłuszcz</a></span>
            <span class="discuss">Natalia&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">W Stanach Zjednoczonych kilka lat temu</a></span>
            <span class="discuss">Zofia&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"> Cześć! Piję koktajl białkowy i robię</a></span>
        </aside>
    </div>
    <footer class="footer">
        Blog Stefan <span class="ryear">2017</span> ©
    </footer>
	
    <script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
    <script src="https://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
    <script>
    blockMouseRight();
    printCommentsDate('.commm');
    printDate('.prDate',-9);
    </script>
</body>

</html>
