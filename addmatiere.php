<?php
include 'modifierchef.php';
$aa=$_SESSION["spechef"];
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from matiere where specialiter='$aa'");
$cc=mysql_num_rows($c);
?>
<html>
	<head>
		<title>add matiere</title>
		<script>
			function nomm(){
			var a=document.form2.nomM.value.toUpperCase();
			document.form2.nomM.value=a;
			for(var i=0;i<<?php echo $cc;?>;i++){
				<?php $d=mysql_result($c,$i,"NomM");?>
				if(<?php echo $d;?>==a){document.getElementById("NomMa").innerHTML="Name already exist";
										document.form2.nomM.value="";}
					else return true;
				}
			}
			
			function codem(){
			var a=document.form2.codeM.value.toUpperCase();
			document.form2.codeM.value=a;
			for(var i=0;i<<?php echo $cc;?>;i++){
				<?php $d=mysql_result($c,$i,"CodeM");?>
				if(<?php echo $d;?>==a){document.getElementById("codeMa").innerHTML="code already exist";
										document.form2.nomM.value="";}
					else return true;
				}
			}
		</script>
	</head>
	<body>
		<form name="form2" action="addmatierec.php" method="POST"><span name="div2"></span>
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
					<td><input type="text" name="nomP"></td>
				</tr>
				<tr>
					<td><input type=submit value="add"></td>
				</tr>
			</table>
		</form>
	</body>
</html>