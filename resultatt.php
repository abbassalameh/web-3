<?php
session_start();
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=$_SESSION["user"];
$d=mysql_query("SELECT * from note where UserName='$c'");
$e=mysql_num_rows($d);
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
				<td>Date</td>
			</tr>
			<?php for($i=0;$i<$e;$i++){
				$f=mysql_result($d,$i,"CMatiere");
				$ff=mysql_query("SELECT NomM from Matiere where CodeM='$f'");
				$fff=mysql_result($ff,0,"NomM");
				$g=mysql_result($d,$i,"Note");
				$h=mysql_result($d,$i,"Date");
			?>
			<tr>
				<td><?php echo $fff;?></td>
				<td><?php echo $g;?></td>
				<td><?php echo $h;?></td>
			</tr>
			<?php } ?>
		</table>
		<a href="choixuser.php">back home</a>
		<a href="logout.php">logout</a>
	</body>
</html>
