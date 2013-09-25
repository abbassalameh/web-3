<?php
session_start();
$a=$_SESSION["user"];
$b=mysql_connect("localhost","root","salameh");
$c=mysql_select_db("projet2");
$d=mysql_query("SELECT * from users where UserName='$a'");
$e=mysql_result($d,0,"Name");
$f=mysql_result($d,0,"Password");
$g=mysql_result($d,0,"Email");
?>
<html>
	<head>
		<title>changedata</title>
		<script>
			function lili(){
				document.getElementById("Retype").disabled = false;
				document.getElementById("Retype2").value="ASD";
			}

			function lilo(){
				var a=document.getElementById("Pass");
				var b=document.getElementById("Retype");
				if(a.value==b.value){document.getElementById("span2").innerHTML=" ";return true;}
					else {document.getElementById("span2").innerHTML="pass did not match";document.getElementById("Retype").value="";
						return false;}
			}
		</script>
	</head>
	<body>
		<form name="form1" action="account1.php" method="POST">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type=text name="Name1" value="<?php echo $e;?>" disabled>
						<input type=hidden name="Name" value="<?php echo $e;?>"></td>
				</tr>
				<tr>
					<td>User:</td>
					<td><input type=text name="User" value="<?php echo $a;?>"></td>
				</tr>
				<tr>
					<td>Pass:</td>
					<td><input type=text id="Pass" name="Pass" value="<?php echo $f;?>" onchange="lili()"></td>
				</tr>
					<tr>
						<td>retype Pass:</td>
						<td><input type=text name="Retype" id="Retype" onchange="lilo()" disabled>
							<input type=hidden name="Retype2" id="Retype2" value="AMD"></td>
						<td><span id="span2"></span></td>
					</tr>
				<tr>
					<td>Email:</td>
					<td><input type=text name="Email" value="<?php echo $g;?>"></td>
				</tr>
				<tr>
					<td><input type=submit value="change"></td>
				</tr>
			</table>
		</form>
	</body>
</html>