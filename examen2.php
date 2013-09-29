<?php
session_start();
$a=date("H:i:s");
$_SESSION["time"]=$a;
$un=$_SESSION["user"];
$m=$_SESSION["matiere"];

$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from exercice where CodeMatiere='$m' AND diff='E'");
$d=mysql_query("SELECT * from exercice where CodeMatiere='$m' AND diff='M'");
$e=mysql_query("SELECT * from exercice where CodeMatiere='$m' AND diff='H'");
$qwe=0;

$ccc=mysql_num_rows($c);$ccc--;
$ddd=mysql_num_rows($d);$ddd--;
$eee=mysql_num_rows($e);if($eee>0){$eee--;$qwe=1;}
if(($ccc<2)||($ddd<1)||($qwe!=1)){echo "<a href='choixuser.php'>exam not ready</a>";}
else{
?>
<html>
	<head>
		<title>examen</title>
	</head>
	<body>
		<form name="form1" action="resultat2.php" method="POST">
			<table>
				<tr>
					<td><b><u>Partie A/6note</b></u></td>
				</tr>

					<?php for($i=0;$i<3;$i++){
if($i==0){$ee0=mt_rand(0,$ccc);$eeee=$ee0;}
if($i==1){$ee1=mt_rand(0,$ccc);
			while($ee1==$ee0){$ee1=mt_rand(0,$ccc);}$eeee=$ee1;}
if($i==2){$ee2=mt_rand(0,$ccc);
			while(($ee2==$ee1)||($ee2==$ee0)){$ee2=mt_rand(0,$ccc);}$eeee=$ee2;}

$ey=mysql_result($c,$eeee,"Exercice");
$ce=mysql_result($c,$eeee,"CodeExercice");?>
				<tr><?php $iii=$i+1;?>
					<td><?php echo "<span style='color:red'><u>EXERCICE " . $iii . ":</span></u><span style='color:brown'> " . $ey;?>
						<input type=hidden name="<?php echo 'CExerciceE' . $i;?>" value="<?php echo $ce;?>"></td>
<?php 
$qe=mysql_query("SELECT * from question where CExercice='$ce'");
$qec=mysql_num_rows($qe);if($qec==0){echo "<meta http-equiv='refresh' content='0;URL=examen.php'>";}
	for($j=0;$j<$qec;$j++){
		$codeqe=mysql_result($qe,$j,"CQuestion");
		$quese=mysql_result($qe,$j,"Question");
		$repe1=mysql_result($qe,$j,"R1");
		$repe2=mysql_result($qe,$j,"R2");
		$repe3=mysql_result($qe,$j,"Rc");
		?></tr><tr>
					<td><?php echo $quese;?>
					<input type=hidden name="<?php echo 'CQ' . $i . 'E' . $j;?>" value="<?php echo $codeqe;?>"></td>
		<?php 		$array=array($repe1,$repe2,$repe3);
					shuffle($array);
					for($p=0;$p<3;$p++){if($p==0){if($array[$p]==$repe1){$asd=$repe1;}
											else if($array[$p]==$repe2){$asd=$repe2;}
											else if($array[$p]==$repe3){$asd=$repe3;}}
									if($p==1){if($array[$p]==$repe1){$sda=$repe1;}
											else if($array[$p]==$repe2){$sda=$repe2;}
											else if($array[$p]==$repe3){$sda=$repe3;}}
									if($p==2){if($array[$p]==$repe1){$dsa=$repe1;}
											else if($array[$p]==$repe2){$dsa=$repe2;}
											else if($array[$p]==$repe3){$dsa=$repe3;}}
									}?>
					<td><input type=radio value="<?php echo $asd;?>" name="<?php echo 'EE' . $i . 'Q' . $j;?>"checked><?php echo $array[0];?></td>
					<td><input type=radio value="<?php echo $sda;?>" name="<?php echo 'EE' . $i . 'Q' . $j;?>"><?php echo $array[1];?></td>
					<td><input type=radio value="<?php echo $dsa;?>" name="<?php echo 'EE' . $i . 'Q' . $j;?>"><?php echo $array[2];?>
					</td>
			<?php }?>
				</tr>
			<?php }?>



				<tr>
					<td><b><u>Partie B/7note</u></b></td>
				</tr>




		<?php for($i=0;$i<2;$i++){
if($i==0){$em1=mt_rand(0,$ddd);$emmm=$em1;}
if($i==1){$em2=mt_rand(0,$ddd);
		while($em2==$em1){$em2=mt_rand(0,$ddd);}$emmm=$em2;}
$ed=mysql_result($d,$emmm,"Exercice");
$cm=mysql_result($d,$emmm,"CodeExercice");?>
				<tr><?php $iii=$i+1;?>
					<td><?php echo "<span style='color:red'><u>EXERCICE " . $iii . ":</span></u><span style='color:brown'>  " . $ed . "</span>";?></textarea>
							<input type=hidden name="<?php echo 'CExerciceM' . $i;?>" value="<?php echo $cm;?>"></td>
<?php
$qe=mysql_query("SELECT * from question where CExercice='$cm'");
$qec=mysql_num_rows($qe);if($qec==0){echo "<meta http-equiv='refresh' content='0;URL=examen.php'>";}
	for($j=0;$j<$qec;$j++){
		$codeqe=mysql_result($qe,$j,"CQuestion");
		$quese=mysql_result($qe,$j,"Question");
		$repe1=mysql_result($qe,$j,"R1");
		$repe2=mysql_result($qe,$j,"R2");
		$repe3=mysql_result($qe,$j,"Rc");
		?></tr><tr>
					<td><?php echo $quese;?>
					<input type=hidden name="<?php echo 'CQM' . $i .'E' . $j;?>" value="<?php echo $codeqe;?>"></td>
		<?php 	$array=array($repe1,$repe2,$repe3);
				shuffle($array);
				for($p=0;$p<3;$p++){if($p==0){if($array[$p]==$repe1){$asd=$repe1;}
											else if($array[$p]==$repe2){$asd=$repe2;}
											else if($array[$p]==$repe3){$asd=$repe3;}}
									if($p==1){if($array[$p]==$repe1){$sda=$repe1;}
											else if($array[$p]==$repe2){$sda=$repe2;}
											else if($array[$p]==$repe3){$sda=$repe3;}}
									if($p==2){if($array[$p]==$repe1){$dsa=$repe1;}
											else if($array[$p]==$repe2){$dsa=$repe2;}
											else if($array[$p]==$repe3){$dsa=$repe3;}}
									}?>
					<td><input type=radio value="<?php echo $asd;?>" name="<?php echo 'EM' . $i . 'Q' . $j;?>"checked><?php echo $array[0];?></td>
					<td><input type=radio value="<?php echo $sda;?>" name="<?php echo 'EM' . $i . 'Q' . $j;?>"><?php echo $array[1];?></td>
					<td><input type=radio value="<?php echo $dsa;?>" name="<?php echo 'EM' . $i . 'Q' . $j;?>"><?php echo $array[2];?></td>
					</td>
			<?php }?>
				</tr>
		<?php } ?>


				<tr>
					<td><b><u>Partie C/7note</b></u></td>
				</tr>
		<?php for($i=0;$i<1;$i++){
		$hh=mt_rand(0,$eee);
$eh=mysql_result($e,$hh,"Exercice");
$ceh=mysql_result($e,$hh,"CodeExercice");?>
				<tr><?php $iii=$i+1;?>
					<td><?php echo "<span style='color:red'><u>EXERCICE " . $iii . "</span>:</u><span style='color:brown'>  " . $eh . "</span>";?>
							<input type=hidden name="<?php echo 'CExerciceH' . $i;?>" value="<?php echo $ceh;?>"></td>
<?php
$qe=mysql_query("SELECT * from question where CExercice='$ceh'");
$qec=mysql_num_rows($qe);if($qec==0){echo "<meta http-equiv='refresh' content='0;URL=examen2.php'>";}
	for($j=0;$j<$qec;$j++){
		$codeqe=mysql_result($qe,$j,"CQuestion");
		$quese=mysql_result($qe,$j,"Question");
		$repe1=mysql_result($qe,$j,"R1");
		$repe2=mysql_result($qe,$j,"R2");
		$repe3=mysql_result($qe,$j,"Rc");
		?></tr><tr>
					<td><?php echo $quese?>
					<input type=hidden name="<?php echo 'CQH' . $j;?>" value="<?php echo $codeqe;?>"></td>
		<?php 	$array=array($repe1,$repe2,$repe3);
				shuffle($array);
				for($p=0;$p<3;$p++){if($p==0){if($array[$p]==$repe1){$asd=$repe1;}
											else if($array[$p]==$repe2){$asd=$repe2;}
											else if($array[$p]==$repe3){$asd=$repe3;}}
									if($p==1){if($array[$p]==$repe1){$sda=$repe1;}
											else if($array[$p]==$repe2){$sda=$repe2;}
											else if($array[$p]==$repe3){$sda=$repe3;}}
									if($p==2){if($array[$p]==$repe1){$dsa=$repe1;}
											else if($array[$p]==$repe2){$dsa=$repe2;}
											else if($array[$p]==$repe3){$dsa=$repe3;}}
									}?>
					<td><input type=radio value="<?php echo $asd;?>" name="exo"checked><?php echo $array[0];?></td>
					<td><input type=radio value="<?php echo $sda;?>" name="exo"><?php echo $array[1];?></td>
					<td><input type=radio value="<?php echo $dsa;?>" name="exo"><?php echo $array[2];?>
					</td>
			<?php }?>
				</tr>
		<?php } ?>
				<tr>
					<td><input type=submit name="submit" value="fin examen"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php }?>
