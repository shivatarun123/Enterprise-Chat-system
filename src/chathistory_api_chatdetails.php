
<?php
SESSION_START();

$json = '{"var1":"'.$_GET['var1'].'","var2":"'.$_GET['var2'].'"}';

echo $json."<br>";

$dec_json= json_decode($json, true);

#print_r($dec_json);

	
$_SESSION['var1']=$dec_json['var1'];
$_SESSION['var2']=$dec_json['var2'];

header("Location: ./chatdetails.php");

?>


