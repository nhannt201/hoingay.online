<?php
//Khai b��o s�6�1 d�6�3ng session
session_start();
?>
<?php 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session email
}
echo "<meta http-equiv='refresh' content='0;/'>";
?>
