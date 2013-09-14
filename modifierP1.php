<?php
session_start();
$a=mysql_connect("localhost","root","salameh")or die("unable to connect");
$b=mysql_select_db("projet2")or die("unable to connect db");
if($_POST["submit1"]){
$c=$_POST["CQ"];
$d=$_POST["text"];
$e=$_POST["texta"];
$f=$_POST["textb"];
$g=$_POST["textc"];
$h=$_POST["diff"];
$i=mysql_query("UPDATE question SET Question='$d', R1='$e',
	R2='$f', Rc='$g', diff='$h' WHERE CQuestion='$c'");
echo "<meta http-equiv='refresh' content='0;URL=modifierP.php'>";
}
if($_POST["submit2"]){
$d=$_POST["CQ"];
$c=mysql_query("DELETE FROM `question` WHERE CQuestion='$d'");
echo "<meta http-equiv='refresh' content='0;URL=modifierP.php'>";
}
?>

