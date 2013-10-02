<?php
session_start();
include 'connect.php';
$c=$_SESSION["user"];
$cc=$_SESSION["matiere"];
$d=mysql_query("SELECT * from note where UserName='$c' && CMatiere='$cc'");
$e=mysql_num_rows($d);
if($e==0){echo "<a href='choixuser.php'>note note ready</a>";}
else{
?>
<html>
	<head>
		<title>resultatt</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nom Matiere</td>
				<td>Resultat</td>
				<td align=center>Date</td>
				<td>Time</td>
			</tr>
			<?php for($i=0;$i<$e;$i++){
				$f=mysql_result($d,$i,"CMatiere");
				$ff=mysql_query("SELECT NomM from Matiere where CodeM='$f'");
				$fff=mysql_result($ff,0,"NomM");
				$g=mysql_result($d,$i,"Note");
				$h=mysql_result($d,$i,"Date");
				$time=mysql_result($d,$i,"time");
			?>
			<tr>
				<td><?php echo $fff;?></td>
				<td><?php echo $g;?></td>
				<td><?php echo $h;?></td>
				<td><?php echo $time;?></td>
			</tr>
			<?php } ?>
		</table>
		<a href="choixuser.php">back home</a>
		<a href="logout.php">logout</a>
	</body>
</html>
<?php } ?>
