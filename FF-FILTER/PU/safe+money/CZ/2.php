<?php
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
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Blog Karla</title>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
  	<link href="favicon.png" rel="icon" type="image/x-icon">
<style media="all">
  *{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}@font-face{font-family:Glober Black;src:url(fonts/GloberBlack.eot);src:url(fonts/GloberBlack.woff2) format("woff2"),url(fonts/GloberBlack.woff) format("woff"),url(fonts/GloberBlack.ttf) format("truetype"),url(fonts/GloberBlack.svg#GloberBlack) format("svg"),url(fonts/GloberBlack.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-500;src:url(fonts/MuseoSansCyrl-500.eot);src:url(fonts/MuseoSansCyrl-500.woff2) format("woff2"),url(fonts/MuseoSansCyrl-500.woff) format("woff"),url(fonts/MuseoSansCyrl-500.ttf) format("truetype"),url(fonts/MuseoSansCyrl-500.svg#MuseoSansCyrl-500) format("svg"),url(..fonts/MuseoSansCyrl-500.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-900;src:url(fonts/MuseoSansCyrl-900.woff) format("woff"),url(fonts/MuseoSansCyrl-900.ttf) format("truetype"),url(fonts/MuseoSansCyrl-900.svg#MuseoSansCyrl-900) format("svg");font-weight:400;font-style:normal}body{background:#fff;font-family:MuseoSansCyrl-500,sans-serif;font-size:24px}h1{font-size:2.5em;color:#fff}img{max-width:100%}.clearfix:after{content:"";clear:both;display:inline-block}.mb20{margin-bottom:20px!important}.mt125{margin-top:125px!important}.container{width:1440px;margin:0 auto;position:relative;padding:0 15px}.container:after{content:"";clear:both;display:block}.header{background:#fff url(img/header-back.jpg) no-repeat top;padding-top:65px;min-height:1000px}.header .logo{margin-left:0}.header .navigation{font-family:Glober Black,sans-serif;font-size:.67em;line-height:36px;float:right;text-transform:uppercase;margin-right:0}.header .navigation a{color:#fff;text-transform:uppercase;text-decoration:none;margin-right:105px;transition:color .3s}.header .navigation a:last-child{margin-right:0}.header .navigation a:hover{color:#ed5e42}.header__author{font-size:1.25em;color:hsla(0,0%,100%,.6);display:block;width:100%;text-align:center;margin-top:285px;position:relative}.header__author:after{content:"";position:absolute;display:inline-block;width:100px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-30px;margin:0 auto}.header__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2.5em;margin:90px auto 0;text-align:center;max-width:650px}.main{margin-right:375px;float:left}.main .authorBlock{text-align:center;width:300px;margin:90px auto 120px;background:url(img/avatar.png) no-repeat top;padding-top:120px;position:relative;line-height:1em}.main .authorBlock__name{display:block;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em}.main .authorBlock__status{color:rgba(0,0,0,.6)}.main .authorBlock__date,.main .authorBlock__status{display:block;font-size:.58em}.main .authorBlock__date b{font-family:MuseoSansCyrl-900,sans-serif}.main .authorBlock:after{content:"";position:absolute;display:inline-block;width:50px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-50px;margin:0 auto}.main__text{font-size:1em;line-height:1.2em;margin-bottom:50px}.main__text-bold{font-family:MuseoSansCyrl-900,sans-serif}.main__text-red{color:red}.main__text-red a{text-decoration:none;color:inherit}.main__text-red a:hover{text-decoration:underline}.main__text-bordered{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;line-height:115px;border-top:4px solid #000;border-bottom:4px solid #000}.main__img{display:block;margin:0 auto 50px}.main__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2em;margin:130px auto;text-align:center}.main__list li{counter-increment:a;margin-bottom:15px}.main__list li:before{margin-right:10px;content:counter(a) ")"}.main__list li:before,.main__orderLink{font-family:MuseoSansCyrl-900,sans-serif}.main__orderLink{font-size:.75em;line-height:73px;display:block;margin:70px auto;width:320px;height:73px;border-radius:36.5px;-moz-border-radius:36.5px;-webkit-border-radius:36.5px;background-color:#282828;text-decoration:none;color:#fff;text-align:center;transition:background-color .3s}.main__orderLink:hover{background-color:#ed5e42}.main__orderLink-comm{padding-left:20px;float:left;background:#ed5e42 url(img/orderLink-icon.png) no-repeat 40px}.main__orderLink-comm:hover{background-color:#282828}.main .comments__social{display:block}.main .comments__title{font-family:Glober Black,sans-serif;font-size:1.25em;color:#83a79e;margin:50px auto;position:relative;display:inline-block}.main .comments__title:after{content:"23";position:absolute;right:-60px;top:50%;margin-top:-25px;font-size:.75em;line-height:52px;text-align:center;width:45px;height:45px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;background-color:#83a79e;color:#fff}.main .comments .comment{padding:35px 0;border-bottom:2px solid #ededed}.main .comments .comment .person{float:left;width:125px;margin-right:20px;text-align:center}.main .comments .comment .person__img{display:inline-block;width:48px;height:48px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden}.main .comments .comment .person__name{font-family:MuseoSansCyrl-900,sans-serif;font-size:.5em;display:block;margin-top:15px;text-align:center}.main .comments .comment__text{font-size:.75em;min-height:80px;margin-left:145px;position:relative}.main .comments .comment__text p{padding-top:10px;padding-bottom:20px;max-width:650px}.main .comments .comment__text a{font-family:MuseoSansCyrl-900,sans-serif;position:absolute;bottom:0;left:0;font-size:.875rem;color:#000;transition:color .3s}.main .comments .comment__text a:hover{color:#ed5e42}.main .comments .comment__text span{position:absolute;color:rgba(0,0,0,.6);font-size:.875rem;bottom:0;left:150px}.main .comments .comment__text img{margin:0 auto 20px}.sidebar{float:right;margin-left:-320px;width:320px;position:absolute;top:0;bottom:0;right:15px;padding-top:40px}.sidebar__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;text-transform:uppercase;margin:50px auto}.sidebar img{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-right:25px;margin-bottom:35px;transition:transform .2s cubic-bezier(.68,-.55,.27,1.55)}.sidebar img:hover{-webkit-transform:scale(1.2);transform:scale(1.2)}.sidebar .feedItem{position:relative;margin-bottom:50px}.sidebar .feedItem__left{margin-right:120px}.sidebar .feedItem__left h3{font-size:1rem;color:#000;position:relative;margin-bottom:25px}.sidebar .feedItem__left h3:after{content:"";position:absolute;bottom:-10px;left:0;width:100%;height:2px;background:#222}.sidebar .feedItem__left h3 a{color:inherit;text-decoration:none;transition:color .3s}.sidebar .feedItem__left h3 a:hover{color:#ed5e42}.sidebar .feedItem__left span{font-size:.5em;float:left}.sidebar .feedItem__left span.rdate{float:right}.sidebar .feedItem__right{font-family:MuseoSansCyrl-900,sans-serif;width:100px;margin-left:-100px;position:absolute;top:0;bottom:0;right:0;text-align:center}.sidebar .feedItem__right span{display:block;font-size:1.25em;color:#8ff060;text-align:center}.sidebar .feedItem__right a{color:#000;font-size:.5em}.sidebar .showMore{font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;text-decoration:none;color:#000;background:url(img/arrow.png) no-repeat 100%;padding-right:35px;transition:color .2s}.sidebar .showMore:hover{color:#ed5e42}.sidebar .discuss{font-size:.58em;line-height:1.2em;margin-bottom:25px;display:block}.sidebar .discuss a{font-family:MuseoSansCyrl-900,sans-serif;color:inherit;transition:color .2s}.sidebar .discuss a:hover{color:#ed5e42}.footer{text-align:center;background-color:#000;color:#fff;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;min-height:130px;line-height:130px}@media (min-width:1919px){.header{background-size:cover}.header .logo{margin-left:-140px}.header .navigation{margin-right:-100px}}@media (max-width:1460px){.container{width:1200px}}@media (max-width:1220px){.container{width:940px}}@media (max-width:960px){.container{width:90%}.header .navigation a{margin-right:30px}.main{margin-right:0;float:none}.main .authorBlock{margin:30px auto 90px}.main__title{margin:50px auto}.main__orderLink-comm,.sidebar{float:none}.sidebar{margin:0 auto 100px;position:static;clear:both;padding-top:0;width:100%}.sidebar__bloggers{text-align:center}.sidebar img{margin-right:10px;margin-left:10px}}@media (max-width:560px){.container{width:100%}.header{background-position-x:-690px}.header__title{font-size:2em}.header .logo{display:block;margin:0 auto}.header .navigation{float:none;display:block;text-align:center;margin-top:30px}.header .navigation a{margin-right:15px;margin-left:15px}.main .authorBlock{width:100%}.main__text{font-size:1rem;margin-bottom:30px}.main__text-bordered{line-height:80px}.main__title{font-size:1.5rem;margin:30px auto}.main__list{font-size:1rem}.main__orderLink{width:100%;max-width:320px;font-size:1rem;margin:30px auto}.main .comments__title{margin:40px auto 20px}.main .comments .comment .person{width:100px;float:none;margin:0 auto}.main .comments .comment__text{float:none;margin:20px auto 0}.main .comments .comment__text p{font-size:1rem;line-height:1.2rem;padding-bottom:30px}.sidebar__title{font-size:1.5rem;text-align:center}}
</style>
</head>

<body>
    <header class="header">
        <div class="container">
            <a href="<?php echo $url; ?>" target="_blank"><img src="img/bestblog.png" alt="BestBlog" class="logo"></a>
            <nav class="navigation">
                <a href="<?php echo $url; ?>" target="_blank">NEW POST</a>
                <a href="<?php echo $url; ?>" target="_blank">POPULAR</a>
                <a href="<?php echo $url; ?>" target="_blank">RATING</a>
            </nav>
            <span class="header__author">Blog Karla</span>
            <h1 class="header__title">Jak dosáhnout svalové postavy za měsíc?</h1>
        </div>
    </header>
    <div class="container">
        <div class="main">
            <div class="authorBlock">
                <span class="authorBlock__name">Karl</span>
                <span class="authorBlock__status">Autor</span>
                <span class="authorBlock__date">Publikováno&nbsp;<b class="rstart"><w class="prDate"></w></b></span>
            </div>
            <p class="main__text">
                Kdysi, stejně jako vy, chtěl jsem svalovou postavu, bicepsy a tak dále. Strávil jsem 2 roky vyhledáním opravdu efektivního způsobu na reliéf. Vyzkoušel jsem spoustu metod: navštěvoval jsem posilovnu, dělal jsem speciální cvičení, které mi radili "guru" bodybuildingu, běhal jsem na běžecké dráze, ale... výsledek skoro nebyl viděn, břišní svaly jako dřív se skrývaly pod vrstvou tuku, a na biceps nebyl žádný náznak.
            </p>
            <img src="img/img1.jpg" alt="article image" class="main__img">
            <p class="main__text">
               A jen před pár měsíci jsem narazil na novinu o tom, že Jason Statham za pár týdnů před začátkem natáčení nového filmu trochu namakal svou postavu.
            </p>
            <p class="main__text">
                Začal jsem vyšetřování, díky mé profese (jsem reportér zahraničního televizního kanálu) jsem měl přátele i známé v USA, kteří mi v tom pomohli.
                Po uběhnutí 2 týdnů se ukázalo, že Statham vede velmi aktivní život, určitě navštěvoval posilovnu, ale nedlouze, většinu času strávil filmováním, na setkáních...
                Byli jsme velmi zmatené, "Jak je možné všechno stihnout"? vykřikovali mé kolegy, a pak  mé přátelé ztratili naději a rozhodli se zeptat rovnou herce na jeho metodu. Kupodivu, Jason se ukázal jako velmi společenský člověk, a položil všechny své karty na stůl...
                Díky této metodě je možné rychle a bez strávení 2-3 hodin v posilovně udělat sexy postavu za pár týdnů! Na základě jeho programu jsem udělal vlastní a teď budu vysvětlovat vše pro vás, doufám, že táto informace a mé neocenitelné zkušenosti budou vám hodit a změní váš život!
            </p>
            <h2 class="main__title">Moderní metoda zvětšení svalů</h2>
            <p class="main__text mb20">- o které detailně povím právě teď.</p>
            <p class="main__text">Tento způsob je nejlevnějším a nejrychlejším v daném okamžiku! Aby dosáhnout vymakaného krásného těla není potřeba v vyčerpávajících trénincích, tréninky jsou nutné, ale pouze spolu s koncentrátem syrovátkového proteinu, který má ohromující efekt.
            Je 21 století, technologie dávno se tlačí kupředu!</p>
            <p class="main__text"><strong class="main__text-bold"><span class="main__text-red"><a href="<?php echo $url; ?>" target="_blank">PowerUp Premium</a></span> je proteinový koktejl</strong> - je vynikajícím příkladem technologického rozvoje našeho století. Díky složení koktejlu, vaší úsilí budou zdvojnásobené a malá fyzická zátěž bude vnímána organismem jako několikahodinový výcvik.</p>
            <p class="main__text">V důsledku bez <strong class="main__text-bold">jakýchkoliv dalších zátěží</strong> budete trénovat svaly pomocí koktejlu. Použití tohoto nápoje napomůže dosáhnout reliéfní <strong class="main__text-bold">postavu doma mužům i ženám</strong>.</p>
            <p class="main__text">
                Stačí užívat ho před tréninkem, návštěvou posilovny nebo domácím tréninkem - a budete mít úžasný výsledek.
            </p>
            <p class="main__text">
                Koktejl funguje okamžitě ve 4 směrech:
            </p>
            <ol class="main__list">
                <li>nárůst svalů (bodybuilding)</li>
                <li>zmenšení tuků, zlepšení tonusu těla</li>
                <li>přibývání čilosti a vitality</li>
                <li>zvýšení vytrvalosti a fyzické síly.</li>
            </ol>
            <p class="main__text">
                Po prvním týdnu používání koktejlu <strong class="main__text-bold">svaly se výrazně posílily</strong>.Tuk v dolní častí břicha začal pomálu mizet, projevily se bicepsy, a po měsíci cvičení se výrazně projevil pravý reliéf postavy!
            </p>
            <img src="img/img2.jpg" alt="article image" class="main__img">
            <h2 class="main__title">Tady je můj tréninkový program:</h2>
            <p class="main__text mb20"><strong class="main__text-bold">Pondělí</strong> - 20-30 minutová rozcvička před práci, snídám, a jdu do práce.</p>
            <p class="main__text mb20"><strong class="main__text-bold">Středa</strong> - po práci mám 20 minutový trénink.</p>
            <p class="main__text mb20"><strong class="main__text-bold">Pátek</strong> - 20 minutový trénink ráno.</p>
            <p class="main__text">Jinými slovy, vcelku se trénuji 3krát týdně kolem 15-20 minut. Občas chodím do posilovny. Koktejl má výrazný tonizační účinek, díky čemu tréninky jsou dvakrát příjemnější.</p>
            <p class="main__text">Koktejl jsem si objednal na <a href="<?php echo $url; ?>" target="_blank">vyzkoušených webových stránkách</a>. Uvedená cena se rovná nákladům na abonmá v tělocvičnu na měsíc nebo dvou lístkům do kina. Rozhodněte sami - je to hodně nebo ne, vzhledem k tomu, kolik peněz je obvykle vyházeno na sportovní výživu. Co se týče dodávky, zásilka je posílaná poštou na dobírku.</p>
            <p class="main__text">Tak dobře, doufám, že táto informace byla pro vás užitečná a získáte, koneckonců, chtěnou reliefní postavu za pár týdnů! Hodně štěstí!</p>
            <a href="<?php echo $url; ?>" target="_blank" class="main__orderLink">Objednej si proteinový koktejl!</a>
            <p class="main__text main__text-bordered">Ušetříte 5 minut</p>
            <div class="comments">
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/social_networks.png" alt="social bullets" class="comments__social"></a>
                <h2 class="comments__title">Komentářů</h2>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/16.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Jiří </span>
                    </div>
                    <div class="comment__text">
                        <p>Navštěvoval jsem posilovnu po dobu kolem dvou let, ale nic nepomáhalo. Užíval jsem koktejl během třech týdnů, a už vidím výsledek!</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 4 minutami</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/17.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Štefan </span>
                    </div>
                    <div class="comment__text">
                        <p>Děkuji, včera jsem obdržel zásilku, všechno je v pořádku.
Už jsem začal užívat.
Co je to za příjemný pocit vitality a energie!
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 6 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/18.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Růžena </span>
                    </div>
                    <div class="comment__text">
                        <p>Můj bratr žije v Americe a říká, že táto směs je tam vysoce ceněná, no teda...</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 7 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/19.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Ivana </span>
                    </div>
                    <div class="comment__text">
                        <p>Ahoj!
Na mě udělalo dojem! Skvělá práce! Taky si objednám.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 9 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/20.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Štefan </span>
                    </div>
                    <div class="comment__text">
                        <p>Cvičím po druhý týden, už jsem dostal takový reliéf!
Váha se snížila o 2-3 kg!
Jsem velice rád.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 11 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/21.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Pavlína </span>
                    </div>
                    <div class="comment__text">
                        <p>Ahoj!
Už jsem si objednala, čekám na zásilku :)
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 12 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/22.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Rudolf </span>
                    </div>
                    <div class="comment__text">
                        <p>Překvapivě, šikulka!
Dobré výsledky.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 15 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/23.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Marie </span>
                    </div>
                    <div class="comment__text">
                        <p>Čau! Užívám už druhý týden a tuk pokračuje mizet!
Doporučuji ho všem.
</p>
                        <img src="img/review-3.png" alt="review image">
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 16 minutami</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/24.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Karolína </span>
                    </div>
                    <div class="comment__text">
                        <p>V USA ten výrobek existuje již několik let, patrně všichni takhle budují postavy!
Objednávám si.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>19 minuti fa</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/25.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Martina </span>
                    </div>
                    <div class="comment__text">
                        <p>Ahoj!
Používám měsíc ten koktejl, ale zdá se, že v průběhu let dělám fitness!!
Nemám slov!
Děkuji!
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 21 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/1.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Štefan </span>
                    </div>
                    <div class="comment__text">
                        <p>Piji týden a už mám výsledky.
Zrakově jsem odstranil břicho, a začaly se objevovat bicepsy!
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 22 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/2.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Vladimír </span>
                    </div>
                    <div class="comment__text">
                        <p>Zkusil jsem to, a líbilo se mi!
Dříve jsem neměl sil, ale pomoci tohoto koktejlu cítím příval energie.
Kromě toho, tuk je pryč, tělo se stalo silnější, a svaly jsou již viditelné, stal jsem prostě sexy!
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 25 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/3.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Matěj </span>
                    </div>
                    <div class="comment__text">
                        <p>Taky vím tento prostředek, koupil jsem nedávno.
V mým těle není stopy po tuku.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 34 minutami</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/4.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Tomáš </span>
                    </div>
                    <div class="comment__text">
                        <p>Má žena je v sedmém nebi.
Říká, že dokonce i fitness kluby nemohou udělat podobný reliéf jak ten koktejl doma!
A to je téměř za 3 týdny!
Musím dodat, že je to doopravdy patrný efekt,  a to i po 1-2 týdnech.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 39 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/5.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Petr </span>
                    </div>
                    <div class="comment__text">
                        <p>Zkusil jsem ten produkt.
Hned řeknu - táto metoda funguje.
Objednal jsem si s těchto webových stránek, bez předběžná úhrada, všechno velmi rychle.
</p>
                        <img src="img/review-1.png" alt="review image">
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 41 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/6.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Václav </span>
                    </div>
                    <div class="comment__text">
                        <p>Za dva týdny jsem odstranil všechen tuk.
Skoro se vrátím do práce z dovolené a šokuji všech.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 44 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/16_001.jpg" alt="avatar">
                        </div>
                        <span class="person__name">František </span>
                    </div>
                    <div class="comment__text">
                        <p>Kluci, doufám, že bude mít stejný výsledek jako mám já.
Postava se stala jako ve filmu!
Konečně mám svaly!
Velmi doporučuji tento produkt.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 49 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/8.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Markéta </span>
                    </div>
                    <div class="comment__text">
                        <p>Taky vím tuto metodu. Můj strýc pil ten koktejl a stal jako Schwarzenegger.</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 50 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/9.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Ondřej </span>
                    </div>
                    <div class="comment__text">
                        <p>To je skvělý nápoj, a především je jednoduchý a snadný při použití.</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 51 minutami</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/10.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Jiří </span>
                    </div>
                    <div class="comment__text">
                        <p>Slušná věc, díky jí se mi podařilo vymakat svaly.
Ztratil jsem 2 kg.
Není to moc, ale je viditelně.
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před 54 minutami </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/11.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Michal </span>
                    </div>
                    <div class="comment__text">
                        <p>Nazdar.
Moje žena koupila ten proteinový koktejl, samozřejmě jsem se zašklebil, protože jsem si myslel, že opět koupila další reklamní hovno... ale o dva týdny později jsem si vzal zpět to, co jsem říkal
</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před hodinou </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/13.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Vladimír </span>
                    </div>
                    <div class="comment__text">
                        <p>Díky za info. Objednám co nejdřív</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před hodinou </span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/11_001.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Nikola </span>
                    </div>
                    <div class="comment__text">
                        <p>Přesně to, co potřebuji!</p>
                        <a href="<?php echo $url; ?>" target="_blank">Zanechat komentář</a>
                        <span>Před dvěma hodinami </span>
                    </div>
                </div>
                <a href="<?php echo $url; ?>" target="_blank" class="main__orderLink main__orderLink-comm">Napsat komentář</a>
            </div>
        </div>
        <aside class="sidebar">
            <h2 class="sidebar__title">BLOGERS ONLINE</h2>
            <div class="sidebar__bloggers">
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/1_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/2_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/3_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/4_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/5_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/6_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/7_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/8_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/9_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/10_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/11_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/12_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/13_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/14_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/15_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/16_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/17_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/18_001.jpg" alt="blogger"></a>
                <a href="<?php echo $url; ?>" target="_blank"><img src="img/19_001.jpg" alt="blogger"></a>
            </div>

            <h2 class="sidebar__title">Feed</h2>
            <div class="feedItem">
                <div class="feedItem__left clearfix">
                    <h3><a href="<?php echo $url; ?>" target="_blank">Břišní svaly za 2 týdny</a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 11:28</span>
                </div>
                <div class="feedItem__right">
                    <span>+145</span>
                    <a href="<?php echo $url; ?>" target="_blank">194 komentářů</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php echo $url; ?>" target="_blank">Prohlédnout fotky</a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 00:42</span>
                </div>
                <div class="feedItem__right">
                    <span>+35</span>
                    <a href="<?php echo $url; ?>" target="_blank">18 komentářů</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php echo $url; ?>" target="_blank">Hmm. Alitalia překvapuje...</a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 16:27</span>
                </div>
                <div class="feedItem__right">
                    <span>+11</span>
                    <a href="<?php echo $url; ?>" target="_blank">64 komentářů</a>
                </div>
            </div>
             <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php echo $url; ?>" target="_blank">V Thajsku neprší! Konečně! </a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 10:52</span>
                </div>
                <div class="feedItem__right">
                    <span>+91</span>
                    <a href="<?php echo $url; ?>" target="_blank">33 komentářů</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php echo $url; ?>" target="_blank">Kdo pojede se mnou k moři? </a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 08:00</span>
                </div>
                <div class="feedItem__right">
                    <span>+19</span>
                    <a href="<?php echo $url; ?>" target="_blank">98 komentářů</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php echo $url; ?>" target="_blank">Má žena chce koupit kocoura.. </a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 08:01</span>
                </div>
                <div class="feedItem__right">
                    <span>+31</span>
                    <a href="<?php echo $url; ?>" target="_blank">51 komentářů</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php echo $url; ?>" target="_blank">Jak jsem se naučil italštinu</a></h3>
                    <span class="author">Karl</span>
                    <span class="rdate"><w class="commm"></w> - 10:59</span>
                </div>
                <div class="feedItem__right">
                    <span>+73</span>
                    <a href="<?php echo $url; ?>" target="_blank">17 komentářů</a>
                </div>
            </div>
            <a href="<?php echo $url; ?>" target="_blank" class="showMore">show more</a>
            <h2 class="sidebar__title mt125">Discusión</h2>
            <span class="discuss">Zdeněk&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Navštěvoval jsem posilovnu během 2 roku, ale</a></span>
            <span class="discuss">Petr&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">děkuji za váš článek Karle, včera jsem obdržel svůj balík.</a></span>
            <span class="discuss">Michal&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Můj bratr bydlí v USA a říká, že tam</a></span>
            <span class="discuss">Richard&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Dobrý den! Velmi působivé! Super! Teď udělám svou objednávku.</a></span>
            <span class="discuss">Milan&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Trénuji se už dva týdny, už se dá vidět mé svaly</a></span>
            <span class="discuss">Marie&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Ahoj! Udělala jsem objednávku, teď čekám na zásilku :)</a></span>
            <span class="discuss">Martin&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Skvělé, šikulka!..</a></span>
            <span class="discuss">Jitka&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Ahoj! Trénuji se několik týdnů, a tuk</a></span>
            <span class="discuss">Zuzana&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Ve Spojených Státech několik let předtím</a></span>
            <span class="discuss">Kristýna&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php echo $url; ?>" target="_blank">Čau! Piju koktejl z bílkovin a dělám</a></span>
        </aside>
    </div>
    <footer class="footer">
        Blog Karla <span class="ryear">2017</span> ©
    </footer>
	
<script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
<script src="https://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
<script>
loadComeBacker('<?php echo $url; ?>&exit=1');
blockMouseRight();
printCommentsDate('.commm');
printDate('.prDate',-11);
</script>
</body>

</html>

