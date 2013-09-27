<?php
include 'modifierchef.php';
$aa=$_SESSION["spechef"];
$a=mysql_connect("localhost","root","salameh")or die("unable to connect");
$b=mysql_select_db("projet2")or die("unable to connect to db");
$c=mysql_query("SELECT * from matiere where specialiter='$aa'");
$cc=mysql_num_rows($c);
$e=mysql_query("SELECT * FROM `users` WHERE `Specialiter`='$aa' && `Position`='prof'");
$ee=mysql_num_rows($e);
?>
<html>
	<head>
		<title>add matiere</title>
		<script>
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
		<form name="form2" action="addmatierech.php" method="POST"><span name="div2"></span>
			<table>
				<tr>
					<td>Nom Matiere</td>
					<td><input type="text" name="nomM" onchange="nomm()"></td><td><span id="comMa"></span></td>
				</tr>
				<tr>
					<td>Code</td>
					<td><input type="text" name="codeM" onchange="codem()"></td><td><span id="codeMa"></span></td>
				</tr>
				<tr>
					<td>Nom Prof</td>
					<td><select name="nomP">
						<?php for($i=0;$i<$ee;$i++){
							$f=mysql_result($e,$i,"Name");
							$ff=mysql_result($e,$i,"UserName");
						?>
						<option name="<?php echo $ff;?>"><?php echo $f;?></option>
					<?php }?>
						</select>
					</td>
					<td><span ><input type=button onclick="lili()" value="new prof"><br>
							<span id="end" style="visibility:hidden">Name<input type=text name="namep"><br>
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
					<td><input name="submit1" type=submit value="add"></td>
				</tr>
			</table>
		</form>
	</body>
</html>