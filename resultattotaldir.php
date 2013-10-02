<?php
session_start();
$a=$_SESSION["user"];
include 'connect.php';
$d=mysql_query("SELECT * from specialiter");
$dd=mysql_num_rows($d);
?>
<html>
	<head>
		<title>nshalla 5also lyom</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nom Specialiter</td>
				<td>Pourcentage reussis</td>
				<td>Nom Chef</td>
			</tr>
			<?php
			for($i=0;$i<$dd;$i++){
			$e=mysql_result($d,$i,"NomS");
			$f=mysql_result($d,$i,"NomChef");
			$ff=mysql_query("SELECT * from users where Username='$f'");
			$fff=mysql_result($ff,0,"Name");
			$g=mysql_query("SELECT * from note where Specialiter='$e'");
			$gg=mysql_query("SELECT * from note where Specialiter='$e' && note>10");
			$h=mysql_num_rows($g);
			$hh=mysql_num_rows($gg);
			if(($h==0)||($hh==0)){$j="zero%";}
			if(($h!=0)&&($hh!=0)){$j=floor(($hh*100)/$h) . "%";}
			?>
			<tr>
				<td><?php echo $e;?></td>
				<td align=center ><?php echo $j;?></td>
				<td><?php echo $fff;?></td>
			</tr>
			<?php }?>
			<tr>
				<td><a href="choixdirecteur.php">home</a></td>
				<td align=center><a href="logout.php">logout</a></td>
			</tr>
		</table>
	</body>
</html>