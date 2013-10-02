<?php
session_start();
include 'connect.php';
$c=$_POST["Exercice"];
$d=$_POST["Diff"];
$e=$_POST["hidden"];
$qwe=0;
if(!empty($c)){
	$f=mysql_query("SELECT * from exercice where CodeMatiere='$e'");
	$ff=mysql_num_rows($f);

	for($i=0;$i<$ff;$i++){
		$g=mysql_result($f,$i,"Exercice");
		if($g==$c){$qwe++;}
		}
		$code=$e . "-" . $ff;
		$_SESSION["code"]=$code;
		if($qwe!=0){echo "<br><a href='ADDE.php'>Exercice already exist</a>";}
		else{$qwe=mysql_query("INSERT INTO exercice values ('$c','$e','$code','$d')");
		echo "<meta http-equiv='refresh' content='0;URL=addP.php'>";
		}
	}

else{ echo "<meta http-equiv='refresh' content='0;URL=ADDE.php'>";}
?>