<?php
	session_start();
	$p=$_SESSION["user"];
	$a=mysql_connect("localhost","root","salameh")or die("unable to connect to local");
	$b=mysql_select_db("projet2")or die("unable to connect to database");

	$e="SELECT Specialiter from users where UserName='$p'";
	$f=mysql_query($e);
	$g=mysql_fetch_row($f);
	$d=$g[0];
	$c="SELECT NomM,CodeM from matiere where Specialiter='$d'";
	$h=mysql_query($c);
	$j=mysql_num_rows($h);
?>
<html>
	<head>
		<title>choixmatiereuser</title>
	</head>
	<body>
		<form name="form1" method="POST" action="examen.php">
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
					<td><input type=submit value="examen"></td>
					<td><a href="resultatt.php">resultat</a></td>
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