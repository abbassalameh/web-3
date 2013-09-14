
<html>
	<head>
		<title>addP.php</title>
	<head>
	<body><?php include 'choixprof.php';?>
		<form name="form1" action="addP1.php" method="POST">
			<table>
				<tr>
					<td>Question</td>
					<td>Reponse1</td>
					<td>Reponse2</td>
					<td>Reponse Correct</td>
					<td>Difficulter</td>
				</tr>
				<tr>
					<td><input type=textarea name="text"></td>
					<td><input type=text name="text1"></td>
					<td><input type=text name="text2"></td>
					<td><input type=text name="text3"></td>
					<td><select name="diff">
							<option value="E">Simple</option>
							<option value="M">Medium</option>
							<option value="H">Difficile</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type=submit value="add"></td>
				</tr>
			</table>
		</form>
	<body>
</html>