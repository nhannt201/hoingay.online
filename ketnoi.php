<?php
     $db_con = mysql_connect("mysql4.000webhost.com","a7760706_hoi","");
mysql_set_charset('utf8');


     if (!$db_con){
          die('Nhấn F5 để thử lại - Lỗi: ' . mysql_error());
     }
     mysql_select_db("a7760706_hoi", $db_con);
	 	$servername = "mysql4.000webhost.com";
$username = "a7760706_hoi";
$password = "";
$dbname = "a7760706_hoi";
$dbhost = 'mysql4.000webhost.com';
            $dbuser = 'a7760706_hoi';
            $dbpass = '';
?>
