<?php
session_start();
$a=$_SESSION["user"];
include 'connect.php';
$d=mysql_query("SELECT Specialiter from users where UserName='$a'");
$e=mysql_result($d,0,"Specialiter");
$f=mysql_query("SELECT NomM,CodeM from matiere where Specialiter='$e'");
$ff=mysql_num_rows($f);
$_SESSION["spechef"]=$e;
?>
<html>
	<head>
		<title>choixchef</title>
	</head>
	<body>
		<form name="form1" action="menuchef.php" method="POST">
			<table>
				<tr>
					<td>Choix Matiere</td>
					<td>
						<select name="matiere">
							<?php for($i=0;$i<$ff;$i++){
							$g=mysql_result($f,$i,"NomM");
							$h=mysql_result($f,$i,"CodeM");
							?>
								<option value="<?php echo $h;?>"><?php echo $g;?>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><a href="resultattotalchef.php">Resultat total</a></td>
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