<?php
session_start();
$n=$_POST["name"];
$u=$_POST["user"];
$pa=$_POST["pass"];
$e=$_POST["email"];
$s=$_POST["specialiter"];
$po="etu";
$p=0;
$mc=mysql_connect("localhost","root","salameh")or die("unable to connect");
$msd=mysql_select_db("projet2")or die("unable to connect to db");
$mc1=mysql_query("SELECT * from users");
$mnr=mysql_num_rows($mc1);

if(!empty($_POST["name"]) && !empty($_POST["user"]) &&
	!empty($_POST["pass"]) && !empty($_POST["pass2"])
	&& !empty($_POST["email"])){
		
		for($i=0;$i<$mnr;$i++){
			$mr=mysql_result($mc1,$i,"Name");
			$mr1=mysql_result($mc1,$i,"UserName");
			if(($mr==$n)||($mr1==$u)){$p++;}
			}
			if($p!=0){echo "<meta http-equiv='refresh' content='0;URL=register.php'>";}
			if($p==0){
		$c=mysql_query("INSERT into Users values ('$n','$u','$pa','$e','$s','$po')");;
		echo "<meta http-equiv='refresh' content='0;URL=login.php'>";}
	}
else echo "<a href='register.php'> mish kil l input m3abeyin</a>";
?>