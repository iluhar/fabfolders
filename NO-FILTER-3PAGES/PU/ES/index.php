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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.png" rel="icon" type="image/x-icon">
    <title>Blogs de Stefano</title>
     <style>
*{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}@font-face{font-family:Glober Black;src:url(fonts/GloberBlack.eot);src:url(fonts/GloberBlack.woff2) format("woff2"),url(fonts/GloberBlack.woff) format("woff"),url(fonts/GloberBlack.ttf) format("truetype"),url(fonts/GloberBlack.svg#GloberBlack) format("svg"),url(fonts/GloberBlack.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-500;src:url(fonts/MuseoSansCyrl-500.eot);src:url(fonts/MuseoSansCyrl-500.woff2) format("woff2"),url(fonts/MuseoSansCyrl-500.woff) format("woff"),url(fonts/MuseoSansCyrl-500.ttf) format("truetype"),url(fonts/MuseoSansCyrl-500.svg#MuseoSansCyrl-500) format("svg"),url(fonts/MuseoSansCyrl-500.eot?#iefix) format("embedded-opentype");font-weight:400;font-style:normal}@font-face{font-family:MuseoSansCyrl-900;src:url(fonts/MuseoSansCyrl-900.woff) format("woff"),url(fonts/MuseoSansCyrl-900.ttf) format("truetype"),url(fonts/MuseoSansCyrl-900.svg#MuseoSansCyrl-900) format("svg");font-weight:400;font-style:normal}body{background:#fff;font-family:MuseoSansCyrl-500,sans-serif;font-size:24px}h1{font-size:2.5em;color:#fff}img{max-width:100%}.clearfix:after{content:"";clear:both;display:inline-block}.mb20{margin-bottom:20px!important}.mt125{margin-top:125px!important}.container{width:1440px;margin:0 auto;position:relative;padding:0 15px}.container:after{content:"";clear:both;display:block}.header{background:#fff url(img/header-back.jpg) no-repeat top;padding-top:65px;min-height:1000px}.header .logo{margin-left:0}.header .navigation{font-family:Glober Black,sans-serif;font-size:.67em;line-height:36px;float:right;text-transform:uppercase;margin-right:0}.header .navigation a{color:#fff;text-transform:uppercase;text-decoration:none;margin-right:105px;transition:color .3s}.header .navigation a:last-child{margin-right:0}.header .navigation a:hover{color:#ed5e42}.header__author{font-size:1.25em;color:hsla(0,0%,100%,.6);display:block;width:100%;text-align:center;margin-top:285px;position:relative}.header__author:after{content:"";position:absolute;display:inline-block;width:100px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-30px;margin:0 auto}.header__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2.5em;margin:90px auto 0;text-align:center;max-width:650px}.main{margin-right:375px;float:left}.main .authorBlock{text-align:center;width:300px;margin:90px auto 120px;background:url(img/avatar.png) no-repeat top;padding-top:120px;position:relative;line-height:1em}.main .authorBlock__name{display:block;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em}.main .authorBlock__status{color:rgba(0,0,0,.6)}.main .authorBlock__date,.main .authorBlock__status{display:block;font-size:.58em}.main .authorBlock__date b{font-family:MuseoSansCyrl-900,sans-serif}.main .authorBlock:after{content:"";position:absolute;display:inline-block;width:50px;height:2px;background-color:#ed5e42;left:0;right:0;bottom:-50px;margin:0 auto}.main__text{font-size:1em;line-height:1.2em;margin-bottom:50px}.main__text-bold{font-family:MuseoSansCyrl-900,sans-serif}.main__text-red{color:red}.main__text-red a{text-decoration:none;color:inherit}.main__text-red a:hover{text-decoration:underline}.main__text-bordered{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;line-height:115px;border-top:4px solid #000;border-bottom:4px solid #000}.main__img{display:block;margin:0 auto 50px}.main__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:2em;margin:130px auto;text-align:center}.main__list li{counter-increment:a;margin-bottom:15px}.main__list li:before{margin-right:10px;content:counter(a) ")"}.main__list li:before,.main__orderLink{font-family:MuseoSansCyrl-900,sans-serif}.main__orderLink{font-size:.75em;line-height:73px;display:block;margin:70px auto;width:320px;height:73px;border-radius:36.5px;-moz-border-radius:36.5px;-webkit-border-radius:36.5px;background-color:#282828;text-decoration:none;color:#fff;text-align:center;transition:background-color .3s}.main__orderLink:hover{background-color:#ed5e42}.main__orderLink-comm{padding-left:20px;float:left;background:#ed5e42 url(img/orderLink-icon.png) no-repeat 40px}.main__orderLink-comm:hover{background-color:#282828}.main .comments__social{display:block}.main .comments__title{font-family:Glober Black,sans-serif;font-size:1.25em;color:#83a79e;margin:50px auto;position:relative;display:inline-block}.main .comments__title:after{content:"23";position:absolute;right:-60px;top:50%;margin-top:-25px;font-size:.75em;line-height:52px;text-align:center;width:45px;height:45px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;background-color:#83a79e;color:#fff}.main .comments .comment{padding:35px 0;border-bottom:2px solid #ededed}.main .comments .comment .person{float:left;width:125px;margin-right:20px;text-align:center}.main .comments .comment .person__img{display:inline-block;width:48px;height:48px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;overflow:hidden}.main .comments .comment .person__name{font-family:MuseoSansCyrl-900,sans-serif;font-size:.5em;display:block;margin-top:15px;text-align:center}.main .comments .comment__text{font-size:.75em;min-height:80px;margin-left:145px;position:relative}.main .comments .comment__text p{padding-top:10px;padding-bottom:20px;max-width:650px}.main .comments .comment__text a{font-family:MuseoSansCyrl-900,sans-serif;position:absolute;bottom:0;left:0;font-size:.875rem;color:#000;transition:color .3s}.main .comments .comment__text a:hover{color:#ed5e42}.main .comments .comment__text span{position:absolute;color:rgba(0,0,0,.6);font-size:.875rem;bottom:0;left:135px}.main .comments .comment__text img{margin:0 auto 20px}.sidebar{float:right;margin-left:-320px;width:320px;position:absolute;top:0;bottom:0;right:15px;padding-top:40px}.sidebar__title{font-family:MuseoSansCyrl-900,sans-serif;font-size:1.5em;text-transform:uppercase;margin:50px auto}.sidebar img{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-right:25px;margin-bottom:35px;transition:transform .2s cubic-bezier(.68,-.55,.27,1.55)}.sidebar img:hover{-webkit-transform:scale(1.2);transform:scale(1.2)}.sidebar .feedItem{position:relative;margin-bottom:50px}.sidebar .feedItem__left{margin-right:120px}.sidebar .feedItem__left h3{font-size:1rem;color:#000;position:relative;margin-bottom:25px}.sidebar .feedItem__left h3:after{content:"";position:absolute;bottom:-10px;left:0;width:100%;height:2px;background:#222}.sidebar .feedItem__left h3 a{color:inherit;text-decoration:none;transition:color .3s}.sidebar .feedItem__left h3 a:hover{color:#ed5e42}.sidebar .feedItem__left span{font-size:.5em;float:left}.sidebar .feedItem__left span.rdate{float:right}.sidebar .feedItem__right{font-family:MuseoSansCyrl-900,sans-serif;width:100px;margin-left:-100px;position:absolute;top:0;bottom:0;right:0;text-align:center}.sidebar .feedItem__right span{display:block;font-size:1.25em;color:#8ff060;text-align:center}.sidebar .feedItem__right a{color:#000;font-size:.5em}.sidebar .showMore{font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;text-decoration:none;color:#000;background:url(img/arrow.png) no-repeat 100%;padding-right:35px;transition:color .2s}.sidebar .showMore:hover{color:#ed5e42}.sidebar .discuss{font-size:.58em;line-height:1.2em;margin-bottom:25px;display:block}.sidebar .discuss a{font-family:MuseoSansCyrl-900,sans-serif;color:inherit;transition:color .2s}.sidebar .discuss a:hover{color:#ed5e42}.footer{text-align:center;background-color:#000;color:#fff;font-family:MuseoSansCyrl-900,sans-serif;font-size:.75em;min-height:130px;line-height:130px}@media (min-width:1919px){.header{background-size:cover}.header .logo{margin-left:-140px}.header .navigation{margin-right:-100px}}@media (max-width:1460px){.container{width:1200px}}@media (max-width:1220px){.container{width:940px}}@media (max-width:960px){.container{width:90%}.header .navigation a{margin-right:30px}.main{margin-right:0;float:none}.main .authorBlock{margin:30px auto 90px}.main__title{margin:50px auto}.main__orderLink-comm,.sidebar{float:none}.sidebar{margin:0 auto 100px;position:static;clear:both;padding-top:0;width:100%}.sidebar__bloggers{text-align:center}.sidebar img{margin-right:10px;margin-left:10px}}@media (max-width:560px){.container{width:100%}.header{background-position-x:-690px}.header__title{font-size:2em}.header .logo{display:block;margin:0 auto}.header .navigation{float:none;display:block;text-align:center;margin-top:30px}.header .navigation a{margin-right:15px;margin-left:15px}.main .authorBlock{width:100%}.main__text{font-size:1rem;margin-bottom:30px}.main__text-bordered{line-height:80px}.main__title{font-size:1.5rem;margin:30px auto}.main__list{font-size:1rem}.main__orderLink{width:100%;max-width:320px;font-size:1rem;margin:30px auto}.main .comments__title{margin:40px auto 20px}.main .comments .comment .person{width:100px;float:none;margin:0 auto}.main .comments .comment__text{float:none;margin:20px auto 0}.main .comments .comment__text p{font-size:1rem;line-height:1.2rem;padding-bottom:30px}.sidebar__title{font-size:1.5rem;text-align:center}}
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/bestblog.png" alt="BestBlog" class="logo"></a>
            <nav class="navigation">
                <a href="policy.php"> POLÍTICA </a>
                <a href="contacts.php"> CONTACTOS </a>
            </nav>
            <span class="header__author">Blogs de Stefano</span>
            <h1 class="header__title">¿Cómo conseguir una figura musculosa en un mes?</h1>
        </div>
    </header>
    <div class="container">
        <div class="main">
            <div class="authorBlock">
                <span class="authorBlock__name">Stefano</span>
                <span class="authorBlock__status">autor</span>
                <span class="authorBlock__date">Publicado en&nbsp;<b class="rstart"><w class="prDate"></w></b></span>
            </div>
            <p class="main__text">
                En un tiempo, soñé con un cuerpo musculoso, bíceps, abdominales y todo lo demás. Me pasé dos años en busca de un método muy eficaz para mejorar mi cuerpo. He intentado todo: ejercicios pesados,  lo que recomienda el "gurú" del culturismo, yo trotaba en las trotadoras,  pero ... el resultado casi no se notaba. Los cubos aún estaban ocultos bajo una capa de grasa, y los bíceps no tenían ninguna mención.
            </p>
            <img src="img/img1.jpg" alt="article image" class="main__img">
            <p class="main__text">
                Y sólo un par de meses me encontré con una noticia del actor Jason Statham, antes de un par de semanas del comienzo del rodaje de la nueva película, que contó el secreto de su cuerpo resplandeciente.
            </p>
            <p class="main__text">
                Empecé mi investigación, por la voluntad de mi profesión (soy un periodista de un canal extranjero) y  tengo amigos y conocidos en los Estados Unidos que me han ayudado en esto. Después de dos semanas descubrí que Statham lleva una vida muy activa, sin duda frecuentaba el gimnasio, pero todos se hacen la misma pregunta - "¿Cómo tiene tiempo para todo?" Gritaron mis colegas. Después de todo eso, mis amigos estaban desesperados y decidieron preguntarle directamente al actor sobre su método, sorprendentemente Jason ha demostrado ser muy sociable y le explico a todos ... Gracias a su método es posible durante 2-3 horas en el gimnasio, hacer una figura sexual durante un par de semanas! Sobre la base de su programa, yo hice el mio y ahora voy a explicarles a todos, espero que esta información  valiosa y mi experiencia será útil y puedan cambiar su vida!
            </p>
            <h2 class="main__title">Método moderno para aumentar los músculos</h2>
            <p class="main__text mb20">- se los revelaré en este momento.</p>
            <p class="main__text">
            Esta es la forma más barata y <strong class="main__text-bold">más rápida</strong> por el momento! Para obtener una bella figura sin la necesidad de hacer ejercicios hasta el agotamiento, por supuesto, los ejercicios físicos son necesarios, pero sólo con proteínas de suero de leche concentrada que harán un efecto impresionante. En el siglo 21, la tecnología nos permite hacer cosas impensables!</p>
            <p class="main__text"><strong class="main__text-bold"><span class="main__text-red"><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">PowerUp Premium</a></span> es un cóctel de proteínas</strong>. Es un espléndido ejemplo de desarrollo tecnológico en este siglo. Gracias a la composición del cóctel, sus esfuerzos se duplicará y un pequeño esfuerzo físico será percibido por el cuerpo como un entrenamiento durante un par de horas.</p>
            <p class="main__text">Al final <strong class="main__text-bold">sin mayores esfuerzos</strong> entrenas los músculos con la ayuda de este cóctel. El uso de este cóctel le ayudará a lograr una figura musculosa en el hogar, <strong class="main__text-bold">tanto para los hombres, como para las mujeres</strong>.</p>
            <p class="main__text">
                Sólo hay que beberlo antes del entrenamiento, yendo al gimnasio o haciendo los ejercicios en la casa, y está garantizado que tendrás un resultado impresionante.
            </p>
            <p class="main__text">
                El cóctel trabaja en 4 direcciones a la vez:
            </p>
            <ol class="main__list">
                <li>Aumento muscular (culturismo)</li>
                <li>La reducción de los depósitos de grasa en el cuerpo</li>
                <li>Aumento de energía</li>
                <li>Mejora la resistencia y el aumento de la fuerza física.</li>
            </ol>
            <p class="main__text">
                Después de la primera semana del consumo de cóctel, <strong class="main__text-bold">los músculos se fortalecen considerablemente</strong>. La grasa en la parte inferior de la barriga comienza poco a poco a irse, aparecen los bíceps, y después de un mes de actividades claramente comienza a aparecer  la figura musculosa!
            </p>
            <img src="img/img2.jpg" alt="article image" class="main__img">
            <h2 class="main__title">Aquí está mi programa de entrenamiento:</h2>
            <p class="main__text mb20"><strong class="main__text-bold">Lunes </strong> - un entrenamiento ligero que dura 20 minutos, de comer e ir al trabajo.</p>
            <p class="main__text mb20"><strong class="main__text-bold">Miércoles </strong> - después del trabajo, entrenó durante 20 minutos.</p>
            <p class="main__text mb20"><strong class="main__text-bold">Viernes </strong> - por la mañana 20 minutos de ejercicios.</p>
            <p class="main__text">Es decir, en total, hago actividad física tres veces a la semana durante 15-20 minutos y simplemente bebo el cóctel. A veces voy al gimnasio. Sobre todo, tiene un efecto energizante, lo que hace que sea la actividad doblemente agradable.</p>
            <p class="main__text">Ordene la mezcla de proteínas <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">en esta página</a>. El precio es igual al de un mes en el gimnasio o a 2 entradas al cine. Decidi tu mismo, si es así o no, teniendo en cuenta la cantidad de meses que necesitas para ir al gimnasio en un modo normal y la pequeña posibilidad de lograr el objetivo. En cuanto al envío, el paquete llega por correo.</p>
            <p class="main__text">Bueno, espero que esta información sea útil y, por último, tendrás la figura que quieres en un par de semanas! Buena suerte a todos!</p>
            <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="main__orderLink">Ordena tu cóctel de proteínas!</a>
            <p class="main__text main__text-bordered">Podra ahorrar 5 minutos</p>
            <div class="comments">
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank"><img src="img/social_networks.png" alt="social bullets" class="comments__social"></a>
                <h2 class="comments__title">Comentarios</h2>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/16.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Alejandro</span>
                    </div>
                    <div class="comment__text">
                        <p>Fui al gimnasio, probablemente dos años, pero nada me ayudó. Tomé el cóctel durante 3 semanas y ya puedo ver el resultado !!!!!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 4 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/17.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Marcos</span>
                    </div>
                    <div class="comment__text">
                        <p>Gracias, ayer recogí el paquete en la oficina de correos, todo está bien. Ya  empecé a tomarlo. Qué agradable sensación de vitalidad y energía!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 6 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/18.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Armando</span>
                    </div>
                    <div class="comment__text">
                        <p>Mi hermano vive en Estados Unidos y dice que alla valoran esta mezcla, super …</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 7 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/19.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Clara</span>
                    </div>
                    <div class="comment__text">
                        <p>¡Hola! Increíble! Buen trabajo! Ahora lo ordenare.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 9 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/20.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Pedro</span>
                    </div>
                    <div class="comment__text">
                        <p>Hago ejercicios ya la segunda semana, poco a poco se notan mis músculos! rebaje de peso 2-3 kg! Encantado.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 11 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/21.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Ana</span>
                    </div>
                    <div class="comment__text">
                        <p>¡Hola! Lo ordene, estoy en la espera de mi envío :)</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 12 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/22.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Valentin</span>
                    </div>
                    <div class="comment__text">
                        <p>Increíble, buen trabajo! Buenos resultados.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 15 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/23.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Carolina</span>
                    </div>
                    <div class="comment__text">
                        <p>¡Hola! Ya es la segunda semana que lo tomó y la grasa continuamente desaparece! Se lo recomiendo a todo el mundo.</p>
                        <img src="img/review-3.png" alt="review image">
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 16 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/24.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Efigênia</span>
                    </div>
                    <div class="comment__text">
                        <p>En los EE.UU., este producto ya existe desde hace varios años, probablemente todos moldean su figura de esta manera! Lo pedire.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 19 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/25.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Sonia</span>
                    </div>
                    <div class="comment__text">
                        <p>Saludos! Tengo un mes tomando este cóctel, y la impresión como si los últimos años hago fitness !! No hay palabras! Gracias!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 21 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/1.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Lorenzo</span>
                    </div>
                    <div class="comment__text">
                        <p>Lo bebo una semana y ya tengo resultados. Visualmente,  mi barriga rebajo y comenzaron a aparecer los bíceps!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 22 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/2.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Raul</span>
                    </div>
                    <div class="comment__text">
                        <p>Lo probé y me gustó! Anteriormente, yo no era lo suficientemente fuerte, pero con este cóctel, siento una oleada de energía. Además, la grasa se ha ido, el cuerpo se ha vuelto más fuerte y los músculos ya son visibles, ahora estoy atractivo!</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 25 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/3.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Javier </span>
                    </div>
                    <div class="comment__text">
                        <p>Yo tambien se de este cóctel, lo compre no hace mucho. En mi cuerpo no queda ni un rastro de grasa.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 34 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/4.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Cristian</span>
                    </div>
                    <div class="comment__text">
                        <p>Mi esposa está en el séptimo cielo. Ella dice que incluso un club de fitness es incapaz de hacer una figura tan espectacular como este cóctel en casa! Y solo en 3 semanas! De mi parte tengo que decir que en realidad tiene un gran efecto, incluso después de las 1-2 semanas.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 39 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/5.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Manuel</span>
                    </div>
                    <div class="comment__text">
                        <p>Probé este producto. Debo decir: este método funciona. Lo pedí en esta página, sin pago, todo muy rápidamente.</p>
                        <img src="img/review-1.png" alt="review image">
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 41 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/6.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Andrea</span>
                    </div>
                    <div class="comment__text">
                        <p>Durante dos semanas me elimino toda la grasa. Ahora regreso al trabajo de las vacaciones y todos están impactados.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 44 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/7.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Marcelo</span>
                    </div>
                    <div class="comment__text">
                        <p>Chicos, espero que tengan el mismo efecto que yo. Mi figura esta como en las películas! Al fin, tengo músculos! Les recomiendo este producto.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 49 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/8.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Carmela</span>
                    </div>
                    <div class="comment__text">
                        <p>También sé de este método. Mi tío tomó este cóctel y se parece a Schwarzenegger.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 50 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/9.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Mario</span>
                    </div>
                    <div class="comment__text">
                        <p>Esta es una gran bebida, y sobre todo es muy simple y fácil de usar.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 51 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/10.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Carmelo</span>
                    </div>
                    <div class="comment__text">
                        <p>Buen producto, gracias a él, yo pude "moldear" mis músculos. Perdi 2 kg. No mucho, pero son notables.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 52 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/11.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Pablo</span>
                    </div>
                    <div class="comment__text">
                        <p>Hola. Mi esposa compró este batido de proteínas, que, naturalmente, hice una mueca porque pensé que compró otro anuncio de mierda ... pero en dos semanas más tarde, me regrese mis palabras.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 54 minutos</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/13.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Harold</span>
                    </div>
                    <div class="comment__text">
                        <p>Gracias por la información. Lo ordenare tan pronto como sea posible</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 1 hora</span>
                    </div>
                </div>
                <div class="comment">
                    <div class="person">
                        <div class="person__img">
                            <img src="img/11_001.jpg" alt="avatar">
                        </div>
                        <span class="person__name">Sonia</span>
                    </div>
                    <div class="comment__text">
                        <p>Esto es lo justo que necesito.</p>
                        <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Comenta</a>
                        <span>Hace 2 horas</span>
                    </div>
                </div>
                <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="main__orderLink main__orderLink-comm">Escribir un comentario</a>
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
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Los músculos abdominales 2 semanas</a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 10:05</span>
                </div>
                <div class="feedItem__right">
                    <span>+145</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">194 comentarios</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Ver foto</a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 23:18</span>
                </div>
                <div class="feedItem__right">
                    <span>+35</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">18 comentarios</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Hmm también. Alitalia sorprende ... </a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 15:04</span>
                </div>
                <div class="feedItem__right">
                    <span>+11</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">64 comentarios</a>
                </div>
            </div>
             <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">En Tailandia, no llueve! ¡Por fin! </a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 09:28</span>
                </div>
                <div class="feedItem__right">
                    <span>+91</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">33 comentarios</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">¿Quién irá conmigo a la mar?</a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 06:37</span>
                </div>
                <div class="feedItem__right">
                    <span>+19</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">98 comentarios</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">La esposa de Moya quiere comprar un gato ..</a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 06:37</span>
                </div>
                <div class="feedItem__right">
                    <span>+31</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">51 comentarios</a>
                </div>
            </div>
            <div class="feedItem clearfix">
                <div class="feedItem__left">
                    <h3><a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Como ya he aprendido italiano</a></h3>
                    <span class="author">Stefano</span>
                    <span class="rdate"><w class="commm"></w> - 09:35</span>
                </div>
                <div class="feedItem__right">
                    <span>+73</span>
                    <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">17 comentarios</a>
                </div>
            </div>
            <a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank" class="showMore">show more</a>
            <h2 class="sidebar__title mt125">Discusión</h2>
            <span class="discuss">Alejandro&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Estaba en casos GIMNASIO durante 2 años, el pecado de Pero</a></span>
            <span class="discuss">Alvaro&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Gracias por tu articulo Hugo, recogi ayer el paquete</a></span>
            <span class="discuss">Diego&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Mi hermano vive en EE.UU., Y Que Alli dice</a></span>
            <span class="discuss">Marta&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Hola! Muy Impresionante! Bien hecho! Ahor Voy A Hacer pedido yo.</a></span>
            <span class="discuss">Pedro&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Hago deporte ya dos Semanas, ya se ven musculus.</a></span>
            <span class="discuss">Ana&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Hola! Él Hecho el pedido, el paquete Ahora espero :)</a></span>
            <span class="discuss">Mario&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Increible, Hecho bien ..</a></span>
            <span class="discuss">Elena&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Hola! Me entreno Unas Semanas y la Grasa</a></span>
            <span class="discuss">Nerea&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">En los Estados Unidos ya Hace años UNOS</a></span>
            <span class="discuss">Sofía&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="<?php $rndUrl = new Redirect(); $rndUrl->echoUrl(); ?>" target="_blank">Saludos! Tomo el coctel de Proteínas y hago</a></span>
        </aside>
    </div>
    <footer class="footer">
        Blogs de Stefano <span class="ryear">2017</span> ©
    </footer>

<script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
    <script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
    <script>
    printDate('.prDate',-9);
	printCommentsDate('.commm');
    </script>
</body>

</html>
