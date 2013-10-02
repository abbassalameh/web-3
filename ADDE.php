<?php include 'choixprof.php';
if(isset($_SESSION["matiere"])){?>
<html>
	<head>
		<title>AddExercice</title>
	</head>
	<body>
		<form name="Form1" action="ADDE1.php" method="POST">
			<table>
				<tr>
					<td>Exercice:</td>
					<td><textarea name="Exercice"></textarea></td>
				</tr>
				<tr>
					<td>Difficulter</td>
					<td><select name="Diff">
							<option value="E">Simple</option>
							<option value="M">Moyenne</option>
							<option value="S">Difficile</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type=submit name="submit2" value="AddQ">
					<input type=hidden name="hidden" value="<?php echo $_SESSION["matiere"];?>"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
}
else echo "<br><a href='choixprof.php'>page not ready</a>";?>