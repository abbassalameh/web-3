<?php

$a=mysql_connect("localhost","root","salameh")or die("unable to connect");
$b=mysql_select_db("projet2")or die("unable to connect db");
if(isset($_POST["submit2"]){$c=mysql_query("DELETE from matiere

session_start();
$c=$_SESSION["matiere"];

$d=mysql_query("SELECT * from exercice where CodeMatiere='$c'");
$e=mysql_num_rows($d);

for($i=0;$i<$e;$i++){
	$f=mysql_result($d,$i,"CodeExercice");
	$fff=mysql_result($d,$i,"Exercice");
	$ff=mysql_query("SELECT * from question where CExercice='$f'");
	$g=mysql_num_rows($ff);
	for($j=0;$j<$g;$j++){
		$h=mysql_result($ff,$j,"Question");
		$k=mysql_result($ff,$j,"R1");
		$l=mysql_result($ff,$j,"R2");
		$m=mysql_result($ff,$j,"Rc");
		$n=mysql_result($ff,$j,"CQuestion");}