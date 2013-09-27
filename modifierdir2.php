<?php
session_start();
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$p=0;

$c=$_SESSION["noms"];
$d=$_SESSION["chef"];
if((!empty($c)) && (!empty($d))){
	$e=mysql_query("SELECT * from specialiter where NomS!='$c'");
	$ee=mysql_num_rows($e);
	for($i=0;$i<$ee;$i++){
		$f=mysql_result($e,$i,"NomChef");
		if($f==$d){$p++;}
		}
		if($p!=0){echo "<meta http-equiv='refresh' content='0;URL=modifierdir.php'>";}
		if($p==0){$qwe=mysql_query("UPDATE specialiter SET NomChef='$d' where NomS='$c'");
				$qwe2=mysql_query("UPDATE users SET Specialiter=' ' where Specialiter='$c' && Position='chef'");
				$qwe1=mysql_query("UPDATE users SET Specialiter='$c' where Username='$d'");
				echo "<meta http-equiv='refresh' content='0;URL=choixdirecteur.php'>";
				}
			}
			else echo "<a href='modifierdir.php'>mish l kil m3abeyin</a>";
		?>