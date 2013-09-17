<!--demain bshoufa-->
<?php
session_start();
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$p=0;
$pp=0;
$chef=$_SESSION["matiere"];
$specialiter=$_SESSION["spechef"];



if(!empty($_POST["nomm"]) && !empty($_POST["codem"]) && !empty($_POST["prof"])){
$d=$_POST["nomm"];
$e=strtoupper($_POST["codem"]);
$f=$_POST["prof"];

$dd=mysql_result($qw,0,"NomM");
$ddd=mysql_result($qw,0,"CodeM");
if(($dd==$d)||($ddd==$e)){$p=$p+1;}
else $p=$p;

if($p==0){$qwe=mysql_query("INSERT INTO `matiere`(`NomM`, `CodeM`, `Specialiter`, `Prof`) 
							VALUES ('$d','$e','$specialiter','$f' where CodeM='$chef')");
		echo "<meta http-equiv='refresh' content='0;URL=choixchef.php'>";
		}
		else {echo "<meta http-equiv='refresh' content='0;URL=modifierchefm