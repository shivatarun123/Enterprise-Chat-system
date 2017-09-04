<?php
SESSION_START();

$conn = mysqli_connect("localhost","root","","adrec1");
$result=$conn->query("SELECT * FROM credentials");
$value=$conn->query("SELECT * FROM infobase");
#$var1=$_POST['var1'];
$var1=$_SESSION['var1'];
#echo $var1;
$a=0;$b=0;$c=0;$d=0;$e=0;
/*
?>
<?php
*/
if($value->num_rows !=0)
{
while($ans=$value->fetch_assoc())
{
		$sender=$ans['sender'];
		$receiver=$ans['receiver'];
		$msg_type=$ans['msg_type'];
		$msg=$ans['msg'];
		if($var1 == $sender)
		{ 
		if($msg_type == 0)
		{
		$a=$a+1;
		}
		else
		{
		$b=$b+1;
		}
		}
		if($var1 == $receiver)
		{
		if($msg_type == 0)
		{
		$c=$c+1;
		}
		else
		{
		$d=$d+1;
		}
		}
		if($var1 == $sender || $var1 == $receiver)
		{
		$e=$e+strlen($msg);
		}
		// Only message size is calculated but not binary files
}
}
else
{
echo "No result.";
}

$_SESSION['max']=$max;
$_SESSION['a']=$a;
$_SESSION['b']=$b;
$_SESSION['c']=$c;
$_SESSION['d']=$d;
$_SESSION['e']=$e;
header("Location: ./userstatistics.php");
?>

