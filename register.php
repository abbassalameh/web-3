<?php
session_start();
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c="SELECT NomS from specialiter";
$d=mysql_query($c);
$e=mysql_num_rows($d);
?>
<html>
	<head>
		<title>register.php</title>
		<script>
			function verification(){<!-- mish meshye badda tozbit -->
				var a=document.getElementById("pass");
				var b=document.getElementById("pass2");
				if(a==b){return true;}
					else {alert("password did not match");
						return false;}
			}
		</script>
	</head>
	<body>
		<form name="form1" method="POST" action="register1.php">
			<table>
				<tr>
					<td>Name</td>
					<td><input type=text name="name"><td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type=text name="user"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type=password name="pass" id="pass"></td>
				</tr>
				<tr>
					<td>Re-type pass</td>
					<td><input type=password name="pass2" id="pass2" onchange="verification()"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type=text name="email"></td>
				</tr>
				<tr>
					<td>Specialiter</td>
					<td><select name="specialiter">
						<?php for($i=0;$i<$e;$i++){
						$sp=mysql_result($d,$i,"NomS");  ?>
							<option value="<?php echo $sp; ?>"><?php echo $sp;?></option><?php }?>
						</select></td>
				</tr>
				<tr>
					<td><input type=submit value="register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>