<?php
session_start();
$a=$_SESSION["user"];
include 'connect.php';
$d=mysql_query("SELECT NomS from specialiter");
$ff=mysql_num_rows($d);
?>
<html>
	<head>
		<title>choixdirecteur</title>
	</head>
	<body>
		<form name="form1" action="menudir.php" method="POST">
			<table>
				<tr>
					<td>Choix Specialiter</td>
					<td>
						<select name="specialiter">
							<?php for($i=0;$i<$ff;$i++){
							$g=mysql_result($d,$i,"NomS");
							?>
								<option value="<?php echo $g;?>"><?php echo $g;?>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><a href="resultattotaldir.php">Resultat total</a></td>
					<td><input type=submit name="submit1" value="Resultat"></td>
					<td><input type=submit name="submit2" value="Modifier"></td>
				</tr>
				<tr>
					<td><a href="account.php">manage account</a></td>
					<td><a href="logout.php">logout</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>