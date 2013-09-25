<?php
echo "<p style='font-size:30;color:red'>badde zabet badde % la kil etu w link bas yikbos bye5do 3ala l etu w kil 3alemeto</p>";
include 'choixchef.php';
$a=$_SESSION["matiere"];
$b=mysql_connect("localhost","root","salameh");
$c=mysql_select_db("projet2");
$d=mysql_query("SELECT * from note where CMatiere='$a'");
$e=mysql_num_rows($d);
?>
<html>
	<head>
		<title>resultatChef</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Name</td>
				<td>Resultat</td>
				<td align=center>Date</td>
				<td>time</td>
			</tr>
			<?php for($i=0;$i<$e;$i++){
				$f=mysql_result($d,$i,"UserName");
				$g=mysql_result($d,$i,"Note");
				$h=mysql_result($d,$i,"Date");
				$j=mysql_query("SELECT Name from users where UserName='$f'");
				$k=mysql_result($j,0,"Name");
				$time=mysql_result($d,$i,"time");
			?>
			<tr>
				<td><?php echo $k;?></td>
				<td align=center><?php echo $g;?></td>
				<td><?php echo $h;?></td>
				<td><?php echo $time;?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>P.reussis:</td>
				<td align=center><?php $reu=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$a' && Note>10");
						  $res=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$a'");
						  $reu1=mysql_num_rows($reu);
						  $res1=mysql_num_rows($res);
						  if(($res1==0)||($reu1==0)){echo "zero%";}
						  else {$pour=floor(($reu1*100)/$res1);
						  echo $pour . "%";}
						 ?>
				</td>
			</tr>
				
			<tr><td><a href="logout.php">logout</a></td></tr>
		</table>
	</body>
</html>