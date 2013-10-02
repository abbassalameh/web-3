<?php
session_start();
$a=$_SESSION["matiere"];
include 'connect.php';
$d=mysql_query("SELECT * from question where CMatiere='$a'");
$e=mysql_num_rows($d);
$qwe=0;$ert=0;$gg=0;$mmm=0;

$g=$_POST["text"];
$h=$_POST["text1"];
$k=$_POST["text2"];
$l=$_POST["text3"];
$n=$_SESSION["code"];
	$ggg=strlen($g);
	$p=$g{2};
	for($j=3;$j<$ggg;$j++){
	$p=$p . $g{$j};
	}

if(($h==$k)||($h==$l)||($l==$k)){echo "<a href='addP.php'>les 2i7timelet sont les memes</a>";}
else{
if(!empty($g) && !empty($h) && !empty($k) && !empty($l)){
$nn=mysql_query("SELECT * from question where CExercice='$n'");
$nnn=mysql_num_rows($nn);

$o=$n . "-" . $nnn;
	if($nnn>3){echo "<a href='choixprof.php'>u can not add more question bala mi7en 3al tolab</a>";}
	else{


for($i=0;$i<$e;$i++){
	$m=mysql_result($d,$i,"Question");
	$mm=strlen($m);
	$mmm=$m{2};
	for($j=3;$j<$mm;$j++){
	$mmm=$mmm . $m{$j};
	}

	
	if($mmm==$p){$qwe++;}
	}
	if($qwe!=0){echo "<a href='addP.php'>question already exist</a>";}
	else{
	$awd=$g{0};
	$awd2=$g{1};
	if($nnn==0){$ert='a';}if($nnn==1){$ert='b';}if($nnn==2){$ert='c';}if($nnn==3){$ert='d';}
	if(($awd>="d")&&($awd<="a")&&($awd2==")")){$gg=$g;}
	else {if($g{0}==")"){$gg=$ert . $g;}else {$g{0}=$ert;$g{1}=")";$gg=$g;}}
	
	$f=mysql_query("INSERT INTO question VALUES ('$gg','$h','$k','$l','$a','$o','$n')");
		echo "<meta http-equiv='refresh' content='0;URL=addP.php'>";
		}
	}
	}
else echo "<a href='addP.php'>mish l kil m3abeyin</a>";
}

?>