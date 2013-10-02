<?php
session_start();
$_SESSION["noms"]=$_POST["noms"];
$_SESSION["chef"]=$_POST["chef"];
$true=$_SESSION["true"];

$as=$_SESSION["noms"];
$p=0;
include 'connect.php';

if(isset($_POST["submit3"])){$code=mysql_query("DELETE from specialiter where NomS='$as'");echo "<meta http-equiv='refresh' content='0;URL=choixdirecteur.php'>";}
if(isset($_POST["submit1"])){echo "<meta http-equiv='refresh' content='0;URL=modifierdir2.php'>";}
if(isset($_POST["submit2"])){
	if(!empty($_POST["namep"])&&!empty($_POST["userp"])&&
		!empty($_POST["passp"])&&!empty($_POST["retype"])
		&&!empty($_POST["emailp"])){



		$c=$_POST["namep"];
		$d=$_POST["userp"];
		$e=$_POST["passp"];
		$f=$_POST["retype"];
		$g=$_POST["emailp"];


		$l=mysql_query("SELECT * from users");
		$ll=mysql_num_rows($l);
		for($i=0;$i<$ll;$i++){
			$m=mysql_result($l,$i,"Name");
			$mm=mysql_result($l,$i,"UserName");

			if(($m==$c)||($mm==$d)){$p++;}

			if(($m!=$c)&&($mm!=$d)){$p=$p;}}
				if($p!=0){echo "<a href='modifierdir.php'>ma zabatit rja3 zabeta</a>";}
					else if($p==0){$h=mysql_query("INSERT into Users values ('$c','$d','$e','$g','','chef')");
				echo "<meta http-equiv='refresh' content='0;URL=modifierdir.php'>";}
		}
		else echo "<a href='modifierdir.php'>mish l kil m3abeyin</a>";
	}


?>