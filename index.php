﻿<?php
if (file_exists("laivt_firewall.php"))
     include_once "laivt_firewall.php";  
//Khai báo sử dụng session
session_start();

?>
<?php
$hiden = "";
?>
<html lang="vi">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/png" href="/images/ico.ico"/>
    <link rel="Shortcut Icon" href="/images/ico.ico" type="image/x-icon" />	﻿		
﻿       <title>Hỏi Ngay Online</title>
    <meta name="title" content="Hỏi Ngay Online"/>
    <meta itemprop="name" content="Hỏi Ngay Online">
	<meta property="og:title" content="Hỏi Ngay Online" />
	<meta name="DC.Title" content="Hỏi Ngay Online" /><meta name="revisit-after" content="1 days" />
    <meta name="robots" content="noodp,noydir"/>
    <meta name='keywords' content='Hỏi Ngay Online, hoi ngay, hoingay, hoi ngay online, hoi dap co ngay,hoi,dap,co,ngay'>﻿
 <meta name='description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
	<meta name='DC.Description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>
		<link rel="author" href="https://plus.google.com/+TrungNh%E1%BA%ABnNguy%E1%BB%85n2001"/>
    <meta http-equiv="EXPIRES" content="0"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name='AUTHOR' content='Hỏi Ngay Online'/>
    <meta name="COPYRIGHT" content="Copyright (c) by http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="RATING" content="GENERAL"/>
    <meta name="GENERATOR" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
    <meta name="generator" content="HoingayOnline v2.0" />
    <meta name="geo.placename" content="Việt Nam" />
    <meta name="geo.region" content="vn" />
	<meta property="og:site_name" content="Hỏi Ngay Online />
    <meta property="og:type" content="article" />
    <meta property="fb:admins" content="100006476596425" />

﻿<meta name='og:title' content='Hỏi ngay Online'/>﻿<meta itemprop='description' content='Hỏi Ngay Online - Hỏi đáp có ngay trao đổi kiến thức qua câu hỏi và câu trả lời trong 24h.'>     <meta name="og:url" content="https://hoingay.online/"/>
	 <link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
     <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
     <meta property="og:image:type" content="image/png" />
     <meta property="article:section" content="PHP tutorials" />
	 <meta property="article:author" content="Nguyễn Trung Nhẫn" />
	 <meta property="article:publisher" content="https://www.facebook.com/hoingay.online" />
     <meta name="copyright" content="Copyright © 2015 by Hoingay.online" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
		<script>
			var _b = document.getElementsByTagName('base')[0], _bH = "http://<?php echo $_SERVER['HTTP_HOST']; ?>";
			if (_b && _b.href != _bH) _b.href = _bH;
		</script>
	<noscript><style>.JsOnly, .jsOnly { display: none !important; }</style></noscript>
   <!--<style type='text/css'>
		body{
		
		

background: url(images/a.jpg);
}
.gs{ 
background: url(images/bgg.jpg) repeat-x;
        
		}
	</style>
<style>
repeat-x
padding-top: 20px;
		padding-bottom: 50px;
background: #ECE9E6; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #ECE9E6 , #FFFFFF); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #ECE9E6 , #FFFFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
</style>-->
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
.slide_likebox {
    -moz-transition: all 1s ease 0s;
  -webkit-transition: all 1s ease 0s;
  -o-transition: all 1s ease 0s;
    right:-205px; !important;
}
.slide_likebox:hover {
    -moz-transition: all 1s ease 0s;
  -webkit-transition: all 1s ease 0s;
  -o-transition: all 1s ease 0s;
    right: 0 !important;
}
.slide_likebox {
float:right;
width:247px;
height:385px;
background: url(http://unicity.edu.vn/styles/images/fb.png) no-repeat !important;
display:block;
color:#FFFFFF ;
right:-205px;
padding:0;
position:fixed;
top: 170px;
z-index:1002;
}
.slide_text {
font-family: Geneva, Verdana, sans-serif;
font-size: 8px;
padding-left: 10px;
text-decoration: none;
color: #FFFFFF;
} 
</style>




<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>


    </head>

	 <body data-base="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
<div id="imgLOAD" style="position:fixed;top:50px;right:200px" align="right">
<img src="https://www.gmanetwork.com/gma/assets/images/loading_list.gif" width="100" />
</div>
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
	<div id="gs" class="gs"><div style="visibility : hidden;"><center><h1>Hỏi Ngay Online</h1></center></div>
		<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>
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
	   <TABLE  BORDER="1"><td>
	 <center>  <?php include("ads2.php"); ?> 
</center></td>
	 </TABLE>
  
	
	
	<TABLE  BORDER="1">



<td>
<div id="search">
<form class="searchform" action="tim-kiem">
<input class="q" onfocus="if (this.value == 'Tìm kiếm bài viết …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm bài viết …';}" type="text" name="q" value="Tìm kiếm bài viết …" />
<input class="searchsubmit" type="submit" value="Tìm kiếm" />
</form>
</div></td>
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".q").autocomplete({
		source: "search.php",
		minLength: 1
	});				

});
</script>


</TABLE>
	   <TABLE  BORDER="1"><td>
	 <center>  
<!--<h3>1 Click nhận ngay 1$</h3>-->
<a href="https://www.neobux.com/?r=me09112001"><img src="https://img.neobux.com/imagens/banner9.gif" width="550" height="60"></a>
</center></td>
	 </TABLE>
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>10 câu hỏi mới nhất</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from data where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  //
$cauhoi = convert_vi_to_en($data['cauhoi']);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	//$xml3.= "$t".'<loc>'."http://hoingay.online/".$gcauhoi."/".$data['id'].'.html</loc>'."$n";
//
  echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 


}


?>
 <?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
echo "<TR><TD><h2>  <a href='/add' />Tạo Chủ đề mới</a></h2></TR></TD>";
       }
       else{

       }
       ?>

</TABLE>
</div>
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>10 Thành viên mới</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from member ORDER BY id DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['id']);

 $sql = "select * from member where id = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><h4><a href='/user?id=".$data['id']."&u=".$data['username']."'>".$data['fullname']."</h4></th><th><center><a href='/user?id=".$data['id']."&u=".$data['username']."'>".$data['username']."</h4></th></center></a></TD></TR>"; 


}


?>

</TABLE>


  <TABLE  BORDER="1"><td>
	 <center>  <h2>Đừng để những con số bằng nhau nếu không sẽ chỉ hiện 1 tên tài khoản ưu tú nhất nên hãy thi đấu nhau đừng để cùng con số!</h2></a></center></td>
	 </TABLE>
<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bài viết</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from vieww ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from vieww where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='red'><h4>".$data['idd']."</h4></font></th><th><h3>Số bài viết: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều bình luận</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from topcmm ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from topcmm where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='00CC66'><h4>".$data['user']."</font></h4></th><th><h3>Số bình luận: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có nhiều chủ đề</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT view from chudee ORDER BY view DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['view']);

 $sql = "select * from chudee where view = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='999900'><h4>".$data['user']."</h4></font></th><th><h3>Số chủ đề: ".$data['view']."</h3></th</TD></TR>"; 


}


?>

</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD COLSPAN='2'>

<h2>Top 10 thành viên có điểm nhiều nhất</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT diem from diemso ORDER BY diem DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 

$id2 = mysql_real_escape_string($row['diem']);

 $sql = "select * from diemso where diem = $id2";
  $result = mysql_query($sql);
  $data = mysql_fetch_array ($result);
  echo "<TR><TD><font color='003366'><h4>".$data['user']."</font></h4></th><th><h3>Điểm số: ".$data['diem']."</h3></th</TD></TR>"; 


}


?>

</TABLE>
<?php

function online()
{
    $rip = $_SERVER['REMOTE_ADDR'];
    $sd = time();
    $count = 1;
    $maxu = 1;
 
    $file1 = "counter/online.log";
    $lines = file($file1);
    $line2 = "";
 
    foreach ($lines as $line_num => $line)
    {
        if($line_num == 0)
        {
            $maxu = $line;
        }
        else
        {
            $fp = strpos($line,'****');
            $nam = substr($line,0,$fp);
            $sp = strpos($line,'++++');
            $val = substr($line,$fp+4,$sp-($fp+4));
            $diff = $sd-$val;
 
            if($diff < 300 && $nam != $rip)
            {
                $count = $count+1;
                $line2 = $line2.$line;
            }
        }
    }
 
    $my = $rip."****".$sd."++++\n";
    if($count > $maxu)
    $maxu = $count;
 
    $open1 = fopen($file1, "w");
    fwrite($open1,"$maxu\n");
    fwrite($open1,"$line2");
    fwrite($open1,"$my");
    fclose($open1);
    $count=$count;
    $maxu=$maxu+200;
     
    return $count;
}
 
///////////////////////
    $ip = $_SERVER['REMOTE_ADDR'];
     
    $file_ip = fopen('counter/ip.txt', 'rb');
    while (!feof($file_ip)) $line[]=fgets($file_ip,1024);
    for ($i=0; $i<(count($line)); $i++) {
        list($ip_x) = explode("\n",$line[$i]);
        if ($ip == $ip_x) {$found = 1;}
    }
    fclose($file_ip);
      $yesterday = $today;
    if (!($found==1)) {
        $file_ip2 = fopen('counter/ip.txt', 'ab');
        $line = "$ip\n";
        fwrite($file_ip2, $line, strlen($line));
        $file_count = fopen('counter/count.txt', 'rb');
        $data = '';
        while (!feof($file_count)) $data .= fread($file_count, 4096);
        fclose($file_count);
        list($today, $yesterday, $total, $date, $days) = explode("%", $data);

        if ($date == date("Y m d")) $today++;
            else {
               
                $today = 1;
                $days++;
                $date = date("Y m d");
			
		  
            }
        $total++;
        $line = "$today%$yesterday%$total%$date%$days";
         
        $file_count2 = fopen('counter/count.txt', 'wb');
        fwrite($file_count2, $line, strlen($line));
        fclose($file_count2);
        fclose($file_ip2);
		
      }
       
       ?>
	   
	   <?
    function today()
    {
        $file_count = fopen('counter/count.txt', 'rb');
        $data = '';
        while (!feof($file_count)) $data .= fread($file_count, 4096);
        fclose($file_count);
        list($today, $yesterday, $total, $date, $days) = explode("%", $data);
        return $today;
    }
    function yesterday()
    {
        $file_count = fopen('counter/count.txt', 'rb');
        $data = '';
        while (!feof($file_count)) $data .= fread($file_count, 4096);
        fclose($file_count);
        list($today, $yesterday, $total, $date, $days) = explode("%", $data);
        return $yesterday;
    }
    function total()
    {
        $file_count = fopen('counter/count.txt', 'rb');
        $data = '';
        while (!feof($file_count)) $data .= fread($file_count, 4096);
        fclose($file_count);
        list($today, $yesterday, $total, $date, $days) = explode("%", $data);
        echo $total;
    }
    function avg()
    {
        $file_count = fopen('counter/count.txt', 'rb');
        $data = '';
        while (!feof($file_count)) $data .= fread($file_count, 4096);
        fclose($file_count);
        list($today, $yesterday, $total, $date, $days) = explode("%", $data);
        echo ceil($total/$days);
    } 

	
?>

<TABLE  BORDER="1">

	<TR><TD COLSPAN='2'>

<h2>Thống kê</h2></TD></TR>";

  <TR><TD><font color='003366'><h3>Đang online trang chủ:</font></h3></th><th><h3><?php echo online(); ?> </h3></th></TD></TR>
<TR><TD><font color='003366'><h3>Truy cập hôm nay:</font></h3></th><th><h3><?php echo today(); ?> </h3></th></TD></TR>
<TR><TD><font color='003366'><h3>Truy cập trung bình:</font></h3></th><th><h3><?php avg(); ?> </h3></th></TD></TR>




</TABLE>
<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script></center>-->

<!--<div class="slide_likebox"> <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;"><div class="FB_Loader"></div><span><iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/H%E1%BB%8Fi-%C4%90%C3%A1p-C%C3%B3-Ngay-L%C6%B0u-Tr%E1%BB%AF-360-1632667910317096/?ref=bookmarks&amp;width=198&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=368" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:198px; height:368px;" allowTransparency="true"></iframe></span></div></div>-->

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


<TABLE BORDER="1"><td>
<center> <?php include("ads1.php"); ?> </center></td>
</TABLE>

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