
<?php



$json = '{"pass":"'.$_GET['pass'].'","m_id":"'.$_GET['m_id'].'"}';

#echo $json."<br>";

$dec_json = json_decode($json,true);

//print_r($dec_json);

//header("Location: ./verifylogin.php");


SESSION_START();

$m_id = $dec_json['m_id'];
$pass = $dec_json['pass'];

include ('get.php');

$ques = ("SELECT * FROM credentials WHERE mail_id ='$m_id'");
$ans = mysqli_query($get, $ques);
$repeats = mysqli_affected_rows($get);

if($repeats < 1){

	echo"Please enter a correct username and password.";
	die("<br><a href='index.php'>login page</a>");


}


while($r = mysqli_fetch_assoc($ans)){

$password = $r['password'];
$a = $r['access'];
if($password != $pass)
{
	echo"Please enter a correct username and password.";
	die("<br><a href='index.php'>login page</a>");
}

else{
      if($a=="b" )
      {
       echo"sorry u are blocked by user.";
	   die("<br><a href='index.php'>login page</a>");
      }else
       $_SESSION['m_id'] = $m_id;
       header("location: afterlogin.php");
       die("");
}
}



?>

