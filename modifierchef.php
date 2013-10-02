<?php
include 'choixchef.php';
if(isset($_SESSION["matiere"])){
?>
<html>
	<head>
		<title>modifierMenu</title>
	</head>
	<body>
		<table>
			<tr>
				<td>
					<a href="addmatiere.php">Add matiere</a>
				</td>
				<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td>
					<a href="modifierchefm.php">Modifier Matiere</a>
				</td>
			</tr>
		</table>
	</body>
</html>
<?php
}
else {echo "<br><a href='choixchef.php'>pas de matiere a modifier</a>";}
?>