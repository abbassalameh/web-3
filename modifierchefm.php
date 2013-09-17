<?php
include 'modifierchef.php';
$aa=mysql_connect("localhost","root","salameh");
$aaa=mysql_select_db("projet2");
$a=$_SESSION["matiere"];
$b=mysql_query("SELECT * FROM `matiere` WHERE `CodeM`='$a'");
?>
<html>
	<head>
		<title>modifierchefmatiere</title>
	</head>
	<body>
		<form name="form1" action="modifierchef1.php" method="POST">
			<table>
				<tr>
					<td>Nom Matiere</td>
					<td>Code Matiere</td>
					<td>Prof</td>
				</tr>
				<tr>
					<?php	$d=mysql_result($b,0,"NomM");
							$dd=mysql_result($b,0,"CodeM");
							$ddd=mysql_result($b,0,"Prof");
							?>
					<td><input type=text name="nomm" value="<?php echo $d;?>"></td>
					<td><input type=text name="codem" value="<?php echo $dd;?>"></td>
					<td><input type=text name="prof" value="<?php echo $ddd;?>"></td>
				</tr>
				<tr>
					<td><input type=submit value="modifier"></td>
				</tr>
			</table>
		</form>
	</body>
</html>