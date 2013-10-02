<?php
	session_start();
	$p=$_SESSION["user"];
	include 'connect.php';

	$e="SELECT Specialiter from users where UserName='$p'";
	$f=mysql_query($e);
	$g=mysql_fetch_row($f);
	$d=$g[0];
	$_SESSION["userspec"]=$d;
	$c="SELECT NomM,CodeM from matiere where Specialiter='$d'";
	$h=mysql_query($c);
	$j=mysql_num_rows($h);
?>
<html>
	<head>
		<title>choixmatiereuser</title>
	</head>
	<body>
		<form name="form1" method="POST" action="choix2.php">
			<table>
				<tr>
					<td>matiere</td>
					<td><select name="matiere">
	<?php for($k=0;$k<$j;$k++){ 
					$mat=mysql_result($h,$k,"NomM"); $matt=mysql_result($h,$k,"CodeM");?>
					<option value="<?php echo $matt; ?>"><?php echo $mat ?></option> <?php } ?>
					</select></td>
				</tr>
				<tr>
					<td><input type=submit value="Examen" name="submit1"></td>
					<td><input type=submit value="Resultat" name="submit2"></td>
				</tr>
				<tr>
					<td><a href="logout.php">logout</a></td>
				</tr>
				<tr>
					<td><a href="account.php">profile</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>