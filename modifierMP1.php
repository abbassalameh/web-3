<?php
session_start();
$qwe=0;$asd=0;
include 'connect.php';
$c=$_POST["CE"];
$_SESSION["code"]=$c;
if(isset($_POST["submit1"])){echo "<meta http-equiv='refresh' content='0;URL=addP.php'>";}
if(isset($_POST["deleteQ"])){$g=$_POST["CQ"];$h=mysql_query("DELETE  from question where CQuestion='$g'");
							echo "<meta http-equiv='refresh' content='0;URL=modifierP1.php'>";}
if(isset($_POST["deleteE"])){$d=$_POST["Exercice"];$h=mysql_query("DELETE  from exercice where CodeExercice='$c'");
							$hh=mysql_query("DELETE * from question where CEexercice='$c'");
							echo "<meta http-equiv='refresh' content='0;URL=modifierP1.php'>";}
if(isset($_POST["modifierQ"])){if((!empty($_POST["R1"]))&&(!empty($_POST["R2"]))&&(!empty($_POST["Rc"]))&&(!empty($_POST["Question"]))){

$l=$_SESSION["matiere"];
$c=$_POST["CE"];

$e=$_POST["R1"];
$ee=$_POST["R2"];
$eee=$_POST["Rc"];
$g=$_POST["CQ"];
$k=$_POST["Question"];
if(($e==$ee)||($e==$eee)||($ee==$eee)){echo "<a href='modifierP1.php'>les i7timelet sont les memes bala za3bara</a>";}
else{
$m=mysql_query("SELECT * from exercice where CodeMatiere='$l' && CodeExercice!='$c'");
$mm=mysql_num_rows($m);



	$ff=mysql_query("SELECT * from question where CMatiere='$l' && CQuestion!='$g'");
	$g=mysql_num_rows($ff);
	for($j=0;$j<$g;$j++){
		$h=mysql_result($ff,$j,"Question");
		if($h==$k){$asd++;}
	}

echo $asd . "<br>";
if($asd!=0){echo "<a href='modifierP1.php'>Question already exist</a>";}
if($asd==0){$query2=mysql_query("UPDATE question SET Question='$k',R1='$e',R2='$ee',Rc='$eee',
					 WHERE CQuestion='$g'");
			echo "<meta http-equiv='refresh' content='0;URL=choixprof.php'>";
		}
}
}
else {echo "<a href='modifierP1.php'>mish l kill m3abeyin</a>";}
}



if(isset($_POST["modifierE"])){if(!empty($_POST["Exercice"])){
$l=$_SESSION["matiere"];
$c=$_POST["CE"];
$d=$_POST["Exercice"];
$f=$_POST["Diff"];

$m=mysql_query("SELECT * from exercice where CodeMatiere='$l' && CodeExercice!='$c'");
$mm=mysql_num_rows($m);
for($i=0;$i<$mm;$i++){
	$n=mysql_result($m,$i,"CodeExercice");
	$nn=mysql_result($m,$i,"Exercice");
	if($nn==$d){$qwe=1;}}
	if($qwe!=0){echo "<a href='modifierP1.php'>Exercice already exist</a>";}
			else {if($qwe==0){$query=mysql_query("UPDATE exercice SET Exercice='$d',Diff='$f' where CodeExercice='$c'");
					echo "<meta http-equiv='refresh' content='0;URL=modifierP1.php'>";}}
	}
	else echo "<a href='modifierP1.php'>mish l kil m3abeyin</a>";
}

?>