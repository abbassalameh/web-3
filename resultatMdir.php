<?php
session_start();
$a=$_SESSION["spec"];
include 'connect.php';
$d=mysql_query("SELECT * from matiere where Specialiter='$a'");
$dd=mysql_num_rows($d);
?>
<html>
	<head>
		<title>resultatMod</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nom Matiere</td>
				<td>pourcentage</td>
				<td>nb examen</td>
				<td>Prof</td>
			</tr>
			<?php for($i=0;$i<$dd;$i++){
				$e=mysql_result($d,$i,"NomM");
				$f=mysql_result($d,$i,"Prof");
				$ff=mysql_result($d,$i,"CodeM");
				$g=mysql_query("SELECT * from note where CMatiere='$ff'");
				$gg=mysql_num_rows($g);
				$h=mysql_query("SELECT * from note where CMatiere='$ff' && Note>10");
				$hh=mysql_num_rows($h);
				if(($gg==0)||($hh==0)){$j="zero%";}
				else {$j=floor(($hh*100)/$gg) . "%";}
			?>
			<tr>
				<td align=center><?php echo $e;?></td>
				<td align=center><?php echo $j;?></td>
				<td align=center><?php echo $gg;?></td>
				<td align=center><?php echo $f;?></td>
			</tr>
			<?php }?>
			<tr>
				<td><a href="choixdirecteur.php">home</a></td>
				<td><a href="logout.php">logout</a></td>
			</tr>
		</table>
	</body>
</html>