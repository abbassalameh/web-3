<?php
include 'choixprof.php';
$c=$_SESSION["matiere"];
include 'connect.php';

$d=mysql_query("SELECT * from exercice where CodeMatiere='$c' ORDER BY Diff");
$dd=mysql_num_rows($d);
if($dd==0){echo "<br><a href='choixprof.php'>il n'ya pas d'exercice</a>";}
else {
?>
<html>
	<head>
		<title>modifierM</title>
	</head>
	<body>
		<table>
			<?php
			for($i=0;$i<$dd;$i++){
			$e=mysql_result($d,$i,"CodeExercice");
			$ee=mysql_result($d,$i,"Exercice");
			$eee=mysql_result($d,$i,"Diff");
			if($eee=="E"){$asd="Simple";}if($eee=="M"){$asd="Moyenne";}if($eee=="S"){$asd="Difficile";}
			$f=mysql_query("SELECT * from question where CExercice='$e'");
			$ff=mysql_num_rows($f);
			?>
			<form name="form1" action="modifierMP1.php" method="POST">
			<tr>
				<td><textarea style="color:blue;" cols="25" name="Exercice"><?php echo $ee;?></textarea>
					<input type=hidden name="CE" value="<?php echo $e;?>"></td>
					<?php $_SESSION["code1"]=$e;?>
				<td><input style="color:blue" type=submit name="deleteE" value="deleteE"></td>
				<td><input style="color:blue" type=submit name="modifierE" value="modifierE"></td>
				<td><select name="Diff">
					<option value="<?php echo $eee;?>" selected><?php echo $asd;?></option>
<?php if($eee=="E"){?><option value="M">Moyenne</option>
					  <option value="S">Difficile</option>
					  <?php }
	  if($eee=="M"){?><option value="E">Simple</option>
					  <option value="S">Difficile</option>
					  <?php }
	  if($eee=="S"){?><option value="E">Simple</option>
					  <option value="M">Moyenne</option>
					  <?php }?>
					</select>
					<input style="color:blue" type=submit value="addQ" name="submit1">
				</td>
			</tr>
			</form><tr>
			
			<?php	for($j=0;$j<$ff;$j++){ ?>
			<form  name="form2" action="modifierMP1.php" method="POST">
			<?php
					$g=mysql_result($f,$j,"CQuestion");
					$gg=mysql_result($f,$j,"Question");
					$h=mysql_result($f,$j,"R1");
					$hh=mysql_result($f,$j,"R2");
					$hhh=mysql_result($f,$j,"Rc");
				?><input type=hidden name="CE" value="<?php echo $e;?>"></td>
				<td><textarea style="color:green" name="Question" ><?php echo $gg;?></textarea></td>
				<td><input type=text name="R1" value="<?php echo $h;?>"></td>
				<td><input type=text name="R2" value="<?php echo $hh;?>"></td>
				<td><input style="color:red" type=text name="Rc" value="<?php echo $hhh;?>"></td>

				<td><input style="color:green" type=hidden name="CQ" value="<?php echo $g;?>"></td>
				<td><input style="color:green" type=submit name="deleteQ" value="deleteQ"></td>
				<td><input style="color:green" type=submit name="modifierQ" value="modifier"></td>
			</tr>
			</form>
			<?php } ?>
		<?php } ?>
		</table>
	</body>
</html>
<?php }?>