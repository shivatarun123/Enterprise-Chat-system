
<?php


$json = '{"name":"'.$_GET['name'].'","pass":"'.$_GET['pass'].'","m_id":"'.$_GET['m_id'].'","key":"'.$_GET['key'].'"}';

#echo $json."<br>";

$dec_json= json_decode($json, true);
#$key=$_GET['key'];
#echo "$key";
#print_r($dec_json);
$key=$dec_json['key'];
$name=$dec_json['name'];
$m_id=$dec_json['m_id'];
$pass=$dec_json['pass'];
//echo "$key";
$conn = mysqli_connect("localhost","root","","adrec1");

	// Check connection
	if (!$conn)
	{
	   die("Connection failed: " . mysqli_connect_error());
	}
	
mysqli_select_db($conn,"adrec1");
//$query="INSERT INTO `credentials` (`name`, `password`, `mail_id` , `status`, `access`) VALUES ('".$dec_json['name']."', '".$dec_json['pass']."', '".$dec_json['m_id']."', '".$dec_json['status']."', '".$dec_json['access']."')";
//$result = mysqli_query($conn,$query);       
#echo $result;

session_start();
include_once("get.php");

$rec=$m_id;
$topic='Account ownership details of Chat Express';
$sender="From: nybsaii@gmail.com";

$m_body=<<<EMAIL
Hi $name,

You have created an account in Chat Express. Your accout details are here as follows:

your login ID = $m_id
your password = $pass

Validity period is 6 months. The adminstrator can increase or decrease your validity span.

From Chat Express Admin.   
EMAIL;
include_once("get.php");
if ($key=="#$&*daSM13*")
{
$sql3=mysqli_query($get,"SELECT *FROM credentials where name='$name' ");
 $r3 = mysqli_num_rows($sql3);
 $txt="already email id exists use another mail id";
 if($r3==0){
 $sql4=mysqli_query($get,"SELECT *FROM credentials where mail_id='$m_id' ");
 $r4 = mysqli_num_rows($sql4);
  if($r4==0){
$store="INSERT into credentials (id,name,password,mail_id) VALUES (NULL,'$name','$pass','$m_id')";
$save=mysqli_query($get,$store) or die(mysql_error());
mail($rec,$topic,$m_body,$sender);
$txt="You have successfully registered as a user";
}
}else{

     $txt= "user already exists with same username or email id, plz use other ";
    }


}
else 
{
$txt="The entered key is not valid. This page is only for Extreme Security User";
}

//if(isset($txt))
//{
echo $txt;
//}

//header("Location: ./signuppage.php");

 
?>
<html>
<p align="left"><a href="signuppage.php"> Go Back </a></p>
</html>