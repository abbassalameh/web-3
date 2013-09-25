<?php
include 'modifierchef.php';

$aa=mysql_connect("localhost","root","salameh");
$aaa=mysql_select_db("projet2");
$a=$_SESSION["matiere"];
$b=mysql_query("SELECT * FROM `matiere` WHERE `CodeM`='$a'");
$bb=$_SESSION["spechef"];
?>
<html>
	<head>
		<title>modifierchefmatiere</title>
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
		<form name="form1" action="choixmodif.php" method="POST">
			<table>
				<tr>
					<td>Nom Matiere</td>
					<td>Code Matiere</td>
					<td>Prof</td>
				</tr>
				<tr>
					<?php	$d=mysql_result($b,0,"NomM");
							$dd=mysql_result($b,0,"CodeM");
							$ddd=mysql_result($b,0,"Prof");
							$f=mysql_query("SELECT Name from users where UserName='$ddd'");
							$ff=mysql_result($f,0,"Name");
							$g=mysql_query("SELECT * from users where UserName!='$ddd' && Specialiter='$bb' && Position='prof'");
							$gg=mysql_num_rows($g);
							?>
					<td><input type=text name="nomm" value="<?php echo $d;?>"></td>
					<td><input type=text name="codem" value="<?php echo $dd;?>" disabled></td>
					<td><select name="prof">
						<option value="<?php echo $ddd;?>" selected><?php echo $ff;?></option>
						<?php for($i=0;$i<$gg;$i++){
						$h=mysql_result($g,$i,"Name");
						$hh=mysql_result($g,$i,"UserName");
						?>
						<option value="<?php echo $hh;?>"><?php echo $h;?></option>
						<?php }?>
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
					<td><input type=submit name="submit1" value="modifier"></td>
				</tr>
			</table>
		</form>
	</body>
</html>