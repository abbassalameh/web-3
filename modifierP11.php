<?php
session_start();
$c=$_SESSION["matiere"];
$a=mysql_connect("localhost","root","salameh")or die("unable to connect");
$b=mysql_select_db("projet2")or die("unable to connect db");
$d=mysql_query("SELECT * from exercice where CodeMatiere='$c' && Diff='E'");
$dd=mysql_query("SELECT * from exercice where CodeMatiere='$c' && Diff='M'");
$ddd=mysql_query("SELECT * from exercice where CodeMatiere='$c' && Diff='H'");
$e=mysql_num_rows($d);
$ee=mysql_num_rows($dd);
$eee=mysql_num_rows($ddd);
?>
<html>
	<head>
		<title>modifierP</title>
	</head>
	<body>
		<table >
			<tr>
				<td>Exercice</td>
				<td>Question</td>
				<td>R1</td>
				<td>R2</td>
				<td>Rc</td>
			</tr>
			<?php
for($i=0;$i<$e;$i++){
	$f=mysql_result($d,$i,"CodeExercice");
	$fff=mysql_result($d,$i,"Exercice");
	$ff=mysql_query("SELECT * from question where CExercice='$f'");
	$g=mysql_num_rows($ff);?>
				<form name="form1" action="modifierMP1" method="POST">
			<tr>
				<!--code exercice--><td rowspan="<?php echo $g;?>"><textarea cols="25" rows="<?php echo $g*2.5 . 'cm';?>" name="ExerciceE"><?php echo $fff;?></textarea></td>
	<?php for($j=0;$j<$g;$j++){
		$h=mysql_result($ff,$j,"Question");
		$k=mysql_result($ff,$j,"R1");
		$l=mysql_result($ff,$j,"R2");
		$m=mysql_result($ff,$j,"Rc");
		$n=mysql_result($ff,$j,"CQuestion");
?>


<!--code question--><td><textarea name="questionE" ><?php echo $h;?></textarea></td>
				<td><input type=text name="R1E" value="<?php echo $k;?>"></td>
				<td><input type=text name="R2E" value="<?php echo $l;?>"></td>
				<td><input type=text name="RcE" value="<?php echo $m;?>"></td>
				<td><input type=hidden name="CQE" value="<?php echo $n;?>"></td>
				<td><input type=submit name="deleteq" value="delete"></td>
								</tr><?php } ?>
				<td align=left><select name="diffE">
						<option value="E" selected>Simple</option>
						<option value="M">Moyenne</option>
						<option value="H">Difficile</option>
					</select>
				</td>
<td><input type=submit value="change" name="submit1"></td>
<td><input type=submit value="delete" name="submit2"></td>
			</form>
			<?php
					}
for($i=0;$i<$ee;$i++){
	$f=mysql_result($dd,$i,"CodeExercice");
	$fff=mysql_result($dd,$i,"Exercice");
	$ff=mysql_query("SELECT * from question where CExercice='$f'");
	$g=mysql_num_rows($ff);
	?>
				<form name="form1" action="modifierMP1" method="POST">
			<tr>
				<td rowspan="<?php echo $g;?>"><textarea cols="25" rows="<?php echo $g*2.5 . 'cm';?>" name="exerciceM"><?php echo $fff;?></textarea></td>
				<?php
	for($j=0;$j<$g;$j++){
		$h=mysql_result($ff,$j,"Question");
		$k=mysql_result($ff,$j,"R1");
		$l=mysql_result($ff,$j,"R2");
		$m=mysql_result($ff,$j,"Rc");
		$n=mysql_result($ff,$j,"CQuestion");
?>

				<td><textarea  name="questionM"><?php echo $h;?></textarea></td>
				<td><input type=text name="R1M" value="<?php echo $k;?>"></td>
				<td><input type=text name="R2M" value="<?php echo $l;?>"></td>
				<td><input type=text name="RcM" value="<?php echo $m;?>"></td>
				<td><input type=hidden name="CQM" value="<?php echo $n;?>"></td>
						</tr><?php } ?>
				<td align=left><select name="diffM">
						<option value="E">Simple</option>
						<option value="M" selected>Moyenne</option>
						<option value="H">Difficile</option>
					</select>
				</td>
<td><input type=submit value="change" name="submit1"></td>
<td><input type=submit value="delete" name="submit2"></td>
			</form>
<?php
					}
for($i=0;$i<$eee;$i++){
	$f=mysql_result($ddd,$i,"CodeExercice");
	$fff=mysql_result($ddd,$i,"Exercice");
	$ff=mysql_query("SELECT * from question where CExercice='$f'");
	$g=mysql_num_rows($ff);?>

			<form name="form1" action="modifierMP1" method="POST">
			<tr>
				<td rowspan="<?php echo $g;?>"><textarea cols="25" rows="<?php echo $g*2.5 . 'cm';?>" name="exerciceH"><?php  echo $fff;?></textarea></td>
				<?php
	for($j=0;$j<$g;$j++){
		$h=mysql_result($ff,$j,"Question");
		$k=mysql_result($ff,$j,"R1");
		$l=mysql_result($ff,$j,"R2");
		$m=mysql_result($ff,$j,"Rc");
		$n=mysql_result($ff,$j,"CQuestion");
?>

				<td><textarea  name="questionH"><?php echo $h;?></textarea></td>
				<td><input type=text name="R1H" value="<?php echo $k;?>"></td>
				<td><input type=text name="R2H" value="<?php echo $l;?>"></td>
				<td><input type=text name="RcH" value="<?php echo $m;?>"></td>
				<td><input type=hidden name="CQH" value="<?php echo $n;?>"></td>
								</tr><?php } ?>
				<td align=left><select name="diffH">
						<option value="E">Simple</option>
						<option value="M">Moyenne</option>
						<option value="H" selected>Difficile</option>
					</select>
				</td>
<td><input type=submit value="change" name="submit1"></td>
<td><input type=submit value="delete" name="submit2"></td>
			</form>
<?php
				}
			?>
		</table>
	</body>
</html>