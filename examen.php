<?php
session_start();
$a=date("H:i:s");
$_SESSION["time"]=$a;
$un=$_SESSION["user"];
$m=$_SESSION["matiere"];

$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from question where CMatiere='$m' AND diff='E'");
$d=mysql_query("SELECT * from question where CMatiere='$m' AND diff='M'");
$e=mysql_query("SELECT * from question where CMatiere='$m' AND diff='H'");
$cc=mysql_num_rows($c);$cc--;
$dd=mysql_num_rows($d);$dd--;
$ee=mysql_num_rows($e);$ee--;
?>
<html>
	<head>
		<title>examen.php</title>
	</head>
	<body>
		<form name="form1" method="POST" action="resultat.php">
			<table>
			<tr>
				<td>1'ere parite 9 note</td>
			</tr>
			<?php for($i=0;$i<3;$i++){
				
				$ra[$i]=mt_rand(0,$cc);
				if($i==1){while($ra[$i]==$ra[$i-1]){
				$ra[$i]=mt_rand(0,$cc);
						}}
					if($i==2){while(($ra[$i]==$ra[$i-1])||($ra[$i]==$ra[$i-2])){
				$ra[$i]=mt_rand(0,$cc);}}

				
				$q=mysql_result($c,$ra[$i],"Question");
				$r=mysql_result($c,$ra[$i],"R1");
				$rr=mysql_result($c,$ra[$i],"R2");
				$rrr=mysql_result($c,$ra[$i],"Rc");
				$cr=mysql_result($c,$ra[$i],"CQuestion");
				if($i==0){$_SESSION["A"]=$cr;}
				if($i==1){$_SESSION["AA"]=$cr;}
				if($i==2){$_SESSION["AAA"]=$cr;}
				$array=array($r,$rr,$rrr);
				shuffle($array);
				for($p=0;$p<3;$p++){if($p==0){if($array[$p]==$r){$asd=$r;}
											else if($array[$p]==$rr){$asd=$rr;} 
											else if($array[$p]==$rrr){$asd=$rrr;}}
									if($p==1){if($array[$p]==$r){$sda=$r;}
											else if($array[$p]==$rr){$sda=$rr;} 
											else if($array[$p]==$rrr){$sda=$rrr;}}
									if($p==2){if($array[$p]==$r){$dsa=$r;}
											else if($array[$p]==$rr){$dsa=$rr;} 
											else if($array[$p]==$rrr){$dsa=$rrr;}}
									}
				?>
			<tr>
				<td><?php echo "Q" . $i . " {3 note/q}:" . " " . $q . "<br>";?></td>
				<td><input type=radio value="<?php echo $asd;?>" name="<?php echo "P1Q" . $i;?>"><?php echo $array[0];?>
					<input type=radio value="<?php echo $sda;?>" name="<?php echo "P1Q" . $i;?>"><?php echo $array[1];?>
					<input type=radio value="<?php echo $dsa;?>" name="<?php echo "P1Q" . $i;?>"><?php echo $array[2];?>
				</td>
			</tr>
				<?php } ?>
			<tr>
				<td>2'eme partie 6 note</td>
			</tr>
				<?php 
				for($i=0;$i<2;$i++){
				$ra[$i]=mt_rand(0,$dd);
								if($i==1){while($ra[$i]==$ra[$i-1]){
									$ra[$i]=mt_rand(0,$dd);
						}}
				$q=mysql_result($d,$ra[$i],"Question");
				$r=mysql_result($d,$ra[$i],"R1");
				$rr=mysql_result($d,$ra[$i],"R2");
				$rrr=mysql_result($d,$ra[$i],"Rc");
				$cr=mysql_result($d,$ra[$i],"CQuestion");
				if($i==0){$_SESSION["B"]=$cr;}
				if($i==1){$_SESSION["BB"]=$cr;}
				$array=array($r,$rr,$rrr);
				shuffle($array);
				for($p=0;$p<3;$p++){if($p==0){if($array[$p]==$r){$asd=$r;}
											else if($array[$p]==$rr){$asd=$rr;} 
											else if($array[$p]==$rrr){$asd=$rrr;}}
									if($p==1){if($array[$p]==$r){$sda=$r;}
											else if($array[$p]==$rr){$sda=$rr;} 
											else if($array[$p]==$rrr){$sda=$rrr;}}
									if($p==2){if($array[$p]==$r){$dsa=$r;}
											else if($array[$p]==$rr){$dsa=$rr;} 
											else if($array[$p]==$rrr){$dsa=$rrr;}}
									}
				?>
			<tr>
				<td><?php echo "Q" . $i . " {3 note/q}:" . " " . "$q" . "<br>";?></td>
				<td><input type=radio value="<?php echo $asd;?>" name="<?php echo "P2Q" . $i;?>"><?php echo $array[0];?>
					<input type=radio value="<?php echo $sda;?>" name="<?php echo "P2Q" . $i;?>"><?php echo $array[1];?>
					<input type=radio value="<?php echo $dsa;?>" name="<?php echo "P2Q" . $i;?>"><?php echo $array[2];?>
				</td>
			</tr>
				<?php } ?>
			<tr>
				<td>3'eme partie 5 note</td>
			</tr>
				<?php 
				for($i=0;$i<1;$i++){
				$ra=mt_rand(0,$dd);
				$q=mysql_result($d,$ra,"Question");
				$r=mysql_result($d,$ra,"R1");
				$rr=mysql_result($d,$ra,"R2");
				$rrr=mysql_result($d,$ra,"Rc");
				$cr=mysql_result($d,$ra,"CQuestion");
				$_SESSION["C"]=$cr;
				$array=array($r,$rr,$rrr);
				shuffle($array);
				for($p=0;$p<3;$p++){if($p==0){if($array[$p]==$r){$asd=$r;}
											else if($array[$p]==$rr){$asd=$rr;} 
											else if($array[$p]==$rrr){$asd=$rrr;}}
									if($p==1){if($array[$p]==$r){$sda=$r;}
											else if($array[$p]==$rr){$sda=$rr;} 
											else if($array[$p]==$rrr){$sda=$rrr;}}
									if($p==2){if($array[$p]==$r){$dsa=$r;}
											else if($array[$p]==$rr){$dsa=$rr;} 
											else if($array[$p]==$rrr){$dsa=$rrr;}}
									}
				?>
			<tr>
				<td><?php echo "Q" . $i . " {5 note}:" . " " . "$q" . "<br>";?></td>
				<td><input type=radio value="<?php echo $asd;?>" name="<?php echo "P3Q" . $i;?>"><?php echo $array[0];?>
					<input type=radio value="<?php echo $sda;?>" name="<?php echo "P3Q" . $i;?>"><?php echo $array[1];?>
					<input type=radio value="<?php echo $dsa;?>" name="<?php echo "P3Q" . $i;?>"><?php echo $array[2];?>
				</td>
			</tr>
				<?php } ?>
			<tr>
				<td><input type=submit value="resultat"></td>
			</tr>
			</table>
		</form>
	</body>
</html>