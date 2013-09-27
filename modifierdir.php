<?php
include 'modifierMdir.php';

$aa=mysql_connect("localhost","root","salameh");
$aaa=mysql_select_db("projet2");
$a=$_SESSION["spec"];
$b=mysql_query("SELECT * FROM `specialiter` WHERE `NomS`='$a'");

?>
<html>
	<head>
		<title>modifierchefmatiere</title>
		<script>
			function loli(){
			alert("are you sure");
			}
		
			function lili(){
			document.getElementById("end").style.visibility = "visible";
			}

			function verification(){
				var a=document.getElementById("pass1");
				var b=document.getElementById("pass11");
				if(a.value==b.value){document.getElementById("div2").innerHTML=" ";return true;}
					else {document.getElementById("div2").innerHTML="pass did not match";document.getElementById("pass11").value="";
						return false;}
			}

		</script>
	</head>
	<body>
		<form name="form1" action="modifierdir1.php" method="POST">
			<table>
				<tr>
					<td>Nom Specialiter</td>
					<td>Nom Chef</td>
				</tr>
				<tr>
					<?php	$d=mysql_result($b,0,"NomS");
							$ddd=mysql_result($b,0,"NomChef");
							$f=mysql_query("SELECT * from users where UserName='$ddd'");
							$ff=mysql_result($f,0,"Name");
							$g=mysql_query("SELECT * from users where UserName!='$ddd' && Position='chef'");
							$gg=mysql_num_rows($g);
							?>
					<td><input type=text name="nomas" value="<?php echo $d;?>" disabled>
						<input type=hidden value="<?php echo $d;?>" name="noms"></td>
					<td><select name="chef">
						<option value="<?php echo $ddd;?>" selected><?php echo $ff;?></option>
						<?php for($i=0;$i<$gg;$i++){
						$h=mysql_result($g,$i,"Name");
						$hh=mysql_result($g,$i,"UserName");
						?>
						<option value="<?php echo $hh;?>"><?php echo $h;?></option>
						<?php }?>
						</td>
						<td><input type=submit value="delete" name="submit3" onclick="loli()"></td>
						<td><span ><input type=button onclick="lili()" value="new Chef"></td>
							<td><span id="end" style="visibility:hidden">Name<input type=text name="namep"><br>
															UserName<input type=text name="userp"><br>
															Pass<input type=text name="passp" id="pass1"><br>
															Re-type<input type=text name="retype" id="pass11" onchange="verification()"><span id="div2"></span><br>
															Email<input type=text name="emailp">
															<input type=submit name="submit2" value="new">
															</span>
							</span>
						</td>
				</tr>
				<tr>
					<td><input type=submit name="submit1" value="modifier"></td>
				</tr>
			</table>
		</form>
	</body>
</html>