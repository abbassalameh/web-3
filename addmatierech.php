<?php
session_start();
$a=$_POST["nomM"];
$b=$_POST["codeM"];
$c=$_POST["nomP"];
$_SESSION["nomM"]=$a;
$_SESSION["codeM"]=$b;
$_SESSION["nomP"]=$c;
$q=$_SESSION["spechef"];
$p=0;

if(isset($_POST["submit1"])){echo "<meta http-equiv='refresh' content='0;URL=addmatierec.php'>";}
if(isset($_POST["submit2"])){
	if(!empty($_POST["namep"])&&!empty($_POST["userp"])&&
		!empty($_POST["passp"])&&!empty($_POST["retype"])
		&&!empty($_POST["emailp"])){

		$a=mysql_connect("localhost","root","salameh");
		$b=mysql_select_db("projet2");

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
				if($p!=0){echo "<a href='addmatiere.php'>ma zabatit rja3 zabeta</a>";}
					else if($p==0){$h=mysql_query("INSERT into Users values ('$c','$d','$e','$g','$q','prof')");
				echo "<meta http-equiv='refresh' content='0;URL=addmatiere.php'>";}
		}
		else echo "<a href='addmatiere.php'>mish l kil m3abeyin</a>";
	}
?>