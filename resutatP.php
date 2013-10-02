<?php
include 'choixprof.php';
$a=$_SESSION["matiere"];
$aa=$_POST["name"];
include 'connect.php';
$d=mysql_query("SELECT * from note where CMatiere='$a' && UserName='$aa'");
$e=mysql_num_rows($d);
?>
<html>
	<head>
		<title>resultatProf</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Name</td>
				<td>Resultat</td>
				<td align=center>Date</td>
				<td>Time</td>
			</tr>
			<?php for($i=0;$i<$e;$i++){
				$f=mysql_result($d,$i,"UserName");
				$g=mysql_result($d,$i,"Note");
				$h=mysql_result($d,$i,"Date");
				$j=mysql_query("SELECT Name from users where UserName='$f'");
				$k=mysql_result($j,0,"Name");
				$time=mysql_result($d,$i,"time");
			?>
			<tr>
				<td><?php echo $k;?></td>
				<td align=center><?php echo $g;?></td>
				<td><?php echo $h;?></td>
				<td><?php echo $time;?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>