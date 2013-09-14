<?php
include 'choixchef.php';
$a=$_SESSION["matiere"];
$b=mysql_connect("localhost","root","salameh");
$c=mysql_select_db("projet2");
$d=mysql_query("SELECT * from note where CMatiere='$a'");
$e=mysql_num_rows($d);
?>
<html>
	<head>
		<title>resultatChef</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Name</td>
				<td>Resultat</td>
				<td>Date</td>
			</tr>
			<?php for($i=0;$i<$e;$i++){
				$f=mysql_result($d,$i,"UserName");
				$g=mysql_result($d,$i,"Note");
				$h=mysql_result($d,$i,"Date");
				$j=mysql_query("SELECT Name from users where UserName='$f'");
				$k=mysql_result($j,0,"Name");
			?>
			<tr>
				<td><?php echo $k;?></td>
				<td align=center><?php echo $g;?></td>
				<td><?php echo $h;?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>