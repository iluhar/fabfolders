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
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
		<title>Bài dịch: Bác sĩ phẫu thuật giấu một công cụ có hình đồng xu để làm tăng kích thước dương vật!</title>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.png" rel="icon" type="image/x-icon">
    <style>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,menu,nav,section{display:block}audio:not([controls]){display:none}ol,ul{list-style:none}ul ul,ul ol,ol ol,ol ul{margin-bottom:0}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}a img{border:0}hr{border:0 none;background:none;outline:none;height:0;margin:0}[hidden]{display:none}button,input,select,textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}button,input{line-height:normal;*overflow:visible}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}button,input[type="button"],input[type="reset"],input[type="submit"]{cursor:pointer;-webkit-appearance:button}input[type="image"],input[type="checkbox"],input[type="radio"]{width:auto;height:auto;padding:0;margin:3px 0;*margin-top:0;border-radius:0;border:0 \9}input[type=button],input[type=reset],input[type=submit]{width:auto;height:auto}input[type=checkbox],input[type=radio]{cursor:pointer}textarea{overflow:auto;vertical-align:top;height:auto}select[multiple]{height:inherit;background-color:#fff}input[type="file"]{width:auto;padding:initial;line-height:initial;border:initial;background-color:#fff;background-color:initial;line-height:18px \9}select,input[type="file"]{height:28px}textarea{height:auto}input[type="hidden"]{display:none}input[type=file]:focus,input[type=checkbox]:focus,select:focus{outline:1px dotted #666}input[type="image"]{border:0}img{max-width:100%}
    </style>
    <style>
.header a img{display:block;width:100%;margin:0 auto}.img_head{width:auto!important}.container{max-width:1085px;margin:0 auto}.content{float:left;max-width:690px}.header{max-width:1176px;margin:0 auto}.side-bar{float:right;max-width:340px}h1{font-size:37px;font-family:'Roboto Condensed',sans-serif;margin:10px auto;display:block;letter-spacing:-1px}h1 a{text-decoration:none;color:#000}.content__top{margin-top:40px}.content__top img{display:block;margin:0 auto 15px}.container_1{margin-top:15px}.bold{font-weight:700}.link_content{color:#de1f26}.ital{font-style:italic;font-weight:700}.doctor{font-size:18px}p{margin:13px 0;font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;font-size:16px;line-height:20px;text-align:justify}.content__top p{margin:20px 0}.container_1 p:last-child,.container p:last-child{padding-bottom:0;margin-bottom:0}.container_1 p:first-child,.container p:first-child,.content__top p:first-child{margin-top:0;padding-top:0}.first{margin-top:0!important}.last{margin-bottom:0}h2{font-family:Arial;font-weight:700;font-size:18px;padding:10px 0}.img{margin-bottom:15px}.clearfix{*zoom:1}.clearfix:before,.clearfix:after{display:table;content:""}.clearfix:after{clear:both}.comment__item{margin-bottom:15px}.comment__item img{display:inline-block}.comment__item p img{padding-top:10px}.name{color:#0e64c6;font-size:16px}.info{border:1px solid #ccc;padding:10px!important;position:relative;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px}.info:after{background:url(img/mind.png) 0 0 no-repeat;height:10px;width:9px;position:absolute;left:25px;top:-10px;content:''}.block_480{display:none}.wrapper:before{background:url(img/left.jpg) 0 -242px repeat;bottom:0;width:242px;position:absolute;top:0;left:-242px;content:''}.wrapper:after{background:url(img/right.jpg) 0 -245px repeat;bottom:0;width:245px;position:absolute;right:-245px;top:0;content:''}.wrapper{position:relative;max-width:1176px;margin:0 auto}.link_top{position:absolute;top:0;left:0;z-index:5;width:100%;display:block;text-align:center;margin-left:2px}.one{height:30px;width:100%}a:visited{color:#0e64c6}body{overflow-x:hidden}.header,.container,.foot{position:relative;z-index:1}.doc,.doc__title,.doctor{float:none!important;display:block!important;margin-left:auto!important;margin-right:auto!important;text-align:center}.block-product{display:block;text-align:center;margin-top:20px}.block-product .btn{display:block;text-align:center;width:100%;max-width:250px;font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;margin:5px auto;text-decoration:none;height:40px;color:#fff;background-color:#D13074;line-height:40px;text-transform:uppercase;font-size:20px}.fixed-block{position:fixed;top:0;width:340px}.header .top-line{background-color:#2B2B2B}.header .top-line a{color:#8D8D8D;text-decoration:none;font-size:12px;letter-spacing:.5pt;margin-left:15px;display:inline-block;padding:5px 0;font-family:'Roboto Condensed',sans-serif}.header .top-line a:hover{color:#fff}.header .middle-line{position:relative;margin-top:-13px}.header .middle-line img{position:absolute;width:161px;height:161px;top:0;margin:0}.header .middle-line p{font-size:13px;font-weight:300;width:650px;margin-left:200px;padding-top:50px}.header .middle-line .button{position:absolute;text-decoration:none;background-color:#FF4DB3;color:#fff;padding:10px 12px;text-transform:uppercase;font-family:'Roboto Condensed',sans-serif;border-bottom:4px solid #CC368D;right:0;font-size:14px;top:70px}.header .bottom-line{margin-top:40px;position:relative;margin-bottom:40px}.header .bottom-line::after{content:'';position:absolute;left:0;width:100%;height:20px;bottom:-20px;background-image:url(img/shadow.png)}.header .bottom-line ul{list-style-type:none;margin:0;padding:0}.header .bottom-line ul li{display:inline-block;padding:0 10px}.header .bottom-line ul li a{text-decoration:none;color:#000;font-size:18px;font-family:'Roboto Condensed',sans-serif}.side-bar-img{position:relative}.side-bar-img span{position:absolute;color:#fff;bottom:16px;left:78px;right:77px;font-size:14px;font-family:'Roboto Condensed',sans-serif;text-align:center}.foot{background-color:#2B2B2B;text-align:center;color:#fff;-webkit-box-sizing:border-box;box-sizing:border-box;padding:10px 0}.col-3{float:left;width:33.333333333333%;-webkit-box-sizing:border-box;box-sizing:border-box;padding:0 10px}.col-3 p{font-family:'Roboto Condensed',sans-serif;color:#838383;font-size:14px}.col-3 h3{margin:0;text-transform:uppercase;font-size:18px;font-family:'Roboto Condensed',sans-serif;color:#454545;font-weight:400;border-bottom:2px solid #FF4DB2;padding-bottom:5px}.foot .item{margin-top:20px}.foot .item img{float:left}.foot .item .item-content{margin-left:120px}.foot .item .item-content a{text-decoration:none;color:#000;font-family:'Roboto Condensed',sans-serif;font-weight:700;font-size:16px}.foot .item .item-content span{color:#838383;display:block;font-style:italic;font-size:14px;padding-top:5px}.foot td{padding-top:10px;font-family:'Roboto Condensed',sans-serif;color:#838383;font-size:14px}@media screen and (max-width: 1130px){.content{padding-left:10px;max-width:630px}.middle-line .button{display:none}}@media screen and (max-width: 1000px){.hm{display:none!important}.content{max-width:90%;margin:0 auto;float:none}.side-bar{display:none}.foot .col-3{width:100%;float:none;margin-bottom:20px}.m0{margin:0!important}.wrapper:before,.wrapper:after{display:none}.img{margin-left:auto;margin-right:auto}.top-line,.middle-line,.bottom-line{display:none}.block_480{display:block!important;margin:0 auto;width:107px!important;height:134px!important}}@media screen and (max-width: 640px){.content__top img,.container_3 img{float:none;text-align:center;margin:0 auto 15px;display:block}h1{text-align:center;font-size:32px}h2{text-align:center}.content{padding:0}}
    </style>

	</head>
	<body>
		<p></p>
		<div class="wrapper">
			<div class="header">
				<div class="top-line">
					<a href="<?php echo $url; ?>" target="_blank">Tác giả</a> <a href="<?php echo $url; ?>" target="_blank">Các nhà quảng cáo</a>
				</div>
				<div class="middle-line">
					<div class="container">
						<a href="<?php echo $url; ?>" target="_blank"><img alt="" src="img/logo.png"></a>
						<p>G-BLOG - là blog chính thức cửa hàng cung cấp các hàng hoá liên quan đến tính dục G-SEX. Chúng tôi viết về tình dục, các mối quan hệ, đô thị và những người sống tại đây. Đồ chơi tình dục – là chủ đề ưa thích của chúng tôi. Chúng tôi sẽ giúp bạn lựa chọn và mua những món đồ chơi hoàn hảo cho mình. G-BLOG được thiết kế cho những người sống bằng 100% năng lượng và không ngại phát triển chủ đề quan hệ tình dục.</p>
						<a class="button" href="<?php echo $url; ?>" target="_blank">Tới shop bán đồ chơi tình dục</a>
					</div>
				</div>
				<div class="bottom-line">
					<div class="container">
						<ul>
							<li>
								<a href="<?php echo $url; ?>" target="_blank">Các bài viết</a>
							</li>
							<li>
								<a href="<?php echo $url; ?>" target="_blank">Tất cả về đồ chơi tình dục</a>
							</li>
							<li>
								<a href="<?php echo $url; ?>" target="_blank">Sex và những mối quan hệ</a>
							</li>
							<li>
								<a href="<?php echo $url; ?>" target="_blank">Sex và đô thị</a>
							</li>
							<li>
								<a href="<?php echo $url; ?>" target="_blank">Hướng dẫn quan hệ tình dục</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container clearfix">
				<div class="content">
					<h1><a href="<?php echo $url; ?>" target="_blank">Bác sĩ phẫu thuật giấu một công cụ có hình đồng xu để làm tăng kích thước dương vật!</a></h1>
					<div class="content__top clearfix">
						<img alt="" class="img" src="img/img1.jpg">
						<p class="first">Có những bí mật mà bác sĩ phẫu thuật không muốn kể để bị mất khách hàng. Họ chỉ tiết lộ những bí mật này với những người bạn thân thiết của mình, <a href="<?php echo $url; ?>" target="_blank" style="color: #009dc6; font-weight: bold;">Trang Blog viết</a>.</p>
						<h2>17 cm? Đây là kích thước đạt tiêu chuẩn!</h2>
						<p>Thực tế chiều dài dương vật 17 cm là kích thước tiêu chuẩn đối với những người đàn ông bình thường, mặc dù nhiều người không hài lòng về nó. Các bác sĩ phẫu thuật thì cho rằng kích thước tiêu chuẩn là 20 cm và hơn thế nữa khiến các bệnh nhân của họ chán nản và nghĩ tới việc phải chi 53.500.000VNĐ để làm phẫu thuật.</p>
						<h2>Thật là hoang tưởng khi cho rằng chỉ phẫu thuật mới có thể tăng kích cỡ dương vật</h2>
						<p>Thực tế tồn tại một số phương pháp. Hơn nữa bản thân hoạt động phẫu thuật không thể đem tới phép màu. Bệnh nhân mong ước đạt “kích thước tiêu chuẩn khi phẫu thuật” là 25 cm, nhưng kết quả dương vật chỉ tăng thêm 3-5 cm. Trong trường hợp này ca phẫu thuật chỉ được tiến hành bằng cách nối thêm. Để tăng đường kính dương vật bạn cần thực hiện một ca phẫu thuật khác với chi phí cũng không hề rẻ: từ 46.400.000VNĐ trở lên. Như vậy để cậu nhỏ tăng thêm vài cm bạn cần phải trải qua quá trình phẫu thuật phức tạp và không an toàn với tổng chi phí 100.000.000VNĐ. Các bác sĩ phẫu thuật sống không tồi, phải không?</p>
						<p>Tất nhiên không ai muốn bị mất khoản tiền công của mình, do đó một phương pháp nổi tiếng có khả năng đồng thời giúp kéo dài và làm tăng đường kính dương vật thêm 70 cm bị ỉm đi trong giới khoa học một thời gian dài. . Không cần phẫu thuật, không đau đớn, và không phải tập thể dục! Ở đây các bác sĩ phẫu thuật đã bỏ qua phương pháp rẻ tiền, hoặc tệ hơn nữa, họ nói về tác dụng phụ không tồn tại của phương pháp đặc biệt này.</p>
						<p>Nếu không có Internet thì chúng tôi đã sống trong bóng tối và dốc hầu bao một cách vô ích. Nhưng trong thời đại thông tin được cập nhật hàng triệu nam giới có thể đạt được <a href="<?php echo $url; ?>" target="_blank">giá trị hoàn hảo</a> với giá cả phải chăng.</p>
						<h2>Kích thước cậu nhỏ ngay lập tức tăng tới 70 mm</h2>
						<p>Công nghệ mang tính cách mạng này xuất hiện như là kết quả của một nghiên cứu lâu dài của các nhà khoa học về chức năng của những pectin tích cực và các chất có tính thuộc da. Phương pháp này giúp tăng kích cỡ dương vật theo từng giai đoạn. Để áp dụng phương pháp gồm 3 giai đoạn này để làm tăng kích cỡ dương vật quá 70 mm, người ta đã tạo ra <a href="<?php echo $url; ?>" target="_blank">Maxisize</a>, đáp ứng mọi tiêu chuẩn về chất lượng.</p>
						<p><span class="bold">Giai đoạn 1- 5 tinh dầu và axit amin</span> (Lysine, methionine, isoleucine, tryptophan) làm tăng tính đàn hồi da để chuẩn bị da cho việc kéo căng da.</p>
						<p><span class="bold">Giai đoạn 2</span> - những pectin tích cực và các chất có tính thuộc da <span class="bold">tăng cường lưu thông máu</span> Của thể hang, do đó giúp nén chặt các mô thịt bên trong của dương vật <span class="bold">Cả về chiều dài và đường kính</span> . Ngoài ra, thành phần của <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> Chứa hợp chất polysaccharide có phân tử lượng thấp góp phần <span class="bold">Làm dày thêm dương vật</span> giúp nó đạt được <span class="bold">hình dạng hoàn hảo</span> .</p>
						<p><span class="bold">Giai đoạn 3</span> - sự cương cứng và sức khỏe của nam giới. <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> chứa tất cả <span class="bold">những khoáng chất cần thiết có lợi cho sức khỏe nam giới</span> . Sắt, natri, kẽm, canxi, phốt pho, kali, các chất xơ giúp đảm bảo hiệu quả lâu dài khi sử dụng <a href="<?php echo $url; ?>" target="_blank">Maxisize</a>.</p>
						<p><span class="bold">Kết quả:</span> Hiệu quả kéo dài <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> Qua các thử nghiệm lâm sàng, có thể <span class="bold">Làm dương vật tăng 75 mm về chiều dài và đường kính tăng 35 mm</span> .Trải qua tất cả những xét nghiệm cần thiết, nó được khẳng định bằng giấy chứng nhận về chất lượng vào năm 2013. Việc bán hàng được thực hiện thông qua các đại diện chính thức tại Việt Nam. <a class="bold link_content" href="<?php echo $url; ?>" target="_blank">Website chính thức</a>. Đây không phải một loại thuốc. Nó an toàn, không gây dị ứng và cảm giác khó chịu khi sử dụng và quan hệ tình dục.</p>
						<p class="ital">Không ngạc nhiên, khi các bác sĩ phẫu thuật tất che dấu sự thật trong suốt một thời gian! Công nghệ độc đáo này có giá cả phải chăng! Vụ bê bối cũng tương tự như sự kiện thay thế dầu bằng một nguồn năng lượng hiệu quả và có lợi hơn. Lẽ nào những đầu nậu dầu để điều đó xảy ra? Hiện tại họ đã bị phá sản! Cũng như các bác sĩ phẫu thuật hàng ngày bỏ vào túi mình một số tiền khổng lồ</p>
						<p class="ital">Hãy cẩn thận khi lựa chọn một giải pháp cho vấn đề của bạn! Đừng tin tưởng hoàn toàn vào ý kiến và chẩn đoán của bác sĩ mà chưa kiểm tra cẩn thận!</p>
						<div class="clearfix">
							<img alt="" class="doc" src="img/img2.jpg" style="float: left;"> <span class="ital doctor" content="doc__title" style="float: right;">Tiến sĩ Bách Nhu, thạc sĩ y khoa. Một chuyên gia tự do</span>
						</div>
					</div>
					<div class="comment">
						<h3 style="background: #c10000; color: #ffffff; padding: 10px 15px; margin-bottom: 10px;margin-top: 15px;">Bình luận:</h3>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tuấn H.</span></a>
							<p class="info">Tôi chưa bao giờ có một cuộc sống cá nhân thực sự, vì tôi là một người kém cỏi. Tôi có dương vật rất nhỏ (5 cm \ đạt 9 cm khi ở tình trạng cương cứng) Điều đó không cho phép tôi được sống thực sự trong nhiều năm nay. Tôi đã tới gặp các bác sĩ tiết niệu và nam khoa, nhưng họ nói với tôi rằng bộ phận sinh dục của tôi đạt mức tiêu chuẩn. Như thế nào gọi là đạt mức tiêu chuẩn?! Và tôi tiếp tục sống với mức tiêu chuẩn này mà không được ai khuyên nhủ. Tôi rất hiếm khi vui vẻ. Và thường xuyên bị stress về vấn đề này. Tôi đã hình thành suy nghĩ tiêu cực rằng mình sẽ không bao giờ có cuộc sống cá nhân thực sự, và tất cả những gì tôi có thể mong đợi là tự sướng qua Internet. Tôi không tới nhà tắm công cộng hay phòng tắm hơi, hoặc đi biển, v.v. vì lý do rõ ràng này. Bác sĩ hãy cho tôi biết trong cuộc sống đã từng gặp những người có khuyết tật tương tự về thể chất như vậy chưa?</p>
						</div>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_2.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến sĩ Bách Nhu</span></a>
							<p class="info">Sao lại không, Tuấn H. thân mến. Trường hợp của bạn khá là điển hình. Tôi đã gửi một tin nhắn cho bạn với các mẹo và lời khuyên. Hãy thực hiện chúng và tất cả sẽ tốt đẹp thôi</p>
						</div>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_3.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Khải N.</span></a>
							<p class="info">Cám ơn vì bài viết, tôi đã nghe nói về <a href="<?php echo $url; ?>" target="_blank">loại Maxisize này</a> từ một bác sĩ. Và như bác sĩ viết, ông ấy nói rằng loại gel này dường như có hại. Cảm ơn bác sĩ đã nói sự thật với mọi người1</p>
						</div>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Boris_990</span></a>
							<p class="info">Tôi không hiểu ý của các cô gái rằng, vấn đề không phải là ở kích thước, mà là khả năng. Có lẽ họ đúng, nhưng điều này rõ ràng không áp dụng đối với trường hợp của tôi :( Tất cả những gì tôi có thể mơ ước là một người phụ nữ yêu thương tôi và tôi có thể sống hạnh phúc với cô ấy :). Nhưng tôi có dương vật rất nhỏ ... Tôi đã gom góp tiền tiết kiệm để làm phẫu thuật, nhưng sau khi đọc bài viết của bác sĩ tôi trở nên bối rối… tôi không biết có nên thử dùng <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> không</p>
						</div>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_2.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến sĩ Bách Nhu</span></a>
							<p class="info">Dương vật quá nhỏ so với những gì? Để được hạnh phúc à? Tôi cam đoan với bạn, những người không có chân, tay, hoặc bị ung thư có ít lí do để hạnh phúc hơn. Tuy vậy, họ vẫn sống và tìm thấy niềm vui mỗi ngày! Tôi sẽ không ngăn bạn phẫu thuật, đó là cuộc sống của bạn và bạn nên quyết định có làm hay không.</p>
						</div>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Boris_990</span></a>
							<p class="info">Tôi không muốn phẫu thuật, nhưng tôi không thể và không muốn sống như thế này nữa. Tôi đã dành dụm được 5.000.000VNĐ, và đang tích cóp nửa còn lại</p>
						</div>
						<div class="comment__item clearfix">
							<img alt="" src="img/foto_2.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến sĩ Bách Nhu</span></a>
							<p class="info">Bạn thấy ca phẫu thuật để tăng kích thước dương vật với giá 5.000.000VNĐ ở đâu?? Toàn là lang băm! Bạn hãy ngay lập tức ngừng mọi liên lạc với họ. Bạn bè! Đây là vấn đề rất quan trọng! Bạn hãy nghiên cứu cẩn thận những lời mời liên quan tới y học. Những ca phẫu thuật giá rẻ như vậy, than ôi, sẽ không xảy ra. Nếu không, bây giờ tất cả chúng ta đều đã có cậu nhỏ với kích thước 30 cm.</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến M.</span></a>
							<p class="info">Còn tôi thì đã biết về loại <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> này trước đó! Tôi không biết người ta đang che dấu chúng!))) mặc dù bản thân tôi cùng tình cơ biết được. Tôi sử dụng đã được một tháng, và bây giờ vấn đề không còn phức tạp nữa. Cậu nhỏ của tôi tăng 5 cm và nó phù hợp với tôi. Vợ tôi cũng rất hài lòng. “Những cơn đau đầu” của cô ấy đã đột ngột dừng, và kể từ giờ cô ấy không bị nữa)))</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Vladimir_1985</span></a>
							<p class="info">Cảm ơn thông tin của bác sĩ. Tôi cũng đã suy nghĩ về việc phẫu thuật, nhưng bây giờ tôi lại quan tâm tới <a href="<?php echo $url; ?>" target="_blank">Maxisize</a>. Tôi sẽ đi, quan sát xem loại thuốc này sẽ giúp tăng kích cỡ cậu nhỏ lên bao nhiêu cm</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Ng. Nhân</span></a>
							<p class="info">Tình hình của tôi càng ngày càng tồi tệ, Nhiều năm trôi qua, bạn bè và những người quen biết của tôi cứ lần lượt gặp gỡ, yêu nhau, kết hôn, có con. Còn tôi thậm chí không thể nghĩ tới việc tôi có thể quan hệ tình dục với một cô gái. Tôi bối rối khủng khiếp khi thực hiện bước đầu tiên. Tôi rất sợ phản ứng tiêu cực của cô gái của mình khi nhìn thấy cậu nhỏ của tôi . Năm nay tôi đã 23 tuổi, và mỗi một năm trôi đi sự việc lại càng khó khăn hơn… bác sĩ nghĩ <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> có thể giúp được tôi không?</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_8.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Trần H.</span></a>
							<p class="info">Tôi không rõ nó có hiệu quả thế nào với bạn, nhưng nó đã giúp tôi. Tôi cũng 23 tuổi, cậu nhỏ của tôi nhờ <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> đã đạt được 15,2 cm. Sau 1 tháng nó dài thêm 50 mm và đường kính tắng 23 mm. Đối với tôi đó là một kết quả tuyệt vời. Tôi có thể show ảnh cho bạn xem. Đây là Trước và Sau khi dùng<br>
								<img alt="" src="img/img7.jpg">
							</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_2.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến sĩ Bách Nhu</span></a>
							<p class="info">Thật là ấn tượng. Các bạn nhìn xem. Một ca phẫu thuật không thể đảm bảo kết quả tương tự. Các bác sĩ phẫu thuật chỉ giỏi giả vờ! Họ sẽ làm như thế nào với chúng ta!</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_28.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Hiếu T.</span></a>
							<p class="info">Tôi đã không nói chuyện với cha mẹ và bạn bè về vấn đề này. Tôi rất nhút nhát. Có lẽ hầu hết ai ở vị trí của tôi đều nhút nhát. Tôi biết rằng quá trình biến đổi sinh lý của mình không hoàn thiện<br>
								Xin bác sĩ cho biết cái gì có thể giúp tôi vượt qua nỗi sợ hãi và tâm trạng mất niềm tin này, để bắt đầu cố gắng xây dựng lại cuộc sống tình dục của mình?!
							</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_2.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến sĩ Bách Nhu</span></a>
							<p class="info">Tôi đã gửi một tin nhắn cho bạn với các mẹo và lời khuyên về vấn đề khắc phục những bối rối tâm lý. Về mặt sinh lý, bạn hãy đọc bài viết của tôi một lần nữa, có lẽ phương pháp này là dành cho bạn.<br>
								<img alt="" src="img/img6.jpg">
							</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_1.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Huyền M.</span></a>
							<p class="info">Tôi đã đặt mua <a href="<?php echo $url; ?>" target="_blank">Maxisize</a> cho chồng tôi một năm trước. Chúng tôi thực sự hài lòng về hiệu quả của nó. Tất nhiên tôi không dùng thước đo như đo hộp diêm)))) Quan trọng là cậu nhỏ của chồng tôi đã tăng kích cỡ và chúng tôi đã thoải mái hơn nhiều khi ở trên giường. Tôi cảm nhận được nó hoàn toàn, và cơn cực khoái lên gấp một trăm lần! Vì vậy, Ngài Bách Nhu hãy cho chúng tôi những lời khuyên đúng đắn. Người đọc thường xuyên blog của Ngài, Huyền M.</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_2.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Tiến sĩ Bách Nhu</span></a>
							<p class="info">Rất vui mừng khi nhìn thấy trong bài viết của tôi những đại diện nữ giới và đó là một điều đáng để ăn mừng. Vì những người phụ nữ thân mến, tình trạng thể chất và tinh thần của đàn ông phụ thuộc chính vào thái độ của các bạn. Hãy quan tâm và yêu thương chúng tôi, và tất cả sẽ tốt đẹp!</p>
						</div>
						<div class="comment__item clearfix hm">
							<img alt="" src="img/foto_72.jpg"> <a href="<?php echo $url; ?>" target="_blank"><span class="name">Dublin_blin</span></a>
							<p class="info">Một lần tôi đã cố gắng để tăng vẻ phô trương của mình, làm rách da cậu nhỏ. Tôi đã bị đau nhức 3 tháng liền!! Và cậu nhỏ của tôi bị giảm 10 cm. Tôi sẽ đặt hàng <a href="<?php echo $url; ?>" target="_blank">Maxisize</a>! Tôi tin tưởng những bác sĩ như thế này, những người chống lại nạn tham nhũng và thương mại</p>
						</div>
					</div>

				</div>
				<div class="side-bar">
					<a href="<?php echo $url; ?>" target="_blank">
						<div class="side-bar-img">
							<img alt="" src="img/side_bar-t2.jpg"> <span>Shop bán đồ<br>
							chơi tình dục</span>
						</div>
					</a>
					<div class="block-product">
						<a href="<?php echo $url; ?>" target="_blank"><img alt="" src="img/prod.png" width="250"></a> <a class="btn" href="<?php echo $url; ?>" target="_blank">Đặt hàng</a>
					</div>
				</div>
			</div>
			<div class="foot">
				<div class="container clearfix">
					@G-Blog, 2017
				</div>
			</div>
		</div>
		<script type='text/javascript'>var binom_link='<?php echo $tracker['domain'].$tracker['file']; ?>?key=<?php echo $tracker['key'];?>';document.write('<img src="'+binom_link+'&lp_type=pixel&'+window.location.search.substring(1)+'t6=<?php echo $host; ?>" style="display:none"/>');</script>
    <script src="http://d3isoh8x5r7c7o.cloudfront.net/lib/1.1.9.js"></script>
		<script>
			window.onscroll = function(){
			  if($(window).scrollTop()>=616)
			  {
			    $('.block-product').addClass('fixed-block');
			  }
			  else {
			      $('.block-product').removeClass('fixed-block');
			  }
			}
		</script>
	</body>
</html>
