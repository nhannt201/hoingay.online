<?php
session_start();
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>

	
<?php





 echo "<title> Tìm kiếm | Hỏi Ngay Online</title>"; 


?>
       <meta name="title" content="Hỏi Ngay Online"/>
    <meta name="KEYWORDS" content="FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap, hoi dap co ngay, hỏi đáp có ngay,hoi ngay online">
    <meta name="DESCRIPTION" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.">

    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="AUTHOR" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h"/>
    <meta name="COPYRIGHT" content="Copyright (c) by http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
            <meta name="ROBOTS" content="INDEX, FOLLOW"/>
        <meta name="Googlebot" content="index,follow,archive">
        <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="geo.region" content="Vietnam"/>

    <meta name="og:title" content="Hỏi Ngay Online - Hỏi Đáp Có Ngay"/>
    <meta name="og:description" content="Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h."/>
    <meta name="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style type='text/css'>
		body{
		padding-top: 20px;
		padding-bottom: 50px;
		margin: 0px;


		}
	</style>
	<link rel='stylesheet' type='text/css' href='css/theme.css' />
    <link rel='stylesheet' type='text/css' href='css/data.css' />


<!--
tbody tr:hover{
    background: #B8C6D7;
}
-->
<style>
.searchform {
float: left;
margin-top: 20px;
border:#00afdd 2px solid;
height:31px;
width:690px;
}
.searchform input[type=text] 







{
width:625px;
height:31px;
border:0px;
background:#ffffff;
float:left;
margin:0px;padding:3px;
}
.searchform input[type=submit] 






{
border:#00afdd 2px solid;
float:right;
margin:2px 2px 2px 2px;
height:27px;
padding-top:2px;
background:#4fbfdc;
}
</style>

    </head>
	 <body data-base="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
	<center><div style="visibility : hidden;"><h1>Hỏi Ngay Online</h1></div></center>
		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>
   <TABLE  BORDER="1"><td>
	 <center>  <?php include("ads2.php"); ?></center></td>
	 </TABLE>

	<div id="menu">
	<ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li><br/>
 

  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<li><a href='thoat'>Đăng xuất</a></li><br/>
<li><a href='#' accesskey='3' title='Nghe Nhạc'>Nghe Nhạc</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>MyMy</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>Xem Phim</a></li><br/>
";
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li><br/>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li><br/>
<li><a href='#' accesskey='3' title='Nghe Nhạc'>Nghe Nhạc</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>MyMy</a></li><br/>
<li><a href='#' accesskey='3' title='Đăng nhập'>Xem Phim</a></li><br/>
";
       }
       ?>
</ul>
	</div>
	


<TABLE  BORDER="1">

<?php

	echo "<TR><TD COLSPAN='2'>

<h2>Tìm kiếm</h2></TD></TR>";?>

<td>
<div id="search">
<form class="searchform" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
<input class="searchsubmit" type="submit" value="Tìm kiếm" />
</form>
</div></td>


</TABLE>

<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script></center>-->


  <?php include 'footer.php'; ?>

	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->

