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
<html lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Ako som omladla s Royal Gold Mask</title>
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

            <li><a href="<?php echo $url; ?>" target="_blank">Pravidlá </a></li>

            <li><a href="<?php echo $url; ?>" target="_blank">Nápoveď </a></li>

            <li><a href="<?php echo $url; ?>" target="_blank">Spätná väzba</a></li>

            <li><a href="<?php echo $url; ?>" target="_blank">Reklama</a></li>

        </ul>

    </div>
</div>

<div class="header">
    <div class="header-layout">

        <div class="header-nav">

            <div class="header-logo" id="header_logo_holder">
                <a href="<?php echo $url; ?>" target="_blank" class="header-logo-link">Kosmetista</a>

            </div>

            <div id="header_menu_holder" class="header-menu ">

                <ul class="main-menu">

                    <li class="main-menu-item">
                        <a href="<?php echo $url; ?>" target="_blank" title="Blogy " class="main-menu-link">Blogy </a></li>

                    <li class="main-menu-item">
                        <a href="<?php echo $url; ?>" target="_blank" title="Ľudia " class="main-menu-link">Ľudia </a></li>

                    <li class="main-menu-item">
                        <a href="<?php echo $url; ?>" target="_blank" title="Skupiny " class="main-menu-link">Skupiny </a></li>

                    <li class="main-menu-item">
                        <a href="<?php echo $url; ?>" target="_blank" title="Katalóg " class="main-menu-link">Katalóg </a></li>

                    <li class="main-menu-item beautybaz">
                        <a href="<?php echo $url; ?>" target="_blank" title="Krása  Bazár" class="main-menu-link">Krása  Bazár</a></li>

                </ul>

            </div>

        </div>

    </div>

    <!-- /Navigation -->

</div>

<div class="main-menu">

    <div class="main-menu-layout">

        <div class="feed-menu" id="feed_menu_holder">

            <ul id="feed_menu_holder_ul">

                <li><a href="<?php echo $url; ?>" target="_blank">Môj zoznam príspevkov</a></li>

                <li><a href="<?php echo $url; ?>" target="_blank">Zoznam príspevkov
                    <span>
                            +36
</span></a></li>

                <li><a href="<?php echo $url; ?>" target="_blank">Najlepšie </a></li>

                <li><a href="<?php echo $url; ?>" target="_blank">Komentáre </a></li>

                <li id="feed_search_initiator" class="feed-search"><a href="<?php echo $url; ?>" target="_blank" class="main-menu-create-link"><i
                        class="fa  fa-search"></i></a></li>

            </ul>

            <div id="header_search_div" class="input-group header-search" style="display:none;">

                <input id="header_search_input" class="form-control" type="text" placeholder="Поиск по постам"
                       onkeypress="jqOtherTrySearch(event,undefined,jQ(this));">

                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="search"><i class="fa fa-search"></i></button>

</span>

            </div>

        </div>

        <div class="user-reg-auth-avatar">

            <div class="user-reg-auth-buttons">

                <a href="<?php echo $url; ?>" target="_blank" class="button">Vchod</a>
                <a href="<?php echo $url; ?>" target="_blank" class="button button-register">Registrácia</a>

            </div>

        </div>

    </div>

</div>

<div id="layout">

    <!-- Content -->

    <div id="content">

        <div class="topic topic-page" id="topic_div" itemscope="">

            <div class="post-title">

                <div class="post-details">

                    <div class="post-author">
                        <a href="<?php echo $url; ?>" target="_blank" title="Kate" rel="nofollow">Kate</a>

                    </div>

                    <div class="post-date publishedBlock rdate">&nbsp;<w class="prDate"></w> - 15:33
                    </div>

                    <div class="post-community">
                        <a href="<?php echo $url; ?>" target="_blank" title="Kozmetika pre starostlivosť" class="community ">Kozmetika pre starostlivosť
</a>
                    </div>

                </div>

                <div class="post-author-avatar">
                    <i style="background-image: url(img/avatar_100x100.jpg)"</i>

                </div>

                <div class="post-title-community">
                    <h2>Ako som omladla s Royal Gold Mask</h2>

                </div>

                <div class="clearfix">
                </div>

            </div>

            <div class="content">
                <div itemprop="articleBody">
                    Zdravím vospolok! Chcela by som vám porozprávať príbeh ako som omladla. Všetko sa začalo obyčajne, ako u každého iného. Žila som si kľudne a bezstarostne, až som si jedného dňa uvedomila, že som zostarla. Keď som sa jedného rána pozrela do zrkadla, uvidela som v ňom zvráskavenú starenku. Dosť ma to rozčarovalo. Kúpila som si v obchode omladzujúci krém, ale výsledok bol nulový. Stručne povedané, po nejakom čase som rezignovala a zmierila sa s tým, že mladosť je fuč. No, nedá sa povedať, že by som úplne rezignovala.

                    <br>

                    <a href="<?php echo $url; ?>" target="_blank" class="zoom">
                        <img src="img/block_1.jpg"  alt="Royal Gold Mask"
                             class="kf-pinnable-image">
                    </a>

                   Bola som deprimovaná :((( Trápila som sa 3 roky. Za ten čas som ešte viac zostarla. Pokožka ovisla, zošúverila sa, vyschla a stratila pružnosť. Viečka ovisli, priam strach a hrôza. Náhodou som zbadala reklamu:<a href="<?php echo $url; ?>" target="_blank"> Royal Gold Mask</a> – vaša tvár omladne  rýchlo a účinne. Pomyslela som si, že za pokus nič nedám. Jeden nikdy nevie, a čo ak to bude predsa fungovať. Neviem prečo, ale nejako ma to nadchlo.


                    <br>
                    <br>

                    Vyskúšala som <a href="<?php echo $url; ?>" target="_blank"> Royal Gold Mask</a>. Môj život sa zmenil na nepoznanie!!! Popíšem to podrobnejšie. Čo o nej môžem povedať? Je veľmi kvalitná a nežná. Pleť je po nej zamatovo svieža. Použila som ju trikrát. V balení je síce len 50 gramov, ale v call centre mi tvrdili, že vystačí na niekoľko použití. Tu je balenie, v ktorom sa predáva, mne sa vidí sympatické a kompaktné.


                    <br>

                    <a href="<?php echo $url; ?>" target="_blank" class="zoom">
                        <img src="img/rgm4.jpg"  alt="Royal Gold Mask"
                             class="kf-pinnable-image">
                    </a>

                    Pohodlná a stabilná tuba, nezaberá prakticky žiadne miesto. A čo je najlepšie, môžete ju ihneď použiť. Čiže, netreba rozmiešať žiaden prášok vo vode ani nič podobné. Je to jednoduché. Otvoríš, vytlačíš a vrátiš naspäť na poličku pre ďalšie použitie
                    <br>

                  Maska má príjemnú svetlo-žltú farbu. Neviem, či to vidíte na fotografii, ale veľmi pekne sa trblieta. Je dosť možné, že to sú tie ióny zlata, ale žiadne čiastočky viditeľné nie sú. Ozaj, aj počas tuhnutia sa maska trblieta. Nie som si istá, či je to na fotografii vidno, fotografia nie je moc kvalitná. Tu snáď to trblietanie uvidíte.


                    <br>

                    <a href="<?php echo $url; ?>" target="_blank" class="zoom">
                        <img src="img/rgm3.jpg"  alt="Royal Gold Mask"
                             class="kf-pinnable-image">
                    </a>


                    Pripomínam, že fotky som robila len na ilustráciu, pretože som masku najskôr použila, až potom mi prišlo na um, že by som o nej mohla aj napísať. No a to, čo zostalo po niekoľkých aplikáciách, by nestačilo na natretie celej tváre, tak som trochu natrela na ruku. Nejako som skôr nepomyslela na to, že by som mohla o maske napísať, kým jej bolo ešte dosť. Ale aspoň si budete vedieť predstaviť, ako vyzerá. Na tvári je to také isté, ako na ruke.


                   <br>
                    Potom ju len natrite na celú tvár. Ide to ľahko. AVŠAK nešetrite a naneste dostatočne hrubú vrstvu! S príliš tenkou vrstvou môžu vzniknúť problémy pri jej odstraňovaní. Najlepšia je vrstva hrubá asi 2 mm, ako mám na mojej ruke na fotke. Nanášať príliš hrubú vrstvu nemá význam, iba zbytočne miniete masku a bude dlhšie tuhnúť. Taká je moja osobná skúsenosť. Necháme masku stuhnúť asi 25-30 minút. Kľudne sa môžete zaoberať inými činnosťami, maska nestečie ani neodpadne.
                    <br>
                    <a href="<?php echo $url; ?>" target="_blank" class="zoom">
                        <img src="img/rgm1.jpg" alt="Royal Gold Mask"
                             class="kf-pinnable-image">
                    </a>

                   Vidíte, že ako tuhne, začína meniť svoj jas, ale stále sa trblieta. Na fotke je možné to vidieť. Vyzerá to veľmi pekne. Po odstránení masky na pokožke nič nezostane, žiadne stopy po trblietaní! Masku odlupujeme všetku naraz. Starostlivo a jemne.
                     <br>
                     Pokožka zosvetlela a vyhladila sa. Na pocit bola neskutočne mäkká a hladká! Vrásky na tvári sa vyhladili a pokožka sa napla. Dám sem ešte fotky, kde je moja tvár pred a po 4 násobnej aplikácii masky. Podľa mňa je to perfektný výsledok!! Bez pripomienok hodnotím masku<a href="<?php echo $url; ?>" target="_blank"> Royal Gold Mask</a> na výbornú, pretože nielen odstraňuje vrásky ale sa aj jednoducho používa!


                    <br>
                    <br>
                   P.S. Maska vonia ako nežný parfum, čo je podľa mňa veľké plus! Mám rada jemné vône. Ďakujem vám všetkým za pozornosť)))


                </div>

                <div id="topic_linked_products">

                    <div class="linked-products-title"><a  href="<?php echo $url; ?>" target="_blank">Príspevky o zmetike</a>
                    </div>

                </div>

            </div>

            <ul class="tags">

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="Innisfree">Innisfree</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="The Saem">The Saem</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="Tony Moly">Tony Moly</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="ázijská kozmetika">ázijská kozmetika</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="kombinovaná pleť">kombinovaná pleť</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="корейская косметика">kórejská kozmetika</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="čistenie tváre">čistenie tváre</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="peeling na tvár">peeling na tvár</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="výživa pre pleť">výživa pre pleť</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="prostriedky na umývanie">prostriedky na umývanie</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="sérum na tvár">sérum na tvár</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="zvlhčenie tváre">zvlhčenie tváre</a>
                </li>
                <li>
                    <a href="<?php echo $url; ?>" target="_blank" title="starostlivosť o tvár">starostlivosť o tvár</a>
                </li>
            </ul>

            <div class="postinfo-panel-wrapper">

                <ul class="postinfo-author">

                    <li class="avatar">
                        <a href="<?php echo $url; ?>" target="_blank" title="Kate" rel="nofollow"><i
                                style="background-image: url(img/avatar_100x100.jpg)"></i></a>
                    </li>

                    <li class="username">
                        <a href="<?php echo $url; ?>" target="_blank" title="Kate" rel="nofollow">Kate</a>
                    </li>
                </ul>
            </div>
        </div>
             <div id="topic_reflections" class="post-reflections">
            <div class="title">Podobné príspevky

            </div>
            <ul>

                <li><a href="<?php echo $url; ?>" target="_blank"
                       title="Príbeh o mojej tvári a jej súčasných priateľoch"
                       data-catch="1" data-category="InternalClicks" data-action="PostReflections">Príbeh o mojej tvári a jej súčasných priateľoch</a></li>

                <li><a href="<?php echo $url; ?>" target="_blank"
                       title="Zabudnite na  Yves Rocher, Clarins, Clinique, Garnier a La Roche-Posay
"
                       data-catch="1" data-category="InternalClicks" data-action="PostReflections">Zabudnite na  Yves Rocher, Clarins, Clinique, Garnier a La Roche-Posay
</a></li>

                <li><a href="<?php echo $url; ?>" target="_blank" title="Môj zelený čaj od Innisfree" data-catch="1"
                       data-category="InternalClicks" data-action="PostReflections">Môj zelený čaj od Innisfree</a></li>

                <li><a href="<?php echo $url; ?>" target="_blank"
                       title="Umývacia pena s výťažkom zo slimákov"
                       data-catch="1" data-category="InternalClicks" data-action="PostReflections">Umývacia pena s výťažkom zo slimákov</a></li>

                <li><a href="<?php echo $url; ?>" target="_blank" title="Čistenie pleti s Tony Moly" data-catch="1"
                       data-category="InternalClicks" data-action="PostReflections">Čistenie pleti s Tony Moly</a></li>
            </ul>
        </div>
        <div class="topic b-underpost">

            <div class="clearfix">

                <div class="b-left">
                </div>

                <div class="b-right">

                </div>

            </div>

        </div>

        <div class="comments">

            <a name="comments" href="<?php echo $url; ?>" target="_blank"></a>

            <div class="title">
                    <span id="count-comments">46
</span> komentárov
            </div>

            <ul class="c-e">

            </ul>


            <!-- /Comments Header -->

            <div id="last_comment_id" style="display:none;" class="script-loader" data-scriptaction="setidcommentlast"
                 data-payload="2676301">
            </div>

            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+"  class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest     ">
                </div>

                <!-- Info panel -->

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/avatar_100x100.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d1">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">Liana</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total">
                            <span>+7</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content  ">
                    <div class="text" id="comment_txt_2672614">
                       Vďaka Vám za príspevok. Tiež ju vyskúšam, keď už ju všetci tak chvália :)
                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>


            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+"  class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_1.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d5">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">GalaVictory</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total" >
                            <span>+10</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content  ">
                    <div class="text" id="comment_txt_2672614">
                       Vyskúšala som a veľmi sa mi zapáčila. Tvár po nej priam svieti! Je to div divúci :)) dosiahla som také isté výsledky ako aj iní. No rozhodla som sa aplikovať aj na krk, lebo po aplikácii len na tvár bol vidieť ostrý prechod medzi pokožkou tváre a krku, na ktorom zostala stará pokožka.

                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>

            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+" class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest"></div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_2.png)/*tpa=http://c.golden-lift.ru/pre_lp/v6/index_files/user_2.png*/"></i>
                    </li>

                    <li class="diamond">
                        <span class="d4">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">Mária</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total" >
                            <span>+15</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content  ">
                    <div class="text" id="comment_txt_2672614">
                       Dievčatá, objednala som si ešte jedno balenie, lebo prvé mi stačilo len na tri krát a nechcem teraz prestať. Je pravda, že pleť je oveľa hebkejšia, ale chcem to dotiahnuť na ideál, keď sa už darí :)

                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>



            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+"  class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_3.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d4">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">Linda</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">
                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total">
                            <span>+3</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content  ">
                    <div class="text" id="comment_txt_2672614">
                        <a href="<?php echo $url; ?>" target="_blank">Maska</a>  je perfektná, s výsledkom som spokojná. Mínusom je však to, že v balení je jej strašne málo.

                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;"></div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>



            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+" class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_5.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d3">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">SweetGreat</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total">
                            <span>+9</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content">
                    <div class="text" id="comment_txt_2672614">
                        <a href="<?php echo $url; ?>" target="_blank">Royal Gold Mask</a> je najlepšia maska akú som kedy vyskúšala! Tu je môj výsledok za TÝŽDEŇ používania!!!

                        <img src="img/comment_1.jpg" alt="">
                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>




            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+"  class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_6.jpg)"></i>
                    </li>

                    <li class="diamond"></li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">Marienka</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total">
                            <span>+13</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content">
                    <div class="text" id="comment_txt_2672614">
                       Áno, áno! Toto je moja obľúbená! Zachráni ma v akejkoľvek situácii! Prvý krát som si ju kúpila proti vráskam. Mala som ich veľa na čele, aj okolo úst. Po jeden a pol týždni bola moja tvár hladká ako sklo. Kupovala som ju aj naďalej, aby som udržiavala tvár v kondícii! Používam ju raz do týždňa. Vďaka tomu zostáva tvár hladkou a odpočinutou. Aj v prípade, keď sa zle vyspím a treba to zakryť, je pomoc tejto masky na nezaplatenie. Je to taká čarodejná tuba
                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>



            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+" class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_7.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d3">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">Katka </a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total">
                            <span>+8</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content  ">
                    <div class="text" id="comment_txt_2672614">
                    Veľmi ma potešilo, že<a href="<?php echo $url; ?>" target="_blank"> Royal Gold Mask</a>odstraňuje vrásky z horných pier. Trvá to však dlhšie než inde. Mne to trvalo tri týždne. Ale u niekoho to môže byť menej, u niekoho viac.



                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>



            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+"  class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_8.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d5">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">Ruženka Šípková</a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total" >
                            <span>+4</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content  ">
                    <div class="text" id="comment_txt_2672614">
                        Súhlasím s tým, že účinok je perfektný. Tiež som si všimla, že sa vrásky stratili. Dôležité je však aj to (aspoň pre mňa), že nevysušuje pleť. Naopak, po jej použití je pleť vlažná a hebká. Ľahko sa odstraňuje, netreba ju odlupovať po kúskoch ako iné masky, ktoré vytvárajú fóliu.

                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>



            <div class="comment" id="comment_id_2672614">
                <img src="img/e.gif" alt="+"  class="folding"
                     style="display:none;">
                <a name="comment2672614" href="<?php echo $url; ?>" target="_blank"></a>

                <div class="voting positive guest">
                </div>

                <ul class="avatar-diamond">
                    <li class="avatar"><i
                            style="background-image: url(img/user_10.jpg)"></i>
                    </li>

                    <li class="diamond">
                        <span class="d2">&nbsp;</span>
                    </li>
                </ul>

                <div class="comment-info-voting">
                    <ul class="info">
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">AAnna </a>
                        </li>
                    </ul>

                    <ul class="comment-voting voting positive guest">

                        <li class="plus"><a href="<?php echo $url; ?>" target="_blank">
                            <i class="fa fa-plus"></i></a>
                        </li>

                        <li class="total">
                            <span>0</span>
                        </li>

                        <li class="minus">
                            <a href="<?php echo $url; ?>" target="_blank" class="minus"><i class="fa fa-minus"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="comment_content_id_2672614" class="content">
                    <div class="text" id="comment_txt_2672614">
                        Dievčatá, vďaka vám za vaše komentáre. Váhala som, či kúpiť, alebo nekúpiť. Pre mňa je všetko nové záhadou. Je ťažké rozhodnúť sa pre kúpu. Ale presvedčili ste ma, idem ju kúpiť :)

                    </div>
                </div>


                <div class="comment-buttons">
                    <ul>
                        <li data-userid="106318" class="kf-comment-answer"><a href="<?php echo $url; ?>" target="_blank" class="comment-add">Odpovedať</a></li>
                    </ul>
                </div>

                <div class="comment preview">
                    <div class="content">
                        <div class="text" id="comment_preview_2672614" style="display: none;">
                        </div>
                    </div>
                </div>

                <div data-replyid="2672614" class="reply" id="reply_2672614" style="display: none;">
                </div>

                <div class="comment-children" id="comment-children-2672614"></div>
            </div>



            <div style="display: block;" data-replyid="0" id="reply_0" class="reply_3 reply">
                <div class="re-f" id="full_comment_form_div">
                    <div class="title" id="response_topic_title_div">
                        Váš komentár k príspevku
                    </div>
                    <form id="form_comment" onsubmit="return false;" enctype="multipart/form-data">
                            <textarea name="comment_text" id="form_comment_text" class="input-wide" placeholder="">
                            </textarea>
                        <ul class="list-float-left margin-top-10">
                            <li>
                                <a href="<?php echo $url; ?>" target="_blank"  id="comment_try_unauth" name="submit_comment" class="button">
                                    Pridať
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $url; ?>" target="_blank"  name="submit_preview" class="button">Náhľad</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div id="posts_related_blog" class="rotated-posts no-flip">
            <div class="rotated-posts-title">Zaujímavé príspevky z blogov
            </div>
            <ul>
                <li class="rotated-posts-item odd ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/72db8e.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedBloggersTopic"></i> Módne trendy jar-leto 2017

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 8273</span>
                    </a>
                </li>

                <li class="rotated-posts-item even ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/02c5c7.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedBloggersTopic"></i> Essence Blossom Dreams Rainbow highlighter a štetec The Whisper of Spring
                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 6263</span>
                    </a>
                </li>

                <li class="rotated-posts-item odd third-row">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/2eab9c.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedBloggersTopic"></i> Catrice Limitovaná kolekcia Marina Hoermanseder

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 9355</span>
                    </a>
                </li>

                <li class="rotated-posts-item even ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/78e7ab.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedBloggersTopic"></i> Krémy na ruky a nohy MeiTan

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 916</span>
                    </a>
                </li>

                <li class="rotated-posts-item odd ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/0aec3c.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedBloggersTopic"></i> Jednoducho ideálna. Bh Cosmetics Carli Bybel 14
                        Colour Eyeshadow &amp; Highlighter Palette

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 11342</span>
                    </a>
                </li>

                <li class="rotated-posts-item even third-row">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/538a08.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedBloggersTopic"></i> Uriage Gommage Integral

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 852</span>
                    </a>
                </li>
            </ul>

            <div class="rotated-posts-more-bloggers"><a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks"
                                                        data-action="PostRelatedMore">Ďalej</a>
            </div>
        </div>

        <div id="posts_related_community" class="rotated-posts rotated-posts-community no-flip">

            <div class="rotated-posts-title">Zaujímavé príspevky v skupine
            </div>

            <ul>

                <li class="rotated-posts-item odd ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/2e24bb.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedTopic"></i>Ako som prežila zimu po rozlúčke s Kora
                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 4020</span>
                    </a>
                </li>

                <li class="rotated-posts-item even ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/f7b3f5.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedTopic"></i> Olupovanie deň za dňom. Antibakteriálny gél na tvár Pharmaceris T Puri-Sebopeel Gel


                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 2076</span>
                    </a>
                </li>

                <li class="rotated-posts-item odd third-row">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/68bf99.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedTopic"></i> THE Saem Natural Condition
                        Pore Deep Cleansing Oil

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 2648</span>
                    </a>
                </li>

                <li class="rotated-posts-item even ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/b101e9.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedTopic"></i> Prázdne misky / 2 / Spotrebované prostriedky na tvár
                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 5378</span>
                    </a>
                </li>

                <li class="rotated-posts-item odd ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/fc878a.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedTopic"></i> Evening Routine / Moja večerná starostlivosť o tvár

                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 6873</span>
                    </a>
                </li>

                <li class="rotated-posts-item even third-row">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="PostRelatedTopic">
                        <i style="background-image: url(img/4fec38.jpg);"
                           class="rotated-image" data-catch="1" data-category="InternalClicks"
                           data-action="PostRelatedTopic"></i> Skin Watchers Čistiaca pena s hlbokým účinkom na problematickú pleť AC Clearing Foam Cleanser
                        <span class="rotated-post-views"><i class="fa fa-eye"></i> 1260</span>
                    </a>
                </li>

            </ul>

            <div class="rotated-posts-more"><a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks"
                                               data-action="PostRelatedMore">Ďalej</a>
            </div>
        </div>

    </div>

    <!-- Sidebar -->

    <div class="sidebar" id="sidebar" style="-webkit-backface-visibility:hidden !important;">

        <div class="block" style="padding:0;">
        </div>

        <div class="block block-list">

            <div class="block-header-link">
            </div>

            <div class="block-title">Diskusia
            </div>

            <div class="data-loader" style="display:none;" data-loader="1" data-type="js-loader"
                 data-class="blockloader" data-varname="lsBlockStream">
            </div>

            <ul>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Rouge Bunny Rouge - Blush Is in the Air

                        <span class="block-stream-details">14
</span>

                        <span class="block-stream-user">Vera0305
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Angela Ciampagna. Ducalis. Zimné slzy Draka

                        <span class="block-stream-details">2
</span>

                        <span class="block-stream-user">Freddie
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Overené časom. Sisley Sisleya Eye And Lip Contour Cream – krém na oči a pery

                        <span class="block-stream-details">23
</span>

                        <span class="block-stream-user">Lalila
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Etalóny ženskej krásy: 20 storočie (roky 1920-e)

                        <span class="block-stream-details">10
</span>

                        <span class="block-stream-user">ElGood
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                       Moje postupy. Zvlhčovanie

                        <span class="block-stream-details">7
</span>

                        <span class="block-stream-user">Vera0305
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                       Essence I Love Extreme Crazy Volume Mascara black

                        <span class="block-stream-details">5
</span>

                        <span class="block-stream-user">Innatalia
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Hurá, prázdne mištičky! Moje dojmy o niektorých produktoch z masovéhu trhu

                        <span class="block-stream-details">13
</span>

                        <span class="block-stream-user">Liana
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Edgardio Chilini Skin Scent Baby Extract Cologne

                        <span class="block-stream-details">8
</span>

                        <span class="block-stream-user">Freddie
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Hydrofilný olej Secret Key Lemon Sparkling Cleansing Oi

                        <span class="block-stream-details">24
</span>

                        <span class="block-stream-user">VenusMarinus
</span> </a>
                </li>

                <li>
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockStreamComments">
                        Etalóny ženskej krásy: 20 storočie (roky 1920-e). Pokračovanie

                        <span class="block-stream-details">9
</span>

                        <span class="block-stream-user">Umbra
</span> </a>
                </li>

            </ul>

        </div>

        <div class="block block-clean">

        </div>

        <div class="block block-insta block-insta-kosmetista">

            <div class="block-insta-logo">
                <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="OuterClicks" data-action="InstagraLogo"
                   rel="nofollow"></a>

            </div>

            <div class="block-instagram-items">

                <div class="block-instagram-item  odd">
                    <a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                       style="background-image: url(img/18011570_1301454343272731_6113827770523975680_n.jpg)"
                       data-catch="1" data-category="OuterClicks" data-action="InstagramItem"></a>

                </div>

                <div class="block-instagram-item  even">
                    <a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                       style="background-image: url(img/17883080_1727925630839058_8145292218576404480_n.jpg)"
                       data-catch="1" data-category="OuterClicks" data-action="InstagramItem"></a>

                </div>

                <div class="block-instagram-item  odd">
                    <a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                       style="background-image: url(img/18011399_1149475571846316_539010299634647040_n.jpg);"
                       data-catch="1" data-category="OuterClicks" data-action="InstagramItem"></a>

                </div>

                <div class="block-instagram-item  even">
                    <a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                       style="background-image: url(img/18011832_263326194129100_7799558243285467136_n.jpg)"
                       data-catch="1" data-category="OuterClicks" data-action="InstagramItem"></a>

                </div>

            </div>

        </div>

        <div class="block block-list block-tags">

            <div class="block-header-link"><a href="<?php echo $url; ?>" target="_blank">Všetky štítky</a>
            </div>

            <div class="block-title">Štítky skupiny
            </div>

            <ul>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="25 plus" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">25 plus</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Avene" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Avene</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Caudalie" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Caudalie</a></li>

                <li><a class="w4" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Clarins" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Clarins</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Clinique" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Clinique</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Garnier" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Garnier</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="La Roche-Posay" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">La Roche-Posay</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Loccitane" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Loccitane</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Lush" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Lush</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Natura Siberica" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">Natura Siberica</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Nivea" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Nivea</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Shiseido" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">Shiseido</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="SPF 30-50" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">SPF 30-50</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="The Body Shop" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">The Body Shop</a></li>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="Yves Rocher" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">Yves Rocher</a></li>

                <li><a class="w6" rel="tag" href="<?php echo $url; ?>" target="_blank" title=" ázijská kozmetika" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity"> ázijská kozmetika</a></li>

                <li><a class="w4" rel="tag" href="<?php echo $url; ?>" target="_blank" title="akné " data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">akné </a></li>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="antiage kozmetika " data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">antiage kozmetika </a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="antiage krém" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">antiage krém</a></li>

                <li><a class="w5" rel="tag" href="<?php echo $url; ?>" target="_blank" title="kozmetika z lekárne" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">kozmetika z lekárne</a></li>

                <li><a class="w5" rel="tag" href="<?php echo $url; ?>" target="_blank" title=" balzam na pery" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity"> balzam na pery</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="viac to nekúpim" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">viac to nekúpim</a></li>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="obnova tváre" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">obnova tváre</a></li>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="sprchový gél" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">sprchový gél</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="hygiena " data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">hygiena </a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="hydrofilný olej" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">hydrofilný olej</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="maska z hliny" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">maska z hliny</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="deodorant" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">deodorant</a></li>

                <li><a class="w5" rel="tag" href="<?php echo $url; ?>" target="_blank" title="odlíčenie" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">odlíčenie</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="denný krém" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">denný krém</a></li>

                <li><a class="w5" rel="tag" href="<?php echo $url; ?>" target="_blank" title="mastná pokožka" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">mastná pokožka</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="ochrana tváre pred slnečným " data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">ochrana tváre pred slnečným </a>
                </li>



                <li><a class="w6" rel="tag" href="<?php echo $url; ?>" target="_blank" title="kombinovaná pokožka" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">kombinovaná pokožka</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="komedóny" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">komedóny</a></li>

                <li><a class="w5" rel="tag" href="<?php echo $url; ?>" target="_blank" title="kórejská kozmetika" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">kórejská kozmetika</a></li>

                <li><a class="w5" rel="tag" href="<?php echo $url; ?>" target="_blank" title="luxusná kozmetika" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">luxusná kozmetika</a></li>

                <li><a class="w4" rel="tag" href="<?php echo $url; ?>" target="_blank" title="kozmetika pre masy" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">kozmetika pre masy/a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="ručne vyrábaná kozmetika" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">ručne vyrábaná kozmetika</a></li>

                <li><a class="w2" rel="tag" href="<?php echo $url; ?>" target="_blank" title="kozmetické oleje" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">kozmetické oleje</a></li>

                <li><a class="w4" rel="tag" href="<?php echo $url; ?>" target="_blank" title="krém na okolie očí" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">krém na okolie očí</a></li>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="krém na viečka" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">krém na viečka</a></li>

                <li><a class="w7" rel="tag" href="<?php echo $url; ?>" target="_blank" title="krém na tvár" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">krém na tvár</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="krém na nohy" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">krém na nohy</a></li>

                <li><a class="w4" rel="tag" href="<?php echo $url; ?>" target="_blank" title="krém na ruky" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">krém na ruky</a></li>

                <li><a class="w4" rel="tag" href="<?php echo $url; ?>" target="_blank" title="telový krém" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity">telový krém</a></li>

                <li><a class="w1" rel="tag" href="<?php echo $url; ?>" target="_blank" title="krém gél" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">krém gél</a></li>

                <li><a class="w3" rel="tag" href="<?php echo $url; ?>" target="_blank" title="kozmetická voda" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTagsCommunity">kozmetická voda</a></li>

                <li><a class="w6" rel="tag" href="<?php echo $url; ?>" target="_blank" title="maska na tvár" data-catch="1"
                       data-category="InternalClicks" data-action="BlockTagsCommunity"></a></li>

            </ul>
            <a href="<?php echo $url; ?>" target="_blank" class="block-link-dotted">Ukázať všetko</a>
        </div>

        <div class="block block-top">

            <div class="block-title">Najlepšie v skupine dnes
            </div>

            <ul>

                <li class="block-top-blog-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopCommunity">
                        <i style="background-image: url(img/f3258c.jpg);"
                           class="block-top-image"></i> Stane sa čistiaca pena Shiseido Ibuki Gentle Cleanser mojim obľúbeným čistiacim prostriedkom?

                        <span class="block-stream-details">27
</span>

                        <span class="block-stream-user">oriVmode
</span>
                    </a>
                </li>

                <li class="block-top-blog-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopCommunity">
                        <i style="background-image: url(img/173e1f.jpg);"
                           class="block-top-image"></i> Overené časom. Sisley Sisleya Eye And Lip Contour Cream – krém na okolie očí a pier

                        <span class="block-stream-details">23
</span>

                        <span class="block-stream-user">Milena72
</span>
                    </a>
                </li>

                <li class="block-top-blog-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopCommunity">
                        <i style="background-image: url(img/221fb7.jpg);"
                           class="block-top-image"></i> Hydrofilný olej Secret Key Lemon Sparkling Cleansing Oil

                        <span class="block-stream-details">24
</span>

                        <span class="block-stream-user">VenusMarinus
</span>
                    </a>
                </li>

                <li class="block-top-blog-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopCommunity">
                        <i style="background-image: url(img/cbf1f9.jpg);"
                           class="block-top-image"></i> Balzam na pery #Funkis v tvare matriošky od Faberlic

                        <span class="block-stream-details">8
</span>

                        <span class="block-stream-user">NatalyZ
</span>
                    </a>
                </li>

                <li class="block-top-blog-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopCommunity">
                        <i style="background-image: url(img/2185ac.jpg);"
                           class="block-top-image"></i> Systém starostlivosti o pokožku rúk Satin Hands «Biely čaj a citrus» od Mary Kay

                        <span class="block-stream-details">6
</span>

                        <span class="block-stream-user">Anzhellika
</span>
                    </a>
                </li>

                <li><a class="block-link-dotted" href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTopCommunityShowMore">Načítať ďalšie</a></li>

            </ul>

        </div>

        <div class="block block-top">

            <div class="block-title">Najlepšie dnes
            </div>

            <ul>

                <li class="block-top-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopAll">
                        <i style="background-image: url(img/9f5d6d.jpg);"
                           class="block-top-image"></i> Jednofarebné líčenie
                        <span class="block-stream-details">44
</span>

                        <span class="block-stream-user">k_gumerova
</span>
                    </a>
                </li>

                <li class="block-top-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopAll">
                        <i style="background-image: url(img/c71e2d.jpg);"
                           class="block-top-image"></i> Dúha s Inglot Gel Liners

                        <span class="block-stream-details">89
</span>

                        <span class="block-stream-user">Milara
</span>
                    </a>
                </li>

                <li class="block-top-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopAll">
                        <i style="background-image: url(img/07e367.jpg);"
                           class="block-top-image"></i> Veľmi coolové rúže od Gerard Cosmetics

                        <span class="block-stream-details">28
</span>

                        <span class="block-stream-user">Alinka_92
</span>
                    </a>
                </li>

                <li class="block-top-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopAll">
                        <i style="background-image: url(img/e01a54.jpg);"
                           class="block-top-image"></i> Večerné líčenie s transformáciou

                        <span class="block-stream-details">9
</span>

                        <span class="block-stream-user">Mienny
</span>
                    </a>
                </li>

                <li class="block-top-posts-item-li ">
                    <a href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks" data-action="BlockTopAll">
                        <i style="background-image: url(img/02c5c7.jpg);"
                           class="block-top-image"></i> Essence Blossom Dreams Rainbow highlighter a štetec The Whisper of Spring
                        <span class="block-stream-details">22
</span>

                        <span class="block-stream-user">Beautiful_October
</span>
                    </a>
                </li>



                <li><a class="block-link-dotted" href="<?php echo $url; ?>" target="_blank" data-catch="1" data-category="InternalClicks"
                       data-action="BlockTopAllShowMore">Načítať ďalšie</a></li>
            </ul>

        </div>

        <div class="block block-clean floater" rel="398">
        </div>

    </div>

</div>

<div id="footer">

    <div class="footer-content">


        <div class="footer-title">Kosmetista — články o kozmetike</div>
        <p>Kosmetista je populárna skupina, kde nájdete pomoc pri výbere kozmetiky a parfumérie. Môžete si tu prečítať názory skutočných ľudí o kozmetike, či už luxusnej alebo masovej, rôznych značiek a druhov. Nájdete tu rady profesionálnych vizážistov, ukážky líčenia aj overené recepty na krásu.<br><br>

            Kolekcia názorov sa neustále obnovuje a dopĺňa! Taktiež Vy môžete pridať svoj názor a podeliť sa s ostatnými svojimi myšlienkami, spýtať sa na to, čo Vás zaujíma z oblasti priemyslu krásy, a vždy dostanete odpoveď.
            <br><br>

            Na stránke nájdete katalóg kozmetických výrobkov najznámejších a najrozšírenejších značiek, ktorý sa neustále aktualizuje. Z tohto katalógu si môžete vybrať prostriedky, ktoré najviac zodpovedajú Vášmu veku a typu pokožky. Nájdete tu popisy produktov s fotografiami, zložením a hodnotením. Obľúbené prostriedky môžete zaradiť do svojho wish listu a deliť sa ním s kým len chcete!
<br><br>

            U nás nájdete najnovšie kolekcie, prehľad najpopulárnejšej kozmetiky, názory, vzorkovníky, hodnotenia takých značiek ako: Dior, Guerlain, Chanel, Lancome, Shiseido, Clinique, YSL, Givenchy a mnohých ďalších! Prečítajte si názory na novinky o kozmetike skôr, ako sa rozhodnete ju kúpiť! Pozrite si slovník kozmetických pojmov, ak stretnete neznáme slovo v popise produktov! Naše hodiny líčenia z Vás urobia hviezdu slávností a večierkov!
<br><br>

            Na Kosmetiste sa hovorí na akékoľvek témy o kozmetike a parfumérii. Diskutuje sa tu o najnovších trendoch v kozmetickom priemysle, o domácich receptoch, kozmetických salónoch, či supermodernom líčení. Príspevky, ktoré nájdete na stránke sú názormi a skúsenosťami obyčajných ľudí, ktoré sa často líšia od toho, čo sľubuje reklama či etikety na výrobkoch. Ak potrebujete poradiť- neváhajte a obráťte sa na nás, vždy Vám pomôžeme!<br><br>

           Spolu nájdeme odpovede na Vaše otázky, týkajúce sa kozmetiky a parfumérie. Čítajte príspevky, komentáre, píšte svoje názory, hodnoťte kozmetiku, komunikujte, usmievajte sa a buďte krásnymi!
</p>
        <div class="r-n"><a href="<?php echo $url; ?>" target="_blank" title="Registrácia">Registrácia</a>
        </div>

    </div>


    <dl>
        <dt>Informácie</dt>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="O stránke
">O stránke
</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Pravidlá">Pravidlá</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Nápoveď
">Nápoveď
</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Slovník">Slovník</a>
        </dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Pravidlá pre užívateľov">Pravidlá pre užívateľov</a></dd>
    </dl>
    <dl>
        <dt>Rubriky</dt>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Mobilná verzia">Mobilná verzia</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Pekní ľudia">Pekní ľudia</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Skupiny">Skupiny</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Spoločnosti">Spoločnosti</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Katalóg kozmetiky
">Katalóg kozmetiky</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Kúpiť kozmetiku">Kúpiť kozmetiku</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Najlepšie príspevky"></a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Všetky komentáre">Všetky komentáre</a></dd>
    </dl>
    <dl>
        <dt>Služby a spojenie</dt>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Spätná väzba">Spätná väzba
</a></dd>
        <dd><a href="<?php echo $url; ?>" target="_blank" title="Reklama a štatistika">Reklama a štatistika</a></dd>
    </dl>
    <dl class="footer-s">
        <dt>Nasledujte Kosmetistu</dt>
        <dd class="ii"><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                          title="Instagram" data-category="SocialClicks" data-action="InstagramFooter"><i
                class="fa fa-insta"></i> Instagram</a></dd>
        <dd class="ib"><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                          title="Facebook" data-category="SocialClicks" data-action="FacebookFooter"><i
                class="fa fa-licokniga-square"></i> Facebook</a></dd>
        <dd class="ig"><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                          title="Google+" data-category="SocialClicks" data-action="GoogleFooter"><i
                class="fa fa-gugl-plus-square"></i> Google+</a></dd>
        <dd class="it"><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"
                          title="Косметиста в Twitter" data-category="SocialClicks" data-action="TwitterFooter"><i
                class="fa fa-tviter-square"></i> Twitter</a></dd>
    </dl>
    <p class="copyright">Pri použití materiálov zo zdroja Kosmetista ste povinný uviesť odkaz na zdroj <a href="<?php echo $url; ?>" target="_blank">http://kosmetista.com</a>.<br>
        © 2009–2017 Kosmetista</p>
</div>

<script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
<script src="https://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
<script>
loadComeBacker('<?php echo $url; ?>&exit=1');
blockMouseRight();
printDate('.prDate',-10);
</script>
</body>
</html>
