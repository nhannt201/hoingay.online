<?php
session_start();
?>
<?php
$q1 = "0";
$q2 = "10";
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>

	
<?php




$iddd = $_GET['q'];

 echo "<title> Tìm '".$iddd."' | Hỏi Ngay Online</title>"; 


?>

    <meta name="KEYWORDS" content="FAQ Online, hoi dap, truc tuyn , hoi dap online,luutru360, hoi ngay co dap,hoi ngay online">
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
	 <center> <?php include("ads2.php"); ?></center></td>
	 </TABLE>

	<div id="menu">
	<ul>
<li class="current_page_item"><a href="/" accesskey="1" title="Trang chủ">Trang chủ</a></li><br/>
 

  <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<li><a href='thoat'>Đăng xuất</a></li><br/>
";
       }
       else{
echo "<li><a href='/dang-ky-tai-khoan' accesskey='2' title='Đăng ký'>Đăng Ký</a></li><br/>
<li><a href='/dang-nhap' accesskey='3' title='Đăng nhập'>Đăng Nhập</a></li><br/>
";
       }
       ?>
</ul>
	</div>
	


<TABLE  BORDER="1">

<?php

	echo "<TR><TD COLSPAN='2'>

<h2>10 Kết quả tìm kiếm</h2></TD></TR>";
?>
<?php
  if(isset($_GET['lm'])){

      
        
		  $q2 = $_GET['lm'] + 10;
		  $q1 = $q2 - 10;
		   echo "<TR><TD><h2>  <a href ='/tim-kiem?q=".$_GET['q']."&lm=".$q2."' />Xem thêm kết quả</a></h2></TR></TD>";
       }
       else{

       }
  
       ?>
<?php
include("ketnoi.php");
if(isset($_GET['q'])){
$data = mysql_real_escape_string($_GET['q']);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM data WHERE (cauhoi LIKE '%$data%') LIMIT $q1,$q2");
		if(mysql_num_rows($query)!=0){
			while($row = mysql_fetch_assoc($query)){
				//
$cauhoi = convert_vi_to_en($row['cauhoi']);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
//	$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$row['id'].'.html</loc>'."$n";
//
			 echo "<TR><TD><a href='".$_SERVER['HTTP_HOST']."/".$gcauhoi."/".$row['id'].".html'><h3 style='text-align: left;'><font color='red'>";
		echo $row['cauhoi']."</font></h3></a></TD></TR>";
		 
				}
		}
		else
		{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy bài viết nào!</h3></TD></TR>";		}
}
else
{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy bài viết nào!</h3></TD></TR>";
}
}
else
{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy bài viết nào!</h3></TD></TR>";	
}
?>
  <?php
		  if(isset($_GET['q'])){
    if (isset($_GET['lm'])){
       }
   
 else{
               echo "<TR><TD><h2>  <a href ='/tim-kiem?q=".$_GET['q']."&lm=10' />Xem thêm kết quả</a></h2></TR></TD>";

       }

  }
    else{

       }
		  
       ?>
<td><h2>  <a href ='/timvoihoidap' />Về trang tìm kiếm</a></h2></td>
</TABLE>

<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script></center>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
var offset = 220;
var duration = 500;
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > offset) {
jQuery('.back-to-top').fadeIn(duration);
} else {
jQuery('.back-to-top').fadeOut(duration);
}
});

jQuery('.back-to-top').click(function(event) {
event.preventDefault();
jQuery('html, body').animate({scrollTop: 0}, duration);
return false;
})
});
</script>

<style>
div#page {
max-width: 900px;
margin-left: auto;
margin-right: auto;
padding: 20px;
}

.back-to-top {
position: fixed;
bottom: 2em;
right: 0px;
text-decoration: none;
color: #000000;
background-color: rgba(235, 235, 235, 0.80);
font-size: 12px;
padding: 1em;
display: none;
font-weight: bold;
}

.back-to-top:hover {
background-color: rgba(135, 135, 135, 0.50);
text-decoration: none;
}
</style>

<a class="back-to-top" href="#">Lên đầu trang</a>

   <?php include 'footer.php'; ?>

	 </body>
	 </html>
	 <!-- Copyright (C) Hoi ngay Online Hoingay.online - Hoi Ngay Online 2015 -->

<?php
function convert_vi_to_en($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        return $str;
    }
?>
 