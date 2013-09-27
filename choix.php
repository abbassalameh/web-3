<?php
	if(!empty($_POST["user"])&&!empty($_POST["pass"])){
	session_start();
	$un=$_POST["user"];
	$_SESSION["user"]=$un;
			$a=mysql_connect("localhost","root","salameh")or die("unable to connect");
			$b=mysql_select_db("projet2")or die("unable to connect to db");
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