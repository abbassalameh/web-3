<?php
session_start();
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$p=0;

$code=$_SESSION["matiere"];
$specialiter=$_SESSION["spechef"];

$d=$_SESSION["nomm"];
$f=$_SESSION["prfo"];




$qw1=mysql_query("SELECT * FROM matiere WHERE Specialiter='$specialiter' && CodeM!='$code'");
$count1=mysql_num_rows($qw1);


if(!empty($_POST["nomm"])&& !empty($_POST["prof"])){
for($i=0;$i<$count1;$i++){

$dd2=mysql_result($qw1,$i,"NomM");
$ddc=mysql_result($qw1,$i,"CodeM");

if($d==$dd2){$p=$p+1;}
}
echo $p;
if($p!=0){echo "<meta http-equiv='refresh' content='0;URL=modifierchefm.php'>";}
else if($p==0){$qwe=mysql_query("UPDATE `matiere` SET `NomM`='$d' , `Prof`='$f' where CodeM='$code'");
							echo "<meta http-equiv='refresh' content='0;URL=choixchef.php'>";
							}
							}
	else echo "<meta http-equiv='refresh' content='0;URL=modifierchefm.php'>";
?>





