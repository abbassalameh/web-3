<?php

session_start();
$c=$_SESSION["matiere"];
$a=mysql_connect("localhost","root","salameh")or die("unable to connect");
$b=mysql_select_db("projet2")or die("unable to connect db");
$d=mysql_query("SELECT * from question where CMatiere='$c'");
$e=mysql_num_rows($d);
?>
<html>
	<head>
		<title>modifier.php</title>
		</head>
	<body>
		<table>
			<tr>
				<td>Question</td>
				<td>Reponse1</td>
				<td>Reponse2</td>
				<td>Reponse correct</td>
				<td>difficulite</td>
				<td>Code Question</td>
			</tr>
			<?php
			for($i=0;$i<$e;$i++){
			$f=mysql_result($d,$i,"Question");
			$g=mysql_result($d,$i,"R1");
			$h=mysql_result($d,$i,"R2");
			$j=mysql_result($d,$i,"Rc");
			$k=mysql_result($d,$i,"diff");
			$l=mysql_result($d,$i,"CQuestion");
			?><form name="form1" method="POST" action="modifierP1.php">
			<tr>
				<td><input type=textarea name="text" value="<?php echo $f;?>"></td>
				<td><input type=textarea name="texta" value="<?php echo $g;?>"></td>
				<td><input type=textarea name="textb" value="<?php echo $h;?>"></td>
				<td><input type=textarea name="textc" value="<?php echo $j;?>"></td>
				<?php if($k=="E"){?><td><select name="diff">
											<option value="E" selected>Simple</option>
											<option value="M">Normal</option>
											<option value="H">Difficile</option>
										</select></td><?php }?>
					<?php if($k=="M"){?><td><select name="diff">
											<option value="E">Simple</option>
											<option value="M"  selected>Normal</option>
											<option value="H">Difficile</option>
										</select></td><?php }?>
					 <?php if($k=="H"){?><td><select name="diff">
											<option value="E">Simple</option>
											<option value="M" >Normal</option>
											<option value="H" selected>Difficile</option>
										</select>
									</td>
									<?php }?>
				<td align=center><input type=radio name="CQ" value="<?php echo $l;?>" checked></td>
				<td><input type=submit name="submit1" value="change"></td>
				<td><input type=submit name="submit2" value="delete"></td>
			</tr></form><?php } ?>
		</table>
	</body>
</html>

