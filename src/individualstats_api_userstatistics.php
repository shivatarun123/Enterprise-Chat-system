
<?php
SESSION_START();

$json = '{"var1":"'.$_GET['var1'].'"}';

#echo $json."<br>";

$dec_json= json_decode($json, true);

#print_r($dec_json);

$var1=$dec_json['var1'];	
$_SESSION['var1']=$var1;


header("Location: ./userstatistics_api_db_get.php");

?>

