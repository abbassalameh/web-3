<?php
session_start();
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$p=0;
$pp=0;
$chef=$_SESSION["spechef"];
$qw=mysql_query("SELECT * FROM `matiere` WHERE `Specialiter`='$chef'");
$cc=mysql_num_rows($qw);



if(!empty($_POST["nomM"]) && !empty($_POST["codeM"]) && !empty($_POST["nomP"])){
$d=$_POST["nomM"];
$e=strtoupper($_POST["codeM"]);
$f=$_POST["nomP"];
for($i=0;$i<$cc;$i++){
$dd=mysql_result($qw,$i,"NomM");
$ddd=mysql_result($qw,$i,"CodeM");
if(($dd==$d)||($ddd==$e)){$p=$p+1;}
else $p=$p;
}
if($p==0){
$c=mysql_query("INSERT INTO `matiere`(`NomM`, `CodeM`, `Specialiter`, `Prof`) VALUES ('$d','$e','$chef','$f')");
echo "<meta http-equiv='refresh' content='0;URL=choixchef.php'>";}
else{
echo "<meta http-equiv='refresh' content='0;URL=addmatiere.php'>";
}
}
else echo "<meta http-equiv='refresh' content='0;URL=addmatiere.php'>";

?>
