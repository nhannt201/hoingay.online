<?php
if (file_exists("laivt_firewall.php"))
     include_once "laivt_firewall.php";  
session_start();
?>
<html lang="vi">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	    <link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico"/>
        <link rel="Shortcut Icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ico.ico" type="image/x-icon" />
   <meta property="fb:admins" content="100006476596425" /> 
  <meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="article" />
	<?php
	
	$idvg = "0";
	$idvg2 = "10";
	?>
		<?php




$iddd2 = $_GET['id'];
include("ketnoi.php");
$kq2=mysql_query("select * from data where id = '$iddd2'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row2=mysql_fetch_array($kq2)) 
{ 
 $idd22 = $row2['cauhoi']; 
}

?>
	<?php
$cauhoi = convert_vi_to_en($idd22);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	$sharefb2 = $gcauhoi."/".$_GET['id'].'.html';
//
  //echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 
?>
	
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo "<title>".$row['cauhoi']."</title>"; 
 echo '
 <meta name="title" content="'.$row['cauhoi'].'"/>'; 
  echo '
  <meta itemprop="name" content="'.$row['cauhoi'].'">';
	
	echo '
	<meta name="DC.Title" content="'.$row['cauhoi'].'" />';
}

?>
<meta name="revisit-after" content="1 days" />
<meta name="robots" content="noodp,noydir"/>
   
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 
$keyy2 = convert_vi_to_en($row['cauhoi']);
$tukhoa = str_replace(" ",", ",$keyy2);
$dataa2 = str_replace("<br />","",$row['noidung']);
$daaa = substr($dataa2,0,333);
$tukhoa2 = str_replace(" ",", ",$daaa);
$tukhoa3 = str_replace(" ",", ",$keyy2);
$tukhoa4 = str_replace("[","",$tukhoa3);
$tukhoa5 = str_replace("]","",$tukhoa4);

$tukhoa6 = str_replace("[","",$tukhoa);
$tukhoa7 = str_replace("]","",$tukhoa6);

$tukhoa8 = str_replace("[","",$tukhoa2);
$tukhoa9 = str_replace("]","",$tukhoa8);

$tukhoa10 = str_replace("[","",$row['cauhoi']);
$tukhoa11 = str_replace("]","",$tukhoa10);

echo ' 
<meta name="keywords" content="'.$tukhoa11.' '.$tukhoa5.' '.$tukhoa7.' '.$tukhoa9.'">'; 
}

?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$editlai = str_replace("<br />","",$row['noidung']);
//$daa = substr($editlai, 0, -150);
$tongso = strlen($editlai);
if ($tongso < 266) {
 echo '
 <meta name="description" content="'.$editlai.'">'; 
 echo '
	<meta name="DC.Description" content="'.$editlai.'...">'; 
}
else {
	$daaaa = substr($editlai,0,266);
	echo '
	<meta name="description" content="'.$daaaa.'...">
	'; 
	echo '
	<meta name="DC.Description" content="'.$daaaa.'...">
	'; 
}
}

?>
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
	<meta property="og:site_name" content="Hỏi Ngay Online" />
 
  

<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$editlai = str_replace("<br />","",$row['cauhoi']);
 echo "<meta name='og:title' content='".$editlai."'/>"; 

}

?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$editlai = str_replace("<br />","",$row['noidung']);
 $tongso = strlen($editlai);
if ($tongso < 266) {
 echo '<meta itemprop="description" content="'.$editlai.'">'; 
}
else {
	$daaaa = substr($editlai,0,266);
	echo '<meta itemprop="description" content="'.$daaaa.'...">'; 
}

}

?>
	

     <meta name="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $sharefb2; ?>"/>
	 <link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $sharefb2; ?>" />
     <meta name="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.png"/>
     <meta property="og:image:type" content="image/png" />
     <meta property="article:section" content="PHP tutorials" />
	 <meta property="article:author" content="Nguyễn Trung Nhẫn" />
	 <meta property="article:publisher" content="https://www.facebook.com/hoingay.online" />
     <meta name="copyright" content="Copyright © 2015 by http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
		<script>
			var _b = document.getElementsByTagName('base')[0], _bH = "http://<?php echo $_SERVER['HTTP_HOST']; ?>";
			if (_b && _b.href != _bH) _b.href = _bH;
		</script>
	<noscript><style>.JsOnly, .jsOnly { display: none !important; }</style></noscript>

    <!--<style type='text/css'>
		body{
		padding-top: 20px;
		padding-bottom: 50px;
		   font-family: "Times New Roman", Times, serif;

		}
	</style>
<style>
repeat-x
background: #ECE9E6; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #ECE9E6 , #FFFFFF); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #ECE9E6 , #FFFFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
</style>-->
	<link rel='stylesheet' type='text/css' href='css/theme.css' />
    <link rel='stylesheet' type='text/css' href='css/data.css' />

<!--tbody tr:hover{
    background: #B8C6D7;
}-->

    </head>
	 <body data-base="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
	<div class="floating-menu"><center><h1>Hỏi Ngay Online</h1>
	</center>
	
	</div>
<br/><br/>
<div id="gs" class="gs">
<br/>
   <TABLE  BORDER="1"><td>
	 <center>  <?php include("ads2.php"); ?><hr/>
</center></td>
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
<center>

<nav>

<span class="crumbs">
<span>
<a href="index.html" accesskey="1">Hỏi Ngay Online</a></span> <!-- BEGIN TEMPLATE: navbar_link -->
	&raquo; <span><font color="black"><b>Hỏi Đáp</b></font></span>

</span>
<!-- END TEMPLATE: navbar_link --><!-- BEGIN TEMPLATE: navbar_link -->

	&raquo;<span> 
<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
	
echo "<a href='".$_SERVER['HTTP_HOST']."/user?u=".$row['user']."'>".$row['user']."</a>";


}
}
?>
</span>
<!-- END TEMPLATE: navbar_link --> &raquo; <!-- BEGIN TEMPLATE: navbar_link -->

<span>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 echo $row['cauhoi']; 

}

?>
</span>

<!-- END TEMPLATE: navbar_link -->

</nav>


</center>
		<!--<h3><?php
       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Chào, '.$_SESSION['username'].' .Chúc bạn ngày tốt lành!';
       }
       else{

       }
       ?></h3>-->
	   	

	
	<?php
function _make_url_clickable_cb($matches) {
    $ret = '';
    $url = $matches[2];
    if ( empty($url) )
        return $matches[0];
    // removed trailing [.,;:] from URL
    if ( in_array(substr($url, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($url, -1);
        $url = substr($url, 0, strlen($url)-1);
    }
    return $matches[1] . "<a href=\"$url\" rel=\"nofollow\">$url</a>" . $ret;
}
function _make_web_ftp_clickable_cb($matches) {
    $ret = '';
    $dest = $matches[2];
    $dest = 'http://' . $dest;
    if ( empty($dest) )
        return $matches[0];
    // removed trailing [,;:] from URL
    if ( in_array(substr($dest, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($dest, -1);
        $dest = substr($dest, 0, strlen($dest)-1);
    }
    return $matches[1] . "<a href=\"$dest\" rel=\"nofollow\">$dest</a>" . $ret;
}
function _make_email_clickable_cb($matches) {
    $email = $matches[2] . '@' . $matches[3];
    return $matches[1] . "<a href=\"mailto:$email\">$email</a>";
}
function make_clickable($ret) {
    $ret = ' ' . $ret;
    // in testing, using arrays here was found to be faster
    $ret = preg_replace_callback('#([\s>])([\w]+?://[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_url_clickable_cb', $ret);
    $ret = preg_replace_callback('#([\s>])((www|ftp)\.[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_web_ftp_clickable_cb', $ret);
    $ret = preg_replace_callback('#([\s>])([.0-9a-z_+-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,})#i', '_make_email_clickable_cb', $ret);
    // this one is not in an array because we need it to run last, for cleanup of accidental links within links
    $ret = preg_replace("#(<a( [^>]+?>|>))<a [^>]+?>([^>]+?)</a></a>#i", "$1$3</a>", $ret);
    $ret = trim($ret);
    return $ret;
}
?>
<TABLE  BORDER="1">
</div>
<?php



if(isset($_GET['id'])){
$iddd = $_GET['id'];
include("ketnoi.php");
include 'bbcode.php';
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
$xemcaida = $row['noidung'];
$audio = str_replace("<br />", "", $xemcaida);
$html_code	= bbcode::tohtml($audio,TRUE);
//$audio = str_replace("[img]", "<img src='", $xemcaida);
//$noidung2 = str_replace("[/img]", "' width='560' height='315'/>", $audio);
//$audio2 = str_replace("[youtube]", "<iframe width='300'src='", $noidung2);
//$noidung = str_replace("[/youtube]", "' frameborder='0' allowfullscreen></iframe>", $audio2);
	echo "<TR><TD COLSPAN='2'>

<h2>Câu hỏi bởi <b>".$row['user']."</b></h2></TD></TR>";
 echo "<TR><TD><h3 style='text-align: left;'><b>Ngày giờ gửi:</b> <font color='00000'>".$row['date']."</font></h3></TD></TR>"; 
  echo "<TR><TD><h3 style='text-align: left;'><b>Câu hỏi:</b> <font color='00000'>".$row['cauhoi']."</font></h3></TD></TR>"; 
   $string = "<TR><TD><h3 style='text-align: left;'><b>Nội dung:</b> <br/><br/><font color='00000'>".$html_code."</font></h3></TD></TR>"; 
echo make_clickable($string);

}
}
?>

	
<TR><TD><h2 style='text-align: center;'>Trả lời</h2></TD></TR>
<?php
  if(isset($_GET['lm'])){

       if (isset($_SESSION['username']) && $_SESSION['username']){
        
		  $idvg2 = $_GET['lm'] + 10;
		  $idvg = $idvg2 - 10;
		   echo "<TR><TD><h2>  <a href ='/view?id=".$_GET['id']."&lm=".$idvg2."' />Xem thêm bình luận</a></h2></TR></TD>";
       }
       else{

       }
  }
       ?>
<?php




$iddd = $_GET['id'];
include("ketnoi.php");
$kq=mysql_query("select * from data where id = '$iddd'") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
while ($row=mysql_fetch_array($kq)) 
{ 
 $idd2 = $row['cauhoi']; 
}

?>
<?php
include("ketnoi.php");
if(isset($_GET['id'])){
	
$data = mysql_real_escape_string($idd2);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM cmm WHERE (idd LIKE '%$data%') LIMIT $idvg,$idvg2");
		if(mysql_num_rows($query)!=0){
			while($row = mysql_fetch_assoc($query)){
				
			 echo "<TR><TD><h3 style='text-align: left;'>Trả lời bởi : <b>".$row['user']."</b> lúc <b>".$row['date']."</b><hr/><br/><font color='red'>";
		$string = $row['noidung']."</font></h3></TD></TR>";
echo make_clickable($string);
		 
				}
		}
		else
		{
echo "<TR><TD><h3 style='text-align: left;'>Không tìm thấy câu trả lời nào!</h3></TD></TR>";		}
}
else
{

}
}
else
{
	
}
?>
  <?php
  if(isset($_GET['id'])){

       if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<TR><TD><h2>  <a href ='/traloi?id=".$_GET['id']."' />Trả lời Chủ đề mới</a></h2></TR></TD>";
       }
       else{

       }
  }
       ?>
	     <?php
		  if(isset($_GET['id'])){
  if(isset($_GET['lm'])){

   
     
  }
    else{
    if (isset($_SESSION['username']) && $_SESSION['username']){
          echo "<TR><TD><h2>  <a href ='/view?id=".$_GET['id']."&lm=0' />Xem thêm bình luận</a></h2></TR></TD>";
       }
       }
		  }
       ?>
</TABLE>

<?php
$cauhoi = convert_vi_to_en($idd2);
 $gcauhoi =  preg_replace('([^a-zA-Z0-9])', '-', $cauhoi);  
	$sharefb = $gcauhoi."/".$_GET['id'].'.html';
//
  //echo "<TR><TD> <font color ='009900'><b></b></font><h4><b><a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></h4></b></TD></TR>"; 
?>
<!--<TABLE  BORDER="1">
<td>
<div class="fb-comments" data-href="https://hoingay.online/<?php echo $sharefb; ?>" data-numposts="5" width="600"></div>
</td>
<TR><TD>

<h2>Bình luận Facebook</h2></TD></TR>

</TABLE>-->

<TABLE  BORDER="1">
<td>

<div class="fb-like" data-href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $sharefb; ?>" data-width="200"></div>
</td>
<td>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="200" data-href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $sharefb; ?>"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'vi'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></td>
<TABLE  BORDER="1">
<td>

<div class="fb-share-button" data-href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $sharefb; ?>" data-layout="button_count"></div>

</td>
<td>
<a href="https://plus.google.com/share?url=http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $sharefb; ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+"/></a>
    </script>
</td>
</TABLE>

<TABLE  BORDER="1">

<?php


	echo "<TR><TD>

<h2>Câu hỏi cùng chuyên mục</h2></TD></TR>";
include("ketnoi.php");
$kq=mysql_query("SELECT id from data ORDER BY RAND() DESC LIMIT 10") or die ("Không thể xuất thông tin Bảng tb ".mysql_error());
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
  echo "<TR><TD> Câu Hỏi: <a href='/".$gcauhoi."/".$data['id'].".html'>".$data['cauhoi']."</a></TD></TR>"; 


}


?>
</TABLE>

<!--<center>
<script id="_wau9i6">var _wau = _wau || []; _wau.push(["small", "guo5aqbfcomf", "9i6"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>-->
</center>
<TABLE BORDER="1"><td>
<center>  <?php include("ads1.php"); ?> </center></td>
</TABLE>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=372380406281906";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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