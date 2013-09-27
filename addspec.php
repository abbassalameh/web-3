<?php
include 'choixdirecteur.php';
?>
<html>
	<head>
		<title>add matiere</title>
		<script>
			function lili(){
				var a=document.getElementById("pass1");
				var b=document.getElementById("pass11");
				if(a.value==b.value){document.getElementById("div1").innerHTML=" ";return true;}
					else {document.getElementById("div1").innerHTML="pass did not match";document.getElementById("pass11").value="";
						return false;}
			}
		</script>
	</head>
	<body>
		<form name="form2" action="addspec1.php" method="POST"><span name="div2"></span>
			<table>
				<tr>
					<td>Nom Specialiter</td>
					<td><input type="text" name="nomS"></td>
				</tr>
				<tr>
					<td>Nom Chef</td>
					<td><input name="nomC" type=text></td>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type=text name="user"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type=text name="pass" id="pass1"></td>
				</tr>
				<tr>
					<td>Retype Pass</td>
					<td><input type=text name="retype" onchange="lili()" id="pass11"></td><td><span id="div1"></span></td>
				</tr>
				<tr>
					<td><input type=submit value="add"></td>
				</tr>
			</table>
		</form>
	</body>
</html>