<?php
include 'modifierchef.php';
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
?>
<html>
	<head>
		<title>add matiere</title>
	</head>
	<body>
		<form name="form1" action="addmatierec.php" method="POST">
			<table>
				<tr>
					<td>Nom Matiere</td>
					<td><input type=text name="name"></td>
				</tr>
				<tr>
					<td>Nom Prof</td>
					<td><input type=text name="nameprof"></td>
				</tr>
				<tr>
					<td>Code</td>
					<td>