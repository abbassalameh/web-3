<?php
session_start();
$n=$_SESSION["namep"];
$u=$_SESSION["userp"];
$p=$_SESSION["passp"];
$re=$_SESSION["retype"];
$e=$_SESSION["emailp"];
$s=$_SESSION["spechef"];
$po="prof";
if(!empty($_POST["name"])&&!empty($_POST["user"])&&
	!empty($_POST["pass"])&&!empty($_POST["pass2"])
	&&!empty($_POST["email"])){

		$a=mysql_connect("localhost","root","salameh");
		$b=mysql_select_db("projet2");
		$c="INSERT into Users values ('$n','$u','$p','$e','$s','$po')";
		echo $n . " " . $u . " " . $p . " " . $re . " " . $e . " " . $s;
	//$d=mysql_query($c);
	//echo "<meta http-equiv='refresh' content='0;URL=login.php'>";}
//else echo "<meta http-equiv='refresh' content='0;URL=register.php'>";
}
?>