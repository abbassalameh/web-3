<?php
session_start();
if($_SESSION["user"]&&$_SESSION["matiere"]){
$a=$_SESSION["user"];
$b=$_SESSION["matiere"];
$c=date("Y/m/d");

//echo $a . "<br>" . $b . "<br>";

$d=$_SESSION["A"];
$dd=$_SESSION["AA"];
$ddd=$_SESSION["AAA"];
$e=$_SESSION["B"];
$ee=$_SESSION["BB"];
$f=$_SESSION["C"];

//echo $d . "<br>" . $dd . "<br>" . $ddd . "<br>" . $e . "<br>" . $ee . "<br>" . $f . "<br>";

$g=$_POST["P1Q0"];
$gg=$_POST["P1Q1"];
$ggg=$_POST["P1Q2"];
$h=$_POST["P2Q0"];
$hh=$_POST["P2Q1"];
$i=$_POST["P3Q0"];

//echo $g . "<br>" . $gg . "<br>" . $ggg . "<br>" . $h . "<br>" . $hh . "<br>" . $i . "<br>";

$j=mysql_connect("localhost","root","salameh")Or die("unable to connect localhost");
$k=mysql_select_db("projet2")Or die("unable to connect to db");
$l=mysql_query("SELECT NomM,Specialiter from matiere where CodeM='$b'");
$l1=mysql_result($l,0,"NomM");
$l2=mysql_result($l,0,"Specialiter");

$m=mysql_query("SELECT Rc from question where CQuestion='$d'");
$m1=mysql_result($m,0,"Rc");
$mm=mysql_query("SELECT Rc from question where CQuestion='$dd'");
$mm1=mysql_result($mm,0,"Rc");
$mmm=mysql_query("SELECT Rc from question where CQuestion='$ddd'");
$mmm1=mysql_result($mmm,0,"Rc");
$n=mysql_query("SELECT Rc from question where CQuestion='$e'");
$n1=mysql_result($n,0,"Rc");
$nn=mysql_query("SELECT Rc from question where CQuestion='$ee'");
$nn1=mysql_result($nn,0,"Rc");
$o=mysql_query("SELECT Rc from question where CQuestion='$f'");
$o1=mysql_result($o,0,"Rc");

$note=0;
if($m1==$g){$note=$note+3;}
if($mm1==$gg){$note=$note+3;}
if($mmm1==$ggg){$note=$note+3;}
if($n1==$h){$note=$note+3;}
if($nn1==$hh){$note=$note+3;}
if($o1==$i){$note=$note+5;}
$p=mysql_query("INSERT INTO note(`UserName`, `CMatiere`, `Note`, `Date`, `Specialiter`) VALUES ('$a','$b','$note','$c','$l2')");
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
			</tr>
			<tr>
				<td><?php echo $l1;?></td>
				<td><?php echo $note . "/20";?></td>
				<td><?php echo $c; ?></td>
			</tr>
		</table>
		<a href="choixuser.php">back home</a>
		<a href="logout.php">log out</a>
	</body>
</html>
<?php }?>