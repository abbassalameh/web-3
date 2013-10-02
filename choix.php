<?php
	if(!empty($_POST["user"])&&!empty($_POST["pass"])){
	session_start();
	$un=$_POST["user"];
	$_SESSION["user"]=$un;
			include 'connect.php';
			//$c="SELECT Password from users where UserName='$un'";
		$d=mysql_query("SELECT Password,Position from users where UserName='$un'");
		$e=mysql_result($d,0,"Password");
		$f=mysql_result($d,0,"Position");
		if($e==$_POST["pass"]){
			if($f=="etu"){echo "<meta http-equiv='refresh' content='0;URL=choixuser.php'>";}
			if($f=="prof"){echo "<meta http-equiv='refresh' content='0;URL=choixprof.php'>";}
			if($f=="chef"){echo "<meta http-equiv='refresh' content='0;URL=choixchef.php'>";}
			if($f=="dir"){echo "<meta http-equiv='refresh' content='0;URL=choixdirecteur.php'>";}
		}
		else echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
	}
	else echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
?>