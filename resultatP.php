<?php
include 'choixprof.php';
$d=$_SESSION["matiere"];

$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT DISTINCT UserName from note where CMatiere='$d'");
$cc=mysql_num_rows($c);
$count=0;
?>
<html>
	<head>
		<title>resultatProf</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Name</td>
				<td>Pourcentage</td>
				<td>nb Examen</td>
			</tr>
			<?php for($i=0;$i<$cc;$i++){
				$e=mysql_result($c,$i,"UserName");
				$f=mysql_query("SELECT Name from users where UserName='$e'");
				$ff=mysql_result($f,0,"Name");
				$g=mysql_query("SELECT * from note where UserName='$e' && CMatiere='$d'");
				$gg=mysql_query("SELECT * from note where UserName='$e' && CMatiere='$d' && note>10");
				$h=mysql_num_rows($g);
				$hh=mysql_num_rows($gg);
				if(($h==0)||($hh==0)){$ee="zero%";}
				else {$ee=floor(($hh*100)/$h) . "%";}
				$count++;
			?>
			<tr>
				<td><?php echo $ff;?></td>
				<td align=center><?php echo $ee;?></td>
				<form  action="resutatP.php" method="POST">
				<td align=center><a href="#" onclick="document.forms['<?php echo $count;?>'].submit(); return false;"><?php echo $h;?></a></td>
				<input type=hidden name="name" value="<?php echo $e;?>">
				</form>
			</tr>
			<?php }?>
		</table>
	</body>
</html>