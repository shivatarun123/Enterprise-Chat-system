<?php
SESSION_START();
$conn = mysqli_connect("localhost","root","","adrec1");
$result=$conn->query("SELECT * FROM credentials");
$value=$conn->query("SELECT * FROM infobase");
$maxsql = $conn->query( "SELECT MAX( id ) AS max FROM credentials" );
$max = mysqli_fetch_array( $maxsql );
$max = $max['max'];
$a=0;$b=0;$c=0;$d=0;$e=0;
/*
?>
<?php
*/
if($result->num_rows !=0)
{
while($answ=$result->fetch_assoc())
{
		$c_id=$answ['id'];
		$s=$max;
		while($s != 0)
		{
			if($c_id == $s)
			{
			$a=$a+1;
			}
			$s=$s-1;
		}
		$b=$max-$a;
}
}
else
{
echo "No result.";
}
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
		$msg=$ans['msg']; // Only message size is calculated but not binary files
		$e=$e+strlen($msg);
		if ($msg_type==0)
		{
		$c=$c+1;
		}
		else
		{
		$d=$d+1;
		}
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
header("Location: ./integratedstats.php");

?>

