
<?php 	include 'choixprof.php';?>
<html>
	<head>
		<title>addP.php</title>
	<head>
	<body>
		<form name="form1" action="addP1.php" method="POST">
			<table>
				<tr>
					<td>Question</td>
					<td>Reponse1</td>
					<td>Reponse2</td>
					<td>Reponse Correct</td>

				</tr>
				<tr>
					<td><textarea name="text"></textarea></td>
					<td><input type=text name="text1"></td>
					<td><input type=text name="text2"></td>
					<td><input type=text name="text3"></td>
				</tr>
				<tr>
					<td><input type=submit name="submit1" value="add"></td>
				</tr>
			</table>
		</form>
	<body>
</html>
