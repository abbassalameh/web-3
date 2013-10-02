<?php
session_start();
$user=$_SESSION["user"];
include 'connect.php';
$c=mysql_query("SELECT CodeM,NomM from matiere where Prof='$user'");
$d=mysql_num_rows($c);

?>
<html>
	<head>
		<title>choix prof</title>
	</head>
	<body>
		<form name="form1" action="menuprof.php" method="POST">
			<table>
				<tr>
					<td>Choix matiere</td>
					<td><select name="matiere">
						<?php for($i=0;$i<$d;$i++){
						$e=mysql_result($c,$i,"NomM");
						$f=mysql_result($c,$i,"CodeM");?>
							<option value="<?php echo $f; ?>"><?php echo $e;?></option><?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type=submit name="submit1" value="modifier"></td>
					<td><input type=submit name="submit2" value="resultat"></td>
					<td><input type=submit name="submit3" value="add"></td>
				</tr>
			</table>
		</form>
		<a href="logout.php">logout</a>
		<a href="account.php">manage account</a>
	</body>
</html>