<?php
session_start();
$_SESSION["nomm"]=$_POST["nomm"];
$_SESSION["prfo"]=$_POST["prof"];
$q=$_SESSION["spechef"];

if(isset($_POST["submit1"])){echo "<meta http-equiv='refresh' content='0;URL=modifierchef1.php'>";}
if(isset($_POST["submit2"])){
	if(!empty($_POST["namep"])&&!empty($_POST["userp"])&&
		!empty($_POST["passp"])&&!empty($_POST["retype"])
		&&!empty($_POST["emailp"])){

		$a=mysql_connect("localhost","root","salameh");
		$b=mysql_select_db("projet2");
		//$c="INSERT into Users values ('$n','$u','$p','$e','$s','$po')";
		echo $_POST["namep"] . " " . $_POST["userp"] . " " . $_POST["passp"] . " " . $_POST["retype"] . " " . $_POST["emailp"] . " " . $q;
		
		}}
	//$d=mysql_query($c);
	//echo "<meta http-equiv='refresh' content='0;URL=login.php'>";}
//else echo "<meta http-equiv='refresh' content='0;URL=register.php'>";
?>