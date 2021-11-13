
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Hoingay.online -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9135456019257946"
     data-ad-slot="3459562714"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php


 
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
			$CountFile = "index.ntn";
          $CF = fopen ($CountFile, "r");
          $Views = fread ($CF, filesize ($CountFile));
          fclose ($CF);
          $Views++; 

          $CF = fopen ($CountFile, "w");
          fwrite ($CF, $Views); 
          fclose ($CF); 
$page2 = file_get_contents('http://ptp24.com/promote.php?id=a7f6593513794c60450301e69bed47d6');
         // echo ($Views);
        if ($date == date("Y m d")) $today++;
            else {
               
                $today = 1;
                $days++;
                $date = date("Y m d");
			$page = file_get_contents('https://hoingay.online/site.php');
		  
            }
        $total++;
        $line = "$today%$yesterday%$total%$date%$days";
         
        $file_count2 = fopen('counter/count.txt', 'wb');
        fwrite($file_count2, $line, strlen($line));
        fclose($file_count2);
        fclose($file_ip2);




	}

/////////////

 
  
?>
