<?php
session_start();
$n=$_POST["name"];
$u=$_POST["user"];
$p=$_POST["pass"];
$e=$_POST["email"];
$s=$_POST["specialiter"];
$po="etu";
if(!empty($_POST["name"])&&!empty($_POST["user"])&&
	!empty($_POST["pass"])&&!empty($_POST["pass2"])
	&&!empty($_POST["email"])){
	if($_POST["pass"]==$_POST["pass2"]){
		$a=mysql_connect("localhost","root","salameh");
		$b=mysql_select_db("projet2");
		$c="INSERT into Users values ('$n','$u','$p','$e','$s','$po')";
	$d=mysql_query($c);
	echo "<meta http-equiv='refresh' content='0;URL=login.php'>";}
else echo "<meta http-equiv='refresh' content='0;URL=regiter.php'>";}
?>