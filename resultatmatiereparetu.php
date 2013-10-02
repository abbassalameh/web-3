<?php
include 'choixchef.php';
$a=$_POST["name"];
$aa=$_SESSION["matiere"];
include 'connect.php';
$d=mysql_query("SELECT * from note where CMatiere='$aa' && UserName='$a'");
$f=mysql_num_rows($d);
?>
<html>
	<head>
		<title>resultatmatiereparetu</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nom:</td>
				<td>Note:</td>
				<td align=center>Date:</td>
				<td>Time:</td>
			</tr>
			<?php
			for($i=0;$i<$f;$i++){
				$g=mysql_result($d,$i,"Note");
				$h=mysql_result($d,$i,"Date");
				$j=mysql_result($d,$i,"time");
				$k=mysql_query("SELECT Name from users where UserName='$a'");
				$kk=mysql_result($k,0,"Name");
			?>
			<tr>
				<td><?php echo $kk;?></td>
				<td align=center><?php echo $g;?></td>
				<td><?php echo $h;?></td>
				<td align=center><?php echo $j;?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>