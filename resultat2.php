<?php
session_start();
$atime=date("H:i:s");
$time=$_SESSION["time"];

$datetime1 = strtotime($time);
$datetime2 = strtotime($atime);

$ti = $datetime2 - $datetime1;// == <seconds between the two times>
$tim=floor($ti/3600) . ":" .  floor($ti/60) . ":" . $ti%60;

$connect=mysql_connect("localhost","root","salameh");
$db=mysql_select_db("projet2");
$note=0;

$spec=$_SESSION["userspec"];
$a=$_SESSION["user"];
$b=$_SESSION["matiere"];
$c=date("Y/m/d");

for($i=0;$i<3;$i++){
$d=$_POST["CExerciceE" . $i];
$e=mysql_query("SELECT * from question where CExercice='$d'");
$ee=mysql_num_rows($e);
$notepq=2/$ee;
	for($j=0;$j<$ee;$j++){
$eee=$_POST["CQ" . $i . "E" . $j];
$f=$_POST["EE" . $i . "Q" . $j];
$g=mysql_query("SELECT Rc from question where CQuestion='$eee'");
$gg=mysql_result($g,0,"Rc");
if($gg==$f){$note=$note+$notepq;}
	}

}

for($i=0;$i<2;$i++){
$d=$_POST["CExerciceM" . $i];
$e=mysql_query("SELECT * from question where CExercice='$d'");
$ee=mysql_num_rows($e);
$notepq=3.5/$ee;
	for($j=0;$j<$ee;$j++){
$eee=$_POST["CQM" .$i . 'E' . $j];
$f=$_POST["EM" . $i . "Q" . $j];
$g=mysql_query("SELECT Rc from question where CQuestion='$eee'");
$gg=mysql_result($g,0,"Rc");
if($gg==$f){$note=$note+$notepq;}
	}
}

$d=$_POST["CExerciceH0"];
$e=mysql_query("SELECT * from question where CExercice='$d'");
$ee=mysql_num_rows($e);
	for($j=0;$j<$ee;$j++){
$eee=$_POST["CQH" . $j];
$f=$_POST["exo"];
$g=mysql_query("SELECT Rc from question where CQuestion='$eee'");
$gg=mysql_result($g,0,"Rc");
if($gg==$f){$note=$note+7;}
	}
$note=floor($note)+1;if($note>20){$note=20;}
$qew=mysql_query("INSERT INTO note(`UserName`, `CMatiere`, `Note`, `Date`, `Specialiter`, `time`)
	VALUES ('$a','$b','$note','$c','$spec','$tim')"); 
	?>
<html>
	<head>
		<title>resultat.php</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nom Matiere</td>
				<td>Resultat</td>
				<td>Date</td>
				<td>Time</td>
			</tr>
			<tr>
				<td><?php echo $b;?></td>
				<td><?php echo $note . "/20";?></td>
				<td><?php echo $c; ?></td>
				<td><?php echo $tim;?></td>
			</tr>
		</table>
		<a href="choixuser.php">back home</a>
		<a href="logout.php">log out</a>
	</body>
</html>




