<?php
SESSION_START();
$m_id = $_SESSION['m_id'];
include ('get.php');

$ques = ("SELECT * FROM credentials WHERE  mail_id='$m_id'");
$ans = mysqli_query($get, $ques);


while($r = mysqli_fetch_assoc($ans)){

$name = $r['name'];
$updatequery ="UPDATE credentials SET status='3' WHERE name='$name'";
$update=mysqli_query($get,$updatequery);

}


?>


<html>
<head>
<title>IDLE</title>
</head>
<body onkeypress="myFunction()" onmousemove = "myFunction()" onclick = "myFunction()">
<script>
function myFunction() {
    window.location.href="index.php";
}
</script>
<p>Your State is Idle </p>
</body>
</html>